<?php
namespace PHPMVC\Models;
class EmployeeModel extends AbstractModel
{
    public $id , $name , $age , $address ,$salary , $tax;
    protected static $tableName = 'employees';

    protected static $tableSchema = array(
        'name'      => self::DATA_TYPE_STR,
        'age'       => self::DATA_TYPE_INT,
        'address'   => self::DATA_TYPE_STR,
        'tax'       => self::DATA_TYPE_DECIMAL,
        'salary'    => self::DATA_TYPE_DECIMAL
    );
    protected static $primaryKey = 'id';    // we'll use this for updating clause

    // get table name function
    public function getTableName()
    {
        return self::$tableName;
    }
}