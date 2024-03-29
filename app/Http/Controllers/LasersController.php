<?php

namespace App\Http\Controllers;

use App\Laser;
use App\Tactics;
use App\Charge;
use Illuminate\Http\Request;

class LasersController extends Controller
{
    
  public function index(laser $laser)
    {
        return view('targets/lasers/index')->with(['lasers' => $laser->get()]); 
    }
    
    /**
 * 特定IDのpostを表示する
 *
 * @params Object Post // 引数の$postはid=1のPostインスタンス
 * @return Reposnse post view
 */
  public function show(laser $laser)
  {
      return view('targets/lasers/show')->with(['laser' => $laser]);
  }
  
   public  function update(Request $request, Tactics  $tactic , Charge $charge )
  {
      $input = $request['tactics'];
      // dd($input);

      Tactics::orderBy('updated_at', 'desc')->first()->fill($input)->save();
      return redirect('/charges/' . $charge->id);
      
  }
}
?>