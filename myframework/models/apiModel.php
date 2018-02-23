<?
require_once './google-api-php-client/src/Google/autoload.php';
class apiModel{
    public function __construct($parent){
        $this->db=$parent->db;
    }
    public function googleBooks($term=''){
        $client = new Google_Client();
        $client->setApplicationName("sslapi");
        $apiKey = "AIzaSyDSaR6QLqqchlSk_Uchg76p-MTemL0ovFc";// Change this line.
        $client->setDeveloperKey($apiKey);
        $service = new Google_Service_Books($client);
        $optParams = array("filter"=>"free-ebooks");
        $request = $service->volumes->listVolumes("Henry David Thoreau",$optParams);
       return $request;
    }
}
?>