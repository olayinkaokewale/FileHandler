# PHP: FileHandler Library
FileHandler is a php library that helps to simplify the process of file processing (upload) with PHP.

It works well with single and multiple file(s) upload.

## Installation
Download zip and extract to your directory or clone from github directly to your library directory.

Clone using SSH: git clone git@github.com:olayinkaokewale/FileHandler.git

Clone using HTTPS: git clone https://github.com/olayinkaokewale/FileHandler.git

Download: [github download]: https://github.com/olayinkaokewale/FileHandler/archive/master.zip

Composer: ... coming soon ...

If manually installed, add this line of code to your autoloader or to the file you want to use FileHandler in:
```php
require_once '<_your_path>/FileHandler/FileHandler.class.php';
```

Inside the php file you want to use this library, import the namespace using the following code:
```php
use JoshMVC\Libs\FileHandler as FileHandler;
```

## Methods
#### __upload()
Upload method takes in three arguments.

1) $files _(required)_ - this contains the file element comming straight from $_FILES["input_name"] in html tag `<form enctype="multipart/form-data">`

2) $destination _(required)_ - this is the path to the folder where the file is saved. [NOTE: this should not be url link.] example: "../images/dp/" or "../images/dp"

3) $constraints _(optional)_ - this is the constraints required for file to be uploaded. This is an associative array in which any key - value pair can be ignored.
	constraint keys: 
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

## Use Case

> files_upload.html
```html
<form method="POST" action="upload.php" enctype="multipart/form-data">
	<input type="file" name="files[]" multiple />
	<button type="submit">Upload Files</button>
</form>
```

> upload.php
```php
<?php
	use JoshMVC\Libs\FileHandler as FileHandler;
	if (isset($_FILES["files"])) {
		$destination = "uploads/";
		$constraints = [
			"size_limit" => 102400, /* value in bytes. 100kb = 100*1024 */
			"accepted_format" => ["image/jpeg", "image/png", "image/gif"], /* must always be array. */
			"extension" => "jpg", /* file extension */
			"file_name" => "filename.ext" /* What to rename the file to. */
		];

		$feedback = FileHandler::__upload($files, $destination, $constraints);
	}
		
```