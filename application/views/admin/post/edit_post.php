<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Edit Post</title>
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
                            <h6 class="mb-4">Edit Post</h6>
                            <form method="post" enctype="multipart/form-data">
                                
                        <div class="mb-3 col-xl-6 form-select">
                        <label for="exampleSelectGender">Category</label>
                        <select class="form-select" id="exampleSelectGender" name="catpost">
						<option>select category</option>
						<?php foreach ( $cat as $data) { ?>
                          <option value="<?php echo $data->id;?>"   <?php if($editdata[0]->categary_id==$data->id) echo 'selected';?>><?php echo $data->name;?></option>
						<?php } ?>
                        </select>
                      </div>

								 
								
						<div class="mb-3 col-xl-6">
                        <label for="name" class="form-label">Post Title</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter Url" name="titleurl" value="<?php echo $editdata[0]->post_taital; ?>">  
                         </div>
								
							<div class="mb-3 col-xl-6">
                              <label for="name" class="form-label">Post URL</label>
                             <input type="text" class="form-control" id="name" placeholder="Enter Url" name="posturl" value="<?php echo $editdata[0]->post_url; ?>"> 
                              </div>
								
								
								
								
				       <div class="form-group">
                        <label for="exampleInputName1">Description</label>
                     <textarea name="description"><?php echo $editdata[0]->post_description; ?></textarea>
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