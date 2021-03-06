<?php

use Latte\Runtime as LR;

/** source: /var/www/html/avesidlo/app/FrontModule/Presenters/templates/footer.latte */
final class Templated6668d0dc6 extends Latte\Runtime\Template
{

	public function main(): array
	{
		extract($this->params);
		echo '<footer class="bg-dark text-light">
    <div class="svg-shape">
        <svg xmlns="http://www.w3.org/2000/svg" class="gray" preserveAspectRatio="none" viewBox="0 0 1070 52">
            <path d="M0,0S247,91,505,32c261.17-59.72,565-13,565-13V0Z"></path>
        </svg>
    </div>
    <div class="container">
        <div class="f-items default-padding">
            <div class="row">
                <div class="col-lg-4 col-md-6 item">
                    <div class="f-item about">
                        <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 12 */;
		echo '/assets/img/logo-white.png" alt="Logo" class="logo-footer">
                        <div class="address">
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="flaticon-email"></i>
                                    </div>
                                    <div class="info">
                                        <h5>E-mail:</h5>
                                        <a href="mailto:info@avesidlo.sk">info@avesidlo.sk</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="flaticon-call"></i>
                                    </div>
                                    <div class="info">
                                        <h5>Telefón:</h5>
                                        <a href="tel:+421948164164">+421 948 164 164</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-md-8 item">
                    <div class="f-item recent-post">
                        <h4 class="widget-title">Posledné novinky</h4>
                        <div class="item">
                            <a href="#">Delighted prevailed supported too not remainder perpetual who furnished.</a>
                            <span><i class="fas fa-calendar-alt"></i> 22 Aug, 2020 -  <a href="#">Admin</a></span>
                        </div>
                        <div class="item">
                            <a href="#">Speaking trifling an to unpacked moderate debating learnin management. </a>
                            <span><i class="fas fa-calendar-alt"></i> 15 Nov, 2020 -  <a href="#">User</a></span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Start Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>Copyright &copy; 2020. Made with love by <a href="https://www.slov-lex.sk/" target="_blank">Vee</a></p>
                </div>
                <div class="col-md-6 text-right link">
                    <ul>
                        <li>
                            <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Page:termsAndConditions")) /* line 65 */;
		echo '">Obchodné podmienky</a>
                        </li>
                        <li>
                            <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Page:privacyPolicy")) /* line 68 */;
		echo '">Ochrana osobných údajov</a>
                        </li>
                        <li>
                            <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Page:contact")) /* line 71 */;
		echo '">Kontakt</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Bottom -->
</footer>';
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}

}
