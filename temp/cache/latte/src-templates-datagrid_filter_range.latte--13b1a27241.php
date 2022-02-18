<?php

use Latte\Runtime as LR;

/** source: /var/www/html/avesidlo/vendor/ublaboo/datagrid/src/templates/datagrid_filter_range.latte */
final class Template13b1a27241 extends Latte\Runtime\Template
{

	public function main(): array
	{
		extract($this->params);
		$container = $input /* line 6 */;
		echo "\n";
		if ($outer) /* line 8 */ {
			echo '	<div class="row">
		';
			$ʟ_input = is_object($container['from']) ? $container['from'] : end($this->global->formsStack)[$container['from']];
			if ($ʟ_label = $ʟ_input->getLabel()) echo $ʟ_label->addAttributes(['class' => 'col-sm-3 control-label']);
			echo '
		<div class="col-sm-4">
			';
			$ʟ_input = $_input = is_object($container['from']) ? $container['from'] : end($this->global->formsStack)[$container['from']];
			echo $ʟ_input->getControl() /* line 12 */;
			echo '
		</div>
		';
			$ʟ_input = is_object($container['to']) ? $container['to'] : end($this->global->formsStack)[$container['to']];
			if ($ʟ_label = $ʟ_input->getLabel()) echo $ʟ_label->addAttributes(['class' => 'filter-range-delimiter col-sm-1 control-label']);
			echo '
		<div class="col-sm-4">
			';
			$ʟ_input = $_input = is_object($container['to']) ? $container['to'] : end($this->global->formsStack)[$container['to']];
			echo $ʟ_input->getControl() /* line 16 */;
			echo '
		</div>
	</div>
';
		}
		else /* line 19 */ {
			echo '	<div class="datagrid-col-filter-range form-inline">
		<div class="input-group">
			';
			$ʟ_input = $_input = is_object($container['from']) ? $container['from'] : end($this->global->formsStack)[$container['from']];
			echo $ʟ_input->getControl() /* line 22 */;
			echo '

			<div class="input-group-addon datagrid-col-filter-datte-range-delimiter">-</div>

			';
			$ʟ_input = $_input = is_object($container['to']) ? $container['to'] : end($this->global->formsStack)[$container['to']];
			echo $ʟ_input->getControl() /* line 26 */;
			echo '
		</div>
	</div>
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
