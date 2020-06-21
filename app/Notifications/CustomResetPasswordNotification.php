<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;


class CustomResetPasswordNotification extends Notification 
{
    use Queueable;

    public $token;
 
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($token)
    {
        $this->token = $token;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $link = url( "/password/reset/?token=" . $this->token );
        
        return (new MailMessage)
                    ->subject('Recuperar contraseña - Switch Home')
                    ->greeting('¡Hola!')
                    ->line('Recibió este correo electrónico porque recibimos una solicitud de restablecimiento de contraseña para su cuenta.')
                    ->action('Recuperar contraseña', url('password/reset', $this->token))
                    ->line('Si no solicitó un restablecimiento de contraseña, no se requiere ninguna otra acción. Este enlace de restablecimiento de contraseña caducará en 60 minutos.')
                    ->line('Gracias por confiar en nosotros');
    }

}
