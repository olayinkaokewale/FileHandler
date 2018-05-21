# PHP Library: FileHandler
FileHandler is a php library that helps simplify the process of file processing (upload). It works well with single and multiple file(s) upload.

## Installation
Recommended Method: Use [Composer](http://getcomposer.org/download/) to get the library by running the script below
```bash
composer require joshmvc/filehandler
```

Other Installation Methods:

Download zip and extract to your directory
> [github download](https://github.com/olayinkaokewale/FileHandler/archive/master.zip)

OR clone from github directly to your library directory.

Clone using SSH:
> git@github.com:olayinkaokewale/FileHandler.git

Clone using HTTPS:
> https://github.com/olayinkaokewale/FileHandler.git



If manually installed, add this line of code to your autoloader or to the file you want to use FileHandler in:
```php
require_once '<_your_path>/FileHandler/FileHandler.class.php';
```

If installed using composer, add this line of code to the file you want to use FileHandler in:
```php
require 'autoloader.php';
```

Inside the php file you want to use this library, import the namespace using the following code:
```php
use JoshMVC\Libs\FileHandler as FileHandler;
```

## Methods
#### __upload()
__upload method takes in three arguments.

1) $files _(required)_ - this contains the file element comming straight from $_FILES["input_name"] in html tag `<input type="file" name="input_name[]" multiple>`

2) $destination _(required)_ - this is the path to the folder where the file is saved. [NOTE: this should not be url link.] example: "../images/dp/" or "../images/dp"

3) $constraints _(optional)_ - this is the constraints required for file to be uploaded. This is an associative array in which any key - value pair can be ignored.
	constraint keys: 
	- size_limit: this is the limit of the file in bytes. [size limit for 100kb is 100*1024 = 102400]
	- accepted_format: this is an array of accepted file types [some accepted format for images are ["image/jpeg", "image/png", "image/gif"]];
	- extension: this is the string of the final file extension to be saved as.
	- file_name: this is the static name of the file to be saved. [NOTE: ONLY USEFUL WHEN FILE UPLOADED IS ONE]
	- //others would be added here....

	EXAMPLE:
	
	```php
	$constraints = [
		"size_limit" => 0, //value in bytes. 100kb = 100*1024
		"accepted_format" => ["image/jpeg", "image/png", "image/gif"], //must always be array.
		"extension" => "jpg",
		"file_name" => "filename.ext"
	];
	```

## Use Case
You want users to be able to upload multiple files to your server. Below are the upload rules
- file size must not be greater than 2MB (i.e. 2097152 bytes)
- file must be of image format jpg, jpeg, gif or png


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
		"size_limit" => 2097152, /* Size Limit of 2MB */
		"accepted_format" => ["image/jpeg", "image/jpg", "image/png", "image/gif"], /* only image format accepted */
	];

	$feedback = FileHandler::__upload($_FILES["files"], $destination, $constraints);
}

```

## Contributing
If you're interested in contributing to this project, you can check out the issues to know what is being requested by the users of this project. 

However, if you're bringing on a new idea, you can mail me at okjool2012@gmail.com to discuss it with me. Thanks
