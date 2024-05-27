<?php

namespace App\Http\Controllers;

use App\Models\SectionValue;
use Illuminate\Http\Request;

class ResponsibleController extends Controller
{
    private $mSectionValue;
    private $_pageName;
    private $_noOfSections;
    // Initializing Construct Function 
    public function __construct()
    {
        $this->mSectionValue    = new SectionValue();
        $this->_pageName = "responsible_travels";
        $this->_noOfSections = 3;
    }

    // Admin Responsible View Page
    public function viewResponsible()
    {
        $compacts = [
            'noOfSections' => $this->_noOfSections
        ];
        return view('admin.pages.responsible-travel', $compacts);
    }
}
