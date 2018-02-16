<div class="container">
    <div class="row panel">
        <div class="col-md-12 col-xs-12">
            <img src="" class="img-thumbnail picture hidden-xs"/><br>
            <form action="/profile/update" method="POST" enctype="multipart/form-data">
                <label class="btn btn-default btn-file" style="width:110px;">Browse
                <input name="img" type="file" style="display:none;">
                </label>
                <input type="submit" value="Update" class="btn btn-primary">
            </form>
        <div class="header">
            <h1>
            <?
                if($_SESSION["profileName"]=="Mike@aol.com"){
                echo "Mike";
                }
                if($_SESSION["profileName"]=='Joe@aol.com'){
                echo "Joe";
                }?>
            </h1>
            <span>
                <?
                $desc=$_SESSION["userInfo"]; 
                echo $desc;                
                ?>
            </span>
        </div>
        </div>
    </div>
</div>