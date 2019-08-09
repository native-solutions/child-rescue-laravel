@extends('backpanel.layouts.app')


@section('content')

<div class="container-fluid">	
	<div class="row">
		<div class="col-md-12">
			<div class="bgc-white bd bdrs-3 p-20 mB-20">
				<h4 class="c-grey-900 mB-20">All News posts
						<a href="{{ route('news.create') }}" class="btn btn-info" style="float:right">Upload new news +</a>
				</h4>

				<table class="table table-bordered">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">News Title</th>
							<th scope="col">News Content</th>
							<th scope="col"></th>
							<th scope="col"></th>
							<th scope="col"></th>

						</tr>
					</thead>
					<tbody>
						@if(sizeof($all_news))
						@foreach($all_news as $news)
						<tr>
							<th scope="row">1</th>
							<td> <a href="">{{ $news->title }}</a> </td>
							<td>  {{ $news->shortDescription() }} </td>
							<td><a href="{{ route('news.edit', ['id' => $news->id]) }}" class="btn btn-success">Edit</button></td>
							<td><button onclick="document.getElementById('deleteForm{{$news->id}}').submit()" class="btn btn-danger">Delete</button></td>

							<form action="{{ route('news.destroy', ['id' => $news->id]) }}" method="post" id="deleteForm{{$news->id}}">
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

		{{ $all_news->links() }}

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