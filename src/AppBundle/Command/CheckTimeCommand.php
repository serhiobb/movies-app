<?php

namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class CheckTimeCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('CheckTime')
            ->setDescription('...')
            ->addArgument('argument', InputArgument::OPTIONAL, 'Argument description')
            ->addOption('option', null, InputOption::VALUE_NONE, 'Option description')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $argument = $input->getArgument('argument');

        if ($input->getOption('option')) {
            // ...
        }

        //
        $initialTime = "31.03.2015 17:59";
        var_dump($initialTime);
        $timeStamp = (new \IntlDateFormatter('en_US', \IntlDateFormatter::SHORT, \IntlDateFormatter::SHORT, 'Europe/Moscow', \IntlDateFormatter::GREGORIAN,'dd.MM.yyyy HH:mm'))->parse($initialTime);
        $dt = new \DateTime('@'.$timeStamp.' UTC');
        $dt->setTimezone(new \DateTimeZone('Europe/Moscow'));
        var_dump($dt);

        $output->writeln('Command result.');
    }

}
