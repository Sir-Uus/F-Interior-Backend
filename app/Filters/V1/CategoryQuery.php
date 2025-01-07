<?php

namespace App\Filters\V1;

use App\Filters\ApiFilters;

class CategoryQuery extends  ApiFilters{
  protected $allowedParms = [
    'name' => ['eq']
  ];

  protected $operatorMap = [
    'eq' => '=',
  ];
}