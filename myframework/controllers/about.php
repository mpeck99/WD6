<?
error_reporting(E_ERROR | E_PARSE);
class about extends AppController{
    public function __construct($parent){
        $this->parent=$parent;
    }
    public function index(){
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
        $this->showList();
        $this->getView("addform",$data);
        $this->getView("footer");
    }
    public function addItem(){
        $this->parent->getModel("fruits")->add("insert into fruit_table (name) values (:name)",array(":name"=>$_REQUEST["name"]));
        header("Location:/about");
    }
    public function deleteItem(){
        $id=$_REQUEST["id"];
        $this->parent->getModel("fruits")->delete("DELETE from fruits.fruit_table where fruit_table.id=(:id)",array(":id"=>$_REQUEST["id"]));
       header("Location:/about");
    }
    public function updateForm(){
        $this->getView('header',array("pagename"=>"about"));
        $this->showList();
        $this->getView("update",$data);
        $this->getView("footer");
    }
    public function edit(){
        print_r($id);
        $this->parent->getModel("fruits")->update("UPDATE fruits.fruit_table SET fruit_table.name=(:name) where fruits_table.id(:id)",array(":name"=>$_REQUEST["name"],":id"=>$_REQUEST["id"]));
        header("Location:/about");
    }
}?>