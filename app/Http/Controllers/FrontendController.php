<?php

namespace App\Http\Controllers;

use App\CustomerFeedback;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * @var CustomerFeedback
     */
    private $customerFeedback;

    /**
     * FrontendController constructor.
     * @param CustomerFeedback $customerFeedback
     */
    public function __construct(CustomerFeedback $customerFeedback)
    {
        $this->customerFeedback = $customerFeedback;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        return view('layouts.frontend.pages.intro');

    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function main(){
        return view('layouts.frontend.pages.main-form');

    }

    public function getData(Request $request){
        $this->customerFeedback->insertData($request);
        return redirect()->back()->with('success','Data inserted successfully');
    }
}
