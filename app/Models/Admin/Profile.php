<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'address',
        'website',
        'avatar',
        'banner',
        'about',
        'fb_link',
        'x',
        'in_link',
        'intra_link',
    ];
}
