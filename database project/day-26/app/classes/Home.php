<?php


namespace App\classes;
//use App\classes\Database;

class Home
{
   // public $database;
    public function index()
    {
      //  $this->database = new Database();
      //  $this->database->dbConnect();


       header( "Location:action.php?page=home");
    }

}