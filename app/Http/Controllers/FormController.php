<?php

namespace App\Http\Controllers;

use App\Mail\SendEnquiryMail;
use App\Models\Inquiry;
use App\Models\Subscription;
use App\Models\Testimonial;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    //

    public function viewInquiry()
    {

        $mInquiry = new Inquiry();
        $inqData = $mInquiry->getInquiry()->orderByDesc('created_at')->get();
        return view('admin.pages.inquiries', ["item" => $inqData]);
    }


    public function saveInquiry(Request $req)
    {

        $data = $req->all();
        if (!$data['g-recaptcha-response']) {
            return back()->with('error', "Invalid access");
        }
        $mInquiry = new Inquiry();
        $mInquiry->saveInquiry($req);
        $details = [
            'message' => $req->textarea1,
            'name' => $req->Name
        ];
        $status = Mail::to($req->Email)->send(new SendEnquiryMail($details));
        return view("pages/thank-you");
    }


    public function savesubscription(Request $req)
    {
        $data = $req->all();
        if (!$data['Name']) {
            return back()->with('error', "Please Fill the form properly");
        }
        $mSubscription = new Subscription();
        $mSubscription->saveSubscription($req);
        return back();
    }

    public function viewSubscription()
    {
        $mSubscription = new Subscription();
        $subData = $mSubscription->getSubscription()->orderByDesc('created_at')->get();
        return view('admin.pages.subscription', ["item" => $subData]);
    }


    public function viewTestimonials()
    {
        $mtestimonial = Testimonial::orderByDesc('id')->get();
        return view('admin.pages.testimonial', ["testimonial" => $mtestimonial]);
    }

    public function addTestimonials(Request $req)
    {
        try {
            $mTestimonial = new Testimonial();
            $mTestimonial->saveTestimonial($req);
            $responseMsg = "Testimonial added successfully";
            return back()->with('success', $responseMsg);
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }


    /**
     * | testimonail section 
     */
    public function deleteTestimonials($id)
    {
        $file = Testimonial::findOrFail($id);
        $file->delete();
        return back()->with('success', "Testimonial deleted Successfully");
    }

    public function deactivateTestimonials($id)
    {
        $file = Testimonial::findOrFail($id);
        $file->update([
            "status" => 0
        ]);
        return back()->with('success', "Testimonial Deactivated Successfully");
    }


    public function activateTestimonials($id)
    {
        $file = Testimonial::findOrFail($id);
        $file->update([
            "status" => 1
        ]);
        return back()->with('success', "Testimonial Activated Successfully");
    }

    public function viewTestimonialsEdit($id)
    {
        $editData = Testimonial::where('id', $id)->first();
        return view('admin.pages.edittestimonial', ["testimonial" => $editData]);
    }


    public function editTestimonials(Request $req)
    {
        try {
            $data = $req->all();
            Testimonial::where("id", $req->id)->update([
                "description"   => $req->testimonaial,
                "name"          => $req->name,
                "designation"   => $req->designation,
                "country"       => $req->country
            ]);
            return back()->with('success', "Testimonial Updated Successfully");
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}
