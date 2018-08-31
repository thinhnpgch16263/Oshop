<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
</head>
<body>

    <div class="container">
       <div class="row justify-content-center">
           <div class="col-md-6">
               <div class="card">
                   <header class="card-header">
                       <a href="login" class="float-right btn btn-outline-primary mt-1">Login</a>
                       <h4 class="card-title mt-2">Sign Up</h4>
                   </header>
                   <article class="card-body">
                       <form action="{{route('postregister')}}" method="post" class="form-horizontal">
                           <input type="hidden" name="_token" value="{{csrf_token()}}">


                           <div class="form-group">
                               <label for="name">Your Name</label>
                               <input type="text" id="name" name="name" required="required" class="form-control">
                           </div>
                           <div class="form-group">
                               <label for="name">Email</label>
                               <input type="email" id="email" name="email" required="required" class="form-control">
                           </div>
                           <div class="form-group">
                               <label for="name">Password</label>
                               <input type="text" id="password" name="password" required="required" class="form-control">
                           </div>
                           <div class="form-group" style="padding-top: 2%">
                               <div class="controls">
                                   <input type="submit" name="submit" value="Register"
                                          style="width: 100%; height: 40px; background-color: #1d68a7; border: 0">
                               </div>
                           </div>
                       </form>
                   </article>
                   <div class="border-top card-body text-center">Have an account? <a href="login">Login</a></div>
               </div>

           </div>
       </div>
    </div>


</body>
</html>