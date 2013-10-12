	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php getTitle(); ?></title>
		<meta name="description" content="<?php echo _DESCRIPTION; ?>">
		<meta name="sitedomain" content="<?php echo _U; ?>" />
		<meta name="Author" content="Dosis Altas">
		<meta name="copyright" content="Pop">
		<meta name="Classification" content="<?php echo _DESCRIPTION; ?>">
		<meta name="country" content=" Mexico" />
		<meta name="Language" content="Spanish" />
		<meta name="distribution" content="Global" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--favicons-->
		<meta name="msapplication-TileImage" content="apple-touch-icon.png">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="application-name" content="<?php getTitle(); ?>" />
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="apple-touch-icon" href="apple-touch-icon.png">
		<!--CSS-->
		<link rel="stylesheet" href="<?php css('style.css'); ?>" type="text/css">
		<!--JS-->
		<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<script src="<?php echo js('_lib/head.js'); ?>"></script>
		<script>var _U = "<?php echo _U; ?>";</script>
		<script>
		head.js(
		    'http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js',
		    function () { window.jQuery || head.js('<?php js('_lib/jquery.js'); ?>') }
		);
		</script>
	</head>