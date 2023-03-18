<?php
namespace App\Scopes;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Database\Eloquent\Model;

class ScopePerson implements Scope {
  use HasFactory;

  public function apply(Builder $builder, Model $model) {
    $builder->where('age', '>', 18);
  }
}