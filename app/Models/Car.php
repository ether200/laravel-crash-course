<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    // protected $table = 'cars';
    // protected $primaryKey = 'name';
    // protected $timestamps = true;
    // protected $dateFormat = 'h:m:s';

    // In order to use the create method, you need to make a fillable array of tables you can FILL
    protected $fillable = ['name', 'founded', 'description'];
}
