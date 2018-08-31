<!DOCTYPE html>
<html>
<head>
    <title>Product</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        @foreach($product as $pro)
        <div class="col-md-3">
                <div class="thumbnail">
                    <img src="uploads/{{$pro->img}}" max-width="250" max-height="250">
                    <div class="caption">
                        <center>
                            <h4>{{$pro->proname}}</h4>
                            <p>{{$pro->price}} $</p>
                        </center>
                        <a href="{{route('edit',$pro['proid'])}}" class="btn btn-primary" style="width: 100%">Edit</a>
                    </div>
                </div>
        </div>
        @endforeach
    </div>
</div>
</body>
</html>