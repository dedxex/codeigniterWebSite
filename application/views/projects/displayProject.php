<?php $this->session->set_userdata('projectId',$projectData->id); ?>
<span class="col-xs-9">
  <div class="panel panel-info">
    <div class="panel-heading">Project Info</div>
    <div class="panel-body">
        
        <a href="<?php echo base_url(). 'projects/editProject/' . $projectData->id ?>" class="btn btn-md btn-info" role="button">Edit Project</a>
        <a href="<?php echo base_url(). 'tasks/createTask/' . $projectData->id ?>" class="btn btn-md btn-info" role="button">Create Task</a>

        <h4><?php echo $projectData->Projectname; ?></h4>
        <h4><?php echo $projectData->Projectbody; ?></h4>
        <h4><?php echo $projectData->createdAt; ?></h4>
      
    </div>
  </div>
</div>
</span>    


      