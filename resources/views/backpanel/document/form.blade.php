				<div class="form-group">
					<label for="menutitle">Page Title <sup>*</sup></label>

					<input type="text" class="form-control" id="pagetitle" name="title" aria-describedby="menuTitleHelp" placeholder="Enter Page title" value="@if(isset($page)) {{ $page->title }} @endif">  


				</div>

				<div class="form-group">
					<label for="menutitle">Title (नेपालीमा )</label>

					<input type="text" class="form-control" id="pagetitle" name="nepalititle" aria-describedby="menuTitleHelp" placeholder="Enter Page title in Nepali" value="@if(isset($page)) {{ $page->title-nepali }} @endif">  


				</div>


				@if(sizeof($all_menus))
				<div class="form-group">
					<label for="exampleInputPassword1">Category Menu: </label>
					<select name="menu" id="" class="form-control">
						<option value="0" >-- Select Parent Menu --</option>
						@foreach( $all_menus as $menu1 )
							<option value="{{ $menu1->id }}" @if(isset($menu) && $menu1->id == $menu->parent_id) selected @endif">
							 {{ $menu1->title }}
							  </option>
						@endforeach	
					</select> 
				</div>
				@endif

		
			<div class="form-group">
				<label for="content">Page Content: </label>
				<textarea name="content" id="content" cols="30" rows="10" class="form-control">@if(isset($page)) {{ $page->content }} @endif</textarea>
			</div>

			<div class="form-group">
				<label for="content">Page Content (नेपालीमा ): </label>
				<textarea name="nepalicontent" id="content" cols="30" rows="10" class="form-control">@if(isset($page)) {{ $page->content-nepali }} @endif</textarea>
			</div>