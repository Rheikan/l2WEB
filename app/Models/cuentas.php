<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cuentas extends Model
{
    use HasFactory;

    protected $table = 'accounts';
    protected $keyType = 'string';
    protected $primaryKey = 'login';
    public $timestamps = false;
    protected $fillable = ['login','serial','email','password'];

    public function chars()
    {
        return $this->hasMany(personajes::class,'account_name','login');
    }
}
