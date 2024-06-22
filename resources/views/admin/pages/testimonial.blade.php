@extends('admin.layouts.app')

@section('page-content')
    <div class="content-wrapper">

        @if (\Session::has('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {!! \Session::get('error') !!}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
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
                        <h1 class="m-0">Testimonial</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Testimonial</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <section class="content">

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                        aria-controls="contact" aria-selected="true">List testimonial</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                        aria-controls="profile" aria-selected="false">Add testimonial</a>
                </li>
            </ul>



            <br>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tab-content" id="myTabContent">


                            {{-- second section --}}
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="col-md-12 text-center">
                                    <h3>Add testimonaial </h3>
                                </div>
                                <form action="{{ route('add.testimonaial') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="section" id="section" value="3">
                                    <div class="form-group">
                                        <label for="section1Heading">Testimonial</label>
                                        <textarea class="form-control" style="height: auto !important" id="testimonaial" name="testimonaial" rows="3"></textarea>

                                        <label style ="margin-top:20px" for="section1Heading">Name</label>
                                        <textarea class="form-control" id="name" name="name" rows="3"></textarea>

                                        <label style ="margin-top:20px" for="section1Heading">Designation</label>
                                        <textarea class="form-control" id="designation" name="designation" rows="3"></textarea>

                                        <label style ="margin-top:20px" for="section1Heading">Country/Company</label>
                                        <textarea class="form-control" id="country" name="country" rows="3"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                                <!-- Section 1 -->
                                <hr>



                            </div>

                            {{-- third section --}}
                            <div class="tab-pane fade show active" id="contact" role="tabpanel"
                                aria-labelledby="contact-tab">
                                <!-- Modal -->
                                <div class="modal fade" id="addVideoModal" tabindex="-1" role="dialog"
                                    aria-labelledby="addVideoModal" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="addVideoModal">View Testimonial List</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal -->
                                <!-- Table -->
                                <table class="table mt-2">
                                    <thead>
                                        <tr>
                                            {{-- <th scope="col">Serial No</th> --}}
                                            <th scope="col">Testimonial</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Designation</th>
                                            <th scope="col">Country/Company</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($testimonial as $item => $value)
                                            <tr>
                                                {{-- <td>{!! $item + 1 ?? '' !!}</td> --}}
                                                <td>
                                                    @php
                                                        $description = Str::limit($value->description, 220, '...');
                                                        echo $description;
                                                    @endphp
                                                </td>
                                                <td>{!! $value->name ?? '' !!}</td>
                                                <td>{!! $value->designation ?? '' !!}</td>
                                                <td>{!! $value->country ?? '' !!}</td>

                                                <td>
                                                    <a href="admin/testimonials/delete/{{ $value->id }}"
                                                        class="btn btn-sm btn-danger">Delete</button>
                                                        <br>

                                                        <a style="margin-top:10%"
                                                            href="admin/testimonials/view/edit/{{ $value->id }}"
                                                            class="btn btn-sm btn-success">Edit</a>

                                                        <br>
                                                        @if ($value->status == 1)
                                                            <a style="margin-top:10%"
                                                                href="admin/testimonials/deactivate/{{ $value->id }}"
                                                                class="btn btn-sm btn-danger">Deactive</a>
                                                        @else
                                                            <a style="margin-top:10%"
                                                                href="admin/testimonials/activate/{{ $value->id }}"
                                                                class="btn btn-sm btn-success">Active</a>
                                                        @endif
                                                </td>

                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                            </div>

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
    {{-- <script>
        $(document).ready(function() {
            var hash = window.location.hash;
            if (hash) {
                $('.nav-link[href="' + hash + '"]').tab('show');
            } else {
                $('.nav-link[href="#{{ $activeTab }}"]').tab('show');
            }

            $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
                window.location.hash = e.target.hash;
            });
        });
    </script> --}}
@endsection
