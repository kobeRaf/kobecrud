<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>CodeIgniter Simple CRUD Tutorial</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
</head>
<style>
	    #progress {
        width: 100%;
        height: 30px;
        background-color: 'gray';
    }
</style>
<body>
<div class="container">
	<h1 class="page-header text-center">USER_LIST</h1>
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<a href="<?php echo base_url(); ?>index.php/users/addnew" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add New</a><br><br>
			<table class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th>Username</th>
						<th>Password</th>
						<th>FullName</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach($users as $user){
						?>
						<tr>
							<td><?php echo $user->id; ?></td>
							<td><?php echo $user->username; ?></td>
							<td><?php echo $user->password; ?></td>
							<td><?php echo $user->fname; ?></td>
							<td><a href="<?php echo base_url(); ?>index.php/users/edit/<?php echo $user->id; ?>" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> Edit</a> || <a href="<?php echo base_url(); ?>index.php/users/delete/<?php echo $user->id; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a></td>
						</tr>
						<?php
					
					?>
				</tbody>
			</table>
			<progress value="<?php echo $user->id;?>" max="100%" id="progress"></progress>
			<?php } 
			?>
		</div>
		
	</div>
</div>
</body>
</html>