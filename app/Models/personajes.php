<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class personajes extends Model
{
    use HasFactory;
    protected $table = 'characters';
    protected $keyType = 'string';
    protected $primaryKey = 'account_name';
    protected $fillable = ['account_name','obj_Id','char_name','level','maxHp','maxCp','maxMp','exp','sp','pvpkills','pkkills','clanid','race','classid'];

    public function clanes()
    {
        return $this->hasOne(clan::class,'clan_id','clanid');
    }
    public function items()
    {
        return $this->hasMany(items::class,'object_id','obj_id');
    }
}
