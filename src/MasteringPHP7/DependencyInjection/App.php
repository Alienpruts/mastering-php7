<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 1/12/18
 * Time: 21:40
 */

namespace MasteringPHP7\DependencyInjection;



class App
{
    private $config;
    private $logger;


    /**
     * App constructor.
     * @param ConfigInterface $config
     * @param LoggerInterface $logger
     */
    public function __construct(ConfigInterface $config, LoggerInterface $logger)
    {
        $this->config = $config;
        $this->logger = $logger;
    }

    public function run(): void
    {
        $this->config->setValue('executed_at', time());
        $this->logger->log('executed');
    }
}