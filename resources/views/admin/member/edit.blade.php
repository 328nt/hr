@extends('admin.layout.index')
@section('content')
       <!-- Page Content -->
       <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">User
                        <small>edit</small>
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
                    <form action="admin/member/edit/{{ $member->id }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Tên đầy đủ</label>
                            <input class="form-control" name="fullname" placeholder="Please Enter Name" value="{{ $member->fullname }}" />
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" name="email" placeholder="Please Enter Email" value="{{ $member->email }}" />
                        </div>
                        <div class="form-group">
                            <label>CHỨC VỤ</label>
                            <input class="form-control" name="position" placeholder="Please Enter Email" value="{{ $member->position }}" />
                        </div>
                        <div class="form-group">
                            <label>Di động</label>
                            <input class="form-control" name="phone" placeholder="Please Enter Password" value="{{ $member->phone }}" />
                        </div>
                        <div class="form-group">
                            <label> NGÀY VÀO CÔNG TY</label>
                            <input class="form-control" name="dayin" placeholder="Please Enter Password" value="{{ $member->dayin }}" />
                        </div>
                        <div class="form-group">
                            <label>Phòng ban</label>
                            <select name="department" class="form-control" >
                                <option @if( $member->department == 0 )
                                    {{ "selected" }}
                                    @endif value="0">HR - 2440</option>
                                <option @if( $member->department == 1 )
                                    {{ "selected" }}
                                    @endif value="1">Admin - 2442</option>
                                <option @if( $member->department == 2 )
                                    {{ "selected" }}
                                    @endif value="2">CC - 2443</option>
                                <option @if( $member->department == 3 )
                                    {{ "selected" }}
                                    @endif value="3">IT - 2444</option>
                                <option @if( $member->department == 4 )
                                    {{ "selected" }}
                                    @endif value="4">KMC - 2445</option>
                                <option @if( $member->department == 5 )
                                    {{ "selected" }}
                                    @endif value="5">Makerting - 2446</option>
                                <option @if( $member->department == 6 )
                                    {{ "selected" }}
                                    @endif value="6">Event - 2447</option>
                                <option @if( $member->department == 7 )
                                    {{ "selected" }}
                                    @endif value="7">Academic - 2448</option>
                                <option @if( $member->department == 8 )
                                    {{ "selected" }}
                                    @endif value="8">EC - 2449</option>
                            </select>
                        </div>
                        <div><img width="100px" src="upload/member/{{ $member->image }}" /></div>
                        <div class="form-group">
                            <label>Ảnh</label>
                            <input type="file" name="image" >
                        </div>
                        <button type="submit" class="btn btn-default">User Edit</button>
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
@section('script')
<script>
    $(document).ready(function(){
        $("#changepassword").change(function(){
            if($(this).is(":checked"))
            {
                $(".password").removeAttr('disabled');
            }
            else
            {
                $(".password").attr('disabled','');
            }
        })
    })
</script>
@endsection