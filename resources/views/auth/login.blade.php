<!-- it should be noted that "loginboxmarin" is just a temporary solution to the boxes not aligning and the whole styling should be transferred to 
a css file of its own. -->
<style>
.container{
    box-sizing: content-box;
    margin-top: 5px;
    justify-content: center;
}
</style>
<div class="container">
<form>
    <div class="email-styling">
        <label for="email">{{ __('Email Address') }}</label>
        <div class="loginboxmargin">
            <input id="email" type="email" name="email" required autocomplete="email">
        </div>
    </div>

    <div class="password-styling">
        <label for="password">{{ __('Password') }}</label>
        <div class="loginboxmargin">
            <input id="password" type="password"  name="password" required autocomplete="current-password">
        </div>
    </div>

    <div class="remember-styling">
        <input id="remember" type="checkbox" name="remember"  {{ old('remember') ? 'checked' : '' }}>
        <label class="form-check-label" for="remember">
            {{ __('Remember Me') }}
        </label>
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
</form>
</div>