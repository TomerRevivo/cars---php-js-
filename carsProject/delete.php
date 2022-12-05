<?php 
    include('conn.php');
    if(isset($_POST['nameCarToSql'])){
        $nameCarToSql=$_POST['nameCarToSql'];

        //$query=$conn->query("SELECT * FROM cars WHERE nameCar='".$carname."'");
        //var_dump("INSERT INTO cars VALUES ('". $nameCarToSql."','".$urlImage."')");
        $query=$conn->query("DELETE FROM cars WHERE nameCar= '". $nameCarToSql."'");
         if ($query == 1){
              ?>
                Succsess delete!
             <?php 
        exit;
        }
         else{
             ?>
                Delete Failed. Car not Found.
             <?php 
        }
    }
?>