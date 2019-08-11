				<div class="form-group row">
					<div class="col-md-6">
						<label for="menutitle">File Title <sup>*</sup></label>

						<input type="text" class="form-control" id="filetitle" name="title" aria-describedby="fileTitleHelp" placeholder="Enter File title" value="@if(isset($file)) {{ $file->title }} @endif">  
					</div>

					<div class="col-md-6">
						<label for="menutitle">File Title (Nepali)<sup>*</sup></label>

						<input type="text" class="form-control" id="filetitle" name="nepalititle" aria-describedby="fileTitleHelp" placeholder="Enter File title" value="@if(isset($file)) {{ $file->title_nepali }} @endif">  
					</div>

				</div>


				@if(sizeof($all_menus))
				<div class="form-group">
					<label for="exampleInputPassword1">Category Menu</label>
					<select name="menu" id="" class="form-control">
						<option value="0" >-- Select category Menu --</option>
						@foreach( $all_menus as $menu1 )
							<option value="{{ $menu1->id }}" @if(isset($file->menu) && $menu1->id == $file->menu_id) selected="true" @endif >
								 {{ $menu1->title }}
							  </option>
						@endforeach	
					</select>
				</div>
				@endif

				<div class="form-group">
					<label for="">Upload file: </label>
					<input type="file" name="file" id="" class="form-control">
					@if(isset($file))
					<small id="emailHelp" class="form-text text-muted"> Don't upload any file if you don't want change previous file</small>
					@endif
				</div>


