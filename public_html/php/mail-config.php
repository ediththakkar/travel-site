<?php
/**
 * mail-config.php
 * This file contains your reCAPTCHA API keys and your recipient's email addresses.
 *
 * @param string $siteKey your public reCAPTCHA API key
 * @param string $secret your secret reCAPTCHA API key
 * @param array $MAIL_RECIPIENTS array of email addresses and corresponding recipient names to send form responses to
 *
 * @author  Edith Thakkar <egarcia262@cnm.edu
 * @author Rochelle Lewis <rlewis37@cnm.edu>
 *
 * This file contains sensitive information and should ALWAYS be gitignored!
 **/

// your Google reCAPTCHA keys here
$siteKey = '6Lenq1sUAAAAAIX3drXmxeD6xRdyCn3NZextzU0P';
$secret = '6Lenq1sUAAAAAAC-NAns-vucsu-E6V07abxaHuvB';

/**
 * attach the recipients to the message
 * notice this an array that can include or omit the the recipient's real name
 * use the recipients' real name where possible; this reduces the probability of the Email being marked as spam
 **/
$MAIL_RECIPIENTS = ["ediththakkar@gmail.com" => "Edith Thakkar"];

