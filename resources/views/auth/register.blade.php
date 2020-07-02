




@include('qaz.header')

<!-- Основной контейнер -->
<div class="container">

     <!-- Основная строка -->
  <div class="row">
    @include('qaz.sitebar2')

    <!-- Правая часть -->
    <div class="col-sm-9" id="content">
        <h1>Регистрация</h1>


<form class="form-horizontal" method="POST" action="{{ route('register') }}">
    @csrf
            <fieldset id="account">
                <legend>Введите данные</legend>
                <div class="form-group required">
                    <label for="input-firstname" class="col-sm-2 control-label">Имя</label>
                    <div class="col-sm-10">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                </div>
                <div class="form-group required">
                    <label for="input-email" class="col-sm-2 control-label">E-Mail</label>
                    <div class="col-sm-10">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>Пароль</legend>
                <div class="form-group required">
                    <label for="input-password" class="col-sm-2 control-label">Пароль</label>
                    <div class="col-sm-10">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                </div>
                <div class="form-group required">
                    <label for="input-confirm" class="col-sm-2 control-label">Повторите пароль</label>
                    <div class="col-sm-10">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>
            </fieldset>
            

            <div class="buttons">
                <div class="pull-right">Нажимая кнопку отправить, я соглашаюсь с <a class="agree" href="#"><b>политикой конфеденциальности </b></a>
                    
                    <input type="submit" class="btn btn-primary" value="Отправить">
                </div>
            </div>
            
        </form>
    </div>
  </div>
</div>

  @include('qaz.footer')