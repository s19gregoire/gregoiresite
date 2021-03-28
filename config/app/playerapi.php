
<?php
ini_set("display_errors", 1);
use Phpml\Math\Statistic\Mean;
require 'predict/vendor/autoload.php';
$datasheet = array(
    "history" => "1",
    "film" => "2",
    "series" => "3"
);
// predict the user search width the most value search in engine, minimum 5 value will be send
$userprediction = [1, 3, 2, 3, 3, 1, 1, 1, 1, 2, 2];
var_dump(Mean::mode($userprediction));