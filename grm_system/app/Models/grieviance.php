<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;



class grieviance extends Model
{
    use HasFactory;
    protected $fillable = ['title'];

    public static function get_grieviance()
    {
        $records = DB::table('grieviances')->select('track','zone','lga','ward','community','beneficiary','name','gender','age','phone','email','desc','category','sub_category','cmode','resolved','rescomment')->get();
        return $records;
    }
}
