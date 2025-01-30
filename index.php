<?php
session_start();

class Core
{
    public function callPage()
    {
        if (!isset($_SESSION['connect'])) {
            $this->showConnect();
        } else {
            $this->showSearch();
        }
    }

    private function showConnect()
    {
        header("location: Views/LoginView.php");
    }

    private function showSearch()
    {
        header("location: Views/RegisterView.php");
    }
}

$redirection = new Core();
$redirection->callPage();

class ConnectController
{
   public function checkConnection()
   {
   }
}
$index = new ConnectController();
$index->checkConnection();
