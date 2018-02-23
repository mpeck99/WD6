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
        // Warn if the API key isn't changed.
        if (strpos($apiKey, "<") !== false) {
          echo missingApiKeyWarning();
          exit;
        }
        $client->setDeveloperKey($apiKey);
        $service = new Google_Service_Books($client);
        $optParams = array("filter"=>"free-ebooks");
        /*$client->setDefer(true);
        $optParams = array('filter' => 'free-ebooks');
        $request = $service->volumes->listVolumes('Henry David Thoreau', $optParams);*/
        $request = $service->volumes->listsVolumes("Henry David Thoreau",$optParams);
       // var_dump($request);
       // $resultsDeferred = $client->execute($request);
        
       //return $request;
    }
}
?>