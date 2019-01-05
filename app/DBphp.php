<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DBphp extends Model
{
    protected $table = 'staff';
    protected $fillable = [
        'fname', 'lastname','position','create_date','update_date',
    ];
    public $timestamps = false;
    public $incrementing = false;
}
