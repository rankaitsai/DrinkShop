<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class Trace extends Model
{
    protected $table = 'trace';
    public $primaryKey = ['memberId', 'drinkId'];

    public function getTrace()
    {
        return DB::table('trace')
            ->join('member','member.id','=','trace.memberId')
            ->join('drink','drink.id','=','trace.drinkId')
            ->where('member.id','=',Session::get('loginId'))
            ->get();
    }
}
