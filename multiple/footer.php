			</section>

			<footer class="tcenter">
				<p>&copy; 2012 <i class="icon-mobile"></i>The HumbleFace | All Rights Reserved</p>
				<p><a href="#">Twitter</a> <a href="#">Google+</a> <a href="#">Instagram</a></p>
			</footer>

		</div>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.2.1/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/face.js"></script>
	<script type="text/javascript" src="js/script.js?v=1.0"></script>

	<?php if ($liked == false){ ?>
     <script type="text/javascript">
     	$(function(){
     	
     		var pathArray = location.pathname.substring(location.pathname.lastIndexOf('/')+1);
     		if (pathArray == ''){
	     		// Comment this line out if you dont want to use this function
	     		$('.fancy.launch').trigger('click');	
     		}
     		
     	})
     </script>
     <?php } else  {?>
     <script type="text/javascript">
     	$(function(){
     		$('.beforelike').hide();
            $('header li.like a').css({padding : 0, height : 90});
			$('.afterlike').show();
     	})
     </script>
     <?php } ?>

	</body>

</html>
