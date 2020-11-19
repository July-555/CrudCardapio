<?php

/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Produto::class, static function (Faker\Generator $faker) {
    return [
        'nome' => $faker->sentence,
        'preco' => $faker->randomFloat,
        'immagem' => $faker->sentence,
        'categoria' => $faker->sentence,
        'descricao' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Cliente::class, static function (Faker\Generator $faker) {
    return [
        'nome' => $faker->sentence,
        'imagem' => $faker->sentence,
        'login' => $faker->sentence,
        'phone' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Restaurante::class, static function (Faker\Generator $faker) {
    return [
        'nome' => $faker->sentence,
        'endereco' => $faker->sentence,
        'imagem' => $faker->sentence,
        'categoria' => $faker->sentence,
        'login' => $faker->sentence,
        'horario' => $faker->sentence,
        'phone' => $faker->sentence,
        'cellular' => $faker->sentence,
        'social' => $faker->sentence,
        'descricao' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Reserva::class, static function (Faker\Generator $faker) {
    return [
        'data' => $faker->sentence,
        'qntd_lugares' => $faker->sentence,
        'cliente_id' => $faker->sentence,
        'resturante_id' => $faker->sentence,
        'observacao' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
