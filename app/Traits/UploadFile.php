<?php 

namespace App\Traits;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Event;

trait UploadFile {



	public function uploadSingleFile(Request $request, $fileName)
	{
			$file         = $fileName;
	        $currentYear  = Date('Y');
	        $currentMonth = Date('M');
	        $currentDay   = Date('d');

	        $folder = "/public/images/$currentYear/$currentMonth/$currentDay";

	        $filename = time() . pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME) . '.' . 
	        			$file->getClientOriginalExtension();
	        $filepath = Storage::putFileAs($folder, $file, $filename, 'public');
	        return $filepath;
	}

	public function uploadMultipleFile(Request $request, $filename)
	{
		$filenames = array();

		foreach ($request->file($filename) as $file) {
			
			$filepath = $this->uploadSingleFile($request, $file);
			array_push($filenames, $filepath);

		}
		return $filenames;
	}


}