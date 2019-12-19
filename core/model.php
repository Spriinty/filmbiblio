<?php
class Model{
// variable du nom de la table de la base de donnée
    public $table;

    function read($fields=null){
        if($fields==null){  $fields="*";        }
        $sql="SELECT $fields FROM ".$this->table." WHERE id=".$this->id;
        $req=mysql_query($sql) or die (mysql_error());
        $data=mysql_fetch_assoc($req);
        foreach($data as $k=>$v){
            $this ->$k=$v;
        }
    }

    public function save($data){
        if(isset($date["id"]) && !empty($data["id"])){
            $sql ="UPDATE".$this->table." SET ";
            foreach($data as $k=>$v){
                if($k!="id"){
                   $sql .= "$k='$v',"; 
                }
            }
            $sql= substr($ssl,0,-1);
            $sql .="WHERE id=".$data["id"];
        }
        else{
            $sql ="INSERT INTO ".$this->table."(";
            unset($data["id"]);
            foreach($data as $k=>$v){               
                   $sql .= "$k,";                
            }
            $sql= substr($ssl,0,-1);
            $sql="VALUES (";
            foreach($data as $v){
                $sql .="$v,";
            }
            $sql= substr($ssl,0,-1);
            $sql .=")";
        }
        mysql_query($sql) or die(mysql_error()."<br/>=>".mysql_query());
        if(isset($data["id"]) || empty($data["id"])){
            $this->id=mysql_insert_id;
        }
        else{
            $this->id=$data["id"];
        }
    }    


    public function find($data=array()){
        $conditions="1=1";
        $fields="*";
        $limit="";
        $order "id DESC";
        if(isset($data["contitions"])){ $conditions=$data["conditions"]; }
        if(isset($data["fields"])){$fields=$data["fields"];}
        if(isset($data["limit"])){$limit="LIMIT ".$data["limit"];}
        if(isset($data["order"])){$order=$data["order"];}
        $sql = "SELECT $fields FROM ".$this->table."WHERE $conditions ORDER BY $order $limit";
        while($data=mysql_fetch_assoc($req)){
            $d[]=$data;
        }
        return $d;
    }


    static function load($name){
        require("$name.php");
        return new $name();
    }
}
?>