<?php


namespace App\Repositories;


use App\Interfaces\RepositoryInterface;
use App\Extra\Code\CodePattern;
use App\Models\Image;
abstract class BaseRepo implements RepositoryInterface
{
    /**
     * @var \Main\Eloquent\Model
     */
    protected $model;
    static private $defaultValues;

    /**
     * AppRepository constructor.
     */

    public function __construct()
    {
        $this->makeModel();
    }

    /**
     * get model
     * @return mixed
     */
    abstract public function model();

    /**
     * Set model
     */
    public function makeModel()
    {
        $model = (string) $this->model();
        if (!app()->make($model)) {
            app()->singleton($model, function () use ($model) {
                return new $model;
            });
        }
        $this->model = app()->make($model);
    }

    /**
     * If missing any method for repository
     * it's will be call with default
     * @param string $method
     * @param array $args
     * 
     * @return QueryBuilder
     */
    public function __call($method, $args)
    {
        return $this->model->$method(...$args);
    }

    /**
     * Get All
     *
     * @param array $columns
     * @return mixed
     */
    public function all($columns = ['*'])
    {
        return $this->model->all($columns);
    }

    /**
     * Lists
     *
     * @param $column
     * @param null $key
     * @return mixed
     */
    public function lists($column, $key = null)
    {
        return $this->model->pluck($column, $key);
    }

    /**
     * Paginate
     *
     * @param null $limit
     * @param array $columns
     * @return mixed
     */
    public function paginate($limit = null, $columns = ['*'])
    {
        $limit = is_null($limit) ? config('settings.paginate') : $limit;
        return $this->model->paginate($limit, $columns);
    }

    /**
     * Find
     *
     * @param $id
     * @param array $column
     * @return mixed
     */
    public function find($id, $column = ['*'])
    {
        return $this->model->find($id, $column);
    }

    public function findOrFail($id, $column = ['*'])
    {
        return $this->model->findOrFail($id, $column);
    }

    /**
     * Find
     *
     * @param $id
     * @param array $column
     * @return mixed
     */
    public function first()
    {
        return $this->model->first();
    }

    /**
     * Where
     *
     * @param $condition
     * @param null $operator
     * @param null $value
     * @return mixed
     */
    public function where($condition, $operator = null, $value = null)
    {
        return $this->model->where($condition, $operator, $value);
    }

    /**
     * Or where
     *
     * @param $column
     * @param null $operator
     * @param null $value
     * @return mixed
     */
    public function orWhere($column, $operator = null, $value = null)
    {
        return $this->model->orWhere($column, $operator, $value);
    }

    /**
     * Create
     *
     * @param $input
     * @return mixed
     */
    public function firstOrCreate($input = [])
    {
        return $this->model->firstOrCreate($input);
    }

    /**
     * Insert
     *
     * @param $input
     * @return mixed
     */
    public function insert($input)
    {
        return $this->model->insert($input);
    }

    /**
     * Insert
     *
     * @param $input
     * @return mixed
     */
    public function create(array $input)
    {
        return $this->model->create($input);
    }

    /**
     * @param $id
     * @param $input
     * @return mixed
     */
    public function update($id, $input)
    {
        $result = $this->model->find($id);
        if ($result) {
            $result->update($input);
            return $result;
        }

        return false;
    }

    /**
     * Update or create
     *
     * @param $input
     * @param $id
     * @return mixed
     */

    public function updateOrCreate($id, $input)
    {
        $result = $this->model->find($id);
        if ($result) {
            $result->update($input);
            return $result;
        } else {
            $result = $this->model->updateOrCreate($input);
            return $result;
        }
        return false;
    }

    /**
     * Multi Update
     *
     * @param $column
     * @param $value
     * @param $input
     * @return mixed
     */
    public function multiUpdate($id, $array_of_ids, $fields)
    {
        // $array_of_ids = is_array($array_of_ids) ? $array_of_ids : [$array_of_ids];
        return $this->model->whereIn($id, $array_of_ids)->update($fields);
    }


    /**
     * Delete
     *
     * @param $ids
     * @return mixed
     */
    public function delete($ids)
    {
        if (empty($ids)) {
            return true;
        }
        $ids = is_array($ids) ? $ids : [$ids];

        return $this->model->destroy($ids);
    }

    /**
     * Soft Delete
     *
     * @param $ids
     * @return mixed
     */
    public function softDelete($name, $ids, $input)
    {
        if (empty($ids)) {
            return true;
        }
        $ids = is_array($ids) ? $ids : [$ids];

        $this->multiUpdate($name, $ids, $input);

        //return $this->model->destroy($ids);
    }

    // /**
    //  * @param $relations
    //  * @return mixed
    //  */
    // public function with($relations)
    // {
    //     return $this->model->with($relations);
    // }
    
    public function with($relations)
    {
        return static::query()->with(
            is_string($relations) ? func_get_args() : $relations
        );
    }

    /**
     * Order by
     *
     * @param $column
     * @param string $direction
     * @return mixed
     */
    public function orderBy($column, $direction = 'asc')
    {
        return $this->model->orderBy($column, $direction);
    }

    /**
     * With count
     *
     * @param $relation
     * @return mixed
     */
    public function withCount($relation)
    {
        return $this->model->withCount($relation);
    }

    /**
     * Select
     *
     * @param array $columns
     * @return mixed
     */
    public function select($columns = ['*'])
    {
        return $this->model->select($columns);
    }

    /**
     * Load relation with closure
     *
     * @param $relation
     * @param $closure
     * @return mixed
     */
    public function whereHas($relation, $closure)
    {
        return $this->model->whereHas($relation, $closure);
    }

    /**
     * where in
     *
     * @param $column
     * @param array $values
     *
     * @return $this
     */
    public function whereIn($column, array $values)
    {
        $values = is_array($values) ? $values : [$values];
        return $this->model->whereIn($column, $values);
    }

    /**
     * where not in
     *
     * @param $column
     * @param array $values
     *
     * @return $this
     */
    public function whereNotIn($column, array $values)
    {
        $values = is_array($values) ? $values : [$values];
        return $this->model->whereNotIn($column, $values);
    }

    /**
     * @param string $relation
     * @return $this
     */
    public function has($relation)
    {
        return $this->model->with($relation);
    }

    /**
     * Join with other take
     * @param string $table
     * @param string $columnTableA
     * @param string $condition
     * @param string $columnTableB
     *
     * @return $this
     */
    public function join($table, $columnTableA = null, $condition = null, $columnTableB = null)
    {
        return $this->model->join($table, $columnTableA, $condition, $columnTableB);
    }

    /**
     * When function check condition to execute query
     * @param string $condition
     * @param Closure $callback
     * @param Closure $default
     *
     * @return $this
     */
    public function when($condition, $callback, $default = null)
    {
        return $this->model->when($condition, $callback, $default);
    }

    /**
     * Update
     * @param $id
     * @param array $attributes
     * @return bool|mixed
     */
    public function filter($args)
    {
        return $oQuery = $this->_model->filter($args);
    }

    //get by option
    public function getByOption($options = [], $queryBuilder = null) {
        

        if (!empty($queryBuilder)) {
            $queryBuilder = $this->model->select('*');
        }

        if (!empty($options['orderBy'])) {
            $queryBuilder->orderBy($options['orderBy']['column'], $options['orderBy']['type']);
        } else {
            $queryBuilder->orderBy('id', 'desc');
        }

        if (!empty($options['exists'])) {
            return $queryBuilder->exists();
        }
        if (!empty($options['first'])) {            
            return $this->model->first();
        }
        if (!empty($options['pageSize'])) {
            return $queryBuilder->paginate($options['pageSize']);
        }
        if (!empty($options['firstOrFail'])) {
            return $queryBuilder->firstOrFail();
        }
       
        return $queryBuilder->get();
    }    

    //
    public function replaceFields($insertFields, $whereFields, $fieldNames = []){
		//Delete old Data
		$delete_query = $this->model->where($whereFields);
		foreach ($fieldNames as $key => $val) {
			if (!isset($val)) {
				continue;
			}
			$delete_query->whereIn($key, $val);
		}
		$delete_query->delete();

		//Insert new Data
		$this->model->insert($insertFields);
    }
    

    public function registDefault($enums, $defaultValues) {
		//call model
		$theModal = $this->model;

		//get all value
		$defaults = $defaultValues::valueOf();        
		//run fill data
		foreach ($defaults as $default) {
			$data = $theModal->find($default['code']);
			
			//fill data in the case of empty db
			if (empty($data)) {
				$insertFields = [];
				$insertFields[$enums::CODE] = $default['code'];
				$insertFields[$enums::NAME] = $default['value'];
				$insertFields[$enums::SEARCH_TEXT] = $default['value2'];
				$insertFields[$enums::URL_TEXT] = $default['value3'];
				$insertFields = $theModal->insert($insertFields);				
			}
		}
	}

    public function upImage(array $input, $destinationPath, $type, $relation_id, $main){
        
        foreach ($input as $files) {
            $this->image = new Image();
            $file_name = time() . rand(0,9999). "_" . $files->getClientOriginalName();
            $files->move(public_path().$destinationPath, $file_name);
            $this->image->type = $type;
            $this->image->relation_id = $relation_id;
            $this->image->image_path = $destinationPath.$file_name;
            $this->image->main = $main;
            $this->image->save();
        }
    }

}
