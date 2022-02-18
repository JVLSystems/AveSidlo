<?php

use Latte\Runtime as LR;

/** source: /var/www/html/avesidlo/app/ClientModule/Presenters/templates/Client/settings.latte */
final class Template2a7e8a670f extends Latte\Runtime\Template
{
	protected const BLOCKS = [
		['content' => 'blockContent'],
	];


	public function main(): array
	{
		extract($this->params);
		if ($this->getParentName()) {
			return get_defined_vars();
		}
		$this->renderBlock('content', get_defined_vars()) /* line 1 */;
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	/** {block content} on line 1 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		$this->createTemplate('../headerMobile.latte', $this->params, 'include')->renderToContentType('html') /* line 2 */;
		echo '
<div class="d-flex flex-column flex-root">
    <div class="d-flex flex-row flex-column-fluid page">
        <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
';
		$this->createTemplate('../header.latte', $this->params, 'include')->renderToContentType('html') /* line 7 */;
		echo '            
            <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                <div class="subheader py-2 py-lg-12 subheader-transparent" id="kt_subheader">
                    <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                        <div class="d-flex align-items-center flex-wrap mr-1">
                            <button class="burger-icon burger-icon-left mr-4 d-inline-block d-lg-none" id="kt_subheader_mobile_toggle">
                                <span></span>
                            </button>

                            <div class="d-flex flex-column">
                                <h2 class="text-white font-weight-bold my-2 mr-5">Môj účet</h2>
                                <div class="d-flex align-items-center font-weight-bold my-2">
                                    <a class="opacity-75 hover-opacity-100" href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Homepage:default")) /* line 20 */;
		echo '">
                                        <i class="flaticon2-shelter text-white icon-1x"></i>
                                    </a>
                                    <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                                    <a class="text-white text-hover-white opacity-75 hover-opacity-100" href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("this")) /* line 24 */;
		echo '">Môj účet</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex flex-column-fluid">
                    <div class="container">
                        <div class="d-flex flex-row">
';
		$this->createTemplate('_partials/aside.latte', $this->params, 'include')->renderToContentType('html') /* line 34 */;
		echo '
                            <div class="flex-row-fluid ml-lg-8">
                                <!--begin::Card-->
                                <div class="card card-custom">
                                    <!--begin::Header-->
                                    <div class="card-header py-3">
                                        <div class="card-title align-items-start flex-column">
                                            <h3 class="card-label font-weight-bolder text-dark">Nastavenia účtu</h3>
                                            <span class="text-muted font-weight-bold font-size-sm mt-1">Zmeňte nastavenia svojho účtu</span>
                                        </div>
                                        <div class="card-toolbar">
                                            <button type="submit" class="btn btn-success mr-2">Uložiť zmeny</button>
                                            <button type="reset" class="btn btn-secondary">Zrušiť</button>
                                        </div>
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Form-->
                                    <form class="form">
                                        <div class="card-body">

                                            <!--begin::Form Group-->
                                            <div class="form-group row align-items-center">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Communication</label>
                                                <div class="col-lg-9 col-xl-6">
                                                    <div class="checkbox-inline">
                                                        <label class="checkbox">
                                                            <input type="checkbox" checked="checked">
                                                            <span></span>Email</label>
                                                        <label class="checkbox">
                                                            <input type="checkbox" checked="checked">
                                                            <span></span>SMS</label>
                                                        <label class="checkbox">
                                                            <input type="checkbox">
                                                            <span></span>Phone</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--begin::Form Group-->
                                            <div class="separator separator-dashed my-5"></div>
                                            <!--begin::Form Group-->
                                            <div class="row">
                                                <label class="col-xl-3"></label>
                                                <div class="col-lg-9 col-xl-6">
                                                    <h5 class="font-weight-bold mb-6">Security:</h5>
                                                </div>
                                            </div>
                                            <!--begin::Form Group-->
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Login verification</label>
                                                <div class="col-lg-9 col-xl-6">
                                                    <button type="button" class="btn btn-light-primary font-weight-bold btn-sm">Setup login verification</button>
                                                    <p class="form-text text-muted pt-2">After you log in, you will be asked for additional information to confirm your identity and protect your account from being compromised.
                                                        <a href="#" class="font-weight-bold">Learn more</a>.</p>
                                                </div>
                                            </div>
                                            <!--begin::Form Group-->
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Password reset verification</label>
                                                <div class="col-lg-9 col-xl-6">
                                                    <div class="checkbox-inline">
                                                        <label class="checkbox m-0">
                                                            <input type="checkbox">
                                                            <span></span>Require personal information to reset your password.</label>
                                                    </div>
                                                    <p class="form-text text-muted py-2">For extra security, this requires you to confirm your email or phone number when you reset your password.
                                                        <a href="#" class="font-weight-boldk">Learn more</a>.</p>
                                                    <button type="button" class="btn btn-light-danger font-weight-bold btn-sm">Deactivate your account ?</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!--end::Form-->
                                </div>
                                <!--end::Card-->
                            </div>

                        </div>
                    </div>
                </div>
            </div>

';
		$this->createTemplate('../footer.latte', $this->params, 'include')->renderToContentType('html') /* line 116 */;
		echo '        </div>
    </div>
</div>
';
		$this->createTemplate('../user.latte', $this->params, 'include')->renderToContentType('html') /* line 120 */;
		
	}

}
