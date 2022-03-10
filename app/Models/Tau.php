<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Tau extends Model
{
    use HasFactory;

    public function getTauData(){
        $value=DB::table('taus')->get();
        return $value;
    }
    protected $fillable = [
        'tentau',
        'soghe',
        'active'
    ];

}
