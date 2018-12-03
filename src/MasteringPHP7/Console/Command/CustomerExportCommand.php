<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 22/11/18
 * Time: 12:31
 */

namespace MasteringPHP7\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CustomerExportCommand extends Command
{
    protected function configure()
    {
        $this->setName('customer:export')
            ->setDescription('Exports one or more customers.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // Fake
        $customers = [
            ['John Doe','john@john.com', '1983-01-16'],
            ['Samantha Smith','samantha@samantha.com', '1986-10-23'],
            ['Robert Black','robert@robert.com', '1978-11-18'],
        ];

        // Progress bar helper
        $progress = new ProgressBar($output, \count($customers));

        //Fake commands
        $max = \count($customers);
        for ($i  = 1; $i <= $max; $i++){
            sleep(5);
            $progress->advance();
        }

        $progress->finish();

        // Table helper
        $table = new Table($output);
        $table->setHeaders(['Name', 'Email', 'DOB'])
            ->setRows($customers)
            ->render();
    }

}