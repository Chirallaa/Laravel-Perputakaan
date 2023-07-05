<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'username',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class);
    }

    // accesor
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucfirst($value);
    }

    public function isPetugas()
    {
        return $this->role === 'petugas';
    }

    /**
     * Determine if the user is a manager.
     *
     * @return bool
     */
    public function isPeminjam()
    {
        return $this->role === 'peminjam';
    }
    
}
