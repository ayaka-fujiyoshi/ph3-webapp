<?php
$factory->define(App\study_time::class, function (Faker\Generator $faker) {
  return [
      'study_date' =>  $faker->dateTimeThisYear,
      'study_hour'  => $faker->numberBetween(0,24),
      'languages_id'  => $faker->numberBetween(1,8),
      'contents_id'  => $faker->numberBetween(1,3),
  ];
});

// $factory->define(App\User::class, function (Faker\Generator $faker) {
//   $countries = App\Country::pluck('id')->all();
//   return [
//       'name' => $faker->name,
//       'country_id' => $faker->randomElement($countries),
//   ];
// });
