<?php
namespace MyApp\Models;
class BaseModel
{
protected static function db(){
    return\MyApp\App::instance()->getDb();
}
}
