<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaculatorController extends Controller
{
    public function messages()
        {
            return [
                'a.required' => 'A title is required',
                'b.required' => 'A message is required',
            ];
        }
    public function Caculators(Request $request)
    {

        $validated = $request->validate(
            [
            'a' => 'required|integer',
            'b' => 'required|integer',
            ],$this->messages()
            );
        $a = $request->input('a');     
        $b = $request->input('b'); 
        $option= $request->input('option');

        switch ($option) {
            case "+":
                $kq = $a+$b;
              
              break;
            case "-":
                $kq = $a-$b;
              break;
            case "*":
                $kq = $a*$b;
              break;

              case ":":
                $kq = $a/$b;
              break;
              
            default :
             $kq = "không có chi hết";
        }
        return view('showCaculator',compact('kq','a','b'));
    }
}
