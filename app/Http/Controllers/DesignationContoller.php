<?php

namespace App\Http\Controllers;

use App\Models\SectionValue;
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
        $req->validate([
            'section'  => 'required',
            'value1'    => 'nullable|file|mimetypes:video/mp4,video/avi,video/mpeg,video/quicktime|',
            'value2'    => 'nullable'
        ]);

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
        return true;
    }
}
