<?php

namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class makeapiformrequest extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:apiRequest {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Api Form Request';

    /**
     * Execute the console command.
     */

protected function getDefaultNamespace($rootNamespace)
{
    return $rootNamespace .'/Http/Requests';
}

    public function getStub()
    {
        return __DIR__ . '/apiFormRequest.stub';
    }
}
