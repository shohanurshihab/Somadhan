<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teacher_info extends Model
{
    use HasFactory;
    public $timestamps=false;
    //for userdeined primary from id to t_id
    public $primaryKey = 't_id';
}
