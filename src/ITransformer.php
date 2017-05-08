<?php
/**
 * Created by PhpStorm.
 * User: hundredlee
 * Date: 2017/4/13
 * Time: 下午12:07
 */

namespace HundredLee;


interface ITransformer
{
    public static function transform($modelOrCollection);
}