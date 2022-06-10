@extends('headerfooter')

@section('content')
<div class="row  mt-5 m-3 pt-2  justify-content-center">
            <div class="col-md-5 " style="width:450px;">
                <div class="card bg-light">
                    <div class="row justify-content-center">
                    <div class="col-3 " style="text-align:center;">
                        <img src="/img/logo.jpg" height="75" width="75" class="img-fluid  mr-0 p-0 mt-2">
                    </div>
                    
                    </div>
                    <h3 class="card-header text-center">Login</h3>
                    <div class="card-body">
                    @if(session()->has('errormsg'))
                        <div class="alert alert-danger alert-block pt-0 pb-1 pr-0" style=" font-size: small;">
                           <div class="row">
                            <div class="col-sm mt-2 mb-0">{{ session()->get('errormsg') }}</div> 
                                <div class="col-sm m-0 p-0">
                                    <button type="button" class="close m-0 p-0" data-dismiss="alert" style="background-color: rgba(0,0,0,0); float:right; border: none; ">&times;</button>
                                </div>
                           </div>
                        </div> 
                    @endif
                        
                        <form method="POST" action="/postlogin ">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" name="username" placeholder="Username" id="username" class="form-control" required autofocus>
                                @if ($errors->has('username'))
                                <span class="text-danger">{{ $errors->first('username') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <input type="password" name="password" placeholder="Password" id="password" class="form-control" required>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <!-- 
                            <div class="form-group mb-3">
                                <div class="checkbox ">
                                    <label >
                                        <input type="checkbox" name="remember"> Remember
                                    </label>
                                </div>
                            </div> -->
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>

                            <p class="hint-text" style="font-size: smaller; text-align: center; padding-top: 2%;">
                                <a href="#" style="text-decoration: none;">Forgot Password?</a></p><hr>
                            <p style="font-size: smaller; text-align: center;padding-bottom: 1px;">
                                Don't have an account?<a href="/register" style="text-decoration: none;">Create one</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
 
@endsection