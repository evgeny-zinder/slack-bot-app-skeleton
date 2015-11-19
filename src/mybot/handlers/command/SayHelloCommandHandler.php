<?php

namespace mybot\handlers\command;

use slackbot\handlers\command\BaseCommandHandler;
use slackbot\handlers\command\CommandHandlerInterface;

class SayHelloCommandHandler extends BaseCommandHandler
{
    public function getName()
    {
        return 'hello';
    }

    public function getAcl()
    {
        return CommandHandlerInterface::ACL_ANY;
    }

    public function processCommand(array $args, $channel)
    {
        $this->postMessage($channel, 'Hello, @channel!');
    }
}
