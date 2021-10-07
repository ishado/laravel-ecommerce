<?php

namespace App\Notifications\Frontend\Customer;

use Illuminate\Broadcasting\BroadcastManager;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class OrderCreatedNotification extends Notification implements ShouldQueue
{
    use Queueable;

    public $order;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($order)
    {
        $this->order = $order;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database','broadcast'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    // public function toMail($notifiable)
    // {
    //     return (new MailMessage)
    //                 ->line('The introduction to the notification.')
    //                 ->action('Notification Action', url('/'))
    //                 ->line('Thank you for using our application!');
    // }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toDatabase($notifiable)
    {
        return [
            'customer_id'   => $this->order->user_id,
            'customer_name' => $this->order->user->full_name,
            'order_id'      => $this->order->id,
            'amount'        => $this->order->total,
            'order_url'     => route('admin.orders.show', $this->order->id),
            'created_date'  => $this->order->created_at->format('M d, Y'),
        ];
    }

    public function toBroadcast($notifiable)
    {
        return new BroadcastManager([
            'data' => [
                'customer_id'   => $this->order->user_id,
                'customer_name' => $this->order->user->full_name,
                'order_id'      => $this->order->id,
                'amount'        => $this->order->total,
                'order_url'     => route('admin.orders.show', $this->order->id),
                'created_date'  => $this->order->created_at->format('M d, Y'),
            ]
        ]);
    }
}