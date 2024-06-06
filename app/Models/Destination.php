<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;


    public function saveUpdateDestination($pageName, $data, $destination)
    {
        $mDestination = new Destination();
        $mDestination->destination_name = $destination;
        $mDestination->content_one      = $data['des1content'] ?? "";
        $mDestination->content_two      = $data['des1subcontent'] ?? "";
        $mDestination->image_one        = $data['$des1image'] ?? "";
        $mDestination->image_two        = $data['des1secondimage'] ?? "";
        $mDestination->l_content        = $data['lcuntent'] ?? "";
        $mDestination->l_image          = $data['limage'] ?? "";
        $mDestination->save();
    }


    public function getDestination()
    {
        return Destination::where('status',1)->orderBy('id');
    }


}