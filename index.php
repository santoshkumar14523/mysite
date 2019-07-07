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
                <ul class="list-group mb-3">
                    <li class="list-group-item list-group-item-success list-group-item-filter-title">Filters</li>
                    <li class="list-group-item list-group-item-filter" value="dep">Department</li>
                    <li class="list-group-item list-group-item-filter" value="soc">Socities</li>
                    <li class="list-group-item list-group-item-filter" value="evnt">Events</li>
                </ul>
                <ul class="list-group">
                    <li class="list-group-item list-group-item-warning">Upload Time</li>
                    <li class="list-group-item list-group-item-filter">Last Hour</li>
                    <li class="list-group-item list-group-item-filter">This Day</li>
                    <li class="list-group-item list-group-item-filter">This Week</li>
                    <li class="list-group-item list-group-item-filter">This Month</li>
                </ul>
                <div style="height:20px"></div>
                <ul class="list-group">
                  <li class="list-group-item list-group-item-filter">Total Posts posted today<span class="badge badge-pill badge-secondary ml-2">25</span></li>
                </ul>
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
                <div class="ajax-data"></div>
            </div>

            <div style="width:50px"></div>

        </section>
        
    </div>

    <div class="container new-post-container">
        <div class=" card mx-auto my-5">
            <div class="ml-auto mr-2 mt-2" id="discard-post"><i class="fas fa-times"></i></div>
          <div class="card-body">
            <form method="POST" action="config/upload.php" enctype="multipart/form-data">
              <div class="form-group">
                <label for="title">Title for the Post</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="emailHelp" placeholder="Enter Title" required>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
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
              <!-- <select name="depfilters" class="custom-select">
                <option selected>Open this select menu</option>
                <option value="dep1">One</option>
                <option value="dep2">Two</option>
                <option value="dep3">Three</option>
              </select> -->
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" name='filters' value='dep' id="tag1">
                <label class="form-check-label" for="tag1">Department</label>
              </div>
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" name='filters' value='soc' id="tag2">
                <label class="form-check-label" for="tag2">Society</label>
              </div>
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" name='filters' value='evnt' id="tag3">
                <label class="form-check-label" for="tag3">Events</label>
              </div>
              <button type="submit" name="upload" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
    </div>

    <!-- Optional JavaScript -->

    <script type="text/javascript">
        $('.posts-section').load("config/allposts.php");
        $('#upload-post').on('click', function(){
            $('.main-container').css('opacity' , 0.05);
            $('.new-post-container').show();
        })
        $('#discard-post').on('click', function(){
            $('.new-post-container').hide();
            $('.main-container').css('opacity', 1);
        })
        $('.list-group-item-filter').on('click', function(){
            $('.list-group-item-filter-title').html('Clear Filters');
            var value = $(this).attr('value');
            $.ajax({
                type: "POST",
                url: "config/posts.php",
                data: {
                    data: value
                },
                success: function(data){
                    $(".posts-section").html(data);
                }
            })
        })
        $('.list-group-item-filter-title').on('click', function(){
            $('.posts-section').load("config/allposts.php");
            $(this).html('Filters');
        })
    </script>

  </body>
</html>