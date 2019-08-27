<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Video</title>
    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
    .center{
        text-align: center;
    }
    .right{
        text-align: right;
    }
    .paddingtop{
        padding-top: 50px;
    }
    .has-error
    {
     border-color:#cc0000;
     background-color:#ffff99;
    }
    .videoWrapper {
	position: relative;
	padding-bottom: 56.25%; /* 16:9 */
	padding-top: 25px;
	height: 0;
}
.videoWrapper iframe {
	position: absolute;
	top: 0;
	left: 0;
	width: 90%;
	height: 90%;
}
   </style>
</head>
<body>
    <div container>
        <div class="row" style="padding-top:20px;">
            <div class="col-md-3">
                logo
            </div>
            <div class="col-md-6 center">
                <input type="text" value="timf kieems">
            </div>
            <div class="col-md-3">
                ddangw nhap
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row paddingtop">
            <div class="col-md-7 right">
                <div class="videoWrapper">
                    <iframe width="560" height="349" src="https://www.youtube.com/embed/{{substr($videos->link,-11)}}">
                    </iframe>
                </div>
            </div>
            <div class="col-md-5">

                <div class="panel panel-default">
                    <div class="panel-heading"><b>Video khác</b></div>
                    <div class="panel-body">

                        <!-- item -->
                        @foreach($videoall as $vda)
                        <div class="row">
                            <div class="col-md-7">
                            
                <div class="videoWrapper">
                    <iframe width="560" height="349" src="https://www.youtube.com/embed/{{substr($vda->link,-11)}}">
                    </iframe>
                </div>
                    
                            </div>
                            <div class="col-md-5">
                            <a href="{{$vda->id}}"><b>{{ $vda->title }}</b></a>
                                <p style="padding: 10px;">{{ $vda->description }}</p>
                                <div class="break"></div>
                            </div>
                        </div>
                        <hr>
                        @endforeach
                        <!-- end item -->
                    </div>
                </div>
        </div>
    </div>
</body>
</html>