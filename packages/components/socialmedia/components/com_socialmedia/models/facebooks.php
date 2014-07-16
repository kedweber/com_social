<?php

class ComSocialmediaModelFacebooks extends ComSocialmediaModelDefault
{
    public function __construct(KConfig $config)
    {
        parent::__construct($config);

        $this->_state->insert('username', 'string');
    }

    public function getList()
    {
        $state = $this->_state;

        if(!is_numeric($state->username))
        {
            $data = json_decode(file_get_contents('http://graph.facebook.com/' . $state->username));
            $state->username = $data->id;
        }

        $row = $this->getService('com://site/rss.database.row.source');
        $row->url = 'https://www.facebook.com/feeds/page.php?format=rss20&id=' . $state->username;

        return $this->getRowset(array(
            'data' => (array) $row->getFeeds(4)
        ));
    }
}