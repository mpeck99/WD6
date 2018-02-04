
<html>
<head>
<style>
body{
    margin-left: 0;
    background: #8E8C8C;
}
ul{
  list-style-type:none;
  justify-content:center;
}
li{
    display:inline;
    margin: 10px;
}
footer{
    position:absolute;
    bottom: 0;
    height: 60px;
    width: 100%;
    margin-left: 0;
    background: #4286f4;
} 
footer p{
    width: 100%;
}
</style>
</head>
<body>
<header>
<nav>
<ul>
<?
$menu=unserialize($data);
foreach($menu as $items){
    echo "<li><a href=#>".$items."</a></li>";
}
?>
</ul>
</nav>
</header>
<h1>Hello World</h1>
<p>This is the body of my php file </p>
<footer>
    <p>
        Morgan Peck Server Side Languages 2018
    <p>
</footer>
</body>
</html>