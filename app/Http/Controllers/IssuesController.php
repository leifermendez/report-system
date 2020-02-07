<?php

namespace App\Http\Controllers;

use App\Features;
use App\Issues;
use App\IssuesHasFeatures;
use App\Organizations;
use App\Reports;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IssuesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $parent = 'issues';

    public function index()
    {
        return view($this->parent . '.view');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(Request $request)
    {
        $id_report = $request->report;
        $report = Reports::where('id', $id_report)->with(['project'])->first();
        $features = Features::orderBy('name', 'ASC')->get();
        $developers = User::orderBy('name', 'ASC')->get();

        return view($this->parent . '.create')->with([
            'features' => $features, 'report' => $report, 'developers' => $developers
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {

        try {
            DB::beginTransaction();

            $validatedData = $request->validate([
                'title' => 'required',
                'users_id' => 'required',
                'projects_id' => 'required',
                'features' => 'required',
                'hours_list' => 'required',
            ]);

            $features = [];


            $data_issue = array(
                'title' => $request->title,
                'hours' => array_sum($request->hours_list),
                'users_id' => $request->users_id,
                'projects_id' => $request->projects_id,
                'observations' => $request->observations
            );

            $data = Issues::create($data_issue);

            foreach ($request->hours_list as $feature => $value) {
                if ($value) {
                    $features[] = array(
                        'issue_id' => $data->id,
                        'featured_id' => $feature,
                        'hours' => $value
                    );
                }
            }

            IssuesHasFeatures::insert($features);

            DB::commit();
            return redirect('reports');

        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage());
//            return $e->getMessage();
        }
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
