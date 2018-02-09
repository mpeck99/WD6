<?

class mycontroller extends AppController{
    public function __construct(){
     
    }
    public function index(){
        $links = array("1"=>array("title"=>"Full Sail University","url"=>"https://www.fullsail.edu"),"2"=>array("title"=>"Portfolio","url"=>"https://mpeck99.github.io/Portfolio/"),"3"=>array("title"=>"MovieGo Project","url"=>"https://https://mpeck99.github.io"));
        $dropDownLinks=serialize($links);
        $this->getView("header",array("pagename"=>"home"),$dropDownLinks);
        $this->getView("body");
        $this->getView("footer"); 
    } 
    public function contact(){
     
        $links = array("1"=>array("title"=>"Full Sail University","url"=>"https://www.fullsail.edu"),"2"=>array("title"=>"Portfolio","url"=>"https://mpeck99.github.io/Portfolio/"),"3"=>array("title"=>"MovieGo Project","url"=>"https://https://mpeck99.github.io"));
        $dropDownLinks=serialize($links);

        $this->getView("header",array("pagename"=>"contact"),$dropDownLinks);
        $this->getView("contact");
        $this->getView("footer"); 
    }
    //will get all the contact form
    public function contactRecv(){

        $links = array("1"=>array("title"=>"Full Sail University","url"=>"https://www.fullsail.edu"),"2"=>array("title"=>"Portfolio","url"=>"https://mpeck99.github.io/Portfolio/"),"3"=>array("title"=>"MovieGo Project","url"=>"https://https://mpeck99.github.io"));
        $dropDownLinks=serialize($links);
        $this->getView("header",$dropDownLinks);
        if(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
            echo 'email invalid';
        }
        else{
            echo "valid";
        }
        if(!preg_match("/^[a-zA-Z]*$/",$_POST["password"])){
            echo "Select different password";
        }
    }
    public function ajaxPars(){
        if(@$_REQUEST["email"]=="mlpeck@fullsail.edu"){
           echo "welcome"; 
        }
        else{
        echo "bad login";}
    }
}
?>