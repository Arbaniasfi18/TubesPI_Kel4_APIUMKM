<div class="wrapper">
   <div class="title">
      Register Form
   </div>
   <form action="{{ url('/register/post') }}" method="POST">
      @csrf
      <div class="field">
         <input type="text" name="full_name" value="{{ old('full_name') }}" required>
         <label>Full Name</label>
      </div>
      <div class="field">
         <input type="text" name="email" value="{{ old('email') }}" required>
         <label>Email Address</label>
      </div>
      <div class="field">
         <input type="password" name="password" required>
         <label>Password</label>
      </div>
      <div class="content">
         <div class="checkbox">
            <input type="checkbox" id="remember-me">
            <label for="remember-me">Remember me</label>
         </div>
         <div class="pass-link">
            <a href="#">Forgot password?</a>
         </div>
      </div>
      <div class="field">
         {{-- <input type="submit" value="Login"> --}}
         <button type="submit">Register</button>
      </div>
      <div class="signup-link">
         Not a member? <a href="{{ url('/login') }}">Login</a>
      </div>
   </form>
</div>