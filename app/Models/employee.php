<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;
    protected $table = 'employees';
    protected $fillable = [
        'name',
        'location_code',
        'birth_date'
    ];

    // mendefinisikan relasi banyak ke satu
    public function location() 
    {
        return $this->belongsTo(Location::class, 'location_code', 'code');
    }
}
