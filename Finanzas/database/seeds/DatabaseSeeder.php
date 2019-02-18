<?php

use App\User;
use App\Cuenta;
use App\Transaction;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        User::truncate();
        Transaction::truncate();

        $cantidadUsuarios=100;
        $CantidadTransacciones=100;
        factory(User::class,$cantidadUsuarios)->create();
        factory(Transaction::class,$CantidadTransacciones)->create();

    }
}
