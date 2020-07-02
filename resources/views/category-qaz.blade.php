@include('qaz.header')

<div class="container ">
    <ul class="breadcrumb">
        <li><a href="index.html"><i class="fa fa-home"></i></a></li>
        <li><a href="">{{$name ?? ''}}</a></li>
    </ul>


    <div class="row">
        @include('qaz.sitebar2')

        <div id="content" class="col-sm-9">
          

            <div class="category-page-wrapper">

              <div class="col-md-2 text-left sort-wrapper">
                <label class="control-label" for="input-sort">Сортировать:</label>
                <div class="sort-inner">
                    
                  
                  <form action="{{ route('catos', ['name' => $name]) }}" id="myForm" method="post" style="position: relative">
                    @csrf
                  
                <select id="input-sort" class="form-control" name="wjs">
                  <option value="2" {{$zd1 ?? ''}}>Дата (Убывание)</option>
                  <option value="1" {{$zd ?? ''}}>Дата (Возростание)</option>
                  <option value="3" {{$zd2 ?? ''}}>Цена (Возростание)</option>
                  <option value="4" {{$zd3 ?? ''}}>Цена (Убывание)</option>
                </select>
                <button type="submit" style="position: absolute; top: 3px; left: 103%;">Выбрать</button>
              </form>

                </div>
              </div>
            </div>



          <div class="grid-list-wrapper">
            {{-- ВЫВОД ТОВАРОВ В ОПРЕДЕЛЁННОЙ КАТЕГОРИИ --}}
            @isset($prod)
            @foreach ($prod as $prods)

              <div class="product-layout product-grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="product-thumb">
                  <div class="image product-imageblock"><a href="{{ route('products.show', ['product' => $prods->id]) }}"><img src="{{ asset('/storage/' . $prods->file) }}" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                  </div>
                  <div class="caption product-detail">
                    <h4 class="product-name"> <a href="#" title="#">{{$prods->name}}</a> </h4>
                    <p class="price product-price"><span class="price-old">&#8381 {{$prods->old_price}}</span> {{$prods->price}}</p>
                    <div class="rating">Sale: {{$prods->sale}}%</div>
                  </div>
                </div>
              </div>

            @endforeach
            @endisset



        </div>
            <div class="category-page-wrapper">
              <div class="result-inner">Показанны  {{ $prod->count() }} из {{ $prod->total() }}  ({{ $prod->lastPage() }} страниц)</div>
              <div class="pagination-inner">
                <ul class="pagination">
                  @for ($i = 1; $i <= $count; $i++)
                    
                    <li><a href="{{ $prod->url($i) }}"> {{$i}}</a></li>
                  @endfor
                 
                  {{-- <li><a href="category.html">&gt;</a></li>
                  <li><a href="category.html">&gt;|</a></li> --}}
                </ul>
              </div>
            </div>
          </div>
</div>
</div>

@include('qaz.footer')
