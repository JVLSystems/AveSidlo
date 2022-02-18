<?php

use Latte\Runtime as LR;

/** source: /var/www/html/avesidlo/app/ClientModule/Presenters/templates/Company/add.latte */
final class Template9613662448 extends Latte\Runtime\Template
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
<div class="d-flex flex-column flex-root" id="company">
    <div class="d-flex flex-row flex-column-fluid page">
        <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
';
		$this->createTemplate('../header.latte', $this->params, 'include')->renderToContentType('html') /* line 7 */;
		echo '
            <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                <div class="subheader py-2 py-lg-12 subheader-transparent" id="kt_subheader">
                    <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                        <div class="d-flex align-items-center flex-wrap mr-1">
                            <div class="d-flex flex-column">
                                <h2 class="text-white font-weight-bold my-2 mr-5">Spoločnosti</h2>
                                <div class="d-flex align-items-center font-weight-bold my-2">
                                    <a class="opacity-75 hover-opacity-100" href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Homepage:default")) /* line 16 */;
		echo '">
                                        <i class="flaticon2-shelter text-white icon-1x"></i>
                                    </a>

                                    <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                                    <a class="text-white text-hover-white opacity-75 hover-opacity-100" href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("default")) /* line 21 */;
		echo '">Spoločnosti</a>

                                    <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                                    <a class="text-white text-hover-white opacity-75 hover-opacity-100" href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("this")) /* line 24 */;
		echo '">Nová spoločnosť</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                    <div class="d-flex flex-column-fluid">
                        <div class="container">
                            <div class="card card-custom gutter-b">
                                <div class="card-header">
                                    <div class="card-title">
                                        <h3 class="card-label">
                                            Pridať novú spoločnosť
                                        </h3>
                                    </div>
                                </div>

';
		$form = $this->global->formsStack[] = $this->global->uiControl["companyForm"] /* line 42 */;
		echo '                                <form';
		echo Nette\Bridges\FormsLatte\Runtime::renderFormBegin(end($this->global->formsStack), [], false);
		echo '>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>
                                                IČO
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="input-group">
                                                <input class="form-control" v-model="ico" @change="searchICO" placeholder="Zadajte IČO vašej spoločnosti..."';
		$ʟ_input = $_input = end($this->global->formsStack)["ico"];
		echo $ʟ_input->getControlPart()->addAttributes(['class' => null, 'v-model' => null, '@change' => null, 'placeholder' => null])->attributes() /* line 50 */;
		echo '>
                                                <div class="input-group-append">
                                                    <span class="input-group-text line-height-0 py-0">
                                                        <span class="svg-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                                    <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                                                    <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"></path>
                                                                </g>
                                                            </svg>
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>
                                                        DIČ
                                                    </label>
                                                    <input class="form-control" v-model="dic" placeholder="DIČ"';
		$ʟ_input = $_input = end($this->global->formsStack)["dic"];
		echo $ʟ_input->getControlPart()->addAttributes(['class' => null, 'v-model' => null, 'placeholder' => null])->attributes() /* line 73 */;
		echo '>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>
                                                        IČDPH
                                                    </label>
                                                    <input class="form-control" v-model="icdph" placeholder="IČDPH"';
		$ʟ_input = $_input = end($this->global->formsStack)["icdph"];
		echo $ʟ_input->getControlPart()->addAttributes(['class' => null, 'v-model' => null, 'placeholder' => null])->attributes() /* line 81 */;
		echo '>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>
                                                Názov
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input class="form-control" v-model="name" placeholder="Názov vašej spoločnosti"';
		$ʟ_input = $_input = end($this->global->formsStack)["name"];
		echo $ʟ_input->getControlPart()->addAttributes(['class' => null, 'v-model' => null, 'placeholder' => null])->attributes() /* line 91 */;
		echo '>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label>
                                                        Adresa
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <input class="form-control" v-model="address" placeholder="Adresa vašej spoločnosti"';
		$ʟ_input = $_input = end($this->global->formsStack)["address"];
		echo $ʟ_input->getControlPart()->addAttributes(['class' => null, 'v-model' => null, 'placeholder' => null])->attributes() /* line 101 */;
		echo '>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>
                                                        Mesto
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <input class="form-control" v-model="city"';
		$ʟ_input = $_input = end($this->global->formsStack)["city"];
		echo $ʟ_input->getControlPart()->addAttributes(['class' => null, 'v-model' => null])->attributes() /* line 110 */;
		echo '>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label>
                                                        Štát
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <select class="form-control selectpicker" data-size="7" data-live-search="true"';
		$ʟ_input = $_input = end($this->global->formsStack)["states"];
		echo $ʟ_input->getControlPart()->addAttributes(['class' => null, 'data-size' => null, 'data-live-search' => null])->attributes() /* line 121 */;
		echo '>';
		echo $ʟ_input->getControl()->getHtml() /* line 121 */;
		echo '</select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>
                                                        PSČ
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <input class="form-control" v-model="zip"';
		$ʟ_input = $_input = end($this->global->formsStack)["zip"];
		echo $ʟ_input->getControlPart()->addAttributes(['class' => null, 'v-model' => null])->attributes() /* line 130 */;
		echo '>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary mr-2" :class="isSpinning ? \'spinner spinner-white spinner-right\' : \'\'" :disabled="isSpinning">Uložiť</button>
                                    </div>
';
		echo Nette\Bridges\FormsLatte\Runtime::renderFormEnd(array_pop($this->global->formsStack), false) /* line 42 */;
		echo '                                </form>
                            </div>
                        </div>
                    </div>

            </div>

';
		$this->createTemplate('../footer.latte', $this->params, 'include')->renderToContentType('html') /* line 146 */;
		echo '        </div>
    </div>
</div>
';
		$this->createTemplate('../user.latte', $this->params, 'include')->renderToContentType('html') /* line 150 */;
		echo '

<script>
    new Vue({
        el: \'#company\',
        data: {
            ico: \'\',
            dic: \'\',
            icdph: \'\',
            name: \'\',
            address: \'\',
            city: \'\',
            zip: \'\',
            isSpinning: false,
            spinningClass: \'spinner spinner-white spinner-right\'
        },
        methods: {
            searchICO() {
                if (this.ico.length > 3) {
                    this.isSpinning = true
                    var link = ';
		echo LR\Filters::escapeJs($this->global->uiControl->link("search!", ['ico'=>'replaceICO'])) /* line 171 */;
		echo '
                    var _this = this

                    axios.get(link.replace("replaceICO", this.ico))
                        .then(function (response) {
                            _this.name = response.data.name
                            _this.dic = response.data.tax_id
                            _this.address = response.data.street
                            _this.city = response.data.city
                            _this.zip = response.data.zip

                            _this.isSpinning = false
                        })
                }
            }
        }
    })
</script>';
	}

}
