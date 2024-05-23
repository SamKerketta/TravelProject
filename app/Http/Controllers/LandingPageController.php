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
        $validated = Validator::make(
            $req->all(),
            [
                'page_name'                 => 'required',
                'section'                   => 'required|array',
                'section.*.value'           => 'required',
                'section.*.section_name'    => 'required|string',
            ]
        );
        if ($validated->fails())
            return validationError($validated);

        try {
            # Update the page contents 
            foreach ($req->section as $sections) {
                $this->mSectionValue->updateValues($sections, $req->page_name);
            }

            $responseMsg = $req->page_name . " Content Updated";
            return responseMsg(true, $responseMsg, []);
        } catch (Exception $e) {
            return responseMsg(false, $e->getMessage(), []);
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
}
