<?php

namespace App\Http\Controllers;

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
        return view('admin.pages.ourservices');
    }

    public function saveServices(Request $req)
    {
        $req->validate([
            'section'   => 'required',
            'value1'    => 'nullable|',
            'value2'    => 'nullable'
        ]);

        try {
            # Update the page contents 
            $section = array();

            if ($req->hasFile('value1') && $req->value1) {
                $file = $req->file('value1');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . rand(10, 100) . "." . $extension;
                $viewPath = "uploads/landing";
                $path = public_path() . "/" . $viewPath;
                $file->move($path, $filename);
                $actualFileName = $viewPath . "/" . $filename;

                $first = [
                    "sectionName"   => $req->section,
                    "value"         => $actualFileName,
                    "type"          => "video"
                ];
                array_push($section, $first);
            }

            if (isset($req->value2)) {
                $second = [
                    "sectionName"   => $req->section,
                    "value"         => $req->value2,
                    "type"          => "content"
                ];
                array_push($section, $second);
            }

            if (!empty($section)) {
                foreach ($section as $sections) {
                    $this->mSectionValue->updateValues($sections, $this->_pageName);
                }
            }

            $responseMsg = $req->pageName . " Content Updated";
            return back()->with('success', $responseMsg);
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}
