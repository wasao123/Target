<?php

namespace App\Http\Controllers;

use App\Highlight;
use App\Tactics;
use App\Laser;
use Illuminate\Http\Request;

class HighlightsController extends Controller
{
    
  public function index(Highlight $highlight)
    {
        return view('targets/highlights/index')->with(['highlights' => $highlight->get()]); 
    }
    
    /**
 * 特定IDのpostを表示する
 *
 * @params Object Post // 引数の$postはid=1のPostインスタンス
 * @return Reposnse post view
 */
  public function show(Highlight $highlight)
  {
      return view('targets/highlights/show')->with(['highlight' => $highlight]);
  }
  //ボタンが押下されてからDBにデータが登録処理の実装
  public function store(Request $request, Tactics  $tactic , Laser $lasr )
  {
      $input = $request['tactics'];
      // dd($input);

      $tactic->fill($input)->save();
      return redirect('/lasers/' . $lasr->id);
  }
}
?>