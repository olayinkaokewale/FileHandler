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
> git@github.com:<your_username>/FileHandler.git

Clone using HTTPS:
> https://github.com/<your_username>/FileHandler.git


## Usage Requirement(s)
If manually installed, add this line of code to your autoloader or to the file you want to use FileHandler in:
```php
require_once '<_your_path>/FileHandler/src/FileHandler.php';
```

If installed using composer, add this line of code to the file you want to use FileHandler in:
```php
require 'vendor/autoload.php';
```

Inside the php file you want to use this library, import the namespace using the following code:
```php
use JoshMVC\Libs\FileHandler as FileHandler;
```

## New Method(s)

#### upload_image($files, $destination, $file_name="", $max_size=0)
This method can be used to upload many format of image(s).

Accepted image format include jpeg, jpg, jpe, png, gif, bmp, svg, cod, ief, jfif, tif, tiff, ras, cmx, ico, pnm, pbm, ppm, rgb, xbm, xwd

Both `$file_name` and `$max_size` are optional. However, if you wish to specify final name of file, insert your parameter in the third args space and if you wish to specify file size please do so by inserting the size limit as bytes in the fourth args space (e.g. 2MB is 2*1024*1024 bytes so you will input 2097152). 

Example Usage:

```php
FileHandler::upload_image($_FILES["img_upload"], "myfiles/images/"); // Saves file as random name and uses the file's extension.
// OR
FileHandler::upload_image($_FILES["img_upload"], "myfiles/images/", "user1.jpg"); // Specify file name
// OR
FileHandler::upload_image($_FILES["img_upload"], "myfiles/images/", "user1.jpg", 2097152); // Specify file size limit
// OR - to add size limit without specifying name, use empty string for the third parameter:
FileHandler::upload_image($_FILES["img_upload"], "myfiles/images/", "", 2097152); // Specify file size limit
```



#### upload_video($files, $destination, $file_name="", $max_size=0)
This method can be used to upload many format of video(s).

Accepted video format include mp2, mp4, avi, mov, mpa, mpe, mpeg, mpg, mpv2, qt, lsf, lsx, asf, asr, asx, movie

Both `$file_name` and `$max_size` are optional. However, if you wish to specify final name of file, insert your parameter in the third args space and if you wish to specify file size please do so by inserting the size limit as bytes in the fourth args space (e.g. 2MB is 2*1024*1024 bytes so you will input 2097152). 

Example Usage:

```php
FileHandler::upload_video($_FILES["vid_upload"], "myfiles/videos/"); // Saves file as random name and uses the file's extension.
// OR
FileHandler::upload_video($_FILES["vid_upload"], "myfiles/videos/", "video1.mp4"); // Specify file name
// OR
FileHandler::upload_video($_FILES["vid_upload"], "myfiles/videos/", "video1.mp4", 2097152); // Specify file size limit
// OR - to add size limit without specifying name, use empty string for the third parameter:
FileHandler::upload_video($_FILES["vid_upload"], "myfiles/videos/", "", 2097152); // Specify file size limit
```



#### upload_audio($files, $destination, $file_name="", $max_size=0)
This method can be used to upload many format of audio(s).

Accepted audio format include au, snd, mid, rmi, mp3, aif, aifc, aiff, m3u, ra, ram, wav

Both `$file_name` and `$max_size` are optional. However, if you wish to specify final name of file, insert your parameter in the third args space and if you wish to specify file size please do so by inserting the size limit as bytes in the fourth args space (e.g. 2MB is 2*1024*1024 bytes so you will input 2097152). 

Example Usage:

```php
FileHandler::upload_audio($_FILES["aud_upload"], "myfiles/audio/"); // Saves file as random name and uses the file's extension.
// OR
FileHandler::upload_audio($_FILES["aud_upload"], "myfiles/audio/", "audio1.mp3"); // Specify file name
// OR
FileHandler::upload_audio($_FILES["aud_upload"], "myfiles/audio/", "audio1.mp3", 2097152); // Specify file size limit
// OR - to add size limit without specifying name, use empty string for the third parameter:
FileHandler::upload_audio($_FILES["aud_upload"], "myfiles/audio/", "", 2097152); // Specify file size limit
```



#### upload_document($files, $destination, $file_name="", $max_size=0)
This method can be used to upload many document format.

Accepted document format include txt, doc, docx, xls, xlsx, ppt, pptx, rtf, pdf and Latex files

Both `$file_name` and `$max_size` are optional. However, if you wish to specify final name of file, insert your parameter in the third args space and if you wish to specify file size please do so by inserting the size limit as bytes in the fourth args space (e.g. 2MB is 2*1024*1024 bytes so you will input 2097152). 

Example Usage:

```php
FileHandler::upload_document($_FILES["doc_upload"], "myfiles/docs/"); // Saves file as random name and uses the file's extension.
// OR
FileHandler::upload_document($_FILES["doc_upload"], "myfiles/docs/", "DOC_123232.pdf"); // Specify file name
// OR
FileHandler::upload_document($_FILES["doc_upload"], "myfiles/docs/", "DOC_123232.pdf", 2097152); // Specify file size limit
// OR - to add size limit without specifying name, use empty string for the third parameter:
FileHandler::upload_document($_FILES["doc_upload"], "myfiles/docs/", "", 2097152); // Specify file size limit
```



#### upload_compressed($files, $destination, $file_name="", $max_size=0)
This method can be used to upload many compressed files types.

Accepted compressed file format include zip, rar, gz, z, gtar, tgz

Both `$file_name` and `$max_size` are optional. However, if you wish to specify final name of file, insert your parameter in the third args space and if you wish to specify file size please do so by inserting the size limit as bytes in the fourth args space (e.g. 2MB is 2*1024*1024 bytes so you will input 2097152). 

Example Usage:

```php
FileHandler::upload_compressed($_FILES["archive_upload"], "myfiles/compressed/"); // Saves file as random name and uses the file's extension.
// OR
FileHandler::upload_compressed($_FILES["archive_upload"], "myfiles/compressed/", "my_archive.rar"); // Specify file name
// OR
FileHandler::upload_compressed($_FILES["archive_upload"], "myfiles/compressed/", "my_archive.rar", 2097152); // Specify file size limit
// OR - to add size limit without specifying name, use empty string for the third parameter:
FileHandler::upload_compressed($_FILES["archive_upload"], "myfiles/compressed/", "", 2097152); // Specify file size limit
```



## Legacy Method(s)
#### __upload($files, $destination, $constraints=[])
__upload method takes in three arguments.

1) $files _(required)_ - this contains the file element comming straight from $_FILES["input_name"] in html tag `<input type="file" name="input_name[]" multiple>`

2) $destination _(required)_ - this is the path to the folder where the file is saved. [NOTE: this should not be url link.] example: "../images/dp/" or "../images/dp"

3) $constraints _(optional)_ - this is the constraints required for file to be uploaded based on your requirements. This is an associative array in which any key - value pair can be ignored.
	constraint keys: 
	- **size_limit**: this is the limit of the file in bytes. [size limit for 100kb is 100*1024 = 102400]
	- **accepted_format**: this is an array of accepted file types [some accepted format for images are ["image/jpeg", "image/png", "image/gif"]];
	- **extension**: this is the string of the final file extension to be saved as.
	- **file_name**: this is the static name of the file to be saved. [NOTE: ONLY USEFUL WHEN FILE UPLOADED IS ONE]
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

//Require "vendor/autoload" OR "<your_library_path>/FileHandler/src/FileHandler.php" before using namespace.

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



## FAQ

#### Why am I getting response **"File upload failed?"**
If this message persist, you might have exceeded the upload size limit of your php.ini file. You need to increase it or insert the code below to your HTACCESS file.

```htaccess
php_value upload_max_filesize 100M
php_value post_max_size 102M
```

Or go to the following line in php.ini file and edit to suit your need.

```ini
; Maximum allowed size for uploaded files.
upload_max_filesize = 100M

; Must be greater than or equal to upload_max_filesize
post_max_size = 102M
```

## Contributing
If you're interested in contributing to this project, you can check out the issues to know what is being requested by the users of this project. 

However, if you're bringing on a new idea, you can mail me at okjool2012@gmail.com to discuss it with me. Thanks
