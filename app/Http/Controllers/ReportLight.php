<?php

namespace App\Http\Controllers;

use App\Reports;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReportLight extends Controller
{
    private $parent = 'reports';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
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

        dd($data);

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
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
