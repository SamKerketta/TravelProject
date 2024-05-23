<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionValue extends Model
{
    use HasFactory;

    /**
     * | Update the section values 
        | Serial No : 01
     */
    public function updateValues($updateValues, $pageName)
    {
        SectionValue::where("page_section", $updateValues->section_name)
            ->where("page_name", $pageName)
            ->where("status", true)
            ->update([
                "value" => $updateValues->value
            ]);
    }

    /**
     * | Save the section values 
        | serial No : 02
     */
    public function saveValues($saveData)
    {
        SectionValue::insert($saveData);
    }

    /**
     * | Get data according to page name
        | Serial No : 03
     */
    public function getDataForPage($pageName)
    {
        return SectionValue::where("page_name", $pageName)
            ->where("status", true);
    }
}
