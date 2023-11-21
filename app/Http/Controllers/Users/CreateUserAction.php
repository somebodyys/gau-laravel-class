<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CreateUserAction extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
//        DB::table('users')->insert([
//            'first_name' => $request->get('first_name'),
//            'last_name' => $request->get('last_name'),
//            'created_at' => Carbon::now(),
//            'updated_at' => Carbon::now()
//        ]);

        $data = $request->all();

        return User::create($data);
    }
}
