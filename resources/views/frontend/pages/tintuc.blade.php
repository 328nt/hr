@extends('frontend.layout.index')
@section('content')
        <!-- Page Content -->
    <div class="container">
        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-9">

                <!-- Blog Post -->

                <!-- Title -->
                <h1>{{ $tintuc -> TieuDe }}</h1>

                <!-- Author -->
                <p class="lead">
                    by <a href="#">Start Bootstrap</a>
                </p>

                <!-- Preview Image -->
                <img class="img-responsive" src="upload/tintuc/{{ $tintuc->Hinh }}" alt="">

                <!-- Date/Time -->
                <p><span class="glyphicon glyphicon-time"></span> Posted on: {{ $tintuc->created_at }}</p>
                <hr>

                <!-- Post Content -->
                <p class="lead">{!!  $tintuc->NoiDung  !!}</p>

                <hr>

                <!-- Blog Comments -->

                <!-- Comments Form -->
                @if(Auth::check())
                <div class="well">
                    @if(session('msg'))
                    <div class="alert alert-success">
                        {{ session('msg') }}
                    </div>
                    @endif
                    <h4>comment<span class="glyphicon glyphicon-pencil"></span></h4>
                    <form action="comment/{{ $tintuc->id }}" role="form" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <textarea class="form-control" name="content" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">send</button>
                    </form>
                </div>
                
                @endif
                <hr>

                <!-- Posted Comments -->

                <!-- Comment -->
                @foreach($tintuc->comment as $cmt)
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">{{ $cmt->user->name }}
                            <small>{{ $cmt->created_at }}</small>
                        </h4>
                        {{ $cmt->NoiDung }}
                    </div>
                </div>
                @endforeach

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-3">

                <div class="panel panel-default">
                    <div class="panel-heading"><b>Tin liên quan</b></div>
                    <div class="panel-body">

                        <!-- item -->
                        @foreach($tinlienquan as $tlq)
                        <div class="row" style="margin-top: 10px;">
                            <div class="col-md-5">
                                <a href="tintuc/{{ $tlq->id }}/{{ $tlq->TieuDeKhongDau }}.html">
                                    <img class="img-responsive" src="upload/tintuc/{{ $tlq->Hinh }}" alt="">
                                </a>
                            </div>
                            <div class="col-md-7">
                                <a href="#"><b>{{ $tlq->TieuDe }}</b></a>
                            </div>
                            <p style="padding: 10px;">{{ $tlq->TomTat }}</p>
                            <div class="break"></div>
                        </div>
                        @endforeach
                        <!-- end item -->
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading"><b>Tin nổi bật</b></div>
                    <div class="panel-body">

                        <!-- item -->
                        @foreach($tinnoibat as $tnb)
                        <div class="row" style="margin-top: 10px;">
                            <div class="col-md-5">
                                <a href="tintuc/{{ $tnb->id }}/{{ $tnb->TieuDeKhongDau }}.html">
                                    <img class="img-responsive" src="upload/tintuc/{{ $tnb->Hinh }}" alt="">
                                </a>
                            </div>
                            <div class="col-md-7">
                                <a href="#"><b>{{ $tnb->TieuDe }}</b></a>
                            </div>
                            <p style="padding: 10px;">{{ $tnb->TomTat }}</p>
                            <div class="break"></div>
                        </div>
                        @endforeach
                        <!-- end item -->
                </div>
                
            </div>

        </div>
        <!-- /.row -->
    </div>
    <!-- end Page Content -->
@endsection