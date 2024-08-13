<?php
namespace Iantoo\LaravelUniqueNumber\Commands;

use Illuminate\Console\Command;
use Iantoo\LaravelUniqueNumber\UniqueNumber;

class UniqueNumberCommand extends Command {

    protected $signature = 'unique-number:generate';
    protected $description = 'Generate a uniwque number based on the year, month and day.';

    protected $uniqueNumber;

    public function __construct(UniqueNumber $uniqueNumber){
        parent::__construct();
        $this->uniqueNumber = $uniqueNumber;
    }

    public function handle(){
        $this->info('Unique Number: ' . $this->uniqueNumber->generate());
    }
}