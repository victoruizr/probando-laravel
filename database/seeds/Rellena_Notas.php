<?php

use Illuminate\Database\Seeder;

class Rellena_Notas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<=40;$i++){
            DB::table('notes')->insert(array(
                    'title'=>'Mi nota '.$i,
                    'description'=> 'La descripcion del nota '.$i
            ));
        }

        $this->command->info('Tabla de Notas rellenada correctamente');
    }
}
