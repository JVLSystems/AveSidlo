<?php

use Latte\Runtime as LR;

/** source: /var/www/html/avesidlo/app/ClientModule/Presenters/templates/Client/_partials/aside.latte */
final class Template136ade9bae extends Latte\Runtime\Template
{

	public function main(): array
	{
		extract($this->params);
		echo '<div class="flex-row-auto offcanvas-mobile w-300px w-xl-350px" id="kt_profile_aside">
    <div class="card card-custom card-stretch">
        <div class="card-body pt-4" style="margin-top: 15px;">
            <div class="d-flex align-items-center">
                <div class="symbol symbol-60 symbol-xxl-100 mr-5 align-self-start align-self-xxl-center">
                    <div class="symbol-label" style="background-image:url(\'';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::escapeCss($basePath)) /* line 6 */;
		echo '/adm/assets/media/users/300_21.jpg\')"></div>
                    <i class="symbol-badge bg-success"></i>
                </div>
                <div>
                    <a class="font-weight-bolder font-size-h5 text-dark-75 text-hover-primary" href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("this")) /* line 10 */;
		echo '">';
		echo LR\Filters::escapeHtmlText($loginUser->getName()) /* line 10 */;
		echo '</a>
                    <div class="text-muted">';
		echo LR\Filters::escapeHtmlText($loginUser->toRole()) /* line 11 */;
		echo '</div>
                </div>
            </div>

            <div class="py-9">
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <span class="font-weight-bold mr-2">E-mail:</span>
                    <a href="mailto:';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($loginUser->getEmail())) /* line 18 */;
		echo '" class="text-muted text-hover-primary">';
		echo LR\Filters::escapeHtmlText($loginUser->getEmail()) /* line 18 */;
		echo '</a>
                </div>
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <span class="font-weight-bold mr-2">Telefón:</span>
';
		if ($loginUser->getPhone()) /* line 22 */ {
			echo '                    <span class="text-muted">';
			echo LR\Filters::escapeHtmlText($loginUser->getPhone()) /* line 22 */;
			echo '</span>
';
		}
		if (!$loginUser->getPhone()) /* line 23 */ {
			echo '                    <span class="text-muted"><em>neuvedené</em></span>
';
		}
		echo '                </div>
            </div>
            <div class="navi navi-bold navi-hover navi-active navi-link-rounded">
                <div class="navi-item mb-2">
                    <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Client:default")) /* line 28 */;
		echo '"';
		echo ($ʟ_tmp = array_filter([$presenter->isLinkCurrent('Client:default') ? 'active' : null, 'navi-link py-4'])) ? ' class="' . LR\Filters::escapeHtmlAttr(implode(" ", array_unique($ʟ_tmp))) . '"' : "" /* line 28 */;
		echo '>
                        <span class="navi-icon mr-2">
                            <span class="svg-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                        <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                        <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero"></path>
                                    </g>
                                </svg>
                            </span>
                        </span>
                        <span class="navi-text font-size-lg">Osobné informácie</span>
                    </a>
                </div>
                <div class="navi-item mb-2">
                    <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Client:settings")) /* line 44 */;
		echo '"';
		echo ($ʟ_tmp = array_filter([$presenter->isLinkCurrent('Client:settings') ? 'active' : null, 'navi-link py-4'])) ? ' class="' . LR\Filters::escapeHtmlAttr(implode(" ", array_unique($ʟ_tmp))) . '"' : "" /* line 44 */;
		echo '>
                        <span class="navi-icon mr-2">
                            <span class="svg-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"></rect>
                                        <path d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z" fill="#000000" opacity="0.3"></path>
                                        <path d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z" fill="#000000"></path>
                                    </g>
                                </svg>
                            </span>
                        </span>
                        <span class="navi-text font-size-lg">Nastavenia účtu</span>
                    </a>
                </div>
                <div class="navi-item mb-2">
                    <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Client:changePassword")) /* line 60 */;
		echo '"';
		echo ($ʟ_tmp = array_filter([$presenter->isLinkCurrent('Client:changePassword') ? 'active' : null, 'navi-link py-4'])) ? ' class="' . LR\Filters::escapeHtmlAttr(implode(" ", array_unique($ʟ_tmp))) . '"' : "" /* line 60 */;
		echo '>
                        <span class="navi-icon mr-2">
                            <span class="svg-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"></rect>
                                        <path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" fill="#000000" opacity="0.3"></path>
                                        <path d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z" fill="#000000" opacity="0.3"></path>
                                        <path d="M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z" fill="#000000" opacity="0.3"></path>
                                    </g>
                                </svg>
                            </span>
                        </span>
                        <span class="navi-text font-size-lg">Zmena hesla</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>';
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}

}
