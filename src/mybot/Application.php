<?php

namespace mybot;

use mybot\handlers\command\SayHelloCommandHandler;

class Application extends \slackbot\Application
{
    public function bootstrap()
    {
        parent::bootstrap();

        $container = $this->getContainer();
        $command = new SayHelloCommandHandler();
        $container['core_processor']->addCommandHandler($command);
    }
}
