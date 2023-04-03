<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emplyee extends Model
{
    protected $table = 'employees';
    protected $fillable = ['name','address','mobile'];

    use HasFactory;
}
