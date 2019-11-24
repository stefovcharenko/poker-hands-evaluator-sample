<?php

namespace App\Command;

use Stefan\PokerHandsEvaluator\Output\StringOutput;
use Stefan\PokerHandsEvaluator\Parser\TextSourceParser;
use Stefan\PokerHandsEvaluator\PokerHandsEvaluator;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\{InputArgument, InputInterface};
use Symfony\Component\Console\Output\OutputInterface;

class PokerHandsEvaluateCommand extends Command
{
    protected static $defaultName = 'app:evaluate-poker-hands';

    protected function configure()
    {
        $this
            ->setDescription('Evaluates poker hands from specified file.')
            ->addArgument('filePath', InputArgument::REQUIRED, 'Path to source file.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $evaluator = new PokerHandsEvaluator();
        $evaluator
            ->setOutput(new StringOutput())
            ->setParser(new TextSourceParser($input->getArgument('filePath')));

        $output->writeln($evaluator->process());
    }
}