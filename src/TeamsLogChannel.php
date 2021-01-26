<?php

namespace Culy\Microsoft\Teams;

use Monolog\Logger;

class TeamsLogChannel
{
    /**
     * @return \Psr\Log\LoggerInterface
     */
    public function __invoke(array $config)
    {
        return new TeamsLogger($config['url'], $config['level'] ?? Logger::DEBUG);
    }
}
