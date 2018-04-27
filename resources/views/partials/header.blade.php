
    <nav class="navbar  bg-dark navbar-dark head">
      <div class="d-flex justify-content-between col-md-12">
        <div >
          <a class="" href="{{route('store.index')}}"><img style="width:75px;" src="{{URL::asset('uploads/logo')}}"></a>
          <span  id="info"> Информация  </span>
          <div class="arrow_box"></div>
        </div>
        <div>
          @if(!Auth::check())
        <ul>
          <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
          @else
          <li>
           
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            
                              </li>
          <li></li>
        </ul>
        @endif
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




