@extends('layout')
@section('content')
<div id="content">
            <!--Main banner image-->
            <div id = "banner_image">
                <div class="container">
                    <center>
                        <div id="banner_content">
                            <h1>Biggest Online Gift Store</h1>
                            <h4><p>Flat &nbsp;&#8377;100&nbsp;&nbsp;OFF&nbsp;&nbsp;on all products.</p></h4>
                            <br>
                            <br>
                            <a  href="/products" class="btn btn-danger btn-lg active">Shop Now</a>
                        </div>
                    </center>
                </div>
            </div>
            <br>
            <br>
            <!--Main banner image end-->

            <!--Item categories listing-->
            <div class="container text-center">
                <div id="item_list">
                    <div class="panel panel-default">
                        <div class="panel-heading  color">
                            <h3 style="color:orange">Choose&nbsp;&nbsp;From&nbsp;&nbsp;wide&nbsp;&nbsp;ranges&nbsp;&nbsp;of&nbsp;&nbsp;products</h3>
                        </div>

                    <div class="panel-body">
                        <div class="col-sm-3">
                            <a href="/products#dress">
                               <div class="thumbnail">
                                    <img src="./img/dress.jpeg" alt="Dress" >
                                        <div class="caption">
                                            <h3>Dresses</h3>
                                        </div>
                                </div>
                            </a>
                        </div>

                         <div class="col-sm-3">
                            <a href="/products#frame">
                               <div class="thumbnail">
                                    <img src="./img/frame.jpg" alt="frame" >
                                        <div class="caption">
                                            <h3>Frames</h3>
                                        </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-sm-3">
                            <a href="/products#mugs">
                               <div class="thumbnail">
                                    <img src="./img/mugs.jpg" alt="mugs" >
                                        <div class="caption">
                                            <h3>Mugs</h3>
                                        </div>
                                </div>
                            </a>
                        </div>

                         <div class="col-sm-3">
                            <a href="/products#watch">
                               <div class="thumbnail">
                                    <img src="./img/watch.jpeg" alt="watch" >
                                        <div class="caption">
                                            <h3>Watch</h3>
                                        </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>



                </div>
            </div>

            <!--Item categories listing end-->
        </div>
@endsection

