<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* DB::table('users')->insert([
            'name'=> 'Antonio Tomas',
            'email'=>'admin@correo.com',
            'tipo'=>'admin',
            'password'=>Hash::make('12345'),
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ]);

        DB::table('administradors')->insert([
            'user_id'=> '1',
            'UA_numeroSP'=>'TDDSFJK',
            'UA_nombre'=> 'Antonio',
            'UA_apellidoPaterno'=> 'Tomas',
            'UA_apellidoMaterno'=> 'Dominguez',
            'UA_correo'=> 'admin@correo.com',
            'UA_rol'=> 'Seridor publico',
            'UA_cargo'=> 'Departameto 2',
            'UA_fechaContratacion'=> '2012-11-25',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'name'=> 'Luis',
            'email'=>'user@correo.com',
            'tipo'=>'user',
            'password'=>Hash::make('12345'),
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ]);

        DB::table('estudiantes')->insert([
            'user_id'=> '2',
            'EST_numeroCuenta' => '2018194875',
            'EST_registroEstatalSS' => 'RESS-15htc',
            'EST_apellidoPaterno' => 'Marquez',
            'EST_apellidoMaterno' => 'Perez',
            'EST_nombre' => 'Luis',
            'EST_correo' => 'user@correo.com',
            'EST_edad' => '25',
            'EST_sexo' => 'Masculino',
            'EST_carrera' => 'Ing. Informatica',
            'EST_promedio' => '78.5',
            'EST_porcentajeCreditos' => '56',
            'EST_fechaNacimiento' => '2000-12-25',
            'EST_domicilio' => 'San Felipe',
            'EST_rfc' => 'LOTA998767',
            'EST_curp' => 'LOTA998767HIHDSFGBIHF',
            'EST_telefono' => '7121584785',
            'EST_codigoPostal' => '48578',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ]);*/
    } 
}
