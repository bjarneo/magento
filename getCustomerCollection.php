<?php
// Get customer model, run a query
$collection = Mage::getModel('customer/customer')->getCollection()->addAttributeToSelect('*');
$result = array();

// Get customer details. getName, getEmail so on.
foreach ($collection as $customer) {
    $result[] = array($customer->getEmail());
}

// Used if you need email as comma separated file. (Use the customer details as you wish, code beneath is just an example. You could just use the built in exporter.)
// output headers so that the file is downloaded rather than displayed
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=email_' . date("d.m.Y-H:i:s") . '.csv');

// create a file pointer connected to the output stream
$output = fopen('php://output', 'w');

foreach($result as $fields) {
    // output the column headings
    fputcsv($output, $fields);
}

?>