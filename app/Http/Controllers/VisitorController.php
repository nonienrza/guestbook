<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class VisitorController extends Controller
{
    function check(){
		return view('check');
	}

	function semak(Request $i){

		

		$this->validate($i, [
			'number' => 'required',
			]);

		if ($i->number !="123" and $i->number !="aaa"){
    			return "Page amirul - REGISTRATION";
    		
    	} 
    	else{
			if ($i->number == "123"){
	    		return "page zee pass ic num";    		
	    	}
	    	else{
		    	if ($i->number == "aaa"){
		    		return "page zee pass passport num";
		    	}
	   		}
	   	}
	}

}
