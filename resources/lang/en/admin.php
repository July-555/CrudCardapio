<?php

return [
    'produto' => [
        'title' => 'Produtos',

        'actions' => [
            'index' => 'Produtos',
            'create' => 'New Produto',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'nome' => 'Nome',
            'preco' => 'Preco',
            'immagem' => 'Immagem',
            'categoria' => 'Categoria',
            'descricao' => 'Descricao',
            
        ],
    ],

    'cliente' => [
        'title' => 'Clientes',

        'actions' => [
            'index' => 'Clientes',
            'create' => 'New Cliente',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'nome' => 'Nome',
            'imagem' => 'Imagem',
            'login' => 'Login',
            'phone' => 'Phone',
            
        ],
    ],

    'restaurante' => [
        'title' => 'Restaurantes',

        'actions' => [
            'index' => 'Restaurantes',
            'create' => 'New Restaurante',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'nome' => 'Nome',
            'endereco' => 'Endereco',
            'imagem' => 'Imagem',
            'categoria' => 'Categoria',
            'login' => 'Login',
            'horario' => 'Horario',
            'phone' => 'Phone',
            'cellular' => 'Cellular',
            'social' => 'Social',
            'descricao' => 'Descricao',
            
        ],
    ],

    'reserva' => [
        'title' => 'Reserva',

        'actions' => [
            'index' => 'Reserva',
            'create' => 'New Reserva',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'data' => 'Data',
            'qntd_lugares' => 'Qntd lugares',
            'cliente_id' => 'Cliente',
            'resturante_id' => 'Resturante',
            'observacao' => 'Observacao',
            
        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];