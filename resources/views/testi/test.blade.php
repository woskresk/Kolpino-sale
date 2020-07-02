
<!DOCTYPE html>
<html>
<head>
    <title>Laravel 5.7 Ajax Request example</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>
<body>
    <div class="container">

        <form id="form">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input id="firstname" type="text" name="name" class="form-control" placeholder="Name" required="">
            <input type="password" name="password" class="form-control" placeholder="Password" required="">
            <!-- <button id="button1" class="btn btn-success btn-submit">Submit</button>-->
            <input  type="submit" value="fjfjf">
        </form>

    </div>
</body>
<script type="text/javascript">
// 3/7 - CSRF ЗАЩИТА AJAX ЗАПРОСА
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
// 4/7 - СКРИПТ AJAX ЗАПРОСА
    $(document).ready(function(){ // Запустить ф-wb. послсе полной загрузки документа
      $("#form").submit(function(event){  // При событии SUBMIT (заполнить все input и нажать на submit) выполнить AJAX запрос
        // $("#button").click(function(event){  // Можно получать данные по клику, но тогда поля могут быть запелненны не полностью
         event.preventDefault(); // ф-ци которая отменяет поведение элементов по умолчанию

         var name = $("#firstname").val();  // Получение вводимых в input данных
         var email = $("input[name=password]").val();  // Второй ВАРИАНТ Получение вводимых в input данных
// 5/7 - AJAX запрос
         $.ajax({  
            type:'POST',  // Метод POST
            url:'/ajaxRequest',  // Роут Laravel (в обычном php это адрес страницы где эти данные обработает php )
            data:{name:name, email:email},  // Передать данные можно объектом (они автоматически будут преобразованны в get запрос) JS или Get запросом с параметрами (пример one=1&two=2&three=3)
            //data:'name='+name+'&email='+email,  // АЛЬТЕРНАТИВА
            success:function(data){  // (При успехе) Ф-ция исполняется с объектом data в качестве ПЕРВОГО параметра
               alert(data.msg+data.msgs);
            },
            error: function () { // Эта ф-ция будет выполненна при ошибке сервера
               alert("Нет ответа сервера");
            }
         });
      });
   });

</script>
</html>

