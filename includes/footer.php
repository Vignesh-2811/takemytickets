<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Take My Tickets</span></strong>. All Rights Reserved
    </div>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <!-- <script src="assets/vendor/simple-datatables/simple-datatables.js"></script> -->
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script>
 
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <!-- Alertify JS -->
  <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

  <script>
    <?php if(isset($_SESSION['message'])) { ?>
    alertify.set('notifier','position', 'top-right');
    alertify.success('<?= $_SESSION['message'] ?>');
    <?php 
        unset($_SESSION['message']);
    } ?>

  </script>
  <script>
		function openpopup() {
      var w = 400;
			var h = 450;
      var left = (screen.width/2)-(w/2);
			var top = (screen.height/2)-(h/2);
			window.open("addvenue.php", "Popup", "width="+w+",height="+h+", top="+top+",left="+left+", toolbar=no,location=no");
		}
	</script>
   <script>
		function closePopup() {
			window.close();
		}
	</script>
  <script>
    function addInput() {
  var newInputFields = document.createElement("div");
  newInputFields.innerHTML = "<label for='input4'>Input 4:</label> <input type='text' id='input4' name='input4'><br> <label for='input5'>Input 5:</label> <input type='text' id='input5' name='input5'><br> <label for='input6'>Input 6:</label> <input type='text' id='input6' name='input6'><br>";
  document.getElementById("inputFields").appendChild(newInputFields);
}

  </script>
<!-- 
<script type="text/javascript">
   $(document).ready(function() {
    $('#events_data').DataTable({
        "columns": [
            { "data": "id" },
            { "data": "Event" },
            { "data": "Artist" },
            { "data": "City" },
            { "data": "Date" },
            { "data": "Time" },
            { "data": "Created" },
            { "data": "Status" }

          ]
    });
});

  </script> -->
  </footer><!-- End Footer -->

</body>

</html>
