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
    private $mPageSection;
    private $mSectionType;
    private $mSectionValue;

    // Initializing Construct Function 
    public function __construct()
    {
        $this->mPageSection     = new PageSection();
        $this->mSectionType     = new SectionType();

        $this->mSectionValue    = new SectionValue();
    }


    /**
     * | For the first section 
        | Serial no : 01
        | Under Con
     */
    public function sectionUpdate(Request $req)
    {
        $req->validate([
            'pageName'  => 'required',
            'section1'  => 'required',
            'value1'    => 'nullable|file|mimetypes:video/mp4,video/avi,video/mpeg,video/quicktime',
            'value2'    => 'nullable'
        ]);

        try {
            # Update the page contents 
            $section = array();

            if ($req->hasFile('value1') && $req->value1) {
                $file = $req->file('value1');
                $filename = $file->getClientOriginalName();
                $path = public_path() . '/uploads/section1';
                $fileName = $file->move($path, $filename);

                $first = [
                    "sectionName" => $req->section1,
                    "value" => $fileName,
                    "type" => "video"
                ];
                array_push($section, $first);
            }

            if ($req->value1 || isset($req->value2)) {
                $second = [
                    "sectionName" => $req->section1,
                    "value" => "$req->value2",
                    "type" => "heading"
                ];
                array_push($section, $second);
            }

            if (!empty($section)) {
                foreach ($section as $sections) {
                    $this->mSectionValue->updateValues($sections, $req->pageName);
                }
            }


            $responseMsg = $req->page_name . " Content Updated";
            // return true;
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
            'pageName'  => 'required',
            'section2'  => 'required',
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
                    "type" => "subContent"                                  // Static
                ];
                array_push($section, $second);
            }

            if (!empty($section)) {
                foreach ($section as $sections) {
                    $this->mSectionValue->updateValues($sections, $req->pageName);
                }
            }
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
            'value2'    => 'nullable',
            'value3'    => 'nullable'
        ]);

        try {
            $section = array();

            #1
            if (isset($req->value1)) {
                $second = [
                    "sectionName" => $req->section3,
                    "value" => "$req->value2",
                    "type" => "title"                                       // Static
                ];
                array_push($section, $second);
            }

            #2
            if (isset($req->value2)) {
                $second = [
                    "sectionName" => $req->section3,
                    "value" => "$req->value2",
                    "type" => "image1"                                     // Static
                ];
                array_push($section, $second);
            }

            #3
            if (isset($req->value3)) {
                $second = [
                    "sectionName" => $req->section3,
                    "value" => "$req->value3",
                    "type" => "heading1"                                  // Static
                ];
                array_push($section, $second);
            }

            if (isset($req->value2)) {
                $second = [
                    "sectionName" => $req->section3,
                    "value" => "$req->value2",
                    "type" => "image2"                                     // Static
                ];
                array_push($section, $second);
            }

            #3
            if (isset($req->value3)) {
                $second = [
                    "sectionName" => $req->section3,
                    "value" => "$req->value3",
                    "type" => "headin2"                                  // Static
                ];
                array_push($section, $second);
            }

            if (isset($req->value2)) {
                $second = [
                    "sectionName" => $req->section3,
                    "value" => "$req->value2",
                    "type" => "image3"                                     // Static
                ];
                array_push($section, $second);
            }

            #3
            if (isset($req->value3)) {
                $second = [
                    "sectionName" => $req->section3,
                    "value" => "$req->value3",
                    "type" => "heading3"                                  // Static
                ];
                array_push($section, $second);
            }

            if (isset($req->value2)) {
                $second = [
                    "sectionName" => $req->section3,
                    "value" => "$req->value2",
                    "type" => "image4"                                     // Static
                ];
                array_push($section, $second);
            }

            #3
            if (isset($req->value3)) {
                $second = [
                    "sectionName" => $req->section3,
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
            'value2'    => 'nullable',
            'value3'    => 'nullable'
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
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }






    /**
     * | Store the page section details 
        | Serial No :
        | Under Con  
     */
    public function sectionSave(Request $req)
    {
        $validated = Validator::make(
            $req->all(),
            [
                'page_name'                 => 'required',
                'section'                   => 'required|array',
                'section.*.value'           => 'required',
                'section.*.section_name'    => 'required|string',
                'section.*.section_type'    => 'required'
            ]
        );
        if ($validated->fails())
            return validationError($validated);
        try {
            $saveData = array();
            foreach ($req->section as $sections) {
                array_push($saveData, [
                    'section_type'  => $sections->section_type,
                    'page_section'  => $sections->section_name,
                    'value'         => $sections->value,
                    'page_name'     => $req->page_name
                ]);
            }

            $this->mSectionValue->saveValues($saveData);
            $responseMsg = $req->page_name . " Content Saved";
            return responseMsg(true, $responseMsg, []);
        } catch (Exception $e) {
            return responseMsg(false, $e->getMessage(), []);
        }
    }

    public function landingPage()
    {
        return view('admin.pages.landing');
    }
}
