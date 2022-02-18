<?php

use Latte\Runtime as LR;

/** source: /var/www/html/avesidlo/app/ClientModule/Presenters/templates/Company/grids/isMain_column.latte */
final class Templatedd9eac10d5 extends Latte\Runtime\Template
{

	public function main(): array
	{
		extract($this->params);
		if ($item->isMain()) /* line 1 */ {
			echo '    <span class="label label-lg label-light-success label-inline">Áno</span>
';
		}
		else /* line 3 */ {
			echo '    <span class="label label-lg label-light-danger label-inline">Nie</span>
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
