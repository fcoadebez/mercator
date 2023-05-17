<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DemoEntitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('entities')->delete();
        
        \DB::table('entities')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'MegaNet System',
                'security_level' => '<p>ISO 27001</p>',
                'contact_point' => '<p>Helpdek<br>27, Rue des poire&nbsp;<br>12043 Mire-en-Mare le Bains</p><p>helpdes@menetsys.org</p>',
                'description' => '<p>Fournisseur équipement réseau</p>',
                'created_at' => '2020-05-21 04:30:59',
                'updated_at' => '2022-05-20 17:30:00',
                'deleted_at' => NULL,
                'is_external' => true,
                'entity_type' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Entité1',
                'security_level' => '<p>Néant</p>',
                'contact_point' => '<ul><li>Commercial</li><li>Service Delivery</li><li>Helpdesk</li></ul>',
                'description' => '<p>Entité de tests1</p>',
                'created_at' => '2020-05-21 04:31:17',
                'updated_at' => '2021-05-23 14:59:11',
                'deleted_at' => NULL,
                'is_external' => false,
                'entity_type' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'CHdN',
                'security_level' => '3',
                'contact_point' => 'RSSI du CHdN',
                'description' => '<p>Centre Hospitalier du Nord</p>',
                'created_at' => '2020-05-21 04:43:41',
                'updated_at' => '2021-05-13 10:20:32',
                'deleted_at' => '2021-05-13 10:20:32',
                'is_external' => false,
                'entity_type' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Entité3',
                'security_level' => '<p>ISO 9001</p>',
                'contact_point' => '<p>Point de contact de la troisième entité</p>',
                'description' => '<p>Description de la troisième entité.</p>',
                'created_at' => '2020-05-21 04:44:03',
                'updated_at' => '2021-07-20 21:20:37',
                'deleted_at' => NULL,
                'is_external' => false,
                'entity_type' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'entité6',
                'security_level' => '<p>Néant</p>',
                'contact_point' => '<p>support_informatque@entite6.fr</p>',
                'description' => '<p>Description de l\'entité six</p>',
                'created_at' => '2020-05-21 04:44:18',
                'updated_at' => '2021-05-23 15:03:15',
                'deleted_at' => NULL,
                'is_external' => false,
                'entity_type' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Entité4',
                'security_level' => '<p>ISO 27001</p>',
                'contact_point' => '<p>Pierre Pinon<br>Tel: 00 34 392 484 22</p>',
                'description' => '<p>Description de l\'entté quatre</p>',
                'created_at' => '2020-05-21 04:45:14',
                'updated_at' => '2021-05-23 15:01:17',
                'deleted_at' => NULL,
                'is_external' => false,
                'entity_type' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Entité5',
                'security_level' => '<p>Néant</p>',
                'contact_point' => '<p>Servicdesk@entite5.fr</p>',
                'description' => '<p>Description de l\'entité 5</p>',
                'created_at' => '2020-05-21 05:38:41',
                'updated_at' => '2021-05-23 15:02:16',
                'deleted_at' => NULL,
                'is_external' => false,
                'entity_type' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Entité2',
                'security_level' => '<p>ISO 27001</p>',
                'contact_point' => '<p>Point de contact de l\'entité 2</p>',
                'description' => '<p>Description de l\'entité 2</p>',
                'created_at' => '2020-05-21 05:54:22',
                'updated_at' => '2021-05-23 15:00:03',
                'deleted_at' => NULL,
                'is_external' => false,
                'entity_type' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'NetworkSys',
                'security_level' => '<p>ISO 27001</p>',
                'contact_point' => '<p>support@networksys.fr</p>',
                'description' => '<p>Description de l’entité NetworkSys</p>',
                'created_at' => '2020-05-21 08:25:15',
                'updated_at' => '2022-05-20 17:30:00',
                'deleted_at' => NULL,
                'is_external' => true,
                'entity_type' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Agence eSanté',
                'security_level' => '<p>Néant</p>',
                'contact_point' => '<p>helpdesk@esante.lu</p>',
                'description' => '<p>Agence Nationale des information partagées dans le domaine de la santé</p><ul><li>a</li><li>b</li><li>c</li></ul><p>+-------+<br>+ TOTO +<br>+-------+</p><p>&lt;&lt;&lt;&lt;&lt;&lt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;</p>',
                'created_at' => '2020-05-21 08:25:26',
                'updated_at' => '2021-05-13 10:20:32',
                'deleted_at' => '2021-05-13 10:20:32',
                'is_external' => false,
                'entity_type' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Test',
                'security_level' => '4',
                'contact_point' => NULL,
                'description' => '<p>Test</p>',
                'created_at' => '2020-07-02 17:37:29',
                'updated_at' => '2020-07-02 17:37:44',
                'deleted_at' => '2020-07-02 17:37:44',
                'is_external' => false,
                'entity_type' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Pierre et fils',
                'security_level' => '<p>Certifications :&nbsp;<br>- ISO 9001<br>- ISO 27001<br>- ISO 31000</p>',
                'contact_point' => '<p>Paul Pierre<br>Gérant<br>00 33 4943 432 423</p>',
                'description' => '<p>Description de l\'entité de test</p>',
                'created_at' => '2020-07-06 15:37:54',
                'updated_at' => '2022-05-20 17:30:00',
                'deleted_at' => NULL,
                'is_external' => true,
                'entity_type' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Nestor',
                'security_level' => '<p>Haut niveau</p>',
                'contact_point' => '<p>Paul, Pierre et Jean</p>',
                'description' => '<p>Description de Nestor</p>',
                'created_at' => '2020-08-12 18:11:31',
                'updated_at' => '2020-08-12 18:12:13',
                'deleted_at' => NULL,
                'is_external' => false,
                'entity_type' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => '0001',
                'security_level' => NULL,
                'contact_point' => NULL,
                'description' => '<p>rrzerze</p>',
                'created_at' => '2021-06-15 17:16:31',
                'updated_at' => '2021-06-15 17:17:08',
                'deleted_at' => '2021-06-15 17:17:08',
                'is_external' => false,
                'entity_type' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => '002',
                'security_level' => NULL,
                'contact_point' => NULL,
                'description' => '<p>sdqsfsd</p>',
                'created_at' => '2021-06-15 17:16:41',
                'updated_at' => '2021-06-15 17:17:08',
                'deleted_at' => '2021-06-15 17:17:08',
                'is_external' => false,
                'entity_type' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => '003',
                'security_level' => NULL,
                'contact_point' => NULL,
                'description' => '<p>dsqdsq</p>',
                'created_at' => '2021-06-15 17:16:51',
                'updated_at' => '2021-06-15 17:17:08',
                'deleted_at' => '2021-06-15 17:17:08',
                'is_external' => false,
                'entity_type' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => '004',
                'security_level' => NULL,
                'contact_point' => NULL,
                'description' => '<p>dqqqsdqs</p>',
                'created_at' => '2021-06-15 17:17:01',
                'updated_at' => '2021-06-15 17:17:08',
                'deleted_at' => '2021-06-15 17:17:08',
                'is_external' => false,
                'entity_type' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Acme corp.',
                'security_level' => '<p>None sorry...</p>',
                'contact_point' => '<p>Do not call me, I will call you back.</p>',
                'description' => '<p>Looney tunes academy</p>',
                'created_at' => '2021-09-07 20:07:16',
                'updated_at' => '2022-05-20 17:30:00',
                'deleted_at' => NULL,
                'is_external' => true,
                'entity_type' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'HAL',
                'security_level' => '<p>Top security certification</p>',
                'contact_point' => '<p>hal@corp.com</p>',
                'description' => '<p>Very big HAL corporation</p>',
                'created_at' => '2021-09-07 20:08:56',
                'updated_at' => '2021-09-07 20:09:17',
                'deleted_at' => NULL,
                'is_external' => false,
                'entity_type' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'ATest1',
                'security_level' => NULL,
                'contact_point' => NULL,
                'description' => NULL,
                'created_at' => '2022-04-25 14:43:46',
                'updated_at' => '2022-04-25 14:44:02',
                'deleted_at' => '2022-04-25 14:44:02',
                'is_external' => false,
                'entity_type' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'ATest2',
                'security_level' => NULL,
                'contact_point' => NULL,
                'description' => NULL,
                'created_at' => '2022-04-25 14:43:56',
                'updated_at' => '2022-04-25 14:44:02',
                'deleted_at' => '2022-04-25 14:44:02',
                'is_external' => false,
                'entity_type' => NULL,
            ),
        ));
        
        
    }
}