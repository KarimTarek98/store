<?php
namespace PHPMVC\Models;
class UserModel extends AbstractModel
{
    public  $UserId ,
            $Username ,
            $Password ,
            $Email ,
            $PhoneNumber ,
            $SubscriptionDate,
            $LastLogin,
            $GroupId;
    protected static $tableName = 'app_users';

    protected static $tableSchema = array(
        'UserId'            => self::DATA_TYPE_INT,
        'Username'          => self::DATA_TYPE_STR,
        'Password'          => self::DATA_TYPE_STR,
        'Email'             => self::DATA_TYPE_STR,
        'PhoneNumber'       => self::DATA_TYPE_STR,
        'SubscriptionDate'  => self::DATA_TYPE_DATE,
        'LastLogin'         => self::DATA_TYPE_STR,
        'GroupId'           => self::DATA_TYPE_INT
    );
    protected static $primaryKey = 'UserId';    // we'll use this for updating clause
}