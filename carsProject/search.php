<?php 
    include('conn.php');
    if(isset($_POST['nameCar'])){
        $carname=$_POST['nameCar'];

        $query=$conn->query("SELECT * FROM cars WHERE nameCar='".$carname."'");
        if ($query->num_rows>0){
            $row=$query->fetch_array();

    $response[] = array(
         "nameCar" => $row['nameCar'],
         "image" => $row['image'],
      );

       echo json_encode($response);
       exit;
        }
        else{
            ?>
                <span>Search Failed. Car not Found.</span>
            <?php 
        }
    }
?>