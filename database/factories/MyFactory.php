<?php

use App\User;
use App\Transaction;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    return [
     'name' => $faker->name,
     'email' => $faker->unique()->safeEmail,
     'email_verified_at' => now(),
     'password'=> $password ?: $password = bcrypt('secret'),
    ];
});

$factory->define(Transaction::class, function (Faker $faker) {
     $user = User::all()->random();
    return [
        'user_id'=>$user->id,
     	'tipo'=>$faker->randomElement(['Ingreso','Gasto','Prestamo']),
     	'valor'=> $faker->numberBetween(50000,300000),
    ];
});


