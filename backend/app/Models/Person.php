<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Person extends Model
{
    use HasFactory;
    public function scopegetPerson()
    {   
        $query = self::select([
            'name',
            'mail',
            'age',])
            ->get();
        return $query;
    }

}
