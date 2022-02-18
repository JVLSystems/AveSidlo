<?php

use Latte\Runtime as LR;

/** source: /var/www/html/avesidlo/app/ClientModule/Presenters/templates/Client/default.latte */
final class Template7486fcdd5b extends Latte\Runtime\Template
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
';
		$form = $this->global->formsStack[] = $this->global->uiControl["userForm"] /* line 37 */;
		echo '                                <form class="form"';
		echo Nette\Bridges\FormsLatte\Runtime::renderFormBegin(end($this->global->formsStack), ['class' => null], false);
		echo '>
                                    <div class="card card-custom card-stretch">
                                        <div class="card-header py-3">
                                            <div class="card-title align-items-start flex-column">
                                                <h3 class="card-label font-weight-bolder text-dark">Osobné informácie</h3>
                                                <span class="text-muted font-weight-bold font-size-sm mt-1">Aktualizujte svoje osobné informácie</span>
                                            </div>
                                            <div class="card-toolbar">
                                                <button class="btn btn-success mr-2"';
		$ʟ_input = $_input = end($this->global->formsStack)["submit"];
		echo $ʟ_input->getControlPart()->addAttributes(['class' => null])->attributes() /* line 45 */;
		echo '>Uložiť zmeny</button>
                                                <button type="reset" class="btn btn-secondary">Zrušiť</button>
                                            </div>
                                        </div>

                                        <div class="card-body">
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Meno a priezvisko</label>
                                                <div class="col-lg-9 col-xl-6">
                                                    <input class="form-control form-control-lg form-control-solid"';
		$ʟ_input = $_input = end($this->global->formsStack)["name"];
		echo $ʟ_input->getControlPart()->addAttributes(['class' => null])->attributes() /* line 54 */;
		echo '>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <label class="col-xl-3"></label>
                                                <div class="col-lg-9 col-xl-6">
                                                    <h5 class="font-weight-bold mt-10 mb-6">Kontaktné informácie</h5>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Telefón</label>
                                                <div class="col-lg-9 col-xl-6">
                                                    <div class="input-group input-group-lg input-group-solid">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class="la la-phone"></i>
                                                            </span>
                                                        </div>

                                                        <input class="form-control form-control-lg form-control-solid" placeholder="Telefón" ';
		$ʟ_input = $_input = end($this->global->formsStack)["phone"];
		echo $ʟ_input->getControlPart()->addAttributes(['class' => null, 'placeholder' => null])->attributes() /* line 74 */;
		echo '>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">E-mail</label>
                                                <div class="col-lg-9 col-xl-6">
                                                    <div class="input-group input-group-lg input-group-solid">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class="la la-at"></i>
                                                            </span>
                                                        </div>

                                                        <input class="form-control form-control-lg form-control-solid" disabled readonly';
		$ʟ_input = $_input = end($this->global->formsStack)["email"];
		echo $ʟ_input->getControlPart()->addAttributes(['class' => null, 'disabled' => null, 'readonly' => null])->attributes() /* line 88 */;
		echo '>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
';
		echo Nette\Bridges\FormsLatte\Runtime::renderFormEnd(array_pop($this->global->formsStack), false) /* line 37 */;
		echo '                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

';
		$this->createTemplate('../footer.latte', $this->params, 'include')->renderToContentType('html') /* line 101 */;
		echo '        </div>
    </div>
</div>
';
		$this->createTemplate('../user.latte', $this->params, 'include')->renderToContentType('html') /* line 105 */;
		
	}

}
