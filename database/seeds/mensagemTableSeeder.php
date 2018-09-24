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
            'titulo' => 'Olá inicial',
            'texto' => 'Olá mundo...',
            'autor' => 'Rafa',
            'user_id' => 1,
            'atividade_id' => 1
        ]);
        Mensagem::create([
            'titulo' => 'Olá final',
            'texto' => 'Olá mundo...final..',
            'autor' => 'Maria José de Almeida',
            'user_id' => 1,
            'atividade_id' => 1
        ]);
    }
}