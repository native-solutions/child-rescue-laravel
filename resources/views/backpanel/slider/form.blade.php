				<div class="form-group">
					<label for="menutitle">Image caption <sup>*</sup></label>

					<input type="text" class="form-control" id="eventtitle" name="caption" aria-describedby="eventTitleHelp" placeholder="Enter Event title" value="@if(isset($image)) {{ $image->caption }} @endif">  


				</div>


		
			<div class="form-group">
				<label for="image">Upload Image:</label>
				<input type="file" name="image" id="" class="form-control">
				@if(isset($image))
				<small> If you don't want to edit image, don't upload.</small>
				@endif
			</div>

