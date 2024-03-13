<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relation\HasOne;
use Illuminate\Database\Eloquent\Relation\HasMany;

class stuff extends Model
{
    use HasFactory;
    
    protected $table ='stuffs';
    protected $primarykey='id';
    protected $keyType='string';
    protected $fillable=[
        'id',
        'name',
        'price',
        'unit',
        'status',
        'id_category',
    ];
    function category()
    {
       return $this->HasOne(Category::class,'id','id_category');
    }
    function detail()
    {
       return $this->HasMany(detail_transaction::class,'id_stuff','id');
    }

}
