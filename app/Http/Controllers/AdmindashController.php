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
    public function showEditFormData($id){
        $show=$this->feedback::where('id',$id)->first();
        return view('partial-view.edit-form',compact('show'));
    }
}
