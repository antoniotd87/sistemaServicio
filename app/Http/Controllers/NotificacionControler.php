<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use App\Notifications\Feedback;
use Illuminate\Http\Request;

class NotificacionControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data =  auth()->user()->unreadNotifications;
        $data2 =  auth()->user()->readNotifications()->paginate(5);
        return view('vistas.notify.index', compact('data','data2'));
    }

    public function showDocument($request)
    {
        $request = explode('&', $request);
        $estudiante = Estudiante::find($request[0]);
        $pdfController = new PDFController();
        $pdf = '';
        switch ($request[1]) {
            case 'SolicitudServicio':
                $pdf = $pdfController->solicitudServicio($estudiante);
                break;
            case 'DatosPrestador':
                $pdf = $pdfController->datosPrestador($estudiante);
                break;
            case 'RegistroAutorizacion':
                $pdf = $pdfController->registroAutorizacion($estudiante);
                break;
            case 'AnexoTecnico':
                $pdf = $pdfController->anexoTecnico($estudiante);
                break;
            case 'SolicitudPrivado1':
                $pdf = $pdfController->privado1($estudiante);
                break;
            case 'SolicitudPrivado2':
                $pdf = $pdfController->privado2($estudiante);
                break;
            case 'SolicitudPrivado3':
                $pdf = $pdfController->privado3($estudiante);
                break;
            default:
                # code...
                break;
        }
        return $pdf->stream();
    }
    public function sendMessage(Request $request, $estudiante)
    {
        $request->validate([
            'mensaje' => 'required|min:10'
        ]);
        auth()->user()->unreadNotifications->where('id', '=', $request->notificacion)->markAsRead();
        $estudiante = Estudiante::find($estudiante);
        $estudiante->usuario->notify(new Feedback($request->mensaje, $request->accion));
        // $mensaje = 'Creacion de la solicitud de servicio social';
        // $admin->;
        // $data =  auth()->user()->unreadNotifications;
        return redirect()->route('notificacion.index');
        // return view('vistas.notify.index', compact('data'));
    }
}
