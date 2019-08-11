	@extends('backpanel.layouts.app')


  @section('css')
  <link rel="stylesheet" href="{{ asset('css/jquery-jvectormap-2.0.3.css') }}">
  @endsection

	@section('content')
	
	            <div class="row gap-20 masonry pos-r">
              <div class="masonry-sizer col-md-6"></div>
              <div class="masonry-item  w-100">
                <div class="row gap-20">
                  <!-- #Toatl Visits ==================== -->
                  <div class='col-md-3'>
                    <div class="layers bd bgc-white p-20">
                      <div class="layer w-100 mB-10">
                        <h6 class="lh-1">Total Visits</h6>
                      </div>
                      <div class="layer w-100">
                        <div class="peers ai-sb fxw-nw">
                          <div class="peer peer-greed">
                            <span id="sparklinedash"></span>
                          </div>
                          <div class="peer">
                            <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-green-50 c-green-500">{{ $total_visit }}</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- #Unique Visitors ==================== -->
                  <div class='col-md-3'>
                    <div class="layers bd bgc-white p-20">
                      <div class="layer w-100 mB-10">
                        <h6 class="lh-1">Unique Visitor</h6>
                      </div>
                      <div class="layer w-100">
                        <div class="peers ai-sb fxw-nw">
                          <div class="peer peer-greed">
                            <span id="sparklinedash3"></span>
                          </div>
                          <div class="peer">
                            <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-purple-50 c-purple-500">{{ $unique_visit }}</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

              <div class="masonry-item col-12">
                <!-- #Site Visits ==================== -->
                <div class="bd bgc-white">
                  <div class="peers fxw-nw@lg+ ai-s">
                    <div class="peer peer-greed w-70p@lg+ w-100@lg- p-20">
                      <div class="layers">
                        <div class="layer w-100 mB-10">
                          <h6 class="lh-1">Site Visits</h6>
                        </div>
                        <div class="layer w-100">
                          <div id="world-map-markers" style="height: 400px"></div>
                        </div>
                      </div>
                    </div>
                    <div class="peer bdL p-20 w-30p@lg+ w-100p@lg-">
                      <div class="layers">
                            </div>
                          </div>


	
	@endsection




  @section('scripts')
  <script src="{{ asset('js/jquery.vmap.min.js') }}"></script>
  <script src="{{ asset('js/jquery-jvectormap-2.0.3.min.js') }}"></script>
  <script src="{{ asset('js/world-map.js') }}"></script>


<script type="text/javascript">
    $(function(){
  $('#world-map-markers').vectorMap({
    map: 'world_mill',
    scaleColors: ['#C8EEFF', '#0071A4'],
    normalizeFunction: 'polynomial',
    hoverOpacity: 0.7,
    hoverColor: false,
    markerStyle: {
      initial: {
        fill: '#F8E23B',
        stroke: '#383f47'
      }
    },
    backgroundColor: '#383f47',
    markers: [

      {latLng: [0.33, 6.73], name: 'São Tomé and Príncipe'},]
  });
});
    </script>

  @endsection