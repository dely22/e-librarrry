<?php
require_once 'controller.php';
class Home extends Controller
{

    function __construct()
    {
        echo "";
    }

    function index()
    {

        $this->view("home");
    }
}
