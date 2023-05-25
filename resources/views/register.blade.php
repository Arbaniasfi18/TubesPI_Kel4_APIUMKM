<div class="wrapper">
   <div class="title">
      Register Form
   </div>
   <form action="{{ url('/register/post') }}" method="POST">
      @csrf
      <div class="field">
         <input type="text" name="full_name" value="{{ old('full_name') }}" required>
         <label>Nama Lengkap</label>
      </div>
      @error('full_name')
         <div style="color:red">{{ $message }}</div>
      @enderror
      <div class="field">
         <input type="text" name="email" value="{{ old('email') }}" required>
         <label>Alamat Email</label>
      </div>
      @error('email')
         <div style="color:red">{{ $message }}</div>
      @enderror
      <div class="field">
         <input type="password" name="password" required>
         <label>Password</label>
      </div>
      @error('password')
         <div style="color:red">{{ $message }}</div>
      @enderror
      <div class="field">
         <input type="submit" value="Register">
      </div>
      <div class="signup-link">
         Not a member? <a href="{{ url('/login') }}">Login</a>
      </div>
   </form>
</div>