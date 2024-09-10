<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Seti setting</title>
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
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Basic Form</h6>
                            <form method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    
                                    <img src="<?php echo base_url();?>media/uploads/<?php echo $editdata[0]->logo;?>">
								
								<input type="hidden" value="<?php echo $editdata[0]->logo;?>" name="oldlogo">
								
                                    <label for="exampleInputEmail1" class="form-label">Upload logo</label>
                                    <input type="file" class="form-control" name="logo" id="exampleInputEmail1"
                                      aria-describedby="emailHelp">
									  
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1">
                                </div>
                               
                                <button type="submit" class="btn btn-primary">Sign in</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Horizontal Form</h6>
                            <form>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputEmail3">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="inputPassword3">
                                    </div>
                                </div>
                              
                                <div class="row mb-3">
                                   
                                    <div class="col-sm-10">
                                       
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
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