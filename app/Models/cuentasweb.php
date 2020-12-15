<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cuentasweb extends Model
{
    use HasFactory;

    protected $table = 'cuentasweb';

    protected $fillable = ['user','email','password','ssn'];
}
