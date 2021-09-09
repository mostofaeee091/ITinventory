<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gatepass extends Model
{
    use HasFactory;
    protected $table = 'gatepasses';
    protected $fillable = [
        'gatepassNo',
        'destination',
        'dateTime',
        'attention',
        'carrierName',
        'designation',
        'employeeId',
        'preparedBy',
        'receivedBy',
        'authorizedBy'
    ];

    public  function product(){
       return $this->hasOne('App\Models\Product','gatepassID','id');
       // return $this->hasOne(Product::class,'gatepassID');
    }
}
