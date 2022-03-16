<?php namespace Ashiba\Commands;

use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Command\Command as SymfonyCommand;
use Ashiba\ResourceFiles;
use Symfony\Component\Console\Question\ChoiceQuestion;

class ResourceCreateCommand extends SymfonyCommand {

    /**
     * Configure the command.
     */
    public function configure()
    {
        $this->setName('create:resource')
             ->setDescription('Create a new set of resources: controller, model, view, shortcode, js, scss files.')
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

        // create new js -> {admin}|{client} -> resource name -> index.js file
        $helper = $this->getHelper('question');
        $question = new ChoiceQuestion(
            'Select a resource area (defaults to client)',
            // choices can also be PHP objects that implement __toString() method
            ['client', 'admin'],
            0
        );
        $viewQuestion = new ChoiceQuestion(
            'Add a view file? (defaults to no)',
            // choices can also be PHP objects that implement __toString() method
            ['no', 'yes'],
            0
        );
        
        $question->setErrorMessage('Area %s is invalid.');
        $viewQuestion->setErrorMessage('Answer %s is invalid.');

        $createView   = $helper->ask($input, $output, $viewQuestion);
        $resourceArea = $helper->ask($input, $output, $question);

        new ResourceFiles($input, $output, $resourceArea, $createView);
        
        // create new view -> resource name.php

    }

}