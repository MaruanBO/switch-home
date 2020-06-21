<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;


class IntrunderAlert extends Notification implements ShouldQueue
{
    use Queueable;

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->greeting('¡Hola!')
                    ->line('Hemos detectado intrusos en su hogar')
                    ->subject('Intruso detectado - Switch Home')
                    ->action('Detalles', url('http://127.0.0.1:8000'))
                    ->line('Gracias por confiar en nosotros');
    }
}
