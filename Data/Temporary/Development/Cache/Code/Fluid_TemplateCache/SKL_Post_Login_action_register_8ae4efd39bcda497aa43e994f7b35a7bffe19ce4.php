<?php class FluidCache_SKL_Post_Login_action_register_8ae4efd39bcda497aa43e994f7b35a7bffe19ce4 extends \TYPO3\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// TODO
	return new \TYPO3\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;

return 'Default.html';
}
public function hasLayout() {
return TRUE;
}

/**
 * section Title
 */
public function section_768e0c1c69573fb588f61f1308a015c11468e05f(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;

return NULL;
}
/**
 * section Navigation
 */
public function section_cf03cf2e9cdf95a20af09137dfb9071db0c31bf2(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;

return NULL;
}
/**
 * section Sidebar
 */
public function section_f5171c931c5c70d4dc3557fd20c356b636c92e04(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;

return NULL;
}
/**
 * section Content
 */
public function section_4f9be057f0ea5d2ba72fd2c810e8d7b9aa98b469(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
    <h1>Flow - Registration</h1>

    ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\FlashMessagesViewHelper
$arguments1 = array();
$arguments1['additionalAttributes'] = NULL;
$arguments1['data'] = NULL;
$arguments1['as'] = NULL;
$arguments1['severity'] = NULL;
$arguments1['class'] = NULL;
$arguments1['dir'] = NULL;
$arguments1['id'] = NULL;
$arguments1['lang'] = NULL;
$arguments1['style'] = NULL;
$arguments1['title'] = NULL;
$arguments1['accesskey'] = NULL;
$arguments1['tabindex'] = NULL;
$arguments1['onclick'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper3 = $self->getViewHelper('$viewHelper3', $renderingContext, 'TYPO3\Fluid\ViewHelpers\FlashMessagesViewHelper');
$viewHelper3->setArguments($arguments1);
$viewHelper3->setRenderingContext($renderingContext);
$viewHelper3->setRenderChildrenClosure($renderChildrenClosure2);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\FlashMessagesViewHelper

$output0 .= $viewHelper3->initializeArgumentsAndRender();

$output0 .= '

    ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper
$arguments4 = array();
$arguments4['action'] = 'create';
$arguments4['controller'] = 'Login';
$arguments4['method'] = 'post';
$arguments4['name'] = 'loginform';
$arguments4['additionalAttributes'] = NULL;
$arguments4['data'] = NULL;
$arguments4['arguments'] = array (
);
$arguments4['package'] = NULL;
$arguments4['subpackage'] = NULL;
$arguments4['object'] = NULL;
$arguments4['section'] = '';
$arguments4['format'] = '';
$arguments4['additionalParams'] = array (
);
$arguments4['absolute'] = false;
$arguments4['addQueryString'] = false;
$arguments4['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments4['fieldNamePrefix'] = NULL;
$arguments4['actionUri'] = NULL;
$arguments4['objectName'] = NULL;
$arguments4['useParentRequest'] = false;
$arguments4['enctype'] = NULL;
$arguments4['onreset'] = NULL;
$arguments4['onsubmit'] = NULL;
$arguments4['class'] = NULL;
$arguments4['dir'] = NULL;
$arguments4['id'] = NULL;
$arguments4['lang'] = NULL;
$arguments4['style'] = NULL;
$arguments4['title'] = NULL;
$arguments4['accesskey'] = NULL;
$arguments4['tabindex'] = NULL;
$arguments4['onclick'] = NULL;
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
        <label>User:</label>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments7 = array();
$arguments7['name'] = 'name';
$arguments7['additionalAttributes'] = NULL;
$arguments7['data'] = NULL;
$arguments7['required'] = false;
$arguments7['type'] = 'text';
$arguments7['value'] = NULL;
$arguments7['property'] = NULL;
$arguments7['disabled'] = NULL;
$arguments7['maxlength'] = NULL;
$arguments7['readonly'] = NULL;
$arguments7['size'] = NULL;
$arguments7['placeholder'] = NULL;
$arguments7['autofocus'] = NULL;
$arguments7['errorClass'] = 'f3-form-error';
$arguments7['class'] = NULL;
$arguments7['dir'] = NULL;
$arguments7['id'] = NULL;
$arguments7['lang'] = NULL;
$arguments7['style'] = NULL;
$arguments7['title'] = NULL;
$arguments7['accesskey'] = NULL;
$arguments7['tabindex'] = NULL;
$arguments7['onclick'] = NULL;
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper9 = $self->getViewHelper('$viewHelper9', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper9->setArguments($arguments7);
$viewHelper9->setRenderingContext($renderingContext);
$viewHelper9->setRenderChildrenClosure($renderChildrenClosure8);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output6 .= $viewHelper9->initializeArgumentsAndRender();

$output6 .= '<br />
        <label>Pass:</label>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\PasswordViewHelper
$arguments10 = array();
$arguments10['name'] = 'pass';
$arguments10['additionalAttributes'] = NULL;
$arguments10['data'] = NULL;
$arguments10['value'] = NULL;
$arguments10['property'] = NULL;
$arguments10['disabled'] = NULL;
$arguments10['maxlength'] = NULL;
$arguments10['readonly'] = NULL;
$arguments10['size'] = NULL;
$arguments10['placeholder'] = NULL;
$arguments10['errorClass'] = 'f3-form-error';
$arguments10['class'] = NULL;
$arguments10['dir'] = NULL;
$arguments10['id'] = NULL;
$arguments10['lang'] = NULL;
$arguments10['style'] = NULL;
$arguments10['title'] = NULL;
$arguments10['accesskey'] = NULL;
$arguments10['tabindex'] = NULL;
$arguments10['onclick'] = NULL;
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper12 = $self->getViewHelper('$viewHelper12', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\PasswordViewHelper');
$viewHelper12->setArguments($arguments10);
$viewHelper12->setRenderingContext($renderingContext);
$viewHelper12->setRenderChildrenClosure($renderChildrenClosure11);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\PasswordViewHelper

$output6 .= $viewHelper12->initializeArgumentsAndRender();

$output6 .= '<br />
        <label>Pass repeat:</label>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\PasswordViewHelper
$arguments13 = array();
$arguments13['name'] = 'pass2';
$arguments13['additionalAttributes'] = NULL;
$arguments13['data'] = NULL;
$arguments13['value'] = NULL;
$arguments13['property'] = NULL;
$arguments13['disabled'] = NULL;
$arguments13['maxlength'] = NULL;
$arguments13['readonly'] = NULL;
$arguments13['size'] = NULL;
$arguments13['placeholder'] = NULL;
$arguments13['errorClass'] = 'f3-form-error';
$arguments13['class'] = NULL;
$arguments13['dir'] = NULL;
$arguments13['id'] = NULL;
$arguments13['lang'] = NULL;
$arguments13['style'] = NULL;
$arguments13['title'] = NULL;
$arguments13['accesskey'] = NULL;
$arguments13['tabindex'] = NULL;
$arguments13['onclick'] = NULL;
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper15 = $self->getViewHelper('$viewHelper15', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\PasswordViewHelper');
$viewHelper15->setArguments($arguments13);
$viewHelper15->setRenderingContext($renderingContext);
$viewHelper15->setRenderChildrenClosure($renderChildrenClosure14);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\PasswordViewHelper

$output6 .= $viewHelper15->initializeArgumentsAndRender();

$output6 .= '<br />
        ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments16 = array();
$arguments16['value'] = 'Register';
$arguments16['additionalAttributes'] = NULL;
$arguments16['data'] = NULL;
$arguments16['name'] = NULL;
$arguments16['property'] = NULL;
$arguments16['disabled'] = NULL;
$arguments16['class'] = NULL;
$arguments16['dir'] = NULL;
$arguments16['id'] = NULL;
$arguments16['lang'] = NULL;
$arguments16['style'] = NULL;
$arguments16['title'] = NULL;
$arguments16['accesskey'] = NULL;
$arguments16['tabindex'] = NULL;
$arguments16['onclick'] = NULL;
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper18 = $self->getViewHelper('$viewHelper18', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper18->setArguments($arguments16);
$viewHelper18->setRenderingContext($renderingContext);
$viewHelper18->setRenderChildrenClosure($renderChildrenClosure17);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper

$output6 .= $viewHelper18->initializeArgumentsAndRender();

$output6 .= '
    ';
return $output6;
};
$viewHelper19 = $self->getViewHelper('$viewHelper19', $renderingContext, 'TYPO3\Fluid\ViewHelpers\FormViewHelper');
$viewHelper19->setArguments($arguments4);
$viewHelper19->setRenderingContext($renderingContext);
$viewHelper19->setRenderChildrenClosure($renderChildrenClosure5);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper

$output0 .= $viewHelper19->initializeArgumentsAndRender();

$output0 .= '
    ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments20 = array();
$arguments20['action'] = 'index';
$arguments20['additionalAttributes'] = NULL;
$arguments20['data'] = NULL;
$arguments20['arguments'] = array (
);
$arguments20['controller'] = NULL;
$arguments20['package'] = NULL;
$arguments20['subpackage'] = NULL;
$arguments20['section'] = '';
$arguments20['format'] = '';
$arguments20['additionalParams'] = array (
);
$arguments20['addQueryString'] = false;
$arguments20['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments20['useParentRequest'] = false;
$arguments20['absolute'] = true;
$arguments20['class'] = NULL;
$arguments20['dir'] = NULL;
$arguments20['id'] = NULL;
$arguments20['lang'] = NULL;
$arguments20['style'] = NULL;
$arguments20['title'] = NULL;
$arguments20['accesskey'] = NULL;
$arguments20['tabindex'] = NULL;
$arguments20['onclick'] = NULL;
$arguments20['name'] = NULL;
$arguments20['rel'] = NULL;
$arguments20['rev'] = NULL;
$arguments20['target'] = NULL;
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return 'Login here';
};
$viewHelper22 = $self->getViewHelper('$viewHelper22', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper22->setArguments($arguments20);
$viewHelper22->setRenderingContext($renderingContext);
$viewHelper22->setRenderChildrenClosure($renderChildrenClosure21);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output0 .= $viewHelper22->initializeArgumentsAndRender();

$output0 .= '

';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output23 = '';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments24 = array();
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper
$arguments25 = array();
$arguments25['name'] = 'Default.html';
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper27 = $self->getViewHelper('$viewHelper27', $renderingContext, 'TYPO3\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper27->setArguments($arguments25);
$viewHelper27->setRenderingContext($renderingContext);
$viewHelper27->setRenderChildrenClosure($renderChildrenClosure26);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper
$arguments24['value'] = $viewHelper27->initializeArgumentsAndRender();
$arguments24['keepQuotes'] = false;
$arguments24['encoding'] = 'UTF-8';
$arguments24['doubleEncode'] = true;
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
return NULL;
};
$value29 = ($arguments24['value'] !== NULL ? $arguments24['value'] : $renderChildrenClosure28());

$output23 .= !is_string($value29) && !(is_object($value29) && method_exists($value29, '__toString')) ? $value29 : htmlspecialchars($value29, ($arguments24['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments24['encoding'], $arguments24['doubleEncode']);

$output23 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments30 = array();
$arguments30['name'] = 'Title';
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
return NULL;
};

$output23 .= '';

$output23 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments32 = array();
$arguments32['name'] = 'Navigation';
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
return NULL;
};

$output23 .= '';

$output23 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments34 = array();
$arguments34['name'] = 'Sidebar';
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
return NULL;
};

$output23 .= '';

$output23 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments36 = array();
$arguments36['name'] = 'Content';
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
$output38 = '';

$output38 .= '
    <h1>Flow - Registration</h1>

    ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\FlashMessagesViewHelper
$arguments39 = array();
$arguments39['additionalAttributes'] = NULL;
$arguments39['data'] = NULL;
$arguments39['as'] = NULL;
$arguments39['severity'] = NULL;
$arguments39['class'] = NULL;
$arguments39['dir'] = NULL;
$arguments39['id'] = NULL;
$arguments39['lang'] = NULL;
$arguments39['style'] = NULL;
$arguments39['title'] = NULL;
$arguments39['accesskey'] = NULL;
$arguments39['tabindex'] = NULL;
$arguments39['onclick'] = NULL;
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper41 = $self->getViewHelper('$viewHelper41', $renderingContext, 'TYPO3\Fluid\ViewHelpers\FlashMessagesViewHelper');
$viewHelper41->setArguments($arguments39);
$viewHelper41->setRenderingContext($renderingContext);
$viewHelper41->setRenderChildrenClosure($renderChildrenClosure40);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\FlashMessagesViewHelper

$output38 .= $viewHelper41->initializeArgumentsAndRender();

$output38 .= '

    ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper
$arguments42 = array();
$arguments42['action'] = 'create';
$arguments42['controller'] = 'Login';
$arguments42['method'] = 'post';
$arguments42['name'] = 'loginform';
$arguments42['additionalAttributes'] = NULL;
$arguments42['data'] = NULL;
$arguments42['arguments'] = array (
);
$arguments42['package'] = NULL;
$arguments42['subpackage'] = NULL;
$arguments42['object'] = NULL;
$arguments42['section'] = '';
$arguments42['format'] = '';
$arguments42['additionalParams'] = array (
);
$arguments42['absolute'] = false;
$arguments42['addQueryString'] = false;
$arguments42['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments42['fieldNamePrefix'] = NULL;
$arguments42['actionUri'] = NULL;
$arguments42['objectName'] = NULL;
$arguments42['useParentRequest'] = false;
$arguments42['enctype'] = NULL;
$arguments42['onreset'] = NULL;
$arguments42['onsubmit'] = NULL;
$arguments42['class'] = NULL;
$arguments42['dir'] = NULL;
$arguments42['id'] = NULL;
$arguments42['lang'] = NULL;
$arguments42['style'] = NULL;
$arguments42['title'] = NULL;
$arguments42['accesskey'] = NULL;
$arguments42['tabindex'] = NULL;
$arguments42['onclick'] = NULL;
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
$output44 = '';

$output44 .= '
        <label>User:</label>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments45 = array();
$arguments45['name'] = 'name';
$arguments45['additionalAttributes'] = NULL;
$arguments45['data'] = NULL;
$arguments45['required'] = false;
$arguments45['type'] = 'text';
$arguments45['value'] = NULL;
$arguments45['property'] = NULL;
$arguments45['disabled'] = NULL;
$arguments45['maxlength'] = NULL;
$arguments45['readonly'] = NULL;
$arguments45['size'] = NULL;
$arguments45['placeholder'] = NULL;
$arguments45['autofocus'] = NULL;
$arguments45['errorClass'] = 'f3-form-error';
$arguments45['class'] = NULL;
$arguments45['dir'] = NULL;
$arguments45['id'] = NULL;
$arguments45['lang'] = NULL;
$arguments45['style'] = NULL;
$arguments45['title'] = NULL;
$arguments45['accesskey'] = NULL;
$arguments45['tabindex'] = NULL;
$arguments45['onclick'] = NULL;
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper47 = $self->getViewHelper('$viewHelper47', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper47->setArguments($arguments45);
$viewHelper47->setRenderingContext($renderingContext);
$viewHelper47->setRenderChildrenClosure($renderChildrenClosure46);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output44 .= $viewHelper47->initializeArgumentsAndRender();

$output44 .= '<br />
        <label>Pass:</label>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\PasswordViewHelper
$arguments48 = array();
$arguments48['name'] = 'pass';
$arguments48['additionalAttributes'] = NULL;
$arguments48['data'] = NULL;
$arguments48['value'] = NULL;
$arguments48['property'] = NULL;
$arguments48['disabled'] = NULL;
$arguments48['maxlength'] = NULL;
$arguments48['readonly'] = NULL;
$arguments48['size'] = NULL;
$arguments48['placeholder'] = NULL;
$arguments48['errorClass'] = 'f3-form-error';
$arguments48['class'] = NULL;
$arguments48['dir'] = NULL;
$arguments48['id'] = NULL;
$arguments48['lang'] = NULL;
$arguments48['style'] = NULL;
$arguments48['title'] = NULL;
$arguments48['accesskey'] = NULL;
$arguments48['tabindex'] = NULL;
$arguments48['onclick'] = NULL;
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper50 = $self->getViewHelper('$viewHelper50', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\PasswordViewHelper');
$viewHelper50->setArguments($arguments48);
$viewHelper50->setRenderingContext($renderingContext);
$viewHelper50->setRenderChildrenClosure($renderChildrenClosure49);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\PasswordViewHelper

$output44 .= $viewHelper50->initializeArgumentsAndRender();

$output44 .= '<br />
        <label>Pass repeat:</label>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\PasswordViewHelper
$arguments51 = array();
$arguments51['name'] = 'pass2';
$arguments51['additionalAttributes'] = NULL;
$arguments51['data'] = NULL;
$arguments51['value'] = NULL;
$arguments51['property'] = NULL;
$arguments51['disabled'] = NULL;
$arguments51['maxlength'] = NULL;
$arguments51['readonly'] = NULL;
$arguments51['size'] = NULL;
$arguments51['placeholder'] = NULL;
$arguments51['errorClass'] = 'f3-form-error';
$arguments51['class'] = NULL;
$arguments51['dir'] = NULL;
$arguments51['id'] = NULL;
$arguments51['lang'] = NULL;
$arguments51['style'] = NULL;
$arguments51['title'] = NULL;
$arguments51['accesskey'] = NULL;
$arguments51['tabindex'] = NULL;
$arguments51['onclick'] = NULL;
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper53 = $self->getViewHelper('$viewHelper53', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\PasswordViewHelper');
$viewHelper53->setArguments($arguments51);
$viewHelper53->setRenderingContext($renderingContext);
$viewHelper53->setRenderChildrenClosure($renderChildrenClosure52);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\PasswordViewHelper

$output44 .= $viewHelper53->initializeArgumentsAndRender();

$output44 .= '<br />
        ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments54 = array();
$arguments54['value'] = 'Register';
$arguments54['additionalAttributes'] = NULL;
$arguments54['data'] = NULL;
$arguments54['name'] = NULL;
$arguments54['property'] = NULL;
$arguments54['disabled'] = NULL;
$arguments54['class'] = NULL;
$arguments54['dir'] = NULL;
$arguments54['id'] = NULL;
$arguments54['lang'] = NULL;
$arguments54['style'] = NULL;
$arguments54['title'] = NULL;
$arguments54['accesskey'] = NULL;
$arguments54['tabindex'] = NULL;
$arguments54['onclick'] = NULL;
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper56 = $self->getViewHelper('$viewHelper56', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper56->setArguments($arguments54);
$viewHelper56->setRenderingContext($renderingContext);
$viewHelper56->setRenderChildrenClosure($renderChildrenClosure55);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper

$output44 .= $viewHelper56->initializeArgumentsAndRender();

$output44 .= '
    ';
return $output44;
};
$viewHelper57 = $self->getViewHelper('$viewHelper57', $renderingContext, 'TYPO3\Fluid\ViewHelpers\FormViewHelper');
$viewHelper57->setArguments($arguments42);
$viewHelper57->setRenderingContext($renderingContext);
$viewHelper57->setRenderChildrenClosure($renderChildrenClosure43);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper

$output38 .= $viewHelper57->initializeArgumentsAndRender();

$output38 .= '
    ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments58 = array();
$arguments58['action'] = 'index';
$arguments58['additionalAttributes'] = NULL;
$arguments58['data'] = NULL;
$arguments58['arguments'] = array (
);
$arguments58['controller'] = NULL;
$arguments58['package'] = NULL;
$arguments58['subpackage'] = NULL;
$arguments58['section'] = '';
$arguments58['format'] = '';
$arguments58['additionalParams'] = array (
);
$arguments58['addQueryString'] = false;
$arguments58['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments58['useParentRequest'] = false;
$arguments58['absolute'] = true;
$arguments58['class'] = NULL;
$arguments58['dir'] = NULL;
$arguments58['id'] = NULL;
$arguments58['lang'] = NULL;
$arguments58['style'] = NULL;
$arguments58['title'] = NULL;
$arguments58['accesskey'] = NULL;
$arguments58['tabindex'] = NULL;
$arguments58['onclick'] = NULL;
$arguments58['name'] = NULL;
$arguments58['rel'] = NULL;
$arguments58['rev'] = NULL;
$arguments58['target'] = NULL;
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
return 'Login here';
};
$viewHelper60 = $self->getViewHelper('$viewHelper60', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper60->setArguments($arguments58);
$viewHelper60->setRenderingContext($renderingContext);
$viewHelper60->setRenderChildrenClosure($renderChildrenClosure59);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output38 .= $viewHelper60->initializeArgumentsAndRender();

$output38 .= '

';
return $output38;
};

$output23 .= '';

return $output23;
}


}
#0             22743     