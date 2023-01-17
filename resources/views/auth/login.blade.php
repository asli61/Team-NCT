<div class="container">
<div class="email-styling">
<input id="email" type="email" name="email" required autocomplete="email">
</div>
<div class="password-styling">
<input id="password" type="password"  name="password" required autocomplete="current-password">
</div>
<div class="remember-styling">
<input id="remember" type="checkbox" name="remember"  {{ old('remember') ? 'checked' : '' }}>
</div>
<button type="submit" class="login-button">
    {{ __('Login') }}
</button>
<div class="forgot-password">
@if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
</div>
</div>