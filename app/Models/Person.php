<?php

namespace App\Models;

use App\Models\Scopes\ScopePerson;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Person extends Model
{
    protected $guarded = array('id'); // 値を用意しておかない項目を指定する

    public static $rules = array(
        'name' => 'required',
        'mail' => 'email',
        'age' => 'integer|min:0|max:150'
    );

    public function getData()
    {
        return $this->id . ': ' . $this->name . ' (' . $this->age . ')';
    }

    public function board()
    {
        return $this->hasOne('App\Models\Board');
        // dd($this->hasOne('App\Models\Board'));
    }
}
