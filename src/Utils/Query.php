<?php

namespace Sofar\Aade\Utils;

/*
*  'mark' => null,
*  'entityVatNumber' => null,
*  'dateFrom'  => null,
*  'dateTo' => null,
*  'receiverVatNumber' => null,
*  'invType' => null,
*  'maxMark' => null,
*  'nextPartitionKey' => null,
*  'nextRowKey' => null,
*/

class Query
{
    /**
     * The model being queried.
     *
     */
    protected $model;

    /**
     * The where constraints for the query.
     *
     * @var array
     */
    public $wheres = [];

    public function where($column, $value = null)
    {
        // If the column is an array, we will assume it is an array of key-value pairs
        // and can add them each as a where clause. We will maintain the boolean we
        // received when the method was called and pass it into the nested where.
        if (is_array($column)) {
            $this->addArrayOfWheres($column);
        } else {
            $this->wheres[$column] = $value;
        }

        return $this;
    }

    /**
     * Add an array of where clauses to the query.
     *
     * @param  array  $column
     * @param  string  $boolean
     * @param  string  $method
     * @return $this
     */
    protected function addArrayOfWheres($column, $method = 'where')
    {
        foreach ($column as $key => $value) {
            $this->{$method}($key, $value);
        }
    }

    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Dynamically handle calls into the query instance.
     *
     * @param  string  $method
     * @param  array  $parameters
     * @return mixed
     */
    public function __call($method, $parameters)
    {
        if (method_exists($this->model, $method)) {
            return $this->model->{$method}(...$parameters);
        }

        return $this;
    }
}
