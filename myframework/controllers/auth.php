<?
    class auth extends AppController{
        public function __construct(){
        
        }
        public function login(){
        if($_REQUEST["username"] && $_REQUEST["password"]){
            $file="assets/info.txt";
            $fileContents=file_get_contents($file);
            $fileContents=explode("\n",$fileContents);
            foreach($fileContents as $info){
                $userInfo=explode("|",$info);
                $userName=$userInfo[0];
                $passwordInput=$userInfo[1];
                $userDesc=$userInfo[2];
                if($_REQUEST["username"]==$userName&&$_REQUEST["password"]==$passwordInput){
                $_SESSION["loggedin"]=1;
                $_SESSION["profileName"]=$userName;
                $_SESSION["userInfo"]=$userDesc;
                header("location:/mycontroller");
            }
            else{
                header("Location:/mycontroller?msg=Bad Login");
            }
        }}else{
            header("Location:/mycontroller?msg=Bad Login");
        }
        $this->load->view('profile',$userData);
        }
        public function logout(){
           session_destroy();
           header("Location:/mycontroller");
        }
    }

?>