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
    <div id="box">
        <div>Searchin for : @{{query}}</div>
        
        <input type="text" id="inp" v-model.number="query"><br>
        <textarea name="text" id="text" v-model="emailMessage" cols="30" rows="10"></textarea>
   </div>



   <div id="app2">

    <label>
       <input 
       type="checkbox"
       v-model="checkbox"
       value ="1">
       Search
   </label>

   <label>
       <input 
       type="checkbox"
       v-model="checkbox"
       value ="2">
       Beers
   </label>

   <small>selected : @{{checkbox}}</small>
   </div>



    <div id="app3">

    <label>
       <input 
       type="radio"
       v-model="radio"
        value="beers"

        >
       Search
   </label>

   <label>
       <input 
       type="radio"
       v-model="radio"
       value="breweries"
       >
       Beers
   </label>

    </div>

    <div id="app4">
        <select  v-model="select" multiple>
            <option value="beers"> Beers</option>
            <option value="breweries"> Breweries</option>
            <option value="distilleries"> distilleries</option>
            <option value="pubs"> pubs</option>

        </select>
        <small>selected : @{{select}}</small>
    </div>
    <br><br><br><br>
</body>
    <script src=" {{URL::asset('js/app.js')}}"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src=" {{URL::asset('js/cufon-yui.js')}}"></script>
<script src=" {{URL::asset('js/ChunkFive_400.font.js')}} "></script>
<script src=" {{URL::asset('js/jquery.easing.1.3.js')}}"></script>
<script src="{{URL::asset('js/script.js')}}"></script>
<script src=" {{URL::asset('js/index.js')}} "></script>
<script src=" {{URL::asset('js/cart.js')}} "></script>


<script type="text/javascript">
    const url = '{{ URL::asset('uploads/products/') }}';
    Cufon.replace('h1',{ textShadow: '1px 1px #000'});
    Cufon.replace('h2',{ textShadow: '1px 1px #000'});
    Cufon.replace('.footer',{ textShadow: '1px 1px #000'});
    Cufon.replace('.pxs_loading',{ textShadow: '1px 1px #000'});
</script>


    <script>

       var app = new Vue ({
            el:'#box',
            data:{
                appName:'App',
                query:'',
                emailMessage:''
            },
           
       }) 


        var app = new Vue ({
            el:'#app2',
            data:{
                query:false,
                checkbox: []
            },
           
       })


        var app3 = new Vue ({
            el:'#app3',
            data:{
                radio: 'beers'
            },
           
       })



          var app4 = new Vue ({
            el:'#app4',
            data:{
                select: ['beers','pubs']
            },
           
       })



    </script>

<script> 
var url = '{{ URL::asset('uploads/products/') }}';
</script>


</html>