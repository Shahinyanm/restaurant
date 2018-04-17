<div class="row">
    <div class="col-12 col sm-12" id="slid">
        <div id="pxs_container" class="pxs_container">
            <div class="pxs_bg">
                <div class="pxs_bg1"></div>
                <div class="pxs_bg2"></div>
                <div class="pxs_bg3"></div>
            </div>
            <div class="pxs_loading">Loading images...</div>
            <div class="pxs_slider_wrapper">
                <ul class="pxs_slider">

                    @if (isset($result))
                    @foreach ($result as $value)

                    <li><img src="{{URL::asset("/uploads/$value->photo")}}" alt="First Image" /></li>

                    @endforeach
                    @endif






                </ul>
                <div class="pxs_navigation">
                    <span class="pxs_next"></span>
                    <span class="pxs_prev"></span>
                </div>
                <ul class="pxs_thumbnails">


                    @if (isset($result))
                    @foreach ($result as $value)
                    <li><img  style="width:83px;height: 55px" src="{{URL::asset("uploads/$value->photo")}}" alt="First Image" /></li>


                   @endforeach
                    @endif


                </ul>
            </div>
        </div>
    </div>
</div>