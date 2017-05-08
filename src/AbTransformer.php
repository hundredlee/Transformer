<?php
/**
 * Created by PhpStorm.
 * User: hundredlee
 * Date: 2017/4/16
 * Time: 下午6:06
 */

namespace HundredLee;


use function foo\func;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

abstract class AbTransformer implements ITransformer
{
    public static function transform($modelOrCollection)
    {
        $static = new static();

        if (is_array($modelOrCollection)) {
            return collect($modelOrCollection)->map([$static,'transformModel'])->toArray();
        }

        if ($modelOrCollection instanceof Collection) {
            return $modelOrCollection->map([$static,'transformModel'])->toArray();
        }

        return $static->transformModel($modelOrCollection);
    }

    public function transformModel(Model $modelOrCollection)
    {

    }

}