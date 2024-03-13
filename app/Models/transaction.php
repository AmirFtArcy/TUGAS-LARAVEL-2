<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    use HasFactory;
    protected $table ='transactions';
    protected $primarykey='nota';
    protected $keyType='string';
    protected $fillable=[
        'id_user',
        'id_customer',
        'date',
        
    ];
}

