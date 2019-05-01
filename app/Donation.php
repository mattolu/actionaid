<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    //
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'frequency', 'amount', 'user_id'
    ];
public function userr(){
    return $this->belongsTo(User::class);
}
}
