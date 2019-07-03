<?php
	include "connect.php";


	$username 	= $_REQUEST['u'];
	$req 		= $_REQUEST['req'];
	$post  		= $_REQUEST['p'];
	$id  		= $_REQUEST['id']; 

	//ADD AND EDIT AND DELETE POST
	if($req != ''){
		if($req == 'add'){
			$stmt = $con->prepare("INSERT INTO fb.name(name,postText) VALUES(:zname,:zpost)");
			$stmt->execute(array(
				'zname' 	=> $username,
				'zpost' 	=> $post
			));

		}elseif($req == 'del' && $id != ''){
			$stmt = $con->prepare("DELETE FROM fb.name WHERE id =$id ");
			$stmt->execute();
		}elseif($req == 'edit'){
			$stmt = $con->prepare("UPDATE fb.name SET  postText=? WHERE id = $id ");
			$stmt->execute(array($post));
		}
	}
	
	//DISPLAY POSTS
	$stmt = $con->prepare("SELECT * FROM fb.name ORDER BY id DESC");
	$stmt->execute();
	$rows = $stmt->fetchAll();
	foreach ($rows as $row) {
?>

<div class="card">
	<div class="card-body">
  		<i class="fas fa-trash-alt float-right" onclick="post('del',<?php echo $row['id']; ?>)"></i>
  		<i class="fa fa-edit float-right edit-icon" data-id="<?php echo $row['id']; ?>"></i>
	    <h5 class="card-title"><?php echo $row['name']; ?></h5>
	    <span><i class="far fa-clock"></i><?php echo $row['time']; ?></span>
		<p class="card-text"><?php echo $row['postText']; ?></p>
	</div>
</div>

<?php } ?>