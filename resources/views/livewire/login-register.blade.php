
<div class="account-form">

    <div id="close-form" class="fas fa-times"></div>

    <div class="buttons">
       <span class="btn active login-btn">login</span>
       <span class="btn register-btn">register</span>
    </div>

    <x-jet-validation-errors class="mb-4 text-danger" style="font-size: 16px;" />
    {{-- login  --}}
    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif
    <form method="POST" action="{{ route('login') }}" class="login-form active">
        @csrf
       <h3>login now</h3>
       <input type="email" placeholder="enter your email" class="box" name="email" :value="old('email')" required autofocus>
       <input type="password" placeholder="enter your password" class="box" name="password" required autocomplete="current-password">
       <div class="flex">
          <input type="checkbox" name="remember" id="remember-me">
          <label for="remember-me">remember me</label>
          @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}">forgot password?</a>
          @endif
       </div>
       <input type="submit" value="login now" class="btn">
    </form>

    {{-- signup pr register  --}}

    <form class="register-form" method="POST" action="{{ route('register') }}">
        @csrf
       <h3>register now</h3>
       <input type="text" placeholder="enter your full name" class="box" name="name" :value="old('name')" required autofocus autocomplete="name">
       <input type="email" placeholder="enter your email" class="box" name="email" :value="old('email')" required>
       <input type="text" placeholder="enter your phone number" class="box" name="phone" :value="old('phone')" required>
       <input type="password" placeholder="enter your password" class="box" name="password" required autocomplete="new-password">
       <input type="password" placeholder="confirm your password" class="box" name="password_confirmation" required autocomplete="new-password">
       <input type="submit" value="register now" class="btn">
    </form>

 </div>

