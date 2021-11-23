<?php

namespace App\Notifications;

use App\Models\Article;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use NotificationChannels\Telegram\TelegramChannel;
use NotificationChannels\Telegram\TelegramMessage;

class PostArticleToTelegram extends Notification
{
    use Queueable;

    public function __construct(public Article $article)
    {
    }

    public function via($notifiable)
    {
        return [TelegramChannel::class];
    }

    public function toTelegram($notifiable)
    {
        return TelegramMessage::create()
            ->to('@laravelcm')
            ->content("{$this->article->title} " . route('articles.show', $this->article->slug()));
    }
}