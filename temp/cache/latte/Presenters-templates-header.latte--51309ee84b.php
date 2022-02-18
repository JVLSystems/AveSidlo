<?php

use Latte\Runtime as LR;

/** source: /var/www/html/avesidlo/app/FrontModule/Presenters/templates/header.latte */
final class Template51309ee84b extends Latte\Runtime\Template
{

	public function main(): array
	{
		extract($this->params);
		echo '<div class="top-bar-area bg-dark text-light">
    <div class="container">
        <div class="row align-center client-mobile-row">
            <div class="col-lg-7 address-info">
                <div class="info box">
                    <ul>
                        <li>
                            <i class="fas fa-map-marker-alt"></i> <a class="classic-anchor" target="_blank" href="https://goo.gl/maps/6yvSY3jv97AEyoKaA">Dolné Pažitie 91/85, 911 01 Trenčín</a>
                        </li>
                        <li>
                            <i class="fas fa-envelope-open"></i> <a class="classic-anchor" href="mailto:info@avesidlo.sk">info@avesidlo.sk</a>
                        </li>
                        <li>
                            <i class="fas fa-phone"></i> <a class="classic-anchor" href="tel:+421944868214">+421 948 888 888</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-5 col-sm-12 col-xs-12 text-right button client-mobile-button">
                <div class="item-flex">
                    <a class="button" href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link(":Client:Homepage:default")) /* line 21 */;
		echo '"><i class="fas fa-users"></i> Klientská zóna</a>
                </div>
            </div>
        </div>
    </div>
</div>
<header id="home">
    <nav class="navbar navbar-default navbar-sticky dark attr-border bootsnav">

        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Homepage:default")) /* line 35 */;
		echo '">
                    <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 36 */;
		echo '/assets/img/logo.png" class="logo" alt="Logo">
                </a>
            </div>

            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                    <li>
                        <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Homepage:default")) /* line 43 */;
		echo '"';
		echo ($ʟ_tmp = array_filter([$presenter->isLinkCurrent('Homepage:*') ? 'active' : null])) ? ' class="' . LR\Filters::escapeHtmlAttr(implode(" ", array_unique($ʟ_tmp))) . '"' : "" /* line 43 */;
		echo '>Úvod</a>
                    </li>
                    <li>
                        <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Page:aboutCompany")) /* line 46 */;
		echo '"';
		echo ($ʟ_tmp = array_filter([$presenter->isLinkCurrent('Page:aboutCompany') ? 'active' : null])) ? ' class="' . LR\Filters::escapeHtmlAttr(implode(" ", array_unique($ʟ_tmp))) . '"' : "" /* line 46 */;
		echo '>Naša spoločnosť</a>
                    </li>
                    <li>
                        <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Page:services")) /* line 49 */;
		echo '"';
		echo ($ʟ_tmp = array_filter([$presenter->isLinkCurrent('Page:services') ? 'active' : null])) ? ' class="' . LR\Filters::escapeHtmlAttr(implode(" ", array_unique($ʟ_tmp))) . '"' : "" /* line 49 */;
		echo '>Služby</a>
                    </li>
                    <li>
                        <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiPresenter->link("Homepage:default")) /* line 52 */;
		echo '#pricelist">Cenník</a>
                    </li>
                    <li>
                        <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Page:contact")) /* line 55 */;
		echo '"';
		echo ($ʟ_tmp = array_filter([$presenter->isLinkCurrent('Page:contact') ? 'active' : null])) ? ' class="' . LR\Filters::escapeHtmlAttr(implode(" ", array_unique($ʟ_tmp))) . '"' : "" /* line 55 */;
		echo '>Kontakt</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>';
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}

}
