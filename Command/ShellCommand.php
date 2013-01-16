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
        $execPath = $this->findPhpshExecutable();
        $shellStartupPath = realpath(__DIR__ . "/../ShellStartup.php");
        pcntl_exec($execPath, [$shellStartupPath]);
    }

    private function findPhpshExecutable()
    {
        $output = shell_exec("which phpsh");
        if ($output === FALSE) {
            throw new \Exception("Unable to run 'which' to locate phpsh");
        } else {
            $output = trim($output);
            if ($output == '') {
                throw new \Exception("Unable to locate phpsh in your PATH");
            } else {
                return explode("\n", $output)[0];
            }
        }
    }
}
