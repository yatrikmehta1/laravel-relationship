<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users2 extends Model
{
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
