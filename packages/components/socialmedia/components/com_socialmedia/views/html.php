<?php

class ComSocialmediaViewHtml extends KViewHtml
{
    public function display()
    {
        $this->assign($this->getName(), $this->getModel()->getList());

        return parent::display();
    }
}