<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(customerDataSeeder::class);

    }
}
// ['id' =>1,  'document' => '103.600.123-54',       'name' => 'Marcio',       'gender' => 'M', 'address' => 'Rua projetada b, c3, lt 12 - Vila São Judas',  'state' => 'Rio de Janeiro', 'city'=> 'Duque de Caxias'],
// ['id' =>2,  'document' => '932.200.453-99',       'name' => 'Jaqueline',       'gender' => 'F', 'address' =>'Rua projetada b, c3, lt 12 - Vila São Judas',  'state' => 'Rio de Janeiro', 'city'=> 'Duque de Caxias'],
// ['id' =>3,  'document' => '239.500.871-94',       'name' => 'Mario',       'gender' => 'M', 'address' =>'Rua projetada b, c3, lt 12 - Vila São Judas',  'state' => 'Rio de Janeiro', 'city'=> 'Duque de Caxias'],
// ['id' =>4,  'document' => '776.100.234-72',       'name' => 'Jefferson',       'gender' => 'M', 'address' =>'Rua projetada b, c3, lt 12 - Vila São Judas',  'state' => 'Rio de Janeiro', 'city'=> 'Duque de Caxias'],
// ['id' =>5,  'document' => '661.150.767-81',       'name' => 'Thomas',       'gender' => 'M', 'address' =>'Rua projetada b, c3, lt 12 - Vila São Judas',  'state' => 'Rio de Janeiro', 'city'=> 'Duque de Caxias'],
// ['id' =>6,  'document' => '223.501.123-51',       'name' => 'Cassia',       'gender' => 'F', 'address' =>'Rua projetada b, c3, lt 12 - Vila São Judas',  'state' => 'Rio de Janeiro', 'city'=> 'Duque de Caxias'],
// ['id' =>7,  'document' => '445.723.456-47',       'name' => 'Roberto',       'gender' => 'M', 'address' =>'Rua projetada b, c3, lt 12 - Vila São Judas',  'state' => 'Rio de Janeiro', 'city'=> 'Duque de Caxias'],
// ['id' =>8,  'document' => '544.698.234-49',       'name' => 'Felipe',       'gender' => 'M', 'address' =>'Rua projetada b, c3, lt 12 - Vila São Judas',  'state' => 'Rio de Janeiro', 'city'=> 'Duque de Caxias'],
// ['id' =>9,  'document' => '601.765.237-41',       'name' => 'Matheus',       'gender' => 'M', 'address' =>'Rua projetada b, c3, lt 12 - Vila São Judas',  'state' => 'Rio de Janeiro', 'city'=> 'Duque de Caxias'],
// ['id' =>10, 'document' => '235.234.543-07',       'name' => 'João',       'gender' => 'M', 'address' =>'Rua projetada b, c3, lt 12 - Vila São Judas',  'state' => 'Rio de Janeiro', 'city'=> 'Duque de Caxias'],
// ['id' =>11, 'document' => '743.601.721-06',       'name' => 'Layne',      'gender' => 'F', 'address' =>'Rua projetada b, c3, lt 12 - Vila São Judas', 'state' => 'Rio de Janeiro', 'city'=> 'Duque de Caxias'],
// ['id' =>12, 'document' => '494.123.371-05',       'name' => 'Taina1',      'gender' => 'F', 'address' =>'Rua projetada b, c3, lt 12 - Vila São Judas', 'state' => 'Rio de Janeiro', 'city'=> 'Duque de Caxias'],
// ['id' =>13, 'document' => '384.451.214-04',       'name' => 'Jana',      'gender' => 'F', 'address' =>'Rua projetada b, c3, lt 12 - Vila São Judas', 'state' => 'Rio de Janeiro', 'city'=> 'Duque de Caxias'],
// ['id' =>14, 'document' => '301.324.921-03',       'name' => 'Jamily',      'gender' => 'F', 'address' =>'Rua projetada b, c3, lt 12 - Vila São Judas', 'state' => 'Rio de Janeiro', 'city'=> 'Duque de Caxias'],
// ['id' =>15, 'document' => '501.451.310-01',       'name' => 'Fernanda',      'gender' => 'F', 'address' =>'Rua projetada b, c3, lt 12 - Vila São Judas', 'state' => 'Rio de Janeiro', 'city'=> 'Duque de Caxias'],
// ['id' =>16, 'document' => '734.172.842-02',       'name' => 'Camile',      'gender' => 'F', 'address' =>'Rua projetada b, c3, lt 12 - Vila São Judas', 'state' => 'Rio de Janeiro', 'city'=> 'Duque de Caxias'],
// ['id' =>17, 'document' => '595.786.091-98',       'name' => 'Mariana',      'gender' => 'F', 'address' =>'Rua projetada b, c3, lt 12 - Vila São Judas', 'state' => 'Rio de Janeiro', 'city'=> 'Duque de Caxias'],
// ['id' =>18, 'document' => '190.803.712-29',       'name' => 'Diogo',      'gender' => 'M', 'address' =>'Rua projetada b, c3, lt 12 - Vila São Judas', 'state' => 'Rio de Janeiro', 'city'=> 'Duque de Caxias'],
// ['id' =>19, 'document' => '151.987.231-10',       'name' => 'Diego',      'gender' => 'M', 'address' =>'Rua projetada b, c3, lt 12 - Vila São Judas', 'state' => 'Rio de Janeiro', 'city'=> 'Duque de Caxias'],
// ['id' =>20, 'document' => '074.691.578-93',       'name' => 'Fernando',      'gender' => 'M', 'address' =>'Rua projetada b, c3, lt 12 - Vila São Judas', 'state' => 'Rio de Janeiro', 'city'=> 'Duque de Caxias'],
// ['id' =>21, 'document' => '027.240.001-20',       'name' => 'Luciano',      'gender' => 'M', 'address' =>'Rua projetada b, c3, lt 12 - Vila São Judas', 'state' => 'Rio de Janeiro', 'city'=> 'Duque de Caxias'],
// ['id' =>22, 'document' => '587.024.122-34',       'name' => 'Udielisson',      'gender' => 'M', 'address' =>'Rua projetada b, c3, lt 12 - Vila São Judas', 'state' => 'Rio de Janeiro', 'city'=> 'Duque de Caxias'],
// ['id' =>23, 'document' => '130.091.142-53',       'name' => 'Walsilene',      'gender' => 'F', 'address' =>'Rua projetada b, c3, lt 12 - Vila São Judas', 'state' => 'Rio de Janeiro'], 'city'=> 'Duque de Caxias',
// ['id' =>24, 'document' => '150.753.021-24',       'name' => 'Maria',      'gender' => 'F', 'address' =>'Rua projetada b, c3, lt 12 - Vila São Judas', 'state' => 'Rio de Janeiro', 'city'=> 'Duque de Caxias'],