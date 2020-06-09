<?php

namespace App\Http\Controllers;

use App\File;
use App\Project;
use App\User;
use Excel;
use Illuminate\Http\Request;
use Session;
use Auth;


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */




public function files($id, $class_type)
{

  $files = File::where('project_id', $id)->get();
  $project = Project::where('id', $id)->first();

  return view('project.files.index', compact('files', 'project', 'class_type'));

}
    public function export($type)
    {
          // $projects = Project::get()->toArray(); // this query is to select all table
       

       $projects = Project::select('id' ,'project_id','project_name', 'project_type', 'project_type_WorS', 'project_type_PorH', 'project_type_WinSorWinHCF', 'project_status',
        'project_progressed', 'number_planned_visits', 'number_documented_visits', 'planned_start_date', 'planned_completion_date', 'actual_start_date', 'actual_completion_date', 'relevant_NTA', 'MRRD_site_engineer', 'CDC_representative', 'ORD_site_engineer', 'zone', 'province', 'district', 'village', 'latitude', 'longitude', 'benefeciaries', 'water_quality_tested', 'OM', 'OM_trained', 'remarks')->get()->toArray(); // this query is to select specific tanle

        return \Excel::create('Project_Report('. Date('Y-m-d') .')', function($excel) use ($projects) {
            $excel->sheet('Projects_report', function($sheet) use ($projects)
            {
                $sheet->fromArray($projects);
                $sheet->freezeFirstRow($projects);
               // $sheet->setAllBorders('thin');
                $sheet->setBorder('A1:AI100', 'thin');
                // Set black background


                  $sheet->row(1, function($row) {

                    // call cell manipulation methods
                    $row->setBackground('#000000');
                    $row->setFontColor('#f9fafb');

                });

                $sheet->row(1, array(
                     'SNo', 'Project ID', 'Project Name', 'Project Type', 'Project Type (Water Supply or Sanitation)', 'Project Type (Public Tape or HHs Connected)', 'Project Type (WinS or WinHCF)', 'Project Status', 'Project Progressed %', 'Total Planned Visits', 'Total Documented Visits', 'Planned Start Date', 'Planned Completion Date', 'Actual Start Date', 'Actual Completion Date', 'Relevant NTA, C#', 'MRRD Site Engineer', 'CDC Representative', 'ORD Site Engineer', 'Region', 'Province', 'District', 'Village', 'Latitude', 'Longitude', 'Benefeciaries', 'Water Quality Tested? (Yes/No)',  'O&M', 'O&M Trained', 'Remarks' 
                ));
                
            });
        })->download($type);

    }


    public function index()
    {
        $projects = Project::all();

        return view('project.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $users = User::all();
        return view('project.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function RequestApproval($id)
    {
       $project = Project::where('id', $id)->first();
       $project->approved_by = 0;
       $project->submitted_by = Auth::user()->id;
       $project->save();

       Session::flash('success', 'Your request to get approval for '. $project->project_name .' Project, has been sent successfully');
       return redirect()->back();
    }

    public function store(Request $request)
    {
       
      
       $project = new Project;

       $project->project_id = $request->project_id;
       $project->user_id = $request->user_id;
       $project->project_name = $request->project_name;
       $project->project_type = $request->project_type;
       $project->project_type_WorS = $request->project_type_WorS;
       $project->project_type_PorH = $request->project_type_PorH; 
       $project->project_type_WinSorWinHCF = $request->project_type_WinSorWinHCF; 
       $project->project_status = $request->project_status;
       $project->project_progressed = $request->project_progressed;
       $project->number_planned_visits = $request->number_planned_visits;
       $project->number_documented_visits = $request->number_documented_visits;


        $project->planned_start_date = $request->planned_start_date;
        $project->planned_completion_date = $request->planned_completion_date;

        $project->actual_start_date = $request->actual_start_date;
        $project->actual_completion_date = $request->actual_completion_date;

        $project->relevant_NTA = $request->relevant_NTA;
        $project->MRRD_site_engineer = $request->MRRD_site_engineer;
        $project->CDC_representative = $request->CDC_representative;
        $project->ORD_site_engineer = $request->ORD_site_engineer;

        $project->zone = $request->zone;
        $project->province = $request->province;
        $project->district = $request->district;
        $project->village = $request->village;

        $project->latitude = $request->latitude;
        $project->longitude = $request->longitude;

        $project->benefeciaries = $request->benefeciaries;

        if($request->water_quality_tested == 'yes'){
        $project->water_quality_tested = 'yes';
        }else{
        $project->water_quality_tested = 'No';
        }

       $project->IP_MRRD = $request->IP_MRRD;
       $project->IP_PRRD = $request->IP_PRRD;
       $project->IP_NGO = $request->IP_NGO;

       if($request->OM == 'yes'){
        $project->OM = 'yes';
       }else{
        $project->OM = 'No';
       }


       if($request->OM_trained == 'yes'){
        $project->OM_trained = 'yes';
       }else{
        $project->OM_trained = 'No';
       }


       $project->remarks = $request->remarks;

       $project->submitted_by = Auth::user()->id;
       $project->approved_by = -1;

       $project->save();

       Session::flash('success', 'Project has been sent successfully!');

       return redirect(route('project.index'));



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::where('id', $id)->first();

        return view('project.show',  compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::where('id', $id)->first();
        $users = User::all();

        return view('project.edit', compact('project', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
       $project = Project::where('id', $id)->first();

       $project->project_id = $request->project_id;
       $project->user_id = $request->user_id;
       $project->project_name = $request->project_name;
       $project->project_type = $request->project_type;
       $project->project_type_WorS = $request->project_type_WorS;
       $project->project_type_PorH = $request->project_type_PorH; 
       $project->project_type_WinSorWinHCF = $request->project_type_WinSorWinHCF; 
       $project->project_status = $request->project_status;
       $project->project_progressed = $request->project_progressed;
       $project->number_planned_visits = $request->number_planned_visits;
       $project->number_documented_visits = $request->number_documented_visits;


        $project->planned_start_date = $request->planned_start_date;
        $project->planned_completion_date = $request->planned_completion_date;

        $project->actual_start_date = $request->actual_start_date;
        $project->actual_completion_date = $request->actual_completion_date;

        $project->relevant_NTA = $request->relevant_NTA;
        $project->MRRD_site_engineer = $request->MRRD_site_engineer;
        $project->CDC_representative = $request->CDC_representative;
        $project->ORD_site_engineer = $request->ORD_site_engineer;

        $project->zone = $request->zone;
        $project->province = $request->province;
        $project->district = $request->district;
        $project->village = $request->village;

        $project->latitude = $request->latitude;
        $project->longitude = $request->longitude;

        $project->benefeciaries = $request->benefeciaries;

        if($request->water_quality_tested == 'yes'){
        $project->water_quality_tested = 'yes';
        }else{
        $project->water_quality_tested = 'No';
        }

       $project->IP_MRRD = $request->IP_MRRD;
       $project->IP_PRRD = $request->IP_PRRD;
       $project->IP_NGO = $request->IP_NGO;

       if($request->OM == 'yes'){
        $project->OM = 'yes';
       }else{
        $project->OM = 'No';
       }


       if($request->OM_trained == 'yes'){
        $project->OM_trained = 'yes';
       }else{
        $project->OM_trained = 'No';
       }


       $project->remarks = $request->remarks;
       $project->submitted_by = Auth::user()->id;
       $project->approved_by = -1;

       $project->save();

       Session::flash('success', 'Saved, Changes successfully!');

       return redirect(route('project.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }
}
