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
                <div class="col-lg-7" style="padding-bottom:120px">
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
                <form action="admin/news/update/{{$news->id}}" method="POST"  enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Danh mục</label>
                            <select class="form-control" name="idcatalog" id="">
                                @foreach ($catalogs as $catalog)
                                    <option @if ($news->idcatalog == $catalog->id)
                                        {{"selected"}}
                                    @endif value="{{$catalog->id}}">{{$catalog->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tiêu đề</label>
                            <input class="form-control" name="title" value="{{$news->title}}" placeholder="Please Enter Name" />
                        </div>
                        <div class="form-group">
                            <label>Tóm tắt</label>
                            <input class="form-control" name="description"  value="{{$news->description}}" placeholder="Please Enter Email" />
                        </div>
                        <div class="form-group">
                            <label>Nội dung</label>
                            <input class="form-control" name="content" value="{{$news->content}}" placeholder="Please Enter Email" />
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                        <p><img src="upload/news/{{$news->image}}" width="400px" alt=""></p>
                        <input type="file" name="image">
                        </div>
                        <button type="submit" class="btn btn-default">Thêm news</button>
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