<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('rooms/css/register.css')}}"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
    <body>

  <div id="content-wrapper" class="d-flex flex-column">

   <!-- Main Content -->
   <div id="content">

   <div class="form-registercontainer">
   <div class="register-container">
       <form class="register-form" action="{{ route('register.post') }}" method="POST">
        @csrf
           <h1>Register</h1>
           <div class="register-form">
           <input type="text" class="label" name="name" id="name" placeholder="Name" required>
           @if ($errors->has('name'))
           <span class="text-danger">{{ $errors->first('name') }}</span>
           @endif
           </div>
           <div class="register-form">
           <input type="email" class="label" name="email" id="email" placeholder="Email" required>
           @if ($errors->has('email'))
            <span class="text-danger">{{ $errors->first('email') }}</span>
           @endif
           </div>

           <div class="register-form">
            <input type="password" class="label"name="password" id="password" placeholder="Password">
            @if ($errors->has('password'))
            <span class="text-danger">{{ $errors->first('password') }}</span>
             @endif
           </div>
           <div class="register-form">
            <input type="password" class="label"  name="password_confirmation" id="confirm-password" placeholder="Confirm Password">
           </div>
    
           <div class="register-form">
           <button type="submit">Create New Account</button>
           </div>

           <div class="register-link">
            <p>Already have an Account? <a href="/admin/login">Login</a></p>
           </div>
       </form>
     </div>
   </div>
   </div>
  </div>
    </body>
</html>
                      
            