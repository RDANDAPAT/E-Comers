<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- script for products section -->
<script>
    $(document).ready(function(){
      $('.product_details').click(function(e){
    e.preventDefault(); 
    $.ajax({
        url:"<?php echo base_url('dashboard/ad_products'); ?>",
        dataType: 'json',
        success: function (result) {
            var products = result; // Use result instead of data
            let i = 1;
            var productHTML = `
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Products Table</h4>
                        <p class="card-description">Update Products Details </p>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Product Name</th>
                                        <th>Category</th>
                                        <th>Unit</th>
                                        <th>Price/Unit</th>
                                        <th>Discount(%)</th>
                                        <th>Add Date & Time</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>`;
            products.forEach(function(product) {
                var statusLabel = product.mp_status == 0 ? '<button type="button" class="btn btn-outline-success btn-icon-text"><i class="mdi mdi-checkbox-marked btn-icon-prepend"></i> Active </button>' : '<button type="button" class="btn btn-outline-danger btn-icon-text"><i class="mdi mdi-close btn-icon-prepend"></i> Inactive </button>';
                productHTML += `<tr class="text-secondary">
                                    <td>${i}.</td>
                                    <td>${product.mp_name}</td>
                                    <td>${product.mpc_name}</td>
                                    <td>N/A</td>
                                    <td>${product.mp_price}</td>
                                    <td>N/A</td>
                                    <td>${product.mp_added_date}</td>
                                    <td>${statusLabel}</td>
                                    <td><button type="button" class="btn btn-outline-primary btn-icon-text updateProductBtn"> Edit <i class="mdi mdi-file-check btn-icon-append"></i>
                          </button></td>
                                </tr>`;
                          i++;
                      });
            productHTML += `</tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>`;
            $('.pod_list').html(productHTML);

            // Add event listener to the update buttons
            $('.updateProductBtn').click(function() {
                $('#createNoteForm').show(); // Show the createNoteForm
            });
            $('.form_close').click(function(e){
              $('#createNoteForm').hide();
            });

            
        }
    });
});

        
        
        $('.emp_user').click(function(e){
    e.preventDefault(); 
    $.ajax({
            url: "<?php echo base_url('dashboard/employee_details'); ?>",
            dataType: 'json',
            success: function(result) {
                var users = result;
                var rowClasses = ['table-warning', 'table-danger', 'table-success', 'table-primary'];
                var rowClassIndex = 0; // Initialize index for row classes
                var productHTML = `<div class="col-lg-12 stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Employee Table</h4>
                        <p class="card-description"> Employee Details </p>
                        <div class="table-responsive">
                          <table class="table table-bordered table-contextual">
                            <thead>
                              <tr>
                                <th> SL </th>
                                <th> First name </th>
                                <th> Email </th>
                                <th> Gender </th>
                                <th> Role </th>
                              </tr>
                            </thead>
                            <tbody>`;
                users.forEach(function(user, index) {
                    var rowClass = rowClasses[rowClassIndex];
                    productHTML += `<tr class="${rowClass}">
                                <td> ${index + 1} </td>
                                <td> ${user.mu_name}</td>
                                <td> ${user.mu_email} </td>
                                <td> ${user.mu_gender} </td>
                                <td> ${user.mu_role} </td>
                              </tr>`;
                    rowClassIndex = (rowClassIndex + 1) % rowClasses.length; // Rotate through row classes
                });
                productHTML += `
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>`;
                $('.pod_list').html(productHTML);
            }
          });
        });
        
        

    });
</script>


