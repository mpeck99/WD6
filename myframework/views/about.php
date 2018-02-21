<div class="container">
<div class="starter-template">
<a href="/about/addform">Add New</a><br>
<?foreach($data as $fruit){echo $fruit["name"]." <a href='/about/updateForm/?id=".$fruit["id"]."'>Edit</a><a href='about/deleteItem/?id=".$fruit["id"]."'>Delete</a><br>";}?>
</div>
</div>