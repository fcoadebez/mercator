<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DemoMacroProcessusesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('macro_processuses')->delete();
        
        \DB::table('macro_processuses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Macro-Processus 1',
                'description' => '<p>Description du macro-processus de test.</p>',
                'io_elements' => '<p>Entrant :</p><ul><li>donnée 1</li><li>donnée 2</li><li>donnée 3</li></ul><p>Sortant :</p><ul><li>donnée 4</li><li>donnée 5</li></ul>',
                'security_need_c' => 4,
                'owner' => 'Nestor',
                'created_at' => '2020-06-10 09:02:16',
                'updated_at' => '2021-05-14 15:29:36',
                'deleted_at' => NULL,
                'security_need_i' => 3,
                'security_need_a' => 2,
                'security_need_t' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Macro-Processus 2',
                'description' => '<p>Description du macro-processus</p>',
                'io_elements' => '<p>Valeur de test</p>',
                'security_need_c' => 1,
                'owner' => 'Simon',
                'created_at' => '2020-06-13 03:03:42',
                'updated_at' => '2021-05-14 09:21:10',
                'deleted_at' => NULL,
                'security_need_i' => 2,
                'security_need_a' => 3,
                'security_need_t' => 4,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Valeur de test',
                'description' => '<p>Valeur de test</p>',
                'io_elements' => '<p>Valeur de test</p>',
                'security_need_c' => 3,
                'owner' => 'All',
                'created_at' => '2020-08-09 07:32:37',
                'updated_at' => '2020-08-24 16:45:57',
                'deleted_at' => '2020-08-24 16:45:57',
                'security_need_i' => NULL,
                'security_need_a' => NULL,
                'security_need_t' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Proc3',
                'description' => '<p>dfsdf</p>',
                'io_elements' => '<p>dsfsdf</p>',
                'security_need_c' => 0,
                'owner' => NULL,
                'created_at' => '2020-08-31 16:13:55',
                'updated_at' => '2020-08-31 16:31:29',
                'deleted_at' => '2020-08-31 16:31:29',
                'security_need_i' => NULL,
                'security_need_a' => NULL,
                'security_need_t' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Proc4',
                'description' => '<p>dfsdf</p>',
                'io_elements' => '<p>dsfsdf</p>',
                'security_need_c' => 0,
                'owner' => NULL,
                'created_at' => '2020-08-31 16:19:32',
                'updated_at' => '2020-08-31 16:31:29',
                'deleted_at' => '2020-08-31 16:31:29',
                'security_need_i' => NULL,
                'security_need_a' => NULL,
                'security_need_t' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Proc5',
                'description' => '<p>dfsdf</p>',
                'io_elements' => '<p>dsfsdf</p>',
                'security_need_c' => 0,
                'owner' => NULL,
                'created_at' => '2020-08-31 16:29:20',
                'updated_at' => '2020-08-31 16:31:29',
                'deleted_at' => '2020-08-31 16:31:29',
                'security_need_i' => NULL,
                'security_need_a' => NULL,
                'security_need_t' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'MP1',
                'description' => '<p>sdfsdfs</p>',
                'io_elements' => NULL,
                'security_need_c' => 0,
                'owner' => NULL,
                'created_at' => '2020-08-31 16:31:40',
                'updated_at' => '2020-08-31 16:38:31',
                'deleted_at' => '2020-08-31 16:38:31',
                'security_need_i' => NULL,
                'security_need_a' => NULL,
                'security_need_t' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'MP2',
                'description' => '<p>sdfsdfs</p>',
                'io_elements' => NULL,
                'security_need_c' => 0,
                'owner' => NULL,
                'created_at' => '2020-08-31 16:37:39',
                'updated_at' => '2020-08-31 16:38:31',
                'deleted_at' => '2020-08-31 16:38:31',
                'security_need_i' => NULL,
                'security_need_a' => NULL,
                'security_need_t' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'MP3',
                'description' => '<p>sdfsdfs</p>',
                'io_elements' => NULL,
                'security_need_c' => 0,
                'owner' => NULL,
                'created_at' => '2020-08-31 16:38:06',
                'updated_at' => '2020-08-31 16:38:31',
                'deleted_at' => '2020-08-31 16:38:31',
                'security_need_i' => NULL,
                'security_need_a' => NULL,
                'security_need_t' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Macro-Processus 3',
                'description' => '<p>Description du troisième macro-processus</p>',
                'io_elements' => '<ul><li>un</li><li>deux</li><li>trois</li><li>quatre</li></ul>',
                'security_need_c' => 2,
                'owner' => 'Nestor',
                'created_at' => '2020-11-24 09:21:38',
                'updated_at' => '2021-05-14 09:20:55',
                'deleted_at' => NULL,
                'security_need_i' => 2,
                'security_need_a' => 2,
                'security_need_t' => 2,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Macro-Processus 4',
                'description' => '<p>Description du macro processus quatre</p>',
                'io_elements' => '<ul><li>crayon</li><li>stylos</li><li>gommes</li></ul>',
                'security_need_c' => 1,
                'owner' => 'Pirre',
                'created_at' => '2021-05-14 09:19:51',
                'updated_at' => '2021-09-22 13:00:08',
                'deleted_at' => '2021-09-22 13:00:08',
                'security_need_i' => 1,
                'security_need_a' => 1,
                'security_need_t' => 1,
            ),
        ));
        
        
    }
}