<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //fillable example
    //protected $fillable = ['name' , 'email' , 'active'];
    // guarded example
    protected $guarded =  [];

    //defining active scope/where clause

    public function scopeActive($query){
        return $query->where('active'  , 1);
    }

    public function scopeInactive($query){
        return $query->where('active'  , 0);
    }

    //belongs to a company

    public function Company(){
        return $this->belongsTo(Company::class);
    }

    // //intercepting meaning of o and 1
    // public function getActiveAttributes($attributes){
    //     return [
    //         0 => "Inactive" ,
    //         1 => "active",
    //     ][$attributes];
    // }
}
