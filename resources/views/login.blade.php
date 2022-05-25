@extends('header')
@section('login')
<head>
</head>
<body>
<div class="container py-1 h-100">
<div class="row d-flex justify-content-center align-items-center h-100">
    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-light text-dark" style="border-radius: 1rem;">
          <div class="card-body p-5">
            <div class="mb-md-5 mt-md-4 pb-5">
                
                <h2 class="fw-bold mb-2 text-uppercase text-center">Sign In</h2>
                <p class="text-dark-50 mb-5 text-center">Please enter your login and password!</p>

                    <form action="login" method="post">
                    @csrf <!--security tag: @csrf-->
                        <div class="form-outline mb-4">
                            <label for="exampleInputEmail1" class="form-label">Email Address</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1">
                        </div>

                        <div class="form-outline mb-4">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                        </div>

                        <div class="text-center">
                        <p>Not a member? <a href="/register">Register</a></p>
                        <button type="submit" class="btn btn-primary btn-block mb-4">Sign In</button>
                        </div>  
                    </form> 
                </div>  
            </div>
        </div>
    </div>
</div>
</div>
</body>
@endsection