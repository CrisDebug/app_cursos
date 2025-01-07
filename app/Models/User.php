<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'email_verified_at',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
    //set hashing
    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    //la relacion es uno a muchos con la tabla roles
    //ya que un usuario puede tener muchos roles
    //y de roles a usuarios es de muchos a muchos
    //estableciendo relaciones con roles
    public function roles()
    {
        return $this->belongsToMany(Role::class,'role_user');
    }
    // este metodo compureba si el usuario 
    // tiene un rol especifico
    public function hasRoles($role)
    {
        return $this->roles->contains('name',$role);
    }
}
