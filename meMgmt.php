<!DOCTYPE html>
<html>
<head>
  <title> User Management</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h1 class="text-center text-primary text-upper">
    User Management
  </h1>
  <div class="d-flex justify-content-end">
    <button type="button" class="btn  btn-warning" data-toggle="modal" data-target="#addModal">
       Add Device</button>
  </div>
  <h2 class="text-danger"> All Users</h2>
  <div id="alldevice"></div>

  <div class="modal" id="addModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
       <h4 class="modal-title">Device Registration</h4>
        </div>
        <div class="modal-body">
       
          <div class="form-group form-row" >
        <label for="name" class="col-sm-4 col-form-label"> Name</label>
        <input type="text" class="form-control col-sm-4" id="name" >  </div>
        <div class="form-group form-row" >
        <label for="email" class="col-sm-4 col-form-label">Email</label>
        <input type="text" class="form-control col-sm-4" id="email" >  </div>
        <div class="form-group form-row" >
        <label for="mobile" class="col-sm-4 col-form-label">Mobile</label>
        <input type="text" class="form-control col-sm-4" id="mobile" >  </div>
        <div class="form-group form-row">
        <div class="col-sm-4"></div>
        <div class="col-sm-2">
          <button class="btn btn-success " id="save" onclick="addDevice()" data-dismiss="modal">Save</button></div>
          <button class="btn btn-danger " id="close" data-dismiss="modal">close</button></div>
        </div>
       
        </div>
      </div>
    </div>
   <!-- update model -->
    <div class="modal" id="updateModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
       <h4 class="modal-title">Device Management</h4>
        </div>
        <div class="modal-body">
       
          <div class="form-group form-row" >
        <label for="uname" class="col-sm-4 col-form-label">Name</label>
        <input type="text" class="form-control col-sm-4" id="uname" >  </div>
        <div class="form-group form-row" >
        <label for="uemail" class="col-sm-4 col-form-label">Email</label>
        <input type="text" class="form-control col-sm-4" id="uemail" >  </div>
        <div class="form-group form-row" >
        <label for="umobile" class="col-sm-4 col-form-label">Mobile</label>
        <input type="text" class="form-control col-sm-4" id="umobile" >  </div>
        
        <div class="form-group form-row">
        <div class="col-sm-4"></div>
        <div class="col-sm-2">
          <button class="btn btn-success  " id="update" data-dismiss="modal" onclick="editDevice()" >Update</button></div>
          <button class="btn btn-danger ml-sm-3 " id="close" data-dismiss="modal">close
          </button>
          <input type="hidden" name="" id="hiddenId">
        </div>
        </div>
       
        </div>
      </div>
    </div>

</div>
<script>
  $(document).ready(function()
  {
    readData();
  });
  function readData()
  {
    var readrecord="readrecord";
    $.ajax
    ({
      url:"backend1.php",
      type:"post",
      data:{readrecord:readrecord},
      success:function(data,status)
      {
        $('#alldevice').html(data);
      }
    });
  }
  function addDevice()
  {
      var name=$('#name').val();
      var email=$('#email').val();
      var mobile=$('#mobile').val();
      
      $.ajax
      ({
      url:"backend1.php",
      type:"post",
      data:{
            name:name,
            email:email,
            mobile:mobile,
            },
       success: function(data,status){
          readData();
         }  
      });

  }

  function deleteDevice(deleteid)
  {
    var cof=confirm("Are you sure");
    if(cof==true)
    {
      $.ajax
          ({
            url:"backend1.php",
            type:"post",
            data:{deleteid:deleteid},
            success: function(data,status){
                readData();
                }  
          });
    } 
  }


  function getDevice(Id)
  {
    $('#hiddenId').val(Id);
    $.post("backend1.php",
            {Id:Id},
             function(data,status){
            var device=JSON.parse(data);
            $('#uname').val(device.name);
          $('#uemail').val(device.email);
          $('#umobile').val(device.mobile);
            
  
          });
          $('#updateModal').modal("show");
    }

    function editDevice()
    {
      var nameupd=$('#uname').val();
      var emailupd=$('#uemail').val();
      var mobileupd=$('#umobile').val();
      var hiddenidupd=$('#hiddenId').val();
      $.post("backend1.php",{
        hiddenidupd:hiddenidupd,
        nameupd:nameupd,
        emailupd:emailupd,
        mobileupd:mobileupd,
      },
      function(data,status)
      {  
             $('#updateModal').modal("hide");
             readData();
      }

      );
    } 


    
  
</script>
</body>
</html>