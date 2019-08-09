				<div class="form-group">
					<label for="menutitle">Link Title <sup>*</sup></label>

					<input type="text" class="form-control" id="menutitle" name="title" aria-describedby="menuTitleHelp" placeholder="Enter Link title" value="@if(isset($link)) {{ $link->title }} @endif">  


				</div>


				<div class="form-group">
					<label for="menutitle">Link URL <sup>*</sup></label>

					<input type="text" class="form-control" id="menutitle" name="url" aria-describedby="menuTitleHelp" placeholder="Enter Link URL" value="@if(isset($link)) {{ $link->url }} @endif">  


				</div>

