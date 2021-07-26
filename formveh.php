
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>formulaire</title>
  
</head>
<body>
    <div class ='container '>
        <div class = 'row'>
<table class="table table-hover mt-5">
    
  <thead > 
    <tr >
      <th scope="col">id_véhicule</th>
      <th scope="col">marque</th>
      <th scope="col">modele</th>
      <th scope="col">couleur</th>
      <th scope="col">immatriculation</th>
      <th scope="col">modification</th>
      <th scope="col">suppression</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">501</th>
      <td>Peugeot</td>
      <td>807</td>
      <td>noir</td>
      <td>AB-355-CA</td>
      <td ><img class = 'pen' src="pen-solid.svg" style = 'width : 15px;' alt="image stylo pour modification" ></td>
      <td ><img  class = 'trash' src="times-solid.svg"  style = 'width: 10px;' alt="img croix pour supression"  ></td>
      
    </tr>
    <tr>
      <th scope="row">502</th>
      <td>Citroen</td>
      <td>C8</td>
      <td>noir</td>
      <td>CE-122-AE</td>
      <td ><img class = 'pen' src="pen-solid.svg" style = 'width : 15px;' alt="image stylo pour modification"></td>
      <td ><img class = 'trash' src="times-solid.svg"  style = 'width: 10px;' alt="img croix pour supression"  ></td>
      
    </tr>
    <tr>
      <form action="post" >
      <th scope="row">503</th>
      <td >Mercedes</td>
      <td>Cls</td>
      <td>vert</td>
      <td>FG-953-HI</td>
      </form>
      <td ><img  class = 'pen'src="pen-solid.svg" style = 'width : 15px;' alt="image stylo pour modification"></td>
      <td ><img class = 'trash' src="times-solid.svg"  style = 'width: 10px;' alt="img croix pour supression"  ></td>
     
    </tr>

    <tr>
    <th scope="row">504</th>
      <td >Volkswagen</td>
      <td>Touran</td>
      <td>noir</td>
      <td>SO-322-NV</td>
      <td ><img class = 'pen' src="pen-solid.svg" style = 'width : 15px;' alt="image stylo pour modification"></td>
      <td><img class = 'trash' src="times-solid.svg"  style = 'width: 10px;' alt="img croix pour supression"  ></td>
      
    </tr>

    <tr>
    <th scope="row">505</th>
      <td >Skoda</td>
      <td>Octavia</td>
      <td>gris</td>
      <td>PB-631-TK</td>
      <td ><img class = 'pen' src="pen-solid.svg" style = 'width : 15px;' alt="image stylo pour modification"></td>
      <td ><img class = 'trash' src="times-solid.svg"  style = 'width: 10px;' alt="img croix pour supression"  ></td>

    </tr>

    <tr>
      <th scope="row">506</th>
      <td >Volkswagen</td>
      <td>Passat</td>
      <td>gris</td>
      <td >XN-P73-MM</td>
      <td ><img class = 'pen' src="pen-solid.svg" style = 'width : 15px;' alt="image stylo pour modification"></td>
      <td ><img class = 'trash' src="times-solid.svg"  style = 'width: 10px;' alt="img croix pour supression"  ></td>
      
    </tr>  

  </tbody>
  
</table> 
</div>
</div>
<script>
  // trash 
  $('.trash').click(function(){
    $(this).parent().parent().remove()
  })

 //pen 
 $('.pen').click(function(){
   console.log('click!');
   }
 })
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 

</body>
</html>