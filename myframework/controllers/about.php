<?
class about extends AppController{
    public function __construct($parent){
        $this->parent=$parent;
        $this->showList();
    }
    public function showList(){
        $data=$this->parent->getModel("fruits")->select(
            "select * from fruit_table");
        $this->getView('header',array("pagename"=>"about"));
        $this->getView("about",$data);
        $this->getView("footer");
    }
    public function addForm(){
        $this->getView('header',array("pagename"=>"about"));
        $this->getView("addform",$data);
        $this->getView("footer");
    }
    public function addItem(){
        var_dump($_REQUEST);
        $this->parent->getModel("fruits")->add("insert into fruit_table (name) values (:name)",array(":name"=>$_REQUEST["name"]));
        header("Location:/about");
    }
}

?>