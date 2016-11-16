<?php
class AccuaForm_Element_Captcha2 extends Element {
	protected $privateKey = "";
	protected $publicKey = "";

	public function __construct($label = "", array $properties = null) {
		parent::__construct($label, "recaptcha_response_field", $properties);
		$this->setValidation(new AccuaForm_Validation_Captcha2($this->privateKey, __("The reCATPCHA response provided was incorrect.  Please re-try.", 'accua-form-api')));
	}

	public function render() {
	  $lang = $this->form->getLanguage();
	  $field_id = $this->attributes["id"];
	  $publicKey = htmlspecialchars($this->publicKey, ENT_QUOTES);
	  $jspath = ACCUA_FORMS_DIR_URL . 'accua-recaptcha2.js';
	  echo <<<EOT
<script type="text/javascript">
<!--
if (typeof(accuaform_recaptcha2_ajax_loaded) == "undefined" || !accuaform_recaptcha2_ajax_loaded) {
  var accuaform_recaptcha2_ajax_loaded = true;
  document.write('<sc'+'ript type="text/javascript" src="$jspath"></sc'+'ript>');
  document.write('<sc'+'ript type="text/javascript" src="https://www.google.com/recaptcha/api.js?onload=accua_forms_onload_recaptcha2&amp;render=explicit&amp;hl={$lang}"></sc'+'ript>');
}
document.write('<sc'+'ript type="text/javascript">jQuery(function(){accua_forms_show_recaptcha2("{$field_id}", {sitekey: "{$this->publicKey}"});});</sc'+'ript>');
// -->
</script>
<div id="{$field_id}" class="accua_forms_recaptcha2_container"></div>
EOT;
	}
}
