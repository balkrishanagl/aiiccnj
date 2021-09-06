<?php 



    $baseUrl = 'https://www.googleapis.com/youtube/v3/';
    // https://developers.google.com/youtube/v3/getting-started
    $apiKey = 'AIzaSyC5NvlviMjpBJmtREuntDecnebcHSpFEBg';
    // If you don't know the channel ID see below
    $channelId = 'UCwUn4KW0w8_0PG7gwhgKzhA';

    $params = [
        'id'=> $channelId,
        'part'=> 'contentDetails',
        'key'=> $apiKey
    ];
    $url = $baseUrl . 'channels?' . http_build_query($params);
    $json = json_decode(file_get_contents($url), true);
//echo "<pre>" ; print_R($json); die;
    $playlist = 'PLHfCvJnDwnCyylMhvRo6p3RlgEEnNqErG';

    $params = [
        'part'=> 'snippet',
        'playlistId' => $playlist,
        'maxResults'=> '4',
        'key'=> $apiKey
    ];
    $url = $baseUrl . 'playlistItems?' . http_build_query($params);
    $json = json_decode(file_get_contents($url), true);
echo "<pre>" ; print_R($json); die;
    $videos = array();
    foreach($json['items'] as $video){
        $videos['video'] = $video['snippet']['resourceId']['videoId'];
        $videos['thumbnail'] = $video['snippet']['thumbnails']['medium']['url'];
	}
	echo "<pre>" ;
    print_r($videos);
