<?php
$page = "categories";
include('header.php');
?>
    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <?php
            $qry = "SELECT pagetitle ,pagetext FROM pages WHERE id = 1 AND status = 1";
            $result = $con->query($qry);
            if($result->num_rows > 0){
	       $row = $result->fetch_assoc();
	       echo '<h1 class="display-4">'.$row['pagetitle'].'</h1>';
           echo'<p class="lead text-muted">'.$row['pagetext'].'</p>';        
            }
            ?>
          
          
        </div>
      </section>
                
      <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
            
                            <?php
                            $qry = "SELECT id,title,smalld,cardimages FROM cardtext WHERE id=1";
                            $result = $con->query($qry);
                            if($result->num_rows > 0){
	                           while($row = $result->fetch_assoc()){
                                ?>	
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                    <img class="card-img-top" src="images/slider/<?php echo $row['cardimages']; ?>" alt="Card image cap" height="150px">
                                    <div class="card-body">
                                            <div class="clearfix">
                                                    <h5 class="card-title float-left"><?php echo $row['title']; ?></h5>
		                                    </div>
                                                    <p class="card-text"><?php echo $row['smalld']; ?></p>
                                                    <a href="singlepage.php?eid=<?php echo $row['id']; ?>" class="btn btn-primary">More Details ></a>
                                    </div>
	                       </div>
                        </div>		
                        <?php
                            }
                            }
                        ?>
                
	                   <?php
                            $qry = "SELECT id,title,smalld,cardimages FROM cardtext WHERE id=1";
                            $result = $con->query($qry);
                            if($result->num_rows > 0){
	                       while($row = $result->fetch_assoc()){
                            ?>	
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                    <img class="card-img-top" src="images/slider/<?php echo $row['cardimages']; ?>" alt="Card image cap" height="150px">
                                    <div class="card-body">
                                            <div class="clearfix">
                                                    <h5 class="card-title float-left"><?php echo $row['title']; ?></h5>
		                                    </div>
                                                    <p class="card-text"><?php echo $row['smalld']; ?></p>
                                                    <a href="singlepage.php?eid=<?php echo $row['id']; ?>" class="btn btn-primary">More Details ></a>
                                    </div>
	                       </div>
                        </div>		
                        <?php
                            }
                            }
                        ?>
                
                            <?php
                            $qry = "SELECT id,title,smalld,cardimages FROM cardtext WHERE id=1";
                            $result = $con->query($qry);
                            if($result->num_rows > 0){
	                       while($row = $result->fetch_assoc()){
                            ?>	
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                    <img class="card-img-top" src="images/slider/<?php echo $row['cardimages']; ?>" alt="Card image cap" height="150px">
                                    <div class="card-body">
                                            <div class="clearfix">
                                                    <h5 class="card-title float-left"><?php echo $row['title']; ?></h5>
		                                    </div>
                                                    <p class="card-text"><?php echo $row['smalld']; ?></p>
                                                    <a href="singlepage.php?eid=<?php echo $row['id']; ?>" class="btn btn-primary">More Details ></a>
                                    </div>
	                       </div>
                        </div>		
                        <?php
                            }
                            }
                        ?>
            
                     <?php
                            $qry = "SELECT id,title,smalld,cardimages FROM cardtext WHERE id=1";
                            $result = $con->query($qry);
                            if($result->num_rows > 0){
	                       while($row = $result->fetch_assoc()){
                            ?>	
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                    <img class="card-img-top" src="images/slider/<?php echo $row['cardimages']; ?>" alt="Card image cap" height="150px">
                                    <div class="card-body">
                                            <div class="clearfix">
                                                    <h5 class="card-title float-left"><?php echo $row['title']; ?></h5>
		                                    </div>
                                                    <p class="card-text"><?php echo $row['smalld']; ?></p>
                                                    <a href="singlepage.php?eid=<?php echo $row['id']; ?>" class="btn btn-primary">More Details ></a>
                                    </div>
	                       </div>
                        </div>		
                        <?php
                            }
                            }
                        ?>
    
                        <?php
                            $qry = "SELECT id,title,smalld,cardimages FROM cardtext WHERE id=1";
                            $result = $con->query($qry);
                            if($result->num_rows > 0){
	                       while($row = $result->fetch_assoc()){
                            ?>	
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                    <img class="card-img-top" src="images/slider/<?php echo $row['cardimages']; ?>" alt="Card image cap" height="150px">
                                    <div class="card-body">
                                            <div class="clearfix">
                                                    <h5 class="card-title float-left"><?php echo $row['title']; ?></h5>
		                                    </div>
                                                    <p class="card-text"><?php echo $row['smalld']; ?></p>
                                                    <a href="singlepage.php?eid=<?php echo $row['id']; ?>" class="btn btn-primary">More Details ></a>
                                    </div>
	                       </div>
                        </div>		
                        <?php
                            }
                            }
                        ?>
        
                        <?php
                            $qry = "SELECT id,title,smalld,cardimages FROM cardtext WHERE id=1";
                            $result = $con->query($qry);
                            if($result->num_rows > 0){
	                       while($row = $result->fetch_assoc()){
                            ?>	
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                    <img class="card-img-top" src="images/slider/<?php echo $row['cardimages']; ?>" alt="Card image cap" height="150px">
                                    <div class="card-body">
                                            <div class="clearfix">
                                                    <h5 class="card-title float-left"><?php echo $row['title']; ?></h5>
		                                    </div>
                                                    <p class="card-text"><?php echo $row['smalld']; ?></p>
                                                    <a href="singlepage.php?eid=<?php echo $row['id']; ?>" class="btn btn-primary">More Details ></a>
                                    </div>
	                       </div>
                        </div>		
                        <?php
                            }
                            }
                        ?>
                
                        <?php
                            $qry = "SELECT id,title,smalld,cardimages FROM cardtext WHERE id=1";
                            $result = $con->query($qry);
                            if($result->num_rows > 0){
	                       while($row = $result->fetch_assoc()){
                            ?>	
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                    <img class="card-img-top" src="images/slider/<?php echo $row['cardimages']; ?>" alt="Card image cap" height="150px">
                                    <div class="card-body">
                                            <div class="clearfix">
                                                    <h5 class="card-title float-left"><?php echo $row['title']; ?></h5>
		                                    </div>
                                                    <p class="card-text"><?php echo $row['smalld']; ?></p>
                                                    <a href="singlepage.php?eid=<?php echo $row['id']; ?>" class="btn btn-primary">More Details ></a>
                                    </div>
	                       </div>
                        </div>		
                        <?php
                            }
                            }
                        ?>
                
                        <?php
                            $qry = "SELECT id,title,smalld,cardimages FROM cardtext WHERE id=1";
                            $result = $con->query($qry);
                            if($result->num_rows > 0){
	                       while($row = $result->fetch_assoc()){
                            ?>	
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                    <img class="card-img-top" src="images/slider/<?php echo $row['cardimages']; ?>" alt="Card image cap" height="150px">
                                    <div class="card-body">
                                            <div class="clearfix">
                                                    <h5 class="card-title float-left"><?php echo $row['title']; ?></h5>
		                                    </div>
                                                    <p class="card-text"><?php echo $row['smalld']; ?></p>
                                                    <a href="singlepage.php?eid=<?php echo $row['id']; ?>" class="btn btn-primary">More Details ></a>
                                    </div>
	                       </div>
                        </div>		
                        <?php
                            }
                            }
                        ?>
                
                        <?php
                            $qry = "SELECT id,title,smalld,cardimages FROM cardtext WHERE id=1";
                            $result = $con->query($qry);
                            if($result->num_rows > 0){
	                       while($row = $result->fetch_assoc()){
                            ?>	
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                    <img class="card-img-top" src="images/slider/<?php echo $row['cardimages']; ?>" alt="Card image cap" height="150px">
                                    <div class="card-body">
                                            <div class="clearfix">
                                                    <h5 class="card-title float-left"><?php echo $row['title']; ?></h5>
		                                    </div>
                                                    <p class="card-text"><?php echo $row['smalld']; ?></p>
                                                    <a href="singlepage.php?eid=<?php echo $row['id']; ?>" class="btn btn-primary">More Details ></a>
                                    </div>
	                       </div>
                        </div>		
                        <?php
                            }
                            }
                        ?>
                
          </div>
        </div>
      </div>

    </main>
   
 <?php

include('footer.php');

?>