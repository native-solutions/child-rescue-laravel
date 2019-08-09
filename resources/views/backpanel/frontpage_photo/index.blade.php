@extends('backpanel.layouts.app')


@section('content')

<div class="container-fluid">	
	<div class="row">
		<div class="col-md-12">
			<div class="bgc-white bd bdrs-3 p-20 mB-20">
				<h4 class="c-grey-900 mB-20">All Frontpage Photos
						<a href="{{ route('frontpage.create') }}" class="btn btn-info" style="float:right">Add new Image +</a>
				</h4>

				<table class="table table-bordered">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Image Caption</th>
							<th scope="col">Image</th>
							<th scope="col"></th>
							<th scope="col"></th>

						</tr>
					</thead>
					<tbody>
						@if(sizeof($all_images))
						@foreach($all_images as $image)
						<tr>
							<th scope="row">1</th>
							<td> <a href="">{{ $image->caption }}</a> </td>
							<td>   <img src="{{ Storage::url($image->image) }}" width="100" alt=""> </td>
							<td><a href="{{ route('slider.edit', ['id' => $image->id]) }}" class="btn btn-success">Edit</button></td>
							<td><button onclick="document.getElementById('deleteForm{{$image->id}}').submit()" class="btn btn-danger">Delete</button></td>

							<form action="{{ route('slider.destroy', ['id' => $image->id]) }}" method="post" id="deleteForm{{$image->id}}">
								@csrf
								@method("DELETE")
							</form>

						</tr>
						@endforeach
						@else
						<tr>
							<td rowspan="3">No Datas Found</td>
						</tr>
						@endif

						</tbody>
					</table>
				</div>
			</div>
		</div>

		{{ $all_images->links() }}

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