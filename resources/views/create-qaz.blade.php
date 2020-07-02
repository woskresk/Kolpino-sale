@include('qaz.header')

<div class="container ">
    
    <div class="row">
        @include('qaz.sitebar2')
        
        <div class="col-sm-9" id="content">
            <h1>Создать объявление</h1>
            @isset($path4)
            <h3 style="color:crimson"> {{ $path4 }} </h3>
            @endisset

            <form class="form-horizontal" method="post" action="{{ route('products.store') }}" enctype="multipart/form-data">
                    @csrf
                <fieldset id="account">
                    <legend>Введите данные по примеру</legend>
                    <div class="form-group required">
                        <label for="input-firstname" class="col-sm-3 control-label">Название услуги</label>
                        <div class="col-sm-9">
                            <input  type="text" class="form-control @error('name') is-invalid @enderror"   placeholder="Маникюр" value="" name="name">
                                @error('name')
                                    
                                        <strong>{{ $message }}</strong>
                                    
                                @enderror
                        </div>
                    </div>
                    <div class="form-group required">
                        <label for="input-firstname" class="col-sm-3 control-label">Выберите категорию</label>
                        <div class="col-sm-9">
                            <select type="text" class="form-control" id="input-firstname" placeholder="Красота" value="" name="cat">
                                <option value="fashion">Красота</option>
                                <option value="fun">Развлечения</option>
                                <option value="helth">Здоровье</option>
                                <option value="cultur">Культура</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group required">
                        <label for="input-email" class="col-sm-3 control-label">Фото (600х800)</label>
                        <div class="col-sm-9">
                            <input  type="file" class="form-control @error('foto') is-invalid @enderror"  name="foto">
                                @error('foto')
                                    
                                        <strong>{{ $message }}</strong>
                                    
                                @enderror
                        </div>
                    </div>
                    <div class="form-group required">
                        <label for="input-email" class="col-sm-3 control-label">Старая цена (руб)</label>
                        <div class="col-sm-9">
                            <input  type="number" class="form-control @error('old_price') is-invalid @enderror"   placeholder="123" name="old_price">
                                @error('old_price')
                                    
                                        <strong>{{ $message }}</strong>
                                    
                                @enderror
                        </div>
                    </div>
                    <div class="form-group required">
                        <label for="input-email" class="col-sm-3 control-label">Цена со скидкой (руб)</label>
                        <div class="col-sm-9">
                            <input  type="number" class="form-control @error('price') is-invalid @enderror"   placeholder="123" name="price">
                                @error('price')
                                    
                                        <strong>{{ $message }}</strong>
                                    
                                @enderror
                        </div>
                    </div>
                    <div class="form-group required">
                        <label for="input-email" class="col-sm-3 control-label">Общая скидка (%)</label>
                        <div class="col-sm-9">
                            <input  type="number" class="form-control @error('sale') is-invalid @enderror" placeholder="50" name="sale">
                                @error('sale')
                                    
                                        <strong>{{ $message }}</strong>
                                    
                                @enderror
                        </div>
                    </div>
                    <div class="form-group required">
                        <label for="input-email" class="col-sm-3 control-label">Адрес</label>
                        <div class="col-sm-9">
                            <input  type="text" class="form-control @error('address') is-invalid @enderror" placeholder="Колпино..." name="address">
                                @error('address')
                                    
                                        <strong>{{ $message }}</strong>
                                    
                                @enderror
                        </div>
                    </div>
                    <div class="form-group required">
                        <label for="input-email" class="col-sm-3 control-label">Телефон</label>
                        <div class="col-sm-9">
                            <input  type="tel" class="form-control @error('tel') is-invalid @enderror" placeholder="8 (812) 123-45-67" name="tel">
                                @error('tel')
                                    
                                        <strong>{{ $message }}</strong>
                                    
                                @enderror
                        </div>
                    </div>
                    <div class="form-group required">
                        <label for="input-email" class="col-sm-3 control-label">Описание</label>
                        <div class="col-sm-9">
                            <input  type="tel" class="form-control @error('desc') is-invalid @enderror" placeholder="Салон красоты Венера..." name="desc">
                                @error('desc')
                                    
                                        <strong>{{ $message }}</strong>
                                    
                                @enderror
                        </div>
                    </div>
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