<div class="container">
<div class="starter-template">
<a href="/about/addform">Add New</a>
<?foreach($data as $fruit){echo $fruit["name"]."<a href='/about/edit/".$fruit["id"]."'>Edit</a><br>";}?>
</div>
</div>