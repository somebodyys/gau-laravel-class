<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetPersonAction extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request): array
    {
        return [
            'person' => 'No Person!'
        ];
    }
}
