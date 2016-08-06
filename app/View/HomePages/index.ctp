<!DOCTYPE html>
<html lang="en">
  
    <body>

        
       
        <!-- <div id = "loginform" align="center" class="collapse">
        
           <form>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>                  
                  <button type="submit" class="btn btn-default">Submit</button>

            </form>

        </div>
       -->


            <!-- Carousel -->
            <div id="templatemo-carousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#templatemo-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#templatemo-carousel" data-slide-to="1"></li>
                    <li data-target="#templatemo-carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1></h1>
                                <p></p>
                                <p><a class="btn btn-lg btn-green" href="#" role="button" style="margin: 20px;"></a> 
                                    <a class="btn btn-lg btn-orange" href="#" role="button"></a></p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="item">
                        <div class="container">
                                <div class="carousel-caption">
                                    <div class="col-sm-6 col-md-6">
                                        <h1>FLUID</h1>
                                        <p>Suspendisse pellentesque, odio vel ultricies interdum, mauris nulla ullamcorper magna, non aliquet odio velit aliquam augue.</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <h1>ENERGY</h1>
                                        <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam mattis fringilla urna.</p>
                                    </div>
                                </div>
                        </div>
                    </div>
                        <div class="item">
                            <div class="container">
                                <div class="carousel-caption">
                                    <h1>RESPONSIVE LAYOUT</h1>
                                    <p>This website theme is free to download and use for everyone. This layout is based on Bootstrap framework.</p>
                                    <p><a class="btn btn-lg btn-orange" href="#" role="button">Read More</a></p>
                                </div>
                            </div>
                        </div>
                </div>
                <a class="left carousel-control" href="#templatemo-carousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                <a class="right carousel-control" href="#templatemo-carousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
            </div><!-- /#templatemo-carousel -->
        </div>

       
<?php  
    if (!empty($this->params['url']['status'])) {
        if($this->params['url']['status'] == 2){ 
            $alert="You are not registered yet Plese register first";
        } else if ($this->params['url']['status'] == 3) {
            $alert = "You have entered wrong password";
        } else if ($this->params['url']['status'] == 1) {
            $alert = "You are already registered please goto login";
        } else if ($this->params['url']['status'] == 4) {
            $alert = "you have registered successfully please proceed for login";
        }else if ($this->params['url']['status'] == 6) {
            $alert = "Added succesfully";
        }?>
        <script> alert("<?php echo $alert;?>");
             window.location = "<?php echo ABSOLUTE_URL?>"+ "/home_pages/index";
        </script>
        <?php } ?>