<?php
/**
 * Created by PhpStorm.
 * User: Carlijn
 * Date: 07/06/2018
 * Time: 08:44
 */

print_r($_POST['apen']);

foreach ($_POST['apen'] as $aap){
    echo "<img src='img/apen/".$aap.".jpg'>";
}
