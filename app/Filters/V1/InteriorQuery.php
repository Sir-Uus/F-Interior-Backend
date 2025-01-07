<?php

namespace App\Filters\V1;

use App\Filters\ApiFilters;

class CategoryQuery extends  ApiFilters{
  protected $allowedParms = [
    'categoryId' => ['eq'],
    'name' => ['eq'],
    'type' => ['eq'],
    'description' => ['eq'],
    'price' => ['eq', 'gt', 'lt', 'lte', 'gte'],

  ];

  protected $columnMap = [
    'categoryId' => 'category_id',
  ];

  protected $operatorMap = [
    'eq' => '=',
    'lt' => '<',
    'gt' => '>',
    'lte' => '<=',
    'gte' => '>=',
    'ne' => '!=',
  ];
}