<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\grieviance;
use App\Models\user;

class grieviance extends Model
{
    use HasFactory;
    protected $fillable = ['title'];

    public static function get_grieviance()
    { 
        //$download = session::get('download_list');
        $records = session::get('download_list');
        return $records;
    }
}
 