<?php
include_once("connection.php");
include_once("Models/Members.class.php");
include_once("Models/Partai.class.php");
include_once("Views/Members.views.php");

class MembersController {
  private $members;
  private $partai;


  function __construct(){
    $this->members = new Members(connection::$db_host, connection::$db_user, connection::$db_pass, connection::$db_name);
    $this->partai = new Partai(connection::$db_host, connection::$db_user, connection::$db_pass, connection::$db_name);
  }

  public function index() {
    $this->members->open();
    $this->members->getMembers();
    $data = array();
    while($row = $this->members->getResult()){
      array_push($data, $row);
    }

    $this->members->close();

    $view = new MembersView();
    $view->render($data);
  }

  public function detailPartai() {
    $this->partai->open();
    $this->partai->getPartai();
    $data = array();
    while($row = $this->partai->getResult()){
        array_push($data, $row);
    }
    $this->partai->close();

    $view = new MembersView();
    $view->optionForm($data);
}

  public function detail($id) {
    $this->members->open();
    $this->partai->open();
    $this->members->getMembersDetail($id);
    $this->partai->getPartai();
    $data = array(
        'members' => array(),
        'partai' => array(),
    );
    while($row = $this->members->getResult()){
        array_push($data['members'], $row);
    }
    while($row = $this->partai->getResult()){
        array_push($data['partai'], $row);
    }
    $this->members->close();
    $this->partai->close();
    $view = new MembersView();
    $view->renderUpdate($data);
}

  
  function add($data){
    $this->members->open();
    $this->members->add($data);
    $this->members->close();
    
    header("location:index.php");
  }

  function edit($id){
    $this->members->open();
    $this->members->update($id);
    $this->members->close();
    
    header("location:index.php");
  }

  function delete($id){
    $this->members->open();
    $this->members->delete($id);
    $this->members->close();
    
    header("location:index.php");
  }


}