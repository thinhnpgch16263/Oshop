<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
<center>
    <form action="{{route('addproduct')}}" method="post" name="addproduct" id="addproduct"
          enctype="multipart/form-data" class="form-horizontal" style="width: 45%">
        <input type="hidden" name="_token" value="{{csrf_token()}}">

        <div id="legend">
            <legend class="">Add Product</legend>
        </div>

        <div class="control-group">
            <label class="control-label" for="proname">Product Name</label>
            <div class="controls">
                <input type="text" id="proname" name="proname">
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="proname">Product Price</label>
            <div class="controls">
                <input type="text" id="price" name="price">
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="cateid">Select Category</label>
            <div class="controls">
                <select class="form-control" name="cateid">
                    @foreach( $data as $value )
                        <option value="{{$value->cateid}}">{{$value->catename}}</option>
                        @endforeach
                </select>
            </div>
        </div>

        <divclass="control-group">
            <label class="control-label" for="img">Input IMG </label>
            <div class="controls">
                <td><input type="file" name="img" id="img"></td>
            </div>
        </div>

        <div class="control-group">
            <div class="controls">
                <input type="submit" name="submitproduct" value="Add Product">
            </div>
        </div>
    </form>
</center>
</body>
</html>