<?php

namespace App\Http\Controllers;

use App\Models\SectionValue;
use Exception;
use Illuminate\Http\Request;

class AboutUsPageController extends Controller
{
    /**
     * | About Us Page
     */
    public function aboutusPage()
    {
        return view('admin.pages.aboutus');
    }

    private $mSectionValue;
    private $_pageName;
    // Initializing Construct Function 
    public function __construct()
    {
        $this->mSectionValue = new SectionValue();
        $this->_pageName = "aboutUs";
    }


    /**
     * | For the first section 
     * | Completed
        | Serial no : 01
     */
    public function sectionUpdate1(Request $req)
    {
        $req->validate([
            'section1'  => 'required',
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
                $viewPath = "uploads/about";
                $path = public_path() . "/" . $viewPath;
                $file->move($path, $filename);
                $actualFileName = $viewPath . "/" . $filename;

                $first = [
                    "sectionName"   => $req->section1,
                    "value"         => $actualFileName,
                    "type"          => "image"
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
            'value2'    => 'nullable',
        ]);

        try {
            $section = array();

            if ($req->hasFile('value1') && $req->value1) {
                $file = $req->file('value1');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . rand(10, 100) . "." . $extension;
                $viewPath = "uploads/about";
                $path = public_path() . "/" . $viewPath;
                $file->move($path, $filename);
                $actualFileName = $viewPath . "/" . $filename;

                $first = [
                    "sectionName"   => $req->section3,
                    "value"         => $actualFileName,
                    "type"          => "image"
                ];
                array_push($section, $first);
            }

            if (isset($req->value2)) {
                $second = [
                    "sectionName"   => $req->section3,
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


    /**
     * | Section 4
     */
    public function sectionUpdate4(Request $req)
    {
        $req->validate([
            'section4'  => 'required',
            'value1'    => 'nullable',
            'value2'    => 'nullable',
        ]);

        try {
            $section = array();

            if ($req->hasFile('value2') && $req->value2) {
                $file = $req->file('value1');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . rand(10, 100) . "." . $extension;
                $viewPath = "uploads/about";
                $path = public_path() . "/" . $viewPath;
                $file->move($path, $filename);
                $actualFileName = $viewPath . "/" . $filename;

                $first = [
                    "sectionName"   => $req->section4,
                    "value"         => $actualFileName,
                    "type"          => "image"
                ];
                array_push($section, $first);
            }

            if (isset($req->value1)) {
                $second = [
                    "sectionName"   => $req->section4,
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
    /**
     * | Section 5
     */
    public function sectionUpdate5(Request $req)
    {
        $req->validate([
            'pageName'  => 'required',
            'section5'  => 'required',
            'image1'     => 'nullable',
            'image2'     => 'nullable',
            'heading1'   => 'nullable',
            'heading2'   => 'nullable',
            'subheading1'   => 'nullable',
            'subheading2'   => 'nullable',
            'content1'   => 'nullable',
            'content2'   => 'nullable',
            'content3'   => 'nullable',
            'content4'   => 'nullable',
        ]);

        try {
            $section = array();

            #image
            if ($req->hasFile('image1') && $req->image1) {
                $file = $req->file('image1');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . rand(10, 100) . "." . $extension;
                $viewPath = "uploads/aboutus   ";
                $path = public_path() . '/' . $viewPath;
                $file->move($path, $filename);
                $actualFileName = $viewPath . "/" . $filename;

                $first = [
                    "sectionName" => $req->section4,
                    "value" => $actualFileName,
                    "type" => "image"
                ];
                array_push($section, $first);
            }

            #image
            if ($req->hasFile('image2') && $req->image2) {
                $file = $req->file('image2');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . rand(10, 100) . "." . $extension;
                $viewPath = "uploads/aboutus   ";
                $path = public_path() . '/' . $viewPath;
                $file->move($path, $filename);
                $actualFileName = $viewPath . "/" . $filename;

                $first = [
                    "sectionName" => $req->section4,
                    "value" => $actualFileName,
                    "type" => "image"
                ];
                array_push($section, $first);
            }

            #2
            if (isset($req->heading)) {
                $second = [
                    "sectionName" => $req->section4,
                    "value" => "$req->heading",
                    "type" => "heading"                                     // Static
                ];
                array_push($section, $second);
            }

            #3
            if (isset($req->content1)) {
                $second = [
                    "sectionName" => $req->section4,
                    "value" => "$req->content1",
                    "type" => "content1"                                  // Static
                ];
                array_push($section, $second);
            }

            #3
            if (isset($req->content2)) {
                $second = [
                    "sectionName" => $req->section4,
                    "value" => "$req->content2",
                    "type" => "content2"                                  // Static
                ];
                array_push($section, $second);
            }

            #3
            if (isset($req->content3)) {
                $second = [
                    "sectionName" => $req->section4,
                    "value" => "$req->content3",
                    "type" => "content3"                                  // Static
                ];
                array_push($section, $second);
            }

            #3
            if (isset($req->content4)) {
                $second = [
                    "sectionName" => $req->section4,
                    "value" => "$req->content4",
                    "type" => "content4"                                  // Static
                ];
                array_push($section, $second);
            }

            if (!empty($section)) {
                foreach ($section as $sections) {
                    $this->mSectionValue->updateValues($sections, $req->pageName);
                }
            }
            $responseMsg = $req->pageName . " Content Updated";
            return back()->with('success', $responseMsg);
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}
