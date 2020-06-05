<?php

namespace Zikula\SpecModule\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class HelloCommand extends ContainerAwareCommand
{
    /**
     * @var TranslatorInterface
     */
    protected $translator;

    public function setContainer(ContainerInterface $container = null)
    {
        parent::setContainer($container);
        $this->translator = $container->get('translator.default');
    }

    protected function configure()
    {
        $this
            ->setName('specmodule:hello')
            ->setDescription('Print hello message.')
            ->setHelp('This command is just a test.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);
        $io->text($this->translator->__('Hello, world.'));
    }
}
