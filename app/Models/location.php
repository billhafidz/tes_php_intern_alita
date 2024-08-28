<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class location extends Model
{
    use HasFactory;
    protected $table = 'locations';
    protected $fillable = [
        'code',
        'name'
    ];

    // mendefinisikan relasi satu ke banyak
    public function employees()
    {
        return $this->hasMany(Employee::class, 'location_code', 'code');
    }
}
