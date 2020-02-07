<?php

namespace App\Http\Controllers;

use App\Organizations;
use App\Projects;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    private $parent = 'projects';

    public function index()
    {
        $data = Projects::orderBy('id', 'desc')->with(['organization'])->get();

        return view($this->parent . '.view')->with(['data' => $data]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $organizations = Organizations::orderBy('name', 'ASC')->get();
        return view($this->parent . '.create')->with(['organizations' => $organizations]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return string
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'organizations_id' => 'required',
            'url' => 'required',
            'description' => 'required',
        ]);

        Projects::create($validatedData);
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
        $data = Projects::find($id);
        $organizations = Organizations::orderBy('name', 'ASC')->get();
        return view($this->parent . '.edit')->with(['data' => $data, 'organizations' => $organizations]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'organizations_id' => 'required',
            'url' => 'required',
            'description' => 'required',
        ]);

        Projects::where('id', $id)
            ->update($validatedData);

        return redirect($this->parent);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Projects::where('id', $id)
            ->delete();
        return redirect($this->parent);
    }
}
