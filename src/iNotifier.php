<?php

namespace YevheniiZhadan\Slack;

interface iNotifier
{
    public function sendMessage(string $title, string $message, string $channel);
}