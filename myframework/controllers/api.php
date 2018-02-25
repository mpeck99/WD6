<?
class api extends AppController{
    public function __construct($parent){
        $this->parent=$parent;
    }
    public function showApi(){
        $this->getView("header",array("pagename"=>"api"));
        $data= $this->parent->getModel("apiModel")->googleBooks($_SESSION["book"]);
        $this->getView("api",$data);
        $this->getView("footer");
    }
    public function searchYoutube(){
        $this->getView("header",array("pagename"=>"api"));
        $data= $this->parent->getModel("apiModel")->searchYoutube();
        $this->getView("api",$data);
        $this->getView("footer");
    }
}
?>