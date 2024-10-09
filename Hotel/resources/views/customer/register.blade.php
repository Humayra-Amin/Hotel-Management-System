@extends('customer.layouts.apps')



@section('apps')



    <div class="group-file">
    <section class="Form my-3 mx-6 py-5">        
        <div class="container">
            <div class="row g-0 my-3 form-card-group">
                
                
                
                
                <div class="col-lg-5">
                    <img src="{{asset('image/9.jpg')}}" class="img-fluid imagefile" alt="">
                </div>



                <div class="col-lg-7 px-3 pt-3 text-center py-5">
                    <h1 class="font-weight-bold py-3">Register</h1>



                    
                    <form class="login-form" action="{{ url('/post-register') }}" method="POST">
                        @csrf




                        <div class="title-row mt-3">
                            <div class="offset-1 col-lg-10">
                                <input type="name" placeholder="Username" name="name" class="inp px-3 my-3">
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                        </div>



                        
                        <div class="title-row">
                          <div class="offset-1 col-lg-10">
                              <input type="email" placeholder="Email" name="email" class="inp px-3">
                              @if ($errors->has('email'))
                              <span class="text-danger">{{ $errors->first('email') }}</span>
                             @endif
                          </div>
                        </div>



                        
                          <div class="title-row d-flex flex-column">
                            <div class="offset-1 col-lg-10">
                                <input type="password" placeholder="Password" name="password" class="inp  px-3">
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                 @endif
                            </div>
                       </div>





                          <div class="title-row">
                            <div class="offset-1 col-lg-10">
                                <input type="password" placeholder="Confirm-password" name="password_confirmation" class="inp px-3">
                            </div>
                          </div>





                        <div class="title-row d-flex justify-content-center py-3 ">
                            <button type="submit" class="register-btn1 mt-2 mb-4">Create New Account</button>
                        </div>
                 
                            <div class="login-link">
                             <p>Already have an Account? <a href="/login" class="btnlogin">Login</a></p>
                            </div>
                            
                    
                        </form>



                </div>

            </div>

        </div>

    </section>

</div>
   

@endsection