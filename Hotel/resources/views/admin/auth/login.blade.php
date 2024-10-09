<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('rooms/css/login.css')}}"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
    <body>
 @include('admin.inc.message') 

 <div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <div class="form-logincontainer">
            <div class="log-container">

                <form class="login-form" action="{{ route('login.post') }}" method="POST">
                    @csrf

                    <h1>Login</h1>
                    <div>
                    <input type="email"  name="email" id="email" placeholder="Email" required>
                    @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                    </div>

                    <div>
                    <input type="password"  name="password" id="password" placeholder="Password" required>
                    @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                    </div>



        
                    <button type="submit">Login</button>


        
                    <div class="signup-link">
                        Don't have an account? <a href="/admin/register">Sign Up</a>
                    </div>



                </form>

            </div>

          </div>

        </div>

    </div>


    </body>
</html>


