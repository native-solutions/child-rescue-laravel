				<div class="form-group row">
					<div class="col-md-6">
						<label for="menutitle">Site Title:  <sup>*</sup></label>

						<input type="text" class="form-control" id="filetitle" name="site_title" aria-describedby="fileTitleHelp" placeholder="Enter Site title" value="@if(isset($setting)) {{ $setting->site_name }} @endif">  
					</div>
						<div class="col-md-6">
						<label for="menutitle">Site Title :  <sup>*</sup></label>

						<input type="text" class="form-control" id="filetitle" name="site_title_nepali" aria-describedby="fileTitleHelp" placeholder="Enter Site title" value="@if(isset($setting)) {{ $setting->site_name_nepali }} @endif">  
					</div>


				</div>


				<div class="form-group row">
					<div class="col-md-6">
					<label for="menutitle">Email Address :  <sup>*</sup></label>

					<input type="text" class="form-control" id="filetitle" name="email" aria-describedby="fileTitleHelp" placeholder="Enter email address" value="@if(isset($setting)) {{ $setting->email }} @endif">  
					</div>	
					<div class="col-md-6">
					<label for="menutitle">Email Address :  <sup>*</sup></label>

					<input type="text" class="form-control" id="filetitle" name="email_nepali" aria-describedby="fileTitleHelp" placeholder="Enter email address" value="@if(isset($setting)) {{ $setting->email_nepali }} @endif">  
					</div>	
	
				</div>

				<div class="form-group row">
					<div class="col-md-6">
							<label for="menutitle">Emergency Phone Number :  <sup>*</sup></label>

							<input type="tel" class="form-control" id="filetitle" name="emergency_number" aria-describedby="fileTitleHelp" placeholder="Enter phone number" value="@if(isset($setting)) {{ $setting->emergency_number }} @endif">  
					</div>
					<div class="col-md-6">
							<label for="menutitle">Emergency Phone Number :  <sup>*</sup></label>

							<input type="tel" class="form-control" id="filetitle" name="emergency_number_nepali" aria-describedby="fileTitleHelp" placeholder="Enter phone number" value="@if(isset($setting)) {{ $setting->emergency_number_nepali }} @endif">  
					</div>


				</div>

				<div class="form-group row">
					<div class="col-md-6">
					<label for="menutitle">Phone Number :  <sup>*</sup></label>

					<input type="tel" class="form-control" id="filetitle" name="phone_number" aria-describedby="fileTitleHelp" placeholder="Enter phone number" value="@if(isset($setting)) {{ $setting->phone_number }} @endif">  

					</div>

					<div class="col-md-6">
					<label for="menutitle">Phone Number :  <sup>*</sup></label>

					<input type="tel" class="form-control" id="filetitle" name="phone_number_nepali" aria-describedby="fileTitleHelp" placeholder="Enter phone number" value="@if(isset($setting)) {{ $setting->phone_number_nepali }} @endif">  

					</div>

				</div>

				<div class="form-group row">
					<div class="col-md-6">
					<label for="menutitle">Address :  <sup>*</sup></label>

					<input type="text" class="form-control" id="filetitle" name="address" aria-describedby="fileTitleHelp" placeholder="Enter Address " value="@if(isset($setting)) {{ $setting->address }} @endif">  
					</div>

					<div class="col-md-6">
					<label for="menutitle">Address :  <sup>*</sup></label>

					<input type="text" class="form-control" id="filetitle" name="address_nepali" aria-describedby="fileTitleHelp" placeholder="Enter Address " value="@if(isset($setting)) {{ $setting->address_nepali }} @endif">  
					</div>


				</div>

				<div class="form-group">
					<label for="menutitle">Main Logo (in center) :  <sup>*</sup></label>

					<input type="file" class="form-control" id="filetitle" name="main_logo" aria-describedby="fileTitleHelp"  value="@if(isset($setting)) {{ $setting->header_logo_center }} @endif">  

					@if(isset($setting))
					<small id="emailHelp" class="form-text text-muted"> Don't upload any file if you don't want change previous file</small>
					@endif
				</div>


				<div class="form-group">
					<label for="">Extra Logo (in rightside of header): </label>
					<input type="file" name="logo_right" id="" class="form-control">
					@if(isset($setting))
					<small id="emailHelp" class="form-text text-muted"> Don't upload any file if you don't want change previous file</small>
					@endif
				</div>


			<div class="form-group">
					<label for="menutitle">Top Nav Color :  <sup>*</sup></label>

					<input type="color" class="form-control" id="filetitle" name="top_nav_color" aria-describedby="fileTitleHelp" placeholder="Enter phone number" value="@if(isset($setting)) {{ $setting->top_nav_color }} @endif">  

				</div>

				<div class="form-group">
					<label for="menutitle">Main Nav Color :  <sup>*</sup></label>

					<input type="color" class="form-control" id="filetitle" name="main_nav_color" aria-describedby="fileTitleHelp" placeholder="Enter phone number" value="@if(isset($setting)) {{ $setting->main_nav_color }} @endif">  

				</div>



