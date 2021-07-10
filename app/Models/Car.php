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
    
    //protected $hidden = ['id']; // props you do not want to show;

    //protected $visible = ['show'] // props you want to SHOW

    // In order to use the create method, you need to make a fillable array of tables you can FILL
    protected $fillable = ['name', 'founded', 'description', 'image_path'];

    # One to many relationship, a car can have many models
    public function carModels() {
        return $this->hasMany(CarModel::class);
    }

    # Define a has many thru relationship
    public function engines()
    {
        # 2nd argument is the intermediate model aka the one we use to access engine
        # 3rd and 4th are FOREIGN keys
        return $this->hasManyThrough(Engine::class, CarModel::class, 'car_id', 'model_id');
    }

    # Define a has one thru relationship
    public function productionDate()
    {
        return $this->hasOneThrough(CarProductionDate::class, CarModel::class, 'car_id', 'model_id');
    }

    # Define a many to many relationship
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

}
