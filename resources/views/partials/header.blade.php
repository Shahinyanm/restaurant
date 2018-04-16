
    <nav class="navbar  bg-dark navbar-dark head">
      <div class="d-flex justify-content-between col-md-12">
        <div >
          <a class="" href="{{route('store.index')}}"><img style="width:75px;" src=""></a>
          <span  id="info"> Информация  </span>
          <div class="arrow_box"></div>
        </div>
        <div>

          <a class="phone" href="#">+7(8652)505-888, +7(8652)216-146</a>
      
    </nav>
 
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top header">
  
  <ul class="navbar-nav title">
  @if (isset($catalogs))
      @foreach ($catalogs as $value)
        
        <li class="nav-item tittleNames">
          <a class="nav-link menu_dir " data-id ="" href="">{{$value->name}}</a>
        </li>
      @endforeach
    @endif
    </ul> 
      <ul class="navbar-nav  ml-auto sum">
   
        
        <li class="nav-item sum_li"><span id="sum"> sum  </span><input id="ids" type="hidden" value="">
        </li>
        <div id="cart_box"> </div>
      </ul>
      
    
  
</nav>
  <!-- </div> -->
</div>




