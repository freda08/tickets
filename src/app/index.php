<?php

require __DIR__ . '/../vendor/autoload.php';
    // header("Access-Control-Allow-Origin: *");
    // header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
    use app\Ticket;

    use app\db\Connection;
    $ticket = new Ticket();
    $ticket->save();

    // function getCurrentUrl() {
    //     return $_SERVER;
    // }
    
    // $current = getCurrentUrl();
    // echo $current;

    echo json_encode(["message" => "ok"]);

    // echo '<pre>';
    // var_dump($todo);
    // echo '</pre>';

?>