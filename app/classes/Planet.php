<?php

namespace App\classes;

use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

class Planet
{
    use Notifiable;

    protected string $name;
    protected float $diameter;
    protected string $description;
    protected bool $atmosphere;
    protected array $minerals = [];
    protected string $email;

    protected string $table = 'planets';

    public function __construct(string $name, float $diameter, string $description, bool $atmosphere, array $minerals, string $email)
    {
        $this->name = $name;
        $this->diameter = $diameter;
        $this->description = $description;
        $this->atmosphere = $atmosphere;
        $this->minerals = $minerals;
        $this->email = $email;
    }


    public function routeNotificationFor($driver, $notification = null): string
    {
        return $this->email;
    }

    protected function create(){
        DB::table($this->table)->insert([
            'name' => $this->name,
            'description' => $this->description,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }

}
