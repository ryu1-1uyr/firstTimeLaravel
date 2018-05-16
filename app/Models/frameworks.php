<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Frameworks extends Model
{
    protected $table = 'frameworks';

    protected $guarded = array('id');

    public $timestamps = false;

    public function getData()
    {
        $data = DB::table($this->table)->get();

        return $data;
    }
}