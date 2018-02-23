<div class="container">
    <?
        foreach($data as $item){
            echo $item["volumeInfo"]["title"]."<br />";
        }
    ?>
</div>