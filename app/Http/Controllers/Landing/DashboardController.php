<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Initializing Construct Function 
    public function __construct()
    {
    }

    /**
     * | Get and render Dasboard details 
     * | Get the details from the db and render the dashboard 
        | Serial No : 01
        | Under Con 
     */
    public function index()
    {
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
        return view("pages/our-servic");
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
}
