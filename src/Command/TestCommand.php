<?php
namespace CryptoWho\ThemeBootstrap;

use Cake\Console\Arguments;
use Cake\Console\Command;
use Cake\Console\ConsoleIo;
use Cake\Cache\Cache;

use Binance\Api;

class TestCommand extends \Stream\Command\StreamBaseCommand
{


    public function execute(Arguments $args, ConsoleIo $io)
    {
        $io->out('test ...');
    }

}