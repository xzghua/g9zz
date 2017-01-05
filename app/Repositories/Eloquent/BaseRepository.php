<?php
/**
 * Created by PhpStorm.
 * User: ylsc633@gmail.com
 * Date: 16-12-17
 * Time: 上午12:47
 */
namespace App\Repositories\Eloquent;

use App\Exceptions\DataNullException;
use Bosnadev\Repositories\Eloquent\Repository as R;

abstract class BaseRepository extends R {

    public function find($id, $columns = array('*'))
    {
        if (!parent::find($id,$columns)) {
            throw new DataNullException('400000001');
        }

        return parent::find($id, $columns);
    }

}