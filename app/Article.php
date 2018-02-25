<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Article
 * @package App
 *
 * @property int id
 * @property int author_id
 * @property string title
 * @property string slug
 * @property string body
 * @property Carbon created_at
 * @property Carbon updated_at
 */
class Article extends Model
{
    protected $table = 'articles';

    public function Author(){
        $this->belongsTo(User::class, 'author_id', 'id');
    }
}
