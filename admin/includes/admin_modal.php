<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Add Admin & User Manager</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="position_add.php">
          		  <div class="form-group">
                  	<label for="title" class="col-sm-3 control-label">Username</label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="title" name="title" required>
                  	</div>
                </div>
                <div class="form-group">
                    <label for="rate" class="col-sm-3 control-label">Password</label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="rate" name="rate" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="rate" class="col-sm-3 control-label">Firstname</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="rate" name="rate" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="rate" class="col-sm-3 control-label">Lastname</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="rate" name="rate" required>
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
                    <label class="form-check-label" for="inlineRadio1">Admin</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="active_member" id="active_member" value="សមាជិកគាំទ្រ">
                    <label class="form-check-label" for="inlineRadio2">User</label>
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
