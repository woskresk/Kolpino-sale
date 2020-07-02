<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="e-commerce site well design with responsive view." />
<meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body>

    {{-- ФОРМА --}}
    <form action="{{ url('/tes') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="text" name="search" placeholder="название">
            <input type="text" name="email" placeholder="название">
            <input type="text" name="password" placeholder="название">
            {{-- <input type="file" name="mes" placeholder="название"> --}}
            {{-- <input type="text" name="price" placeholder="цена"> --}}
            {{-- <select name="mode" id="">
                <option value="1">qaz</option>
                <option value="2">wsx</option>
            </select> --}}
            <button class="btn btn-default" type="submit"></button>
    </form>

{{-- ДАННЫЕ --}}


@isset ($clients)
{{ $clients }}
@endisset
@isset ($zd1)
{{ $zd1 }}
@endisset
@isset ($zd2)
{{ $zd2 }}
@endisset
@isset ($zd3)
{{ $zd3 }}
@endisset
@isset ($wsx)
{{ $wsx[0] }}
{{ $wsx[1] }}
{{ $wsx[2] }}
{{ $wsx[3] }}
{{ $wsx[4] }}
{{ $wsx[5] }}
{{ $wsx[6] }}
@endisset

                        {{-- @isset ($clients)
                            @foreach ($clients as $client)
                                
                            <div class="item">
                                <div class="product-thumb transition"><div class="caption product-detail">
                                        <h4 class="product-name">{{$client->name}}</h4>
                                        <p class="price product-price">&#8381 {{$client->price}}  <span class="price-old">{{$client->old_price}}</span></p>
                                        <div class="rating">Sale: {{$client->sale}}%</div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @endisset              --}}


{{-- КАРТИНККА --}}
@isset ($path) 
    <img src="{{ asset('/storage/'.$path) }}">
@endisset

{{-- {{ $qaz ?? 'sd'}}{{ $qaz1 ?? 'sd'}}{{ $qaz2 ?? 'sd'}} --}}

</body>
</html>

