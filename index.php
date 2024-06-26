<!-- DO NOT MODIFY (START) -->
<?php session_start(); ?>
<?php include 'user/header.php'; ?>
<body class="hold-transition register-page">
<!-- DO NOT MODIFY (END) -->

  <!-- PAGE SCREEN (START) -->
  <div class="login-box">
    
      <!-- FORM CONTAINER (START) -->  
      <div class="login-box-body">
        <h4 class="login-box-msg" style="font-weight: bold; color: #3D6245; font-size: 20px;">
          <strong>Qttendance</strong> <i>System</i>
        </h4>

        <!-- FORM COMPONENT (START) -->
        <form id="attendance">
          <!-- Check In/Check Out COMPONENT -->
          <div class="form-group">
            <select class="form-control" name="status" id="status">
              <option value="in">CHECK IN</option>
              <option value="out">CHECK OUT</option>
            </select>
          </div>
          <!-- QR Scanner COMPONENT -->
          <?php include 'user/qr_scanner.php' ?>
          <!-- Student ID COMPONENT -->
          <br/>
          <div class="form-group has-feedback">
            <input type="text" class="form-control input-lg" id="student_id" name="student_id" placeholder="Student ID" required>
          </div>
          <!-- Submit COMPONENT -->
          <div class="row">
            <div class="col-sm-12">
              <button id="submit_button" type="submit" class="btn btn-primary btn-block btn-flat" name="signin"><i class="fa fa-sign-in"></i> CHECK</button>
            </div>
          </div>
        </form>
        <!-- FORM COMPONENT (END) -->
      </div>
      <!-- FORM CONTAINER (END) -->

    <!-- DO NOT MODIFY (START) -->
    <div class="alert alert-success alert-dismissible mt20 text-center" style="display:none;">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <span class="result"><i class="icon fa fa-check"></i> <span class="message"></span></span>
    </div>
    <div class="alert alert-danger alert-dismissible mt20 text-center" style="display:none;">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <span class="result"><i class="icon fa fa-warning"></i> <span class="message"></span></span>
    </div>
    <div class="login-logo">
      <p id="date" style="color: white"></p>
      <p id="time" class="bold" style="color: white"></p>
    </div>
    <!-- DO NOT MODIFY (END) -->
  </div>
  <!-- PAGE SCREEN (END) -->

  <!-- DO NOT MODIFY (START) -->
  
    <script type="text/javascript">
      var interval = setInterval(function() {
        var momentNow = moment();
        $('#date').html(momentNow.format('dddd').substring(0,3).toUpperCase() + ' - ' + momentNow.format('MMMM DD, YYYY'));  
        $('#time').html(momentNow.format('hh:mm:ss A'));
        }, 100);

        $('#attendance').submit(function(e){
          e.preventDefault();
          var attendance = $(this).serialize();
          $.ajax({
            type: 'POST',
            url: 'user/attendance.php',
            data: attendance,
            dataType: 'json',
            success: function(response){
              if(response.error){
                $('.alert').hide();
                $('.alert-danger').show();
                $('.message').html(response.message);
              } 
              else{
                $('.alert').hide();
                $('.alert-success').show();
                $('.message').html(response.message);
              }
            }
          });
        }); 
    </script>
  <!-- DO NOT MODIFY (END) -->
</body>
</html>