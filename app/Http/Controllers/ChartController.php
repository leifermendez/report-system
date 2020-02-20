<?php

namespace App\Http\Controllers;

use App\Projects;
use App\Reports;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    private $parent = 'chart';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        /**
         *    id: 1, name: "Feature 1", series: [
         * { name: "Planned", start: new Date(2010,00,01), end: new Date(2010,00,03) },
         * { name: "Actual", start: new Date(2010,00,02), end: new Date(2010,00,05), color: "#f0f0f0" }
         * ]
         */

        $dataRaw = [];

        $data = Projects::orderBy('id', 'DESC')
            ->with(['series'])
            ->get();

        foreach ($data as $datum) {
            $clear_series = [];
            foreach ($datum->series as $v) {
                $calc = $v->get_calc($v->id);
                if ($calc['start'] && $calc['end']) {
                    $clear_series[] = array_merge(
                        [
                            'color' => $v->color,
                            'title' => '<canvas>a</canvas> '.$v->name
                        ],
                        $calc
                    );

                    $clear_series[] = [
                        'title' => 'Estimación',
                        'start' => $v->start_at,
                        'end' => $v->deadline_at
                    ];
                }
            }

            $dataRaw[] = array(
                'id' => $datum['id'],
                'name' => $datum['title'],
                'series' => $clear_series
            );
        }


        return view($this->parent . '.view')->with(['data' => $dataRaw]);
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
