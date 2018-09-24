<?php
namespace PHPMVC\Models;
class UserGroupPrivilegeModel extends AbstractModel
{
    public  $Id ,
            $GroupId ,
            $PrivilegeId;
    protected static $tableName = 'app_users_groups_privileges';

    protected static $tableSchema = array(
        'GroupId'            => self::DATA_TYPE_INT,
        'PrivilegeId'        => self::DATA_TYPE_INT
    );
    protected static $primaryKey = 'Id';    // we'll use this for updating clause
    public static function getGroupPrivileges(UserGroupModel $group)
    {
        $groupPrivileges = self::getBy(['GroupId' => $group->GroupId]);
        $extractedPrivilegesIds = [];
        if (false !== $groupPrivileges)
        {
            foreach ($groupPrivileges as  $groupPrivilege)
            {
                $extractedPrivilegesIds[] = $groupPrivilege->PrivilegeId;
            }
        }
        return $extractedPrivilegesIds;
    }
}