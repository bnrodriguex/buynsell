<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnuncioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('anuncios')->insert([
            'categoria_id' => 1,
            'user_id' => 1,
            'titulo' => 'Meu Primeiro Anúncio',
            'conteudo' => 'Conteúdo do Primeiro anúncio'
        ]);
        DB::table('anuncios')->insert([
            'categoria_id' => 2,
            'user_id' => 2,
            'titulo' => 'Meu Segundo Anúncio',
            'conteudo' => 'Conteúdo do Segundo anúncio'
        ]);
        DB::table('anuncios')->insert([
            'categoria_id' => 3,
            'user_id' => 3,
            'titulo' => 'Meu Terceiro Anúncio',
            'conteudo' => 'Conteúdo do Terceiro anúncio'
        ]);
    }
}
