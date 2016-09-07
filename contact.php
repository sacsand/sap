  <!--HEADER -->
 <?php include 'header.php'; ?>
  <!-- /HEADER  -->


  <!--HEADER ROW-->
  <!--HEADER ROW-->
 <?php include 'navigation.php'; ?>
  <!-- /HEADER ROW -->
  <!-- /HEADER ROW -->




<div class="container">
	  <!--PAGE TITLE-->

	<div class="row">
		<div class="span12">
		<div class="page-header">
				<h1>
				Contact
			</h1>
		</div>
		</div>
	</div>

  <!-- /. PAGE TITLE-->

  <div class="row">

  	<div class="span12"> 
  		<div id="map-canvas"></div>
  	</div>

  		


  		<span class="span6">



  			<h3>Address</h3>
  			<address>
  <strong>Fornax, Inc.</strong><br>
  795 Folsom Ave, Suite 600<br>
  San Francisco, CA 94107<br>
  <abbr title="Phone">P:</abbr> (123) 456-7890
</address>
 
<address>
  <strong>Email</strong><br>
  <a href="mailto:#">first.last@example.com</a>
</address>
<address>
 <p><strong>Key contact people</strong></p>
<ul>
<li>Mala Singleton Bamford: +94 773082561</li>
<li>Kanthi Perera: + 94 775215699</li>
<li>Shanthi Wijesighe: + 94 77 3024781</li>
<li>Vinod Kanna: + 94 711769189</li>
</ul>
<p><strong>E-mail: <a href="mailto:info@gfqe.lk">info@gfqe.lk</a></strong></p>
</address>


  			<p>
WRITE SOETHING HERE sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.


  			</p>
  		</span>

      <span class="span6">
        <form>
        <fieldset>
           <h3>Contact Us</h3>
           
           <input class="input-xxlarge" type="text" placeholder="Name" /> 
           <input class="input-xxlarge" type="text" type="email" placeholder="Email" required/> 

           <textarea  class="input-xxlarge"  rows="10"  placeholder="Your Message"></textarea>
            <br>
           <button style="background:purple;color:white;" type="submit" class="btn">Submit</button>
        </fieldset>
      </form>
      </span>

  </div>

	
</div>



<!--Footer
==========================-->

<?php include 'footer.php'; ?> 

<!--/.Footer-->

</body>
  <!--GOOGLE MAP-->
    <script src="http://maps.googleapis.com/maps/api/js"></script>
     <script>
    var map;
    function initialize() {
      var mapOptions = {
        zoom: 8,
        center: new google.maps.LatLng(-34.397, 150.644),
        mapTypeId: google.maps.MapTypeId.ROADMAP
      };
      map = new google.maps.Map(document.getElementById('map-canvas'),
          mapOptions);
    }

    google.maps.event.addDomListener(window, 'load', initialize);

    </script>
</html>
