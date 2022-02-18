<?php

use Latte\Runtime as LR;

/** source: /var/www/html/avesidlo/app/ClientModule/Presenters/templates/header.latte */
final class Templated74a2e3cdf extends Latte\Runtime\Template
{

	public function main(): array
	{
		extract($this->params);
		echo '<!--begin::Header-->
<div id="kt_header" class="header header-fixed">
    <!--begin::Container-->
    <div class="container d-flex align-items-stretch justify-content-between">
        <!--begin::Left-->
        <div class="d-flex align-items-stretch mr-3">
            <!--begin::Header Logo-->
            <div class="header-logo">
                <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Homepage:default")) /* line 9 */;
		echo '">
                    <img alt="Logo" src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 10 */;
		echo '/assets/img/logo-white.png" class="logo-default max-h-40px">
                    <img alt="Logo" src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 11 */;
		echo '/assets/img/logo.png" class="logo-sticky max-h-40px">
                </a>
            </div>
            <!--end::Header Logo-->


            <!--begin::Header Menu Wrapper-->
            <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
                <!--begin::Header Menu-->
                <div id="kt_header_menu"
                     class="header-menu header-menu-left header-menu-mobile header-menu-layout-default">
                    <!--begin::Header Nav-->
                    <ul class="menu-nav">
                        <li data-menu-toggle="click"';
		echo ($ʟ_tmp = array_filter([$presenter->isLinkCurrent('Homepage:*') ? 'menu-item-here' : null, 'menu-item'])) ? ' class="' . LR\Filters::escapeHtmlAttr(implode(" ", array_unique($ʟ_tmp))) . '"' : "" /* line 24 */;
		echo '>
                            <a class="menu-link" href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Homepage:default")) /* line 25 */;
		echo '">
                                <span class="menu-text">Nástenka</span>
                            </a>
                        </li>
                        <li class="menu-item" data-menu-toggle="click">
                            <a href="javascript:;" class="menu-link">
                                <span class="menu-text">Schránka</span>
                            </a>
                        </li>
                        <li class="menu-item" data-menu-toggle="click">
                            <a href="javascript:;" class="menu-link">
                                <span class="menu-text">Oprávnené osoby</span>
                            </a>
                        </li>
                        <li data-menu-toggle="click"';
		echo ($ʟ_tmp = array_filter([$presenter->isLinkCurrent('Company:*') ? 'menu-item-here' : null, 'menu-item'])) ? ' class="' . LR\Filters::escapeHtmlAttr(implode(" ", array_unique($ʟ_tmp))) . '"' : "" /* line 39 */;
		echo '>
                            <a class="menu-link" href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Company:default")) /* line 40 */;
		echo '">
                                <span class="menu-text">Spoločnosti</span>
                            </a>
                        </li>
                    </ul>
                    <!--end::Header Nav-->
                </div>
                <!--end::Header Menu-->
            </div>
            <!--end::Header Menu Wrapper-->
        </div>
        <!--end::Left-->
        <!--begin::Topbar-->
        <div class="topbar">
            <!--begin::User-->
            <div class="dropdown">
                <!--begin::Toggle-->
                <div class="topbar-item">
                    <div class="btn btn-icon btn-hover-transparent-white d-flex align-items-center btn-lg px-md-2 w-md-auto" id="kt_quick_user_toggle">
                        <span class="text-white opacity-70 font-weight-bold font-size-base d-none d-md-inline mr-1">Vitajte,</span>
                        <span class="text-white opacity-90 font-weight-bolder font-size-base d-none d-md-inline mr-4">';
		echo LR\Filters::escapeHtmlText($loginUser->getFirstName()) /* line 60 */;
		echo '</span>
                        <span class="symbol symbol-35">
                            <span class="symbol-label text-white font-size-h5 font-weight-bold bg-white-o-30">';
		echo LR\Filters::escapeHtmlText($loginUser->getFirstLetterFromName()) /* line 62 */;
		echo '</span>
                        </span>
                    </div>
                </div>
                <!--end::Toggle-->
            </div>
            <!--end::User-->
        </div>
        <!--end::Topbar-->
    </div>
    <!--end::Container-->
</div>
<!--end::Header-->';
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}

}
