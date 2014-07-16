<?php

echo KService::get('mod://site/socialmedia.html')
    ->module($module)
    ->attribs($attribs)
    ->display();