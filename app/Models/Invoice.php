<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'product_id',
        'pty',
        'gia',
        'date',
    ];
    public function customers(){
        return $this->hasOne(Customer::class, 'id', 'customer_id')->withDefault(['name'=>'']);
    }
    public function chuyens(){
        return $this->hasOne(Chuyen::class, 'id', 'product_id')->withDefault(['name'=>'s']);
    }

}
