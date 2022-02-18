<?php

use Latte\Runtime as LR;

/** source: /var/www/html/avesidlo/app/FrontModule/Presenters/templates/@layout.latte */
final class Template0fa5aef829 extends Latte\Runtime\Template
{

	public function main(): array
	{
		extract($this->params);
		echo '<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Virtuálne sídlo budúcnosti">

    <title>AVESíslo.sk | Virtuálne sídlo budúcnosti</title>

    <link href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 13 */;
		echo '/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 14 */;
		echo '/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 15 */;
		echo '/assets/css/themify-icons.css" rel="stylesheet">
    <link href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 16 */;
		echo '/assets/css/flaticon-set.css" rel="stylesheet">
    <link href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 17 */;
		echo '/assets/css/magnific-popup.css" rel="stylesheet">
    <link href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 18 */;
		echo '/assets/css/owl.carousel.min.css" rel="stylesheet">
    <link href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 19 */;
		echo '/assets/css/owl.theme.default.min.css" rel="stylesheet">
    <link href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 20 */;
		echo '/assets/css/animate.css" rel="stylesheet">
    <link href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 21 */;
		echo '/assets/css/bootsnav.css" rel="stylesheet">
    <link href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 22 */;
		echo '/style.css" rel="stylesheet">
    <link href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 23 */;
		echo '/assets/css/responsive.css" rel="stylesheet">
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn\'t work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="';
		echo LR\Filters::escapeHtmlComment($basePath) /* line 29 */;
		echo '/assets/js/html5/html5shiv.min.js"></script>
      <script src="';
		echo LR\Filters::escapeHtmlComment($basePath) /* line 30 */;
		echo '/assets/js/html5/respond.min.js"></script>
    <![endif]-->

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800&display=swap" rel="stylesheet">

</head>
<body>
';
		$iterations = 0;
		foreach ($flashes as $flash) /* line 40 */ {
			echo '        <script>
            Swal.fire({
                title: ';
			echo LR\Filters::escapeJs($flash->type == 'success' ? 'Úspech!' : 'Chyba!') /* line 43 */;
			echo ',
                text: ';
			echo LR\Filters::escapeJs($flash->message) /* line 44 */;
			echo ',
                icon: ';
			echo LR\Filters::escapeJs($flash->type) /* line 45 */;
			echo ',
                timer: 2000
            });
        </script>
';
			$iterations++;
		}
		echo '

    <div id="site-preloader" class="site-preloader">
        <div class="loader-wrap">
            <div class="ring">
                <span></span>
            </div>
            <h2>AVESídlo</h2>
        </div>
    </div>

';
		$this->renderBlock($ʟ_nm = 'content', [], 'html') /* line 61 */;
		echo '
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 63 */;
		echo '/assets/js/jquery-1.12.4.min.js"></script>
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 64 */;
		echo '/assets/js/popper.min.js"></script>
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 65 */;
		echo '/assets/js/bootstrap.min.js"></script>
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 66 */;
		echo '/assets/js/equal-height.min.js"></script>
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 67 */;
		echo '/assets/js/jquery.appear.js"></script>
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 68 */;
		echo '/assets/js/jquery.easing.min.js"></script>
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 69 */;
		echo '/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 70 */;
		echo '/assets/js/modernizr.custom.13711.js"></script>
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 71 */;
		echo '/assets/js/owl.carousel.min.js"></script>
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 72 */;
		echo '/assets/js/wow.min.js"></script>
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 73 */;
		echo '/assets/js/progress-bar.min.js"></script>
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 74 */;
		echo '/assets/js/isotope.pkgd.min.js"></script>
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 75 */;
		echo '/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 76 */;
		echo '/assets/js/count-to.js"></script>
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 77 */;
		echo '/assets/js/YTPlayer.min.js"></script>
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 78 */;
		echo '/assets/js/progresscircle.js"></script>
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 79 */;
		echo '/assets/js/bootsnav.js"></script>
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 80 */;
		echo '/assets/js/main.js"></script>

</body>
</html>
';
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		if (!$this->getReferringTemplate() || $this->getReferenceType() === "extends") {
			foreach (array_intersect_key(['flash' => '40'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}

}
