<?php

$EMAIL_ID = 123456789; // 9-digit integer value (i.e., 123456789)
$API_KEY = "ab123456"; // API key (string) provided by Open Movie DataBase (i.e., "ab123456")

session_start(); // Connect to the existing session

require_once '/home/common/php/dbInterface.php'; // Add database functionality
require_once '/home/common/php/mail.php'; // Add email functionality
require_once '/home/common/php/p4Functions.php'; // Add Project 4 base functions

processPageRequest(); // Call the processPageRequest() function

// DO NOT REMOVE OR MODIFY THE CODE OR PLACE YOUR CODE ABOVE THIS LINE

function addMovieToCart($imdbID)
{	
	
}

function displayCart()
{
	
}

function processPageRequest()
{
	
}

function removeMovieFromCart($movieID)
{	
	
}

?>