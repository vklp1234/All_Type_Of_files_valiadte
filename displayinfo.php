<!DOCTYPE html>
<html>
<head>
	<title>display</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
</head>
<body>
<div class="container">
	<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">DOc FIle 1</th>
      <th scope="col">Doc file 2</th>
      <th scope="col">PPT file</th>
      <th scope="col">image</th>
      <th scope="col">video</th>
      
      
    </tr>
  </thead>
  <tbody>
  	<?php
  	include("db/dbcon.php");
  	$qry = "SELECT * FROM vindata";
  	$count =0;
  	if(!$run = mysqli_query($con,$qry))
  	{
  		var_dump($con->error);
  	}
  	else
  	{
  		while($data = mysqli_fetch_assoc($run))
  		{
  			$count++;
  			?>
  				<tr>
      <th scope="row"><?php echo $count; ?></th>
            <td><a class="btn btn-primary" href="dbfiles/<?php echo $data['doc1'];?>">DOC FILE 1</a></td>
       <td><a class="btn btn-info" href="dbfiles/<?php echo $data['doc2'];?>">DOC FILE 2</a></td>
        <td><a class="btn btn-success" href="dbpptfile/<?php echo $data['pptfile'];?>" >PPT</a></td>
         <td><img src="dbimage/<?php echo $data ['imgs'];?>" alt="Smiley face" style="max-height:200px; max-width:200px; " /></a></td>
      <td><video src="dbvideo/<?php echo $data['vdo']?> " controls style="max-height:200px; max-width:200px; " ></video></td>
    </tr>
  			<?php
  		}
  	}
  	?>
    
    
  </tbody>
</table>


	
</div>
</body>
</html>