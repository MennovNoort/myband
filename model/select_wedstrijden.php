<?php

$result = $mysqli->query("SELECT * FROM wedstrijden");

$result = convertResultsToArray($result);