




@include('qaz.header')

<!-- Основной контейнер -->
<div class="container">

     <!-- Основная строка -->
  <div class="row">
    @include('qaz.sitebar2')

    <!-- Правая часть -->
    <div class="col-sm-9" id="content">
        <h1>Сброс пароля</h1>


        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <fieldset id="account">
                <legend>Введите ваш e-mail:</legend>
                
                <div class="form-group required">
                    <label for="input-email" class="col-sm-2 control-label">E-Mail</label>
                    <div class="col-sm-10">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>
            </fieldset>
            
            <button type="submit" class="btn btn-primary">
                {{ __('Сброс пароля') }}
            </button>

            
        </form>
        
    </div>
  </div>
</div>

  @include('qaz.footer')