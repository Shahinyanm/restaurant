<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel</title>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
<div id="app"></div>
<div id="a">
    <input v-model="message" type="text">
    <h1>@{{message}}</h1>
</div>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src=" {{URL::asset('js/cufon-yui.js')}}"></script>
<script src=" {{URL::asset('js/ChunkFive_400.font.js')}} "></script>
<script src=" {{URL::asset('js/jquery.easing.1.3.js')}}"></script>
<script src="{{URL::asset('js/script.js')}}"></script>
<script src=" {{URL::asset('js/index.js')}} "></script>
<script src=" {{URL::asset('js/cart.js')}} "></script>
<script src=" {{URL::asset('js/app.js')}} "></script>
<script type="text/javascript">
    Cufon.replace('h1',{ textShadow: '1px 1px #000'});
    Cufon.replace('h2',{ textShadow: '1px 1px #000'});
    Cufon.replace('.footer',{ textShadow: '1px 1px #000'});
    Cufon.replace('.pxs_loading',{ textShadow: '1px 1px #000'});
</script>
<script type="text/javascript">
    var app = new Vue({
        el:'#a',

        data:{
            message:"Hello",
        }
    });
</script>
<script> 
var url = '{{ URL::asset('uploads/products/') }}';
</script>

</html>