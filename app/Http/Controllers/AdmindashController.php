<?php

namespace App\Http\Controllers;

use App\CustomerFeedback;
use Illuminate\Http\Request;

class AdmindashController extends Controller
{
    /**
     * @var
     */
    private $feedback;

    /**
     * AdmindashController constructor.
     * @param CustomerFeedback $feedback
     */
    public function __construct(CustomerFeedback $feedback)
    {
        $this->feedback = $feedback;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function admindash(){
        $feedback=$this->feedback::orderBy('id','desc')->get();
        return view('layouts.admin-dash-master',compact('feedback'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showData($id){
        $getData=$this->feedback::where('id',$id)->first();
        return view('partial-view.show-data',compact('getData'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showEditFormData($id){
        $getData=$this->feedback::where('id',$id)->first();
        return view('partial-view.edit-form',compact('getData'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function edit(Request $request){
        $this->feedback->updateForm($request);
        return redirect()->back()->with('success','Updated successfully...!');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getReport(Request $request){
        $from = $request['start_date'];
        $to = $request['end_date'];
        $get=$this->feedback::whereBetween('created_at', [$from.' 00:00:00',$to.' 23:59:59'])->get();
        return view('partial-view.get-report',compact('get'));
    }
    public function printReport(Request $request){
        $arrId = explode(',',$request['report_id']);
//        dd($arrId);
        foreach ($arrId as $id){
            $reportData[]=$this->feedback::where('id',$id)->first();
        }
        return view('print.print-report',compact('reportData'));
    }
}
