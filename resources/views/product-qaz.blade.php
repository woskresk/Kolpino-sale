@include('qaz.header')

<div class="container">
    <ul class="breadcrumb">
        <li><a href="/home"><i class="fa fa-home"></i></a></li>
    <li><a href="/home">{{ $item->category ?? 'Nocategory'}}</a></li>
        <li>{{ $item->name ?? 'Noname' }} </li>
    </ul>
    



    
    <div class="row">
        @include('qaz.sitebar')

        <div id="content" class="col-sm-9">
            <div class="row">
                <div class="col-sm-6">
                    <ul class="thumbnails">
                        <li><span class="thumbnail fancybox"><img src="{{ asset('/storage/' . $item->file) }}" title="iPod Classic" alt="iPod Classic" /></span>
                        </li>
                    </ul>
                </div>
                
                <div class="col-sm-6">
                    <h1 class="productpage-title">{{ $item->name ?? 'Noname' }}</h1>
                    <ul class="list-unstyled productinfo-details-top">
                        <li>
                            <h2 class="productpage-price"> {{ $item->price ?? 'Noprice' }} &#8381 <span class="price-old">{{ $item->old_price ?? 'Noold_price' }}</span></h2>
                        </li>
                        <li><span class="productinfo-tax">Скидка: {{ $item->sale ?? 'Nosale' }}%</span></li>
                    </ul>
                    <hr>
                    <ul class="list-unstyled product_info">
                        <li>
                            <label>До конца акции:</label>
                            <span>{{ $time ?? 'Notime' }}дней</span></li>
                        <li>
                            <label>Адрес:</label>
                            <span>{{ $item->address ?? 'Noaddress' }}</span></li>
                        <li>
                            <label>Телефон:</label>
                            <span>{{ $item->tel ?? 'Notel' }}</span></li>
                    </ul>
                    <hr>
                    <p class="product-desc">{{ $item->desc ?? 'Nodesc' }}</p>
                </div>
            </div>
                            <div class="productinfo-tab">
                                <h3 class="productblock-title">Рекомендуем также</h3>
                                <div class="box">
                                    <div id="related-slidertab" class="row owl-carousel product-slider">
                                        @isset($prod)
                                        @foreach ($prod as $prods)
                                            
                                        <div class="item">
                                            <div class="product-thumb transition">
                                                <div class="image product-imageblock"> <a href="{{ route('products.show', ['product' => $prods->id]) }}"><img src="{{ asset('/storage/' . $prods->file) }}" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a></div>
                                                <div class="caption product-detail">
                                                    <h4 class="product-name">{{$prods->name}}</h4>
                                                    <p class="price product-price">&#8381 {{$prods->old_price}}  <span class="price-old">{{$prods->price}}</span></p>
                                                    <div class="rating">Sale: {{$prods->sale}}%</div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        @endisset
                                        
                                    </div>
                                </div>
                            </div>
                            
                            





        {{-- <div class="customtab">
                            <h3 class="productblock-title">Вы просматривали</h3>
                <div class="box">
                    <div id="feature-slider" class="row owl-carousel product-slider">

                        @isset($prod)
                            @foreach ($prod as $prods)
                        <div class="item product-slider-item">
                            <div class="product-thumb transition">
                                <div class="image product-imageblock">  <a href="{{ route('products.show', ['product' => $prods->id]) }}"><img src="{{ asset('/storage/' . $prods->file) }}" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a></div>
                                <div class="caption product-detail">
                                    <h4 class="product-name">{{ $prods->name }}</h4>
                                    <p class="price product-price">&#8381 {{ $prods->price }} <span class="price-old"> {{ $prods->old_price }}</span></p>
                                    <div class="rating">Sale: {{ $prods->sale }}%</div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endisset

                    </div>
                </div>
            </div> --}}


                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>

@include('qaz.footer')