<?php

namespace App\Http\Controllers;

use App\Models\voiceActings;
use Illuminate\Http\Request;

class voiceActingsController extends Controller
{
    public function index(){
        $voiceActings = voiceActings::all();
        return view('voiceActing.listVoiceActing', ['voiceActings'=>$voiceActings]);
    }

    public function store(Request $request){
        $data = $request->validate([
           'name'=>'required',
        ]);
        voiceActings::create($data);

        $voiceActings = voiceActings::all();
        return view('voiceActing.listVoiceActing', ['voiceActings'=>$voiceActings]);
    }

    public function update(Request $request, $id){
        $voiceActingId = voiceActings::where('id', $id)->first();

        if ($voiceActingId){
            $voiceActingId->name = $request->name;
            $voiceActingId->save();
        }

        $voiceActings = voiceActings::all();
        return view('voiceActing.listVoiceActing', ['voiceActings'=>$voiceActings]);
    }


    public function destroy($id){
        $voiceActing = voiceActings::find($id);
        if ($voiceActing){
            $voiceActing -> delete();
        }
        $voiceActings = voiceActings::all();
        return view('voiceActing.listVoiceActing', ['voiceActings'=>$voiceActings]);
    }
}
