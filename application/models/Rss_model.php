<?php
/**
* Rss_model.php   model for a generic Customer
*
* Used to show how to do CRUD in CodeIgnitor
*
* @package ITC 260 CodeIgnitor - Gig Central
* @subpackage CONTROLLER
* @author Patricia Barker <patriciabethbarker@gmail.com>
* @version 1.0 2015/05/26
* @link http://www.tcbcommercialproperties.com/sandbox/ci/
* @license http://www.apache.org/licenses/LICENSE-2.0
* @see controllers/Rss.php
* @see views/rss/index.php
* @see index.php
* @todo none  
*/

/**
 * Rss model for our Gig Central Project
 *
 * @see Rss_model
 * @todo none
 */

class Rss_model extends CI_Model {
    public function get_stories()
    {
      $data = [];
      //returns a string
      $rawFile = file_get_contents('http://news.google.com/?output=rss');
      //must be used to parse string to xml object
      $xml = simplexml_load_string($rawFile);
      //assigns xml object for each item to array item
      foreach ($xml->channel->item as $story) {
          $data["newsItem"][] = $story;
      }
      //returns whole array
      return $data;
    }//end get_stories() method
}//end Rss_model
