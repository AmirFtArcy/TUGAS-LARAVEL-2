<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Stuff;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Relation\HasMany;



class detail_transaction extends Model
{
    use HasFactory;
    protected $table ='detail_transaction';
    protected $primarykey='id';
    protected $keyType='intgeger';
    protected $fillable=[
        'id',
        'nota',
        'id_stuff',
        'count',
        'price',
        'discount',
      
        
    ];
    public function stuff()
    {
        return $this->hasMany(Stuff::class,'id','id_stuff');
    }

    public function transaction()
    {
        return $this->hasMany(Transaction::class,'nota','nota');
    }
}
