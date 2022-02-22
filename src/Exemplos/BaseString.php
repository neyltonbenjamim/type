<?php
require "../../vendor/autoload.php";

use Type\Nome;

$base = new Nome('neylton Benjamim dos anjos');


echo "<p><b>Original:</b> {$base->getString()}</p>";
echo "<p><b>Upper:</b> {$base->upper()}</p>";
echo "<p><b>Lower:</b> {$base->lower()}</p>";
echo "<p><b>UC First:</b> {$base->ucfirst()}</p>";
echo "<p><b>UC Words:</b> {$base->ucwords()}</p>";
