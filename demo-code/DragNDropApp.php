<?php 
    $homepath = '../';
    $title = 'X-Shape Demo Code';
	include('../inc/preHeader.php');
?>
<body>
<pre class="prettyprint linenums:1">
DragNDropApp = function(io){

  //redraw canvas when objects have moved
  io.setFramerate(60);

  //create array to hold objects
  var draggables = [];

  //create red circle with radius 60
  draggables[0] = io.addObj(
    new iio.Circle(io.canvas.center.x
                  ,io.canvas.center.y+85
                  ,60)
    .setFillStyle('red')
    .setAlpha(.9));

  //create blue 160x100 rectangle
  draggables[1] = io.addObj(
    new iio.Rect(io.canvas.center.x+120
                ,io.canvas.center.y-80
                ,160,100)
      .setFillStyle('00BAFF')
      .setAlpha(.9));

  //create green hexagon
  draggables[2] = io.addObj(
    new iio.Poly(io.canvas.center.x-130
                ,io.canvas.center.y-50 
                ,[-36,-64
                 ,36,-64
                 ,75,0
                 ,36,64
                 ,-36,64
                 ,-75,0])
      .setFillStyle('65B042')
      .setAlpha(.9));
 

  var dV; //remember where the mouse  
          //is relative to circle center

  //keep index of selected object
  var selected = -1;

  //handle mouse down
  io.canvas.addEventListener('mousedown', function(event){
    
    //prevent text selection
    event.preventDefault();

    //check for selected objects
    for (var i=draggables.length-1;i>=0;i--)
      if (draggables[i].contains(io.getEventPosition(event))){
          draggables[i].active = true;
          dV=iio.Vec.sub(draggables[i].pos
             ,io.getEventPosition(event));
          selected=i;
          return;
      }
  });

  //handle mouse move
  io.canvas.addEventListener('mousemove', function(event){
      if (selected>-1)
          draggables[selected]
            .setPos(io.getEventPosition(event)
            .add(dV));
  });

  //handle mouse up
  function deselect(event){ selected=-1; }
  io.canvas.addEventListener('mouseup', deselect);
  //release circle when mouse moves off canvas
  this.focusOff = deselect;

}; iio.start(DragNDropApp)</pre>
</body>
</html>