<main role="main" class="container">
	<h3 class="mt-3">List All Peoples &raquo; Results : <?php echo $total_rows; ?></h3>

	<div class="row">
		<div class="col-md-5">
			<form action="<?php echo base_url('pagination'); ?>" method="post">
				<div class="input-group mb-3">
					<input type="text" class="form-control" placeholder="Search keyword..." name="keyword" autocomplete="off" autofocus>
					<div class="input-group-append">
						<input type="submit" name="submit" class="btn btn-primary">
					</div>
				</div>
			</form>
		</div>
	</div>

	<div class="row">
		<div class="col-md">
			<table class="table">
				<thead class="thead-dark">
					<tr>
						<th scope="col">#</th>
						<th scope="col">Name</th>
						<th scope="col">Address</th>
						<th scope="col">Email</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>

					<?php if (empty($peoples)) : ?>
						<tr>
							<td colspan="6">
								<div class="alert alert-danger" role="alert">
									<h5>Data not found!</h5>
								</div>
							</td>
						</tr>
					<?php endif; ?>

					<?php foreach ($peoples as $people) : ?>
						<tr>
							<th scope="row"><?php echo ++$start; ?></th>
							<td><?php echo $people['name']; ?></td>
							<td><?php echo $people['address']; ?></td>
							<td><?php echo $people['email']; ?></td>
							<td>
								<a href="#" class="badge badge-warning">Detail</a>
								<a href="#" class="badge badge-success">Edit</a>
								<a href="#" class="badge badge-danger">Delete</a>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>

	<?php echo $this->pagination->create_links(); ?>

</main><!-- /.container -->