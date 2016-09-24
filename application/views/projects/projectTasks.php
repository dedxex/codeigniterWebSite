<table class="table table-hover"><thead><tr>
</tr><tr>
<th>Task Name</th>
<th>Task Body</th><th>Remove</th>
</tr></thead>

<?php foreach($taskdata as $key):  ?>
<tbody>
<tr>
<?php echo "<td>".$key->Taskname."</td>"; ?>
<?php echo "<td>".$key->Taskbody."</td>"; ?>
<?php echo "<td>"; ?>
<a href="<?php echo base_url().'task/deleteTask/'.$key->id?> ">
<span class="glyphicon glyphicon-remove"></span>
</a>
<?php echo "</td>"; ?>
<?php endforeach; ?>
</tr> 
</tbody>
</table>