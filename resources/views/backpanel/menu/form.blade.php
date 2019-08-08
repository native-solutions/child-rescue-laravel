				<div class="form-group">
					<label for="menutitle">Menu Title <sup>*</sup></label>

					<input type="text" class="form-control" id="menutitle" name="title" aria-describedby="menuTitleHelp" placeholder="Enter menu title" value="@if(isset($menu)) {{ $menu->title }} @endif">  

					<small id="emailHelp" class="form-text text-muted">This menu will be displayed in website navbar</small>

				</div>


				@if(sizeof($all_menus))
				<div class="form-group">
					<label for="exampleInputPassword1">Parent Menu</label>
					<select name="parent" id="" class="form-control">
						<option value="0" >-- Select Parent Menu --</option>
						@foreach( $all_menus as $menu1 )
							<option value="{{ $menu1->id }}" @if(isset($menu) && $menu1->id == $menu->parent_id) selected @endif>
								 {{ $menu1->title }}
							  </option>
						@endforeach	
					</select>
				</div>
				@endif
