<?php

namespace App\Console\Commands;

use App\classes\Planet;
use App\Notifications\PlanetCreatedNotification;
use Illuminate\Console\Command;

class SendNotificationToPlanets extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-notification-to-planets';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $planet = new Planet('test', 5000, 'test desc', true, ['test'], 'command@planet.org');

        $planet->notify(
            new PlanetCreatedNotification()
        );
    }
}
