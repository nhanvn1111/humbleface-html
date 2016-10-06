<?php ob_start();

/**
 * Spelloveryou Web Solutions
 *
 * @package      Facebook Class to detect Fan
 * @FileName     class.soy.detectfan.php
 * @Purpose      Main Class to detect Fan
 * @author       Vinay Choudhary <spelloveryou.com/profile>
 * @company      Spelloveryou Web Solutions
 * @param        None
 * @Location     Login2buy.com/demo/..
 */
 
 
class MyFanz
{
    private $config = array();
    public function __construct()
    {
        include_once "config.php";
        // global $config;
        //print_r($config);echo $config['appid'];
        $this->config = $config;
    }
    public function isfan()
    {
        include_once "facebook.php";
        $facebook = new Facebook(array('appId' => $this->config['appid'], 'secret' => $this->config['secret'],
            'cookie' => true, ));
        
        $data = $facebook->getSignedRequest();
        $liked = $data['page']['liked'];
        //echo $fbUserId;
        if ($liked == "1")
        {
            return true;
        } else
        {
            return false;
        }
    }
    
    public function info()
    {
         include_once "facebook.php";
        $facebook = new Facebook(array('appId' => $this->config['appid'], 'secret' => $this->config['secret'],
            'cookie' => true, ));
        $data = $facebook->getSignedRequest();
        //print_r($data);
        
        $info["page_id"] = $data["page"]["id"];
        $info["page_admin"] = $data["page"]["admin"];
        $info["page_liked"] = $data["page"]["liked"];
        $user_country_code = $data["user"]["country"];
        
        $user_country_code = strtoupper($user_country_code);
        $info["user_country"] = $this->config["$user_country_code"];
        $info["user_lang"] = $data["user"]["locale"];
        
        
        return $info;
    }


}

?>