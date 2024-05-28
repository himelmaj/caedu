<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'student']);
        Role::create(['name' => 'teacher']);
        Role::create(['name' => 'unassigned']);

        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make(env('USER_PASSWORD'))
        ]);

        $admin->assignRole('admin');

        $teacher = User::create([
            'name' => 'Teacher',
            'email' => 'teacher@example.com',
            'password' => Hash::make(env('USER_PASSWORD'))
        ]);

        $teacher->assignRole('teacher');

        $student = User::create([
            'name' => 'Student',
            'email' => 'student@example.com',
            'password' => Hash::make(env('USER_PASSWORD'))
        ]);

        $student->assignRole('student');


        User::factory()
            ->count(5)
            ->create()
            ->each(fn($user) => $user->assignRole('admin'));

        User::factory()
            ->count(15)
            ->create()
            ->each(fn($user) => $user->assignRole('teacher'));

        User::factory()
            ->count(50)
            ->create()
            ->each(fn($user) => $user->assignRole('student'));


    }
}
