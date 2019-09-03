@extends('admin.layout.index')
@section('content')
       <!-- Page Content -->
       <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">THÊM VIdeo
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-8" style="padding-bottom:120px">
                    @if(count($errors) > 0)
                        @foreach($errors->all() as $err)
                        <div class="alert alert-danger">
                            {{ $err }}
                        </div>
                        @endforeach
                    @endif

                    @if(session('msg'))
                    <div class="alert alert-success">
                        {{ session('msg') }}
                    </div>
                    @endif
                    <form action="admin/question/store" method="POST"  enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Question</label>
                            <textarea id="demo" class="form-control ckeditor" name="question" rows="3"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-3 form-group">
                                <label>right answer</label>
                                <input class="form-control" name="rightanswer" placeholder="Please Enter Email" />
                            </div>
                            <div class="col-md-3 form-group">
                                <label>wrong answer 1</label>
                                <input class="form-control" name="wrong1" placeholder="Please Enter Email" />
                            </div>
                            <div class="col-md-3 form-group">
                                <label>wrong answer 2</label>
                                <input class="form-control" name="wrong2" placeholder="Please Enter Email" />
                            </div>
                            <div class="col-md-3 form-group">
                                <label>wrong answer 3</label>
                                <input class="form-control" name="wrong3" placeholder="Please Enter Email" />
                            </div>
                        </div>
                        <button type="submit" class="btn btn-default">Thêm video</button>
                        <button type="reset" class="btn btn-default">Reset</button>
                    <form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
@endsection