<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Relation\HasMany;



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
    public function transaction()
    {
        return $this->hasMany(Transaction::class,'id_customer','id');
    }
}
