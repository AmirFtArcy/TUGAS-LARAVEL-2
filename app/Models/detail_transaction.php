<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_transaction extends Model
{
    use HasFactory;
    protected $table ='detail_transaction';
    protected $primarykey='id';
    protected $keyType='string';
    protected $fillable=[
        'id',
        'nota',
        'id_stuff',
        'count',
        'price',
        'discount',
      
        
    ];
}
