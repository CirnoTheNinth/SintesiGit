<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Character;

class CharacterController extends Controller
{
    public function getCharacters(){
        $id =\Auth::user()->id;
        $characters = Character::where('user_id', '=', $id)->get();
        return view('characters.showall', array('characters'=>$characters));
    }

    public function indexCharacters(){
        return view('characters.index');
    }

    public function createCharacters(){
        return view('characters.create');
    }
    
    public function modifyCharacters($charid){
        $id =\Auth::user()->id;
        $character = Character::find($charid);
        if ($id==$character->user_id){
            return view('characters.modify', array('character'=>$character));
        }else{
            return view('characters.index');
        }
        
    }
}
