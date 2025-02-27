<?php
include_once "components/functions.php";
include_once "components/templates.php";

$output = [];

$data = json_decode(file_get_contents("php://input"));

//print_p($data);

switch ($data->type) {

    case "products_all":
        $output['result'] = makeQuery(makeConn(), "SELECT * FROM `products` ORDER BY `date_added` DESC LIMIT 12");
        break;

    default:
        $output['error'] = "No Valid Type";
}
echo json_encode($output, JSON_NUMERIC_CHECK | JSON_UNESCAPED_UNICODE);
