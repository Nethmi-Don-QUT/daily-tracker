<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /**   *Seed Example post 1   */ 
        DB::table('posts')->insert([
            'title' => 'Chasing dreams',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
            ut labore et dolore magna aliqua. Ultrices tincidunt arcu non sodales neque sodales ut etiam sit. Sagittis vitae et leo duis ut diam quam nulla porttitor. Urna molestie at 
            elementum eu facilisis sed. Massa vitae tortor condimentum lacinia quis. Cursus mattis molestie a iaculis at.
             Rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant. Aliquet enim tortor at auctor urna nunc.',
            'spent_hours' => 3.5,
            'quality_score' => 1,
            'feeling' => '1',
            'image' => 'images/7YDfxB21w8heJayMonPNWyXVFQS4yBpnKq9NcHOZ.jpg',
            'created_at' => "2024-01-27 10:12:14",
            'updated_at' => "2024-01-27 10:12:14",
            'user_id' => 1
        ]);
        /**   *Seed Example post 2   */ 
        DB::table('posts')->insert([
            'title' => 'Chasing dreams',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
            ut labore et dolore magna aliqua. Ultrices tincidunt arcu non sodales neque sodales ut etiam sit. Sagittis vitae et leo duis ut diam quam nulla porttitor. Urna molestie at 
            elementum eu facilisis sed. Massa vitae tortor condimentum lacinia quis. Cursus mattis molestie a iaculis at.
             Rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant. Aliquet enim tortor at auctor urna nunc.',
            'spent_hours' => 5.2,
            'quality_score' => 2,
            'feeling' => '3',
            'created_at' => now(),
            'updated_at' => now(),
            'user_id' => 2
        ]);

        /**   *Seed Example post 3   */ 
        DB::table('posts')->insert([
            'title' => 'Finding joy in the little things',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
            ut labore et dolore magna aliqua. Ultrices tincidunt arcu non sodales neque sodales ut etiam sit. Sagittis vitae et leo duis ut diam quam nulla porttitor. Urna molestie at 
            elementum eu facilisis sed. Massa vitae tortor condimentum lacinia quis. Cursus mattis molestie a iaculis at.
             Rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant. Aliquet enim tortor at auctor urna nunc.',
            'spent_hours' => 4.0,
            'quality_score' => -1,
            'feeling' => '4',
            'image' => 'images/6pWp79FDNh3NINrnLuuFouLlR6a94c3Z8wuAZBA5.jpg',
            'created_at' => now(),
            'updated_at' => now(),
            'user_id' => 1
        ]);

                /**   *Seed Example post 4   */ 
        DB::table('posts')->insert([
            'title' => 'Finding joy in the little things',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
            ut labore et dolore magna aliqua. Ultrices tincidunt arcu non sodales neque sodales ut etiam sit. Sagittis vitae et leo duis ut diam quam nulla porttitor. Urna molestie at 
            elementum eu facilisis sed. Massa vitae tortor condimentum lacinia quis. Cursus mattis molestie a iaculis at.
             Rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant. Aliquet enim tortor at auctor urna nunc.',
            'spent_hours' => 4.0,
            'quality_score' => -1,
            'feeling' => '4',
            'image' => 'images/6pWp79FDNh3NINrnLuuFouLlR6a94c3Z8wuAZBA5.jpg',
            'created_at' => "2024-01-27 10:12:14",
            'updated_at' => "2024-01-27 10:12:14",
            'user_id' => 2
        ]);
 
        /**   *Seed Example post 5   */ 
        DB::table('posts')->insert([
            'title' => 'Chasing dreams',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
            ut labore et dolore magna aliqua. Ultrices tincidunt arcu non sodales neque sodales ut etiam sit. Sagittis vitae et leo duis ut diam quam nulla porttitor. Urna molestie at 
            elementum eu facilisis sed. Massa vitae tortor condimentum lacinia quis. Cursus mattis molestie a iaculis at.
             Rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant. Aliquet enim tortor at auctor urna nunc.',
            'spent_hours' => 4.0,
            'quality_score' => -1,
            'feeling' => '4',
            'image' => 'images/6pWp79FDNh3NINrnLuuFouLlR6a94c3Z8wuAZBA5.jpg',
            'created_at' => "2024-01-26 10:12:14",
            'updated_at' => "2024-01-26 10:12:14",
            'user_id' => 1
        ]);        
    }
}
