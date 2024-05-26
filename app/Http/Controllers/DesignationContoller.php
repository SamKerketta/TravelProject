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

    // Update Section 3
    public function updateSection3($req)
    {
        if ($req->section == 3) {
            $req->validate([
                "section"  => "required",
                "section3Image"    => "nullable|image|mimes:jpeg,jpg,png",
                "section3Content"    => "required|string"
            ]);

            $section = array();
            try {
                if ($req->hasFile('section3Image') && $req->section3Image) {
                    $file = $req->file('section3Image');
                    $extension = $file->getClientOriginalExtension();
                    $filename = time() . rand(10, 100) . "." . $extension;
                    $viewPath = "uploads/landing/section3";
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

                if (isset($req->section3Content)) {
                    $third = [
                        "sectionName"   => $req->section,
                        "value"         => $req->section3Content,
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

    // Update Section 4
    public function updateSection4($req)
    {
        if ($req->section == 4) {
            $req->validate([
                "section"  => "required",
                "section4Image"    => "nullable|image|mimes:jpeg,jpg,png",
                "section4Heading"    => "required|string",
                "section4Content"    => "required|string"
            ]);

            $section = array();
            try {
                if ($req->hasFile('section4Image') && $req->section4Image) {
                    $file = $req->file('section4Image');
                    $extension = $file->getClientOriginalExtension();
                    $filename = time() . rand(10, 100) . "." . $extension;
                    $viewPath = "uploads/landing/section4";
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

                if (isset($req->section4Heading)) {
                    $second = [
                        "sectionName"   => $req->section,
                        "value"         => $req->section4Heading,
                        "type"          => "heading"
                    ];

                    array_push($section, $second);
                }

                if (isset($req->section4Content)) {
                    $third = [
                        "sectionName"   => $req->section,
                        "value"         => $req->section4Content,
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

    // Update Section 5
    public function updateSection5($req)
    {
        if ($req->section == 5) {
            $req->validate([
                "section"  => "required",
                "section5Image"    => "nullable|image|mimes:jpeg,jpg,png",
                "section5Content"    => "required|string"
            ]);

            $section = array();
            try {
                if ($req->hasFile('section5Image') && $req->section5Image) {
                    $file = $req->file('section5Image');
                    $extension = $file->getClientOriginalExtension();
                    $filename = time() . rand(10, 100) . "." . $extension;
                    $viewPath = "uploads/landing/section5";
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


                if (isset($req->section5Content)) {
                    $third = [
                        "sectionName"   => $req->section,
                        "value"         => $req->section5Content,
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

    // Update Section 6
    public function updateSection6($req)
    {
        if ($req->section == 6) {
            $req->validate([
                "section"  => "required",
                "section6Image"    => "nullable|image|mimes:jpeg,jpg,png",
                "section6Heading"    => "required|string",
                "section6Content"    => "required|string"
            ]);

            $section = array();
            try {
                if ($req->hasFile('section6Image') && $req->section6Image) {
                    $file = $req->file('section6Image');
                    $extension = $file->getClientOriginalExtension();
                    $filename = time() . rand(10, 100) . "." . $extension;
                    $viewPath = "uploads/landing/section6";
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

                if (isset($req->section6Heading)) {
                    $second = [
                        "sectionName"   => $req->section,
                        "value"         => $req->section6Heading,
                        "type"          => "heading"
                    ];

                    array_push($section, $second);
                }

                if (isset($req->section6Content)) {
                    $third = [
                        "sectionName"   => $req->section,
                        "value"         => $req->section6Content,
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

    // Update Section 7
    public function updateSection7($req)
    {
        if ($req->section == 7) {
            $req->validate([
                "section"  => "required",
                "section7Image"    => "nullable|image|mimes:jpeg,jpg,png",
                "section7Content"    => "required|string"
            ]);

            $section = array();
            try {
                if ($req->hasFile('section7Image') && $req->section7Image) {
                    $file = $req->file('section7Image');
                    $extension = $file->getClientOriginalExtension();
                    $filename = time() . rand(10, 100) . "." . $extension;
                    $viewPath = "uploads/landing/section7";
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

                if (isset($req->section7Content)) {
                    $third = [
                        "sectionName"   => $req->section,
                        "value"         => $req->section7Content,
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

    // Update Section 8
    public function updateSection8($req)
    {
        if ($req->section == 8) {
            $req->validate([
                "section"  => "required",
                "section8Image"    => "nullable|image|mimes:jpeg,jpg,png",
                "section8Heading"    => "required|string",
                "section8Content"    => "required|string"
            ]);

            $section = array();
            try {
                if ($req->hasFile('section8Image') && $req->section8Image) {
                    $file = $req->file('section8Image');
                    $extension = $file->getClientOriginalExtension();
                    $filename = time() . rand(10, 100) . "." . $extension;
                    $viewPath = "uploads/landing/section8";
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

                if (isset($req->section8Heading)) {
                    $second = [
                        "sectionName"   => $req->section,
                        "value"         => $req->section8Heading,
                        "type"          => "heading"
                    ];

                    array_push($section, $second);
                }

                if (isset($req->section8Content)) {
                    $third = [
                        "sectionName"   => $req->section,
                        "value"         => $req->section8Content,
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

    // Update Section 9
    public function updateSection9($req)
    {
        if ($req->section == 9) {
            $req->validate([
                "section"  => "required",
                "section9Image"    => "nullable|image|mimes:jpeg,jpg,png",
                "section9Content"    => "required|string"
            ]);

            $section = array();
            try {
                if ($req->hasFile('section9Image') && $req->section9Image) {
                    $file = $req->file('section9Image');
                    $extension = $file->getClientOriginalExtension();
                    $filename = time() . rand(10, 100) . "." . $extension;
                    $viewPath = "uploads/landing/section9";
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


                if (isset($req->section9Content)) {
                    $third = [
                        "sectionName"   => $req->section,
                        "value"         => $req->section9Content,
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
