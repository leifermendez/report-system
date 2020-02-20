<?php

namespace App\Http\Controllers;

use App\Organizations;
use App\Projects;
use App\Tags;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;


class TagController extends Controller
{
    use SoftDeletes;
    private $parent = 'tags';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data = Tags::orderBy('id', 'desc')->with(['projects'])
            ->get();

        return view($this->parent . '.view')->with(['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $projects = Projects::orderBy('id', 'DESC')->get();
        return view($this->parent . '.create')->with(['projects' => $projects]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'color' => 'required',
            'start_at' => 'required',
            'deadline_at' => 'required',
            'projects_id' => 'required'
        ]);

        Tags::create($validatedData);
        return redirect($this->parent);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $projects = Projects::orderBy('id', 'DESC')->get();
        $data = Tags::with(['projects'])->find($id);

        return view($this->parent . '.edit')->with(['data' => $data,
            'projects' => $projects]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'color' => 'required',
            'start_at' => 'required',
            'deadline_at' => 'required',
            'projects_id' => 'required'
        ]);

        Tags::where('id', $id)
            ->update($validatedData);

        return redirect($this->parent);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tags::where('id', $id)
            ->delete();
        return redirect($this->parent);
    }
}
