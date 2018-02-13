<?
    class auth extends AppController{
        public function __construct(){

        }

        public function login(){
        if($_REQUEST["username"] && $_REQUEST["password"]){
            if($_REQUEST["username"]=="mopeck99@gmail.com"&&$_REQUEST["password"]=="password"){
                
                $_SESSION["loggedin"]=1;

                header("location:/mycontroller");
            }
            else{
                header("Location:/mycontroller?msg=Bag Login");
            }
        }else{
            header("Location:/mycontroller?msg=Bag Login");
        }
        }
        public function logout(){
           session_destroy();
           header("Location:/mycontroller");
        }
    }

?>