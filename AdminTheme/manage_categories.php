<?php
require('top.inc.php');
$categories='';
if(isset($_GET['id']) && $_GET['id']!=''){
	$id=get_safe_value($con,$_GET['id']);
	$res=mysqli_query($con,"select * from categories where id=$id ");
	$check=mysqli_num_rows($res);
	if ($check>0){
	$row=mysqli_fetch_assoc($res);
	$categories=$row['categories'];
}else{
	header('location:categories.php');
	die();	
}
}


if(isset($_POST['submit'])){
	$categories=get_safe_value($con,$_POST['categories']);
	if(isset($_GET['id']) && $_GET['id']!=''){
		mysqli_query($con,"update categories set categories='$categories' where id=$id ");
	}else{
	mysqli_query($con,"insert into categories(categories,status) values('$categories','1') ");
	}
	header('location:categories.php');
	die();
}

?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
						<div class="card-header"><strong>Categories</strong><small> Form</small></div>
						<form method="POST">
                        <div class="card-body card-block">
                           <div class="form-group">
							   <label for="categories" class=" form-control-label">Categories</label>
							   <input type="text" name="categories" placeholder="Enter Categories Name" class="form-control" required value="<?php echo $categories ?>"></div>
                           <button id="payment-button" name="submit" class="btn btn-lg btn-info btn-block">
                           <span id="payment-button-amount" name="submit">Submit</span>
                           </button>
						</div>
						</form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
<?php
require('footer.inc.php');
?>