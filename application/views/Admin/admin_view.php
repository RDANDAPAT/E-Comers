<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin-Products</title>
    <!-- plugins:css -->
    <?php include('inc_admin/inc_ad_head.php'); ?>
    
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_sidebar.html -->
      <?php include('inc_admin/inc_ad_sidebar.php');?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_navbar.html -->
        <?php include('inc_admin/inc_ad_navbar.php');?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card pod_list">
                         
              </div>
              <div id="createNoteForm" class="col-12 grid-margin outline-primary" style="margin-right: 1rem; display: none;">
                <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Product Details<button type="button" class="btn btn-inverse-danger btn-icon form_close float-right" title="close">
                       <i class="mdi mdi-close"></i></button></h4>
                      <form class="form-sample" action="<?php echo base_url('dashboard/ad_product_update'); ?>" type="" enctype="multipart/form-data">
                        <p class="card-description"> insert data </p>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Product Name</label>
                              <div class="col-sm-9">
                                <input type="text" name="pname"class="form-control" />
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Selected Category</label>
                              <div class="col-sm-9">
                                <select class="form-control">
                                  <option>Select Catagory</option>
                                  <?php foreach ($product_category as $pd_catagory){?>
                                  <option><?php echo $pd_catagory['mpc_name']; ?></option>
                                  <?php }?>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Selected Unit</label>
                              <div class="col-sm-9">
                                <select class="form-control">
                                  <option>Male</option>
                                  <option>Female</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Product Name</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" />
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Product Price / unit</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" />
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Discount (%)/ unit</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" />
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Added date</label>
                              <div class="col-sm-9">
                                <input class="form-control" placeholder="dd/mm/yyyy" />
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Product Status</label>
                              <div class="col-sm-9">
                                <select class="form-control">
                                  <option>Active</option>
                                  <option>Inactive</option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Product Stock / unit</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" />
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Product Image</label>
                              <div class="col-sm-9">
                                <input type="file" class="form-control" />
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group row">
                            <label class="col-sm-3 col-form-label"></label>
                              <div class="col-sm-9">
                              <button type="button" class="btn btn-outline-success btn-icon-text float-right">
                              <i class="mdi mdi-file-check btn-icon-prepend "></i> Submit </button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <?php include('inc_admin/inc_ad_footer.php'); ?>
    <?php include('inc_admin/inc_ad_script.php'); ?>
    <!-- End custom js for this page -->
  </body>
</html>