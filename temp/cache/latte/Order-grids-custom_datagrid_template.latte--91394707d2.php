<?php

use Latte\Runtime as LR;

/** source: /var/www/html/avesidlo/app/ClientModule/Presenters/templates/Order/grids/custom_datagrid_template.latte */
final class Template91394707d2 extends Latte\Runtime\Template
{
	protected const BLOCKS = [
		['table-class' => 'blockTable_class', 'icon-sort' => 'blockIcon_sort', 'icon-sort-up' => 'blockIcon_sort_up', 'icon-sort-down' => 'blockIcon_sort_down'],
	];


	public function main(): array
	{
		extract($this->params);
		echo "\n";
		if ($this->getParentName()) {
			return get_defined_vars();
		}
		$this->renderBlock('table-class', get_defined_vars()) /* line 3 */;
		echo '

';
		$this->renderBlock('icon-sort', get_defined_vars()) /* line 5 */;
		echo "\n";
		$this->renderBlock('icon-sort-up', get_defined_vars()) /* line 6 */;
		echo '

';
		$this->renderBlock('icon-sort-down', get_defined_vars()) /* line 8 */;
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		$this->parentName = $originalTemplate;
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	/** {block table-class} on line 3 */
	public function blockTable_class(array $ʟ_args): void
	{
		echo 'table table-head-custom table-vertical-center';
	}


	/** {block icon-sort} on line 5 */
	public function blockIcon_sort(array $ʟ_args): void
	{
		echo '<i class="flaticon2-arrow-down" style="font-size: 0.6em;"></i>';
	}


	/** {block icon-sort-up} on line 6 */
	public function blockIcon_sort_up(array $ʟ_args): void
	{
		echo '<i class="flaticon2-arrow-up" style="font-size: 0.6em;"></i>';
	}


	/** {block icon-sort-down} on line 8 */
	public function blockIcon_sort_down(array $ʟ_args): void
	{
		echo '<i class="flaticon2-arrow-down" style="font-size: 0.6em;"></i>';
	}

}
