<?php

const API_KEY = "0a1b4dca2a882c26f251a1812443cd45";

function fetchEvents()
{
	$xmlFileData = @file_get_contents("http://ws.audioscrobbler.com/2.0/?method=user.getevents&user=jondoe1988&api_key=".API_KEY);
	echo API_KEY;
	$eventsXML = new SimpleXMLElement($xmlFileData);
	$events = $eventsXML->events;	
}

fetchEvents();

?>