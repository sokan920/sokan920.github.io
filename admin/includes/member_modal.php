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
                  	<label for="address" class="col-sm-3 control-label">???????????????</label>

                  	<div class="col-sm-9">
                      <select class="form-control" name="address" id="address" required>
                        <option value="" selected>- Select -</option>
                        <option>???????????????????????????????????????</option>
                      </select>
                  	</div>
                </div>
                <div class="form-group">
                    <label for="position" class="col-sm-3 control-label">?????????</label>

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
                    <label for="phum" class="col-sm-3 control-label">????????????</label>

                    <div class="col-sm-9">
                      <select class="form-control" name="phum" id="phum" required>
                        <option>- Select -</option>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="gender" class="col-sm-3 control-label">????????????????????????</label>

                    <div class="col-sm-9"> 
                      <select class="form-control" name="life_in" id="life_in" required>
                        <option value="" selected>- Select -</option>
                        <option value="???????????????????????????????????????">???????????????????????????????????????</option>
                        <option value="??????????????????????????????????????????">??????????????????????????????????????????</option>
                        <option value="????????????????????????">????????????????????????</option>
                        <option value="?????????????????????????????????">?????????????????????????????????</option>
                        <option value="???????????????????????????">???????????????????????????</option>
                        <option value="?????????????????????">?????????????????????</option>
                        <option value="??????????????????????????????????????????">??????????????????????????????????????????</option>
                        <option value="??????????????????">??????????????????</option>
                        <option value="????????????????????????">????????????????????????</option>
                        <option value="??????????????????????????????????????????????????????">??????????????????????????????????????????????????????</option>
                        <option value="????????????????????????????????????????????????????????????????????????????????????">????????????????????????????????????????????????????????????????????????????????????</option>
                        <option value="????????????????????????????????????????????????????????????????????????">????????????????????????????????????????????????????????????????????????</option>
                        <option value="??????????????????????????????????????????????????? ??????????????? ??????????????????????????????">??????????????????????????????????????????????????? ??????????????? ??????????????????????????????</option>
                        <option value="??????????????????????????????????????????????????? ???????????????????????????????????????">??????????????????????????????????????????????????? ???????????????????????????????????????</option>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                  <label for="membership" class="col-sm-3 control-label">??????????????????</label>

                  <div class="form-check form-check-inline col-sm-3">
                    <input class="form-check-input" type="radio" name="active_member" id="active_member" value="?????????????????????????????????">
                    <label class="form-check-label" for="inlineRadio1">?????????????????????????????????</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="active_member" id="active_member" value="????????????????????????????????????">
                    <label class="form-check-label" for="inlineRadio2">????????????????????????????????????</label>
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
	                	<p style="font-family:Khmer Os Bokor; font-size: 30px;">???????????????????????? ?????????????????? ?????????????????????</p>
	                	<h2 class="bold del_member_name"></h2>
	            	</div>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal" style="font-family:Khmer Os Bokor"><i class="fa fa-close"></i> ?????????</button>
            	<button type="submit" class="btn btn-danger btn-flat" name="delete" style="font-family:Khmer Os Bokor"><i class="fa fa-trash"></i> ?????????</button>
            	</form>
          	</div>
        </div>
    </div>
</div>
