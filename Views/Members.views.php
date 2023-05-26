<?php
    class MembersView{
        public function render($data){
        $no = 1;
        $dataMember = null;
        foreach($data as $val){
            list($id, $name, $email, $phone, $join_date, $id_partai , $partai) = $val;
            $dataMember .= "<tr>
                    <td>" . $id . "</td>
                    <td>" . $name . "</td>
                    <td>" . $email . "</td>
                    <td>" . $phone . "</td>
                    <td>" . $join_date . "</td>
                    <td>" . $partai . "</td>
                    <td>
                        <a href='index.php?id_edit=" . $id . "' class='btn btn-success''>Edit</a>
                        <a href='index.php?id_hapus=" . $id . "' class='btn btn-danger''>Hapus</a>
                    </td>
                    </tr>";
        }

        $tpl = new Template("Templates/index.html");
        $tpl->replace("DATA_TABEL", $dataMember);
        $tpl->write();
    }
    
    public function renderUpdate($data){
        $no = 1;
        $dataMember = null;
        $dataPartai = null;
        $simpanPartai = 0;
        foreach($data['members'] as $val){
            list($id, $name, $email, $phone, $id_partai) = $val;
            $dataMember .= "
            
            <input type='hidden' name='id' value='$id' class='form-control'> <br>
            <label> NAME: </label>
            <input type='text' name='name' value='$name' class='form-control'> <br>
            <label> EMAIL: </label>
            <input type='text' name='email' value='$email' class='form-control'> <br>
            <label> PHONE: </label>
            <input type='text' name='phone' value='$phone' class='form-control'> <br>
            ";
            $simpanPartai = $id_partai;
        }

        
        foreach($data['partai'] as $val){
            list($id, $name) = $val;
            if($id == $simpanPartai){
                $dataPartai .= "<option selected value='".$id."'>".$name."</option>";
            }else{
                $dataPartai .= "<option value='".$id."'>".$name."</option>";
            }
        }

        $tpl = new Template("Templates/indexUpdate.html");
        $tpl->replace("FORM_UPDATE", $dataMember);
        $tpl->replace("OPTION", $dataPartai);
        $tpl->write();
    }
    
    public function optionForm($data){
        $dataPartai = null;
        foreach($data as $val){
            list($id, $name) = $val;
            $dataPartai .= "<option value='".$id."'>".$name."</option>";
        }

        $tpl = new Template("Templates/indexAdd.html");
        $tpl->replace("OPTION", $dataPartai);
        $tpl->write();
    }

    
}