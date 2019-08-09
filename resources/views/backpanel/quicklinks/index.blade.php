@extends('backpanel.layouts.app')


@section('content')

<div class="container-fluid">	
	<div class="row">
		<div class="col-md-12">
			<div class="bgc-white bd bdrs-3 p-20 mB-20">
				<h4 class="c-grey-900 mB-20">All Quick Links
						<a href="{{ route('quicklink.create') }}" class="btn btn-info" style="float:right">Add Quick Link +</a>
				</h4>

				<table class="table table-bordered">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Link title</th>
							<th scope="col">Link Url</th>
							<th scope="col"></th>
							<th scope="col"></th>

						</tr>
					</thead>
					<tbody>
						@if(sizeof($quicklinks))
						@foreach($quicklinks as $link)
						<tr>
							<th scope="row">1</th>
							<td> {{ $link->title }} </td>
							<td> <a href="{{ $link->url }}"> {{ $link->url }} </a></td>
							<td><a href="{{ route('quicklink.edit', ['id' => $link->id]) }}" class="btn btn-success">Edit</button></td>
							<td><button onclick="document.getElementById('deleteForm{{$link->id}}').submit()" class="btn btn-danger">Delete</button></td>

							<form action="{{ route('quicklink.destroy', ['id' => $link->id]) }}" method="post" id="deleteForm{{$link->id}}">
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

		{{ $quicklinks->links() }}

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