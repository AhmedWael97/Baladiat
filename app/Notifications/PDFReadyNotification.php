<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PDFReadyNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    protected $fileName;
    protected $path;

    public function __construct($fileName, $path)
    {
        $this->fileName = $fileName;
        $this->path = $path;
    }

    public function via($notifiable)
    {
        return ['database']; // Or 'database' if you prefer a database notification
    }



    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'path' => $this->path,
            'file_name' => $this->fileName
        ];
    }
}
