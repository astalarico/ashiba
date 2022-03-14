<?php namespace Ashiba\Commands;

use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Command\Command as SymfonyCommand;

class ForgePluginCommand extends SymfonyCommand {

    /**
     * Configure the command.
     */
    public function configure()
    {
        $this->setName('forge')
             ->setDescription('Forge a new ashiba plugin')
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
        // clone copy of plugin with a name from input
        $output->writeln('<info> New Ashiba Plugin Forged</info>');
    }

}