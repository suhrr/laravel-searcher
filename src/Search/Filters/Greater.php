<?php

namespace Suhrr\LaravelSearcher\Search\Filters;

use Suhrr\LaravelSearcher\Search\FilterInterface;
use Illuminate\Database\Eloquent\Builder;

class Greater implements FilterInterface
{
    /** @var string */
    private static $operator = '>';

    public static function apply(Builder $builder, string $column, $value): Builder
    {
        return $builder->where($column, self::$operator, $value);
    }
}
