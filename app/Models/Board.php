<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'person_id' => 'required',
        'title' => 'required',
        'message' => 'required',
    );

    public function person()
    {
        return $this->belongsTo('App\Models\Person');
    }

    public function getData()
    {
        $personName = ($this->person) ? $this->person->name : 'Unknown';
        return $this->id . ': ' . $this->title . ' (' . $personName . ')';
    }
}
