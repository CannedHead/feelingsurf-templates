
<footer class='footer'>
	<div class='row'>
	    <div class='col-sm-2 footer-logo'>
	        <img class='img-responsive img-footer' src='https://s3-sa-east-1.amazonaws.com/feelingsurf/logoblancohome.svg'>           
	    </div>  
	    <div class='col-sm-8 footer-list'>
	    	<ul class='list-inline'>
	    		<li>NOSOTROS</li>
	    		<li>POLITICAS DE PRIVACIDAD</li>
	    		<li>TERMINOS Y CONDICIONES</li>
	    		<li>POLITICAS DE DEVOLUCION</li>
	    		<li>TIENDAS</li>
	    	</ul>	
	    	<div class='copyright'>
	    		<p>COPYRIGHT &copy; 2015 FEELINGSURF</p>  
	    	</div>	
	    </div>	
	    <div class='col-sm-2 footer-logo'>
	        <img class='img-responsive img-footer' src='https://s3-sa-east-1.amazonaws.com/feelingsurf/logoblancohome.svg'>           
	    </div> 
	</div>
</footer>

<script type="text/javascript" src="js/library-1-10-2.js"> </script>
<script type="text/javascript" src="js/bootstrap.js"> </script>
<script src="js/jquery.fitvids.js"></script>

<script type="text/javascript">
	$(document).ready(function(){

	    // Target your .container, .wrapper, .post, etc.
	    $("#video-container").fitVids();
		
		$('footer .scroll').click(function(e) {
			e.preventDefault();
			$('html, body').animate({scrollTop:0},500);       
		});
		
	});
	
</script>

</body>
</html>
