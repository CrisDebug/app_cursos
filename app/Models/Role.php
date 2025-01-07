<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    
    //estableciendo relacion con roles con Users 
    //relacion de muchos a muchos
    public function users()
    {
        return $this->belongsToMany(User::class,'role_user');
    }
    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }
}
