<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?> 
<script>
// $(document).ready(function() {
//     $(".category_btn").click(function(e) {
//         e.preventDefault(); // Prevent default anchor behavior
//         var cat = $(this).attr('href');
//         $.ajax({
//             url: "<?php echo base_url('home/prductByCategory');?>",
//             method: 'POST',
//             data: {category: cat},
//             success: function(data) {
//                 var products = JSON.parse(data);
//                 var productHTML = '<div class="owl-carousel vegetable-carousel justify-content-center">';
//                 products.forEach(function(product) {
//                     var borderClass, bgClass;
//                     switch (product.mpc_name) {
//                         case "Fruits":
//                             borderClass = "border-secondary";
//                             bgClass = "bg-secondary";
//                             break;
//                         case "Vegetables":
//                             borderClass = "border-primary";
//                             bgClass = "bg-primary";
//                             break;
//                         case "Bread":
//                             borderClass = "border-info";
//                             bgClass = "bg-info";
//                             break;
//                         case "Non-Veg":
//                             borderClass = "border-danger";
//                             bgClass = "bg-danger";
//                             break;
//                         default:
//                             borderClass = "";
//                             bgClass = "";
//                             break;
//                     }
//                     productHTML += `<div class="border rounded position-relative vesitable-item ${borderClass}">
//                                         <div class="vesitable-img">
//                                             <img src="<?php echo base_url('assets/img/');?>${product.mp_image}" class="img-fluid w-100 rounded-top" alt="">
//                                         </div>
//                                         <div class="text-white px-3 py-1 rounded position-absolute ${bgClass}" style="top: 10px; right: 10px;">${product.mpc_name}</div>
//                                         <div class="p-4 rounded-bottom">
//                                             <h4>${product.mp_name}</h4>
//                                             <p>${product.mp_details}</p>
//                                             <div class="d-flex justify-content-between flex-lg-wrap">
//                                                 <p class="text-dark fs-5 fw-bold mb-0">₹${product.mp_price} / kg</p>
//                                                 <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
//                                             </div>
//                                         </div>
//                                     </div>`;
//                 });
//                 productHTML += '</div>';
//                 $('.producrs_row').html(productHTML);

//                 // Initialize Owl Carousel
//                 $(".owl-carousel").owlCarousel({
//                     loop: true,
//                     margin: 10,
//                     responsiveClass: true,
//                     responsive: {
//                         0: {
//                             items: 1,
//                             nav: true
//                         },
//                         600: {
//                             items: 3,
//                             nav: false
//                         },
//                         1000: {
//                             items: 5,
//                             nav: true,
//                             loop: false,
//                             margin: 20
//                         }
//                     }
//                 });
//             }
//         });
//     });
// });

</script>
