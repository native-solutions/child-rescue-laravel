@extends('layouts.app')

@section('content')
	<div class="container">
		
		<section class="section">
			<div class="columns">
				<div class="column is-8">
					<div class="single-page">
						<div class="title">All Photos of event "{{ $event->title }}"</div>



									    <div id="photo-gallery">
									    	@foreach($event->images as $image)
									      <a href="{{ Storage::url($image->image) }} ">
									          <img src="{{ Storage::url($image->image) }}" title="{{ $event->title }}"/>
									      </a>
									      @endforeach
									    </div>

					</div>
				</div>

				<div class="column is-4">
					<div class="sidebar-sp">
						<div class="title">Gallery Based on Events </div>
						<ul class="menus">
							@foreach($all_events as $event)
							<li class="menu active"><a href="{{ route('gallery',['id' => $event->id]) }}"> {{ $event->title }}</a></li>
							@endforeach
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