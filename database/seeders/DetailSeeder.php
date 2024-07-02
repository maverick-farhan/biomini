<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\detail;

class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        detail::create([
            'name'=>'Md Farhan Mushtaque',
            'profession'=>'Web Dev',
            'likes'=>'0',
            'short_bio'=>'short_bio',
            'interest'=>'interest',
            'website'=>'wesbite',
            'email'=>'email',
            'portfolio'=>'portfolio',
            'resume'=>'resume',
            'phone'=>'phone',
            'insta'=>'insta',
            'facebook'=>'facebook',
            'twitter'=>'twitter',
            'linkedin'=>'linkedin',
        ]);
    }
}
