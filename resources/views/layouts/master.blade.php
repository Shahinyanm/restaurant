<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Tradition</title>
       {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">--}}
        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/app.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/index.css')}}">


    </head>
    <body>
    @include('partials.header')
    @yield('login')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12">
                @include('partials.slide')
            </div>
        </div>
        <div class="content">
   
	@yield('content')  
    
</div>
@include('partials.center')
</div>

    <div id="components-demo">
        <button-counter></button-counter>
    </div>
    <div id="app2">
        <example></example>

    </div>
    <div id="app3">
        <p>Hello</p>
        <example2></example2>

    </div>
    <div id="app1">
    </div>


    <script>
        const url = '{{ URL::asset('uploads/products/') }}';
        const url2 = '{{ URL::asset('uploads/') }}';
    </script>
</body>
    <script src=" {{URL::asset('js/app.js')}}"></script>


    {{--<script src="    https://unpkg.com/webextension-polyfill@0.2.1/dist/browser-polyfill.min.js"></script>--}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src=" {{URL::asset('js/cufon-yui.js')}}"></script>
<script src=" {{URL::asset('js/ChunkFive_400.font.js')}} "></script>
<script src=" {{URL::asset('js/jquery.easing.1.3.js')}}"></script>
<script src="{{URL::asset('js/script.js')}}"></script>
<script src=" {{URL::asset('js/index.js')}} "></script>
<script src=" {{URL::asset('js/cart.js')}} "></script>
    <script src=" {{URL::asset('js/vue/script.js')}}"></script>


<script type="text/javascript">
    {{--const url = '{{ URL::asset('uploads/products/') }}';--}}
    {{--const url2 = '{{ URL::asset('uploads/') }}';--}}
    Cufon.replace('h1',{ textShadow: '1px 1px #000'});
    Cufon.replace('h2',{ textShadow: '1px 1px #000'});
    Cufon.replace('.footer',{ textShadow: '1px 1px #000'});
    Cufon.replace('.pxs_loading',{ textShadow: '1px 1px #000'});
</script>


    <script>
        // Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('meta[name="csrf-token"]').getAttribute('content');        // import axios from 'axios'
        // Vue.use(VueAxios, axios);

    </script>

</html>