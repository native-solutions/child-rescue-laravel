@extends('backpanel.layouts.app')


@section('content')

<div class="container-fluid">	
	<div class="row">
		<div class="col-md-12">
			<div class="bgc-white bd bdrs-3 p-20 mB-20">
				<h4 class="c-grey-900 mB-20">All Document Pages Lists
						<a href="{{ route('document.create') }}" class="btn btn-info" style="float:right">Add new Page +</a>
				</h4>

				<table class="table table-bordered">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Page Title</th>
							<th scope="col">Category Menu</th>
							<th scope="col"></th>
							<th scope="col"></th>

						</tr>
					</thead>
					<tbody>
						@if(sizeof($all_pages))
						@foreach($all_pages as $page)
						<tr>
							<th scope="row">1</th>
							<td> {{ $page->title }} </td>
							<td>  {{ $page->menu->title }} </td>
							<td><a href="{{ route('document.edit', ['id' => $page->id]) }}" class="btn btn-success">Edit</button></td>
							<td><button onclick="document.getElementById('deleteForm{{$page->id}}').submit()" class="btn btn-danger">Delete</button></td>

							<form action="{{ route('document.destroy', ['id' => $page->id]) }}" method="post" id="deleteForm{{$page->id}}">
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

		{{ $all_pages->links() }}

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