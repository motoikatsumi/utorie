<?php

namespace App\Traits;

trait FilterTrait {

    /**
     * add filtering.
     *
     * @param  $builder: query builder.
     * @param  $filters: array of filters.
     * @return query builder.
     */
    public function scopeFilter($builder, $filters = [])
    {
        if(!$filters) {
            return $builder;
        }
        
        $filters = array_filter($filters,function($v){
            return $v !== false && !is_null($v) && ($v != '' || $v == '0');
        });
        $tableName = $this->getTable();

        $defaultFillableFields = $this->fillable;
        foreach ($filters as $field => $value) {
            if($this->boolFilterFields!=null && in_array($field, $this->boolFilterFields) && $value != null) {
                $builder->where($field, (bool)$value);
                continue;
            }
            if($this->intFilterFields!=null && in_array($field, $this->intFilterFields) && $value != null) {
                $builder->where($field, (int)$value);
                continue;
            }
            if($this->likeFilterFields!=null && in_array($field, $this->likeFilterFields) && $value != null) {
                $builder->where($tableName.'.'.$field, 'LIKE', "%$value%");
                continue;
            } 
            if($this->arrayFilterFields!=null && in_array($field, $this->arrayFilterFields) && $value != null) {
                $builder->whereIn($field,(array)$value);
                continue;
            }
            if($this->betweenFilterFields!=null && in_array($field, $this->betweenFilterFields) && $value[0] != null && $value[1] != null) {
                $builder->whereBetween($field,(array)$value);
                continue;
            }
        }
        return $builder;
    }
}