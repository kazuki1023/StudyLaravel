<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Builder;

use Illuminate\Database\Eloquent\Model;
use App\Scopes\ScopePerson;

class Person extends Model
{
    use HasFactory;

    public function getData() {
        return $this->id . ': ' . $this->name . '(' . $this->age . ')' ;
    }

    // scope
    public function scopeNameEqual($query, $str) {
        return $query->where('name', $str);
    }

        // // 引数等しい、大きいものに絞り込むもの
    public function scopeAgeGreaterThan($query, $n) {
        return $query->where('age', '>=', $n);
    }

    // // 引数小さいものに絞り込むもの
    public function scopeAgeLessThan($query, $n) {
        return $query->where('age', '<=', $n);
    }

    protected static function boot() {
        parent::boot();
        static::addGlobalScope(new ScopePerson);
    }

}

