<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 22/11/18
 * Time: 12:30
 */

namespace MasteringPHP7\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class CustomerRegisterCommand extends Command
{
    protected function configure(): void
    {
        $this->setName('customer:register')
            ->setDescription('Registers new customer.');

        $this->addArgument(
            'name', InputArgument::REQUIRED, 'Customer full name.'
        );

        $this->addArgument(
            'email', InputArgument::REQUIRED, 'Customer email.'
        );

        $this->addArgument(
            'dob', InputArgument::OPTIONAL, 'Customer date of birth.'
        );

        $this->addOption(
            'email', null, InputOption::VALUE_REQUIRED, 'Send email to cusomer?'
        );

        $this->addOption(
            'log', null, InputOption::VALUE_OPTIONAL, 'Log to event system?'
        );
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        var_dump($input->getArgument('name'));
        var_dump($input->getArgument('email'));
        var_dump($input->getArgument('dob'));
        var_dump($input->getOption('email'));
        var_dump($input->getOption('log'));
    }


}