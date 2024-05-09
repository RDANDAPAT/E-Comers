<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- script for products section -->
<script>
    $(document).ready(function(){
        $('.pod_ad').click(function(e){
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
                        var statusLabel = product.mp_status == 0 ? '<label class="btn btn-success">Active</label>' : '<label class="btn btn-danger">In-Active</label>';
                        productHTML += `<tr>
                                            <td>${i}.</td>
                                            <td>${product.mp_name}</td>
                                            <td>${product.mpc_name}</td>
                                            <td>N/A</td>
                                            <td>${product.mp_price}</td>
                                            <td>N/A</td>
                                            <td>${product.mp_added_date}</td>
                                            <td>${statusLabel}</td>
                                            <td><label class="btn btn-primary">Update</label></td>
                                        </tr>`;
                                        i++;
                    });
                    productHTML += `</tbody>
                                </table>
                                </div>
                            </div>
                            </div>
                        </div>`;
                    $('.pool').html(productHTML);
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
                $('.pool').html(productHTML);
            }
          });
        });
        // $('.b_user').click(function(e){
        // e.preventDefault(); 
        // $.ajax({
        //   url: "<?php echo base_url('dashboard/business_user_details'); ?>",
        //   dataType: 'json',
        //   success: function(result) {

        //   }
        // });

    });
</script>


