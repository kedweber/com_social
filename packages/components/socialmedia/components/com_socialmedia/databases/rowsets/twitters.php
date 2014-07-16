<?php

class ComSocialmediaDatabaseRowsetTwitters extends KDatabaseRowsetAbstract
{
    public function __construct(KConfig $config)
    {
        $config->append(array(
            'identitiy_columns' => 'id'
        ));

        parent::__construct($config);
    }
}