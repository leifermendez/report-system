<?php

namespace App\Http\Controllers;

use App\Features;
use App\Organizations;
use App\Projects;
use App\Reports;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    private $parent = 'reports';

    public function index(Request $request)
    {
        $general = array(
            'hours' => 0
        );
        $data = Reports::orderBy('id', 'desc')
            ->where(function ($q) use ($request) {
                if (($request->date_begin) && ($request->date_finish)) {
                    $begin = Carbon::parse($request->date_begin);
                    $finish = Carbon::parse($request->date_finish);
                    $q->whereDate('date_begin', '>=', $begin)
                        ->whereDate('date_finish', '<=', $finish);
                }
            })
            ->with(['issues'])->get();

        foreach ($data as $d) {
            $hours_all = array_sum(array_column($d->issues->toArray(), 'hours'));
            $general['hours'] += $hours_all;
            $d->setAttribute('hours_all', $hours_all);
        }


        return view($this->parent . '.view')->with(['data' => $data, 'general' => $general]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $projects = Projects::orderBy('title', 'ASC')->with(['organization'])->get();

        return view($this->parent . '.create')->with([
            'projects' => $projects]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $request->validate([
            'date_begin' => 'required',
            'date_finish' => 'required',
            'project_with_organization' => 'required'
        ]);

        $parse = explode('_', $request->project_with_organization);

        $data = array(
            'date_begin' => $request->input('date_begin'),
            'date_finish' => $request->input('date_finish'),
            'organizations_id' => $parse[0],
            'projects_id' => $parse[1]
        );

        Reports::create($data);
        return redirect($this->parent);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $report = Reports::where('id', $id)->with(['project', 'issues'])->first();

        return view($this->parent . '.show')->with([
            'report' => $report]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $data = Reports::find($id);
        $projects = Projects::orderBy('title', 'ASC')->with(['organization'])->get();
        return view($this->parent . '.edit')->with(['data' => $data, 'projects' => $projects]);
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
            'date_begin' => 'required',
            'date_finish' => 'required',
            'project_with_organization' => 'required'
        ]);

        $parse = explode('_', $request->project_with_organization);

        $data = array(
            'date_begin' => $request->input('date_begin'),
            'date_finish' => $request->input('date_finish'),
            'organizations_id' => $parse[0],
            'projects_id' => $parse[1]
        );

        Reports::where('id', $id)->update($data);
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
        Reports::where('id', $id)
            ->delete();
        return redirect($this->parent);
    }
}
