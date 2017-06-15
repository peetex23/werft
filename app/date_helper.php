<?php
use Carbon\Carbon;

function formatFromDB($date){
	$new_date = Carbon::parse($date);
	return $new_date->format('d-M-Y');
}
?>