<?php

namespace App\Http\Controllers;

use App\Models\SectionValue;
use Exception;
use Illuminate\Http\Request;

class DesignationContoller extends Controller
{
    private $mSectionValue;
    private $_pageName;
    private $_noOfSections;
    // Initializing Construct Function 
    public function __construct()
    {
        $this->mSectionValue    = new SectionValue();
        $this->_pageName = "ourDestination";
        $this->_noOfSections = 9;
    }

    // View admin designation page
    public function viewAdminDesignation()
    {
        $compacts = [
            'noOfSections' => $this->_noOfSections
        ];
        return view('admin.pages.designation', $compacts);
    }



    // Update Section 1
    public function sectionUpdate1(Request $req)
    {
        $req->validate([
            'section1'  => 'required',
            'value1'    => 'nullable|file|',
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



    public function sectionUpdate2(Request $req)
    {
        $req->validate([
            'section2'  => 'required',
            'value1'    => 'nullable|',
        ]);

        try {
            # Update the page contents 
            $section = array();

            if (isset($req->value1)) {
                $second = [
                    "sectionName"   => $req->section2,
                    "value"         => $req->value1,
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


    public function sectionUpdate3(Request $req)
    {
        $req->validate([
            'section'   => 'required',
            'value1'    => 'nullable|',
            'value2'    => 'nullable|',
            'value3'    => 'nullable|file',
            'value4'    => 'nullable|file',
            'value5'    => 'nullable|',
            'value6'    => 'nullable|',
            'value7'    => 'nullable|file',
            'value8'    => 'nullable|file',
            'value9'    => 'nullable|',
            'value10'    => 'nullable|',
            'value11'    => 'nullable|file',
            'value12'    => 'nullable|file',
            'value13'    => 'nullable|',
            'value14'    => 'nullable|',
            'value15'    => 'nullable|file',
            'value16'    => 'nullable|file',

        ]);

        try {
            # Update the page contents 
            $section = array();

            // content section
            if (isset($req->value1)) {
                $second = [
                    "sectionName"   => $req->section,
                    "value"         => $req->value1,
                    "type"          => "des1content"
                ];
                array_push($section, $second);
            }
            if (isset($req->value2)) {
                $second = [
                    "sectionName"   => $req->section,
                    "value"         => $req->value2,
                    "type"          => "des1subcontent"
                ];
                array_push($section, $second);
            }
            if (isset($req->value5)) {
                $second = [
                    "sectionName"   => $req->section,
                    "value"         => $req->value5,
                    "type"          => "des2content"
                ];
                array_push($section, $second);
            }
            if (isset($req->value6)) {
                $second = [
                    "sectionName"   => $req->section,
                    "value"         => $req->value6,
                    "type"          => "des2subcontent"
                ];
                array_push($section, $second);
            }
            if (isset($req->value9)) {
                $second = [
                    "sectionName"   => $req->section,
                    "value"         => $req->value9,
                    "type"          => "des3content"
                ];
                array_push($section, $second);
            }
            if (isset($req->value10)) {
                $second = [
                    "sectionName"   => $req->section,
                    "value"         => $req->value10,
                    "type"          => "des3subcontent"
                ];
                array_push($section, $second);
            }
            if (isset($req->value13)) {
                $second = [
                    "sectionName"   => $req->section,
                    "value"         => $req->value13,
                    "type"          => "des4content"
                ];
                array_push($section, $second);
            }
            if (isset($req->value14)) {
                $second = [
                    "sectionName"   => $req->section,
                    "value"         => $req->value14,
                    "type"          => "des4subcontent"
                ];
                array_push($section, $second);
            }



            // image section
            if ($req->hasFile('value3') && $req->value3) {
                $file = $req->file('value3');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . rand(10, 100) . "." . $extension;
                $viewPath = "uploads/landing";
                $path = public_path() . "/" . $viewPath;
                $file->move($path, $filename);
                $actualFileName = $viewPath . "/" . $filename;

                $first = [
                    "sectionName"   => $req->section,
                    "value"         => $actualFileName,
                    "type"          => "des1image"
                ];
                array_push($section, $first);
            }
            if ($req->hasFile('value4') && $req->value4) {
                $file = $req->file('value4');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . rand(10, 100) . "." . $extension;
                $viewPath = "uploads/landing";
                $path = public_path() . "/" . $viewPath;
                $file->move($path, $filename);
                $actualFileName = $viewPath . "/" . $filename;

                $first = [
                    "sectionName"   => $req->section,
                    "value"         => $actualFileName,
                    "type"          => "des1secondimage"
                ];
                array_push($section, $first);
            }
            if ($req->hasFile('value7') && $req->value7) {
                $file = $req->file('value7');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . rand(10, 100) . "." . $extension;
                $viewPath = "uploads/landing";
                $path = public_path() . "/" . $viewPath;
                $file->move($path, $filename);
                $actualFileName = $viewPath . "/" . $filename;

                $first = [
                    "sectionName"   => $req->section,
                    "value"         => $actualFileName,
                    "type"          => "des2image"
                ];
                array_push($section, $first);
            }
            if ($req->hasFile('value8') && $req->value8) {
                $file = $req->file('value8');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . rand(10, 100) . "." . $extension;
                $viewPath = "uploads/landing";
                $path = public_path() . "/" . $viewPath;
                $file->move($path, $filename);
                $actualFileName = $viewPath . "/" . $filename;

                $first = [
                    "sectionName"   => $req->section,
                    "value"         => $actualFileName,
                    "type"          => "des2secondimage"
                ];
                array_push($section, $first);
            }
            if ($req->hasFile('value11') && $req->value11) {
                $file = $req->file('value11');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . rand(10, 100) . "." . $extension;
                $viewPath = "uploads/landing";
                $path = public_path() . "/" . $viewPath;
                $file->move($path, $filename);
                $actualFileName = $viewPath . "/" . $filename;

                $first = [
                    "sectionName"   => $req->section,
                    "value"         => $actualFileName,
                    "type"          => "des3image"
                ];
                array_push($section, $first);
            }
            if ($req->hasFile('value12') && $req->value12) {
                $file = $req->file('value12');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . rand(10, 100) . "." . $extension;
                $viewPath = "uploads/landing";
                $path = public_path() . "/" . $viewPath;
                $file->move($path, $filename);
                $actualFileName = $viewPath . "/" . $filename;

                $first = [
                    "sectionName"   => $req->section,
                    "value"         => $actualFileName,
                    "type"          => "des3secondimage"
                ];
                array_push($section, $first);
            }
            if ($req->hasFile('value15') && $req->value15) {
                $file = $req->file('value15');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . rand(10, 100) . "." . $extension;
                $viewPath = "uploads/landing";
                $path = public_path() . "/" . $viewPath;
                $file->move($path, $filename);
                $actualFileName = $viewPath . "/" . $filename;

                $first = [
                    "sectionName"   => $req->section,
                    "value"         => $actualFileName,
                    "type"          => "des4image"
                ];
                array_push($section, $first);
            }
            if ($req->hasFile('value16') && $req->value16) {
                $file = $req->file('value16');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . rand(10, 100) . "." . $extension;
                $viewPath = "uploads/landing";
                $path = public_path() . "/" . $viewPath;
                $file->move($path, $filename);
                $actualFileName = $viewPath . "/" . $filename;

                $first = [
                    "sectionName"   => $req->section,
                    "value"         => $actualFileName,
                    "type"          => "des4secondimage"
                ];
                array_push($section, $first);
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
