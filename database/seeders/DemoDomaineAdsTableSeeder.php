<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DemoDomaineAdsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('domaine_ads')->delete();
        
        \DB::table('domaine_ads')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Dom1',
                'description' => '<p>Domaine AD1</p>',
                'domain_ctrl_cnt' => 3,
                'user_count' => 2000,
                'machine_count' => 800,
                'relation_inter_domaine' => 'Non',
                'created_at' => '2020-07-03 09:51:06',
                'updated_at' => '2020-07-03 09:51:06',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'test domain',
                'description' => '<p>this is a test</p>',
                'domain_ctrl_cnt' => NULL,
                'user_count' => NULL,
                'machine_count' => NULL,
                'relation_inter_domaine' => NULL,
                'created_at' => '2021-05-27 15:24:52',
                'updated_at' => '2021-05-27 15:29:15',
                'deleted_at' => '2021-05-27 15:29:15',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Dom2',
                'description' => '<p>Second domaine active directory</p>',
                'domain_ctrl_cnt' => 2,
                'user_count' => 100,
                'machine_count' => 1,
                'relation_inter_domaine' => 'Néant',
                'created_at' => '2021-05-27 15:29:43',
                'updated_at' => '2021-05-27 15:29:43',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Dom5',
                'description' => '<p>Domaine cinq</p>',
                'domain_ctrl_cnt' => NULL,
                'user_count' => NULL,
                'machine_count' => NULL,
                'relation_inter_domaine' => NULL,
                'created_at' => '2021-05-27 15:39:08',
                'updated_at' => '2021-05-27 15:39:08',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Dom4',
                'description' => '<p>Domaine quatre</p>',
                'domain_ctrl_cnt' => NULL,
                'user_count' => NULL,
                'machine_count' => NULL,
                'relation_inter_domaine' => NULL,
                'created_at' => '2021-05-27 15:39:20',
                'updated_at' => '2021-05-27 15:39:20',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}