<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EntrustSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        // Create Roles
        $adminRole = Role::create([
            'name'          => 'admin',
            'display_name'  => 'Administration',
            'description'   => 'Administrator',
            'allowed_route' => 'admin',
        ]);
        $supervisorRole = Role::create([
            'name'          => 'supervisor',
            'display_name'  => 'Supervisor',
            'description'   => 'Supervisor',
            'allowed_route' => 'admin',
        ]);
        $customerRole = Role::create([
            'name'          => 'customer',
            'display_name'  => 'Customer',
            'description'   => 'Customer',
            'allowed_route' => null,
        ]);

        // Create Users and attach Roles
        $admin = User::create([
            'first_name'        => 'Admin',
            'last_name'         => 'System',
            'email'             => 'admin@ecommerce.test',
            'email_verified_at' => now(),
            'mobile'            => '01111111111',
            'password'          => bcrypt('password'),
            'user_image'        => 'avatar.svg',
            'status'            => '1',
            'remember_token'     => Str::random(10),
        ]);
        $admin->attachRole($adminRole);

        $supervisor = User::create([
            'first_name'        => 'Supervisor',
            'last_name'         => 'System',
            'email'             => 'supervisor@ecommerce.test',
            'email_verified_at' => now(),
            'mobile'            => '01555555555',
            'password'          => bcrypt('password'),
            'user_image'        => 'avatar.svg',
            'status'            => '1',
            'remember_token'     => Str::random(10),
        ]);
        $supervisor->attachRole($supervisorRole);

        $customer = User::create([
            'first_name'        => 'Shadi',
            'last_name'         => 'Abdelslam',
            'email'             => 'shadi@gmail.com',
            'email_verified_at' => now(),
            'mobile'            => '01000000000',
            'password'          => bcrypt('password'),
            'user_image'        => 'avatar.svg',
            'status'            => '1',
            'remember_token'     => Str::random(10),
        ]);
        $customer->attachRole($customerRole);

        // Create random customers
        for( $i = 1 ; $i <= 20; $i++ ){
            $random_customer = User::create([
                'first_name'        => $faker->firstName,
                'last_name'         => $faker->lastName,
                'email'             => $faker->unique()->safeEmail,
                'email_verified_at' => now(),
                'mobile'            => '010'. $faker->numberBetween(10000000 , 99999999),
                'password'          => bcrypt('password'),
                'user_image'        => 'avatar.svg',
                'status'            => '1',
                'remember_token'     => Str::random(10),
            ]);
            $random_customer->attachRole($customerRole);
        }
    }
}
