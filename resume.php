<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="canonical" href="http://cdpc.rguktn.ac.in/" />
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css" />
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-social.css" />
      <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css" />
      <link rel="stylesheet" type="text/css" href="assets/slider/style.css" />
      
      <script type="text/javascript" src="assets/js/jquery.min.js"></script>


</head>
<body>
<?php include( 'includes/header.html' );?>
<?php include( 'includes/nav_bar.html' );?>
<style type="text/css">
  .nav-me {
    color:rgb(255,255,255);
    background-color: #167f90;
    border-radius: 0% !important;
    border: 1px solid #eee;
  }
 .nav-me:hover{color:rgb(255,255,255);}

  .nav-me.active {
    background-color: rgba(0, 0, 0, 0.5) !important;
  }

  .nav-me1 {
    color:rgb(255,255,255);
    background-color: rgba(0, 0, 0, 0.5) !important;
    border-radius: 0% !important;
    border: 1px solid #eee;
  }

  li {
    list-style: none !important;
  }
</style>

<div class="container-fluid" style="margin-top:50px;">
  <div class="col-md-12">
          <div class="row">
        <div class="col-3">
          <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link nav-me" id="v-pills-ins-tab" data-toggle="pill" href="#v-pills-ins" role="tab" aria-controls="v-pills-ins" aria-selected="true"><i class='fa fa-hashtag'></i> Instructions</a>
            <a class="nav-link nav-me" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class='fa fa-graduation-cap'></i> Basic Information</a>
            <a class="nav-link nav-me" id="v-pills-ti-tab" data-toggle="pill" href="#v-pills-ti" role="tab" aria-controls="v-pills-ti" aria-selected="false"><i class='fa fa-info-circle'></i> Technical Information</a>
            <a class="nav-link nav-me" id="v-pills-oi-tab" data-toggle="pill" href="#v-pills-oi" role="tab" aria-controls="v-pills-oi" aria-selected="false"><i class='fa fa-address-book'></i> Other Information</a>
            <a class="nav-link nav-me" id="v-pills-do-tab" data-toggle="pill" href="#v-pills-do" role="tab" aria-controls="v-pills-do" aria-selected="false"><i class='fa fa-cloud-download'></i> Download</a>
          </div>
        </div>
        <div class="col-9">
          <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-ins" role="tabpanel" aria-labelledby="v-pills-ins-tab">
              <li><i class="fa fa-hand-o-right"></i> Fill Details Carefully.</li>
              <li><i class="fa fa-hand-o-right"></i> Academic Information(CGPA) will be updated after results. If not then feel free to contact us through mail <strong>cdpc@rguktn.ac.in</strong></li>
              <li><i class="fa fa-hand-o-right"></i> Must and should update your resume every month. We hope you are doing.</li>
              <li><i class="fa fa-hand-o-right"></i> Updating the resume is mandatory to attend the drive.</li>
              <li><i class="fa fa-hand-o-right"></i> In Basic Information we are collecting academic related data. Please recheck the entered details before submitting. </li>
              <li><i class="fa fa-hand-o-right"></i> If you have any queries related to updation of resume, feel free to contact the CDPC representatives.</li>
              <li><i class="fa fa-hand-o-right"></i> Any Technical Problem ? Dont Worry we are here to help you <a href="mailto:cdpc@rguktn.ac.in" class="badge badge-success">Mail to us</a></li>
            </div>
            <div class="tab-pane fade show" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
              <div class="card">
                <div class="card-body">
                  <form name="basic" method="post" action="?">
                    <div class="form-group row">
                      <label for="fullname" class="col-sm-2 col-form-label">Objective</label>
                      <div class="col-sm-9">
                        <textarea class="form-control" name="obj" rows="5" required placeholder="Updated soon by me"></textarea>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">

                        <div class="form-group row">
                          <label for="fullname" class="col-sm-4 col-form-label">University ID</label>
                          <div class="col-sm-7">
                            <input type="text" class="form-control" name="idno" value="N150945" readonly required>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="fullname" class="col-sm-4 col-form-label">Full Name</label>
                          <div class="col-sm-7">
                            <input type="text" class="form-control" name="fname" value="Mutyala Durga Venkata Sai Maneeswar" readonly required>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="dept" class="col-sm-4 col-form-label">dept</label>
                          <div class="col-sm-7">
                            <select type="text" class="form-control" name="dept" readonly required>
                              <option value="" >Select Any One</option>
                              <option value="CSE" selected>CSE</option>
                              <option value="ECE" >ECE</option>
                              <option value="ME" >ME</option>
                              <option value="MME" >MME</option>
                              <option value="CHEM" >CHEM</option>
                              <option value="CE" >CE</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="fullname" class="col-sm-4 col-form-label">Year</label>
                          <div class="col-sm-7">
                            <select type="text" class="form-control" name="year" required>
                              <option value="" >Select Any One</option>
                              <option value="E3" selected>E3</option>
                              <option value="E4" >E4</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="fullname" class="col-sm-4 col-form-label">Gender</label>
                          <div class="col-sm-7">
                            <select type="text" class="form-control" name="gender" readonly required>
                              <option value="" >Select Any One</option>
                              <option value="MALE" selected>MALE</option>
                              <option value="FEMALE" >FEMALE</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="fullname" class="col-sm-4 col-form-label">Mail ID</label>
                          <div class="col-sm-7">
                            <input type="text" class="form-control" name="email" value="maneeswar2000m@gmail.com" readonly required>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="fullname" class="col-sm-4 col-form-label">Mobile</label>
                          <div class="col-sm-7">
                            <input type="text" class="form-control" name="phone" value="8790042337" required>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="fullname" class="col-sm-4 col-form-label">DOB(YYYY-MM-DD)</label>
                          <div class="col-sm-7">
                            <input type="text" class="form-control" name="dob" value="2000-03-07" readonly placeholder="YYYY-MM-DD" required>
                          </div>
                        </div>

                      </div>

                      <div class="col-md-6">
                        <div class="form-group row">
                          <label for="fullname" class="col-sm-3 col-form-label">SSC School</label>
                          <div class="col-sm-7">
                            <input type="text" class="form-control" name="sname" value="Z p p high school" readonly required>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="fullname" class="col-sm-5 col-form-label">Year of Pass (SSC)</label>
                          <div class="col-sm-3">
                            <input type="text" class="form-control" name="syear" value="2015" readonly required>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="fullname" class="col-sm-5 col-form-label">Year of Pass (PUC)</label>
                          <div class="col-sm-3">
                            <input type="text" class="form-control" name="pyear" value="2017" readonly required>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="fullname" class="col-sm-5 col-form-label">Year of Pass (B.Tech)</label>
                          <div class="col-sm-3">
                            <input type="text" class="form-control" name="byear" value="2021" readonly required>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="fullname" class="col-sm-5 col-form-label">Percentage/CGPA (SSC)</label>
                          <div class="col-sm-3">
                            <input type="text" class="form-control" name="scgpa" value="10" readonly required>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="fullname" class="col-sm-5 col-form-label">Percentage/CGPA (PUC)</label>
                          <div class="col-sm-3">
                            <input type="text" class="form-control" name="pcgpa" value="6.68" readonly required>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="fullname" class="col-sm-5 col-form-label">Percentage/CGPA (B.Tech)</label>
                          <div class="col-sm-3">
                            <input type="text" class="form-control" name="bcgpa" value="5.1" required>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="form-group">
                      <input name="agree_basic" value="1" type="checkbox" required /> I hereby declare that the above mentioned information is true to the best of my knowledge.
                    </div>
                    <div class="form-group">
                      <div class="col-md-6">
                        <button type="submit" class="btn btn-success pull-center" name="basic">Update</button>
                      </div>

                    </div>
                  </form>
                </div>
              </div>

            </div>
            <!-- Placements Body Starts-->
            <div class="tab-pane fade" id="v-pills-ti" role="tabpanel" aria-labelledby="v-pills-ti-tab">
              <div class="card">
                <div class="card-body">
                  <form name="technical" method="post" action="?">
                    <div class="form-group row">
                      <label for="fullname" class="col-sm-2 col-form-label">Technical Skills :</label>
                      <div class="col-sm-10">
                        <textarea class="form-control ckeditor" name="tech" rows="10" name="info" id="myInfo"><p><b>Programming Languages:hi</b></p>

<p><b>Operating Systems:</b></p>

<p><b>Tools &amp; Technologies:</b></p>

<p><b>Databases:</b></p>

<p><b>Others:</b></p>
</textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="fullname" class="col-sm-2 col-form-label">Project Details :</label>
                      <div class="col-sm-10">
                        <textarea class="form-control ckeditor" rows="10" name="project" id="myInfo"></textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="fullname" class="col-sm-2 col-form-label">Areas of Interest :</label>
                      <div class="col-sm-10">
                        <textarea class="form-control ckeditor" rows="10" name="interest" id="myInfo"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <input name="agree_tech" value="1" type="checkbox" required /> I hereby declare that the above mentioned information is true to the best of my knowledge.
                    </div>
                    <div class="form-group">
                      <div class="col-md-6">
                        <button type="submit" class="btn btn-success pull-center" name="technical">Update</button>
                      </div>

                    </div>
                  </form>
                </div>
              </div>


            </div>
            <!-- Next Body Starts-->
            <div class="tab-pane fade" id="v-pills-oi" role="tabpanel" aria-labelledby="v-pills-oi-tab">
              <div class="card">
                <div class="card-body">
                  <form name="final" method="post" action="?">
                    <div class="form-group row">
                      <label for="fullname" class="col-sm-2 col-form-label">Publications and Academic Accolades</label>
                      <div class="col-sm-10">
                        <textarea class="form-control ckeditor" rows="10" name="public"></textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="fullname" class="col-sm-2 col-form-label">Participation & Presentations in Technical Events and Training programs</label>
                      <div class="col-sm-10">
                        <textarea class="form-control ckeditor" rows="10" name="ppt"></textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="fullname" class="col-sm-2 col-form-label">Extra & Co-Curricular Activities:</label>
                      <div class="col-sm-10">
                        <textarea class="form-control ckeditor" rows="10" name="activities"></textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="fullname" class="col-sm-2 col-form-label">Personal Information :</label>
                      <div class="col-sm-10">
                        <textarea class="form-control ckeditor" rows="10" name="personal"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <input name="agree_final" value="1" type="checkbox" required /> I hereby declare that the above mentioned information is true to the best of my knowledge.
                    </div>
                    <div class="form-group">
                      <div class="col-md-6">
                        <button type="submit" class="btn btn-success pull-center" name="final">Update</button>
                      </div>

                    </div>
                  </form>
                </div>
              </div>

            </div>

            <!-- Next Body Starts-->
            <div class="tab-pane fade" id="v-pills-do" role="tabpanel" aria-labelledby="v-pills-do-tab">
              <div class="alert alert-info">
                <i class="fa fa-hand-o-right"></i> <b>We generated the resume as best. If you want to give your own resume then contact CDPC Office</b>
              </div>
              <a href="resumes/resume_download.php" class="btn btn-sm btn-info">Download Resume</a>
              <button onclick="openSesame()" class="btn btn-sm btn-success">Preview Resume</button>
            </div>
          </div>
        </div>
      </div>
      </div>
</div>
</div>
<br><br>

<?php include( 'includes/footer.html' );
?>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>

<script type="text/javascript" src="plugins/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
  function openSesame() {
    window.open("resumes/resume_preview.php", "_blank", "top=50,left=200,height=600,width=900");
  }
</script>

</body>
</html>
