<?php

class ComSocialmediaModelTwitters extends ComSocialmediaModelDefault
{
    public function __construct(KConfig $config)
    {
        parent::__construct($config);

        $this->_state
            ->insert('username', 'string')
            ->insert('hashtags', 'string')
            ->insert('limit', 'int');
        ;
    }

    public function getList()
    {
        $state = $this->_state;

        if($state->username && empty($state->hashtags)) {
            $url = 'https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=' . $state->username;
        } else if($state->hashtags && empty($state->username)) {
            $url = 'https://api.twitter.com/1.1/search/tweets.json?q=' . urlencode($state->hashtags) . '&src=hash&utc_offset=' . (2 * 3600);
        } else if($state->hashtags && $state->username) {
            $url = 'https://api.twitter.com/1.1/search/tweets.json?q=' . urlencode('from:' . $state->username . ' ' .$state->hashtags);
        }

		$data = json_decode(
			$this->getService('com://site/oauth.model.oauths')
				->service('twitter')
				->url($url .'&count=' . $state->limit)
				->getItem()
			, true
		);

		if($data['statuses']) {
			$data = $data['statuses'];
		}
        
        foreach($data as $index => $tweet) {
            if($tweet['retweeted_status']) {
                $data[$index]['text'] = $tweet['retweeted_status']['text'];
            }
        }

        return $this->getRowset(array(
			'data' => $data
		));
    }
}