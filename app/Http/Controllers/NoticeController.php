<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notice;

class NoticeController extends Controller
{


    public function index()
    {
        $notices = Notice::all();
        return view('show notice', compact('notices'));
    }

    public function create()
    {
        return view('create notice');
    }

    public function create1()
    {
        return view('Create Notice Admin');
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'notice' => 'required',
            'publisher' => 'required',
            'dept' => 'required',
        ]);

        Notice::create([
            'type' => $request->type,
            'notice' => $request->notice,
            'publisher' => $request->publisher,
            'dept' => $request->dept,
        ]);

        

        return redirect()->route('notices.index')->with('success', 'Notice created successfully.');
    }

    public function show($id)
    {
        $notice = Notice::findOrFail($id);
        return view('notices.show', compact('notice'));
    }

    public function edit($id)
    {
        $notice = Notice::findOrFail($id);
        return view('notices.edit', compact('notice'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'type' => 'required',
            'notice' => 'required',
            'publisher' => 'required',
            'dept' => 'required',
        ]);

        $notice = Notice::findOrFail($id);
        $notice->update([
            'type' => $request->type,
            'notice' => $request->notice,
            'publisher' => $request->publisher,
            'dept' => $request->dept,
        ]);

        return redirect()->route('notices.index')->with('success', 'Notice updated successfully.');
    }

    public function destroy($id)
    {
        $notice = Notice::findOrFail($id);
        $notice->delete();

        return redirect()->route('notices.index')->with('success', 'Notice deleted successfully.');
    }


}
