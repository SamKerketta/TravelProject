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
                $viewPath = "uploads/landing/section1";
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
            return back();
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
            'value2'    => 'nullable',
            'value3'    => 'nullable'
        ]);

        try {
            $section = array();
            #1
            if (isset($req->value1)) {
                $array = [
                    "sectionName"   => $req->section2,
                    "value"         => $req->value1,
                    "type"          => "title"                                       // Static
                ];
                array_push($section, $array);
            }

            #2
            if (isset($req->value2)) {
                $array = [
                    "sectionName"   => $req->section2,
                    "value"         => $req->value2,
                    "type"          => "content"                                     // Static
                ];
                array_push($section, $array);
            }

            #3
            if (isset($req->value3)) {
                $array = [
                    "sectionName"   => $req->section2,
                    "value"         => $req->value3,
                    "type"          => "subContent"                                  // Static
                ];
                array_push($section, $array);
            }

            if (!empty($section)) {
                foreach ($section as $sections) {
                    $this->mSectionValue->updateValues($sections, $this->_pageName);
                }
            }

            $responseMsg = $req->pageName . " Content Updated";
            return back();
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
            'pageName'  => 'required',
            'section3'  => 'required',
            'value1'    => 'nullable',
            'value2'    => 'nullable|image|mimes:jpeg,png,jpg',
            'value3'    => 'nullable',
            'value4'    => 'nullable|image|mimes:jpeg,png,jpg',
            'value5'    => 'nullable',
            'value6'    => 'nullable|image|mimes:jpeg,png,jpg',
            'value7'    => 'nullable',
            'value8'    => 'nullable|image|mimes:jpeg,png,jpg',
            'value9'    => 'nullable'
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

            if (isset($req->value2)) {

                $file = $req->file('value2');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . rand(10, 100) . "." . $extension;
                $viewPath = "uploads/section3";
                $path = public_path() . "/" . $viewPath;
                $file->move($path, $filename);
                $actualFileName = $viewPath . "/" . $filename;

                $array = [
                    "sectionName" => $req->section3,
                    "value" => $actualFileName,
                    "type" => "image1"                                     // Static
                ];
                array_push($section, $array);
            }

            if (isset($req->value3)) {
                $array = [
                    "sectionName" => $req->section3,
                    "value" => $req->value3,
                    "type" => "heading1"                                  // Static
                ];
                array_push($section, $array);
            }

            if (isset($req->value4)) {

                $file = $req->file('value4');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . rand(10, 100) . "." . $extension;
                $viewPath = "uploads/section3";
                $path = public_path() . "/" . $viewPath;
                $file->move($path, $filename);
                $actualFileName = $viewPath . "/" . $filename;

                $array = [
                    "sectionName" => $req->section3,
                    "value" => $actualFileName,
                    "type" => "image2"                                     // Static
                ];
                array_push($section, $array);
            }

            #3
            if (isset($req->value5)) {
                $array = [
                    "sectionName" => $req->section3,
                    "value" => $req->value5,
                    "type" => "headin2"                                  // Static
                ];
                array_push($section, $array);
            }

            if (isset($req->value6)) {

                $file = $req->file('value6');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . rand(10, 100) . "." . $extension;
                $viewPath = "uploads/section3";
                $path = public_path() . "/" . $viewPath;
                $file->move($path, $filename);
                $actualFileName = $viewPath . "/" . $filename;

                $array = [
                    "sectionName" => $req->section3,
                    "value" => $actualFileName,
                    "type" => "image3"                                     // Static
                ];
                array_push($section, $array);
            }

            #3
            if (isset($req->value7)) {
                $array = [
                    "sectionName" => $req->section3,
                    "value" => $req->value7,
                    "type" => "heading3"                                  // Static
                ];
                array_push($section, $array);
            }

            if (isset($req->value8)) {

                $file = $req->file('value8');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . rand(10, 100) . "." . $extension;
                $viewPath = "uploads/section3";
                $path = public_path() . "/" . $viewPath;
                $file->move($path, $filename);
                $actualFileName = $viewPath . "/" . $filename;

                $array = [
                    "sectionName" => $req->section3,
                    "value" => $actualFileName,
                    "type" => "image4"                                     // Static
                ];
                array_push($section, $array);
            }

            #3
            if (isset($req->value9)) {
                $array = [
                    "sectionName" => $req->section3,
                    "value" => $req->value9,
                    "type" => "heading4"                                  // Static
                ];
                array_push($section, $array);
            }

            if (!empty($section)) {
                foreach ($section as $sections) {
                    $this->mSectionValue->updateValues($sections, $req->pageName);
                }
            }
            $responseMsg = $req->pageName . " Content Updated";
            return back();
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
            'pageName'  => 'required',
            'section4'  => 'required',
            'value1'    => 'nullable',

            'value2'    => 'nullable', //
            'value3'    => 'nullable',
            'value4'    => 'nullable',

            'value5'    => 'nullable', // 
            'value6'    => 'nullable',
            'value7'    => 'nullable',

            'value8'    => 'nullable', // 
            'value9'    => 'nullable',
            'value10'   => 'nullable',

            'value11'   => 'nullable',  //
            'value12'   => 'nullable',
            'value13'   => 'nullable',
        ]);

        try {
            $section = array();

            #1
            if (isset($req->value1)) {
                $second = [
                    "sectionName" => $req->section4,
                    "value" => "$req->value2",
                    "type" => "title"                                       // Static
                ];
                array_push($section, $second);
            }

            #2
            if (isset($req->value2)) {
                $second = [
                    "sectionName" => $req->section4,
                    "value" => "$req->value2",
                    "type" => "svg1"                                     // Static
                ];
                array_push($section, $second);
            }

            #3
            if (isset($req->value3)) {
                $second = [
                    "sectionName" => $req->section4,
                    "value" => "$req->value3",
                    "type" => "svgTitle1"                                  // Static
                ];
                array_push($section, $second);
            }


            if (isset($req->value4)) {
                $second = [
                    "sectionName" => $req->section4,
                    "value" => "$req->value3",
                    "type" => "svgcontent1"                                  // Static
                ];
                array_push($section, $second);
            }
            if (isset($req->value3)) {
                $second = [
                    "sectionName" => $req->section4,
                    "value" => "$req->value3",
                    "type" => "svgcontent2"                                  // Static
                ];
                array_push($section, $second);
            }
            if (isset($req->value3)) {
                $second = [
                    "sectionName" => $req->section4,
                    "value" => "$req->value3",
                    "type" => "svgcontent3"                                  // Static
                ];
                array_push($section, $second);
            }
            if (isset($req->value3)) {
                $second = [
                    "sectionName" => $req->section4,
                    "value" => "$req->value3",
                    "type" => "svgcontent4"                                  // Static
                ];
                array_push($section, $second);
            }



            if (isset($req->value2)) {
                $second = [
                    "sectionName" => $req->section4,
                    "value" => "$req->value2",
                    "type" => "svg2"                                     // Static
                ];
                array_push($section, $second);
            }

            #3
            if (isset($req->value3)) {
                $second = [
                    "sectionName" => $req->section4,
                    "value" => "$req->value3",
                    "type" => "svgTitle2"                                  // Static
                ];
                array_push($section, $second);
            }

            if (isset($req->value2)) {
                $second = [
                    "sectionName" => $req->section4,
                    "value" => "$req->value2",
                    "type" => "svg3"                                     // Static
                ];
                array_push($section, $second);
            }

            #3
            if (isset($req->value3)) {
                $second = [
                    "sectionName" => $req->section4,
                    "value" => "$req->value3",
                    "type" => "svgTitle3"                                  // Static
                ];
                array_push($section, $second);
            }

            if (isset($req->value2)) {
                $second = [
                    "sectionName" => $req->section4,
                    "value" => "$req->value2",
                    "type" => "svg4"                                     // Static
                ];
                array_push($section, $second);
            }

            #3
            if (isset($req->value3)) {
                $second = [
                    "sectionName" => $req->section4,
                    "value" => "$req->value3",
                    "type" => "svgTitle4"                                  // Static
                ];
                array_push($section, $second);
            }

            if (!empty($section)) {
                foreach ($section as $sections) {
                    $this->mSectionValue->updateValues($sections, $req->pageName);
                }
            }

            return back();
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
            'value1'    => 'nullable',
            'value2'    => 'nullable',
            'value3'    => 'nullable'
        ]);

        try {
            $section = array();

            #1
            if (isset($req->value1)) {
                $second = [
                    "sectionName" => $req->section2,
                    "value" => "$req->value2",
                    "type" => "title"                                       // Static
                ];
                array_push($section, $second);
            }

            #2
            if (isset($req->value2)) {
                $second = [
                    "sectionName" => $req->section2,
                    "value" => "$req->value2",
                    "type" => "content"                                     // Static
                ];
                array_push($section, $second);
            }

            #3
            if (isset($req->value3)) {
                $second = [
                    "sectionName" => $req->section2,
                    "value" => "$req->value3",
                    "type" => "image1"                                  // Static
                ];
                array_push($section, $second);
            }

            if (isset($req->value2)) {
                $second = [
                    "sectionName" => $req->section2,
                    "value" => "$req->value2",
                    "type" => "imageTitle1"                                     // Static
                ];
                array_push($section, $second);
            }

            #3
            if (isset($req->value3)) {
                $second = [
                    "sectionName" => $req->section2,
                    "value" => "$req->value3",
                    "type" => "imageContent1"                                  // Static
                ];
                array_push($section, $second);
            }

            if (isset($req->value2)) {
                $second = [
                    "sectionName" => $req->section2,
                    "value" => "$req->value2",
                    "type" => "image3"                                     // Static
                ];
                array_push($section, $second);
            }

            #3
            if (isset($req->value3)) {
                $second = [
                    "sectionName" => $req->section2,
                    "value" => "$req->value3",
                    "type" => "heading3"                                  // Static
                ];
                array_push($section, $second);
            }

            if (isset($req->value2)) {
                $second = [
                    "sectionName" => $req->section2,
                    "value" => "$req->value2",
                    "type" => "image4"                                     // Static
                ];
                array_push($section, $second);
            }

            #3
            if (isset($req->value3)) {
                $second = [
                    "sectionName" => $req->section2,
                    "value" => "$req->value3",
                    "type" => "heading4"                                  // Static
                ];
                array_push($section, $second);
            }

            if (!empty($section)) {
                foreach ($section as $sections) {
                    $this->mSectionValue->updateValues($sections, $req->pageName);
                }
            }
            return back();
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }


    /**
     * | Section 6
     */
    public function sectionUpdate6(Request $req)
    {
        $req->validate([
            'pageName'  => 'required',
            'section5'  => 'required',
            'value1'    => 'nullable',
            'value2'    => 'nullable',
            'value3'    => 'nullable'
        ]);

        try {
            $section = array();

            #1
            if (isset($req->value1)) {
                $second = [
                    "sectionName" => $req->section2,
                    "value" => "$req->value2",
                    "type" => "title"                                       // Static
                ];
                array_push($section, $second);
            }

            #2
            if (isset($req->value2)) {
                $second = [
                    "sectionName" => $req->section2,
                    "value" => "$req->value2",
                    "type" => "content"                                     // Static
                ];
                array_push($section, $second);
            }

            #3
            if (isset($req->value3)) {
                $second = [
                    "sectionName" => $req->section2,
                    "value" => "$req->value3",
                    "type" => "image1"                                  // Static
                ];
                array_push($section, $second);
            }

            #4
            if (isset($req->value2)) {
                $second = [
                    "sectionName" => $req->section2,
                    "value" => "$req->value2",
                    "type" => "imageTitle1"                                     // Static
                ];
                array_push($section, $second);
            }

            #5
            if (isset($req->value3)) {
                $second = [
                    "sectionName" => $req->section2,
                    "value" => "$req->value3",
                    "type" => "imageContent1"                                  // Static
                ];
                array_push($section, $second);
            }

            #6
            if (isset($req->value2)) {
                $second = [
                    "sectionName" => $req->section2,
                    "value" => "$req->value2",
                    "type" => "image3"                                     // Static
                ];
                array_push($section, $second);
            }

            #7
            if (isset($req->value3)) {
                $second = [
                    "sectionName" => $req->section2,
                    "value" => "$req->value3",
                    "type" => "heading3"                                  // Static
                ];
                array_push($section, $second);
            }

            #8
            if (isset($req->value2)) {
                $second = [
                    "sectionName" => $req->section2,
                    "value" => "$req->value2",
                    "type" => "image4"                                     // Static
                ];
                array_push($section, $second);
            }

            #9
            if (isset($req->value3)) {
                $second = [
                    "sectionName" => $req->section2,
                    "value" => "$req->value3",
                    "type" => "heading4"                                  // Static
                ];
                array_push($section, $second);
            }

            if (!empty($section)) {
                foreach ($section as $sections) {
                    $this->mSectionValue->updateValues($sections, $req->pageName);
                }
            }
            return back();
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }






    public function landingPage()
    {
        return view('admin.pages.landing');
    }
}
