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
        $this->_pageName = "designation";
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

    // Update Section
    public function updateSections(Request $req)
    {
        return $this->updateSection1($req);
        return $this->updateSection2($req);
        return $this->updateSection3($req);
        return $this->updateSection4($req);
        return $this->updateSection5($req);
        return $this->updateSection6($req);
        return $this->updateSection7($req);
        return $this->updateSection8($req);
        return $this->updateSection9($req);
    }

    // Update Section 1
    public function updateSection1($req)
    {
        if ($req->section == 1) {
            $req->validate([
                "section"  => "required",
                "section1Image"    => "nullable|image|mimes:jpeg,jpg,png",
                "section1Heading"    => "required|string",
                "section1Content"    => "required|string"
            ]);

            $section = array();
            try {
                if ($req->hasFile('section1Image') && $req->section1Image) {
                    $file = $req->file('section1Image');
                    $extension = $file->getClientOriginalExtension();
                    $filename = time() . rand(10, 100) . "." . $extension;
                    $viewPath = "uploads/landing/section1";
                    $path = public_path() . "/" . $viewPath;
                    $file->move($path, $filename);
                    $actualFileName = $viewPath . "/" . $filename;

                    $first = [
                        "sectionName"   => $req->section,
                        "value"         => $actualFileName,
                        "type"          => "image"
                    ];
                    array_push($section, $first);
                }

                if (isset($req->section1Heading)) {
                    $second = [
                        "sectionName"   => $req->section,
                        "value"         => $req->section1Heading,
                        "type"          => "heading"
                    ];

                    array_push($section, $second);
                }

                if (isset($req->section1Content)) {
                    $third = [
                        "sectionName"   => $req->section,
                        "value"         => $req->section1Content,
                        "type"          => "content"
                    ];
                    array_push($section, $third);
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

    // Update Section 2
    public function updateSection2($req)
    {
        if ($req->section == 2) {
            $req->validate([
                "section"  => "required",
                "section2Image"    => "nullable|image|mimes:jpeg,jpg,png",
                "section2Heading"    => "required|string",
                "section2Content"    => "required|string"
            ]);

            $section = array();
            try {
                if ($req->hasFile('section2Image') && $req->section2Image) {
                    $file = $req->file('section2Image');
                    $extension = $file->getClientOriginalExtension();
                    $filename = time() . rand(10, 100) . "." . $extension;
                    $viewPath = "uploads/landing/section2";
                    $path = public_path() . "/" . $viewPath;
                    $file->move($path, $filename);
                    $actualFileName = $viewPath . "/" . $filename;

                    $first = [
                        "sectionName"   => $req->section,
                        "value"         => $actualFileName,
                        "type"          => "image"
                    ];
                    array_push($section, $first);
                }

                if (isset($req->section2Heading)) {
                    $second = [
                        "sectionName"   => $req->section,
                        "value"         => $req->section2Heading,
                        "type"          => "heading"
                    ];

                    array_push($section, $second);
                }

                if (isset($req->section2Content)) {
                    $third = [
                        "sectionName"   => $req->section,
                        "value"         => $req->section2Content,
                        "type"          => "content"
                    ];
                    array_push($section, $third);
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
}
