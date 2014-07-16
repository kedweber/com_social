<?php

class ComSocialmediaDatabaseRowsetFacebooks extends KDatabaseRowsetAbstract
{
    public function __construct(KConfig $config)
    {
        $config->append(array(
            'identitiy_columns' => 'link'
        ));

        parent::__construct($config);
    }
}