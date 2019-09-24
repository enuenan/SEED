<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
      'name' => $faker -> name('male'|'female'),
      'email' => $faker -> email,
      'address' => $faker -> address,
      'credit_card_no' => $faker -> creditCardNumber,
      'contact' => $faker -> e164PhoneNumber,
      'salary' => $faker -> numberBetween($min = 10000, $max = 50000),
      'birth_date' => $faker -> date($format = 'Y-m-d', $max = 'now')
    ];
});
