<?php
class Rss_model extends CI_Model {

        public function get_rss()
        {
        	$request= 'http://www.smashingmagazine.com/feed/';
            $response= file_get_contents($request);
            $xml= new SimpleXMLElement($response);
            return $xml;
        }

      
}#end of the rss model

