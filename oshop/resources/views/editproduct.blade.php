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
    <form action="{{route('updateproduct', $data->proid)}}" method="post"
          enctype="multipart/form-data" class="form-horizontal" style="width: 45%">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="hidden" value="{{$data->proid}}">

        <div id="legend">
            <legend class="">Edit Product</legend>
        </div>

        <div class="control-group">
            <label class="control-label" for="proname">Product Name</label>
            <div class="controls">
                <input type="text" id="proname" name="proname" value="{{$data->proname}}">
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="proname">Product Price</label>
            <div class="controls">
                <input type="text" id="price" name="price" value="{{$data->price}}">
            </div>
        </div>

        <div class="control-group">
            <!-- Cate -->
            <label class="control-label"  for="cateid">Select Category</label>
            <div class="controls">
                <select class="form-control" name="cateid" style="">
                    @foreach($cat as $decat)
                        @if($decat->cateid == $data->cateid)
                            <option value="{{$decat->cateid}}" selected="selected">{{$decat->catename}}</option>
                        @endif
                        <option value="{{$decat->cateid}}" >{{$decat->catename}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="control-group">
        <label class="control-label" for="img">Input IMG </label>
        <div class="controls">
            <td><input type="file" name="img" id="img" value="{{$data->img}}"></td>
        </div>
        </div>

        <div class="control-group">
            <div class="controls">
                <input type="submit" name="editproduct" value="Update Product">
            </div>
        </div>
    </form>
</center>
</body>
</html>