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

<?php $this->load->view('inclued/navbar');?>

<!--------end Navbar --->


<!----- start header ---->

<section class="header">
<div class="container">
<div class="row">

<div class="col-xl-2 ">


</div>

<div class="col-xl-8  resulta ">

<?php echo $alldata[0]->post_description;?>

</div>

<div class="col-xl-2 d-none"></div>



</div>
</div>

</section>

<!----- end header ---->

<!--------- start table  -------->





<!--------- end table  -------->

<!---------- start footer   ---->

<?php $this->load->view('inclued/footer'); ?>

<!-------- end footer   --------->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


