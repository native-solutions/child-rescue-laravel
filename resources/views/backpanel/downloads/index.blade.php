@extends('backpanel.layouts.app')


@section('content')

<div class="container-fluid">	
	<div class="row">
		<div class="col-md-12">
			<div class="bgc-white bd bdrs-3 p-20 mB-20">
				<h4 class="c-grey-900 mB-20">All Download files Lists
						<a href="{{ route('downloads.create') }}" class="btn btn-info" style="float:right">Upload new file +</a>
				</h4>

				<table class="table table-bordered">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">File Title</th>
							<th scope="col">Category Menu</th>
							<th scope="col"></th>
							<th scope="col"></th>

						</tr>
					</thead>
					<tbody>
						@if(sizeof($all_files))
						@foreach($all_files as $file)
						<tr>
							<th scope="row">1</th>
							<td> <a href="{{ Storage::url($file->file) }}">{{ $file->title }}</a> </td>
							<td>  {{ $file->menu->title }} </td>
							<td><a href="{{ route('downloads.edit', ['id' => $file->id]) }}" class="btn btn-success">Edit</button></td>
							<td><button onclick="document.getElementById('deleteForm{{$file->id}}').submit()" class="btn btn-danger">Delete</button></td>

							<form action="{{ route('downloads.destroy', ['id' => $file->id]) }}" method="post" id="deleteForm{{$file->id}}">
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

		{{ $all_files->links() }}

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