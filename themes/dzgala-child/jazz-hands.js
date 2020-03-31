// This function is only for adding fade ins and such.  You know, jazz hands!!!


( function() {

	// We'll be talking to this obect a lot so let's put it in a var.  $ prefix for jQuery object.
	var $mainImg = jQuery('#main-image');

	console.log(jQuery( window ).width());


	if ( jQuery( window ).width() > 465 ) {

		console.log('Time to load some images!');


		// The image above will need to get a new src attribute.  We are storing that as a data att on the image itself.
		var bg_url = $mainImg.attr( 'data-bg-image' );

		// Create a temporary image
		var $downloadingImage = jQuery("<img>");

		//$downloadingImage.on( 'load', {mainImg: $mainImg, bg_url: bg_url}, loadHeaderImages );


		// bg_url = 'https://images.pexels.com/photos/2126090/pexels-photo-2126090.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260';
		// bg_url = 'https://images.pexels.com/photos/2126090/pexels-photo-2126090.jpeg';


		$downloadingImage.attr("src", bg_url);

		// Attached a function to run when the image has loaded.
		if (!$downloadingImage.complete) {

			console.log( 'Not loaded. Bind event.' );

			jQuery($downloadingImage).on( 'load', {mainImg: $mainImg, bg_url: bg_url}, loadHeaderImages);

		} else {

			console.log( 'Already loaded. Go for it.' );

			loadHeaderImages( $mainImg, bg_url );

		}

	} else {

		console.log('Small screen. Just load srcset atts.');

		$mainImg.attr({
			srcset: '/wp-content/uploads/2019/04/sloth-web-3-768x421.png 345w, /wp-content/uploads/2019/04/sloth-web-3-1024x562.png 465w',
			sizes: '(max-width: 345px) 350px, (max-width: 465px) 465px'
		});

	}



}) ();

// Everything above is just to fire this.
function loadHeaderImages( event ) {

	console.log( 'fade them in' );

	// We set progressive instances of setTimout to cascade the images in.
	setTimeout(
		function(){
			jQuery('.logo-image-fon').toggleClass( 'will-fade-in' );
			jQuery('.logo-image-fon').toggleClass( 'fadeIn' );
		},
		500
	);
	setTimeout(
		function(){
			jQuery('.honorees').toggleClass( 'will-fade-in' );
			jQuery('.honorees').toggleClass( 'fadeIn' );
		},
		750
	);
	setTimeout(
		function(){

			event.data.mainImg.attr( 'src', event.data.bg_url );
			// -1024x562

			event.data.mainImg.toggleClass( 'fadeInRight' );
			// $mainImg.attr( 'src', bg_url );
			// $mainImg.toggleClass( 'fadeInRight' );
		},
		1000
	);

}
