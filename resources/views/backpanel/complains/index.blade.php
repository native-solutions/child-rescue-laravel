@extends('backpanel.layouts.app')


@section('content')

<div class="container-fluid">	
	<div class="row">
		<div class="col-md-12">
			<div class="bgc-white bd bdrs-3 p-20 mB-20">
				<h4 class="c-grey-900 mB-20">All E-Complains
				</h4>

				<table class="table table-bordered">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Person's name</th>
							<th scope="col">Email Address</th>
							<th scope="col">Subject</th>
							<th scope="col">Message</th>
							<th scope="col">Sent Time</th>

						</tr>
					</thead>
					<tbody>
						@if(sizeof($all_complains))
						@foreach($all_complains as $complain)
						<tr>
							<th scope="row">1</th>
							<td> {{ $complain->name }} </td>
							<td>  {{ $complain->email }} </td>
							<td> {{ $complain->subject }} </td>
							<td> {{ $complain->message }} </td>
							<td> {{ $complain->created_at }}</td>

							<td><button onclick="document.getElementById('deleteForm{{$complain->id}}').submit()" class="btn btn-danger">Delete</button></td>

							<form action="{{ route('ecomplain.destroy', ['id' => $complain->id]) }}" method="post" id="deleteForm{{$complain->id}}">
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

		{{ $all_complains->links() }}

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