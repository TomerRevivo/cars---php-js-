<?php 
    include('conn.php');
    if(isset($_POST['nameCarToSql'])&&isset($_POST['urlImage'])){
        $nameCarToSql=$_POST['nameCarToSql'];
        $urlImage=$_POST['urlImage'];

        //$query=$conn->query("SELECT * FROM cars WHERE nameCar='".$carname."'");
        //var_dump("INSERT INTO cars VALUES ('". $nameCarToSql."','".$urlImage."')");
        $query=$conn->query("INSERT INTO cars VALUES ('". $nameCarToSql."','".$urlImage."')");
         if ($query == 1){
              ?>
                Succsess insert!
             <?php 
        exit;
        }
         else{
             ?>
                Save Failed.
             <?php 
        }
    }
?>