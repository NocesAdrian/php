To call a static method from a child class, use the parent keyword inside the child class. Here, the static method can be public or protected.

Example
<?php
class domain {
  protected static function getWebsiteName() {
    return "W3Schools.com";
  }
}

class domainW3 extends domain {
  public $websiteName;
  public function __construct() {
    $this->websiteName = parent::getWebsiteName();// accessing parent method directly callling it without making objects 
  }
}

$domainW3 = new domainW3;
echo $domainW3 -> websiteName;
?>