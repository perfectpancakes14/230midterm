<?php 
session_start();
?>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Karen Social Media Site</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS
	============================================ -->
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Sarabun:300,300i,400,400i,500,600,700,800&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <!-- Font-awesome CSS -->
    <link rel="stylesheet" href="assets/css/vendor/font-awesome.min.css">
    <!-- Slick slider css -->
    <link rel="stylesheet" href="assets/css/plugins/slick.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="assets/css/plugins/animate.css">
    <!-- main style css -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
        w[l] = w[l] || []; w[l].push({
            'gtm.start':
                new Date().getTime(), event: 'gtm.js'
        }); var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-5JCTSSF');</script>
    <!-- End Google Tag Manager -->

</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5JCTSSF" height="0" width="0"
        style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
	
	<!-- Start Header Area -->
    <header class="header-area">
        <!-- main menu start -->
        <div class="main-menu-wrapper sticky header-transparent">
            <div class="container custom-container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-6">
                    </div>
                    <div class="col-6">
                        <div class="buy-btn text-right">
                            <a href="../signOut.php" class="btn btn-all" target="_blank">Sign out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main menu end -->
    </header>
    <!-- end Header Area -->
    <main>
        <!-- section start -->
        <section class="main-menu-wrapper section-padding pb-10">
                <div class="container custom-container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-6">
                            <div class="hero-slider-content">
                                <h4 class="slide-subtitle pb-3">Date: (insert date here)</h4>
                                <h2 class="slide-title">Insert Account Name Here</h2>
								
								<p>Moby-Dick, written by Herman Melville, follows the journey of Ishmael, a sailor who joins the whaling ship Pequod, captained by the enigmatic and vengeful Ahab. Ahab is obsessed with hunting down Moby Dick, a massive white whale that had previously destroyed his ship and bitten off his leg.

As the Pequod sails across the oceans, Ishmael encounters a diverse crew and learns about the whaling industry, the dangers of the sea, and Ahab's relentless quest for revenge. The novel explores themes of obsession, the struggle between man and nature, and the limits of knowledge.

In the climactic confrontation, Ahab finally finds Moby Dick, leading to a tragic and destructive showdown that results in the loss of the ship and its crew, with Ishmael as the sole survivor, left to tell the tale. The novel is both an adventure and a profound meditation on humanity's place in the universe.</p>
								<?php if(/*the posts email*/ 1==1 /*the session email*/) {?>
									<a href="edit.php" class="btn btn-all">edit post</a>
									<a href="delete.php" class="btn btn-all">delete post</a>
								<?php } ?>
                                <a href="index.php" class="btn btn-all">Return to Feed</a>
                            </div>
						</div>
                    </div>
                </div>
        </section>
	</main>
</body>
</html>