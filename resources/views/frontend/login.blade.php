<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>SignUp</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Bungee+Inline|Monoton" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css'>
    <link rel="stylesheet" href="./login-style.css">

</head>

<body>
    <!-- partial:index.partial.html -->
    <div class="container">
        <div class="wrapper">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="inner-wrapper intro">
                        <span class="album-icon"></span>
                        <h1>Togo Team</h1>
                        <p>Home Services</p>
                        <ul class="albums">
                            <li class="song">
                                <img src="https://help4flash.com/wp-content/uploads/2020/11/urbanclap-1.png" alt="" id="albumTitle">
                                <!-- <a class="mood-title" href="#">#savageAF</a></li> -->
                                <li class="song">
                                    <img src="" alt="">
                                    <a class="mood-title" href="#">#100</a>
                                </li>
                                <li class="song">
                                    <img src="" alt="">
                                    <a class="mood-title" href="#">#happyface</a>
                                </li>
                        </ul>
                    </div>
                </div>



                <div class="col-sm-12 col-md-6">
                    <div class="inner-wrapper log-in">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" id="signin-tab" data-toggle="tab" href="#signin" role="tab" aria-controls="signin" aria-selected="false">Sign In</a>
                            </li>


                            <li class="nav-item">
                                <a class="nav-link active" id="signup-tab" data-toggle="tab" href="#signup" role="tab" aria-controls="signup" aria-selected="true">Sign Up</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade " id="signin" role="tabpanel" aria-labelledby="signin-tab">
                                <div class="form-group">
                                    <label for="email2">E-mail</label>
                                    <input type="email" class="form-control" id="email2" placeholder="enter your email address">
                                </div>

                                <div class="form-group">
                                    <label for="Password2">Password</label>
                                    <input type="password" class="form-control" id="Password2" placeholder="password">
                                </div>

                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="agree" name="agree"><label for="agree" class="form-check-label">I agree to all statements of <a href="#!">terms of service</a></label>
                                </div>
                                <button type="submit" class="btn btn-primary">Signin</button>



                            </div>
                            <!--1st tab pane-->
                            <div class="tab-pane fade show active" id="signup" role="tabpanel" aria-labelledby="signup-tab">

                                <div class="form-group">
                                    <label for="name">Full Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="enter your full name">
                                </div>

                                <div class="form-group">
                                    <label for="email">E-mail</label>
                                    <input type="email" class="form-control" id="email" placeholder="enter your email address">
                                </div>

                                <div class="form-group">
                                    <label for="Password1">Password</label>
                                    <input type="password" class="form-control" id="Password1" placeholder="password">
                                </div>

                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="agree" name="agree"><label for="agree" class="form-check-label">I agree to all statements of <a href="#!">terms of service</a></label>
                                </div>
                                <button type="submit" class="btn btn-primary">Signup</button>
                                <a href="#!">already a member</a>
                            </div>
                            <!--2nd tab pane-->
                            </form>
                        </div>
                        <!--end tab content-->
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end wrapper -->
    </div>
    <!-- end container -->
    <!-- partial -->
    <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js'></script>
</body>

</html>