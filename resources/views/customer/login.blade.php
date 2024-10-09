@extends('customer.layouts.apps')


@section('apps')


 <div class="logfile">


    <div class="custom-file">


     <section class="Form my-5 mx-6 py-5">   
        
        
        <div class="container">



 @include('admin.inc.message') 



            <div class="row g-0 custom-card-group" >


                <div class="col-lg-5">
                    <img src="{{asset('image/2.jpg')}}" class="img-fluid fileimg" alt="">
                </div>


                <div class="col-lg-7 px-5 pt-5 text-center py-5">

                    <h1 class="font-weight-bold py-3">Login</h1>

                    <form class="login-form" action="{{ url('/post-login') }}" method="POST">
                        @csrf


                        <div class="title-row d-flex flex-column ">
                            <div class="offset-1 col-lg-10">
                                <input type="email" placeholder="Email" name="email" class="file-inp">
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                               @endif
                            </div>
                        </div>



                        <div class="title-row">
                            <div class="offset-1 col-lg-10">
                                <input type="password" placeholder="Password" name="password" class="file-inp">
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                 @endif
                            </div>
                        </div>



                        <div class="title-row py-3">
                            <div class="offset-1 col-lg-10">
                                <button type="submit" class="login-btn1 mt-2 mb-4" >Login</button>
                            </div>
                        </div>



                        
                        <a href="#" class="px-5 pt-10 linkbtn">Forgot Password?</a>
                        <p class="mt-0 mb-0 ">Don't have an Account? <a href="/register" class="linkbtn">Register here</a></p>
                    
                    
                    
                    </form>



                </div>

            </div>

        </div>

    </section>

 </div>

</div>


@endsection