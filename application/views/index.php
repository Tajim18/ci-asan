<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="shortcut icon" type="image/x-icon" href="medai/favicon/favicon.jpg" >

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="<?php echo base_url(); ?>medai/css/style.css">
  
</head>
<body>

<!----- start Navbar --->

<?php $this->load->view('inclued/navbar'); ?>
<!--------end Navbar --->


<!----- start header ---->

<section class="header">
<div class="container">
<div class="row">

<div class="col-xl-3 col-6">
<div class="col-xl-12 box1" align="center">
<?php $alldata=$this->crud->selectbycolumn('posts','id',98);?>

<a href="<?php echo base_url('welcome/allpage/98'.$data->id);?>"><?php echo $alldata[0]->post_taital;?></a>
</div>
</div>

<div class="col-xl-3 col-6" align="center">
<div class="col-xl-12 box2">
<?php $alldata=$this->crud->selectbycolumn('posts','id',124);?>

<a href="<?php echo base_url('welcome/allpage/124'.$data->id);?>"><?php echo $alldata[0]->post_taital;?></a>

</div>
</div>

<div class="col-xl-3 col-6">
<div class="col-xl-12 box3">

<?php $alldata=$this->crud->selectbycolumn('posts','id',101);?>

<a href="<?php echo base_url('welcome/allpage/101'.$data->id);?>"><?php echo $alldata[0]->post_taital;?></a>
</div>
</div>

<div class="col-xl-3 col-6">
<div class="col-xl-12 box4">
<?php $alldata=$this->crud->selectbycolumn('posts','id',102);?>

<a href="<?php echo base_url('welcome/allpage/102'.$data->id);?>"><?php echo $alldata[0]->post_taital;?></a>
</div>
</div>

<div class="col-xl-3 col-6">
<div class="col-xl-12 box5">
<?php $alldata=$this->crud->selectbycolumn('posts','id',103);?>

<a href="<?php echo base_url('welcome/allpage/103'.$data->id);?>"><?php echo $alldata[0]->post_taital;?></a>

</div>
</div>

<div class="col-xl-3 col-6">
<div class="col-xl-12 box6">
<?php $alldata=$this->crud->selectbycolumn('posts','id',104);?>

<a href="<?php echo base_url('welcome/allpage/104'.$data->id);?>"><?php echo $alldata[0]->post_taital;?></a>

</div>
</div>

<div class="col-xl-3 col-6">
<div class="col-xl-12 box7">
<?php $alldata=$this->crud->selectbycolumn('posts','id',105);?>

<a href="<?php echo base_url('welcome/allpage/105'.$data->id);?>"><?php echo $alldata[0]->post_taital;?></a>

</div>
</div>

<div class="col-xl-3 col-6">
<div class="col-xl-12 box8">
<?php $alldata=$this->crud->selectbycolumn('posts','id',106);?>

<a href="<?php echo base_url('welcome/allpage/106'.$data->id);?>"><?php echo $alldata[0]->post_taital;?></a>

</div>
</div>


</div>
</div>

</section>

<!----- end header ---->

<!--------- start table  -------->

<section>
<div class="container">
<div class="row">

<div class="col-xl-4 col-12">
<div class="col-xl-12 box-table">
<div class="resulttable">

<?php $data=$this->crud->selectbycolumn('category','id',27); ?>

<?php echo $data[0]->name;?>

</div>

<table>
<tbody>
<tr>
<td class="result-box" > 

<?php	

$AllDATA=$this->crud->getcoursedetail(27);

 foreach ($AllDATA as $data)
{?> 		

<ul>
<a href="<?php echo base_url('welcome/allpage/'.$data->id);?>"><?php echo $data->post_taital;?></a>
</ul>



<?php }?>

</td>
</tr>
</tbody>
</table>

<a href="<?php echo base_url('welcome/pages/27')?>" class="view-button">View More</a>
</div>
</div>



<div class="col-xl-4 col-12">
<div class="col-xl-12 box-table">
<div class="resulttable">
<?php $data=$this->crud->selectbycolumn('category','id',28); ?>

<?php echo $data[0]->name;?>
</div>

<table>
<tbody>
<tr>
<td class="result-box">



<?php 

$AllDATA=$this->crud->getcoursedetail(28);

foreach ($AllDATA as $data)

{ ?>
<ul>

<a href="<?php echo base_url('welcome/allpage/'.$data->id); ?>"><?php echo $data->post_taital;?></a>

</ul>

<?php }?>


</td>
</tr>
</tbody>
</table>

<a href="<?php echo base_url('welcome/pages/28')?>" class="view-button">View More</a>
</div>
</div>

<div class="col-xl-4 col-12">
<div class="col-xl-12 box-table">
<div class="resulttable">
<?php $data=$this->crud->selectbycolumn('category','id',29); ?>

<?php echo $data[0]->name;?>
</div>
<table>
<tbody>
<tr>
<td class="result-box">

<?php 

$AllDATA=$this->crud->getcoursedetail(29);
foreach ($AllDATA as $data)
{?>
<ul>

<a href="<?php echo base_url('welcome/allpage/'.$data->id); ?>"><?php echo $data->post_taital;?></a>

</ul>

<?php }?>




</td>

</tr>
</tbody>
</table>

<a href="<?php echo base_url('welcome/pages/29')?>" class="view-button">View More</a>
</div>
</div>



</div>
</div>

</section>



<!--------- end table  -------->

<!---------- start footer   ---->

<?php $this->load->view('inclued/footer'); ?>


<!-------- end footer   --------->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


