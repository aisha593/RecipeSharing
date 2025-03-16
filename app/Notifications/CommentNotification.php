<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class CommentNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public $comments;
    public function __construct($comments)
    {
        $this->comments = $comments;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function todatabase(object $notifiable)
    {
        return[
           'message' => 'User ' .$this->comments->user->name. ' commented on your recipe!',
              'comment' => $this->comments->comment,
              'name' => $this->comments->user->name,
                'recipe_id' => $this->comments->recipe_id,
                'action' => (url('/recipe/card/'.$this->comments->recipe_id))


        ];
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
