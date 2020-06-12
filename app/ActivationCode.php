<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class ActivationCode extends Model
{
    protected $fillable = ['code'];
    
    public function User()
    {
        return $this->belongsTo(User::class,'users_id');
    } 

    public function getRouteKeyName()
    {
        return 'code';
    }
}
