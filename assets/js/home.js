// $(document).ready(function() {
//     $("#not_2").click(function(e) {
//         e.preventDefault(); // Prevent default anchor behavior
//         var cat = $(this).attr('href');
//         $.ajax({
//             url: "<?php echo base_url('home/prductByCategory');?>",
//             method: 'POST',
//             data: {category: cat},
//             success: function(data) {
//                 // Parse the JSON response
//                 var products = JSON.parse(data);
//                 // Update the HTML markup with the fetched product information
//                 var productHTML = '';
//                 products.forEach(function(product) {
//                     productHTML += `
//                         <div class="col-md-6 col-lg-4 col-xl-3">
//                             <div class="rounded position-relative fruite-item">
//                                 <div class="fruite-img">
//                                     <img src="<?php echo base_url().'assets/img/';?>${product.mp_image}" class="img-fluid w-100 rounded-top" alt="">
//                                 </div>
//                                 <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruits</div>
//                                 <div class="p-4 border border-secondary border-top-0 rounded-bottom">
//                                     <h4>${product.mp_name}</h4>
//                                     <p>${product.mp_details}</p>
//                                     <div class="d-flex justify-content-center flex-lg-wrap">
//                                         <p class="text-dark fs-5 fw-bold mb-0">₹ ${product.mp_price} / kg</p>
//                                         <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
//                                     </div>
//                                 </div>
//                             </div>
//                         </div>
//                     `;
//                 });
//                 // Update the container with the new product HTML
//                 $('.nata').html(productHTML);
//             }
//         });
//     });
// });