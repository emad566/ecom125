<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\Controller;
use ReflectionClass;

class TypeConstant extends Controller
{

    static function getConstants() {
        $oClass = new ReflectionClass(__CLASS__);
        return $oClass->getConstants();
    }
}
