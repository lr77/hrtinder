<?php

namespace app\models;

use hrtinder\App;

class Occupation extends AppModel
{
    public function getIds($id)
    {
        $occupations = App::$app->getProperty('occupations');
        $ids = null;
        foreach ($occupations as $k => $v) {
            if ($v['parent_id'] == $id) {
                $ids .= $k . ',';
                $ids .= $this->getIds($k);
            }
        }
        return $ids;
    }
}
