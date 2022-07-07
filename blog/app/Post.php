<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
 /**
 * 特定IDのpostを表示する
 *
 * @params Object Post // 引数の$postはid=1のPostインスタンス
 * @return Reposnse post view
 */
public function getPaginateByLimit(int $limit_count = 11)
{
    return $this->orderBy('created_at', 'DESC')->paginate($limit_count);
}

}
