<?php

namespace App\Http\Controllers;

use App\Models\PageSection;
use App\Models\SectionType;
use App\Models\SectionValue;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

/**
 * | For the landing page element crud operation
 * | Use in the Admin section 
 * | Created by : 
 * | Created at : 22-05-2024
 */

class LandingPageController extends Controller
{
    private $mSectionValue;
    private $_pageName;
    // Initializing Construct Function 
    public function __construct()
    {
        $this->mSectionValue    = new SectionValue();
        $this->_pageName = "landingPage";
    }


    /**
     * | For the first section 
        | Serial no : 01
        | Complited
     */
    public function sectionUpdate(Request $req)
    {
        $req->validate([
            'section1'  => 'required',
            'value1'    => 'nullable|file|mimetypes:video/mp4,video/avi,video/mpeg,video/quicktime|',
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
                    "sectionName"   => $req->section1,
                    "value"         => $actualFileName,
                    "type"          => "video"
                ];
                array_push($section, $first);
            }

            if (isset($req->value2)) {
                $second = [
                    "sectionName"   => $req->section1,
                    "value"         => $req->value2,
                    "type"          => "heading"
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


    /**
     * | Section 2
     */
    public function sectionUpdate2(Request $req)
    {
        $req->validate([
            'section2'  => 'required',
            'value1'    => 'nullable',
        ]);

        try {
            $section = array();

            if (isset($req->value1)) {
                $array = [
                    "sectionName"   => $req->section2,
                    "value"         => $req->value1,
                    "type"          => "title"                                       // Static
                ];
                array_push($section, $array);
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

    /**
     * | Section 3
     */
    public function sectionUpdate3(Request $req)
    {
        $req->validate([
            'section3'  => 'required',
            'value1'    => 'nullable',
        ]);

        try {
            $section = array();

            if (isset($req->value1)) {
                $array = [
                    "sectionName" => $req->section3,
                    "value" => $req->value1,
                    "type" => "title"                                       // Static
                ];
                array_push($section, $array);
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



    public function sectionUpdate6(Request $req)
    {
        $req->validate([
            'section6'  => 'nullable',
            'section7'  => 'nullable',
            'value1'    => 'nullable',
            'value2'    => 'nullable',
        ]);

        try {
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
                    "sectionName"   => $req->section6 ?? $req->section7,
                    "value"         => $actualFileName,
                    "type"          => "image"
                ];
                array_push($section, $first);
            }

            if (isset($req->value2)) {
                $second = [
                    "sectionName"   => $req->section6 ?? $req->section7,
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






    public function landingPage()
    {
        return view('admin.pages.landing');
    }
}
