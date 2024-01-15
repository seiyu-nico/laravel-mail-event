<?php

namespace App\Listeners;

use Illuminate\Mail\Events\MessageSent;

class SaveEmailToDatabase
{
    public function handle(MessageSent $event)
    {
        dump($event->message->getTo());
        dump($event->message->getFrom());
        dump($event->message->getSubject());
        dump($event->message->getHtmlBody());

        // ここで何かの処理
    }
}
