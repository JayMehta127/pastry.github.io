<?php
$page = "home";
include('header.php');
?>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
<?php
$qry = "SELECT image FROM sliderimages WHERE pageid = 1 AND status = 1";
$result = $con->query($qry);
if($result->num_rows > 0){
	for($i=0;$i<$result->num_rows;$i++){
		$li = '<li data-target="#carouselExampleIndicators" data-slide-to="'.$i.'"';
		if($i==0) $li=$li.'class="active"';
		$li=$li.'></li>';
		echo $li;
	}
?>
  </ol>
  <div class="carousel-inner">  
<?php
	$active = true;
	while($row = $result->fetch_assoc()){
		if($active){
			echo '<div class="carousel-item active" style="background:url(\'images/slider/'.$row['image'].'\')"></div>';
			$active = false;
		}else{
			echo '<div class="carousel-item" style="background:url(\'images/slider/'.$row['image'].'\')"></div>';
		}	
	}	
}
	?>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>	

   <br><br>
      <br><br>
      <!-- Page Features -->
     <div class="container">
  <div class="row">
    <?php
$qry = "SELECT id,title,smalld,cardimages FROM cardtext WHERE pageid=1 LIMIT 3";
    
      
$result = $con->query($qry);
if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
?>	
<div class="col-sm">
	<div class="card">
	  <img class="card-img-top" src="images/slider/<?php echo $row['cardimages']; ?>" alt="Card image cap" height="200px">
	  <div class="card-body">
		<div class="clearfix">
			<h5 class="card-title float-left"><?php echo $row['title']; ?></h5>
		</div>
		<p class="card-text"><?php echo $row['smalld']; ?></p>
		<a href="categories.php?eid=<?php echo $row['id']; ?>" class="btn btn-primary">More Details ></a>
	  </div>
	</div>
</div>		
<?php
	}
}
?>
	    
  </div>


<?php
include('footer.php');
?>