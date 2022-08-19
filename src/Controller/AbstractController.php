<?php

namespace App\Controller;

abstract class AbstractController
{
    public function render($view_path, $data = [])
    {
        extract($data);
        include_once __DIR__.'/../View/'.$view_path;
    }

    public function sendJson($data)
    {
        header('Content-Type: application/json');
        echo json_encode($data);
        exit;
    }
}