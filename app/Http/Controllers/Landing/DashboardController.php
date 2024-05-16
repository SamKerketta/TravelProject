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
    public function dashboardView()
    {
        try {
            return view("dashboard/hero");
        } catch (Exception $e) {
        }
    }


    /**
     * | Get Destination details and render it 
     * | Destination detials only
        | Serial No : 02
        | Under con
     */
    public function destinationView()
    {

        try {
        } catch (Exception $e) {
        }
    }

    /**
     * | Get detials and view Our services 
     * | Services details only 
        | Serial No : 03
        | Under Con 
     */
    public function servicesView()
    {
        try {
        } catch (Exception $e) {
        }
    }
}
