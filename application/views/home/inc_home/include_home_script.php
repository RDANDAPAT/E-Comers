<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?> 
<script>
$(document).ready(function() {
    // Define the getBackgroundColorClass function
    function getBackgroundColorClass(mpc_name) {
        switch (mpc_name) {
            case "Fruits":
                return "bg-secondary";
            case "Vegetables":
                return "bg-primary";
            case "Bread":
                return "bg-info";
            case "Non-Veg":
                return "bg-danger";
            default:
                return "";
        }
    }

    // Define the getBorderColorClass function
    function getBorderColorClass(mpc_name) {
        switch (mpc_name) {
            case "Fruits":
                return "border-secondary";
            case "Vegetables":
                return "border-primary";
            case "Bread":
                return "border-info";
            case "Non-Veg":
                return "border-danger";
            default:
                return "";
        }
    }

    $(".category_btn").click(function(e) {
        e.preventDefault(); // Prevent default anchor behavior
        var cat = $(this).attr('href');
        $.ajax({
            url: "<?php echo base_url('home/prductByCategory');?>",
            method: 'POST',
            data: {category: cat},
            success: function(data) {
                // Parse the JSON response
                var products = JSON.parse(data);
                // Update the HTML markup with the fetched product information
                var productHTML = '';
                products.forEach(function(product) {
                    productHTML += `
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="rounded position-relative fruite-item">
                                <div class="fruite-img">
                                    <img src="<?php echo base_url().'assets/img/';?>${product.mp_image}" class="img-fluid w-100 rounded-top" alt="">
                                </div>
                                <div class="text-white px-3 py-1 rounded position-absolute ${getBackgroundColorClass(product.mpc_name)}" style="top: 10px; left: 10px;">${product.mpc_name}</div>
                                <div class="p-4 border ${getBorderColorClass(product.mpc_name)} border-top-0 rounded-bottom">
                                    <h4>${product.mp_name}</h4>
                                    <p>${product.mp_details}</p>
                                    <div class="d-flex justify-content-center flex-lg-wrap">
                                        <p class="text-dark fs-5 fw-bold mb-0">₹ ${product.mp_price} / kg</p>
                                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `;
                });
                $('.producrs_row').html(productHTML);
            }
        });
    });
});
</script>
