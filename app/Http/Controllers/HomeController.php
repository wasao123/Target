<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tactics;
use App\Highlight;
use App\Laser;
use App\Charge;
use Auth;

class HomeController extends Controller
{
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Tactics $tactics,Highlight $highlight,Laser $laser,Charge $charge)
    {
        // $tactics = [DB::table(‘tactics’)->find(1)];
        if ($tactics->find(Auth::id()) === null){
            $tactics = null;
            }else{
                $tactics = $tactics->find(Auth::id())->orderBy('updated_at', 'desc')->first();
            }
            //  dd($tactics->highlight->name);
            return view('home')->with([
                'tactics' =>$tactics,
                'Highlight' => $highlight,
                'Laser' => $laser,
                'Charge' => $charge
                ]);
    }
}
