<?php

$result = $mysqli->query("SELECT * FROM posts");

$result = convertResultsToArray($result);