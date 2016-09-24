<!-- <?php 
	if($this->session->flashdata('pcreated')){
		echo "<div class='bg-success'>Project is created</div";
	}
	if($this->session->flashdata('edited')){
		echo "<div class='bg-success'>Project is updated and saved</div";
	}
	if($this->session->flashdata('pdeleted')){
		echo "<div class='bg-success'>Project is deleted</div";
	}
 ?> -->

<div class="container">
  <div class="btn-group">
  	<a href="<?php echo base_url(); ?>projects/createProject">
    <button class="btn btn-default">Create</button></a>
  </div>
</div>
<table class="table table-hover"><thead><tr>
</tr><tr>
<th>Project Name</th>
<th>Project Body</th><th>Remove</th>
</tr></thead>
<?php foreach($project as $key):  ?>
<tbody>
<tr>
<?php echo "<td> <a href=".'"'.base_url()."/projects/displayProject/".$key->id.'"'."</a>".$key->Projectname."</td>"; ?>
<?php echo "<td>".$key->Projectbody."</td>"; ?>
<?php echo "<td>"; ?>
        <a href="<?php echo base_url().'projects/deleteProject/'.$key->id?> ">
          <span class="glyphicon glyphicon-remove"></span>
        </a>
 <?php echo "</td>"; ?>
<?php endforeach; ?>
</tr> 
</tbody>
</table>