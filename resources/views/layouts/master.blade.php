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
        <ul>
            <li v-for="name in names" v-text="name"></li>
        </ul>
        <ul>
            <li> @{{ show }} </li>
        </ul>
        <input type="text" id="inp">
        <button v-on:click="addName">Add</button>
    </div>
    <br><br><br><br>
</body>
    {{--<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>--}}
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
<<<<<<< HEAD

=======
<script src=" {{URL::asset('js/app.js')}} "></script>
>>>>>>> 7d6ab643f14bb808135e8a8b6bf11045396fd0dd
<script type="text/javascript">
    const url = '{{ URL::asset('uploads/products/') }}';
    Cufon.replace('h1',{ textShadow: '1px 1px #000'});
    Cufon.replace('h2',{ textShadow: '1px 1px #000'});
    Cufon.replace('.footer',{ textShadow: '1px 1px #000'});
    Cufon.replace('.pxs_loading',{ textShadow: '1px 1px #000'});
</script>
<<<<<<< HEAD

    <script>

       var app =  new Vue({
           el: '#box',
           data: {
               names: ["ELen", "XOren", "ANdrey", "Styopa"]
           },
           methods: {
               addName: function (){
                   let a =   document.querySelector('#inp');
                   app.names.push(a.value);
                   a.value='';
               }
          },
           computed:{
               show: function(){
                   let value = document.querySelector('#inp').value;
                   return this.names +' '+ value;
               },
           },

           // mounted() {
           //     document.querySelector('#add').addEventListener('click', () => {
           //         let name = document.querySelector('#inp');
           //         app.names.push(name.value);
           //
           //         name.value = '';
           //     })
           // }
       })






    </script>
=======
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

>>>>>>> 7d6ab643f14bb808135e8a8b6bf11045396fd0dd
</html>