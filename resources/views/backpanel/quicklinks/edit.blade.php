@extends('backpanel.layouts.app')



@section('content')

<div class="row gap-20 masonry pos-r">
    <div class="masonry-sizer col-md-6"></div>
	<div class="masonry-item col-md-6" style="position: absolute; left: 0%; top: 0px;">
	<div class="bgc-white p-20 bd">
		<h6 class="c-grey-900">Edit Link Title</h6>
		<div class="mT-30">
			<form action=" {{ route('quicklink.update', ['id' => $link->id ]) }} " method="post">
				@csrf
				@method("PUT")
				@include('backpanel.quicklinks.form')	
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
	</div>
	</div>
	</div>	
</div>

@endsection

@section('scripts')
	
	@if(Session::has('message'))

	<script type="text/javascript">
		new Noty({
    		type: "{{ Session::get('class') }}",
	    	text: " {{ Session::get('message') }}",
	    	timeout: 4000,
		}).show();
	</script>
	@endif

@endsection