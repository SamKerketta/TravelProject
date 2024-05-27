@extends('admin.layouts.app')

@section('page-content')
@if (\Session::has('error'))
<div class="alert alert-danger">
    <ul>
        <li>{!! \Session::get('error') !!}</li>
    </ul>
</div>
@endif
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">About Us</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Landing</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>


    <!-- section1 -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('about/section1.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="pageName" name="pageName" value="aboutUs">
                            <input type="hidden" class="form-control" id="section1" name="section1" value="1">

                            <label class="form-label" for="value1">Section 1 Image</label>
                            <input type="file" class="form-control" id="value1" name="value1" accept="video/*" />
            
                        </div>
                        <div class="form-group">

                            <label for="exampleFormControlTextarea1">Section 1 Title</label>
                            <textarea class="form-control" id="value1" name="value1" rows="3"></textarea>

                        </div>
                        <div class="form-group">

                            <label for="exampleFormControlTextarea1">Section 1 Content</label>
                            <textarea class="form-control" id="value2" name="value2" rows="3"></textarea>

                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>


        {{-- section2 --}}
        <div class="container-fluid" style="margin-top: 30px">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('section2.update') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="pageName" name="pageName" value="aboutUs">
                            <input type="hidden" class="form-control" id="section1" name="section1" value="1">
                            
                            <label class="form-label" for="value1">Section 2 Image</label>
                            <input type="file" class="form-control" id="value1" name="value1" accept="image/*" />
                            
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Section 2 Heading 1</label>
                            <textarea class="form-control" id="value1" name="value1" rows="3"></textarea>

                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Section 2 Content 1</label>
                            <textarea class="form-control" id="value2" name="value2" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Section 2 Content 2</label>
                            <textarea class="form-control" id="value2" name="value2" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Section 2 Heading 2</label>
                            <textarea class="form-control" id="value1" name="value1" rows="3"></textarea>

                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Section 2 Content 3</label>
                            <textarea class="form-control" id="value2" name="value2" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Section 2 Content 4</label>
                            <textarea class="form-control" id="value2" name="value2" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>

        {{-- section 3 --}}
        <div class="container-fluid" style="margin-top: 30px">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('section1.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="pageName" name="pageName" value="aboutUs">
                            <input type="hidden" class="form-control" id="section1" name="section1" value="1">
                            <label class="form-label" for="value1">Section 3 Image</label>
                            <input type="file" class=" form-control" id="value1" name="value1" accept="image/*" />
                            
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Section 3 Heading  </label>
                            <textarea class="form-control" id="value1" name="value1" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Section 3 Content 1</label>
                            <textarea class="form-control" id="value2" name="value2" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Section 3 Content 2</label>
                            <textarea class="form-control" id="value2" name="value2" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Section 3 Content 3</label>
                            <textarea class="form-control" id="value2" name="value2" rows="3"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>

                    </form>
                </div>
            </div>
        </div>

        {{-- section 4 --}}
        <div class="container-fluid" style="margin-top: 30px">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('section1.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="pageName" name="pageName" value="aboutUs">
                            <input type="hidden" class="form-control" id="section1" name="section1" value="1">
                            <label class="form-label" for="value1">Section 4 Image 1</label>
                            <input type="file" class=" form-control" id="value1" name="value1" accept="image/*" />
                            
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="value1">Section 4 Image 2</label>
                            <input type="file" class=" form-control" id="value1" name="value1" accept="image/*" />
                           
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Section 4 Heading  </label>
                            <textarea class="form-control" id="value1" name="value1" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Section 4 Content 1</label>
                            <textarea class="form-control" id="value2" name="value2" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Section 4 Content 2</label>
                            <textarea class="form-control" id="value2" name="value2" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Section 4 Content 3</label>
                            <textarea class="form-control" id="value2" name="value2" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Section 4 Content 4</label>
                            <textarea class="form-control" id="value2" name="value2" rows="3"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>

                    </form>
                </div>
            </div>
        </div>

        {{-- section 5 --}}
        <div class="container-fluid" style="margin-top: 30px">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('section1.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="hidden" class=" form-control " id="pageName" name="pageName" value="aboutUs">
                            <input type="hidden" class=" form-control " id="section2" name="section2" value="2">
                            <label for="exampleFormControlTextarea1">Section 5 Title  </label>
                            <textarea class="form-control" id="value1" name="value1" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="value1">Section 5 Image 1</label>
                            <input type="file" class=" form-control" id="value1" name="value1" accept="image/*" />
                            
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Section 5 Heading 1 </label>
                            <textarea class="form-control" id="value1" name="value1" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Section 5 Sub Heading 1 </label>
                            <textarea class="form-control" id="value1" name="value1" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Section 5 Content 1</label>
                            <textarea class="form-control" id="value2" name="value2" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Section 5 Content 2</label>
                            <textarea class="form-control" id="value2" name="value2" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="value1">Section 5 Image 2</label>
                            <input type="file" class=" form-control" id="value1" name="value1" accept="image/*" />
                            
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Section 5 Heading 2 </label>
                            <textarea class="form-control" id="value1" name="value1" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Section 5 Sub Heading 2 </label>
                            <textarea class="form-control" id="value1" name="value1" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Section 5 Content 3</label>
                            <textarea class="form-control" id="value2" name="value2" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Section 5 Content 4</label>
                            <textarea class="form-control" id="value2" name="value2" rows="3"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>

                    </form>
                </div>
            </div>
        </div>

        <!-- /.row (main row) -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
</div>
@endsection