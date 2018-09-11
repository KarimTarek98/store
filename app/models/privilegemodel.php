<?php
namespace PHPMVC\Models;
class PrivilegeModel extends AbstractModel
{
    public  $PrivilegeId ,
            $Privilege,
            $PrivilegeTitle;
    protected static $tableName = 'app_users_privileges';

    protected static $tableSchema = array(
        'PrivilegeId'        => self::DATA_TYPE_INT,
        'Privilege'          => self::DATA_TYPE_STR,
        'PrivilegeTitle'     => self::DATA_TYPE_STR   
    );
    protected static $primaryKey = 'PrivilegeId';    // we'll use this for updating clause
}