<footer >
         <div class=" justify-content-center justify-content-sm-between">
            <span class="text-center ">Copyright © 2022 </a>. All rights reserved.</span>
         </div>
      </footer>
      <!-- container-scroller -->
      <!-- base:js -->

   
     

<script src="<?php echo base_url();?>assets/vendors/js/jquery-3.4.1.min.js"></script>
       <script src="<?php echo base_url();?>assets/vendors/js/vendor.bundle.base.js"></script> 
      <script src="<?php echo base_url();?>assets/vendors/js/bootstrap.min.js"></script>
      
      
      <script src="<?php echo base_url();?>assets/js/main.js"></script>
      <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/select2.min.js"></script>
	  <script src="<?php echo base_url('ckeditor2/ckeditor.js'); ?>"></script>

      <script>
         $(document).ready(function() {
           $('#example').DataTable();
			 
         } );
		  
		  $(document).ready(function() {
				$('.js-example-basic-single').select2();
			});

      </script>
   </body>
</html>