<?php

use Illuminate\Database\Eloquent\Model;
use Jedrzej\Searchable\SearchableTrait;

class TestModel extends Model
{
    use SearchableTrait;

    protected $searchable = [];

    protected function newBaseQueryBuilder()
    {
        return new TestBuilder;
    }
}