<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function saveTestimonial($req)
    {
        $mTestimonial = new Testimonial();
        $mTestimonial->description  = $req->testimonaial ?? "";
        $mTestimonial->name         = $req->name ?? "";
        $mTestimonial->designation  = $req->designation ?? "";
        $mTestimonial->country      = $req->country ?? "";
        $mTestimonial->save();
    }
}
