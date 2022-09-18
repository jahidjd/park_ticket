<footer class="main-footer">
    
    <strong>Copyright &copy; <?php echo date("Y")?> - <?php echo date('Y', strtotime('+1 years'))?> <a href=""></a>.</strong> All rights
    reserved.
</footer>
          <script src="<?php echo base_url() . 'admin_file/admin/' ?>plugins/jQuery/jquery-2.2.3.min.js"></script>
          <!-- Bootstrap 3.3.6 -->
          <script src="<?php echo base_url() . 'admin_file/admin/' ?>bootstrap/js/bootstrap.min.js"></script>
          <!-- DataTables -->
          <script src="<?php echo base_url() . 'admin_file/admin/' ?>plugins/datatables/jquery.dataTables.min.js"></script>
          <!-- SlimScroll -->
          <!-- AdminLTE App -->
          <script src="<?php echo base_url() . 'admin_file/admin/' ?>dist/js/app.min.js"></script>
          <!-- AdminLTE for demo purposes -->
          <script src="<?php echo base_url() . 'admin_file/admin/' ?>dist/js/demo.js"></script>
          <script type="text/javascript" src="<?php echo base_url() . 'jquery-ui-1.11.4/jquery-ui.js' ?>"></script>
          <script src="<?php echo base_url() . 'admin_file/' ?>ckeditor/ckeditor.js"></script>
          <!-- page script -->
          <!-- chosen script start -->
          <script src="<?php echo base_url() . 'admin_file/admin/' ?>plugins/chosen/chosen.jquery.js" type="text/javascript"></script>
          <script src="<?php echo base_url() . 'admin_file/admin/' ?>plugins/chosen/docsupport/prism.js" type="text/javascript" charset="utf-8"></script>
          <script src="<?php echo base_url() . 'admin_file/admin/' ?>plugins/chosen/docsupport/init.js" type="text/javascript" charset="utf-8"></script>

          <!-- chosen script end -->
  <script>
  $( function() {
    $( ".date" ).datepicker( {dateFormat:"yy-mm-dd"});
  } );
  </script>
          <script>
            $(function () {
                $("#example1").DataTable();
                $("#example2").DataTable();
                
            });

        </script>
<script>
    // var currentTab = 0; // Current tab is set to be the first tab (0)
    // showTab(currentTab); // Display the current tab

    // function showTab(n) {
    //     // This function will display the specified tab of the form ...
    //     var x = document.getElementsByClassName("tab");
    //     x[n].style.display = "block";
    //     // ... and fix the Previous/Next buttons:
    //     if (n == 0) {
    //         document.getElementById("prevBtn").style.display = "none";
    //     } else {
    //         document.getElementById("prevBtn").style.display = "inline";
    //     }
    //     if (n == (x.length - 1)) {
    //         document.getElementById("nextBtn").innerHTML = "Submit";
    //     } else {
    //         document.getElementById("nextBtn").innerHTML = "Next";
    //     }
    //     // ... and run a function that displays the correct step indicator:
    //     fixStepIndicator(n)
    // }

    function nextPrev(n) {
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("tab");
        // Exit the function if any field in the current tab is invalid:
        if (n == 1 && !validateForm()) return false;
        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form... :
        if (currentTab >= x.length) {
            //...the form gets submitted:
            document.getElementById("regForm").submit();
            return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
    }

    function validateForm() {
        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("input");
        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
                // add an "invalid" class to the field:
                y[i].className += " invalid";
                // and set the current valid status to false:
                valid = false;
            }
        }
        // If the valid status is true, mark the step as finished and valid:
        if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        return valid; // return the valid status
    }

    function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class to the current step:
        x[n].className += " active";
    }
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.jquery.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.min.css" />
      <script src="<?php echo base_url() ?>jQuery-Plugin-Print/jQuery.print.js"></script>
      <script type="text/javascript">
        $(document).ready(function () {
          $('.chosen').chosen();
        });
      </script>
    </body>
    </html>