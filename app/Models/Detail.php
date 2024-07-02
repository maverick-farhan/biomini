<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $table = 'details';

    use HasFactory;
    // protected $fillable = [
    //     'name',
    //     'image',
    //     'email',
    //     'profession',
    //     'phone',
    //     'short_bio',
    //     'interest',
    //     'website',
    //     'portfolio',
    //     'insta',
    //     'facebook',
    //     'twitter',
    //     'linkedin',
    //     'resume',
    // ];
    protected $guarded = [];
}
