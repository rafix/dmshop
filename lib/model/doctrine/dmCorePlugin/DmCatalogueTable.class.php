<?php

/**
 * DmCatalogueTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class DmCatalogueTable extends PluginDmCatalogueTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object DmCatalogueTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('DmCatalogue');
    }
}