<?php
class FormModel extends CI_Model{

	function __construct()
    {
        parent::__construct();
    }





    /*Insert*/
	function saveDataForm1($rep_no, $eval, $nik, $date, $conn, $od, $mass, $grade, $pipe, $wo  ){
        $query = "insert into evalys.page1 values ('".$rep_no."','".$eval."','".$nik."','".$date."','".$conn."',".$od.",'".$mass."','".$grade."','".$pipe."','".$wo."')";
        $this->db->query($query);
    }

    function deleteDataForm1($id){
        $query = "delete from evalys.page1 where evaluation = '".$id."'";
        $this->db->query($query);
    }

    function saveDataForm2($eval ,$visual, $gage_number1, $comb, $gage_number2, $thread_profile, $overlay_number, $optradio){
        $query = "insert into evalys.page2 values ('".$eval."','".$visual."','".$gage_number1."','".$comb."','".$gage_number2."','".$thread_profile."','".$overlay_number."','".$optradio."')";
        $this->db->query($query);
    }

    function deleteDataForm2($id){
        $query = "delete from evalys.page2 where evaluation = '".$id."'";
        $this->db->query($query);
    }

   function saveDataForm3($a, $b, $c, $d, $e, $f, $g, $h, $i, $j, $k){
        $query = "insert into evalys.page3 values ('".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$g."','".$h."','".$i."','".$j."','".$k."')";
        $this->db->query($query);
    }

    function deleteDataForm3($id){
        $query = "delete from evalys.page3 where evaluation = '".$id."'";
        $this->db->query($query);
    }

    function saveDataForm4($a, $b, $c, $d, $e, $f, $g, $h, $i, $j, $k, $l){
        $query = "insert into evalys.page4 values ('".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$g."','".$h."','".$i."','".$j."','".$k."','".$l."')";
        $this->db->query($query);
    }

    function deleteDataForm4($id){
        $query = "delete from evalys.page4 where evaluation = '".$id."'";
        $this->db->query($query);
    }

    function saveDataForm5($a, $b, $c, $d, $e, $f, $g, $h, $i, $j, $k, $l, $m, $n,$o){
        $query = "insert into evalys.page5 values ('".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$g."','".$h."','".$i."','".$j."','".$k."','".$l."','".$m."','".$n."','".$o."')";
        $this->db->query($query);
    }

    function deleteDataForm5($id){
        $query = "delete from evalys.page5 where evaluation = '".$id."'";
        $this->db->query($query);
    }

    function saveDataForm6($a, $b, $c, $d, $e, $f, $g, $h, $i, $j, $k, $l, $m, $n){
        $query = "insert into evalys.page6 values ('".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$g."','".$h."','".$i."','".$j."','".$k."','".$l."','".$m."','".$n."')";
        $this->db->query($query);
    }

    function deleteDataForm6($id){
        $query = "delete from evalys.page6 where evaluation = '".$id."'";
        $this->db->query($query);
    }

    function saveDataForm7($a, $b, $c, $d, $e, $f, $g, $h, $i, $j, $k, $l, $m, $n){
        $query = "insert into evalys.page7 values ('".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$g."','".$h."','".$i."','".$j."','".$k."','".$l."','".$m."','".$n."')";
        $this->db->query($query);
    }

    function deleteDataForm7($id){
        $query = "delete from evalys.page7 where evaluation = '".$id."'";
        $this->db->query($query);
    }

    function saveDataForm8($a, $b, $c, $d, $e, $f, $g, $h, $i, $j, $k, $l, $m, $n){
        $query = "insert into evalys.page8 values ('".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$g."','".$h."','".$i."','".$j."','".$k."','".$l."','".$m."','".$n."')";
        $this->db->query($query);
    }

    function deleteDataForm8($id){
        $query = "delete from evalys.page8 where evaluation = '".$id."'";
        $this->db->query($query);
    }

    function saveDataForm9($a, $b, $c, $d, $e, $f, $g, $h, $i, $j, $k, $l, $m, $n, $o, $p, $q, $r, $s, $t, $u, $v, $w, $x, $y, $z, $zz){
        $query = "insert into evalys.page9 values ('".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$g."','".$h."','".$i."','".$j."','".$k."','".$l."','".$m."','".$n."','".$o."','".$p."','".$q."','".$r."','".$s."','".$t."','".$u."','".$v."','".$w."','".$x."','".$y."','".$z."','".$zz."')";
        $this->db->query($query);
    }

    function deleteDataForm9($id){
        $query = "delete from evalys.page9 where evaluation = '".$id."'";
        $this->db->query($query);
    }

    function getDataForm1(){
        $q = "select * from evalys.page1";
        return $this->db->query($q)->result();
    }

	}
