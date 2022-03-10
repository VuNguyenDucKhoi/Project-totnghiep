<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'phone',
        'country',
        'address',
        'email',
        'notes'
    ];
    public function pays(){
        return $this->hasMany(Invoice::class, 'customer_id', 'id');
    }
}
