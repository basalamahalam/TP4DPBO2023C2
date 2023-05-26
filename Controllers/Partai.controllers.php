<?php
include_once("connection.php");
include_once("Models/Partai.class.php");
include_once("Views/Partai.views.php");

class PartaiController {
  private $partai;

  function __construct(){
    $this->partai = new Partai(Connection::$db_host, Connection::$db_user, Connection::$db_pass, Connection::$db_name);
  }

  public function index() {
    $this->partai->open();
    $this->partai->getPartai();
    $data = array();
    while($row = $this->partai->getResult()){
      array_push($data, $row);
    }

    $this->partai->close();

    $view = new PartaiView();
    $view->render($data);
  }

  public function detail($id) {
    $this->partai->open();
    $this->partai->getPartaiDetail($id);
    $data = array();
    while($row = $this->partai->getResult()){
        array_push($data, $row);
    }
    $this->partai->close();
    $view = new PartaiView();
    $view->renderUpdate($data);
   }
  
  function add($data){
    $this->partai->open();
    $this->partai->add($data);
    $this->partai->close();
    
    header("location:partai.php");
  }

  function edit($id){
    $this->partai->open();
    $this->partai->update($id);
    $this->partai->close();
    
    header("location:partai.php");
  }

  function delete($id){
    $this->partai->open();
    $this->partai->delete($id);
    $this->partai->close();
    
    header("location:partai.php");
  }


}