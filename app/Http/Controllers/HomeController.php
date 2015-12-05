<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\SportRecord;
use App\Role;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{

		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$user = Auth::user();
		$sportRecord = $user->getTodaySportRecords();
		$haveClinic = false;

		foreach (Role::find($user->type)->permissions()->get() as $each)
		{

			if($each->id==9){
				$haveClinic = true;
			}
		}
		$expiresAt = \Carbon\Carbon::now()->addMinutes(1000);
		Cache::put('haveClinic',$haveClinic, $expiresAt);
		$haveClinic=Cache::get('haveClinic');
		return view('backend.homepage',compact('sportRecord','haveClinic'));
	}

}
