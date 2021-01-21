<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function solicitudServicio(Estudiante $estudiante)
    {
        $pdf = app('dompdf.wrapper');
        setlocale(LC_TIME, 'es_MX.UTF-8');
        $fecha = strftime('%d %B %G');
        $datos = [
            'fecha' => $fecha,
            'municipio' => $estudiante->seguimiento->entidades->entidad->ENR_municipio,
            'dependencia' => $estudiante->seguimiento->entidades->entidad->ENR_nombre,
            'responsable' => $estudiante->seguimiento->entidades->area->ARA_nombreResponsable .
                ' ' . $estudiante->seguimiento->entidades->area->ARA_apellidoPaterno .
                ' ' . $estudiante->seguimiento->entidades->area->ARA_apellidoMaterno,
            'cargo' => $estudiante->seguimiento->entidades->area->ARA_cargo,
            'area' => $estudiante->seguimiento->entidades->area->ARA_nombre,
            'jefe' => $estudiante->seguimiento->entidades->jefeInmediatos->JEI_nombre .
                ' ' . $estudiante->seguimiento->entidades->jefeInmediatos->JEI_apellidoPaterno .
                ' ' . $estudiante->seguimiento->entidades->jefeInmediatos->JEI_apellidoMaterno,
            'estudiante' => $estudiante->EST_nombre .
                ' ' . $estudiante->EST_apellidoPaterno .
                ' ' . $estudiante->EST_apellidoMaterno,
            'carrera' => $estudiante->EST_carrera . ' ' . $estudiante->EST_grupo,
            'cuenta' => $estudiante->EST_numeroCuenta,
            'creditos' => $estudiante->EST_porcentajeCreditos,
            'correo' => $estudiante->EST_correo,
            'telefono' => $estudiante->EST_telefono,
            'domicilio' => $estudiante->EST_domicilio,
            'edad' => $estudiante->EST_edad,
            'semestre' => $estudiante->EST_semestre,
        ];
        $pdf->loadView('pdf.solicitudservicio', $datos);
        return $pdf;
    }
    public function datosPrestador(Estudiante $estudiante)
    {
        $pdf = app('dompdf.wrapper');
        setlocale(LC_TIME, 'es_MX.UTF-8');
        $fecha = strftime('%d %B %G');
        $datos = [
            'estudiante' => $estudiante->EST_nombre .
                ' ' . $estudiante->EST_apellidoPaterno .
                ' ' . $estudiante->EST_apellidoMaterno,
            'fechanacimiento' => $estudiante->EST_fechaNacimiento,
            'edad' => $estudiante->EST_edad,
            'domicilio' => $estudiante->EST_domicilio,
            'rfc' => $estudiante->EST_rfc,
            'curp' => $estudiante->EST_curp,
            'telefono' => $estudiante->EST_telefono,
            'codigopostal' => $estudiante->EST_codigoPostal,
            'carrera' => $estudiante->EST_carrera,
            'semestre' => $estudiante->EST_semestre,
            'fecha' => $fecha,
        ];
        $pdf->loadView('pdf.datosprestador', $datos);
        return $pdf;
    }
    public function registroAutorizacion(Estudiante $estudiante)
    {
        $pdf = app('dompdf.wrapper');
        setlocale(LC_TIME, 'es_MX.UTF-8');
        $fecha = strftime('%d %B %G');
        $datos = [
            'fechaentrega' => 'Falta este dato',
            'estudiante' => $estudiante->EST_nombre .
                ' ' . $estudiante->EST_apellidoPaterno .
                ' ' . $estudiante->EST_apellidoMaterno,
            'correo' => $estudiante->EST_correo,
            'edad' => $estudiante->EST_edad,
            'sexo' => $estudiante->EST_sexo,
            'carrera' => $estudiante->EST_carrera,
            'creditos' => $estudiante->EST_porcentajeCreditos,
            'promedio' => $estudiante->EST_promedio,
            'dependencia' => $estudiante->seguimiento->entidades->entidad->ENR_nombre,
            'tipo' => 'Falta este dato',
            'area' => $estudiante->seguimiento->entidades->area->ARA_nombre,
            'domicilio' => $estudiante->seguimiento->entidades->entidad->ENR_calle .
                ' ' . $estudiante->seguimiento->entidades->entidad->ENR_domicilio .
                ' ' . $estudiante->seguimiento->entidades->entidad->ENR_municipio,
            'municipio' => $estudiante->seguimiento->entidades->entidad->ENR_municipio,
            'telefono' => $estudiante->telefonoDependencia,
            'responsable' => $estudiante->seguimiento->entidades->area->ARA_nombreResponsable .
                ' ' . $estudiante->seguimiento->entidades->area->ARA_apellidoPaterno .
                ' ' . $estudiante->seguimiento->entidades->area->ARA_apellidoMaterno,
            'programa' => $estudiante->seguimiento->entidades->entidad->ENR_programaParticipa,
            'actividades' => $estudiante->actividadesDependencia,
            'horario' => $estudiante->seguimiento->entidades->entidad->ENR_horario,
            'entrada' => $estudiante->seguimiento->entidades->entidad->ENR_horaEntrada,
            'salida' => $estudiante->seguimiento->entidades->entidad->ENR_HoraSalida,
            'inicio' => $estudiante->seguimiento->entidades->entidad->ENR_fechaInicio,
            'termino' => $estudiante->seguimiento->entidades->entidad->ENR_fechaTermino,
            'horas' => '480',
        ];
        $pdf->loadView('pdf.registroautorizacion', $datos);
        return $pdf;
    }
    public function anexoTecnico(Estudiante $estudiante)
    {
        $pdf = app('dompdf.wrapper');
        setlocale(LC_TIME, 'es_MX.UTF-8');
        $fecha = strftime('%d %B %G');
        $datos = [
            'inicio' => $estudiante->seguimiento->entidades->entidad->ENR_fechaInicio,
            'termino' => $estudiante->seguimiento->entidades->entidad->ENR_fechaTermino,
            'dependencia' => $estudiante->seguimiento->entidades->entidad->ENR_nombre,
            'area' => $estudiante->seguimiento->entidades->area->ARA_nombre,
            'responsable' => $estudiante->seguimiento->entidades->area->ARA_nombreResponsable .
                ' ' . $estudiante->seguimiento->entidades->area->ARA_apellidoPaterno .
                ' ' . $estudiante->seguimiento->entidades->area->ARA_apellidoMaterno,
            'cargo' => $estudiante->seguimiento->entidades->area->ARA_cargo,
            'direccion' => $estudiante->seguimiento->entidades->entidad->ENR_calle .
                ' ' . $estudiante->seguimiento->entidades->entidad->ENR_codigoPostal .
                ' ' . $estudiante->seguimiento->entidades->entidad->ENR_municipio,
            'municipio' => $estudiante->seguimiento->entidades->entidad->ENR_municipio,
            'codigopostal' => $estudiante->seguimiento->entidades->entidad->ENR_codigoPostal,
            'telefono' => $estudiante->seguimiento->entidades->entidad->ENR_telefono,
            'correo' => $estudiante->seguimiento->entidades->entidad->ENR_correo,
            'estimulo' => 'Falta este dato',
            'carrera' => $estudiante->EST_carrera,
            'actividades' => 'Falta este dato',
        ];
        $pdf->loadView('pdf.anexotecnico', $datos);
        return $pdf;
    }
    public function privado1(Estudiante $estudiante)
    {
        $pdf = app('dompdf.wrapper');
        setlocale(LC_TIME, 'es_MX.UTF-8');
        $fecha = strftime('%d %B %G');
        $datos = [
            'municipio' => $estudiante->seguimiento->entidades->entidad->ENR_municipio,
            'fecha' => $fecha,
            'responsable' => $estudiante->seguimiento->entidades->area->ARA_nombreResponsable .
                ' ' . $estudiante->seguimiento->entidades->area->ARA_apellidoPaterno .
                ' ' . $estudiante->seguimiento->entidades->area->ARA_apellidoMaterno .
                ', ' . $estudiante->seguimiento->entidades->area->ARA_cargo,
            'dependencia' => $estudiante->seguimiento->entidades->entidad->ENR_nombre .
                ' ' . $estudiante->seguimiento->entidades->entidad->ENR_calle .
                ' ' . $estudiante->seguimiento->entidades->entidad->ENR_codigoPostal .
                ' ' . $estudiante->seguimiento->entidades->entidad->ENR_municipio,
            'estudiante' => $estudiante->EST_nombre .
                ' ' . $estudiante->EST_apellidoPaterno .
                ' ' . $estudiante->EST_apellidoMaterno,
            'carrera' => $estudiante->EST_carrera,
            'cuenta' => $estudiante->EST_numeroCuenta,
            'area' => $estudiante->seguimiento->entidades->area->ARA_nombre,
            'horario' => $estudiante->seguimiento->entidades->entidad->ENR_horario,
            'entrada' => $estudiante->seguimiento->entidades->entidad->ENR_horaEntrada,
            'salida' => $estudiante->seguimiento->entidades->entidad->ENR_HoraSalida,
            'inicio' => $estudiante->seguimiento->entidades->entidad->ENR_fechaInicio,
            'termino' => $estudiante->seguimiento->entidades->entidad->ENR_fechaTermino,
        ];
        $pdf->loadView('pdf.solicitudprivado1', $datos);
        return $pdf;
    }
    public function privado2(Estudiante $estudiante)
    {
        $pdf = app('dompdf.wrapper');
        setlocale(LC_TIME, 'es_MX.UTF-8');
        $fecha = strftime('%d %B %G');
        $datos = [
            'municipio' => $estudiante->seguimiento->entidades->entidad->ENR_municipio,
            'fecha' => $fecha,
            'responsable' => $estudiante->seguimiento->entidades->area->ARA_nombreResponsable .
                ' ' . $estudiante->seguimiento->entidades->area->ARA_apellidoPaterno .
                ' ' . $estudiante->seguimiento->entidades->area->ARA_apellidoMaterno .
                ', ' . $estudiante->seguimiento->entidades->area->ARA_cargo,
            'dependencia' => $estudiante->seguimiento->entidades->entidad->ENR_nombre .
                ' ' . $estudiante->seguimiento->entidades->entidad->ENR_calle .
                ' ' . $estudiante->seguimiento->entidades->entidad->ENR_codigoPostal .
                ' ' . $estudiante->seguimiento->entidades->entidad->ENR_municipio,
            'estudiante' => $estudiante->EST_nombre .
                ' ' . $estudiante->EST_apellidoPaterno .
                ' ' . $estudiante->EST_apellidoMaterno,
            'estudiante2' => 'Falta este dato',
            'carrera' => $estudiante->EST_carrera,
            'cuenta' => $estudiante->EST_numeroCuenta,
            'area' => $estudiante->seguimiento->entidades->area->ARA_nombre,
            'horario' => $estudiante->seguimiento->entidades->entidad->ENR_horario,
            'entrada' => $estudiante->seguimiento->entidades->entidad->ENR_horaEntrada,
            'salida' => $estudiante->seguimiento->entidades->entidad->ENR_HoraSalida,
            'inicio' => $estudiante->seguimiento->entidades->entidad->ENR_fechaInicio,
            'termino' => $estudiante->seguimiento->entidades->entidad->ENR_fechaTermino,
            'estimulo' => 'Falta este dato',
        ];
        $pdf->loadView('pdf.solicitudprivado2', $datos);
        return $pdf;
    }
    public function privado3(Estudiante $estudiante)
    {
        $pdf = app('dompdf.wrapper');
        setlocale(LC_TIME, 'es_MX.UTF-8');
        $fecha = strftime('%d %B %G');
        $datos = [
            'municipio' => $estudiante->seguimiento->entidades->entidad->ENR_municipio,
            'fecha' => $fecha,
            'responsable' => $estudiante->seguimiento->entidades->area->ARA_nombreResponsable .
                ' ' . $estudiante->seguimiento->entidades->area->ARA_apellidoPaterno .
                ' ' . $estudiante->seguimiento->entidades->area->ARA_apellidoMaterno .
                ', ' . $estudiante->seguimiento->entidades->area->ARA_cargo,
            'dependencia' => $estudiante->seguimiento->entidades->entidad->ENR_nombre .
                ' ' . $estudiante->seguimiento->entidades->entidad->ENR_calle .
                ' ' . $estudiante->seguimiento->entidades->entidad->ENR_codigoPostal .
                ' ' . $estudiante->seguimiento->entidades->entidad->ENR_municipio,
            'estudiante' => $estudiante->EST_nombre .
                ' ' . $estudiante->EST_apellidoPaterno .
                ' ' . $estudiante->EST_apellidoMaterno,
            'estudiante2' => 'Falta este dato',
            'estudiante3' => 'Falta este dato',
            'carrera' => $estudiante->EST_carrera,
            'cuenta' => $estudiante->EST_numeroCuenta,
            'area' => $estudiante->seguimiento->entidades->area->ARA_nombre,
            'horario' => $estudiante->seguimiento->entidades->entidad->ENR_horario,
            'entrada' => $estudiante->seguimiento->entidades->entidad->ENR_horaEntrada,
            'salida' => $estudiante->seguimiento->entidades->entidad->ENR_HoraSalida,
            'inicio' => $estudiante->seguimiento->entidades->entidad->ENR_fechaInicio,
            'termino' => $estudiante->seguimiento->entidades->entidad->ENR_fechaTermino,
            'estimulo' => 'Falta este dato',
        ];
        $pdf->loadView('pdf.solicitudprivado3', $datos);
        return $pdf;
    }
}
