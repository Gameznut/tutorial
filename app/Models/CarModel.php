<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    use HasFactory;

    protected $table = 'cars';

    protected $primarykey = 'id';

    // protected $timestamps = true;

    protected $fillable = [
        'name',
        'founded',
        'description'
    ];

    public function car(){
        return $this -> belongsTo(Car::class);
    }
}
