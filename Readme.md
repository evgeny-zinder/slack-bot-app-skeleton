# Slack Bot Application skeleton

## Intro

This is a skeleton of app using [Slack bot framework](https://github.com/evgeny-zinder/slack-bot)

## Checking out and installing dependencies

    git clone git@github.com:evgeny-zinder/slack-bot-app-skeleton.git
    cd slack-bot-app-skeleton
    curl -sS https://getcomposer.org/installer | php
    php composer.phar install

## Launching

1. Start server

        php bin/slackbot.php server:start --config=<path to config.yml>

2. Start RTM WebSocket listener (if you plan to work with user input)

        php bin/slackbot.php rtm:start --config=<path to config.yml>

3. Run playbook

        php bin/slackbot.php playbook:run --playbook=<path to playbook.yml>

## Extending

You can extend ```src/mybot/Application.php``` by adding new command/request handlers
