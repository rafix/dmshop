<?php

/**
 * DmPermissionTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class DmPermissionTable extends PluginDmPermissionTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object DmPermissionTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('DmPermission');
    }
}