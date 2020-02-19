<?php

namespace App\Http\Controllers;

use App\Reports;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    private $parent = 'chart';


    private function parseIssue($data = [], $args = [])
    {
        try {

            $temp = [

            ];

            foreach ($data as $datum) {
                if (!empty($datum->tag_id)) {
                    $temp[]= [
                        'title' => $datum->tag_id,
                        'start' => $args['date_begin'],
                        'end' => $args['date_finish']
                    ];
                }
//                if (isset($tmp[0])) {
//                    $hours_all = array_sum(array_column($datum->issue_features->toArray(), 'hours'));
//
//                    $tmp[0] = [
//                        'title' => $args['title'],
//                        'start' => $args['date_begin'],
//                        'end' => $args['date_finish'],
//                        'hours' => $hours_all
//                    ];
//                }
            }

            return $temp;

        } catch (\Exception $e) {
            return [];
        }


    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /**
         *    id: 1, name: "Feature 1", series: [
         * { name: "Planned", start: new Date(2010,00,01), end: new Date(2010,00,03) },
         * { name: "Actual", start: new Date(2010,00,02), end: new Date(2010,00,05), color: "#f0f0f0" }
         * ]
         */
        $s = Carbon::now()->startOfMonth();
        $q = Carbon::now()->addMonth(1);

        $dataRaw = [];
        $data = Reports::orderBy('id', 'desc')
            ->whereDate('date_begin', '>=', $s)
            ->whereDate('date_finish', '<=', $q)
            ->with(['project', 'series'])
            ->get();


        foreach ($data as $datum) {
            $dataRaw[] = array(
                'id' => $datum->id,
                'name' => $datum->project->title,
//                'series' => $datum->series
                'series' => $this->parseIssue($datum->series, [
                    'title' => 'ESTE',
                    'date_begin' => $datum->date_begin,
                    'date_finish' => $datum->date_finish
                ])
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
