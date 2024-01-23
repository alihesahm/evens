<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class createparty extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct(private $party_id,private $user_creator,private $name,private $title,private $image_path)
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via( $notifiable): array
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     */

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toDatabase(object $notifiable): array
    {
        return [
            'party_id'=>$this->party_id,
            'user_creator'=>$this->user_creator,
            'name'=>$this->name,
            'title'=>$this->title,
            'image_path'=>$this->image_path,

        ];
    }
}
