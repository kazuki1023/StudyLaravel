<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    public function getData() {
        return $this->id . ': ' . $this->name . '(' . $this->age . ')' ;
    }
}
