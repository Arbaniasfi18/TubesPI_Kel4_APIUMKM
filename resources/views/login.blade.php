<div class="wrapper">
   <div class="title">
      Login Form
   </div>

   @if(\Session::has('success'))
      <div class="alert alert-success">
            <h6>{!! \Session::get('success') !!}</h6>
      </div>
   @endif
   @if(\Session::has('error'))
      <div class="alert alert-danger">
            <h6>{!! \Session::get('error') !!}</h6>
      </div>
   @endif
   
   <form action="{{ url('/login/post') }}" method="POST">
      @csrf
      <div class="field">
         <input type="text" name="email" value="{{ old('email') }}" required>
         <label>Email Address</label>
      </div>
      <div class="field">
         <input type="password" name="password" required>
         <label>Password</label>
      </div>
      <div class="field">
         <input type="submit" value="Login">
      </div>
      <div class="signup-link">
         Not a member? <a href="{{ url('/register') }}">Signup now</a>
      </div>
   </form>
</div>