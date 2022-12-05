<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"/>
    <link rel="stylesheet" type="text/css" href="MainForm.css"/>
    <script src="MainForm.js"></script>
    <title>Document</title>
</head>
<body>
    <!-- Image and text -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="https://img.haarets.co.il/bs/00000181-0430-d090-abe1-e53ddf430000/92/b0/769c211f4de4a2cd75fa8dfa0b21/21370070311tomera-06555.jpg?precrop=2200,1279,x0,y101&height=698&width=1200" width="30" height="30" class="d-inline-block align-top" alt="">
   Cars web
  </a>
</nav>
<form role="form" id="Carform">
    <p><center><h1>Cars Form</h1></center></p>
    <div class="container">
        <div class="input-group input-group-lg input">
        <div>
        <button class="btn btn-primary my-btn" type="button" id="carbutton">Search</button>
        </div>
        <input type="text" placeholder="Car Name" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm" name="nameCar" id="nameCar">
        </div>
        <div>
        <img id="myImage" style=" height: 300px; width: 500px;"/> 
    </div>
    
    </div> 
    
    <div class="sqlinput">
         <input type="text" placeholder="Car Name sql" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm" name="nameCarToSql" id="nameCarToSql">
         <input type="text" placeholder="URL image" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm" name="urlImage" id="urlImage">
           <button class="btn btn-primary my-btn" type="button" id="carbuttonsql">Save</button>
           <button class="btn btn-primary my-btn" type="button" id="carbuttonsqldelete">Delete</button>
    </div>
</form>
    
</body>
</html>