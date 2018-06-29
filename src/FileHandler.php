<?php

namespace JoshMVC\Libs;

class FileHandler {
	
	// constructor
	function __construct() {

	}

	// destructor
	function __destruct() {

	}

	// -------------------------------------------------- START: MAIN FUNCTIONS ------------------------------------------------ //

	static function upload_image($files, $destination, $file_name="", $max_size=0) {
		/* ------------------------------------------------------
		/  1) $files - this contains the file element comming straight from $_FILES["input_name"] in html tag <form enctype="multipart/form-data">
		/  2) $destination - this is the path to the folder where the file is saved. [NOTE: this should not be url link.] example: ../images/dp/ or ../images/dp
		/  3) $file_name - this is the name of the files(s) to be saved.
		/  4) $max_size - this is the maximum size of the image file to be uploaded.
		/-------------------------------------------------------*/
		$constraints = [
			"accepted_format" => [
				
				"image/jpg", 
				"image/png", 
				"image/jpeg", 
				"image/gif", 
				"image/bmp", 
				"image/cis-cod", 
				"image/ief", 
				"image/pipeg", 
				"image/svg+xml", 
				"image/tiff", 
				"image/x-cmu-raster", 
				"image/x-cmx", 
				"image/x-icon", 
				"image/x-portable-anymap", 
				"image/x-portable-bitmap", 
				"image/x-portable-graymap", 
				"image/x-portable-pixmap", 
				"image/x-rgb", 
				"image/x-xbitmap", 
				"image/x-xpixmap", 
				"image/x-xwindowdump"

			]
		];
		if ($file_name != "") $constraints["file_name"] = $file_name;
		if ($max_size != 0) $constraints["size_limit"] = $max_size;

		return Self::__upload($files, $destination, $constraints);
	}

	static function upload_video($files, $destination, $file_name="", $max_size=0) {
		/* ------------------------------------------------------
		/  1) $files - this contains the file element comming straight from $_FILES["input_name"] in html tag <form enctype="multipart/form-data">
		/  2) $destination - this is the path to the folder where the file is saved. [NOTE: this should not be url link.] example: ../images/dp/ or ../images/dp
		/  3) $file_name - this is the name of the files(s) to be saved.
		/  4) $max_size - this is the maximum size of the image file to be uploaded.
		/-------------------------------------------------------*/
		$constraints = [
			"accepted_format" => [
				
				"video/mpeg", 
				"video/mp4", 
				"video/quicktime", 
				"video/x-la-asf", 
				"video/x-ms-asf", 
				"video/x-msvideo", 
				"video/x-sgi-movie"

			]
		];
		if ($file_name != "") $constraints["file_name"] = $file_name;
		if ($max_size != 0) $constraints["size_limit"] = $max_size;

		return Self::__upload($files, $destination, $constraints);
	}

	static function upload_audio($files, $destination, $file_name="", $max_size=0) {
		/* ------------------------------------------------------
		/  1) $files - this contains the file element comming straight from $_FILES["input_name"] in html tag <form enctype="multipart/form-data">
		/  2) $destination - this is the path to the folder where the file is saved. [NOTE: this should not be url link.] example: ../images/dp/ or ../images/dp
		/  3) $file_name - this is the name of the files(s) to be saved.
		/  4) $max_size - this is the maximum size of the image file to be uploaded.
		/-------------------------------------------------------*/
		$constraints = [
			"accepted_format" => [
				
				"audio/basic", 
				"audio/mid", 
				"audio/mpeg", 
				"audio/mpg", 
				"audio/mp3", 
				"audio/x-mp3", 
				"audio/x-mpeg-3", 
				"audio/x-mpeg3", 
				"audio/mpeg3", 
				"audio/x-mpegaudio", 
				"audio/x-mpeg", 
				"audio/x-aiff", 
				"audio/x-mpegurl", 
				"audio/x-pn-realaudio", 
				"audio/x-wav"

			]
		];
		if ($file_name != "") $constraints["file_name"] = $file_name;
		if ($max_size != 0) $constraints["size_limit"] = $max_size;

		return Self::__upload($files, $destination, $constraints);
	}

	static function upload_document($files, $destination, $file_name="", $max_size=0) {
		/* ------------------------------------------------------
		/  1) $files - this contains the file element comming straight from $_FILES["input_name"] in html tag <form enctype="multipart/form-data">
		/  2) $destination - this is the path to the folder where the file is saved. [NOTE: this should not be url link.] example: ../images/dp/ or ../images/dp
		/  3) $file_name - this is the name of the files(s) to be saved.
		/  4) $max_size - this is the maximum size of the image file to be uploaded.
		/-------------------------------------------------------*/
		$constraints = [
			"accepted_format" => [
				
				"text/plain", 
				"application/msword", 
				"application/pdf", 
				"application/rtf", 
				"application/vnd.ms-excel", 
				"application/vnd.ms-powerpoint", 
				"application/x-latex", 
				"application/x-tex", 
				"application/x-texinfo", 
				"application/x-texinfo"

			]
		];
		if ($file_name != "") $constraints["file_name"] = $file_name;
		if ($max_size != 0) $constraints["size_limit"] = $max_size;

		return Self::__upload($files, $destination, $constraints);
	}

	static function upload_compressed($files, $destination, $file_name="", $max_size=0) {
		/* ------------------------------------------------------
		/  1) $files - this contains the file element comming straight from $_FILES["input_name"] in html tag <form enctype="multipart/form-data">
		/  2) $destination - this is the path to the folder where the file is saved. [NOTE: this should not be url link.] example: ../images/dp/ or ../images/dp
		/  3) $file_name - this is the name of the files(s) to be saved.
		/  4) $max_size - this is the maximum size of the image file to be uploaded.
		/-------------------------------------------------------*/
		$constraints = [
			"accepted_format" => [
				
				"application/x-compressed", 
				"application/x-compress", 
				"application/x-gtar", 
				"application/x-gzip", 
				"application/x-tar", 
				"application/zip", 
				"application/octet-stream", 
				"application/x-zip-compressed", 
				"multipart/x-zip", 
				"application/x-rar-compressed"
				
			]
		];
		if ($file_name != "") $constraints["file_name"] = $file_name;
		if ($max_size != 0) $constraints["size_limit"] = $max_size;

		return Self::__upload($files, $destination, $constraints);
	}

	// -------------------------------------------------- STOP:  MAIN FUNCTIONS ------------------------------------------------ //

	// -------------------------------------------------- START: STATIC FUNCTIONS ------------------------------------------------ //
	static function __upload($files, $destination, $constraints=[]) {
		/* ----------------------------------------------------
			PARAMETERS DEFINITIONS AND EXAMPLES
			1) $files - this contains the file element comming straight from $_FILES["input_name"] in html tag <form enctype="multipart/form-data">
			2) $destination - this is the path to the folder where the file is saved. [NOTE: this should not be url link.] example: ../images/dp/ or ../images/dp
			3) $constraints - this should be the constraints required for file to be uploaded or not. This is an array
				constraint parameters: 
				- size_limit: this is the limit of the file in bytes. [size limit for 100kb is 100*1024 = 102400]
				- accepted_format: this is an array of accepted file types [some accepted format for images are ["image/jpeg", "image/png", "image/gif"]];
				- extension: this is the string of the final file extension to be saved as.
				- file_name: this is the static name of the file to be saved. [NOTE: ONLY USEFUL WHEN FILE UPLOADED IS ONE]
				- //others would be added here....
				EXAMPLE:
				$constraints = [
					"size_limit" => 0, //value in bytes. 100kb = 100*1024
					"accepted_format" => ["image/jpeg", "image/png", "image/gif"], //must always be array.
					"extension" => "jpg",
					"file_name" => "filename.ext"
				];
		---------------------------------------------------- */
		/* ---------------------------------------------------
		EXAMPLE $_FILES["input_name"]
		--------------------------------------------------- */

		$feedback = [];
		if (!empty($files)) {
			$files = Self::filerearrange($files);
			foreach ($files as $key => $file) {
				if ($file['error'] == 0) {
					if (!isset($constraints["accepted_format"]) || (in_array($file["type"], $constraints["accepted_format"]))) {
						if (!isset($constraints["size_limit"]) || ($file["size"] <= $constraints["size_limit"])) {
							// Deal with file naming here.
							if (isset($constraints["file_name"])) {
								$finalName = $constraints["file_name"];
							} else {
								$ext = (isset($constraints["extension"])) ? $constraints["extension"] : Self::getfileext($file["name"]);
								$finalName = ($ext != "") ? time()."_".rand(11111111,99999999).".".$ext : $file["name"]."_".rand(11111111,99999999);
							}
							// done with file naming
							$destination = rtrim($destination, "/") . "/";
							if (move_uploaded_file($file["tmp_name"], $destination.$finalName)) {
								$feedback[] = ["old_name" => $file["name"], "flag" => 1, "message" => "File upload successful", "new_name" => $finalName];
							} else {
								$feedback[] = ["old_name" => $file["name"], "flag" => 0, "message" => "File upload failed: Unknown error"];
							}
						} else {
							$feedback[] = ["old_name" => $file["name"], "flag" => 0, "message" => "File rejected: File too large"];
						}
					} else {
						$feedback[] = ["old_name" => $file["name"], "flag" => 0, "message" => "File rejected: Invalid file format"];
					}
				} else {
					$feedback[] = ["old_name" => $file["name"], "flag" => 0, "message" => "File upload failed"];
				}
			}
		}

		return $feedback;
	}

	// METHOD TO REARRANGE $_FILES into iteratable array
	static function filerearrange($arr) {
		if (is_array($arr[array_keys($arr)[0]])) {
			foreach($arr as $key => $all) {
		        foreach($all as $i => $val) {
		            $new[$i][$key] = $val;    
		        }
		    }
		} else {
			$new[] = $arr;
		}
	    
	    return $new;
	}


	static function getfileext($filename) {
		$splits = explode(".", $filename);
		$ext = (count($splits) > 1) ? $splits[(count($splits) - 1)] : "";
		return $ext;
	}
	// -------------------------------------------------- STOP:  STATIC FUNCTIONS ------------------------------------------------ //
}