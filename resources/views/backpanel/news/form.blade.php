				<div class="form-group">
					<label for="menutitle">News title <sup>*</sup></label>

					<input type="text" class="form-control" id="eventtitle" name="title" aria-describedby="eventTitleHelp" placeholder="Enter News Title" value="@if(isset($news)) {{ $news->title }} @endif">  


				</div>


		
			<div class="form-group">
				<label for="content">News Description: </label>
				<textarea name="content" id="content" cols="30" rows="10" class="form-control">@if(isset($news)) {{ $news->description }} @endif</textarea>
			</div>

			<div class="form-group">
				<label for="image">News Image:</label>
				<input type="file" name="image" id="" class="form-control">
			</div>

