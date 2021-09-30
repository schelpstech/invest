<?php
include "../include/nav.php";
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body" >
          <div class="card-header" id="feedback">
          <?php
							
              if (isset($_SESSION['acctinfo']) && $_SESSION['acctinfo'])
              {
                printf('<b>%s</b>', $_SESSION['acctinfo']);
                unset($_SESSION['acctinfo']);
              }
            ?>   
            </div>
            <div class="row mt-sm-4">
              <div class="col-12 col-md-12 col-lg-4">
                <div class="card author-box">
                  <div class="card-body">
                    <div class="author-box-center">
                      <img alt="image" src="../resources/passport/<?php echo $img; ?>" class="rounded-circle author-box-picture">
                      <div class="clearfix"></div>
                      <div class="author-box-name">
                        <a href="#"><?php echo $fname." ".$oname." ".$lname; ?></a>
                      </div>
                      <div class="progress mb-3">
                      <div class="progress-bar bg-success" role="progressbar" data-width="<?php echo $profilescore; ?>%" aria-valuenow="<?php echo $profilescore; ?>"
                        aria-valuemin="0" aria-valuemax="100"><?php echo $profilescore; ?>%</div>
                    </div>
                    <button type="button" class="btn btn-success btn-icon icon-left">
                        <i class="fas fa-check-double"></i> Account Verified<span class="badge badge-transparent"></span>
                      </button>
                    </div>
                    
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <h4>Personal Details</h4>
                  </div>
                  <div class="card-body">
                    
                    <div class="py-4">
                      <p class="clearfix">
                        <span class="float-left">
                          Birthday
                        </span>
                        <span class="float-right text-muted">
                        <?php echo $dateofbirth; ?>
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                          Phone
                        </span>
                        <span class="float-right text-muted">
                        <?php echo $phonenum; ?>
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                          Mail
                        </span>
                        <span class="float-right text-muted">
                        <?php echo $emailadd; ?>
                        </span>
                      </p>
                    
                      
                    </div>
                  </div>
                </div>
                
              </div>
              <div class="col-12 col-md-12 col-lg-8">
                <div class="card">
                  <div class="padding-20">
                    <ul class="nav nav-tabs" id="myTab2" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#biodata" role="tab"
                          aria-selected="true"><strong>Biodata</strong></a>
                      </li>
                     
                      <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                          aria-selected="false"><strong>Contact </strong></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="significant-tab" data-toggle="tab" href="#significant" role="tab"
                          aria-selected="false"><strong>Significant Other</strong></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#account" role="tab"
                          aria-selected="false"><strong>Withrawal info</strong></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="doc-tab" data-toggle="tab" href="#doc" role="tab"
                          aria-selected="false"><strong> Documentation </strong></a>
                      </li>
                    </ul>
                    <div class="tab-content tab-bordered" id="myTab3Content">
                      
                      <div class="tab-pane fade show active" id="biodata" role="tabpanel" aria-labelledby="home-tab">
                        <form class="needs-validation">
                          <div class="card-header">
                            <h4>Bio Data</h4>
                          </div>
                          
                          <div class="card-body">
                            <div class="row">
                              <div class="form-group col-md-4 col-12">
                                <label>First Name</label>
                                <input type="text" class="form-control" id="firstname" required="yes" value=" <?php echo $fname; ?>">
                                <div class="invalid-feedback">
                                  Please fill in your first name
                                </div>
                              </div>
                              <div class="form-group col-md-4 col-12">
                                <label>Other Name</label>
                                <input type="text" class="form-control"  id="othername" required="yes" value=" <?php echo $oname; ?>">
                                <div class="invalid-feedback">
                                  Please fill in your Other name
                                </div>
                              </div>
                              <div class="form-group col-md-4 col-12">
                                <label>Last Name</label>
                                <input type="text" class="form-control"  id="lastname" required="yes" value=" <?php echo $lname; ?>">
                                <div class="invalid-feedback">
                                  Please fill in your last name
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="form-group col-md-6 col-12">
                                <label>Gender</label>
                                <select type="text" class="form-control"  id="gender"  required="yes" >
                                <option value="<?php echo $gender; ?>"><?php echo $gender; ?></option> 
                                <option value="">Select Gender</option>  
                                <option value="Male">Male</option>
                                  <option value="Female">Female</option>
                                </select>
                                </div>
                            
                              <div class="form-group col-md-6 col-12">
                                <label>Date of Birth</label>
                                <input type="date" class="form-control"  id="dateofbirth" required="yes" value="<?php echo $dateofbirth; ?>">
                              </div>
                            </div>
                          </div>
                          <div class="card-footer text-right">
                            <button class="btn btn-primary" onclick="bioinsert();">Save Bio-data</button>
                          </div>
                        </form>
                      </div>
                      <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <form  class="needs-validation">
                          <div class="card-header">
                            <h4>Contact Information</h4>
                          </div>
                          <div class="card-body">
                             
                            <div class="row">
                              <div class="form-group col-md-7 col-12">
                                <label>Email Address</label>
                                <input type="email" class="form-control" id="emailadd" required="yes" disabled value="<?php echo $emailadd; ?>">
                                <div class="invalid-feedback">
                                  Please fill in the email
                                </div>
                              </div>
                              <div class="form-group col-md-5 col-12">
                                <label>Phone Number</label>
                                <input type="tel" class="form-control" id="phonenum" required="yes" value="<?php echo $phonenum; ?>">
                              <div class="invalid-feedback">
                                  Please fill in your phonenumber
                                </div>
                            </div>
                          </div>
                          <div class="row">
                              <div class="form-group col-md-12 col-12">
                                <label>Full Address</label>
                                <input type="text" class="form-control" id="fullad" required="yes" value="<?php echo $fulladd; ?>">
                                <div class="invalid-feedback">
                                  Please fill in the email
                                </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="form-group col-md-4 col-12">
                                <label>Country </label>
                                <select type="text" class="form-control" required="yes" id="country" required="yes" >
                                <option value="<?php echo $country; ?>"><?php echo $country; ?></option> 
                                <option value="">Select Country</option>
                                <?php
 $sql_query = "select DISTINCT country from location ORDER BY country ASC " ;
$result = mysqli_query($con,$sql_query);
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo '<option value"'.$row["country"].'">'.$row["country"].'</option>';
  }
}
?>
                                </select>
                            </div>
                            <div class="form-group col-md-4 col-12">
                                <label>State </label>
                                <select type="text" class="form-control" required="yes" id="state" required="yes" onchange="getlgaval();">
                                <option value="<?php echo $state; ?>"><?php echo $state; ?></option> 
                                <option value="">Select State</option>
                                <?php
 $sql_query = "select DISTINCT state from location ORDER BY state ASC " ;
$result = mysqli_query($con,$sql_query);
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo '<option value"'.$row["state"].'">'.$row["state"].'</option>';
  }
}
?>
                                </select>
                            </div>
                            <div class="form-group col-md-4 col-12">
                                <label>LGA </label>
                                <select type="text" class="form-control" required="yes" id="lga" required="yes">
                                <option value="<?php echo $lga; ?>"><?php echo $lga; ?></option> 
                                <option value="">Select LGA </option>
                                </select>
                            </div>
                          </div>
                          <div class="card-footer text-right">
                            <button class="btn btn-primary" onclick="contactinsert();">Save Contact Information</button>
                          </div>
                          </div>
                        </form>
                      </div>

                      <div class="tab-pane fade" id="significant" role="tabpanel" aria-labelledby="significant-tab">
                        <form  class="needs-validation">
                          <div class="card-header">
                            <h4>Significant Other  <small> - Next of Kin</small></h4>
                          </div>
                          <div class="card-body">
                             
                            <div class="row">
                              <div class="form-group col-md-7 col-12">
                                <label>Full name</label>
                                <input type="text" class="form-control" id="fullname" required="yes" value="<?php echo $signname; ?>">
                                <div class="invalid-feedback">
                                  Please fill in the fullname
                                </div>
                              </div>
                              <div class="form-group col-md-5 col-12">
                                <label>Select Relationship type</label>
                                <select type="text" class="form-control" id = "relationship" required="yes" >
                                <option value="<?php echo $signrelate; ?>"><?php echo $signrelate; ?></option>
                                <option value="">Select Relationship</option>    
                                <option value="Father">Father</option>
                                  <option value="Mother">Mother</option>
                                  <option value="Sibling">Sibling</option>
                                  <option value="Spouse">Spouse</option>
                                  <option value="Child">Child</option>
                                </select>
                            </div>
                          </div>
                          <div class="row">
                            <div class="form-group col-md-8 col-12">
                                <label>Contact Address</label>
                                <input type="tel" class="form-control"  id = "address" required="yes" value="<?php echo $signadd; ?>">
                                <div class="invalid-feedback">
                                  Please fill in address
                                </div>
                            </div>
                            <div class="form-group col-md-4 col-12">
                                <label>Phone Number</label>
                                <input type="tel" class="form-control"  id = "signphone" required="yes" value="<?php echo $signphone; ?>">
                              <div class="invalid-feedback">
                                  Please fill in your phonenumber
                                </div>
                            </div>
                           
                          </div>
                          <div class="card-footer text-right">
                            <button class="btn btn-primary" onclick="significantinsert();">Save Significant Other</button>
                          </div>
                          </div> 
                        </form>
                      </div>

                      <div class="tab-pane fade" id="account" role="tabpanel" aria-labelledby="profile-tab">
                        <form class="needs-validation">
                          <div class="card-header">
                            <h4>Withrawal Account</h4>
                          </div>
                          <div class="card-body">
                             
                            <div class="row">
                              <div class="form-group col-md-4 col-12">
                                <label>Account Name</label>
                                <input type="text" class="form-control" required="yes" id="acctname"  value="<?php echo $actname; ?>">
                                <div class="invalid-feedback">
                                  Please fill in your account name
                                </div>
                              </div>
                              <div class="form-group col-md-4 col-12">
                                <label>Account Number</label>
                                <input type="texty" class="form-control" required="yes" id="acctnum" value="<?php echo $num; ?>">
                                <div class="invalid-feedback">
                                  Please fill in your account number
                                </div>
                              </div>
                              <div class="form-group col-md-4 col-12">
                                <label>Bank</label>
                                <input type="text" class="form-control" required="yes" id="bank" value="<?php echo $acctbank; ?>">
                              
                              <div class="invalid-feedback">
                                  Please fill in your bank
                                </div>
                            </div>
                           
                           
                          </div>
                          <div class="card-footer text-right">
                            <button class="btn btn-primary" onclick="acctinsert();">Save Account Details</button>
                          </div>
                          </div>
                        </form>
                      </div>


                      <div class="tab-pane fade" id="doc" role="tabpanel" aria-labelledby="doc-tab">
                        <form  method ="POST" action="../backend/recordfile.php" class="needs-validation" enctype="multipart/form-data">
                          <div class="card-header">
                            <h4>Passport Photograph</h4>
                          </div>
                          <div class="card-body">
                             
                            <div class="row">
                            <iframe src="../resources/passport/<?php echo $img; ?>" height="200" width="300" title="<?php echo $mg; ?>"></iframe>
                            <div class="form-group col-md-8 col-12">
                                <label>Passport Photograph </label>
                                <input type="file" class="form-control" required="yes" name="passport">
                             </div>
                             
                          </div>
                          <div class="card-footer text-right">
                            <button class="btn btn-primary"  >Upload Documents</button>
                          </div>
                          </div>
                        </form>

                        <form  method ="POST" action="../backend/recordidfile.php" class="needs-validation" enctype="multipart/form-data">
                          <div class="card-header">
                            <h4>Identification Card</h4>
                          </div>
                          <div class="card-body">
                             
                            <div class="row">
                            <iframe src="../resources/idcard/<?php echo $idcard; ?> " height="200" width="300" title="<?php echo $idcard; ?>"></iframe>
                            <div class="form-group col-md-8 col-12">
                                <label>Identification Card  </label>
                                <input type="file" class="form-control" required="yes" name="identity">
                             </div>
                             
                          </div>
                          <div class="card-footer text-right">
                            <button class="btn btn-primary"  >Upload ID Card</button>
                          </div>
                          </div>
                        </form>
                      </div>


                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <?php
include "../include/footer.php";
?>