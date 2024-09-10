<section class="menu-back">
<div class="container">
<nav class="navbar navbar-expand-sm  navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo base_url(); ?>">Asanresult.com</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse menu justify-content-end"  id="collapsibleNavbar">
     <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(); ?>">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('welcome/pages/27')?>">
		  <?php $data=$this->crud->selectbycolumn('category','id',27); ?>
          <?php echo $data[0]->name;?>
		  
		  </a>

        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('welcome/pages/28')?>">
		  <?php $data=$this->crud->selectbycolumn('category','id',28); ?>
          <?php echo $data[0]->name;?>
		  
		  </a>
        </li>
		
		<li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('welcome/pages/29');?>">
		  <?php $data=$this->crud->selectbycolumn('category','id',29); ?>
          <?php echo $data[0]->name;?>
		  
		  </a>
        </li>
		
		 <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('welcome/pages/30'); ?>">
		  <?php $data=$this->crud->selectbycolumn('category','id',30); ?>
          <?php echo $data[0]->name;?>
		  
		  </a>
        </li>
		
      </ul>
    </div>
  </div>
</nav>
</div>
</section>


