<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class items extends Model
{
    use HasFactory;
    protected $table = 'items';
    protected $fillable = ['owner_id','item_id','count','enchant_level','loc','loc_data'];

    public function etc()
    {
        return $this->hasMany(etcitem::class,'item_id','item_id');
    }
    public function armor()
    {
        return $this->hasMany(armor::class,'item_id','item_id');
    }
    public function weapon()
    {
        return $this->hasMany(weapons::class,'item_id','item_id');
    }
    public function armorsets()
    {
        return $this->hasMany(armorset::class,'item_id','item_id');
    }
    public function pj()
    {
        return $this->hasOne(personajes::class,'obj_Id','owner_id');
    }
}
