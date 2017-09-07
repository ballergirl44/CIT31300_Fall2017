<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
require('includes/header.inc.html');
function tell_me_switch($data) {

    $retval = "<ul>";
    foreach($data as $key=>$item) {
        switch($key) {
            case 'color':
                $retval .= "<li>My favorite color is: $item</li>";
                break;

            case 'movie':
                $retval .="<li>My favorite movie is: $item</li>";
                break;

            case 'book':
                $retval .="<li>My favorite book is: $item</li>";
                break;

            case 'website':
                $retval .="<li>My favorite website is: $item</li>";
                break;



        }
    }
    $retval .= "</ul>";
    return $retval;
}
function tell_me_if($data) {

    $retval = "<ul>";
    foreach($data as $key=>$item) {
        if($key != 'name') {
            $retval .= "<li>My favorite $key is: $item</li>";
        }

    }
    $retval .= "</ul>";
    return $retval;
}
$myArray = array('name' => 'Laurie Spencer', 'color' => 'Pink', 'movie' => 'A Dogs Purpose', 'book' => 'The Coldest Winter Ever', 'website' => 'http://justice4lucci.org');
$myName = $myArray['name'];
echo "<h1>$myName</h1>";

echo $myData;
$myData = tell_me_if($myArray);
echo $myData;

require('includes/footer.inc.html');
?>
/**
 * Created by PhpStorm.
 * User: Laurie Spencer
 * Date: 9/2/2017
 * Time: 10:57 AM
 */