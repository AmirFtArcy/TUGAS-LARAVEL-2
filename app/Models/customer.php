<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;
    
    protected $table ='customers';
    protected $primarykey='id';
    protected $keyType='string';
    protected $fillable=[
        'id',
        'name',
        'addres',
        'status',
        'gender',
    ];
}
