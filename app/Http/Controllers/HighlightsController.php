<?php

namespace App\Http\Controllers;

use App\Highlight;
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
}
?>