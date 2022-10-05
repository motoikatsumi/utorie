<?php

namespace App;

use Illuminate\Support\Facades\Storage;
use InvalidArgumentException;

class FileManage
{
    private $_driver;
    private $_nameFile;
    private $_dataFile;
    private $_option;
    private $_model;
    private $_mainPath;

    /**
     * FileManage constructor.
     * @param string $nameFile
     * @param null $dataFile
     * @param string $option
     * @param string|null $model
     * @param string $driver
     * @param string $mainPath
     */
    public function __construct(string $nameFile, $dataFile = null, string $model = null, string $option = 'public', $driver = 's3', string $mainPath = "uploads/utorie")
    {
        $this->validate($driver, $nameFile, $model);
        $this->_driver = $driver;
        $this->_nameFile = $nameFile;
        $this->_dataFile = $dataFile;
        $this->_option = $option;
        $this->_model = $model;
        $this->_mainPath = $mainPath;
    }

    /**
     * @return string
     */
    public function upload($isVideo = false): string
    {
        if ($driver = 's3') {
            $fileName = $isVideo === true 
                            ? Storage::disk($this->_driver)->putFileAs($this->_mainPath, $this->_dataFile, $this->_nameFile, $this->_option) 
                            : Storage::disk($this->_driver)->put($this->_mainPath, $this->_dataFile, $this->_option);
        } else {
            $fileName = $isVideo === true 
                            ? Storage::disk($this->_driver)->putFileAs($this->_mainPath, $this->_dataFile, $this->_nameFile, $this->_option) 
                            : Storage::disk($this->_driver)->put($this->_mainPath . $this->_nameFile, $this->_dataFile);
        }

        return $fileName;
    }

    /**
     * @param array $data
     * @param string $rowUpload
     * @param null $getCreateData
     * @param null $addName
     * @param bool $isVideo
     * @return array
     * @noinspection PhpUndefinedMethodInspection
     */
    public function uploadAndCreate(array $data, string $rowUpload, $getCreateData = null, $addName = null, $isVideo = false): array
    {
        if ($this->_driver === 's3' && !empty($addName)) {
            $fileName = $isVideo === true ? Storage::disk($this->_driver)->putFileAs($this->_mainPath . "/" . date('m-Y') . '/' . $this->_nameFile, $this->_dataFile, $this->_nameFile, $this->_option) : Storage::disk($this->_driver)->put($this->_mainPath . "/" . date('m-Y') . '/' . $this->_nameFile, $this->_dataFile, $this->_option);
        } else if ($this->_driver === 's3' && empty($addName)) {
            $fileName = $isVideo === true ? Storage::disk($this->_driver)->putFileAs($this->_mainPath . "/" . date('m-Y'), $this->_dataFile, $this->_nameFile, $this->_option) : Storage::disk($this->_driver)->put($this->_mainPath . "/" . date('m-Y'), $this->_dataFile, $this->_option);
        } else {
            $fileName = Storage::disk($this->_driver)->put($this->_mainPath . $this->_nameFile, $this->_dataFile);
        }

        $data[$rowUpload] = $fileName;
        $fileCreate = $this->_model::create($data);
        if ($getCreateData !== null) {
            return [
                $fileCreate->_id,
                $data,
            ];
        }

        return $data[$rowUpload];
    }

    /**
     * @return string
     */
    public function show(): string
    {
        return Storage::disk($this->_driver)->url($this->_nameFile);
    }

    /**
     * @return bool
     */
    public function destroy()
    {
        Storage::disk($this->_driver)->delete($this->_nameFile);
        return true;
    }

    private function validate($driver, $nameFile, $model)
    {

        $service = [
            's3', 'public', 'local', 'ftp', 'sftp', 'dropbox', env('FILESYSTEM_CLOUD'),
        ];
        $message = "";
        if (empty($driver)) {
            $message .= " Driver not empty,";
        } else if (array_search($driver, $service) === false) {
            $message .= " Driver not found,";
        }

        if (empty($nameFile)) {
            $message .= " Name file not empty,";
        }

        if (!is_subclass_of($model, 'Illuminate\Database\Eloquent\Model') && !is_subclass_of($model, 'Jenssegers\Mongodb\Eloquent\Model') && $model !== null) {
            $message .= " Model not found,";
        }
        if (!empty($message)) {
            throw new InvalidArgumentException(substr($message, 0, -1));
        }
    }
}
