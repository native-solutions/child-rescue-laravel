@extends('backpanel.layouts.app')


@section('content')

<div class="container-fluid">	
	<div class="row">
		<div class="col-md-12">
			<div class="bgc-white bd bdrs-3 p-20 mB-20">
				<h4 class="c-grey-900 mB-20">All Menu Lists
						<a href="{{ route('menu.create') }}" class="btn btn-info" style="float:right">Add Menu +</a>
				</h4>

				<table class="table table-bordered">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Menu Title</th>
							<th scope="col">Parent Name</th>
							<th scope="col"></th>
							<th scope="col"></th>

						</tr>
					</thead>
					<tbody>
						@if(sizeof($all_menus))
						@foreach($all_menus as $menu)
						<tr>
							<th scope="row">1</th>
							<td> {{ $menu->title }} </td>
							<td> @if($menu->getParentName()) {{ $menu->getParentName() }} @else <span style="opacity: 0.4">No Parent</span> @endif</td>
							<td><a href="{{ route('menu.edit', ['id' => $menu->id]) }}" class="btn btn-success">Edit</button></td>
							<td><button onclick="document.getElementById('deleteForm{{$menu->id}}').submit()" class="btn btn-danger">Delete</button></td>

							<form action="{{ route('menu.destroy', ['id' => $menu->id]) }}" method="post" id="deleteForm{{$menu->id}}">
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

		{{ $all_menus->links() }}

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