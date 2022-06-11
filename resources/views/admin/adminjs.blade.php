
      <!-- page-body-wrapper ends -->
   
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->

    {{-- Delete wairning Alert Start --}}
    <script type="text/javascript">
      $(function() {
          $(document).on('click', '#delete', function(e) {
              e.preventDefault();
              var link = $(this).attr("href");
              Swal.fire({
                      title: 'Are you sure?',
                      text: "Delete!",
                      icon: 'warning',
                      showCancelButton: true,
                      confirmButtonColor: '#3085d6',
                      cancelButtonColor: '#d33',
                      confirmButtonText: 'Yes, delete it!'
                  })
                  .then((result) => {
                      if (result.isConfirmed) {
                          window.location.href = link;
                          Swal.fire('Deleted!', 'Your file has been deleted.', 'success')
                      }
                  })
          });
      });
  </script>
  {{-- Delete wairning Alert End --}}
