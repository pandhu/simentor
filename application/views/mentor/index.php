<?php $this->load->view("template/header");?>

<div class="row">
	<div class="col-lg-12">
	<h1 class="page-header">The Mentors!</h1>
	</div>
	<!-- /.col-lg-12 -->
</div>
<?php 
	$alert = $this->session->flashdata('alert');
	if($alert):?>
<div class="alert alert-<?php echo $alert['type']?> alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong><?php echo $alert['message']?></strong>
</div>
<?php endif?>
<table class="table table-hover">
	<thead>
		<tr>
			<th>Nama</th>
			<th>Hp</th>
			<th>Email</th>
			<th>Usia</th>
			<th>Kegiatan</th>			
			<th></th>			
		</tr>
	</thead>

	<tbody>
		<?php foreach ($mentors as $element):?>
			<tr>
				<td><?php echo $element->name?></td>
				<td><?php echo $element->hp?></td>
				<td><?php echo $element->email?></td>
				<td><?php echo $element->age?></td>
				<td><?php echo $element->activity?></td>
				<td>
					<div class="btn-group" role="group" aria-label="...">
						<a class="btn btn-xs btn-primary">Detil</a>
						<a href="<?php echo base_url()?>mentor/edit/<?php echo $element->id?>" class="btn btn-xs btn-warning">Edit</a>
						<a href="<?php echo base_url()?>mentor/delete/<?php echo $element->id?>" class="btn btn-xs btn-danger">Hapus</a>
					</div>
				</td>
			</tr>
		<?php endforeach?>	
	</tbody>
</table>
<?php $this->load->view("template/footer");?>
