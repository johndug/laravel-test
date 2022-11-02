<?php
 
namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\AccessLevel;
 
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        DB::table('access_levels')->delete();

        DB::table('access_levels')->insert([
            'id' => 1,
            'name' => 'Admin'
        ]);
        DB::table('access_levels')->insert([
            'id' => 2,
            'name' => 'User'
        ]);

        User::create(['name' => 'john', 'email' => 'john@gmail.com', 'password' => Hash::make('samiam'), 'level_ref' => 1]);
        User::create(['name' => 'user', 'email' => 'user@gmail.com', 'password' => Hash::make('password'), 'level_ref' => 2]);
        User::create(['name' => Str::random(10), 'email' => Str::random(10).'@gmail.com', 'password' => Hash::make('password'), 'level_ref' => 2]);
        User::create(['name' => Str::random(10), 'email' => Str::random(10).'@gmail.com', 'password' => Hash::make('password'), 'level_ref' => 2]);
        User::create(['name' => Str::random(10), 'email' => Str::random(10).'@gmail.com', 'password' => Hash::make('password'), 'level_ref' => 2]);
        User::create(['name' => Str::random(10), 'email' => Str::random(10).'@gmail.com', 'password' => Hash::make('password'), 'level_ref' => 2]);
        User::create(['name' => Str::random(10), 'email' => Str::random(10).'@gmail.com', 'password' => Hash::make('password'), 'level_ref' => 2]);
        User::create(['name' => Str::random(10), 'email' => Str::random(10).'@gmail.com', 'password' => Hash::make('password'), 'level_ref' => 2]);
        User::create(['name' => Str::random(10), 'email' => Str::random(10).'@gmail.com', 'password' => Hash::make('password'), 'level_ref' => 2]);
        User::create(['name' => Str::random(10), 'email' => Str::random(10).'@gmail.com', 'password' => Hash::make('password'), 'level_ref' => 2]);

        
    }
}