<?php

namespace App\Http\Controllers;

use App\Models\MultiService;
use App\Models\SectionValue;
use Illuminate\Http\Request;
use Exception;


class OurServicesController extends Controller
{
    //private $mSectionValue;
    private $mSectionValue;
    private $_pageName;
    // Initializing Construct Function 
    public function __construct()
    {
        $this->mSectionValue    = new SectionValue();
        $this->_pageName        = "ourServices";
    }

    public function viewService()
    {
        $mMultiServices = new MultiService();
        $multiServies = $mMultiServices->getAll();
        return view('admin.pages.ourservices', ['multiServices' => $multiServies]);
    }

    public function saveServices(Request $req)
    {
        $req->validate([
            'value1'    => 'nullable|image|mimes:jpeg,jpg,png',
            'value2'    => 'nullable|string'
        ]);

        $pageName = "MultiServices";
        $mMultiServices = new MultiService();
        try {
            # Update the page contents 
            $attributes = [
                'content_value' => $req->value2,
                'page_name' => "ourServices"
            ];

            if ($req->hasFile('value1') && $req->value1) {
                $file = $req->file('value1');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . rand(10, 100) . "." . $extension;
                $viewPath = "uploads/landing";
                $path = public_path() . "/" . $viewPath;
                $file->move($path, $filename);
                $actualFileName = $viewPath . "/" . $filename;
                $attributes['image_path'] = $actualFileName;
            }
            $mMultiServices->create($attributes);
            $responseMsg = $pageName . " Content Updated";
            return back()->with('success', $responseMsg);
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    // 
    public function deleteMultiService($id)
    {
        $service = MultiService::findOrFail($id);
        $service->delete();
        return back()->with('success', "Service Deleted Successfully");
    }
}
