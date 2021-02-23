<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => '127.0.0.1',
    'database'  => 'bootstrap3',
    'username'  => 'root',
    'password'  => 'kemobyte',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

//Make this Capsule instance available globally.
$capsule->setAsGlobal();

// Setup the Eloquent ORM.
$capsule->bootEloquent();

// function create($username= '', $email = '',$phone = '') {

// 	User::create([
// 		'user_name'=>$username,
// 		'user_email' => $email,
// 		'user_phone' => $phone
// 	]);

// }

// create('mohammed','mohammed@gmail.com',12345678);

// Capsule::schema()->create('users', function ($table) {

//        $table->increments('id');

//        $table->string('name');

//        $table->string('email')->unique();

//        $table->string('password');

//        $table->string('userimage')->nullable();

//        $table->string('api_key')->nullable()->unique();

//        $table->rememberToken();

//        $table->timestamps();

//    });