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
                        <h1 class="m-0">Landing</h1>
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


        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h3> Section 1 </h3>
                    </div>
                    <div class="col-md-12">
                        <form action="{{ route('section1.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="hidden" class="form-control" id="pageName" name="pageName"
                                    value="landingPage">
                                <input type="hidden" class="form-control" id="section1" name="section1" value="1">

                                <label class="form-label" for="value1">Hero Video</label>
                                <input type="file" class="@error('value1') is-invalid @enderror form-control"
                                    id="value1" name="value1" accept="video/*" />
                                @error('value1')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Example textarea</label>
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
                    <div class="col-md-12 text-center">
                        <h3> Section 2 </h3>
                    </div>
                    <div class="col-md-12">
                        <form action="{{ route('section2.update') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="hidden" class=" form-control " id="pageName" name="pageName"
                                    value="landinPage">
                                <input type="hidden" class=" form-control " id="section2" name="section2" value="2">

                                <label for="exampleFormControlTextarea1">Section 2 Heading</label>
                                <textarea class="form-control" id="value1" name="value1" rows="3"></textarea>

                            </div>
                            <div class="form-group">

                                <label for="exampleFormControlTextarea1">Section 2 Content</label>
                                <textarea class="form-control" id="value2" name="value2" rows="3"></textarea>

                            </div>
                            <div class="form-group">

                                <label for="exampleFormControlTextarea1">Section2 sub content</label>
                                <textarea class="form-control" id="value3" name="value3" rows="3"></textarea>

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
                    <div class="col-md-12 text-center">
                        <h3> Section3 </h3>
                    </div>
                    <div class="col-md-12">
                        <form action="{{ route('section3.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="hidden" class=" form-control " id="pageName" name="pageName"
                                    value="landinPage">
                                <input type="hidden" class=" form-control " id="section3" name="section3" value="3">


                                <label for="exampleFormControlTextarea1">Section 3 Heading</label>
                                <input type="text" class="form-control" id="value1" name="value1"
                                    rows="3" />

                            </div>

                            <?php 
                            $noOfSection = 4; 
                            $j = 1;

                            for($i= 1 ; $i<=$noOfSection ; $i++){
                                $j = $j+1;                             
                            ?>

                            <div class="form-group">
                                <label class="form-label" for="value1">Section 3 image{{ $i }}</label>
                                <input type="file"
                                    class="@error('value{{ $j }}') is-invalid @enderror form-control"
                                    id="value{{ $j }}" name="value{{ $j }}" accept="image/*" />
                                @error('value{{ $j }}')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <?php 
                                $a = $j+1;   
                                $j = $a;
                            ?>
                            <div class="form-group" style="margin-bottom: 40px">
                                <label for="exampleFormControlTextarea1">Section 3 heading {{ $i }}</label>
                                <input type="text" class="form-control" id="value{{ $a }}"
                                    name="value{{ $a }}" rows="3" />
                            </div>
                            <?php } ?>

                            <button type="submit" class="btn btn-primary">Submit</button>

                        </form>
                    </div>
                </div>
            </div>


            <div class="container-fluid" style="margin-top: 30px">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h3> Section 4 </h3>
                    </div>
                    <div class="col-md-12">
                        <form action="{{ route('section4.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="hidden" class=" form-control " id="pageName" name="pageName"
                                    value="landinPage">
                                <input type="hidden" class=" form-control " id="section4" name="section4" value="4">


                                <label for="exampleFormControlTextarea1">Section 4 Heading</label>
                                <input type="text" class="form-control" id="value1" name="value1"
                                    rows="3" />

                            </div>

                            <?php 
                            $noOfSection = 4; 
                            $j = 1;

                            for($i= 1 ; $i<=$noOfSection ; $i++){
                                $j = $j+1;                             
                            ?>

                            <div class="form-group">
                                <label class="form-label" for="value1">Section 4 PNG{{ $i }}</label>
                                <input type="file"
                                    class="@error('value{{ $j }}') is-invalid @enderror form-control"
                                    id="value{{ $j }}" name="value{{ $j }}" accept="image/*" />
                                @error('value{{ $j }}')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <?php 
                                $a = $j+1;   
                                
                            ?>
                            <div class="form-group" style="margin-bottom: 40px">
                                <label for="exampleFormControlTextarea1">Section 4 heading {{ $i }}</label>
                                <input type="text" class="form-control" id="value{{ $a }}"
                                    name="value{{ $a }}" rows="3" />
                            </div>
                            <?php
                                $z = $a+1;
                                $j = $z;
                            ?>
                            <div class="form-group" style="margin-bottom: 40px">
                                <label for="exampleFormControlTextarea1">Section 4 content {{ $i }}</label>
                                <input type="text" class="form-control" id="value{{ $z }}"
                                    name="value{{ $z }}" rows="3" />
                            </div>
                            <?php } ?>

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
