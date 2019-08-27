@extends('frontend.layout.index')
    @section('content')
        <!-- Page Content -->
        <div class="container">
            <div class="row">
                @include('frontend.layout.menu')


                <?php
                    function changecolor($str, $search)
                    {
                        return str_replace($search, "<span style='color:red;'>$search</span>", $str);
                    }
                ?>
                <div class="col-md-9 ">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background-color:#337AB7; color:white;">
                            <h4><b>Ket qua: {{ $search }}</b></h4>
                        </div>
                        @foreach($tintuc as $tt)

                        <div class="row-item row">
                            <div class="col-md-3">

                                <a href="tintuc/{{ $tt->id }}/{{ $tt->TieuDeKhongDau }}.html">
                                    <br>
                                    <img width="200px" height="200px" class="img-responsive" src="upload/tintuc/{{ $tt->Hinh }}" alt="">
                                </a>
                            </div>

                            <div class="col-md-9">
                                <h3>{!! changecolor($tt->TieuDe, $search) !!}</h3>
                                <p>{!! changecolor($tt->TomTat, $search) !!}</p>
                                <a class="btn btn-primary" href="tintuc/{{ $tt->id }}/{{ $tt->TieuDeKhongDau }}.html">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
                            </div>
                            <div class="break"></div>
                        </div>
                        @endforeach

                        <!-- Pagination -->
                        {{ $tintuc->links() }}
                        <!-- /.row -->

                    </div>
                </div> 

            </div>

        </div>
        <!-- end Page Content -->
    @endsection