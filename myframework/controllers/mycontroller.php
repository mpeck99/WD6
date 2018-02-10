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
    public function login(){
        $links = array("1"=>array("title"=>"Full Sail University","url"=>"https://www.fullsail.edu"),"2"=>array("title"=>"Portfolio","url"=>"https://mpeck99.github.io/Portfolio/"),"3"=>array("title"=>"MovieGo Project","url"=>"https://https://mpeck99.github.io"));
        $dropDownLinks=serialize($links);

        $this->getView("header",array("pagename"=>"login"),$dropDownLinks);
        $this->getView("login");
        $this->getView("footer"); 
    }
    public function about(){
        $links = array("1"=>array("title"=>"Full Sail University","url"=>"https://www.fullsail.edu"),"2"=>array("title"=>"Portfolio","url"=>"https://mpeck99.github.io/Portfolio/"),"3"=>array("title"=>"MovieGo Project","url"=>"https://https://mpeck99.github.io"));
        $dropDownLinks=serialize($links);
        $this->getView("header",array("pagename"=>"about"),$dropDownLinks);
        $this->getView("about");
        $this->getView("footer"); 
    }
    //will get all the contact form
    public function contactRecv(){

        $links = array("1"=>array("title"=>"Full Sail University","url"=>"https://www.fullsail.edu"),"2"=>array("title"=>"Portfolio","url"=>"https://mpeck99.github.io/Portfolio/"),"3"=>array("title"=>"MovieGo Project","url"=>"https://https://mpeck99.github.io"));
        $dropDownLinks=serialize($links);
        $this->getView("header",$dropDownLinks);
       
    }
    public function loginRecv(){
        $links = array("1"=>array("title"=>"Full Sail University","url"=>"https://www.fullsail.edu"),"2"=>array("title"=>"Portfolio","url"=>"https://mpeck99.github.io/Portfolio/"),"3"=>array("title"=>"MovieGo Project","url"=>"https://https://mpeck99.github.io"));
        $dropDownLinks=serialize($links);
        $this->getView("header",$dropDownLinks);
        $this->getView("login");
    }
    public function ajaxPars(){


        if(!filter_var(@$_REQUEST["email"],FILTER_VALIDATE_EMAIL)||!preg_match("/^[a-zA-Z]*$/",
        empty(@$_REQUEST["password"])|| @$_REQUEST["textBox"]!="")){
            echo "invalid";
        }
        else{
            echo 'success';
        }

        
    }
    public function loginCheck(){

        if(!filter_var(@$_REQUEST["loginEmail"],FILTER_VALIDATE_EMAIL)){
            echo "login invalid";
        }
        else{
            echo 'success';
        }

        
    }
}
?>