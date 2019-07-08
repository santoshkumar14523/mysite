<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- FontAwesome Script -->
    <script src="https://kit.fontawesome.com/7b3e632a6c.js"></script>
    <!-- Optional CSS -->
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>MySite - Untitled</title>
  </head>
  <body>
    
    <div class="main-container">

        <header>

            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand ml-2" href="#"><i class="fas fa-meteor mr-2"></i>MySite</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mr-3">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user-circle mr-2"></i>UserName
                            </a>
                            <div class="dropdown-menu ml-n3" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Settings</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-bell mr-2"></i>Notifications</a>
                            <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt mr-2"></i>Log Out</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

        </header>

        <section>
            
            <div style="width:150px"></div>
            

            <!-- Quick Links Section -->

            <div class="filters-section">
                <h4 class="mr-auto">Quick Filters</h4>
                <hr>
                <ul class="list-group mb-3 clear-filters-ul">
                  <li class="list-group-item list-group-item-danger">Clear All Filters</li>
                </ul>
                <ul class="list-group mb-3">
                    <li class="list-group-item list-group-item-success">Filters</li>
                    <li class="list-group-item dropdown-toggle" href="#depfilters" data-toggle="collapse">Department
                    </li>
                    <ul class="collapse list-unstyled list-group filterslist" id="depfilters">
                        <li class="list-group-item">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" name="filters" value="dep1" id="defaultCheck1">
                              <label class="form-check-label" for="defaultCheck1">
                                ECE
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" name="filters" value="dep2" id="defaultCheck2">
                              <label class="form-check-label" for="defaultCheck2">
                                CSE
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" name="depfilters" value="dep3" id="defaultCheck3">
                              <label class="form-check-label" for="defaultCheck3">
                                Arch.
                              </label>
                            </div>
                        </li>
                    </ul>
                    <li class="list-group-item dropdown-toggle" href="#socfilters" data-toggle="collapse">Societies
                    </li>
                    <ul class="collapse list-unstyled list-group filterslist" id="socfilters">
                        <li class="list-group-item">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="soc1" name="socfilters" id="soc1">
                              <label class="form-check-label" for="soc1">
                                TDS
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="soc2" name="socfilters" id="soc2">
                              <label class="form-check-label" for="soc2">
                                TCA
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="soc3" name="socfilters" id="soc3">
                              <label class="form-check-label" for="soc3">
                                KOSS
                              </label>
                            </div>
                        </li>
                    </ul>
                    <li class="list-group-item dropdown-toggle" href="#evntfilters" data-toggle="collapse">Events
                    </li>
                    <ul class="collapse list-unstyled list-group filterslist" id="evntfilters">
                        <li class="list-group-item">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="evnt1" id="evnt1">
                              <label class="form-check-label" for="evnt1">
                                Fests
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="evnt2" id="evnt2">
                              <label class="form-check-label" for="evnt2">
                                Guest Lectures
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="evnt3" id="evnt3">
                              <label class="form-check-label" for="evnt3">
                                Tournaments
                              </label>
                            </div>
                        </li>
                    </ul>
                    <li class="list-group-item dropdown-toggle" href="#uploadTimeFilters" data-toggle="collapse">Upload Time
                    </li>
                    <ul class="collapse list-unstyled list-group filterslist" id="uploadTimeFilters">
                        <li class="list-group-item">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="uptime1" id="uptime1">
                              <label class="form-check-label" for="uptime1">
                                Last Hour
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="uptime2" id="uptime2">
                              <label class="form-check-label" for="uptime2">
                                This Day
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="uptime3" id="uptime3">
                              <label class="form-check-label" for="uptime3">
                                This Week
                              </label>
                            </div>
                        </li>
                    </ul>
                </ul>
                <ul class="list-group">
                  <li class="list-group-item list-group-item-filter">Total Posts posted today<span class="badge badge-pill badge-secondary ml-2">25</span></li>
                </ul>
                <div style="height:20px"></div>
                
                <div style="height: 50px"></div>
            </div> 

            <div style="width:50px"></div>

            <!-- Posts Section -->
            
            <div class="posts-section">

            </div>

            <div style="width: 50px"></div>

            <!-- profile section -->

            <div class="profile-section">
                <li class="list-group-item mb-3" id="upload-post" style="width: 300px">
                    <i class="fas fa-plus mr-3"></i>Upload Post
                </li>
                <div class="card" style="width: 300px;">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
                <hr style="width: 300px; margin-left: 0">
                <ul class="list-group" style="width: 300px">
                  <li class="list-group-item"><i class="fas fa-upload mr-2"></i>Posts Uploaded<span class="badge badge-pill badge-secondary ml-3">200</span></li>
                  <li class="list-group-item"><i class="far fa-calendar-check mr-2"></i>UpComing Events</li>
                  <li class="list-group-item"><i class="fas fa-link mr-2"></i>Website Link</li>
                </ul>
                <li class="list-group-item mt-3 posts-uploaded-today" style="width: 300px">Posts Uploaded Today<span class="badge badge-pill badge-secondary ml-3">2</span></li>
            </div>

            <div style="width:50px"></div>

        </section>
        
    </div>

    <div class="container new-post-container">
        <div class=" card mx-auto my-5">
            <div class="ml-auto mr-2 mb-2" id="discard-post"><i class="fas fa-times"></i></div>
          <div class="card-body mt-2">
            <form method="POST" action="config/upload.php" enctype="multipart/form-data">
              <div class="form-group">
                <label for="title">Title for the Post</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="emailHelp" placeholder="Enter Title" required>
              </div>
              <div class="form-group">
                <label for="descrptn">Description for the Post</label>
                <input type="text" class="form-control" name="descrptn" id="descrptn" aria-describedby="emailHelp" placeholder="enter Description" required>
              </div>
              <div class="form-group">
                <label for="link">Link for the Post</label>
                <input type="text" class="form-control" name="link" id="link" aria-describedby="emailHelp" placeholder="enter link">
              </div>
              <div class="form-group">
                <label for="file">Upload Image</label>
                <input type="file" name="file" class="form-control-file" id="file">
              </div>
              <p>Add Tags</p>
              <div class="select-filters form-group">
                <select name="depfilters" class="custom-select">
                    <option value="00" selected>Department</option>
                    <option value="dep1">ECE</option>
                    <option value="dep2">CSE</option>
                    <option value="dep3">Arch.</option>
                </select>
                <select name="socfilters" class="custom-select">
                    <option value="00" selected>Society</option>
                    <option value="soc1">TDS</option>
                    <option value="soc2">TCA</option>
                    <option value="soc3">KOSS</option>
                </select>
                <select name="evntfilters" class="custom-select">
                    <option value="00" selected>Events</option>
                    <option value="evnt1">One</option>
                    <option value="evnt2">Two</option>
                    <option value="evnt3">Three</option>
                </select>
              </div>
              <button type="submit" name="upload" class="btn btn-primary">Upload Post</button>
            </form>
          </div>
        </div>
    </div>

    <!-- Optional JavaScript -->

    <script type="text/javascript">
        var depFilterArray = [];
        var socFilterArray = [];
        var evntFilterArray = [];
        $('.posts-section').load("config/allposts.php");
        $('#upload-post').on('click', function(){
            $('.main-container').css('opacity' , 0.05);
            $('.new-post-container').show();
        })
        $('#discard-post').on('click', function(){
            $('.new-post-container').hide();
            $('.main-container').css('opacity', 1);
        })
        $('.form-check-input').click(function () {
            var value = $(this).attr('value');
            var parent = $(this).closest("ul").attr('id');
            if(parent == 'depfilters'){
                if($(this).prop('checked') == true){
                    depFilterArray.push(value);
                }else{
                    depFilterArray = $.grep(depFilterArray, function(item){
                        return item != value;
                    })
                }
            }else if(parent == 'socfilters'){
                if($(this).prop('checked') == true){
                    socFilterArray.push(value);
                }else{
                    socFilterArray = $.grep(socFilterArray, function(item){
                        return item != value;
                    })
                }
            }else if(parent == 'evntfilters'){
                if($(this).prop('checked') == true){
                    evntFilterArray.push(value);
                }else{
                    evntFilterArray = $.grep(evntFilterArray, function(item){
                        return item != value;
                    })
                }
            }
            $.ajax({
                type: "POST",
                url: "config/posts.php",
                data: {
                    depFilterArray : depFilterArray,
                    socFilterArray : socFilterArray,
                    evntFilterArray : evntFilterArray
                },
                success: function(data){
                    $('.posts-section').html(data);
                }
            })

            if(depFilterArray.length === 0 && socFilterArray.length === 0 && evntFilterArray.length === 0){
                $('.clear-filters-ul').hide();
            }else{
                $('.clear-filters-ul').show();
            }
        })
        $('.clear-filters-ul').on('click', function(){
            $('.form-check-input').prop('checked', false);
            $('.posts-section').load('config/allposts.php');
            $('.dropdown-toggle').addClass("collapsed");
            $('.filterslist').removeClass('show');
            $('.filterslist').removeClass('collapse');
            $('.filterslist').addClass('collapse');
            $(this).hide();
        })
    </script>

  </body>
</html>