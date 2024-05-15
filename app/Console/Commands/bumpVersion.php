<?php

namespace App\Console\Commands;

use App\Models\Version;
use Illuminate\Console\Command;

class bumpVersion extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:bump-version';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Bump Version of app by one build point';

    /**
     * Execute the console command.
     */
    public function handle(Version $version)
    {
        $this->comment($version->bump());
    }
}
