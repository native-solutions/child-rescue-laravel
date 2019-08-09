@extends('layouts.app')


@section('content')
	<div class="container">
		
		<section class="section">
			<div class="columns">
				<div class="column is-8">
					<div class="single-page">
						<div class="title"> {{ $document->title }} </div>
						<p class="description">
							{!!  $document->content !!}
						</p>
					</div>
				</div>

				<div class="column is-4">
					<div class="sidebar-sp">
						<div class="title">About Us </div>
						<ul class="menus">
							<li class="menu active"><a href="">Introduction</a></li>
							<li class="menu"><a href="">Information Centre</a></li>
							<li class="menu"><a href="">Central Office</a></li>
							<li class="menu"><a href="">Working Employee Details</a></li>
							<li class="menu"><a href="">Citizenship Certificate</a></li>
							<li class="menu"><a href="">Identity Certificate</a></li>
						</ul>
					</div>
				</div>

			</div>
		</section>
	</div>

	</div>


 </div>


<!-- end of content tiles -->


</div>


@endsection
