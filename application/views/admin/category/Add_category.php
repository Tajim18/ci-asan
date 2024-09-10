<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Category</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
	
   <?php $this->load->view('admin/includes/css');?>
    
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        


        <!-- Sidebar Start -->
        <?php $this->load->view('admin/includes/sidebar'); ?>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            		<?php $this->load->view('admin/includes/header'); ?>
            <!-- Navbar End -->


            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Category</h6>
                            <form method="post" enctype="multipart/form-data">
							
							<div class="mb-3 col-xl-6">
                             <label for="name"  class="form-label">Name</label>
                             <input onkeyup="getUrl(this.value)" type="text" class="form-control" id="name" placeholder="Enter Name" name="name"> 
							  
                                </div>
									
                                <div class="mb-3 col-xl-6">
                              <label for="name" class="form-label">URL</label>
                             <input id="urlkey" type="text" class="form-control" id="name" placeholder="Enter Url" name="url"> 
							  
                                </div>
								
								<div class="mb-3 col-xl-6">
                                    <label for="exampleInputPassword1" class="form-label" >Status</label>
                                  
								  <select class="form-select" name="status">
								  <option value="">Select Status </option>
								  <option value="1">Active</option>
								  <option value="0">Inactive</option>
								  
								  </select>
								  
                                </div>
                               
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>


                   
                
                </div>
            </div>
            <!-- Form End -->


             <?php $this->load->view('admin/includes/footer'); ?>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <?php $this->load->view('admin/includes/script'); ?>
</body>

</html>
