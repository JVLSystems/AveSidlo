<?php

use Latte\Runtime as LR;

/** source: /var/www/html/avesidlo/app/ClientModule/Presenters/templates/Company/default.latte */
final class Templatecc4c1d20ba extends Latte\Runtime\Template
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
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("this")) /* line 20 */;
		echo '">Spoločnosti</a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <a class="btn btn-white font-weight-bold py-3 px-6 mr-2" data-toggle="tooltip" title="Pridajte si ďalšiu spoločnosť do nášho sídla" data-placement="top" href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("add")) /* line 25 */;
		echo '">Nová spoločnosť</a>
                        </div>
                    </div>
                </div>

                    <div class="d-flex flex-column-fluid">
                        <div class="container">
                            <div class="card card-custom gutter-b">
                                <div class="card-header">
                                    <div class="card-title">
                                        <h3 class="card-label">
                                            Spoločnosti
                                            <small>vaše spoločnosti, ktoré sídlia v našej nehnuteľnosti</small>
                                        </h3>
                                    </div>
                                </div>
                                <div class="card-body">
';
		/* line 42 */ $_tmp = $this->global->uiControl->getComponent("companyGrid");
		if ($_tmp instanceof Nette\Application\UI\Renderable) $_tmp->redrawControl(null, false);
		$_tmp->render();
		echo '                                </div>
                            </div>
                        </div>
                    </div>

            </div>

';
		$this->createTemplate('../footer.latte', $this->params, 'include')->renderToContentType('html') /* line 50 */;
		echo '        </div>
    </div>
</div>
';
		$this->createTemplate('../user.latte', $this->params, 'include')->renderToContentType('html') /* line 54 */;
		
	}

}
