<?php

use Latte\Runtime as LR;

/** source: /var/www/html/avesidlo/app/FrontModule/Presenters/templates/Login/default.latte */
final class Template4ac863784c extends Latte\Runtime\Template
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
		echo '
<div class="login-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4">
                <div class="login-box">
                    <div class="login">
                        <div class="content">
                            <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Homepage:default")) /* line 10 */;
		echo '"><img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 10 */;
		echo '/assets/img/logo.png" alt="Logo" style="width: 150px;"></a>
';
		$form = $this->global->formsStack[] = $this->global->uiControl["loginForm"] /* line 11 */;
		echo '                            <form';
		echo Nette\Bridges\FormsLatte\Runtime::renderFormBegin(end($this->global->formsStack), [], false);
		echo '>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <i class="fas fa-envelope-open"></i> <input class="form-control" placeholder="E-mail *"';
		$ʟ_input = $_input = end($this->global->formsStack)["email"];
		echo $ʟ_input->getControlPart()->addAttributes(['class' => null, 'placeholder' => null])->attributes() /* line 15 */;
		echo '>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <i class="fas fa-lock"></i> <input class="form-control" placeholder="Heslo *"';
		$ʟ_input = $_input = end($this->global->formsStack)["password"];
		echo $ʟ_input->getControlPart()->addAttributes(['class' => null, 'placeholder' => null])->attributes() /* line 22 */;
		echo '>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="link align-right">
                                            <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Login:forgetPassword")) /* line 29 */;
		echo '">Zabudnuté heslo?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="row">
                                        <button';
		$ʟ_input = $_input = end($this->global->formsStack)["submit"];
		echo $ʟ_input->getControlPart()->attributes() /* line 35 */;
		echo '>
                                            Prihlásiť
                                        </button>
                                    </div>
                                </div>
';
		echo Nette\Bridges\FormsLatte\Runtime::renderFormEnd(array_pop($this->global->formsStack), false) /* line 11 */;
		echo '                            </form>
                            <div class="sign-up">
                                <p>
                                    Nemáte ešte zaregistrovanú svoju spoločnosť? <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Register:default")) /* line 43 */;
		echo '">Registrujte sa</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>';
	}

}
