<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Stuffs;
use Illuminate\Database\Eloquent\Relation\HasMany;


class category extends Model
{
    use HasFactory;
    protected $table ='categories';
    protected $primarykey='id';
    protected $keyType='string';
    protected $fillable=[
        'id',
        'name',
        'status',
    ];
    public function stuff()
    {
        return $this->hasMany(Stuff::class,'id_stuff','id');
    }
}
