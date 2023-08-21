<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['document', 'name', 'birthday', 'gender', 'address', 'state', 'city'];
    use HasFactory;
}
