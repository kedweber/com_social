<?php

class ComSocialmediaModelDefault extends KModelAbstract
{
    public function getRowset(array $options = array())
    {
        $identifier         = clone $this->getIdentifier();
        $identifier->path   = array('database', 'rowset');

        return $this->getService($identifier, $options);
    }
}