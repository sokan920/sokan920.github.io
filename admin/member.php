<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Member List
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Member</li>
        <li class="active">Member List</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
               <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat" style="font-family:Khmer Os Bokor"><i class="fa fa-plus"></i> បន្ថែម</a>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                  <th>Member ID</th>
                  <th>Name</th>
                  <th>Gender</th>
                  <th>Date</th>
                  <th>Phone Number</th>
                  <th>Address</th>
                  <th>Photo</th>
                  <th>Tools</th>
                </thead>
                <tbody>
                <?php
                    $sql = "SELECT *,member.id As memid, member.address, khom.name_khom
                    FROM member
                    INNER JOIN khom ON member.khom_id = khom.khom_id
                    INNER JOIN phum ON member.phum_id = phum.phum_id;
                    ";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                      ?>
                        <tr >
                          <td><?php echo $row['member_id']; ?></td>
                          <td style="font-family:Khmer Os Bokor"><?php echo $row['name'];?></td>
                          <td><?php echo $row['gender'];?></td>
                          <td><?php echo $row['date']; ?></td>
                          <td><?php echo $row['phone_number'];?></td>
                          <td style="font-family:Khmer Os Bokor"><?php echo $row['address'].' '.$row['name_khom'].' '.$row['name_phum'];?></td>
                          <td><img src="<?php echo (!empty($row['photo']))? '../images/'.$row['photo']:'../images/profile.jpg'; ?>" width="60px" height="60px"> <a href="#edit_photo" data-toggle="modal" class="pull-right photo" data-id="<?php echo $row['member_id']; ?>"><span class="fa fa-edit"></span></a></td>
                          <td>
                          <a href='view.php?scanid=<?php echo $row['member_id']; ?>'><button style="font-family:Khmer Os Bokor" type='button' class='btn btn-info btn-sm btn-flat'><i class='fa fa-eye'></i> មើល</button></a>
                          <button style="font-family:Khmer Os Bokor" class="btn btn-success btn-sm edit btn-flat" data-id="<?php echo $row['memid']; ?>"><i class="fa fa-edit"></i> កែ</button>
                          <button style="font-family:Khmer Os Bokor" class="btn btn-danger btn-sm delete btn-flat" data-id="<?php echo $row['memid']; ?>"><i class="fa fa-trash"></i> លុប</button>                          
                          </td>
                        </tr>
                      <?php
                    }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>   
  </div>
    
  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/member_modal.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?>
<script>
  // County State

  $('#khom').on('change', function() {
        var khom_id = this.value;
        $.ajax({
            url: 'includes/ajaxphum.php',
            type: "POST",
            data: {
                khom_data: khom_id
            },
            success: function(result) {
                $('#phum').html(result);
                // console.log(result);
            }
        })
    });
$(function(){
  $('.edit').click(function(e){
    e.preventDefault();
    $('#edit').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $('.delete').click(function(e){
    e.preventDefault();
    $('#delete').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $('.photo').click(function(e){
    e.preventDefault();
    var id = $(this).data('id');
    getRow(id);
  });

});

function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'member_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.memid').val(response.id);
      $('.del_member_name').html(response.name);
      $('#employee_name').html(response.firstname+' '+response.lastname);
      $('#edit_firstname').val(response.firstname);
      $('#edit_lastname').val(response.lastname);
      $('#edit_address').val(response.address);
      $('#datepicker_edit').val(response.birthdate);
      $('#edit_contact').val(response.contact_info);
      $('#gender_val').val(response.gender).html(response.gender);
      $('#position_val').val(response.position_id).html(response.description);
    }
  });
}
    
</script>
</body>
</html>
