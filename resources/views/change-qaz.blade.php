@include('qaz.header')

<div class="container ">
    <ul class="breadcrumb">
        <li><a href="index.html"><i class="fa fa-home"></i></a></li>
        <li><a href="register.html">Register</a></li>
    </ul>


    <div class="row">
        @include('qaz.sitebar2')
        
        <div class="col-sm-9" id="content">
            <h1>Создать объявление</h1>
            @isset($path4)
            <h3 style="color:crimson"> {{ $path4 }} </h3>
            @endisset
            <form action="{{ route('products.update', $item->id) }}" method="post" enctype="multipart/form-data">
                
                {{ csrf_field() }}

                <fieldset id="account">
                    <legend>Введите данные по примеру</legend>
                    <div class="form-group required">
                        <label for="input-firstname" class="col-sm-3 control-label">Название услуги</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="input-firstname" placeholder="Маникюр" value="{{ $item->name ?? 'Noname' }}" name="name">
                        </div>
                    </div>
                    <div class="form-group required">
                        <label for="input-firstname" class="col-sm-3 control-label">Категория товара</label>
                        <div class="col-sm-9">
                            <select type="text" class="form-control" id="input-firstname" name="cat">
                                <option value="fashion">Красота</option>
                                <option value="fun" >Развлечения</option>
                                <option value="helth">Здоровье</option>
                                <option value="cultur">Культура</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group required">
                        <label for="input-email" class="col-sm-3 control-label">Фото (600х800)</label>
                        <div class="col-sm-9">

                            <input type="file" class="form-control" id="input-email" placeholder="123.00" value="ggg" name="foto">
                        </div>
                    </div>
                    <div class="form-group required">
                        <label for="input-email" class="col-sm-3 control-label">Старая цена</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="input-email" placeholder="123.00" value="{{ $item->old_price ?? 'Noname' }}" name="old_price">
                        </div>
                    </div>
                    <div class="form-group required">
                        <label for="input-email" class="col-sm-3 control-label">Цена со скидкой</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="input-email" placeholder="123" value="{{ $item->price ?? 'Noname' }}" name="price">
                        </div>
                    </div>
                    <div class="form-group required">
                        <label for="input-email" class="col-sm-3 control-label">Общая скидка</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="input-email" placeholder="50%" value="{{ $item->sale ?? 'Noname' }}" name="sale">
                        </div>
                    </div>
                    <div class="form-group required">
                        <label for="input-email" class="col-sm-3 control-label">Адрес</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="input-email" placeholder="Колпино, Тверская..." value="{{ $item->address ?? 'Noname' }}" name="address">
                        </div>
                    </div>
                    <div class="form-group required">
                        <label for="input-email" class="col-sm-3 control-label">Телефон</label>
                        <div class="col-sm-9">
                            <input type="tel" class="form-control" id="input-email" placeholder="8 (812) 123-45-67" value="{{ $item->tel ?? 'Noname' }}" name="tel">
                        </div>
                    </div>
                    <div class="form-group required">
                        <label for="input-email" class="col-sm-3 control-label">Описание</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="input-email" placeholder="Салон красоты Венера..." value="{{ $item->desc ?? 'Noname' }}" name="desc">
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