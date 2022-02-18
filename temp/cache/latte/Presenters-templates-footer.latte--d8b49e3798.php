<?php

use Latte\Runtime as LR;

/** source: /var/www/html/avesidlo/app/ClientModule/Presenters/templates/footer.latte */
final class Templated8b49e3798 extends Latte\Runtime\Template
{

	public function main(): array
	{
		extract($this->params);
		echo '<div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
    <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
        <div class="text-dark order-2 order-md-1">
            <span class="text-muted font-weight-bold mr-2">';
		echo LR\Filters::escapeHtmlText($now->format('Y')) /* line 4 */;
		echo ' ©</span>
            <a target="_blank" class="text-dark-75 text-hover-primary" href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("this")) /* line 5 */;
		echo '">Vee</a>
        </div>
    </div>
</div>';
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}

}
