<?php
class Model{

    public $table;

    function read($fields=null){
        if($fields==null){  $fields="*";        }
        $sql="SELECT $fields FROM ".$this->table." WHERE id=".$this->id;
        $req=mysql_query($sql) or die (mysql_error());
        $data=mysql_fetch_assoc($req);
        foreach($data as $k=>$v){
            $
        }
    }
}

    

?>