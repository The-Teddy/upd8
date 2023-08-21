<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class customerDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customers = [
            ['id' =>1,  'document' => '103.600.123-54',       'name' => 'Marcio',       'birthday' => '1999-06-12', 'gender' =>'M',  'address' => 'Rua projetada b, c3, lt 12 - Vila São Judas', 'state' => 'Rio de Janeiro', 'city' => 'Duque de Caxias'],
            ['id' =>2,  'document' => '932.200.453-99',       'name' => 'Jaqueline',       'birthday' => '1952-04-11', 'gender' =>'F',  'address' => 'Rua projetada b, c3, lt 12 - Vila São Judas', 'state' => 'Rio de Janeiro', 'city' => 'Duque de Caxias'],
            ['id' =>3,  'document' => '239.500.871-94',       'name' => 'Mario',       'birthday' => '1989-07-04', 'gender' =>'M',  'address' => 'Rua projetada b, c3, lt 12 - Vila São Judas', 'state' => 'Rio de Janeiro', 'city' => 'Duque de Caxias'],
            ['id' =>4,  'document' => '776.100.234-72',       'name' => 'Jefferson',       'birthday' => '1993-10-31', 'gender' =>'M',  'address' => 'Rua projetada b, c3, lt 12 - Vila São Judas', 'state' => 'Rio de Janeiro', 'city' => 'Duque de Caxias'],
            ['id' =>5,  'document' => '661.150.767-81',       'name' => 'Thomas',       'birthday' => '1979-03-10', 'gender' =>'M',  'address' => 'Rua projetada b, c3, lt 12 - Vila São Judas', 'state' => 'Rio de Janeiro', 'city' => 'Duque de Caxias'],
            ['id' =>6,  'document' => '223.501.123-51',       'name' => 'Cassia',       'birthday' => '1987-05-08', 'gender' =>'F',  'address' => 'Rua projetada b, c3, lt 12 - Vila São Judas', 'state' => 'Rio de Janeiro', 'city' => 'Duque de Caxias'],
            ['id' =>7,  'document' => '445.723.456-47',       'name' => 'Roberto',       'birthday' => '1969-12-23', 'gender' =>'M',  'address' => 'Rua projetada b, c3, lt 12 - Vila São Judas', 'state' => 'Rio de Janeiro', 'city' => 'Duque de Caxias'],
            ['id' =>8,  'document' => '544.698.234-49',       'name' => 'Felipe',       'birthday' => '1982-08-31', 'gender' =>'M',  'address' => 'Rua projetada b, c3, lt 12 - Vila São Judas', 'state' => 'Rio de Janeiro', 'city' => 'Duque de Caxias'],
            ['id' =>9,  'document' => '601.765.237-41',       'name' => 'Matheus',       'birthday' => '1990-03-27', 'gender' =>'M',  'address' => 'Rua projetada b, c3, lt 12 - Vila São Judas', 'state' => 'Rio de Janeiro', 'city' => 'Duque de Caxias'],
            ['id' =>10, 'document' => '235.234.543-07',       'name' => 'João',       'birthday' => '1991-09-20', 'gender' =>'M',  'address' => 'Rua projetada b, c3, lt 12 - Vila São Judas', 'state' => 'Rio de Janeiro', 'city' => 'Duque de Caxias'],
            ['id' =>11, 'document' => '743.601.721-06',       'name' => 'Layne',      'birthday' => '1992-04-25', 'gender' =>'F', 'address' => 'Rua projetada b, c3, lt 12 - Vila São Judas', 'state' => 'Rio de Janeiro', 'city' => 'Duque de Caxias'],
            ['id' =>12, 'document' => '494.123.371-05',       'name' => 'Taina1',      'birthday' => '1990-01-23', 'gender' =>'F', 'address' => 'Rua projetada b, c3, lt 12 - Vila São Judas', 'state' => 'Rio de Janeiro', 'city' => 'Duque de Caxias'],
            ['id' =>13, 'document' => '384.451.214-04',       'name' => 'Jana',      'birthday' => '1993-09-18', 'gender' =>'F', 'address' => 'Rua projetada b, c3, lt 12 - Vila São Judas', 'state' => 'Rio de Janeiro', 'city' => 'Duque de Caxias'],
            ['id' =>14, 'document' => '301.324.921-03',       'name' => 'Jamily',      'birthday' => '1979-12-20', 'gender' =>'F', 'address' => 'Rua projetada b, c3, lt 12 - Vila São Judas', 'state' => 'Rio de Janeiro', 'city' => 'Duque de Caxias'],
            ['id' =>15, 'document' => '501.451.310-01',       'name' => 'Fernanda',      'birthday' => '1999-04-21', 'gender' =>'F', 'address' => 'Rua projetada b, c3, lt 12 - Vila São Judas', 'state' => 'Rio de Janeiro', 'city' => 'Duque de Caxias'],
            ['id' =>16, 'document' => '734.172.842-02',       'name' => 'Camile',      'birthday' => '1999-11-08', 'gender' =>'F', 'address' => 'Rua projetada b, c3, lt 12 - Vila São Judas', 'state' => 'Rio de Janeiro', 'city' => 'Duque de Caxias'],
            ['id' =>17, 'document' => '595.786.091-98',       'name' => 'Mariana',      'birthday' => '1957-12-08', 'gender' =>'F', 'address' => 'Rua projetada b, c3, lt 12 - Vila São Judas', 'state' => 'Rio de Janeiro', 'city' => 'Duque de Caxias'],
            ['id' =>18, 'document' => '190.803.712-29',       'name' => 'Diogo',      'birthday' => '1988-01-09', 'gender' =>'M', 'address' => 'Rua projetada b, c3, lt 12 - Vila São Judas', 'state' => 'Rio de Janeiro', 'city' => 'Duque de Caxias'],
            ['id' =>19, 'document' => '151.987.231-10',       'name' => 'Diego',      'birthday' => '1972-11-11', 'gender' =>'M', 'address' => 'Rua projetada b, c3, lt 12 - Vila São Judas', 'state' => 'Rio de Janeiro', 'city' => 'Duque de Caxias'],
            ['id' =>20, 'document' => '074.691.578-93',       'name' => 'Fernando',      'birthday' => '1990-10-31', 'gender' =>'M', 'address' => 'Rua projetada b, c3, lt 12 - Vila São Judas', 'state' => 'Rio de Janeiro', 'city' => 'Duque de Caxias'],
            ['id' =>21, 'document' => '027.240.001-20',       'name' => 'Luciano',      'birthday' => '2002-10-12', 'gender' =>'M', 'address' => 'Rua projetada b, c3, lt 12 - Vila São Judas', 'state' => 'Rio de Janeiro', 'city' => 'Duque de Caxias'],
            ['id' =>22, 'document' => '587.024.122-34',       'name' => 'Udielisson',      'birthday' => '1929-09-23', 'gender' =>'M', 'address' => 'Rua projetada b, c3, lt 12 - Vila São Judas', 'state' => 'Rio de Janeiro', 'city' => 'Duque de Caxias'],
            ['id' =>23, 'document' => '130.091.142-53',       'name' => 'Walsilene',      'birthday' => '1989-08-01', 'gender' =>'F', 'address' => 'Rua projetada b, c3, lt 12 - Vila São Judas', 'state' => 'Rio de Janeiro', 'city' => 'Duque de Caxias'],
            ['id' =>24, 'document' => '150.753.021-24',       'name' => 'Maria',      'birthday' => '1999-10-05', 'gender' =>'F', 'address' => 'Rua projetada b, c3, lt 12 - Vila São Judas', 'state' => 'Rio de Janeiro', 'city' => 'Duque de Caxias'],
            
            ['id' =>25,  'document' => '103.600.123-54',       'name' => 'Marcio',       'birthday' => '1999-06-12', 'gender' =>'M',  'address' => 'Rua projetada b, c3, lt 12 - Vila São Judas', 'state' => 'Rio de Janeiro', 'city' => 'Duque de Caxias'],
            ['id' =>26,  'document' => '932.200.453-99',       'name' => 'Jaqueline',       'birthday' => '1952-04-11', 'gender' =>'F',  'address' => 'Rua projetada b, c3, lt 12 - Vila São Judas', 'state' => 'Rio de Janeiro', 'city' => 'Duque de Caxias'],
            ['id' =>27,  'document' => '239.500.871-94',       'name' => 'Mario',       'birthday' => '1989-07-04', 'gender' =>'M',  'address' => 'Rua projetada b, c3, lt 12 - Vila São Judas', 'state' => 'Rio de Janeiro', 'city' => 'Duque de Caxias'],
            ['id' =>28,  'document' => '776.100.234-72',       'name' => 'Jefferson',       'birthday' => '1993-10-31', 'gender' =>'M',  'address' => 'Rua projetada b, c3, lt 12 - Vila São Judas', 'state' => 'Rio de Janeiro', 'city' => 'Duque de Caxias'],
            ['id' =>29,  'document' => '661.150.767-81',       'name' => 'Thomas',       'birthday' => '1979-03-10', 'gender' =>'M',  'address' => 'Rua projetada b, c3, lt 12 - Vila São Judas', 'state' => 'Rio de Janeiro', 'city' => 'Duque de Caxias'],
            ['id' =>30,  'document' => '223.501.123-51',       'name' => 'Cassia',       'birthday' => '1987-05-08', 'gender' =>'F',  'address' => 'Rua projetada b, c3, lt 12 - Vila São Judas', 'state' => 'Rio de Janeiro', 'city' => 'Duque de Caxias'],
            ['id' =>31,  'document' => '445.723.456-47',       'name' => 'Roberto',       'birthday' => '1969-12-23', 'gender' =>'M',  'address' => 'Rua projetada b, c3, lt 12 - Vila São Judas', 'state' => 'Rio de Janeiro', 'city' => 'Duque de Caxias'],
            ['id' =>32,  'document' => '544.698.234-49',       'name' => 'Felipe',       'birthday' => '1982-08-31', 'gender' =>'M',  'address' => 'Rua projetada b, c3, lt 12 - Vila São Judas', 'state' => 'Rio de Janeiro', 'city' => 'Duque de Caxias'],
            ['id' =>33,  'document' => '601.765.237-41',       'name' => 'Matheus',       'birthday' => '1990-03-27', 'gender' =>'M',  'address' => 'Rua projetada b, c3, lt 12 - Vila São Judas', 'state' => 'Rio de Janeiro', 'city' => 'Duque de Caxias'],
            ['id' =>34, 'document' => '235.234.543-07',       'name' => 'João',       'birthday' => '1991-09-20', 'gender' =>'M',  'address' => 'Rua projetada b, c3, lt 12 - Vila São Judas', 'state' => 'Rio de Janeiro', 'city' => 'Duque de Caxias'],
            ['id' =>35, 'document' => '743.601.721-06',       'name' => 'Layne',      'birthday' => '1992-04-25', 'gender' =>'F', 'address' => 'Rua projetada b, c3, lt 12 - Vila São Judas', 'state' => 'Rio de Janeiro', 'city' => 'Duque de Caxias'],
            ['id' =>36, 'document' => '494.123.371-05',       'name' => 'Taina1',      'birthday' => '1990-01-23', 'gender' =>'F', 'address' => 'Rua projetada b, c3, lt 12 - Vila São Judas', 'state' => 'Rio de Janeiro', 'city' => 'Duque de Caxias'],
            ['id' =>37, 'document' => '384.451.214-04',       'name' => 'Jana',      'birthday' => '1993-09-18', 'gender' =>'F', 'address' => 'Rua projetada b, c3, lt 12 - Vila São Judas', 'state' => 'Rio de Janeiro', 'city' => 'Duque de Caxias'],
            ['id' =>38, 'document' => '301.324.921-03',       'name' => 'Jamily',      'birthday' => '1979-12-20', 'gender' =>'F', 'address' => 'Rua projetada b, c3, lt 12 - Vila São Judas', 'state' => 'Rio de Janeiro', 'city' => 'Duque de Caxias'],
            ['id' =>39, 'document' => '501.451.310-01',       'name' => 'Fernanda',      'birthday' => '1999-04-21', 'gender' =>'F', 'address' => 'Rua projetada b, c3, lt 12 - Vila São Judas', 'state' => 'Rio de Janeiro', 'city' => 'Duque de Caxias'],
            ['id' =>40, 'document' => '734.172.842-02',       'name' => 'Camile',      'birthday' => '1999-11-08', 'gender' =>'F', 'address' => 'Rua projetada b, c3, lt 12 - Vila São Judas', 'state' => 'Rio de Janeiro', 'city' => 'Duque de Caxias'],
            ['id' =>41, 'document' => '595.786.091-98',       'name' => 'Mariana',      'birthday' => '1957-12-08', 'gender' =>'F', 'address' => 'Rua projetada b, c3, lt 12 - Vila São Judas', 'state' => 'Rio de Janeiro', 'city' => 'Duque de Caxias'],
            ['id' =>42, 'document' => '190.803.712-29',       'name' => 'Diogo',      'birthday' => '1988-01-09', 'gender' =>'M', 'address' => 'Rua projetada b, c3, lt 12 - Vila São Judas', 'state' => 'Rio de Janeiro', 'city' => 'Duque de Caxias'],
            ['id' =>43, 'document' => '151.987.231-10',       'name' => 'Diego',      'birthday' => '1972-11-11', 'gender' =>'M', 'address' => 'Rua projetada b, c3, lt 12 - Vila São Judas', 'state' => 'Rio de Janeiro', 'city' => 'Duque de Caxias'],
            ['id' =>44, 'document' => '074.691.578-93',       'name' => 'Fernando',      'birthday' => '1990-10-31', 'gender' =>'M', 'address' => 'Rua projetada b, c3, lt 12 - Vila São Judas', 'state' => 'Rio de Janeiro', 'city' => 'Duque de Caxias'],
            ['id' =>45, 'document' => '027.240.001-20',       'name' => 'Luciano',      'birthday' => '2002-10-12', 'gender' =>'M', 'address' => 'Rua projetada b, c3, lt 12 - Vila São Judas', 'state' => 'Rio de Janeiro', 'city' => 'Duque de Caxias'],
            ['id' =>46, 'document' => '587.024.122-34',       'name' => 'Udielisson',      'birthday' => '1929-09-23', 'gender' =>'M', 'address' => 'Rua projetada b, c3, lt 12 - Vila São Judas', 'state' => 'Rio de Janeiro', 'city' => 'Duque de Caxias'],
            ['id' =>47, 'document' => '130.091.142-53',       'name' => 'Walsilene',      'birthday' => '1989-08-01', 'gender' =>'F', 'address' => 'Rua projetada b, c3, lt 12 - Vila São Judas', 'state' => 'Rio de Janeiro', 'city' => 'Duque de Caxias'],
            ['id' =>48, 'document' => '150.753.021-24',       'name' => 'Maria',      'birthday' => '1999-10-05', 'gender' =>'F', 'address' => 'Rua projetada b, c3, lt 12 - Vila São Judas', 'state' => 'Rio de Janeiro', 'city' => 'Duque de Caxias'],
            
        ];
        Customer::upsert($customers, 'id');
    }
}
