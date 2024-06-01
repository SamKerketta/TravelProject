<?php

namespace App\Http\Controllers;

use App\Mail\SendEnquiryMail;
use App\Models\Inquiry;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    //

    public function viewInquiry()
    {

        $mInquiry = new Inquiry();
        $inqData = $mInquiry->getInquiry()->get();
        return view('admin.pages.inquiries', ["item" => $inqData]);
    }


    public function saveInquiry(Request $req)
    {
        $data = $req->all();
        $mInquiry = new Inquiry();
        $mInquiry->saveInquiry($req);
        // Send email
        $details = [
            'message' => $req->textarea1
        ];
        Mail::to($req->Email)->send(new SendEnquiryMail($details));
        return back();
    }


    public function savesubscription(Request $req)
    {
        $data = $req->all();
        $mInquiry = new Inquiry();
        $mInquiry->saveInquiry($req);
        return back();
    }

    public function viewSubscription()
    {
        $mSubscription = new Subscription();
        $subData = $mSubscription->getSubscription()->get();
        return view('admin.pages.subscription',["item" => $subData]);
    }
}
