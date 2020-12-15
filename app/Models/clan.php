<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clan extends Model
{
    use HasFactory;

    protected $table = 'clan_data';
    protected $fillable = ['clan_id','clan_name','clan_level'];
}
