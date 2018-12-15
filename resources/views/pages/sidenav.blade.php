

    <nav class="navbar navbar-default" role="navigation">
           
		<div class="navbar-header">
			<a id="menu-toggle" href="#" class="navbar-toggle">
					<span class="sr-only">togglenav</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			</a>
  			<a class="navbar-brand" href="home.xhtml">
  				logo
  			</a>
		</div>
		<div id="sidebar-wrapper" class="sidebar-toggle">
			<ul class="sidebar-nav">
		    	<li>
		      		<a href="#item1">Men</a>
		    	</li>
		    	<li>
		      		<a href="#item2">woman</a>
		    	</li>
		    	<li>
		      		<a href="#item3">children</a>
		    	</li>
		  	</ul>
		</div>
  	
</nav>
     <!--using bootstrap css and js and editing css and jquery from it -->
<script>
      /*  $(window).resize(function() {
            var path = $(this);
            var contW = path.width();
            if(contW >= 751){
                document.getElementsByClassName("sidebar-toggle")[0].style.left="200px";
            }else{
                document.getElementsByClassName("sidebar-toggle")[0].style.left="-200px";
            }
        }); */
        $(document).ready(function() {
            $('.dropdown').on('show.bs.dropdown', function(e){
                $(this).find('.dropdown-menu').first().stop(true, true).slideDown(300);
            });
            $('.dropdown').on('hide.bs.dropdown', function(e){
                $(this).find('.dropdown-menu').first().stop(true, true).slideUp(300);
            });
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                var elem = document.getElementById("sidebar-wrapper");
                left = window.getComputedStyle(elem,null).getPropertyValue("left");
                if(left == "200px"){
                    document.getElementsByClassName("sidebar-toggle")[0].style.left="-200px";
                }
                else if(left == "-200px"){
                    document.getElementsByClassName("sidebar-toggle")[0].style.left="200px";
                }
            });
        });</script>
