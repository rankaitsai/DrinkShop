<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;

class Comment extends Model
{
    protected $table = 'comment';
    public $timestamps = false;

    public function getCommentInfo()
    {
        return [
            'date' => Carbon::now('Asia/Taipei'),
            'stars' => Input::get('stars'),
            'description' => Input::get('description'),
        ];
    }
}
