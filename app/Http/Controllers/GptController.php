<?php

namespace App\Http\Controllers;
// use Illuminate\Http\Request;
use Illuminate\Http\Request;

class GptController extends Controller
{ 
    public function messages()
        {
            return [
                'a.required' => 'A title is required',
                'b.required' => 'A message is required',
                'a.integer' => 'A message is integer',
                'b.integer' => 'A message is integer',
            ];
        }
    public function gptb1(Request $request)
    {
        

        $validated = $request->validate(
            [
            'a' => 'required|integer',
            'b' => 'required|integer',
            ],$this->messages()
            );
        $a = $request->input('a');     
            $b = $request->input('b'); 
            if($a ==0) {
                if($b ==0){
                    $kq ="Phương trinh vo so nghiem";
                }
                else{
                    $kq ="Phương trinh vo nghiem";
                }
            } 
            else{
                $kq ="Phương trinh co nghiem x=".-$b/$a;
        
            }  
            // return view('showgpt',['kq'=>$kq]);
            return view('showgpt',compact('kq','a','b'));
 
        
    }
}

