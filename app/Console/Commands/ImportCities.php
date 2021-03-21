<?php

namespace App\Console\Commands;

use App\Imports\CitiesImport;
use Illuminate\Console\Command;

class ImportCities extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:cities';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cities, Districts, Neighborhoods importer';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->output->title('Aktarım Başladı');
        (new CitiesImport)->withOutput($this->output)->import(public_path('iller.xlsx'));
        $this->output->success('Başarılı');
    }
}
