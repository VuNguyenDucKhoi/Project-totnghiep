<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chuyen extends Model
{
    use HasFactory;
    protected $fillable = [
        'tenchuyen',
        'idtuyen',
        'idtau',
        'time',
        'content',
        'description',
        'thumb',
        'gia',
        'loai',
        'active'
    ];

    public function taus(){
        return $this->hasOne(Tau::class, 'id', 'idtau')->withDefault(['name'=>'']);
    }
    public function tuyens(){
        return $this->hasOne(Tuyen::class, 'id', 'idtuyen')->withDefault(['name'=>'']);
    }

}
