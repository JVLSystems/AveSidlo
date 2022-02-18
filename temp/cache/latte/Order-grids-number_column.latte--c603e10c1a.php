<?php

use Latte\Runtime as LR;

/** source: /var/www/html/avesidlo/app/ClientModule/Presenters/templates/Order/grids/number_column.latte */
final class Templatec603e10c1a extends Latte\Runtime\Template
{

	public function main(): array
	{
		extract($this->params);
		echo '<a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiPresenter->link(":Client:Company:edit", ['id'=>$item->getId()])) /* line 1 */;
		echo '" class="text-dark-75 font-weight-bolder text-hover-primary">
    ';
		echo LR\Filters::escapeHtmlText($item->getNumber()) /* line 2 */;
		echo '
</a>';
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}

}
