<?

class mycontroller extends AppController{
    public function __construct(){
        $menuItems = array("1"=>array("title"=>"Home","url"=>"./views/navigation.php"),"2"=>array("title"=>"About","url"=>"./views/about.php"),"3"=>array("title"=>"Contact","url"=>'./views/contact.php')); 
        $links = array("1"=>array("title"=>"Full Sail University","url"=>"https://www.fullsail.edu"),"2"=>array("title"=>"Portfolio","url"=>"https://mpeck99.github.io/Portfolio/"),"3"=>array("title"=>"MovieGo Project","url"=>"https://https://mpeck99.github.io"));
        $data=serialize($links);
        $menu=serialize($menuItems);
        $this->getView("navigation",$data,$menu);
        $this->getView("header",$data);
        $this->getView("footer",$data); 
}

}
?>