<?php

use Illuminate\Database\Seeder;

class QuartosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // for ($i=1; $i <= 13; $i++) {
        //   for ($o=1; $o <= 5; $o++) {
        //   DB::table('quartos')->insert([
        //   'nome'=>'Solteiro',
        //   'numCamasSolteiro' => 2,
        //   'numCamasCasal' => 0,
        //   'valorDiaria' => '135.00',
        //   'descricao' => 'Quarto duplo com frigobar e banheiro privativo',
        //   'fotos'=>'quarto.JPG',
        //   'estabelecimentos_id' => $i ]);
        //
        //   DB::table('quartos')->insert([
        //   'nome'=>'Casal',
        //   'numCamasSolteiro' => 0,
        //   'numCamasCasal' => 1,
        //   'valorDiaria' => '150.00',
        //   'descricao' => 'Quarto casal com frigobar e banheiro privativo',
        //   'fotos'=>'quarto_casal.jpg',
        //   'estabelecimentos_id' => $i ]);
        //   }
        // }


        DB::table('quartos')->insert([
        'nome'=>'Standard Casal',
        'numCamasSolteiro' => 0,
        'numCamasCasal' => 1,
        'valorDiaria' => '335.00',
        'descricao' => 'Quarto com uma cama de Casal, frigobar e banheiro privativo',
        'fotos'=>'Imgens PI Hoteis/1-Iate_Hotel/10.jpg',
        'estabelecimentos_id' => 1 ]);

        DB::table('quartos')->insert([
        'nome'=>'Suite Single',
        'numCamasSolteiro' => 2,
        'numCamasCasal' => 0,
        'valorDiaria' => '235.00',
        'descricao' => 'Quarto duplo com frigobar e banheiro privativo',
        'fotos'=>'/Imgens PI Hoteis/1-Iate_Hotel/8.jpg',
        'estabelecimentos_id' => 1 ]);

        DB::table('quartos')->insert([
        'nome'=>'Suite Single',
        'numCamasSolteiro' => 2,
        'numCamasCasal' => 0,
        'valorDiaria' => '235.00',
        'descricao' => 'Quarto duplo com frigobar e banheiro privativo',
        'fotos'=>'/Imgens PI Hoteis/1-Iate_Hotel/8.jpg',
        'estabelecimentos_id' => 1 ]);


        DB::table('quartos')->insert([
        'nome'=>'Standard Family',
        'numCamasSolteiro' => 2,
        'numCamasCasal' => 1,
        'valorDiaria' => '335.00',
        'descricao' => 'Quarto com uma cama de Casal, frigobar e banheiro privativo',
        'fotos'=>'Imgens PI Hoteis/2-Hotel_Porto_Sol/8.jpg',
        'estabelecimentos_id' => 2 ]);

        DB::table('quartos')->insert([
        'nome'=>'Standard Solteiro',
        'numCamasSolteiro' => 2,
        'numCamasCasal' => 0,
        'valorDiaria' => '315.00',
        'descricao' => 'Quarto duplo com frigobar e banheiro privativo',
        'fotos'=>'Imgens PI Hoteis/2-Hotel_Porto_Sol/5.jpg',
        'estabelecimentos_id' => 2 ]);

        DB::table('quartos')->insert([
        'nome'=>'Standard Solteiro',
        'numCamasSolteiro' => 2,
        'numCamasCasal' => 0,
        'valorDiaria' => '315.00',
        'descricao' => 'Quarto duplo com frigobar e banheiro privativo',
        'fotos'=>'Imgens PI Hoteis/2-Hotel_Porto_Sol/5.jpg',
        'estabelecimentos_id' => 2 ]);


        DB::table('quartos')->insert([
        'nome'=>'Paradise Room',
        'numCamasSolteiro' => 0 ,
        'numCamasCasal' => 1,
        'valorDiaria' => '535.00',
        'descricao' => 'Quarto com uma cama de Casal, frigobar, TV e banheiro privativo',
        'fotos'=>'Imgens PI Hoteis/3-Club_Med_Hotel/2.jpg',
        'estabelecimentos_id' => 3 ]);

        DB::table('quartos')->insert([
        'nome'=>'Paradise Room',
        'numCamasSolteiro' => 0 ,
        'numCamasCasal' => 1,
        'valorDiaria' => '535.00',
        'descricao' => 'Quarto com uma cama de Casal, frigobar, TV e banheiro privativo',
        'fotos'=>'Imgens PI Hoteis/3-Club_Med_Hotel/2.jpg',
        'estabelecimentos_id' => 3 ]);

        DB::table('quartos')->insert([
        'nome'=>'Paradise Room',
        'numCamasSolteiro' => 0 ,
        'numCamasCasal' => 1,
        'valorDiaria' => '535.00',
        'descricao' => 'Quarto com uma cama de Casal, frigobar, TV e banheiro privativo',
        'fotos'=>'Imgens PI Hoteis/3-Club_Med_Hotel/2.jpg',
        'estabelecimentos_id' => 3 ]);

        DB::table('quartos')->insert([
        'nome'=>'Paradise Plus',
        'numCamasSolteiro' => 0,
        'numCamasCasal' => 2,
        'valorDiaria' => '815.00',
        'descricao' => 'Quarto duplo com frigobar, TV e banheiro privativo',
        'fotos'=>'Imgens PI Hoteis/3-Club_Med_Hotel/4.jpg',
        'estabelecimentos_id' => 3 ]);

        DB::table('quartos')->insert([
        'nome'=>'Paradise Plus',
        'numCamasSolteiro' => 3,
        'numCamasCasal' => 0,
        'valorDiaria' => '915.00',
        'descricao' => 'Quarto duplo com frigobar, TV e banheiro privativo',
        'fotos'=>'Imgens PI Hoteis/3-Club_Med_Hotel/6.jpg',
        'estabelecimentos_id' => 3 ]);






        DB::table('quartos')->insert([
        'nome'=>'Standart duplo',
        'numCamasSolteiro' => 0,
        'numCamasCasal' => 1,
        'valorDiaria' => '625.00',
        'descricao' => 'Quarto duplo com frigobar, TV e banheiro privativo',
        'fotos'=>'Imgens PI Hoteis/4-yoo2_rio/3.jpg',
        'estabelecimentos_id' => 4 ]);

        DB::table('quartos')->insert([
        'nome'=>'Standart duplo',
        'numCamasSolteiro' => 0,
        'numCamasCasal' => 1,
        'valorDiaria' => '625.00',
        'descricao' => 'Quarto duplo com frigobar, TV e banheiro privativo',
        'fotos'=>'Imgens PI Hoteis/4-yoo2_rio/9.jpg',
        'estabelecimentos_id' => 4 ]);

        DB::table('quartos')->insert([
        'nome'=>'Standart Single',
        'numCamasSolteiro' => 1,
        'numCamasCasal' => 0,
        'valorDiaria' => '485.00',
        'descricao' => 'Quarto Single com frigobar, TV e banheiro privativo',
        'fotos'=>'Imgens PI Hoteis/4-yoo2_rio/7.jpg',
        'estabelecimentos_id' => 4 ]);





        DB::table('quartos')->insert([
        'nome'=>'Confort Casal',
        'numCamasSolteiro' => 0,
        'numCamasCasal' => 1,
        'valorDiaria' => '465.00',
        'descricao' => 'Quarto Duplo com frigobar, TV e banheiro privativo',
        'fotos'=>'Imgens PI Hoteis/5-Solar_do_Rosário/7.jpg',
        'estabelecimentos_id' => 5]);


        DB::table('quartos')->insert([
        'nome'=>'Standart Casal',
        'numCamasSolteiro' => 0,
        'numCamasCasal' => 1,
        'valorDiaria' => '315.00',
        'descricao' => 'Quarto Duplo com frigobar, TV e banheiro privativo',
        'fotos'=>'Imgens PI Hoteis/5-Solar_do_Rosário/8.jpg',
        'estabelecimentos_id' => 5]);

        DB::table('quartos')->insert([
        'nome'=>'Confort Casal',
        'numCamasSolteiro' => 0,
        'numCamasCasal' => 1,
        'valorDiaria' => '465.00',
        'descricao' => 'Quarto Duplo com frigobar, TV e banheiro privativo',
        'fotos'=>'Imgens PI Hoteis/5-Solar_do_Rosário/7.jpg',
        'estabelecimentos_id' => 5]);




        DB::table('quartos')->insert([
        'nome'=>'Standart Family',
        'numCamasSolteiro' => 1,
        'numCamasCasal' => 1,
        'valorDiaria' => '515.00',
        'descricao' => 'Quarto com cama de casal e uma cama de solteiro alem de frigobar, TV e banheiro privativo',
        'fotos'=>'Imgens PI Hoteis/6-Pousada_Céu_da_Mantiqueira/5.jpg',
        'estabelecimentos_id' => 6]);

        DB::table('quartos')->insert([
        'nome'=>'Standart Family',
        'numCamasSolteiro' => 1,
        'numCamasCasal' => 1,
        'valorDiaria' => '515.00',
        'descricao' => 'Quarto com cama de casal e uma cama de solteiro alem de frigobar, TV e banheiro privativo',
        'fotos'=>'Imgens PI Hoteis/6-Pousada_Céu_da_Mantiqueira/5.jpg',
        'estabelecimentos_id' => 6]);

        DB::table('quartos')->insert([
        'nome'=>'Standart Family',
        'numCamasSolteiro' => 1,
        'numCamasCasal' => 1,
        'valorDiaria' => '515.00',
        'descricao' => 'Quarto com cama de casal e uma cama de solteiro alem de frigobar, TV e banheiro privativo',
        'fotos'=>'Imgens PI Hoteis/6-Pousada_Céu_da_Mantiqueira/5.jpg',
        'estabelecimentos_id' => 6]);




        DB::table('quartos')->insert([
        'nome'=>'Standart Family',
        'numCamasSolteiro' => 1,
        'numCamasCasal' => 1,
        'valorDiaria' => '465.00',
        'descricao' => 'Quarto com cama de casal e uma cama de solteiro alem de frigobar, TV e banheiro privativo',
        'fotos'=>'Imgens PI Hoteis/7-Pantanal_Mato_Grosso_Hotel/3.jpg',
        'estabelecimentos_id' => 7]);

        DB::table('quartos')->insert([
        'nome'=>'Standart Family',
        'numCamasSolteiro' => 1,
        'numCamasCasal' => 1,
        'valorDiaria' => '465.00',
        'descricao' => 'Quarto com cama de casal e uma cama de solteiro alem de frigobar, TV e banheiro privativo',
        'fotos'=>'Imgens PI Hoteis/7-Pantanal_Mato_Grosso_Hotel/9.jpg',
        'estabelecimentos_id' => 7]);


        DB::table('quartos')->insert([
        'nome'=>'Standart Two',
        'numCamasSolteiro' => 2,
        'numCamasCasal' => 0,
        'valorDiaria' => '305.00',
        'descricao' => 'Quarto com duas camas de solteiro alem de frigobar, TV e banheiro privativo',
        'fotos'=>'Imgens PI Hoteis/7-Pantanal_Mato_Grosso_Hotel/4.jpg',
        'estabelecimentos_id' => 7]);



        DB::table('quartos')->insert([
        'nome'=>'Plus Family',
        'numCamasSolteiro' => 2,
        'numCamasCasal' => 1,
        'valorDiaria' => '465.00',
        'descricao' => 'Quarto com cama de casal e duas camas de solteiro alem de frigobar, TV e banheiro privativo',
        'fotos'=>'Imgens PI Hoteis/8-Hotel_Mato_Grosso_Águas_Quentes/3.jpg',
        'estabelecimentos_id' => 8]);


        DB::table('quartos')->insert([
        'nome'=>'Standart Family',
        'numCamasSolteiro' => 1,
        'numCamasCasal' => 1,
        'valorDiaria' => '405.00',
        'descricao' => 'Quarto com cama de casal e uma cama de solteiro alem de frigobar, TV e banheiro privativo',
        'fotos'=>'Imgens PI Hoteis/8-Hotel_Mato_Grosso_Águas_Quentes/7.jpg',
        'estabelecimentos_id' => 8]);

        DB::table('quartos')->insert([
        'nome'=>'Standart Casal',
        'numCamasSolteiro' => 0,
        'numCamasCasal' => 1,
        'valorDiaria' => '345.00',
        'descricao' => 'Quarto com cama de casal alem de frigobar, TV e banheiro privativo',
        'fotos'=>'Imgens PI Hoteis/8-Hotel_Mato_Grosso_Águas_Quentes/4.jpg',
        'estabelecimentos_id' => 8]);



        DB::table('quartos')->insert([
        'nome'=>'Standart Casal',
        'numCamasSolteiro' => 0,
        'numCamasCasal' => 1,
        'valorDiaria' => '645.00',
        'descricao' => 'Quarto com cama de casal, frigobar',
        'fotos'=>'Imgens PI Hoteis/9-Pousada_Mar_Aberto/6.jpg',
        'estabelecimentos_id' => 9]);

        DB::table('quartos')->insert([
        'nome'=>'Standart Casal',
        'numCamasSolteiro' => 0,
        'numCamasCasal' => 1,
        'valorDiaria' => '645.00',
        'descricao' => 'Quarto com cama de casal, frigobar',
        'fotos'=>'Imgens PI Hoteis/9-Pousada_Mar_Aberto/6.jpg',
        'estabelecimentos_id' => 9]);

        DB::table('quartos')->insert([
        'nome'=>'Standart Casal',
        'numCamasSolteiro' => 0,
        'numCamasCasal' => 1,
        'valorDiaria' => '645.00',
        'descricao' => 'Quarto com cama de casal, frigobar',
        'fotos'=>'Imgens PI Hoteis/9-Pousada_Mar_Aberto/6.jpg',
        'estabelecimentos_id' => 9]);




        DB::table('quartos')->insert([
        'nome'=>'Standart Family',
        'numCamasSolteiro' => 1,
        'numCamasCasal' => 1,
        'valorDiaria' => '345.00',
        'descricao' => 'Quarto com cama de casal, cama de solteiro, frigobar e banheiro privativo',
        'fotos'=>'Imgens PI Hoteis/10-Pousada_Estrela_do_Mar/3.jpg',
        'estabelecimentos_id' => 10]);

        DB::table('quartos')->insert([
        'nome'=>'Standart Family',
        'numCamasSolteiro' => 1,
        'numCamasCasal' => 1,
        'valorDiaria' => '345.00',
        'descricao' => 'Quarto com cama de casal, cama de solteiro, frigobar e banheiro privativo',
        'fotos'=>'Imgens PI Hoteis/10-Pousada_Estrela_do_Mar/3.jpg',
        'estabelecimentos_id' => 10]);

        DB::table('quartos')->insert([
        'nome'=>'Standart Family',
        'numCamasSolteiro' => 1,
        'numCamasCasal' => 1,
        'valorDiaria' => '385.00',
        'descricao' => 'Quarto com cama de casal, cama de solteiro, frigobar e banheiro privativo',
        'fotos'=>'Imgens PI Hoteis/10-Pousada_Estrela_do_Mar/8.jpg',
        'estabelecimentos_id' => 10]);



        DB::table('quartos')->insert([
        'nome'=>'Luxo Master',
        'numCamasSolteiro' => 0,
        'numCamasCasal' => 1,
        'valorDiaria' => '1385.00',
        'descricao' => 'Quarto com cama de casal, TV, frigobar e banheiro privativo',
        'fotos'=>'Imgens PI Hoteis/11-Fasano/7.jpg',
        'estabelecimentos_id' => 11]);

        DB::table('quartos')->insert([
        'nome'=>'Luxo Master',
        'numCamasSolteiro' => 0,
        'numCamasCasal' => 1,
        'valorDiaria' => '1385.00',
        'descricao' => 'Quarto com cama de casal, TV, frigobar e banheiro privativo',
        'fotos'=>'Imgens PI Hoteis/11-Fasano/7.jpg',
        'estabelecimentos_id' => 11]);


        DB::table('quartos')->insert([
        'nome'=>'Suite Casal',
        'numCamasSolteiro' => 0,
        'numCamasCasal' => 1,
        'valorDiaria' => '985.00',
        'descricao' => 'Quarto com cama de casal, TV, frigobar e banheiro privativo',
        'fotos'=>'Imgens PI Hoteis/11-Fasano/9.jpg',
        'estabelecimentos_id' => 11]);

        DB::table('quartos')->insert([
        'nome'=>'Suite Casal',
        'numCamasSolteiro' => 0,
        'numCamasCasal' => 1,
        'valorDiaria' => '985.00',
        'descricao' => 'Quarto com cama de casal, TV, frigobar e banheiro privativo',
        'fotos'=>'Imgens PI Hoteis/11-Fasano/9.jpg',
        'estabelecimentos_id' => 11]);




        DB::table('quartos')->insert([
        'nome'=>'Suite Casal',
        'numCamasSolteiro' => 0,
        'numCamasCasal' => 1,
        'valorDiaria' => '485.00',
        'descricao' => 'Quarto com cama de casal, TV, frigobar e banheiro privativo',
        'fotos'=>'Imgens PI Hoteis/12-Sheraton/6.jpg',
        'estabelecimentos_id' => 12]);

        DB::table('quartos')->insert([
        'nome'=>'Suite Casal',
        'numCamasSolteiro' => 0,
        'numCamasCasal' => 1,
        'valorDiaria' => '485.00',
        'descricao' => 'Quarto com cama de casal, TV, frigobar e banheiro privativo',
        'fotos'=>'Imgens PI Hoteis/12-Sheraton/6.jpg',
        'estabelecimentos_id' => 12]);

        DB::table('quartos')->insert([
        'nome'=>'Suite Double',
        'numCamasSolteiro' => 0,
        'numCamasCasal' => 2,
        'valorDiaria' => '595.00',
        'descricao' => 'Quarto com 2 camas de casal, TV, frigobar e banheiro privativo',
        'fotos'=>'Imgens PI Hoteis/12-Sheraton/8.jpg',
        'estabelecimentos_id' => 12]);



        DB::table('quartos')->insert([
        'nome'=>'Suite Prime',
        'numCamasSolteiro' => 0,
        'numCamasCasal' => 1,
        'valorDiaria' => '595.00',
        'descricao' => 'Quarto com cama de casal, TV, frigobar e banheiro privativo',
        'fotos'=>'Imgens PI Hoteis/13-Novotel/4.jpg',
        'estabelecimentos_id' => 13]);

        DB::table('quartos')->insert([
        'nome'=>'Suite Prime',
        'numCamasSolteiro' => 0,
        'numCamasCasal' => 1,
        'valorDiaria' => '595.00',
        'descricao' => 'Quarto com cama de casal, TV, frigobar e banheiro privativo',
        'fotos'=>'Imgens PI Hoteis/13-Novotel/4.jpg',
        'estabelecimentos_id' => 13]);

        DB::table('quartos')->insert([
        'nome'=>'Suite Prime',
        'numCamasSolteiro' => 1,
        'numCamasCasal' => 0,
        'valorDiaria' => '395.00',
        'descricao' => 'Quarto com cama de solteiro, TV, frigobar e banheiro privativo',
        'fotos'=>'Imgens PI Hoteis/13-Novotel/10.jpg',
        'estabelecimentos_id' => 13]);

        DB::table('quartos')->insert([
        'nome'=>'Suite Prime',
        'numCamasSolteiro' => 1,
        'numCamasCasal' => 0,
        'valorDiaria' => '395.00',
        'descricao' => 'Quarto com cama de solteiro, TV, frigobar e banheiro privativo',
        'fotos'=>'Imgens PI Hoteis/13-Novotel/10.jpg',
        'estabelecimentos_id' => 13]);




        DB::table('quartos')->insert([
        'nome'=>'Suite Master',
        'numCamasSolteiro' => 2,
        'numCamasCasal' => 1,
        'valorDiaria' => '695.00',
        'descricao' => 'Quarto com cama de casal e 2 camas de solteiro, TV, frigobar e banheiro privativo',
        'fotos'=>'Imgens PI Hoteis/14-Pousada_Recanto_da_Coruja/3.jpg',
        'estabelecimentos_id' => 14]);

        DB::table('quartos')->insert([
        'nome'=>'Suite Master',
        'numCamasSolteiro' => 2,
        'numCamasCasal' => 1,
        'valorDiaria' => '695.00',
        'descricao' => 'Quarto com cama de casal e 2 camas de solteiro, TV, frigobar e banheiro privativo',
        'fotos'=>'Imgens PI Hoteis/14-Pousada_Recanto_da_Coruja/3.jpg',
        'estabelecimentos_id' => 14]);


        DB::table('quartos')->insert([
        'nome'=>'Suite Master',
        'numCamasSolteiro' => 0,
        'numCamasCasal' => 1,
        'valorDiaria' => '495.00',
        'descricao' => 'Quarto com cama de casal, TV, frigobar e banheiro privativo',
        'fotos'=>'Imgens PI Hoteis/14-Pousada_Recanto_da_Coruja/8.jpg',
        'estabelecimentos_id' => 14]);

        DB::table('quartos')->insert([
        'nome'=>'Suite Master',
        'numCamasSolteiro' => 0,
        'numCamasCasal' => 1,
        'valorDiaria' => '505.00',
        'descricao' => 'Quarto com cama de casal, TV, frigobar e banheiro privativo',
        'fotos'=>'Imgens PI Hoteis/14-Pousada_Recanto_da_Coruja/9.jpg',
        'estabelecimentos_id' => 14]);


        DB::table('quartos')->insert([
        'nome'=>'Suite Standard',
        'numCamasSolteiro' => 2,
        'numCamasCasal' => 0,
        'valorDiaria' => '305.00',
        'descricao' => 'Quarto com 2 camas de solteiro, TV, frigobar e banheiro privativo',
        'fotos'=>'Imgens PI Hoteis/15-Blue Tree Towers/2.jpg',
        'estabelecimentos_id' => 15]);

        DB::table('quartos')->insert([
        'nome'=>'Suite Standard',
        'numCamasSolteiro' => 2,
        'numCamasCasal' => 0,
        'valorDiaria' => '305.00',
        'descricao' => 'Quarto com 2 camas de solteiro, TV, frigobar e banheiro privativo',
        'fotos'=>'Imgens PI Hoteis/15-Blue Tree Towers/3.jpg',
        'estabelecimentos_id' => 15]);

        DB::table('quartos')->insert([
        'nome'=>'Suite Standard',
        'numCamasSolteiro' => 2,
        'numCamasCasal' => 0,
        'valorDiaria' => '405.00',
        'descricao' => 'Quarto com cama de casal, TV, frigobar e banheiro privativo',
        'fotos'=>'Imgens PI Hoteis/15-Blue Tree Towers/4.jpg',
        'estabelecimentos_id' => 15]);

        DB::table('quartos')->insert([
        'nome'=>'Suite Standard',
        'numCamasSolteiro' => 2,
        'numCamasCasal' => 0,
        'valorDiaria' => '405.00',
        'descricao' => 'Quarto com cama de casal, TV, frigobar e banheiro privativo',
        'fotos'=>'Imgens PI Hoteis/15-Blue Tree Towers/4.jpg',
        'estabelecimentos_id' => 15]);



        DB::table('quartos')->insert([
        'nome'=>'Suite Standard',
        'numCamasSolteiro' => 0,
        'numCamasCasal' => 1,
        'valorDiaria' => '435.00',
        'descricao' => 'Quarto com cama de casal, TV, frigobar e banheiro privativo',
        'fotos'=>'Imgens PI Hoteis/16-Casa_Mar/3.jpg',
        'estabelecimentos_id' => 16]);

        DB::table('quartos')->insert([
        'nome'=>'Standard Room',
        'numCamasSolteiro' => 0,
        'numCamasCasal' => 1,
        'valorDiaria' => '435.00',
        'descricao' => 'Quarto com cama de casal, TV, frigobar e banheiro privativo',
        'fotos'=>'Imgens PI Hoteis/16-Casa_Mar/5.jpg',
        'estabelecimentos_id' => 16]);

        DB::table('quartos')->insert([
        'nome'=>'Suite Casal',
        'numCamasSolteiro' => 0,
        'numCamasCasal' => 1,
        'valorDiaria' => '435.00',
        'descricao' => 'Quarto com cama de casal, TV, frigobar e banheiro privativo',
        'fotos'=>'Imgens PI Hoteis/16-Casa_Mar/7.jpg',
        'estabelecimentos_id' => 16]);




        DB::table('quartos')->insert([
        'nome'=>'Suite Classic',
        'numCamasSolteiro' => 0,
        'numCamasCasal' => 1,
        'valorDiaria' => '365.00',
        'descricao' => 'Quarto com cama de casal, TV, frigobar e banheiro privativo',
        'fotos'=>'Imgens PI Hoteis/17-Pousada_Estrela_Alpina/4.jpg',
        'estabelecimentos_id' => 17]);

        DB::table('quartos')->insert([
        'nome'=>'Suite Nature',
        'numCamasSolteiro' => 0,
        'numCamasCasal' => 1,
        'valorDiaria' => '485.00',
        'descricao' => 'Quarto com cama de casal, TV, frigobar e banheiro privativo',
        'fotos'=>'Imgens PI Hoteis/17-Pousada_Estrela_Alpina/5.jpg',
        'estabelecimentos_id' => 17]);

        DB::table('quartos')->insert([
        'nome'=>'Suite Summer',
        'numCamasSolteiro' => 0,
        'numCamasCasal' => 1,
        'valorDiaria' => '535.00',
        'descricao' => 'Quarto com cama de casal, TV, frigobar e banheiro privativo',
        'fotos'=>'Imgens PI Hoteis/17-Pousada_Estrela_Alpina/6.jpg',
        'estabelecimentos_id' => 17]);


        DB::table('quartos')->insert([
        'nome'=>'Suite Lux',
        'numCamasSolteiro' => 0,
        'numCamasCasal' => 1,
        'valorDiaria' => '635.00',
        'descricao' => 'Quarto com cama de casal, TV, frigobar e banheiro privativo',
        'fotos'=>'Imgens PI Hoteis/18-Four_Points/3.jpg',
        'estabelecimentos_id' => 18]);

        DB::table('quartos')->insert([
        'nome'=>'Suite Lux',
        'numCamasSolteiro' => 0,
        'numCamasCasal' => 1,
        'valorDiaria' => '635.00',
        'descricao' => 'Quarto com cama de casal, TV, frigobar e banheiro privativo',
        'fotos'=>'Imgens PI Hoteis/18-Four_Points/3.jpg',
        'estabelecimentos_id' => 18]);

        DB::table('quartos')->insert([
        'nome'=>'Suite Lux',
        'numCamasSolteiro' => 0,
        'numCamasCasal' => 2,
        'valorDiaria' => '735.00',
        'descricao' => 'Quarto com cama de casal, TV, frigobar e banheiro privativo',
        'fotos'=>'Imgens PI Hoteis/18-Four_Points/6.jpg',
        'estabelecimentos_id' => 18]);

    }
}
