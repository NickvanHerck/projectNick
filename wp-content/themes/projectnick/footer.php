
<!-- .site-content -->
 
<script>
		$(function() {
		$( 'ul.nav li' ).on( 'click', function() {
				$( this ).parent().find( 'li.active' ).removeClass( 'active' );
				$( this ).addClass( 'active' );
			});
		});
</script>
			 
<script>
	
function navbarShow() {
    var x = document.getElementById("menu-content");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
</script>			 
 
<footer id="colophon" class="site-footer">
 
 
 
<!-- .site-info -->
    </footer>
 
 
<!-- .site-footer -->
 
</div>
 
 
<!-- .site -->
 
<?php wp_footer(); ?>
 
</body>
</html>
