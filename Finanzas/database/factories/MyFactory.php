<?php

use App\User;
use App\Transaction;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    static $password;
    return [
     'name' => $faker->name,
     'email' => $faker->unique()->safeEmail,
     'email_verified_at' => now(),
     'password'=> $password ?: $password = bcrypt('secret'),
     'saldo'=> $faker->numberBetween(10,300000),
     'deuda'=> $faker->numberBetween(10,300000),
     'inversion'=> $faker->numberBetween(10,300000),
    ];
});

$factory->define(Transaction::class, function (Faker $faker) {
     $user = User::all()->random();
    return [
        'user_id'=>$user->id,
     	'tipo'=>$faker->randomElement(['Ingreso','Inversion'.'Gasto','Prestamo']),
        'descripcion'=>$faker->text($maxNbChars = 100),
     	'valor'=> $faker->numberBetween(50000,300000),
    ];
});


     

