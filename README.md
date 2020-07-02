## Laravel 6.12 версия ##

** Laravel - Доска объявлений **
* Приложение- доска объявлений Колпино можно посмотреть по адресу <a href="http://kolpino-sale.ru/">kolpino-sale.ru</a>

### Установка (медленный путь) ###

* введите `git clone https://github.com/woskresk/Laravel_Kolpino-sale.ru.git projectname`, чтобы клонировать репозиторий 
* введите `cd projectname`
* введите `composer install`, чтобы установить все зависимости
* введите `composer update`
* скопировать * .env.example * в * .env *
* введите `php artisan key: генерируйте`, чтобы восстановить безопасный ключ
* если вы используете MySQL в * .env * файле:
   * установить DB_CONNECTION
   * установить DB_DATABASE
   * установить DB_USERNAME
   * установить DB_PASSWORD
* если вы используете sqlite:
   * введите `touch database / database.sqlite`, чтобы создать файл
* введите `php artisan migrate --seed` для создания и заполнения таблиц
* edit * .env * для настройки электронной почты
* опционально введите `npm install` для управления активами

### Включают ###

* [Bootstrap] (http://getbootstrap.com) для плагинов CSS и jQuery
* [Font Awesome] (http://fortawesome.github.io/Font-Awesome) для красивых иконок
* [Highlight.js] (https://highlightjs.org) для выделения кода
* [Startbootstrap] (http://startbootstrap.com) для бесплатных шаблонов
* [CKEditor] (http://ckeditor.com) отличный редактор

### Характеристики ###

* Домашняя страница
* Пользовательские страницы ошибок 403, 404 и 503
* Аутентификация (регистрация, вход в систему, выход из системы, сброс пароля, подтверждение почты, газ)
* Поиск в сообщениях
* Свяжитесь с нами

### Лицензия ###

Этот проект Laravel - программное обеспечение с открытым исходным кодом, лицензированное по лицензии MIT.
