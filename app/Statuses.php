<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statuses extends Model
{

    protected $fillable = ['body'];

    public function user(){
        return $this->belongsTo(User::class)
        ->select(['id', 'name']);
    }
}
