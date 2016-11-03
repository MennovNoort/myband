<?php

$result = $mysqli->query("SELECT * FROM nieuws");

$result = convertResultsToArray($result);