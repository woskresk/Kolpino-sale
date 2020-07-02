@include('qaz.header')

<div class="container ">
    


    <div class="row">
        @include('qaz.sitebar2')
        
        <div id="content" class="col-sm-9">
            
            <div class="productinfo-tab">
            <h3 class="productblock-title">Мои объявления  <a href="{{route('products.create')}}" ><button  class="btn btn-primary" >Создать объявление</button></a>
            </h3>
            <div class="box">
                <div id="related-slidertab" class="row owl-carousel product-slider">
                   
                    @isset($prod)
                        @foreach ($prod as $prods)
                                
                    <div class="item">
                        <div class="product-thumb transition">
                            <div class="image product-imageblock"> <a href="{{ route('products.show', ['product' => $prods->id]) }}"><img src="{{ asset('/storage/' . $prods->file) }}" alt="iPod Classic" title="iPod Classic" class="img-responsive" /></a>
                                
                            </div>
                            <div class="caption product-detail">
                                <h4 class="product-name">{{$prods->name}}</h4>
                                <p class="price product-price"><a href="{{ route('products.edit', ['product' => $prods->id]) }}" style="cursor: pointer;">Редактировать </a></p>
                                <div class="rating"><a href="{{ route('products.destroy', ['product' => $prods->id]) }}" style="cursor: pointer;"> Удалить</a></div>
                            </div>                 
                            
                        </div>
                    </div>
                    
                    @endforeach
                            @endisset
                    
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@include('qaz.footer')