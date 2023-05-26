<?php
  class PartaiView{
    public function render($data){
      $no = 1;
      $datapartai = null;
      foreach($data as $val){
        list($id,$nama) = $val;
          $datapartai .= "<tr>
                  <td>" . $id . "</td>
                  <td>" . $nama . "</td>
                  <td>
                    <a href='partai.php?id_edit=" . $id . "' class='btn btn-success''>Edit</a>
                    <a href='partai.php?id_hapus=" . $id . "' class='btn btn-danger''>Hapus</a>
                  </td>
                  </tr>";
      }

      $tpl = new Template("Templates/partai.html");
      $tpl->replace("DATA_TABEL", $datapartai);
      $tpl->write();
    }
    
    public function renderUpdate($data){
      $no = 1;
      $datapartai = null;
      foreach($data as $val){
        list($id,$nama) = $val;
          $datapartai .= "
          <form method='post' action='partai.php'>
            <br><br><div class='card'>
                <div class='card-header bg-info'>
                <h1 class='text-white text-center'>  Update Member </h1>
                </div><br>
          <input type='hidden' name='id' value='$id' class='form-control'> <br>

          <label> NAME: </label>
          <input type='text' name='name' value='$nama' class='form-control'> <br>

          <button type='submit' name='update' class='btn btn-success mb-4'>Edit</button>
          <a class='btn btn-danger' type='submit' name='cancel' href='partai.php'> Cancel </a><br>
          </div>
        </form>
          ";
      }

      $tpl = new Template("Templates/partaiUpdate.html");
      $tpl->replace("FORM_UPDATE", $datapartai);
      $tpl->write();
    }
  }