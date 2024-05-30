<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use Illuminate\Http\Request;

class FormController extends Controller
{
    //

    public function viewInquiry()
    {

        $mInquiry = new Inquiry();
        $inqData = $mInquiry->getInquiry()->get();
        return view('admin.pages.inquiries',["item" => $inqData]);
    }


    public function saveInquiry(Request $req)
    {
        $data = $req->all();
        $mInquiry = new Inquiry();
        $mInquiry->saveInquiry($req);
        return back();
    }
}
