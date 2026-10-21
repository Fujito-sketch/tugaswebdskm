<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable; // Extends Authenticatable
use Illuminate\Notifications\Notifiable;

class UserBios extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The table associated with the model.
     * Required because your table is named 'user_bios' instead of 'users'.
     */
    protected $table = 'user_bios'; //

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'about_me',
        'unique_fact',
        'hobby',
        'major',
        'address',
        'age',
    ]; //

    /**
     * The attributes that should be hidden for serialization.
     */
    protected $hidden = [
        'password',
        'remember_token',
    ]; //

    /**
     * Get the attributes that should be cast.
     */
    protected function casts(): array
    {
        return [
            'password' => 'hashed', // Automatically hashes passwords when saving
        ];
    }
}
