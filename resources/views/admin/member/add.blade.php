@extends('admin.layout.index')
@section('content')
       <!-- Page Content -->
       <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">THÊM NHÂN VIÊN
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
                    <form action="admin/member/add" method="POST"  enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Tên đầy đủ</label>
                            <input class="form-control" name="fullname" placeholder="Please Enter Name" />
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" name="email" placeholder="Please Enter Email" />
                        </div>
                        <div class="form-group">
                            <label>CHỨC VỤ</label>
                            <input class="form-control" name="position" placeholder="Please Enter Email" />
                        </div>
                        <div class="form-group">
                            <label>Di động</label>
                            <input class="form-control" name="phone" placeholder="Please Enter Password" />
                        </div>
                        <div class="form-group">
                            <label> NGÀY VÀO CÔNG TY</label>
                            <input class="form-control" name="dayin" placeholder="Please Enter Password" />
                        </div>
                        <div class="form-group">
                            <label>Phòng ban</label>
                            <select name="department" class="form-control" >
                                <option value="0">HR - 2440</option>
                                <option value="1">Admin - 2442</option>
                                <option value="2">CC - 2443</option>
                                <option value="3">IT - 2444</option>
                                <option value="4">KMC - 2445</option>
                                <option value="5">Makerting - 2446</option>
                                <option value="6">Event - 2447</option>
                                <option value="7">Academic - 2448</option>
                                <option value="8">EC - 2449</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Ảnh</label>
                            <input  class="form-control" type="file" name="image" />
                        </div>
                        <button type="submit" class="btn btn-default">member Add</button>
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