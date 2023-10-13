<?php

namespace App\Http\Controllers;

use App\Classes\Person;
use App\Http\Requests\CreatePersonObjectRequest;

class PersonController extends Controller
{
    /**
     * @return string[]
     */
    public function store(CreatePersonObjectRequest $request): array
    {
        $data = $request->validated();

        $person = new Person($data['id'], $data['firstName'], $data['lastName'], $data['sex'], $data['birthday']);

        $person->save();

        return [
            'response' => 'Success!'
        ];
    }
}
