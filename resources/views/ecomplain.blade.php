@extends('layouts.app')


@section('content')
	<section class="content slideright slide">
		<div class="responsive">
			<div class="tile is-ancestor">
				<div class="tile is-parent is-4"></div>
				<div class="tile is-child is-8 section">
					@if(Session::has('message'))
						<div class="notification is-{{ Session::get('class') }}">
							{{ Session::get('message') }}

						</div>
					@endif	

					<div class="title">Complaint Form</div>
					<form action="{{ route('ecomplain.store') }}" method="post" class="form">
						@csrf
						<div class="field">
							  <label class="label">Your Name: </label>
							  <div class="control">
							    <input class="input" type="text" name="name" placeholder="">
							  </div>
							  <p class="help">Enter your full name here</p>
						</div>

						<div class="field">
							  <label class="label">Your Email address: </label>
							  <div class="control">
							    <input class="input" type="email" name="email" placeholder="">
							  </div>
							  <p class="help">Enter your email address here</p>
						</div>
						
						<div class="field">
							  <label class="label">Subject : </label>
							  <div class="control">
							    <input class="input" type="text" name="subject" placeholder="">
							  </div>
							  <p class="help">Enter the main subject of this complain</p>
						</div>

						<div class="field">
							  <label class="label">Write your message : </label>
							  <div class="control">
							    <textarea class="textarea is-primary" name="message" placeholder=""></textarea>
							  </div>	
						</div>

						<div class="field">
							<button type="submit" class="button is-success">Send</button>
						</div>


					</form>
				</div>
			</div>
		</div>
	</section>
	


<!-- end of content tiles -->


</div>
@endsection