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
                    <div class="col-md-12">
                        <form action="{{ route('section.update') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                {{-- <label for="pagename">Page Name</label>
                                <input type="text" class="@error('pagename') is-invalid @enderror form-control"
                                    id="pagename" name="pagename" placeholder="">
                                @error('pagename')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror --}}
                                <label for="formFile" class="form-label">Hero section file input</label>
                                <input class="form-control" type="file" id="formFile" name="value">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control hidden" id="pageSection" name="pageSection"
                                    value="1">
                            </div>
                            <div class="form-group">
                                <input type="text" class=" form-control hidden" id="pageName" name="PageName"
                                    value="landinPage">
                                <label for="exampleFormControlTextarea1">Example textarea</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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
