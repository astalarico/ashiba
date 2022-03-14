<?php namespace Ashiba\Commands;

use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Command\Command as SymfonyCommand;

class ResourceCreateCommand extends SymfonyCommand {

    /**
     * Configure the command.
     */
    public function configure()
    {
        $this->setName('create:resource')
             ->setDescription('Create a new resource')
             ->addArgument('name', InputArgument::REQUIRED);
    }

    /**
     * Execute the command.
     *
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return void
     */
    public function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('<info> Resource Created!</info>');
    }

}