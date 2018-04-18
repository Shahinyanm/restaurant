 
   @extends('layouts.admin')
   @section('main')
        <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Basic Tables</h1>
          <p>Basic bootstrap tables</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tables</li>

          <li class="breadcrumb-item active"><a href="#">Slide images</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-11">
           <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Upload slide image</button>
        </div>
        <div class="col-md-1">
           <button  class="btn btn_refresh" id="refresh_slide" >
            <i class="fas fa-sync"></i>
           </button>
         </div>

      </div>
      <br>
      <div class="row">
        <div class="col-md-12">
          <div class="tile" id="slide_tab">
            <h3 class="tile-title">Simple Table</h3>
           
          </div>
        </div>
        
    </main>

   


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="col s12" id="slide-inserting-form" method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="input-field col s12">
                <input id="photo" type="file"  name="photo"  >
                <!-- <label for="photo">Photo</label> -->
                </div>
            </div>
          </div>
      {{ csrf_field() }}
          </form>
          <button class="btn" id="send_slide_image" data-dismiss="modal">Upload</button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>
<input type="hidden" id="base" value="{{URL::to('/')}}">
    <!-- Essential javascripts for application to work-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="{{URL::asset('js/js/main.js')}}"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="{{URL::asset('js/js/plugins/pace.min.js')}}"></script>
    <!-- Page specific javascripts-->
    <script src="{{URL::asset('js/dashboard/table_basic.js')}}"></script>
    <!-- Google analytics script-->
 <!--    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script> -->

    @endsection
