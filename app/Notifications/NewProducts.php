<?php

namespace App\Notifications;

use App\Product;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class NewProducts extends Notification
{
    use Queueable;

    protected $product;



    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Product $product)
    {
        //
        $this->product=$product;

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
        return (new MailMessage)
                    ->subject('A new Product Released'.$this->product->name)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('http://127.0.0.1:8000/product'))
                    ->line('Thank you for using our application!');
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
