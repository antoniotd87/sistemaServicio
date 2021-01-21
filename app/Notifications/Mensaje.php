<?php

namespace App\Notifications;

use App\Models\Estudiante;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class Mensaje extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Estudiante $estudiante,$mensaje,$accion)
    {
        $this->idEstudiante = $estudiante->id;
        $this->nombre = $estudiante->EST_nombre.' '.$estudiante->EST_apellidoPaterno;
        $this->mensaje = $mensaje;
        $this->accion = $accion;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail', 'database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line('Prueba de notificacioon.')
            ->line('El alumno es ' . $this->nombre)
            ->action('Visita la pagina', url('/'))
            ->line('Gracias por usar SistemaServicio');
    }
    public function toDatabase($notifiable)
    {
        return [
            'id' => $this->idEstudiante,
            'nombre' => $this->nombre,
            'mensaje' => $this->mensaje,
            'accion' => $this->accion
        ];
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
