<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class NotasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notas') -> insert([
            'titulo' => '¿Para qué sirve Composer?',
            'contenido' => 'Con Composer podemos instalar y actualizar frameworks como Laravel o Symfony, así como componentes para generar PDF, procesar pagos con tarjetas, manipular imágenes y mucho más.'
        ]);
        DB::table('notas') -> insert([
            'titulo' => '¿Para qué sirve Composer?',
            'contenido' => File::get(__DIR__.'/notas/install.html'),
            ]);
    }
}
