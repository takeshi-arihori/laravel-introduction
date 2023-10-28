<?php

// use Illuminate\Database\Eloquent\Factory $Factory;
use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});


$factory->define(
    App\Models\Person::class,
    function (Faker $faker) {
        return [
            'name' => $faker->name,
            'mail' => $faker->unique()->safeEmail,
            'age' => random_int(1, 99),
        ];
    }
);
