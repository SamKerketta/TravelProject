<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\PageSection;
use App\Models\SectionType;
use App\Models\SectionValue;
use Exception;
use Illuminate\Http\Request;

class DashboardController extends Controller
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
     * | Get and render Dasboard details 
     * | Get the details from the db and render the dashboard 
        | Serial No : 01
        | Under Con 
     */
    public function index()
    {
        $pageName = "landingPage";                                              // Static put in config

        # Get the landing page Dats
        $pageData = $this->mSectionValue->getDataForPage($pageName)->orderBy("page_section")->get();

        # Structure the data for the frontend 
        // $viewData = [];
        return view("pages/hero");
    }


    /**
     * | Get Destination details and render it 
     * | Destination detials only
        | Serial No : 02
        | Under con
     */
    public function aboutUs()
    {
        return view("pages/about-us");
    }

    /**
     * | Get detials and view Our services 
     * | Services details only 
        | Serial No : 03
        | Under Con 
     */
    public function ourDestination()
    {
        return view("pages/our-destination");
    }

    /**
     * | Get the destials for the little inpiration page 
        | Serial No : 04
        | Under Con
     */
    public function littileInspiration()
    {
        return view("pages/littile-inspiration");
    }


    /**
     * | Get the details for the our services page 
        | Serial No : 05
        | Under Con 
     */
    public function ourServic()
    {
        return view("pages/our-service");
    }

    /**
     * | Get the details for the responsible travel page 
        | Serial No : 06
        | Under Con 
     */
    public function responsibleTravel()
    {
        return view("pages/responsible-travel");
    }

    /**
     * | Get the blog page details and view it 
        | Serial No : 07
        | Under Con
     */
    public function blogs()
    {
        return view("pages/blogs");
    }


    /**
     * | Get the details and view the contact us page 
        | Serial no :
        | Under Con 
     */
    public function contactUs()
    {
        return view("pages/contact-us");
    }
}
