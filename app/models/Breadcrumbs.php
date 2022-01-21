<?php

namespace app\models;

use hrtinder\App;

class Breadcrumbs extends AppModel
{
    
    public static function getResumeBreadcrumbs($occupation_id, $name = '')
    {
        $occupations = App::$app->getProperty('occupations');
        $breadcrumbs_array = self::getOccupationsParts($occupations, $occupation_id);
        $breadcrumbs = "<li><a href='" . PATH . "'>Главная</a></li>";
        if($breadcrumbs_array){
            foreach($breadcrumbs_array as $alias => $title){
                $breadcrumbs .= "<li><a href='" . PATH . "/occupation/{$alias}'>{$title}</a></li>";
            }
        }
        if($name){
            $breadcrumbs .= "<li>$name</li>";
        }
        return $breadcrumbs;
    }

    public static function getOccupationsParts($occupations, $occupation_id)
    {
        if (!$occupation_id) return false;
        $breadcrumbs = [];
        foreach ($occupations as $k => $v) {
            if (isset($occupations[$occupation_id])) {
                $breadcrumbs[$occupations[$occupation_id]['alias']] = $occupations[$occupation_id]['title'];
                $occupation_id = $occupations[$occupation_id]['parent_id'];
            } else break;
        }
        return array_reverse($breadcrumbs, true);
    }
}
