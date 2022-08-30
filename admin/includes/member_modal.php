<?php
include 'conn.php';

$khom = "SELECT * FROM khom";
$khum_qry = mysqli_query($conn, $khom);
?>
<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Add Employee</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="member_add.php" enctype="multipart/form-data">
          		  <div class="form-group">
                  	<label for="Member_id" class="col-sm-3 control-label">Member ID</label>

                  	<div class="col-sm-9">
                    	<input type="number" class="form-control" id="member_id" name="member_id" required>
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="name" class="col-sm-3 control-label">Name</label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="name" name="name" required>
                  	</div>
                </div>
                <div class="form-group">
                    <label for="gender" class="col-sm-3 control-label">Gender</label>

                    <div class="col-sm-9"> 
                      <select class="form-control" name="gender" id="gender" required>
                        <option value="" selected>- Select -</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                  	<label for="datepicker_add" class="col-sm-3 control-label">Birthdate</label>

                  	<div class="col-sm-9"> 
                      <div class="date">
                        <input type="text" class="form-control" id="datepicker_add" name="birthdate">
                      </div>
                  	</div>
                </div>
                <div class="form-group">
                    <label for="phone" class="col-sm-3 control-label">Phone Number</label>

                    <div class="col-sm-9">
                      <input type="number" class="form-control" id="phone" name="phone">
                    </div>
                </div>
                <div class="form-group">
                  	<label for="address" class="col-sm-3 control-label">ស្រុក</label>

                  	<div class="col-sm-9">
                      <select class="form-control" name="address" id="address" required>
                        <option value="" selected>- Select -</option>
                        <option>ស្រុកពញាក្រែក</option>
                      </select>
                  	</div>
                </div>
                <div class="form-group">
                    <label for="position" class="col-sm-3 control-label">ឃុំ</label>

                    <div class="col-sm-9">
                      <select class="form-control" name="khom" id="khom" required>
                        <option value="" selected>- Select -</option>
                        <?php while ($row = mysqli_fetch_assoc($khum_qry)) : ?>
                            <option value="<?php echo $row['khom_id']; ?>"> <?php echo $row['name_khom']; ?> </option>
                        <?php endwhile; ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="phum" class="col-sm-3 control-label">ភូមិ</label>

                    <div class="col-sm-9">
                      <select class="form-control" name="phum" id="phum" required>
                        <option>- Select -</option>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="gender" class="col-sm-3 control-label">ជីវភាពនៅ</label>

                    <div class="col-sm-9"> 
                      <select class="form-control" name="life_in" id="life_in" required>
                        <option value="" selected>- Select -</option>
                        <option value="ស្រុកពញាក្រែក">ស្រុកពញាក្រែក</option>
                        <option value="ឃុំត្រពាំផ្លុង">ឃុំត្រពាំផ្លុង</option>
                        <option value="ឃុំក្រែក">ឃុំក្រែក</option>
                        <option value="ឃុំវាលម្លូរ">ឃុំវាលម្លូរ</option>
                        <option value="ឃុំកោងកាង">ឃុំកោងកាង</option>
                        <option value="ឃុំពពេល">ឃុំពពេល</option>
                        <option value="ឃុំកណ្ដោលជ្រុំ">ឃុំកណ្ដោលជ្រុំ</option>
                        <option value="ឃុំកក់">ឃុំកក់</option>
                        <option value="ឃុំដូនតី">ឃុំដូនតី</option>
                        <option value="សាលាវិទ្យាល័យក្រែក">សាលាវិទ្យាល័យក្រែក</option>
                        <option value="សាលាវិទ្យាល័យហ៊ុនសែនពញាក្រែក">សាលាវិទ្យាល័យហ៊ុនសែនពញាក្រែក</option>
                        <option value="សាលាវិទ្យាល័យកណ្ដោលជ្រុំ">សាលាវិទ្យាល័យកណ្ដោលជ្រុំ</option>
                        <option value="សាលាវិទ្យាល័យហេង​ សំរិន អន្លង់ជ្រៃ">សាលាវិទ្យាល័យហេង​ សំរិន អន្លង់ជ្រៃ</option>
                        <option value="មន្ទីពេទ្យបង្អែក​ ស្រុកពញាក្រែក">មន្ទីពេទ្យបង្អែក​ ស្រុកពញាក្រែក</option>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                  <label for="membership" class="col-sm-3 control-label">សមាជិក</label>

                  <div class="form-check form-check-inline col-sm-3">
                    <input class="form-check-input" type="radio" name="active_member" id="active_member" value="សមាជិកសកម្ម">
                    <label class="form-check-label" for="inlineRadio1">សមាជិកសកម្ម</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="active_member" id="active_member" value="សមាជិកគាំទ្រ">
                    <label class="form-check-label" for="inlineRadio2">សមាជិកគាំទ្រ</label>
                  </div>
                </div>

                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Photo</label>

                    <div class="col-sm-9">
                      <input type="file" name="photo" id="photo">
                    </div>
                </div>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            	<button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
            	</form>
          	</div>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b><span class="member_id"></span></b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="member_delete.php">
            		<input type="hidden" class="memid" name="id">
            		<div class="text-center">
	                	<p style="font-family:Khmer Os Bokor; font-size: 30px;">លុបឈ្មោះ សមាជិក សមាជិកា</p>
	                	<h2 class="bold del_member_name"></h2>
	            	</div>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal" style="font-family:Khmer Os Bokor"><i class="fa fa-close"></i> បិទ</button>
            	<button type="submit" class="btn btn-danger btn-flat" name="delete" style="font-family:Khmer Os Bokor"><i class="fa fa-trash"></i> លុប</button>
            	</form>
          	</div>
        </div>
    </div>
</div>
