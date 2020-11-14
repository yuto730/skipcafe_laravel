<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class News extends Model
{
    protected $table = 'news';
    protected $guarded = array('news_id');
    public $timestamp = false;

    public function getNewsData()
    {
        $data = DB::table($this->table)->get();

        return $data;
    }
}
