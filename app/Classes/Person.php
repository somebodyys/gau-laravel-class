<?php

namespace App\Classes;

use Illuminate\Support\Facades\Storage;

class Person
{
    protected int $id;
    protected string $firstName;
    protected string $lastName;
    protected string $sex;
    protected string $birthday;


    public static array $SEXES = [
        'male',
        'female'
    ];

    public function __construct(int $id, string $firstName, string $lastName, string $sex, string $birthday)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->sex = $sex;
        $this->birthday = $birthday;
    }

    /**
     * @return void
     */
    public function save(): void
    {
        Storage::append('persons.txt', "ID($this->id) $this->firstName $this->lastName");
    }
}
