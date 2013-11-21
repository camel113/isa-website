
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="copyright" content="Isabelle Pilloud"/>
<meta name="language" content="fr"/>


<title>Isabelle Pilloud</title>
<link href="css/menu.css" rel="stylesheet" type="text/css" />
<link href="css/css.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/menuBox.js"></script>

<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>

<link rel="stylesheet" href="fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />

<script type="text/javascript">
    $(function() {
                    $('.mB').menuBox({menuWi:170,speedIn:400,speedOut:200});
                    $('.mB2').menuBox({menuWi:220,speedIn:600,speedOut:400,align:'vertical'});
            });
</script>
<script type="text/javascript">

$(document).ready(function() {

	/* This is basic - uses default settings */

	$("a.single_image").fancybox();

	/* Using custom settings */

	$("a#inline").fancybox({
		'hideOnContentClick': true
	});

	/* Apply fancybox to multiple items */

	$("a.group").fancybox({
		'transitionIn'	:	'elastic',
		'transitionOut'	:	'elastic',
		'speedIn'		:	600,
		'speedOut'		:	200,
		'overlayShow'	:	false
	});

});</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-22193321-3']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>