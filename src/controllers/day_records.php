<?php
session_start();
requireValidSession();

$date = (new Datetime())->getTimestamp();
$today = ucfirst(strftime('%B, %d de %Y', $date));

loadTemplateView('day_records', ['today' => $today]);