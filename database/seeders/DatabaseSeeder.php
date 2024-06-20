<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Skill;
use App\Models\Rating;
use App\Models\Message;
use App\Models\Project;
use App\Models\Interest;
use App\Models\Education;
use App\Models\Experience;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Experience::factory(5)->create();
        Education::factory(5)->create();
        Interest::factory(5)->create();
        Message::factory(5)->create();
        Skill::factory(5)->create();
        Project::factory(5)->create();
        Rating::factory(1)->create();

        Role::create(['name' => 'admin']);
        Role::create(['name' => 'user']);

        Permission::create(['name' => 'cv manage']);
        Permission::create(['name' => 'user manage']);
        Permission::create(['name' => 'message']);

        $roleAdmin = Role::findByName('admin');
        $roleAdmin->givePermissionTo('user manage');
        $roleAdmin->givePermissionTo('message');

        $roleUser = Role::findByName('user');
        $roleUser->givePermissionTo('cv manage');

        $user = User::create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => bcrypt('password'),
            'email_verified_at' => now()
        ]);
        $user->assignRole('user');

        $user = User::create([
            'name' => 'User2',
            'email' => 'use2r@gmail.com',
            'password' => bcrypt('password'),
            'email_verified_at' => now()
        ]);
        $user->assignRole('user');

        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
            'email_verified_at' => now()
        ]);
        $admin->assignRole('admin');
    }
}
