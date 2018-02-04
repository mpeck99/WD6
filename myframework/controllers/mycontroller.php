<?
class mycontroller extends AppController{
    public function __construct(){
        $menuItems = array("home"=>"Home","about"=>"About","contact"=>"Contact");
        $data=serialize($menuItems);
        $this->getView("navigation",$data);

        //$this->getView("welcome"); 
}

}
?>