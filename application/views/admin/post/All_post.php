<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>All Post</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

       <?php $this->load->view('admin/includes/css');?>
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        


        <?php $this->load->view('admin/includes/sidebar'); ?>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            	<?php $this->load->view('admin/includes/header'); ?>


            <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    
                   
                    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">All Post</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Post_id</th>
                                            <th scope="col">Category_Id</th>
                                            <th scope="col">Post_Title</th>
                                            <th scope="col">Post_Url</th>
                                            <th scope="col">Edit</th>
                                            <th scope="col">Delect</th>

                                        </tr>
                                    </thead>
                                    <tbody>
									
									<?php  
									$i=1;
									
									foreach($alldatapost as $data) { ?>
									
                                        <tr>
                                            <th><?php echo $i; ?></th>
                                            <td><?php echo $data->categary_id; ?></td>
                                            <td><?php echo $data->post_taital; ?></td>
                                            <td><?php echo $data->post_url; ?></td>
                                             <td><a href="<?php echo base_url('posts/edit/'.$data->id); ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>edit</a>
											 </td>
                                            <td><a href="<?php echo base_url('posts/delete/'.$data->id);?>" onclick="return confirm('Do you want this data');"><i class="fa fa-trash" aria-hidden="true"></i></a>
											</td>
											 
                                        </tr>
									<?php $i++; } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table End -->


            <?php $this->load->view('admin/includes/footer'); ?>
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <?php $this->load->view('admin/includes/script'); ?>
</body>

</html>