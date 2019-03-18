<!DOCTYPE html>
<html>
<head>
	<title>ssss</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">


</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
	<div class="container">
		<h1>Complete All the required documents and fields</h1>
		<div class="form-group">
			<label>Doc 1 :</label>
			<input type="file" name="doc1" accept="application/msword" class="form-control">
			
		</div>
		<div class="form-group">
			<label>Doc 2[5MB] :</label>
			<input type="file" name="doc2" accept="application/msword" class="form-control">
			
		</div>
		<div class="form-group">
			<label>ppt[5MB] :</label>
			<input type="file" name="ppt" accept="application/vnd.ms-powerpoint" class="form-control">
			
		</div>
		<div class="form-group">
			<label>image :</label>
			<input type="file" name="img" accept="image/*" class="form-control">
			
		</div>
		<div class="form-group">
			<label>video[10MB] :</label>
			<input type="file" name="vdo" accept="video/*" class="form-control">
			
		</div>
		<div class="form-group">
			<input type="submit" name="submit" class="btn btn-info">
			
		</div>		
	</div>
	
</form>
</body>
</html>
<?php
include("db/dbcon.php");
if(isset($_POST['submit']))
{
	//first doc file
	$doc1 = $_FILES['doc1']['name'];
	$doc1_tmp = $_FILES['doc1']['tmp_name'];
	
	//secode doc file
	$doc2 = $_FILES['doc2']['name'];
	$doc2_tmp = $_FILES['doc2']['tmp_name'];
	$doc2_size = $_FILES['doc2']['size'];
	//third file
	$pptf = $_FILES['ppt']['name'];
	$pptf_tmp = $_FILES['ppt']['tmp_name'];
	$pptf_size = $_FILES['ppt']['size'];
	//fourth file
	$imgs = $_FILES['img']['name'];
	$imgs_tmp = $_FILES['img']['tmp_name'];
	
	//fivth file
	$vdo = $_FILES['vdo']['name'];
	$vdo_tmp = $_FILES['vdo']['tmp_name'];
	$vdo_size  = $_FILES['vdo']['size'];
	//doc1
	$allow1 = array("doc","docx","docm");
	$ext1 = pathinfo($_FILES['doc1']['name'], PATHINFO_EXTENSION);
	//doc2
	$ext2 = pathinfo($_FILES['doc2']['name'], PATHINFO_EXTENSION);
	//ppt
		$allow2 = array("ppt","pptx","pptm");
	$ext3 = pathinfo($_FILES['ppt']['name'], PATHINFO_EXTENSION);
	//img
		$allow3 = array("jpg","jpeg","png");
	$ext4 = pathinfo($_FILES['img']['name'], PATHINFO_EXTENSION);
	//video
		$allow4 = array("mp4","3gp","mov");
	$ext5 = pathinfo($_FILES['vdo']['name'], PATHINFO_EXTENSION);

	if(!in_array($ext1, $allow1))
	{
		?>
			<script >
				alert("only doc file can accept");
				window.open('vin.php','_self');

			</script>

		<?php
	}
	else
	{
		if(!empty($doc1))
		{
			move_uploaded_file($_FILES['doc1']['tmp_name'], "dbfiles/$doc1");
		}
		if(!in_array($ext2, $allow1))
		{
			?>
			<script >
				alert("Only doc2 file accept");
				window.open('vin.php','_self');

			</script>
			<?php
		}
		else
		{	
			if($doc2_size > 5242880)
			{
				?>
				<script >
					alert("file size is too large ,you can upload only 5MB");
					window.open('vin.php','_self');

				</script>
				<?php
			}
			else
			{
				if(!empty($doc2))
				{
					move_uploaded_file($_FILES['doc2']['tmp_name'], "dbfiles/$doc2");
				}
				if(!in_array($ext3, $allow2))
				{
					?>
					<script >
						alert("only ppt file can accept");
						window.open('vin.php','_self');

					</script>
					<?php
				}
				else
				{
					if($pptf_size > 5242880 )
					{
						?>
						<script >
							alert("ppt file size is too large ,you can upload only 5MB");
							window.open('vin.php','_self');

						</script>
						<?php
					}
					else
					{
						if(!empty($pptf))
						{
							move_uploaded_file($_FILES['ppt']['tmp_name'], "dbpptfile/$pptf");
						}
						if(!in_array($ext4, $allow3))
						{
							?>
							<script >
								alert("only image can accept");
								window.open('vin.php','_self');

							</script>
							<?php
						}
						else
						{
							if(!empty($imgs))
							{
								move_uploaded_file($_FILES['img']['tmp_name'], "dbimage/$imgs");
							}
							if(!in_array($ext5, $allow4))
							{
								?>
								<script >
									alert("ONly video file accept");
									window.open('vin.php','_self');


								</script>
								<?php
							}
							else
							{
								if($vdo_size > 10485760 )
								{
									?>
									<script >
										alert("video file size is too large ,you can upload only 5MB");
										window.open('vin.php','_self');

									</script>
									<?php
								}
								else
								{
									if(!empty($vdo))
									{
										move_uploaded_file($_FILES['vdo']['tmp_name'], "dbvideo/$vdo");
									}
									$qry = "INSERT INTO `vindata`(`doc1`, `doc2`, `pptfile`, `imgs`, `vdo`) VALUES ('$doc1','$doc2','$pptf','$imgs','$vdo')";
									if(!$run = mysqli_query($con,$qry))
									{
										var_dump($con->error);
									}
									else
									{
										if($run == true)
										{
											?>
											<script >
												alert("inserted...");
												window.open('vin.php','_self');

											</script>

											<?php
										}
										else
										{
											?>
											<script >
												alert("not inserted...");
												window.open('vin.php','_self');

											</script>

											<?php
										}
									}


								}
							}
						}

					}
				}
			}

		}
	}


}

?>