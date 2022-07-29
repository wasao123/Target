<?php

namespace App\Http\Controllers;

use App\Charge;
use App\Tactics;
use Illuminate\Http\Request;

class ChargesController extends Controller
{
    
  public function index(Charge $charge)
    {
        return view('targets/charges/index')->with(['charges' => $charge->get()]); 
    }
    
    /**
 * 特定IDのpostを表示する
 *
 * @params Object Post // 引数の$postはid=1のPostインスタンス
 * @return Reposnse post view
 */
  public function show(Charge $charge)
  {
      return view('targets/charges/show')->with(['charge' => $charge]);
  }
  
  public function update(Request $request, Tactics  $tactic)
  {
      $input = $request['tactics'];
      Tactics::orderBy('updated_at', 'desc')->first()->fill($input)->save();
      // dd($input);
      return redirect('/home');
  }
}
?>