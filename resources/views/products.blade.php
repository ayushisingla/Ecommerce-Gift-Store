@extends('layout')
@extends('header')
@section('content')
<div class="container">
        <!-- Jumbotron Header -->
            <div class="jumbotron home-spacer" id="products-jumbotron">
                <center><h1>Welcome to our E-Store</h1>
                <p>We have the biggest store and wide ranges of gifts for you. No need to hunt around, we have all in one place.</p>
              </center>
            </div>
            <hr>
            <br>
            
        <div class="row">
            <div class="col-sm-3" >
               <div class="panel-group">
               
               <div class="panel panel-default">
                    <div class="panel-heading color">
                        <h3 style="color:orange">Products</h3>
                    </div>
                    <div class="panel-body">
                       <div class="rmvb">
                           <p><a href="#dress"><span style="color:black">Dresses</span></a></p>
                           <p><a href="#frame"><span style="color:black">Frames</span></a></p>
                           <p><a href="#mugs"><span style="color:black">Mugs</span></a></p>
                            <p><a href="#watch"><span style="color:black">Watches</span></a></p>
                        </div>
                    </div>
                </div>
               <br>
                
                </div>
            </div>
            
            
            <div class="col-sm-9 text-center">
                <div class="panel-group">
                  <!----------------------------------------------------featured products----------------------------------->
                   <div class="panel panel-default">
                        <div class="panel-heading  color">
                            <h3 style="color:orange">Our Big Store</h3>
                        </div>
                    
                    <div class="panel-body">
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <img src="./img/dress.jpeg" alt="dress" width="200px" height="300px">
                                    <div class="caption">
                                        <h3>Dress</h3>
                                        <p>Price: Rs. 760.00 </p>
                                            <p><a href= "#"  class="btn btn-primary btn-block">Buy Now</a></p>
                                              </div>
                            </div>
                        </div>
                    
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <img src="./img/frame.jpg" alt="frame" width="200px" height="300px">
                                    <div class="caption">
                                        <h3>Frames</h3>
                                            <p>Price: Rs. 360.00 </p>
                                            <p><a href= "#"  class="btn btn-primary btn-block">Buy Now</a></p>
                                           </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                            <img src="./img/mugs.jpg" alt="mugs" width="200px" height="300px">
                                <div class="caption">
                                    <h3>Mugs</h3>
                                        <p>Price: Rs. 240.00 </p>
                                            <p><a href= "#"  class="btn btn-primary btn-block">Buy Now</a></p>
                                         </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                            <img src="./img/watch.jpeg" alt="watches" width="200px" height="300px">
                                <div class="caption">
                                    <h3>Watch</h3>
                                        <p>Price: Rs. 500.00 </p>
                                            <p><a href= "#"  class="btn btn-primary btn-block">Buy Now</a></p>
                                           </div>
                            </div>
                        </div>
                    </div>
                </div>
                   
                   <!----------------------------------------------------Dresses----------------------------------->
                <div class="panel panel-default">
                        <div class="panel-heading  color">
                            <h3 id="dress" style="color:orange">Dresses</h3>
                        </div>
                    
                    <div class="panel-body">
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                            <img src="./img/dress1.jpg" alt="dress" width="200px" height="300px">
                                    <div class="caption">
                                        <h3>Frock</h3>
                                        <p>Price: Rs. 1200.00 </p>
                                            <p><a href= "#" class="btn btn-primary btn-block">Buy Now</a></p>
                                               </div>
                            </div>
                        </div>
                    
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <img src="./img/dress2.jpg" alt="dress" width="200px" height="300px">
                                    <div class="caption">
                                        <h3>Skirt</h3>
                                            <p>Price: Rs. 930.00 </p>
                                            <p><a href= "#" class="btn btn-primary btn-block">Buy Now</a></p>
                                          </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                            <img src="./img/dress3.jpg" alt="dress" height="600px" width="200px" height="300px">
                                <div class="caption">
                                    <h3>Casuals</h3>
                                        <p>Price: Rs. 950.00 </p>
                                            <p><a href= "#"  class="btn btn-primary btn-block">Buy Now</a></p>
                                   </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                            <img src="./img/dress4.jpg" alt="dress" width="200px" height="300px">
                                <div class="caption">
                                    <h3>Formals</h3>
                                        <p>Price: Rs. 2000.00 </p>
                                            <p><a href= "#" class="btn btn-primary btn-block">Buy Now</a></p>
                                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                   
                   <!----------------------------------------------------Frames----------------------------------->
                <div class="panel panel-default">
                        <div class="panel-heading  color">
                            <h3 id="frame" style="color:orange">Frames</h3>
                        </div>
                    
                    <div class="panel-body">
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <img src="./img/frame1.jpg" alt="frame" width="200px" height="300px">
                                    <div class="caption">
                                        <h3>Love Frames</h3>
                                        <p>Price: Rs. 1500.00 </p>
                                            <p><a href= "#"  class="btn btn-primary btn-block">Buy Now</a></p>
                                              </div>
                            </div>
                        </div> 
                    
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <img src="./img/frame2.jpeg" alt="frame" width="200px" height="300px">
                                    <div class="caption">
                                        <h3>Crossword</h3>
                                            <p>Price: Rs. 1000.00 </p>
                                            <p><a href= "#"  class="btn btn-primary btn-block">Buy Now</a></p>
                                            </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                            <img src="./img/frame3.jpg" alt="frame" width="200px" height="300px">
                                <div class="caption">
                                    <h3>Watch Frame</h3>
                                        <p>Price: Rs. 1500.00 </p>
                                            <p><a href= "#"  class="btn btn-primary btn-block">Buy Now</a></p>
                                         </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                            <img src="./img/frame4.jpg" alt="frame" width="200px" height="300px">
                                <div class="caption">
                                    <h3>Singly pieces</h3>
                                        <p>Price: Rs. 3500.00 </p>
                                            <p><a href= "#"  class="btn btn-primary btn-block">Buy Now</a></p>
                                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                   
                   <!----------------------------------------------------Mugs----------------------------------->
                <div class="panel panel-default">
                        <div class="panel-heading  color">
                            <h3 id="mugs" style="color:orange">Mugs</h3>
                        </div>
                    
                    <div class="panel-body">
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <img src="./img/mugs1.jpeg" alt="mugs" width="200px" height="300px">
                                    <div class="caption">
                                        <h3>Coloured Mug</h3>
                                        <p>Price: Rs. 360.00 </p>
                                            <p><a href= "#" class="btn btn-primary btn-block">Buy Now</a></p>
                                            </div>
                            </div>
                        </div>
                    
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <img src="./img/mugs2.jpg" alt="mugs" width="200px" height="300px">
                                    <div class="caption">
                                        <h3>Magic Mug</h3>
                                            <p>Price: Rs. 600.00 </p>
                                            <p><a href= "#"  class="btn btn-primary btn-block">Buy Now</a></p>
                                             </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                            <img src="./img/mugs3.jpeg" alt="mugs" width="200px" height="300px">
                                <div class="caption">
                                    <h3>Collage mug</h3>
                                        <p>Price: Rs. 310.00 </p>
                                            <p><a href= "#"  class="btn btn-primary btn-block">Buy Now</a></p>
                                               </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                            <img src="./img/mugs4.jpg" alt="mugs" width="200px" height="300px">
                                <div class="caption">
                                    <h3>Bottle words</h3>
                                        <p>Price: Rs. 280.00 </p>
                                            <p><a href= "#"  class="btn btn-primary btn-block">Buy Now</a></p>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                   
                   <!----------------------------------------------------watches----------------------------------->
                   <div class="panel panel-default">
                        <div class="panel-heading  color">
                            <h3 id="watch" style="color:orange">Watches</h3>
                        </div>
                    
                    <div class="panel-body">
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <img src="./img/watch1.jpg" alt="watch" width="200px" height="300px">
                                    <div class="caption">
                                        <h3>White Love</h3>
                                        <p>Price: Rs. 360.00 </p>
                                               
                                            <p><a href= "#"  class="btn btn-primary btn-block">Buy Now</a></p>
                                    </div>
                            </div>
                        </div>
                    
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <img src="./img/watch2.jpg" alt="watch" width="200px" height="300px">
                                    <div class="caption">
                                        <h3>Black Love</h3>
                                            <p>Price: Rs. 400.00 </p>
                                                
                                            <p><a href= "#" class="btn btn-primary btn-block">Buy Now</a></p>
                                               
                                    </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                            <img src="./img/watch3.jpeg" alt="watch" width="200px" height="300px">
                                <div class="caption">
                                    <h3>Black Diamond</h3>
                                        <p>Price: Rs. 900.00 </p>
                                               
                                            <p><a href= "#" class="btn btn-primary btn-block">Buy Now</a></p>
                                                
                                    </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                            <img src="./img/watch4.jpg" alt="watch" width="200px" height="300px">
                                <div class="caption">
                                    <h3>Mi watch</h3>
                                        <p>Price: Rs. 1200.00 </p>
                                               
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                               </div>
                            </div>
                        </div>
                    </div>
                </div>
                    
                </div>
            </div>
        </div>
    </div>
    @endsection