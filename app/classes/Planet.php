<?php

namespace App\classes;

use Illuminate\Notifications\Notifiable;

class Planet
{
    use Notifiable;

    protected string $name;
    protected float $diameter;
    protected string $description;
    protected bool $atmosphere;
    protected array $minerals = [];
    protected string $email;

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

}
