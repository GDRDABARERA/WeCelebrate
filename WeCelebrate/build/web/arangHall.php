<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
         <meta charset="UTF-8">
    <title>Table arrange</title>
    <link rel="stylesheet" href="css/mycss.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css" media="screen" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style-portfolio.css">
    <link rel="stylesheet" href="css/picto-foundry-food.css" />
    <link rel="stylesheet" href="css/jquery-ui.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="icon" href="favicon-1.ico" type="image/x-icon">
    
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"> </script>
    <script type="text/javascript" src="js/bootstrap.min.js" ></script>
    <script type="text/javascript" src="js/jquery.mixitup.min.js" ></script>
    <script type="text/javascript" src="js/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>      
    <script type="text/javascript" src="js/jquery.mixitup.min.js" ></script>
     <script type="text/javascript" src="js/paypal-button.min.js" ></script>
     <script type="text/javascript" src="js/jcanvas.min.js"> </script>
     <script type="text/javascript" src="js/jcanvas.js"> </script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    <script src="js/jquery.min.js"></script> 
    <script src="js/my.js"></script>
    <style type="text/css">
      html, body {
        height: 100%;
        width: 100%;
        padding: 0;
        margin: 0;
      
      }
      
      #full-screen-background-image {
        z-index: -999;
        min-height: 100%;
        min-width: 1024px;
        width: 100%;
        height: 100%;
        position: fixed;
        top: 0;
        left: 0;
        opacity: 0.4;
        filter: alpha(opacity=40);
      }

      #wrapper {
        position: relative;
        width: 800px;
        min-height: 400px;
        margin: 100px auto;
        color: #333;
      }

      a:link, a:visited, a:hover {
        color: #333;
        font-style: italic;
      }

      a.to-top:link,
      a.to-top:visited, 
      a.to-top:hover {
        margin-top: 1000px;
        display: block;
        font-weight: bold;
        padding-bottom: 30px;
        font-size: 30px;
      } 
    .draggable {position:absolute}
        #t1 {background-color:#f00 ;width: 40px;height:100px }
        #t2 {background-color:#f00 ;width: 40px;height:100px;left: 100px;}
        #t3 {background-color:#f00;width: 40px;height:100px;left: 200px;}
        #t4 {background-color:#f00;width: 40px;height:100px;left: 300px;}
        #t5 {background-color:#f00;width: 40px;height:100px;left: 400px;}
        
       
    </style>
    <script type="text/javascript">
        
          
    </script>

    </head>
    <body>
        <img src="images/Birthday/arange1.jpg" id="full-screen-background-image" /> 
            <div id="wrapper">
              <!--- content inside-->
              <div class="container">
                  <div class="row">
                      <div class="col-sm-2 col-md-5 col-lg-5">
                          <h2> Arrange the Hall  </h2> <br><br>
                         
                            <label for="firstname">Tables: </label><br><br>
                            <div class="draggable" id="t1" draggable="true" ondragstart="drag(event)" ></div>
                             <div class="draggable" id="t2" draggable="true" ondragstart="drag(event)" ></div>
                             <div class="draggable" id="t3" draggable="true" ondragstart="drag(event)" ></div>
                             <div class="draggable" id="t4" draggable="true" ondragstart="drag(event)"></div>
                             <div class="draggable" id="t5" draggable="tru<e" ondragstart="drag(event)" ></div>


                      </div>
                       <div class="col-sm-2 col-md-5 col-lg-5">
                           
                  

                           <h2>Arrange your own Hall arrangement</h2> <br><br>

                              <canvas id="canvas" width=300 height=400></canvas>
                    
                    <!-- java script for canvas ---------------------------------------------------->
                                                            <script type="text/javascript">
                                                                    // get canvas related references
                                                            var canvas = document.getElementById("canvas");
                                                            var ctx = canvas.getContext("2d");
                                                            var BB = canvas.getBoundingClientRect();
                                                            var offsetX = BB.left;
                                                            var offsetY = BB.top;
                                                            var WIDTH = canvas.width;
                                                            var HEIGHT = canvas.height;

                                                            // drag related variables
                                                            var dragok = false;
                                                            var startX;
                                                            var startY;

                                                            // an array of objects that define different rectangles
                                                            var rects = [];
                                                            rects.push({
                                                                x: 50 ,
                                                                y: 50 - 10,
                                                                width: 30,
                                                                height: 60,
                                                                fill: "#400080",
                                                                isDragging: false
                                                            });
                                                            rects.push({
                                                                x: 90,
                                                                y: 50 - 10,
                                                                width: 30,
                                                                height: 60,
                                                                fill: "#400080",
                                                                isDragging: false
                                                            });
                                                            rects.push({
                                                                x: 130,
                                                                y: 50 - 10,
                                                                width: 30,
                                                                height: 60,
                                                                fill: "#400080",
                                                                isDragging: false
                                                            });
                                                            rects.push({
                                                                x: 170,
                                                                y: 50 - 10,
                                                                width: 30,
                                                                height: 60,
                                                                fill: "#400080",
                                                                isDragging: false
                                                            });
                                                            rects.push({
                                                                x: 210,
                                                                y: 50 - 10,
                                                                width: 30,
                                                                height: 60,
                                                                fill: "#400080",
                                                                isDragging: false
                                                            });
                                                            
                                                            rects.push({
                                                                x: 250,
                                                                y: 50 - 10,
                                                                width: 30,
                                                                height: 60,
                                                                fill: "#400080",
                                                                isDragging: false
                                                            });

                                                            // listen for mouse events
                                                            canvas.onmousedown = myDown;
                                                            canvas.onmouseup = myUp;
                                                            canvas.onmousemove = myMove;

                                                            // call to draw the scene
                                                            draw();

                                                            // draw a single rect
                                                            function rect(x, y, w, h) {
                                                                ctx.beginPath();
                                                                ctx.rect(x, y, w, h);
                                                                ctx.closePath();
                                                                ctx.fill();
                                                            }

                                                            // clear the canvas
                                                            function clear() {
                                                                ctx.clearRect(0, 0, WIDTH, HEIGHT);
                                                            }

                                                            // redraw the scene
                                                            function draw() {
                                                                clear();
                                                                ctx.fillStyle = "#e0ceed";
                                                                rect(0, 0, WIDTH, HEIGHT);
                                                                // redraw each rect in the rects[] array
                                                                for (var i = 0; i < rects.length; i++) {
                                                                    var r = rects[i];
                                                                    ctx.fillStyle = r.fill;
                                                                    rect(r.x, r.y, r.width, r.height);
                                                                }
                                                            }


                                                            // handle mousedown events
                                                            function myDown(e) {

                                                                // tell the browser we're handling this mouse event
                                                                e.preventDefault();
                                                                e.stopPropagation();

                                                                // get the current mouse position
                                                                var mx = parseInt(e.clientX - offsetX);
                                                                var my = parseInt(e.clientY - offsetY);

                                                                // test each rect to see if mouse is inside
                                                                dragok = false;
                                                                for (var i = 0; i < rects.length; i++) {
                                                                    var r = rects[i];
                                                                    if (mx > r.x && mx < r.x + r.width && my > r.y && my < r.y + r.height) {
                                                                        // if yes, set that rects isDragging=true
                                                                        dragok = true;
                                                                        r.isDragging = true;
                                                                    }
                                                                }
                                                                // save the current mouse position
                                                                startX = mx;
                                                                startY = my;
                                                            }


                                                            // handle mouseup events
                                                            function myUp(e) {  
                                                                // tell the browser we're handling this mouse event
                                                                e.preventDefault();
                                                                e.stopPropagation();

                                                                // clear all the dragging flags
                                                                dragok = false;
                                                                for (var i = 0; i < rects.length; i++) {
                                                                    rects[i].isDragging = false;
                                                                }
                                                            }


                                                            // handle mouse moves
                                                            function myMove(e) {
                                                                // if we're dragging anything...
                                                                if (dragok) {

                                                                    // tell the browser we're handling this mouse event
                                                                    e.preventDefault();
                                                                    e.stopPropagation();

                                                                    // get the current mouse position
                                                                    var mx = parseInt(e.clientX - offsetX);
                                                                    var my = parseInt(e.clientY - offsetY);

                                                                    // calculate the distance the mouse has moved
                                                                    // since the last mousemove
                                                                    var dx = mx - startX;
                                                                    var dy = my - startY;

                                                                    // move each rect that isDragging 
                                                                    // by the distance the mouse has moved
                                                                    // since the last mousemove
                                                                    for (var i = 0; i < rects.length; i++) {
                                                                        var r = rects[i];
                                                                        if (r.isDragging) {
                                                                            r.x += dx;
                                                                            r.y += dy;
                                                                        }
                                                                    }

                                                                    // redraw the scene with the new rect positions
                                                                    draw();

                                                                    // reset the starting mouse position for the next mousemove
                                                                    startX = mx;
                                                                    startY = my;

                                                                }
                                                            }


                                                            </script>
                           
                       <!--    <canvas id="canvas" width=300 height=400 style="border:1px solid black;" ondrop="drop(event)" ondragover="allowDrop(event)">
                               
                           </canvas> -->
                           
                           <br><br>
                           <!--<button type="button" class="btn btn-danger">Save</button> -->
                           <a id="downloadLnk" dowoad="YourFileName.jpg"> Download as image</a><br><br>
                           
                           <!--  js to download script to desktop -->
                           <script>
                               function download() {
                                    var dh = canvas.toDataURL('image/jpeg');
                                    this.href = dh;
                                };
                                downloadLnk.addEventListener('click', download, false);

                           </script>
                           
                           <input action="action" type="button" class="btn btn-warning" value="Back to view the bill" onclick="history.go(-1);" />
                     
                      </div>
                  </div>
                  
              </div>
                
                    
                
            </div>
              <footer>
                    <div class="row">
                        <div class="col-lg-12">
                            <p>Copyright 2015 by GDR </p>
                        </div>
                    </div>
                    <!-- /.row -->
              </footer>
        </div>
    </body>
</html>
