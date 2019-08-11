				<div class="form-group">
					<label for="menutitle">Event Name <sup>*</sup></label>

					<input type="text" class="form-control" id="eventtitle" name="title" aria-describedby="eventTitleHelp" placeholder="Enter Event title" value="@if(isset($event)) {{ $event->title }} @endif">  
				</div>

				<div class="form-group">
					<label for="menutitle">Event Name (नेपालीमा )<sup>*</sup></label>
					<input type="text" class="form-control" id="eventtitle" name="nepalititle" aria-describedby="eventTitleHelp" placeholder="Enter Event title" value="@if(isset($event)) {{ $event->title_nepali }} @endif">  
				</div>


		
			<div class="form-group">
				<label for="content">Event Description(optional): </label>
				<textarea name="content" id="content" cols="30" rows="10" class="form-control">@if(isset($event)) {{ $event->description }} @endif</textarea>
			</div>

			<div class="form-group">
				<label for="content">Event Description(नेपालीमा ): </label>
				<textarea name="content" id="content" cols="30" rows="10" class="form-control">@if(isset($event)) {{ $event->description_nepali }} @endif</textarea>
			</div>

		@if(!isset($event))
			<div class="form-group">
				<label for="image">Event Images:</label>
				<input type="file" name="images[]" id="" class="form-control"  multiple >
				<small>You can select as many images as you want by ctrl + click on images</small>
			</div>
			@endif

