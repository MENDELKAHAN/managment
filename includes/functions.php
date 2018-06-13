<?php

    function __autoload($class_name){
        $class_name = strtolower($class_name);
        $path       = CLASS_PATH . DS . "{$class_name}.php";
        if (file_exists($path)) {
            require_once($path);
        } else {
            die("The file {$class_name}.php could not be found.");
        }
    }

    // calls the header function 
    function redirect_to($location = NULL){
        if ($location != NULL) {
            header("Location: {$location}");
            exit;
        }
    }

    // resizes an image
    // takes 3 parems
    // 1 $locaion to save
    // 2 max size aloud for image 
    // 3 current image loction
    function resize($save_location, $large_image_size, $img){
        header('Content-type: image/jpeg');
        
        $details = getimagesize($img);
        if ($details !== false) {
            $src    = imagecreatefromjpeg($img);
            $width  = $details[0];
            $height = $details[1];
            
            if ($height > $large_image_size || $width > $large_image_size) {
                if ($height > $width) {
                    $resize_percent = $height / $large_image_size;
                    $new_height     = $large_image_size;
                    $new_width      = $width / $resize_percent;
                } elseif ($height < $width) {
                    $resize_percent = $width / $large_image_size;
                    $new_width      = $large_image_size;
                    $new_height     = $height / $resize_percent;
                } else {
                    $new_width  = $large_image_size;
                    $new_height = $large_image_size;
                }
                
            } else {
                if (move_uploaded_file($img, $save_location)) {
                    return (true);
                } else {
                    return (false);
                }
            }
            
            $new = imagecreatetruecolor($new_width, $new_height);
            imagecopyresampled($new, $src, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
            imagejpeg($new, $save_location, 90); // Save in images dir
            imagedestroy($src);
            imagedestroy($new);
            return (true);
        } else { // test image
            return (false);
        }
    }


?>