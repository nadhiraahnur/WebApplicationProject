{{View:: make('title')}}
{{View:: make('menu')}}

<div class="container py-2 h-100">
<div class="row d-flex justify-content-center align-items-center h-100">
    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-light text-dark" style="border-radius: 1rem;">
            <div class="card-body p-4">
                <div class="mb-md-5 mt-md-4 pb-5">
                    <h2 class="fw-bold mb-4 text-uppercase text-center">User Edit</h2>

                    <div class="container">

                        <form action="useredit?rid={{ $users->id }}" method="post">
                        @csrf <!--security tag: @csrf-->
                            <div class="mb-3">
                                <label for="exampleInputName1" class="form-label">Full Name</label>
                                <input maxlength="100" value="{{ $users->name }}" type="text" name="fullname" 
                                id="exampleInputName1" class="form-control">
                            </div>

                            <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email Address</label>
                                <input maxlength="100" value="{{ $users->email }}" type="email" name="email" 
                                id="exampleInputEmail1" class="form-control">
                            </div>
                            
                            <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input maxlength="50" value="{{ $users->password }}" type="text" name="password" 
                                id="exampleInputPassword1" class="form-control">
                            </div>

                            <div class="text-center">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <button type="button" onclick="javascript:history.back()" class="btn btn-secondary">Cancel</button>
                            </div>
                        </form> 
                    </div>
                </div>
            </div>      
        </div>
    </div>
</div>
</div>

{{View:: make('footer')}}