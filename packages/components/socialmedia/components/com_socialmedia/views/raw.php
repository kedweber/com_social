<?php

class ComSocialmediaViewRaw extends KViewHtml
{
    public function display()
    {
        $this->assign($this->getName(), $this->getModel()->getList());

        return parent::display();
    }
}