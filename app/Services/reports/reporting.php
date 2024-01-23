<?php
namespace App\Services\reports;
use App\Models\report;


class reporting{


    public function getall(){

        $reports=report::all();

        return $reports;

    }

    public function showdetails($id){
        $report=report::find($id);
        return $report;
    }
    public function deletereport($id)
    {
        $report = report::find($id);
        if ($report) {
            $report->delete();
            return true;

        } else {
            return false;
        }

    }
}
