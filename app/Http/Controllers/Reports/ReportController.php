<?php

namespace App\Http\Controllers\Reports;

use App\Http\Controllers\Controller;
use App\Services\reports\reporting;
use App\Services\reports\reports;
use Illuminate\Http\Request;

class ReportController extends Controller
{

    protected $report;


    public function __construct(reporting $reports){
        $this->report=$reports;
    }


    public function show(){
        $reports=$this->report->getall();
        if($reports){
            return view('reports.Index',compact('reports'));
        }

    }


    public function showdetails($id){
        $report=$this->report->showdetails($id);
        if($report){
            return view('reports.Show',compact('report'));
        }
    }
    public function delete($id){
        $report=$this->report->deletereport($id);
        if ($report) {
            ;

              return redirect()->route('reports.show')->with('successdelete', 'تم حذف التقرير بنجاح!');
          } else {
              return redirect()->route('reports.show')->with('errordelete', 'فشل حذف التقرير.');
          }
    }
}
