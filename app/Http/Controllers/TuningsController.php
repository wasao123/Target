<?php

namespace App\Http\Controllers;
use App\Tuning;
use App\Tactics;
use App\Highlight;
use App\Laser;
use App\Charge;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;
use validate;

class TuningsController extends Controller
{
      public function index(Tuning $tuning,Tactics $tactics,Highlight $highlight,Laser $laser,Charge $charge)
    {
        // $tactics = [DB::table(‘tactics’)->find(1)];
        $tactics = $tactics->find(Auth::id())->orderBy('updated_at', 'desc')->first();
        //  dd($tactics->highlight->name);
        return view('targets/tunings/index',)->with([
            'tactics' =>$tactics,
            'Highlight' => $highlight,
            'Laser' => $laser,
            'Charge' => $charge,
            'tunings' => $tuning->orderBy('updated_at', 'desc')->get(),
            ]);
    }
    
      public function create(Tuning $tuning,Tactics $tactics,Highlight $highlight,Laser $laser,Charge $charge)
    {
        // $tactics = [DB::table(‘tactics’)->find(1)];
        $tactics = $tactics->orderBy('updated_at', 'desc')->first();
        //  dd($tactics->highlight->name);
        return view('targets/tunings/create',)->with([
            'tactics' =>$tactics,
            'Highlight' => $highlight,
            'Laser' => $laser,
            'Charge' => $charge
            ]);
            
        $validated = $request->validate([
        'title' => 'required|unique:posts|max:255',
        ])->validate();
    }
    public function store(Request $request, Tuning $tuning )
  {     
      $input = $request['tuning'];
    //   dd($input);

      $tuning->fill($input)->save();
      return redirect('/tunings' );
  }
   
     public function laserchart(Tuning $tuning,Tactics $tactics,Highlight $highlight,Laser $laser,Charge $charge)
    {
        // $tactics = [DB::table(‘tactics’)->find(1)];
        $tunings = $tuning->get();
        foreach($tunings as $tuning) {
            // $data[] = $tuning->laser_evaluation;
            $dt = new Carbon($tuning->updated_at);
            $test[] = [$dt->format('m月d日'),$tuning->laser_evaluation];
            // $day[] = $dt->format('m月d日');
        }
        
        //  dd($tactics->highlight->name);
        return view('targets/laserchart/index',)->with([
            'tests' => $test
            
            ]);
    }
    
    public function chargechart(Tuning $tuning,Tactics $tactics,Highlight $highlight,Laser $laser,Charge $charge)
    {
        // $tactics = [DB::table(‘tactics’)->find(1)];
        $tunings = $tuning->get();
        foreach($tunings as $tuning) {
            // $data[] = $tuning->laser_evaluation;
            $dt = new Carbon($tuning->updated_at);
            $test[] = [$dt->format('m月d日'),$tuning->charge_evaluation];
            // $day[] = $dt->format('m月d日');
        }
        // dd($chart);
        //  dd($tactics->highlight->name);
        return view('targets/chargechart/index',)->with([
            'tests' => $test
            
            ]);
    }
    
    //編集
    public function edit(Tuning $tuning,Tactics $tactics,Highlight $highlight,Laser $laser,Charge $charge)
    {
    return view('targets/tunings/edit')->with([
            'tactics' =>$tactics,
            'Highlight' => $highlight,
            'Laser' => $laser,
            'Charge' => $charge,
            'Tuning' => $tuning
            ]);
    }
    //編集を実行する関数
    public function update(PostRequest $request, Tuning $tuning)
{
    $input = $request['tuning'];
    $tuning->fill($input)->save();

    return redirect('/tunings');
}
}
