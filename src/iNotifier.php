<?php

namespace yevheniiZhadan\Slack;

interface iNotifier
{
    public function sendMessage(string $title, string $message, string $channel);
}