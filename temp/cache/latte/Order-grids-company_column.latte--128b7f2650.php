<?php

use Latte\Runtime as LR;

/** source: /var/www/html/avesidlo/app/ClientModule/Presenters/templates/Order/grids/company_column.latte */
final class Template128b7f2650 extends Latte\Runtime\Template
{

	public function main(): array
	{
		extract($this->params);
		if ($item->getCompany()) /* line 1 */ {
			echo '    <a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiPresenter->link(":Client:Company:edit", ['id'=>$item->getCompany()->getId()])) /* line 2 */;
			echo '" class="text-dark-75 font-weight-bolder text-hover-primary">
        ';
			echo LR\Filters::escapeHtmlText($item->getCompany()->getName()) /* line 3 */;
			echo '
    </a>
';
		}
		else /* line 5 */ {
			echo '    <span class="label label-danger label-inline font-weight-lighter">nie je</span>
';
		}
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}

}
