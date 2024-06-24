@extends('admin.layouts.app')

@section('page-content')

    <div class="content-wrapper">
        @if (\Session::has('error'))
            <div class="alert alert-danger">
                <ul>
                    <li>{!! \Session::get('error') !!}</li>
                </ul>
            </div>
        @endif
        @if (\Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {!! \Session::get('success') !!}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif



        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit Testimonial</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/login">Home</a></li>
                            <li class="breadcrumb-item active">Edit Testimonial</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <section class="content">

            {{-- tab  --}}
            <ul class="nav nav-tabs" id="myTab" role="tablist">

                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                        aria-controls="home" aria-selected="false">Edit</a>
                </li>
            </ul>



            {{-- first section  --}}
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                {{-- section1 --}}
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h3>testimonaial Details</h3>
                        </div>
                        <div class="col-md-12">
                            <form action="{{ route('edit.testimonaials') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="section" id="section" value="3">
                                <div class="form-group">

                                    <input type="hidden" class="form-control" id="id" name="id"
                                        value="{{ $testimonial->id }}">

                                    <label for="section1Heading">Testimonial</label>
                                    <textarea class="form-control" style="height: auto !important" id="testimonaial" name="testimonaial" rows="3">{{ $testimonial->description ?? '' }}</textarea>

                                    <label style ="margin-top:20px" for="section1Heading">Name</label>
                                    <textarea class="form-control" id="name" name="name" rows="3">{{ $testimonial->name ?? '' }}</textarea>

                                    <label style ="margin-top:20px" for="section1Heading">Designation</label>
                                    <textarea class="form-control" id="designation" name="designation" rows="3">{{ $testimonial->designation ?? '' }}</textarea>

                                    <label style ="margin-top:20px" for="section1Heading">Country/Company</label>
                                    <textarea class="form-control" id="country" name="country" rows="3">{{ $testimonial->country ?? '' }}</textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>
@endsection



@section('scripts')
    <script src="https://cdn.tiny.cloud/1/h2i627qpk2x44z2vkshvrgsesr6onkskwiw0mzd81z5ct9mj/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: 'textarea.tinymce-editor',
            height: 300,
            menubar: true,
            apikey: 'h2i627qpk2x44z2vkshvrgsesr6onkskwiw0mzd81z5ct9mj',
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount', 'image'
            ],
            toolbar: 'undo redo | formatselect | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help',
            content_css: '//www.tiny.cloud/css/codepen.min.css'
        });
    </script>
@endsection
