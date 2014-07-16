<?php

class ComSocialmediaTemplateHelperParser extends KTemplateHelperAbstract
{

    public function facebook($config = array())
    {
        $config = new KConfig($config);

        $feed = $config->feed;
        $config->text = $feed->title;

        if (!$feed) {
            return '';
        }

        preg_match_all("/https?\:\/\/[^\" ]+/i", $feed->title, $result);

        foreach($result as $string) {
            if(isset($string[0])) {
                $config->text = str_replace($string[0], '<a href="'.$string[0].'" target="_blank">'.$string[0].'</a>', $config->text);
            }
        }

        return $config->text;
    }

    public function url($config = array())
    {
        $config = new KConfig($config);
        $config->append(array(
            'text' => ''
        ));

        preg_match_all("/https?\:\/\/[^\" ]+/i", $config->text, $result);

        foreach($result as $string) {
            if(isset($string[0])) {
                $config->text = str_replace($string[0], '<a href="'.$string[0].'" target="_blank">'.$string[0].'</a>', $config->text);
            }
        }

        return $config->text;
    }
}