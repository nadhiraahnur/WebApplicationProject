{{View:: make('title')}}
<html>
<body>
<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <a class="navbar-brand" href="#">
            <img src="/img/navbaricon.png" width="150" height="60" alt="">
        </a>
      
        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li></li>
            <li></li>
            <li><a>
                <form action="userlist" method="post">
                @csrf
                <input value="{{ request()->input('search')}}"
                name="search" type="search" placeholder="Search...">
                <input type="submit" value="search">
                </form>
            </a></li>
            <li></li>
            <li></li>
        </ul>

        <div class="col-md-3 text-end">
            @if(!session()->has('user'))
            <button type="button" class="btn btn-outline-primary"><a href="/login">Log In</a></button>
            @endif
        </div>
    </header>   
</div>


<div class="container py-1 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card bg-light text-dark" style="border-radius: 1rem;">
                <div class="card-body p-5">
                    <div class="mb-md-5 mt-md-4 pb-5">
                                    
                        <h2 class="fw-bold mb-4 text-uppercase text-center">Register Now!</h2>
                        <div class="mb-2">
                        <form action="register" method="post">
                            @csrf <!--security tag: @csrf-->
                                <div class="mb-4">
                                    <label for="exampleInputEmail1" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" name="fullname" id="exampleInputName1">
                                </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email Address</label>
                                <input type="email" class="form-control" name="email" id="exampleInputEmail1" 
                                aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else</div>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Register</button>
                                <!--@if(session()->has('message'))
                                <div class="alert alert-success alert-dismissible">
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button><strong>Success!</strong> 
                                    {{ session()->get('message') }}
                                </div>
                                @endif-->
                                <button type="button" href="/login" class="btn btn-secondary">Cancel</button>
                            </div>
                        </form>
                        </div>  
                    </div>
                </div>  
            </div>
        </div>
    </div>
</div>
</body>
</html>
{{View:: make('footer')}}