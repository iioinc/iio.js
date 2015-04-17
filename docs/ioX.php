<?php 
	chdir('../');
    include('inc/redirector.php');
    $homepath = '../';
    $title = 'ioX';
  include('inc/docsGlobals.php');
	include('inc/preHeader.php');
	include('inc/header.php');
  	include('pan/ioObjsPan.php');
?>
	<section class="container right-container top docs">
        <div id='ad-right'>
    <script type="text/javascript"><!--
if (document.body.clientWidth > 1100){
google_ad_client = "ca-pub-1234510751391763";
/* iioEngine_docs-ioX */
google_ad_slot = "5730104736";
google_ad_width = 120;
google_ad_height = 600;
}
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div>
      <div class="docs-top">
        <a class="anchor top-anchor" name="overview">&nbsp;</a> 
        <h1>ioX</h1>
        <h4>Extends :: <a href="ioRect.php">ioRect</a> :: <a href="ioShape.php">ioShape</a> :: <a href="ioObj.php">ioObj</a></h4>
        <p>Essentially, all this class does is provide a class so that the Graphics Engine can override ioRect's <a href="graphics-engine.php#draw">draw</a> function to draw an x-shape instead of a rectangle.</p>
        <p>Therefore, although this class inherits all the shape and image graphics properties, none of them can be used.</p>
        <p>Think of this class as extending a line when it comes to rendering.</p>
        <p>Kinematics are still available though.</p>
        <p>This class must be accessed through the <span class="ioblue">iio</span> package. You can create a local variable to make it directly accessible. All the code samples on this page assume the existence of a local declaration.</p>
        <pre class="prettyprint linenums:1">
//use ioX without local declaration
var x = new iio.ioX();

//local declaration
var ioX = iio.ioX;

//use ioX with local declaration
var x = new ioX();</pre>
      </div>
      <div class="docs-middle">
        <a class="anchor" name="constructors">&nbsp;</a> 
        <h2>Constructors</h2>
        <p>These functions are used to instantiate new instances of the <a href="">ioX</a> class. Constructor functions must be preceded by the <span class="kwd">new</span> keyword.</p>
        <div class="docs-inner">
        <a class="anchor inner-anchor" name="ioX1">&nbsp;</a> 
         <h3 style="padding-left:71px"><span style="margin-left:-71px;">ioX</span>( <a class="red" href="ioVec.php#vector">Vector</a> position, <?php echo $NumberLink?>: width, height )</h3>
         <h3 class="func" style="padding-left:71px"><span style="margin-left:-71px;">ioX</span>( <?php echo $NumberLink?> x, y, width, height )</h3>
          <p>- creates a x-shape with the given position and dimensions. If the <span class="kwd">height</span> is omitted, a square x-shape will be created with the <span class="kwd">width</span> as its size.</p>
          <p>- The default value for all parameters is <span class="kwd">0</span>.</p>
          <pre class="prettyprint linenums:1">
//create a 60x60 x-shape at canvas center
var squareX = new ioX(io.canvas.center,60);

//create a 40x60 x-shape at 0,0
var x = new ioX(0,0,40,60);</pre>
        </div>
      </div>
        <div class="docs-middle">
         <a class="anchor" name="inherited-properties">&nbsp;</a> 
        <h2>Inherited Properties</h2>
        <h4>ioX :: <a href="ioRect.php#properties">ioRect</a> :: <a href="ioShape.php#properties">ioShape</a> :: <a href="ioObj.php#properties">ioObj</a></h4>
        <div class="docs-inner">
          <h3>ioRect.<a href="ioRect.php#width">width</a> :: <?php echo $NumberLink ?></h3>
          <h3 class="func">ioRect.<a href="ioRect.php#height">height</a> :: <?php echo $NumberLink ?></h3>
        </div>
        <div class="docs-inner">
          <h3>ioObj.<a href="ioObj.php#pos">pos</a> :: <a href="ioVec.php">ioVec</a></h3>
          <h3 class="func">ioObj.<a href="ioObj.php#rotation">rotation</a> :: <?php echo $NumberLink ?></h3>
        </div>
      </div>
      <div class="docs-middle">
         <a class="anchor" name="graphics-properties">&nbsp;</a> 
        <h2>Graphics Properties</h2>
        <p>The following properties can are attached by the <a href="graphics-engine.php">iio Graphics Engine</a>. Note that these properties are <span class="kwd">'undefined'</span> by default, so you must define them with their <a href="graphics-functions">set functions</a> or set their values directly.</p>
        <div class="docs-inner">
          <h3>.<a class="kwd" href="graphics-engine.php#style-properties">styles</a>.<a href="graphics-engine.php#strokeStyle">strokeStyle</a> :: Color||Pattern||Gradient</h3>
          <h3 class="func">.<a class="kwd" href="graphics-engine.php#style-properties">styles</a>.<a href="graphics-engine.php#lineWidth">lineWidth</a> :: <?php echo $NumberLink ?></h3>
          <h3 class="func">.<a class="kwd" href="graphics-engine.php#style-properties">styles</a>.<a href="graphics-engine.php#shadow">shadow</a> :: Object</h3>
        </div>
      </div>
      <div class="docs-middle">
         <a class="anchor" name="kinematics-properties">&nbsp;</a> 
        <h2>Kinematics Properties</h2>
        <p>The following properties can are attached by the <a href="kinematics-engine.php">iio Kinematics Engine</a>. Note that these properties are <span class="kwd">'undefined'</span> by default, so you must define them with their <a href="kinematics-functions">set functions</a> or set their values directly.</p>
        <div class="docs-inner">
          <h3>.<a href="kinematics-engine.php#vel">vel</a> :: <a href="ioVec.php">ioVec</a></h3>
          <h3 class="func">.<a href="kinematics-engine.php#torque">torque</a> :: <?php echo $NumberLink ?></h3>
          <h3 class="func">.<a href="kinematics-engine.php#shrinkRate">shrinkRate</a> :: <?php echo $NumberLink ?></h3>
          <h3 class="func">.<a href="kinematics-engine.php#bounds">bounds</a> :: Object</h3>
        </div>
      </div>
        <div class="docs-middle">
         <a class="anchor" name="inherited-functions">&nbsp;</a> 
        <h2>Inherited Functions</h2>
        <h4>ioX :: <a href="ioRect.php#functions">ioRect</a> :: <a href="ioShape.php#functions">ioShape</a> :: <a href="ioObj.php#functions">ioObj</a></h4>
        <div class="docs-inner">
          <h3>ioRect.<a href="ioRect.php#setSize">setSize</a></h3>
          <h3 class="func">ioRect.<a href="ioRect.php#contains">contains</a></h3>
          <h3 class="func">ioRect.<a href="ioRect.php#intersectsWith">intersectsWith</a></h3>
          <h3 class="func">ioRect.<a href="ioRect.php#top">top</a></h3>
          <h3 class="func">ioRect.<a href="ioRect.php#right">right</a></h3>
          <h3 class="func">ioRect.<a href="ioRect.php#bottom">bottom</a></h3>
          <h3 class="func">ioRect.<a href="ioRect.php#right">right</a></h3>
        </div>
        <div class="docs-inner">
          <h3>ioObj.<a href="ioObj.php#setPos">setPos</a></h3>
          <h3 class="func">ioObj.<a href="ioObj.php#translate">translate</a></h3>
          <h3 class="func">ioObj.<a href="ioObj.php#rotate">rotate</a></h3>
        </div>
      </div>
      <div class="docs-middle">
         <a class="anchor" name="graphics-functions">&nbsp;</a> 
        <h2>Graphics Functions</h2>
        <p>The following functions can are attached by the <a href="graphics-engine.php">iio Graphics Engine</a>.</p>
        <div class="docs-inner">
          <h3>.<a href="graphics-engine.php#draw">draw</a></h3>
          <h3 class="func">.<a href="graphics-engine.php#clearDraw">clearDraw</a></h3>
          <h3 class="func">.<a href="graphics-engine.php#setStrokeStyle">setStrokeStyle</a></h3>
          <h3 class="func">.<a href="graphics-engine.php#setLineWidth">setLineWidth</a></h3>
          <h3 class="func">.<a href="graphics-engine.php#setShadow">setShadow</a></h3>
          <h3 class="func">.<a href="graphics-engine.php#setShadowColor">setShadowColor</a></h3>
          <h3 class="func">.<a href="graphics-engine.php#setShadowBlur">setShadowBlur</a></h3>
          <h3 class="func">.<a href="graphics-engine.php#setShadowOffset">setShadowOffset</a></h3>
        </div>
      </div>
      <div class="docs-middle">
         <a class="anchor" name="kinematics-functions">&nbsp;</a> 
        <h2>Kinematics Functions</h2>
        <p>The following functions can are attached by the <a href="kinematics-engine.php">iio Kinematics Engine</a>. Note that you must call the <a href="kinematics-engine.php#enableKinematics">enableKinematics</a> function before you can utilize any of these functions.</p>
        <div class="docs-inner">
          <h3>.<a href="kinematics-engine.php#enableKinematics">enableKinematics</a></h3>
          <h3 class="func">.<a href="kinematics-engine.php#update">update</a></h3>
          <h3 class="func">.<a href="kinematics-engine.php#setVel">setVel</a></h3>
          <h3 class="func">.<a href="kinematics-engine.php#setTorque">setTorque</a></h3>
          <h3 class="func">.<a href="kinematics-engine.php#setBound">setBound</a></h3>
          <h3 class="func">.<a href="kinematics-engine.php#setBounds">setBounds</a></h3>
          <h3 class="func">.<a href="kinematics-engine.php#shrink">shrink</a></h3>
        </div>
      </div>
      <div class="docs-middle">
        <a class="anchor" name="functions">&nbsp;</a> 
        <h2>Functions</h2>
        <p>These functions are added by the <a href="">ioX</a> class, and available to all instantiated <a href="">ioX</a> objects.</p>
        <div class="docs-inner">
        <a class="anchor inner-anchor" name="clone">&nbsp;</a> 
          <h3>.clone</span>()</h3>
        <h5>:: Returns <a href="">ioX</a></h5>
          <p>- returns a new <a href="">ioX</a> with the same properties as this one. Makes a hard copy of the object.</p>
         <pre class="prettyprint linenums:1">
//clone an x-shape
var x2 = x.clone();</pre>
        </div>
      </div>
<?php include('inc/footer.php'); ?>
    </section>
</div>