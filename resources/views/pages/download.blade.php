@extends('layouts.app')

@section('content')
	<div class="container">
		
		<section class="section">
			<div class="columns">
				<div class="column is-8">
					<div class="single-page">
						<div class="title">@if(\App::isLocale('en')) {{ $menu->title }} @else {{ $menu->title_nepali }} @endif</div>
						<ul class="form-list">
							@foreach($menu->files as $file)
							@if(\App::isLocale('en'))
							<li class="item"><a href="{{ Storage::url($file->file) }}">
								<span class="item-name">{{ $file->title }}</span>
								<span class="item-icon">
									<img src="{{ asset('images/icons/inbox.svg') }}" width="20" alt="">
								</span>
							</a>
							</li>
							@else
														<li class="item"><a href="{{ Storage::url($file->file) }}">
								<span class="item-name"> {{ $file->title_nepali }}</span>
								<span class="item-icon">
									<img src="{{ asset('images/icons/inbox.svg') }}" width="20" alt="">
								</span>
							</a>
							</li>
@endif
							@endforeach

						</ul>
					</div>
				</div>

				<div class="column is-4">
					<div class="sidebar-sp">
						<div class="title">Forms </div>
						<ul class="menus">
							<li class="menu active"><a href="">Application Forms</a></li>
							<li class="menu"><a href="">Bewarise Form</a></li>
							<li class="menu"><a href="">Parent Handover Form</a></li>
							<li class="menu"><a href="">Street Children Resucue Form</a></li>
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