<?php
$xml = new XMLWriter();
$xml->openURI("php://output");
$xml->startDocument();
$xml->setIndent(true);
// create node
$xml->startElement("Customers");
// write data 
$xml->writeElement("id", "1");
// 
$xml->endElement();
// set Header
header('Content-type: text/xml');
$xml->flush();
?>