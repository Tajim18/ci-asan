<section class="footer">
<div class="container">
<div class="row">

<div class="col-xl-8 footera col-12">

<ul>
<li>
<?php $alldata=$this->crud->selectbycolumn('posts','id',122);?>
<a href="<?php echo base_url('welcome/allpage/122'.$data->id);?>"><?php echo $alldata[0]->post_taital;?></a>
</li>
</ul>

<ul>
<li>
<a href="#">Contact</a>
</li>
</ul>

<ul>
<li>
<a href="#">Privacy Policy</a>
</li>
</ul>

</div>
<div class="col-xl-4 copyright">
<h6>@2024 Asanresult.com</h6>

</div>

</div>



</div>
</div>


</section>