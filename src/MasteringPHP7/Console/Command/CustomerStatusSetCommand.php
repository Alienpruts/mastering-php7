<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 22/11/18
 * Time: 12:30
 */

namespace MasteringPHP7\Console\Command;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CustomerStatusSetCommand extends Command
{
    protected function configure()
    {
        $this->setName('customer:status:set')
            ->setDescription('Enables or disables existing customer.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Customer disabled.');
    }


}