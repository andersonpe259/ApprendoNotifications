<?php

namespace App\Notifications;

use App\Models\content;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class EditContentNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(content $materia, $oldTittle)
    {
        $this->materia = $materia;
        $this->oldTittle = $oldTittle; 
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
        $old = 'O conteúdo '. $this->oldTittle . ' foi atualizado!';
        $cont = 'Novo Título: ' . $this->materia->tittle;
        return (new MailMessage)
                    ->line($old)
                    ->line('Informações Gerais:')
                    ->line($cont)
                    ->action('Deseja ver mais? Acesse: ', url('/content'))
                    ->line('Apprendo sempre ao seu dispor.');
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
