<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Result;



class ResultController extends Controller
{

    public function create()
    {
        return view('results.create');
    }

    public function index()
    {
        return view('create-result');
    }
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'type' => 'required',
            'subject_code' => 'required',
            'roll' => 'required',
            'grade' => 'required',
        ]);

        Result::create($validatedData);

        return redirect()->route('showResults');
    }
    
    public function show()
    {
        $results = Result::all();
        return view('show-results', compact('results'));
    }





    public function search(Request $request)
    {
        $searchId = $request->input('searchId');
        $result = Result::find($searchId);

        return view('testing', compact('result','searchId'));
      //  return view('testing', [
     //       'searchId' => $searchId,
      //      'result' => $result
     //   ]);

     
    }


}
