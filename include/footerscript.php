<script src="<?=BASE_URL?>/js/waypoints.min.js"></script>
	<script src="<?=BASE_URL?>/js/waypoints-sticky.min.js"></script>
	<script>
		function makeSticky() {
			var myWindow = $( window ),
				myHeader = $( ".site-header" );

			myWindow.scroll( function() {
				if ( myWindow.scrollTop() == 0 ) {
					myHeader.removeClass( "sticky-nav" );
				} else {
					myHeader.addClass( "sticky-nav" );
				}
			} );
		}

		$( function() {
			// makeSticky();
			 
			$( ".site-header" ).waypoint( 'sticky' );
		} );
	</script>
    <script src="<?=BASE_URL?>/js/cssmenumaker.js"></script>
<script type="text/javascript">
	$("#cssmenu").menumaker({
		title: "Menu",
		format: "multitoggle"
	});
</script>
<script src="<?=BASE_URL?>/js/jquery.easing.1.3.js"></script>
	<script src="<?=BASE_URL?>/js/jquery.parallax-scroll.js"></script>