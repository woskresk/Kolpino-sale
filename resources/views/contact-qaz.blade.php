@include('qaz.header')

<div class="container ">
    
    <div class="row">
        @include('qaz.sitebar2')
        
        <div class="col-sm-9" id="content">
            <h1>Контакты</h1>
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="row">
                  <div class="col-sm-3 left">
                    <address>
                    <strong>Email:</strong><br>
                    <div class="address"> woskresk@gmail.com</div>
                    <br>
                    <strong>Телефон:</strong><br>
                    8 (921) 877-19-40
                    </address>
                  </div>
                  <!-- Форма связи -->
                  <div class="col-sm-9 rigt">
                      <p>{{ $prodd ?? '' }}</p>
        <form action="{{route('contacts')}}" class="form-horizontal" method="post" enctype="multipart/form-data">
                        @csrf
              <fieldset>
                <div class="form-group required">
                  <label for="input-name" class="col-sm-2 control-label">Имя</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="input-name" value="" name="name">
                  </div>
                </div>
                <div class="form-group required">
                  <label for="input-email" class="col-sm-2 control-label">E-Mail:</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="input-email" value="" name="email">
                  </div>
                </div>
                <div class="form-group required">
                  <label for="input-enquiry" class="col-sm-2 control-label">Тема</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" id="input-enquiry" rows="10" name="text"></textarea>
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
            </div>
            
            
          </div>
</div>
</div>

@include('qaz.footer')