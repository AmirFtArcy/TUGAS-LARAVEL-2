<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;
    
    protected $table ='cutomers';
    protected $primarykey='id';
    protected $keyType='integer';
    protected $fillable=[
        'id',
        'name',
        'addres',
        'addres',
        'gender',
    ];
}
