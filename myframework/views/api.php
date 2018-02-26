<?error_reporting(E_ERROR | E_PARSE);?>
<!--Form to search for the video-->
<div class="container">
    <form method="GET" action="searchYoutube">
    Search Term: <input type="search" id="q" name="q" placeholder="Enter Search Term">
    Max Results: <input type="number" id="maxResults" name="maxResults" min="1" max="20" step="1" value="10">
  <input type="submit" value="Search">
</form>
    <?
    //Looping through the data that is passed into the view
    //var_dump($data);
       foreach ($data as $searchResult) {
           //setting a switch statment for the videos
        switch ($searchResult['id']['kind']) {
          case 'youtube#video':
          //putting the videos in a list
            $videos .= sprintf('<li>%s (%s)</li>',
                $searchResult['snippet']['title'], $searchResult['id']['videoId']);
            break;
            //case statment for the channel
          case 'youtube#channel':
          //puts the channesl in a list
            $channels .= sprintf('<li>%s (%s)</li>',
                $searchResult['snippet']['title'], $searchResult['id']['channelId']);
            break;
            //case for the playlists puts the playlists in a list
        case 'youtube#playlist':
            $playlists .= sprintf('<li>%s (%s)</li>',
                $searchResult['snippet']['title'], $searchResult['id']['playlistId']);
            break;
        }
      }
    ?>
    <!--Displaying data out to the user-->
    <h2>Videos</h2>
    <ul><? echo $videos ?></ul>
    <h2>Channels</h2>
    <ul><? echo $channels ?></ul>
    <h2>Playlists</h2>
    <ul><? echo $playlists ?></ul>
</div>
