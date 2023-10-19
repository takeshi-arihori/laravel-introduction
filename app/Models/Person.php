<?php

namespace App\Models;

use App\Models\Scopes\ScopePerson;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Person extends Model
{
    /**
     * モデルの「起動」メソッド
     */
    protected static function booted(): void
    {
        static::addGlobalScope(new ScopePerson);
    }

    public function getData(): string
    {
        return $this->id . ': ' . $this->name . ' (' . $this->age . ')';
    }

    public function scopeNameEqual($query, $str): Builder
    {
        return $query->where('name', $str);
    }

    public function scopeAgeGreaterThan($query, $n): Builder
    {
        return $query->where('age', '>=', $n);
    }

    public function scopeAgeLessThan($query, $n): Builder
    {
        return $query->where('age', '<=', $n);
    }
}
