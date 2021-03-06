<?php

use Illuminate\Database\Seeder;

class ImagensSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 10; $i++) {
          DB::table('imagens')->insert([
              'caminho'=>'imagensHotel/1-Iate_Hotel/'.$i.'.jpg',
              'estabelecimentos_id'=>1
          ]);
          DB::table('imagens')->insert([
              'caminho'=>'imagensHotel/2-Hotel_Porto_Sol/'.$i.'.jpg',
              'estabelecimentos_id'=>2
          ]);
          DB::table('imagens')->insert([
              'caminho'=>'imagensHotel/3-Club_Med_Hotel/'.$i.'.jpg',
              'estabelecimentos_id'=>3
          ]);
          DB::table('imagens')->insert([
              'caminho'=>'imagensHotel/4-yoo2_rio/'.$i.'.jpg',
              'estabelecimentos_id'=>4
          ]);
          DB::table('imagens')->insert([
              'caminho'=>'imagensHotel/5-Solar_do_Rosario/'.$i.'.jpg',
              'estabelecimentos_id'=>5
          ]);

          DB::table('imagens')->insert([
              'caminho'=>'imagensHotel/6-Pousada_Ceu_da_Mantiqueira/'.$i.'.jpg',
              'estabelecimentos_id'=>6
          ]);
          DB::table('imagens')->insert([
              'caminho'=>'imagensHotel/7-Pantanal_Mato_Grosso_Hotel/'.$i.'.jpg',
              'estabelecimentos_id'=>7
          ]);
          DB::table('imagens')->insert([
              'caminho'=>'imagensHotel/8-Hotel_Mato_Grosso_Aguas_Quentes/'.$i.'.jpg',
              'estabelecimentos_id'=>8
          ]);
          DB::table('imagens')->insert([
              'caminho'=>'imagensHotel/9-Pousada_Mar_Aberto/'.$i.'.jpg',
              'estabelecimentos_id'=>9
          ]);
          DB::table('imagens')->insert([
              'caminho'=>'imagensHotel/10-Pousada_Estrela_do_Mar/'.$i.'.jpg',
              'estabelecimentos_id'=>10
          ]);
          DB::table('imagens')->insert([
              'caminho'=>'imagensHotel/11-Fasano/'.$i.'.jpg',
              'estabelecimentos_id'=>11
          ]);
          DB::table('imagens')->insert([
              'caminho'=>'imagensHotel/12-Sheraton/'.$i.'.jpg',
              'estabelecimentos_id'=>12
          ]);
          DB::table('imagens')->insert([
              'caminho'=>'imagensHotel/13-Novotel/'.$i.'.jpg',
              'estabelecimentos_id'=>13
          ]);

          DB::table('imagens')->insert([
              'caminho'=>'imagensHotel/14-Pousada_Recanto_da_Coruja/'.$i.'.jpg',
              'estabelecimentos_id'=>14
          ]);

          DB::table('imagens')->insert([
              'caminho'=>'imagensHotel/15-Blue Tree Towers/'.$i.'.jpg',
              'estabelecimentos_id'=>15
          ]);

          DB::table('imagens')->insert([
              'caminho'=>'imagensHotel/16-Casa_Mar/'.$i.'.jpg',
              'estabelecimentos_id'=>16
          ]);

          DB::table('imagens')->insert([
              'caminho'=>'imagensHotel/17-Pousada_Estrela_Alpina/'.$i.'.jpg',
              'estabelecimentos_id'=>17
          ]);

          DB::table('imagens')->insert([
              'caminho'=>'imagensHotel/18-Four_Points/'.$i.'.jpg',
              'estabelecimentos_id'=>18
          ]);
        }
    }
}
