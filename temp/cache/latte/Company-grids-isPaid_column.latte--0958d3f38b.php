<?php

use Latte\Runtime as LR;

/** source: /var/www/html/avesidlo/app/ClientModule/Presenters/templates/Company/grids/isPaid_column.latte */
final class Template0958d3f38b extends Latte\Runtime\Template
{

	public function main(): array
	{
		extract($this->params);
		if ($item->isPaid()) /* line 1 */ {
			echo '    <span class="label label-lg label-light-success label-inline">Uhradené</span>
';
		}
		else /* line 3 */ {
			echo '    <span class="label label-lg label-light-danger label-inline">Neuhradené</span>
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
