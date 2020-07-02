<div id="column-left" class="col-sm-3 hidden-xs column-left">
    <div class="column-block">
        <div class="columnblock-title">Категории</div>
        <div class="category_block">
            <ul class="box-category treeview-list treeview">
            
                <li><a href="{{ route('take.category', ['fashion']) }}"  >Красота</a> </li>
                <li><a href="{{ route('take.category', ['helth']) }}"  >Здоровье</a> </li>
                <li><a href="{{ route('take.category', ['fun']) }}"  >Развлечение</a> </li>
                <li><a href="{{ route('take.category', ['cultur']) }}">Культура</a> </li>
            </ul>
        </div>
    </div>


    <div class="blog">
        <div class="blog-heading">
            <h3>Рекламные ссылки</h3>
        </div>
        <div class="blog-inner">
            <ul id="Latest-blog" class="list-unstyled blog-wrapper">
                <li class="item blog-slider-item">
                    <div class="panel-default">
                        <div class="blog-image"> <a class="blog-imagelink" href="#"><img  src="{{ URL::asset('image/blog/blog_4.jpg') }}" alt="#"></a> </div>
                        <div class="blog-content"> 
                            <a class="blog-name" href="#"><h2>Тест текст Тест текст</h2></a> 
                        </div>
                    </div>
                </li>
                <li class="item blog-slider-item">
                    <div class="panel-default">
                        <div class="blog-image"> <a class="blog-imagelink" href="#"><img  src="{{ URL::asset('image/blog/blog_4.jpg') }}" alt="#"></a> </div>
                        <div class="blog-content"> 
                            <a class="blog-name" href="#"><h2>Nunc rutrum scel potent</h2></a> 
                        </div>
                    </div>
                </li>
                <li class="item blog-slider-item">
                    <div class="panel-default">
                        <div class="blog-image"> <a class="blog-imagelink" href="#"><img src="{{ URL::asset('image/blog/blog_4.jpg') }}" alt="#"></a> </div>
                        <div class="blog-content"> 
                            <a class="blog-name" href="#"><h2>Nunc rutrum scel potent</h2></a> 
                        </div>
                    </div>
                </li>
                <li class="item blog-slider-item">
                    <div class="panel-default">
                        <div class="blog-image"> <a class="blog-imagelink" href="#"><img src="{{ URL::asset('image/blog/blog_4.jpg') }}" alt="#"></a> </div>
                        <div class="blog-content"> 
                            <a class="blog-name" href="#"><h2>Nunc rutrum scel potent</h2></a> 
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>