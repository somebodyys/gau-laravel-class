<?php

namespace App\Console\Commands;

use App\Classes\Car;
use App\Classes\SportCar;
use Illuminate\Console\Command;

class RunClassesCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:run-classes-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Executes command for testing!';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $car1 = new Car('red', 'f1', 15);
        $bugati = new SportCar('brown', 'k1', 89, 400);

        $bugati->changeColorWithRed();

        $bugati->lowerBackWindow();

        $car1->move();
        echo "\n";
        $bugati->move();

        dd([
            'car1' => $car1,
            'bugati' => $bugati
        ]);
    }
}
