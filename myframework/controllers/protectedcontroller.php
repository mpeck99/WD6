<?
class protectedcontroller extends AppController{
    public function __construct(){
        if(@$_SESSION["loggedin"]&& @$_SESSION["loggedin"]==1){
           
        }
        else{
            header("Location:/mycontroller");
        }
    }
    public function index(){

        $this->getView("header",array("pagename"=>"mycontoller"));
        echo "This is a protected area";
    }
}

?>