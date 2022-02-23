<?php
require "../../vendor/autoload.php";

use Type\BaseString;
use Type\Nome;

$nome = new Nome('neylton Benjamim dos anjos éstá');


echo "<p><b>Original:</b> {$nome->getString()}</p>";
echo "<p><b>Upper:</b> {$nome->upper()}</p>";
echo "<p><b>Lower:</b> {$nome->lower()}</p>";
echo "<p><b>UC First:</b> {$nome->ucfirst()}</p>";
echo "<p><b>UC Words:</b> {$nome->ucwords()}</p>";
echo '<hr>';

echo 'COM CONST: ....<br>';

$nome = new Nome('neylton benjamim');
echo "<p><b>Original:</b> {$nome}</p>";

$nome = new Nome('neylton benjamim', BaseString::UPPER);
echo "<p><b>Upper:</b> {$nome}</p>";

$nome = new Nome('neylton benjamim', BaseString::LOWER);
echo "<p><b>Lower:</b> {$nome}</p>";

$nome = new Nome('neylton benjamim', BaseString::UC_FIRST);
echo "<p><b>UC First:</b> {$nome}</p>";

$nome = new Nome('neylton benjamim dos anjos éstá', BaseString::UC_WORDS);
echo "<p><b>UC Words:</b> {$nome}</p>";
