<?php
    if(isset($_POST['url'])){
        //set url
        $url = $_POST['url'];

        //get id
        function GetYouTubeId($url){
            preg_match("#(?<=v=)[a-zA-Z0-9-]+(?=&)|(?<=v\/)[^&\n]+|(?<=v=)[^&\n]+|(?<=youtu.be/)[^&\n]+#", $url, $matches);
            if(isset($matches[0])){
                return $matches[0];
            }else{
                return false;
            }
        }
        //make download button
        function GetDownloadButton($url, $format){
            echo '<iframe style="width:100%;min-width:200px;height:57px;border:0;overflow:hidden;" scrolling="no" src="https://yt-mp3s.me/' . $format . '/'. $url .'"></iframe>';
        }

        $url = GetYouTubeId($url);

        if(!$url){
            echo 'Url Not Found';
        }else{
            GetDownloadButton($url, 'mp3');
            GetDownloadButton($url, 'mp4');
        }
    }
?>