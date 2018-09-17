<?php

use Illuminate\Database\Seeder;
use App\Mensagem;

class mensagemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mensagem::create([
            'titulo' => 'Olá mundo',
            'texto' => 'Olá mundo... Acho que vamos ser amigos :)',
            'autor' => 'Rafael Lauxen',
            'user_id'=> 1
        ]);

        Mensagem::create([
            'titulo' => 'Olá mundo cruel',
            'texto' => 'Tudo tem um fim e nem tudo são verdades...',
            'autor' => 'Rafael Lauxen',
            'user_id'=> 1
        ]);
    }
}
