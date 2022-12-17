<?php

namespace App\Log;

use Monolog\Handler\StreamHandler;
use Monolog\Level;
use Monolog\Logger;

class Monolog
{
    static public function gearLog(string $mensagem)
    {
        // create a log channel
        $log = new Logger('app');
        $log->pushHandler(new StreamHandler('app.log', Level::Warning));

        // add records to the log
        $log->warning($mensagem);
        $log->error('cursos');
    }
}
