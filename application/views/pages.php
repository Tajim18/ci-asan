<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="<?php echo base_url(); ?>medai/css/style.css">
  
</head>
<body>

<!----- start Navbar --->

<?php $this->load->view('inclued/navbar'); ?>
<!--------end Navbar --->



<!--------- start table  -------->

<section>
<div class="container">
<div class="row">
<div class="col-xl-2"></div>
<div class="col-xl-8 pages-table col-10 col-md-12">
<div class="resulttable">
<?php echo $fadata[0]->name;?>
</div>



<table align="center" class="resultpages">
<tbody>
<tr>
<td>

<?php ?>

<?php foreach ($alldata as $data)
{?>
<ul>

<a href="<?php echo base_url('welcome/allpage/'.$data->id); ?>"><?php echo $data->post_taital;?></a>

</ul>

<?php }?>
</td>
</tr>
</tbody>
</table>


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


