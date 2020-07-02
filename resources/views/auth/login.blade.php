

@include('qaz.header')

<!-- Основной контейнер -->
<div class="container">

     <!-- Основная строка -->
  <div class="row">
    @include('qaz.sitebar2')

    <!-- Правая часть -->
    <div class="col-sm-9" id="content">
      <div class="row">
        <div class="col-sm-6">
          <div class="well">
                <h2>Форма для входа</h2>
                <form method="POST" action="{{ route('login') }}">
                  @csrf
                  <div class="form-group">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  </div>
                  <div class="form-group">
                     <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                  {{ __('auth.Remember') }}
                              </label><br>
                                <input type="submit" class="btn btn-primary" value="Войти">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                  </div>
                </form>



              </div>
            </div>
          <div class="col-sm-6">
            <div class="well">
              <h2>Регистрация</h2>
              <p>Регистрация на сайте необходима только если Вы хотите разместить своё акционное предложение, в ином случае регистрация не требуется.</p>
              <a class="btn btn-primary" href="{{ route('register') }}">Продолжить</a>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</div>

  @include('qaz.footer')