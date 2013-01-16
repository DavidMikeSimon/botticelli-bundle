<?php
namespace DavidMikeSimon\BotticelliBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ShellCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('botticelli:shell')
            ->setDescription('Start an interactive PHP shell')
            ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $shellStartupPath = realpath(__DIR__ . "/../ShellStartup.php");
        pcntl_exec("/usr/local/bin/phpsh", [$shellStartupPath]);
    }
}
