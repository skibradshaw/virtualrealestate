<?php

namespace App\Http\Controllers\Photographers;

use App\Http\Controllers\Controller;
use App\User;
use Faker\Factory;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
    	$faker = Factory::create();
    	$users = factory(User::class,15)->create();
    	$shoots = collect([]);

    	// return $users;
    	return view('photographers.dashboard',[
    		'users' => $users,
    		'faker' => $faker,
    	]);
    }
}
