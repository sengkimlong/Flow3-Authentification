<?php class FluidCache_SKL_Post_Category_action_edit_7dda6e89582a69e8c418b82b00587f638715a5a9 extends \TYPO3\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// TODO
	return new \TYPO3\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;

return 'Default';
}
public function hasLayout() {
return TRUE;
}

/**
 * section Title
 */
public function section_768e0c1c69573fb588f61f1308a015c11468e05f(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= 'Edit category "';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments1 = array();
$arguments1['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'category.title', $renderingContext);
$arguments1['keepQuotes'] = false;
$arguments1['encoding'] = 'UTF-8';
$arguments1['doubleEncode'] = true;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$value3 = ($arguments1['value'] !== NULL ? $arguments1['value'] : $renderChildrenClosure2());

$output0 .= !is_string($value3) && !(is_object($value3) && method_exists($value3, '__toString')) ? $value3 : htmlspecialchars($value3, ($arguments1['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments1['encoding'], $arguments1['doubleEncode']);

$output0 .= '"';

return $output0;
}
/**
 * section Navigation
 */
public function section_cf03cf2e9cdf95a20af09137dfb9071db0c31bf2(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output4 = '';

$output4 .= '

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation" aria-expanded="false">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">MyBlog</a>
            </div>

            <div class="collapse navbar-collapse" id="navigation">
                <ul class="nav navbar-nav">
                    ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments5 = array();
$arguments5['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'listCategories', $renderingContext);
$arguments5['as'] = 'navCategory';
$arguments5['key'] = '';
$arguments5['reverse'] = false;
$arguments5['iteration'] = NULL;
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
$output7 = '';

$output7 .= '
                        <li>
                            ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments8 = array();
$arguments8['action'] = 'show';
$arguments8['controller'] = 'category';
// Rendering Array
$array9 = array();
$array9['category'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'navCategory', $renderingContext);
$arguments8['arguments'] = $array9;
$arguments8['additionalAttributes'] = NULL;
$arguments8['data'] = NULL;
$arguments8['package'] = NULL;
$arguments8['subpackage'] = NULL;
$arguments8['section'] = '';
$arguments8['format'] = '';
$arguments8['additionalParams'] = array (
);
$arguments8['addQueryString'] = false;
$arguments8['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments8['useParentRequest'] = false;
$arguments8['absolute'] = true;
$arguments8['class'] = NULL;
$arguments8['dir'] = NULL;
$arguments8['id'] = NULL;
$arguments8['lang'] = NULL;
$arguments8['style'] = NULL;
$arguments8['title'] = NULL;
$arguments8['accesskey'] = NULL;
$arguments8['tabindex'] = NULL;
$arguments8['onclick'] = NULL;
$arguments8['name'] = NULL;
$arguments8['rel'] = NULL;
$arguments8['rev'] = NULL;
$arguments8['target'] = NULL;
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments11 = array();
$arguments11['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'navCategory.title', $renderingContext);
$arguments11['keepQuotes'] = false;
$arguments11['encoding'] = 'UTF-8';
$arguments11['doubleEncode'] = true;
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$value13 = ($arguments11['value'] !== NULL ? $arguments11['value'] : $renderChildrenClosure12());
return !is_string($value13) && !(is_object($value13) && method_exists($value13, '__toString')) ? $value13 : htmlspecialchars($value13, ($arguments11['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments11['encoding'], $arguments11['doubleEncode']);
};
$viewHelper14 = $self->getViewHelper('$viewHelper14', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper14->setArguments($arguments8);
$viewHelper14->setRenderingContext($renderingContext);
$viewHelper14->setRenderChildrenClosure($renderChildrenClosure10);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output7 .= $viewHelper14->initializeArgumentsAndRender();

$output7 .= '
                        </li>
                    ';
return $output7;
};

$output4 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output4 .= '
                </ul>
            </div>
        </div>
    </nav>

';

return $output4;
}
/**
 * section Sidebar
 */
public function section_f5171c931c5c70d4dc3557fd20c356b636c92e04(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output15 = '';

$output15 .= '
    <h3>Category: </h3>
    <p>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments16 = array();
$arguments16['action'] = 'index';
$arguments16['controller'] = 'category';
$arguments16['additionalAttributes'] = NULL;
$arguments16['data'] = NULL;
$arguments16['arguments'] = array (
);
$arguments16['package'] = NULL;
$arguments16['subpackage'] = NULL;
$arguments16['section'] = '';
$arguments16['format'] = '';
$arguments16['additionalParams'] = array (
);
$arguments16['addQueryString'] = false;
$arguments16['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments16['useParentRequest'] = false;
$arguments16['absolute'] = true;
$arguments16['class'] = NULL;
$arguments16['dir'] = NULL;
$arguments16['id'] = NULL;
$arguments16['lang'] = NULL;
$arguments16['style'] = NULL;
$arguments16['title'] = NULL;
$arguments16['accesskey'] = NULL;
$arguments16['tabindex'] = NULL;
$arguments16['onclick'] = NULL;
$arguments16['name'] = NULL;
$arguments16['rel'] = NULL;
$arguments16['rev'] = NULL;
$arguments16['target'] = NULL;
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return 'View Category';
};
$viewHelper18 = $self->getViewHelper('$viewHelper18', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper18->setArguments($arguments16);
$viewHelper18->setRenderingContext($renderingContext);
$viewHelper18->setRenderChildrenClosure($renderChildrenClosure17);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output15 .= $viewHelper18->initializeArgumentsAndRender();

$output15 .= '</p>
    <p>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments19 = array();
$arguments19['action'] = 'new';
$arguments19['controller'] = 'category';
$arguments19['additionalAttributes'] = NULL;
$arguments19['data'] = NULL;
$arguments19['arguments'] = array (
);
$arguments19['package'] = NULL;
$arguments19['subpackage'] = NULL;
$arguments19['section'] = '';
$arguments19['format'] = '';
$arguments19['additionalParams'] = array (
);
$arguments19['addQueryString'] = false;
$arguments19['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments19['useParentRequest'] = false;
$arguments19['absolute'] = true;
$arguments19['class'] = NULL;
$arguments19['dir'] = NULL;
$arguments19['id'] = NULL;
$arguments19['lang'] = NULL;
$arguments19['style'] = NULL;
$arguments19['title'] = NULL;
$arguments19['accesskey'] = NULL;
$arguments19['tabindex'] = NULL;
$arguments19['onclick'] = NULL;
$arguments19['name'] = NULL;
$arguments19['rel'] = NULL;
$arguments19['rev'] = NULL;
$arguments19['target'] = NULL;
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return 'Create a new category';
};
$viewHelper21 = $self->getViewHelper('$viewHelper21', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper21->setArguments($arguments19);
$viewHelper21->setRenderingContext($renderingContext);
$viewHelper21->setRenderChildrenClosure($renderChildrenClosure20);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output15 .= $viewHelper21->initializeArgumentsAndRender();

$output15 .= '</p>
    <h3>Post: </h3>
    <p>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments22 = array();
$arguments22['action'] = 'index';
$arguments22['controller'] = 'post';
$arguments22['additionalAttributes'] = NULL;
$arguments22['data'] = NULL;
$arguments22['arguments'] = array (
);
$arguments22['package'] = NULL;
$arguments22['subpackage'] = NULL;
$arguments22['section'] = '';
$arguments22['format'] = '';
$arguments22['additionalParams'] = array (
);
$arguments22['addQueryString'] = false;
$arguments22['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments22['useParentRequest'] = false;
$arguments22['absolute'] = true;
$arguments22['class'] = NULL;
$arguments22['dir'] = NULL;
$arguments22['id'] = NULL;
$arguments22['lang'] = NULL;
$arguments22['style'] = NULL;
$arguments22['title'] = NULL;
$arguments22['accesskey'] = NULL;
$arguments22['tabindex'] = NULL;
$arguments22['onclick'] = NULL;
$arguments22['name'] = NULL;
$arguments22['rel'] = NULL;
$arguments22['rev'] = NULL;
$arguments22['target'] = NULL;
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
return 'View Post';
};
$viewHelper24 = $self->getViewHelper('$viewHelper24', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper24->setArguments($arguments22);
$viewHelper24->setRenderingContext($renderingContext);
$viewHelper24->setRenderChildrenClosure($renderChildrenClosure23);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output15 .= $viewHelper24->initializeArgumentsAndRender();

$output15 .= '</p>
    <p>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments25 = array();
$arguments25['action'] = 'new';
$arguments25['controller'] = 'post';
$arguments25['additionalAttributes'] = NULL;
$arguments25['data'] = NULL;
$arguments25['arguments'] = array (
);
$arguments25['package'] = NULL;
$arguments25['subpackage'] = NULL;
$arguments25['section'] = '';
$arguments25['format'] = '';
$arguments25['additionalParams'] = array (
);
$arguments25['addQueryString'] = false;
$arguments25['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments25['useParentRequest'] = false;
$arguments25['absolute'] = true;
$arguments25['class'] = NULL;
$arguments25['dir'] = NULL;
$arguments25['id'] = NULL;
$arguments25['lang'] = NULL;
$arguments25['style'] = NULL;
$arguments25['title'] = NULL;
$arguments25['accesskey'] = NULL;
$arguments25['tabindex'] = NULL;
$arguments25['onclick'] = NULL;
$arguments25['name'] = NULL;
$arguments25['rel'] = NULL;
$arguments25['rev'] = NULL;
$arguments25['target'] = NULL;
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return 'Create new post';
};
$viewHelper27 = $self->getViewHelper('$viewHelper27', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper27->setArguments($arguments25);
$viewHelper27->setRenderingContext($renderingContext);
$viewHelper27->setRenderChildrenClosure($renderChildrenClosure26);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output15 .= $viewHelper27->initializeArgumentsAndRender();

$output15 .= '</p>
    <h3>Author: </h3>
    <p>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments28 = array();
$arguments28['action'] = 'index';
$arguments28['controller'] = 'author';
$arguments28['additionalAttributes'] = NULL;
$arguments28['data'] = NULL;
$arguments28['arguments'] = array (
);
$arguments28['package'] = NULL;
$arguments28['subpackage'] = NULL;
$arguments28['section'] = '';
$arguments28['format'] = '';
$arguments28['additionalParams'] = array (
);
$arguments28['addQueryString'] = false;
$arguments28['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments28['useParentRequest'] = false;
$arguments28['absolute'] = true;
$arguments28['class'] = NULL;
$arguments28['dir'] = NULL;
$arguments28['id'] = NULL;
$arguments28['lang'] = NULL;
$arguments28['style'] = NULL;
$arguments28['title'] = NULL;
$arguments28['accesskey'] = NULL;
$arguments28['tabindex'] = NULL;
$arguments28['onclick'] = NULL;
$arguments28['name'] = NULL;
$arguments28['rel'] = NULL;
$arguments28['rev'] = NULL;
$arguments28['target'] = NULL;
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
return 'View Author';
};
$viewHelper30 = $self->getViewHelper('$viewHelper30', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper30->setArguments($arguments28);
$viewHelper30->setRenderingContext($renderingContext);
$viewHelper30->setRenderChildrenClosure($renderChildrenClosure29);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output15 .= $viewHelper30->initializeArgumentsAndRender();

$output15 .= '</p>
    <p>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments31 = array();
$arguments31['action'] = 'new';
$arguments31['controller'] = 'author';
$arguments31['additionalAttributes'] = NULL;
$arguments31['data'] = NULL;
$arguments31['arguments'] = array (
);
$arguments31['package'] = NULL;
$arguments31['subpackage'] = NULL;
$arguments31['section'] = '';
$arguments31['format'] = '';
$arguments31['additionalParams'] = array (
);
$arguments31['addQueryString'] = false;
$arguments31['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments31['useParentRequest'] = false;
$arguments31['absolute'] = true;
$arguments31['class'] = NULL;
$arguments31['dir'] = NULL;
$arguments31['id'] = NULL;
$arguments31['lang'] = NULL;
$arguments31['style'] = NULL;
$arguments31['title'] = NULL;
$arguments31['accesskey'] = NULL;
$arguments31['tabindex'] = NULL;
$arguments31['onclick'] = NULL;
$arguments31['name'] = NULL;
$arguments31['rel'] = NULL;
$arguments31['rev'] = NULL;
$arguments31['target'] = NULL;
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return 'Create New Author';
};
$viewHelper33 = $self->getViewHelper('$viewHelper33', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper33->setArguments($arguments31);
$viewHelper33->setRenderingContext($renderingContext);
$viewHelper33->setRenderChildrenClosure($renderChildrenClosure32);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output15 .= $viewHelper33->initializeArgumentsAndRender();

$output15 .= '</p>
';

return $output15;
}
/**
 * section Content
 */
public function section_4f9be057f0ea5d2ba72fd2c810e8d7b9aa98b469(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output34 = '';

$output34 .= '
	';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper
$arguments35 = array();
$arguments35['action'] = 'update';
$arguments35['object'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'category', $renderingContext);
$arguments35['objectName'] = 'category';
$arguments35['additionalAttributes'] = NULL;
$arguments35['data'] = NULL;
$arguments35['arguments'] = array (
);
$arguments35['controller'] = NULL;
$arguments35['package'] = NULL;
$arguments35['subpackage'] = NULL;
$arguments35['section'] = '';
$arguments35['format'] = '';
$arguments35['additionalParams'] = array (
);
$arguments35['absolute'] = false;
$arguments35['addQueryString'] = false;
$arguments35['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments35['fieldNamePrefix'] = NULL;
$arguments35['actionUri'] = NULL;
$arguments35['useParentRequest'] = false;
$arguments35['enctype'] = NULL;
$arguments35['method'] = NULL;
$arguments35['name'] = NULL;
$arguments35['onreset'] = NULL;
$arguments35['onsubmit'] = NULL;
$arguments35['class'] = NULL;
$arguments35['dir'] = NULL;
$arguments35['id'] = NULL;
$arguments35['lang'] = NULL;
$arguments35['style'] = NULL;
$arguments35['title'] = NULL;
$arguments35['accesskey'] = NULL;
$arguments35['tabindex'] = NULL;
$arguments35['onclick'] = NULL;
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
$output37 = '';

$output37 .= '
		<div class="col-md-8 col-sm-8 col-xs-12">
            <table class="table">
                <tr>
                    <td><label for="title">Title</label></td>
                    <td>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments38 = array();
$arguments38['class'] = 'form-control';
$arguments38['property'] = 'title';
$arguments38['id'] = 'title';
$arguments38['additionalAttributes'] = NULL;
$arguments38['data'] = NULL;
$arguments38['required'] = false;
$arguments38['type'] = 'text';
$arguments38['name'] = NULL;
$arguments38['value'] = NULL;
$arguments38['disabled'] = NULL;
$arguments38['maxlength'] = NULL;
$arguments38['readonly'] = NULL;
$arguments38['size'] = NULL;
$arguments38['placeholder'] = NULL;
$arguments38['autofocus'] = NULL;
$arguments38['errorClass'] = 'f3-form-error';
$arguments38['dir'] = NULL;
$arguments38['lang'] = NULL;
$arguments38['style'] = NULL;
$arguments38['title'] = NULL;
$arguments38['accesskey'] = NULL;
$arguments38['tabindex'] = NULL;
$arguments38['onclick'] = NULL;
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper40 = $self->getViewHelper('$viewHelper40', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper40->setArguments($arguments38);
$viewHelper40->setRenderingContext($renderingContext);
$viewHelper40->setRenderChildrenClosure($renderChildrenClosure39);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output37 .= $viewHelper40->initializeArgumentsAndRender();

$output37 .= '</td>
                </tr>
                <tr>
                    <td>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments41 = array();
$arguments41['class'] = 'btn btn-primary';
$arguments41['value'] = 'Update';
$arguments41['additionalAttributes'] = NULL;
$arguments41['data'] = NULL;
$arguments41['name'] = NULL;
$arguments41['property'] = NULL;
$arguments41['disabled'] = NULL;
$arguments41['dir'] = NULL;
$arguments41['id'] = NULL;
$arguments41['lang'] = NULL;
$arguments41['style'] = NULL;
$arguments41['title'] = NULL;
$arguments41['accesskey'] = NULL;
$arguments41['tabindex'] = NULL;
$arguments41['onclick'] = NULL;
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper43 = $self->getViewHelper('$viewHelper43', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper43->setArguments($arguments41);
$viewHelper43->setRenderingContext($renderingContext);
$viewHelper43->setRenderChildrenClosure($renderChildrenClosure42);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper

$output37 .= $viewHelper43->initializeArgumentsAndRender();

$output37 .= '</td>
                    <td></td>
                </tr>
            </table>
        </div>
	';
return $output37;
};
$viewHelper44 = $self->getViewHelper('$viewHelper44', $renderingContext, 'TYPO3\Fluid\ViewHelpers\FormViewHelper');
$viewHelper44->setArguments($arguments35);
$viewHelper44->setRenderingContext($renderingContext);
$viewHelper44->setRenderChildrenClosure($renderChildrenClosure36);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper

$output34 .= $viewHelper44->initializeArgumentsAndRender();

$output34 .= '
';

return $output34;
}
/**
 * Main Render function
 */
public function render(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output45 = '';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments46 = array();
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper
$arguments47 = array();
$arguments47['name'] = 'Default';
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper49 = $self->getViewHelper('$viewHelper49', $renderingContext, 'TYPO3\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper49->setArguments($arguments47);
$viewHelper49->setRenderingContext($renderingContext);
$viewHelper49->setRenderChildrenClosure($renderChildrenClosure48);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper
$arguments46['value'] = $viewHelper49->initializeArgumentsAndRender();
$arguments46['keepQuotes'] = false;
$arguments46['encoding'] = 'UTF-8';
$arguments46['doubleEncode'] = true;
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
return NULL;
};
$value51 = ($arguments46['value'] !== NULL ? $arguments46['value'] : $renderChildrenClosure50());

$output45 .= !is_string($value51) && !(is_object($value51) && method_exists($value51, '__toString')) ? $value51 : htmlspecialchars($value51, ($arguments46['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments46['encoding'], $arguments46['doubleEncode']);

$output45 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments52 = array();
$arguments52['name'] = 'Title';
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$output54 = '';

$output54 .= 'Edit category "';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments55 = array();
$arguments55['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'category.title', $renderingContext);
$arguments55['keepQuotes'] = false;
$arguments55['encoding'] = 'UTF-8';
$arguments55['doubleEncode'] = true;
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
return NULL;
};
$value57 = ($arguments55['value'] !== NULL ? $arguments55['value'] : $renderChildrenClosure56());

$output54 .= !is_string($value57) && !(is_object($value57) && method_exists($value57, '__toString')) ? $value57 : htmlspecialchars($value57, ($arguments55['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments55['encoding'], $arguments55['doubleEncode']);

$output54 .= '"';
return $output54;
};

$output45 .= '';

$output45 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments58 = array();
$arguments58['name'] = 'Navigation';
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
$output60 = '';

$output60 .= '

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation" aria-expanded="false">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">MyBlog</a>
            </div>

            <div class="collapse navbar-collapse" id="navigation">
                <ul class="nav navbar-nav">
                    ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments61 = array();
$arguments61['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'listCategories', $renderingContext);
$arguments61['as'] = 'navCategory';
$arguments61['key'] = '';
$arguments61['reverse'] = false;
$arguments61['iteration'] = NULL;
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
$output63 = '';

$output63 .= '
                        <li>
                            ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments64 = array();
$arguments64['action'] = 'show';
$arguments64['controller'] = 'category';
// Rendering Array
$array65 = array();
$array65['category'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'navCategory', $renderingContext);
$arguments64['arguments'] = $array65;
$arguments64['additionalAttributes'] = NULL;
$arguments64['data'] = NULL;
$arguments64['package'] = NULL;
$arguments64['subpackage'] = NULL;
$arguments64['section'] = '';
$arguments64['format'] = '';
$arguments64['additionalParams'] = array (
);
$arguments64['addQueryString'] = false;
$arguments64['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments64['useParentRequest'] = false;
$arguments64['absolute'] = true;
$arguments64['class'] = NULL;
$arguments64['dir'] = NULL;
$arguments64['id'] = NULL;
$arguments64['lang'] = NULL;
$arguments64['style'] = NULL;
$arguments64['title'] = NULL;
$arguments64['accesskey'] = NULL;
$arguments64['tabindex'] = NULL;
$arguments64['onclick'] = NULL;
$arguments64['name'] = NULL;
$arguments64['rel'] = NULL;
$arguments64['rev'] = NULL;
$arguments64['target'] = NULL;
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments67 = array();
$arguments67['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'navCategory.title', $renderingContext);
$arguments67['keepQuotes'] = false;
$arguments67['encoding'] = 'UTF-8';
$arguments67['doubleEncode'] = true;
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
return NULL;
};
$value69 = ($arguments67['value'] !== NULL ? $arguments67['value'] : $renderChildrenClosure68());
return !is_string($value69) && !(is_object($value69) && method_exists($value69, '__toString')) ? $value69 : htmlspecialchars($value69, ($arguments67['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments67['encoding'], $arguments67['doubleEncode']);
};
$viewHelper70 = $self->getViewHelper('$viewHelper70', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper70->setArguments($arguments64);
$viewHelper70->setRenderingContext($renderingContext);
$viewHelper70->setRenderChildrenClosure($renderChildrenClosure66);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output63 .= $viewHelper70->initializeArgumentsAndRender();

$output63 .= '
                        </li>
                    ';
return $output63;
};

$output60 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);

$output60 .= '
                </ul>
            </div>
        </div>
    </nav>

';
return $output60;
};

$output45 .= '';

$output45 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments71 = array();
$arguments71['name'] = 'Sidebar';
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
$output73 = '';

$output73 .= '
    <h3>Category: </h3>
    <p>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments74 = array();
$arguments74['action'] = 'index';
$arguments74['controller'] = 'category';
$arguments74['additionalAttributes'] = NULL;
$arguments74['data'] = NULL;
$arguments74['arguments'] = array (
);
$arguments74['package'] = NULL;
$arguments74['subpackage'] = NULL;
$arguments74['section'] = '';
$arguments74['format'] = '';
$arguments74['additionalParams'] = array (
);
$arguments74['addQueryString'] = false;
$arguments74['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments74['useParentRequest'] = false;
$arguments74['absolute'] = true;
$arguments74['class'] = NULL;
$arguments74['dir'] = NULL;
$arguments74['id'] = NULL;
$arguments74['lang'] = NULL;
$arguments74['style'] = NULL;
$arguments74['title'] = NULL;
$arguments74['accesskey'] = NULL;
$arguments74['tabindex'] = NULL;
$arguments74['onclick'] = NULL;
$arguments74['name'] = NULL;
$arguments74['rel'] = NULL;
$arguments74['rev'] = NULL;
$arguments74['target'] = NULL;
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
return 'View Category';
};
$viewHelper76 = $self->getViewHelper('$viewHelper76', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper76->setArguments($arguments74);
$viewHelper76->setRenderingContext($renderingContext);
$viewHelper76->setRenderChildrenClosure($renderChildrenClosure75);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output73 .= $viewHelper76->initializeArgumentsAndRender();

$output73 .= '</p>
    <p>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments77 = array();
$arguments77['action'] = 'new';
$arguments77['controller'] = 'category';
$arguments77['additionalAttributes'] = NULL;
$arguments77['data'] = NULL;
$arguments77['arguments'] = array (
);
$arguments77['package'] = NULL;
$arguments77['subpackage'] = NULL;
$arguments77['section'] = '';
$arguments77['format'] = '';
$arguments77['additionalParams'] = array (
);
$arguments77['addQueryString'] = false;
$arguments77['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments77['useParentRequest'] = false;
$arguments77['absolute'] = true;
$arguments77['class'] = NULL;
$arguments77['dir'] = NULL;
$arguments77['id'] = NULL;
$arguments77['lang'] = NULL;
$arguments77['style'] = NULL;
$arguments77['title'] = NULL;
$arguments77['accesskey'] = NULL;
$arguments77['tabindex'] = NULL;
$arguments77['onclick'] = NULL;
$arguments77['name'] = NULL;
$arguments77['rel'] = NULL;
$arguments77['rev'] = NULL;
$arguments77['target'] = NULL;
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
return 'Create a new category';
};
$viewHelper79 = $self->getViewHelper('$viewHelper79', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper79->setArguments($arguments77);
$viewHelper79->setRenderingContext($renderingContext);
$viewHelper79->setRenderChildrenClosure($renderChildrenClosure78);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output73 .= $viewHelper79->initializeArgumentsAndRender();

$output73 .= '</p>
    <h3>Post: </h3>
    <p>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments80 = array();
$arguments80['action'] = 'index';
$arguments80['controller'] = 'post';
$arguments80['additionalAttributes'] = NULL;
$arguments80['data'] = NULL;
$arguments80['arguments'] = array (
);
$arguments80['package'] = NULL;
$arguments80['subpackage'] = NULL;
$arguments80['section'] = '';
$arguments80['format'] = '';
$arguments80['additionalParams'] = array (
);
$arguments80['addQueryString'] = false;
$arguments80['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments80['useParentRequest'] = false;
$arguments80['absolute'] = true;
$arguments80['class'] = NULL;
$arguments80['dir'] = NULL;
$arguments80['id'] = NULL;
$arguments80['lang'] = NULL;
$arguments80['style'] = NULL;
$arguments80['title'] = NULL;
$arguments80['accesskey'] = NULL;
$arguments80['tabindex'] = NULL;
$arguments80['onclick'] = NULL;
$arguments80['name'] = NULL;
$arguments80['rel'] = NULL;
$arguments80['rev'] = NULL;
$arguments80['target'] = NULL;
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
return 'View Post';
};
$viewHelper82 = $self->getViewHelper('$viewHelper82', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper82->setArguments($arguments80);
$viewHelper82->setRenderingContext($renderingContext);
$viewHelper82->setRenderChildrenClosure($renderChildrenClosure81);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output73 .= $viewHelper82->initializeArgumentsAndRender();

$output73 .= '</p>
    <p>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments83 = array();
$arguments83['action'] = 'new';
$arguments83['controller'] = 'post';
$arguments83['additionalAttributes'] = NULL;
$arguments83['data'] = NULL;
$arguments83['arguments'] = array (
);
$arguments83['package'] = NULL;
$arguments83['subpackage'] = NULL;
$arguments83['section'] = '';
$arguments83['format'] = '';
$arguments83['additionalParams'] = array (
);
$arguments83['addQueryString'] = false;
$arguments83['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments83['useParentRequest'] = false;
$arguments83['absolute'] = true;
$arguments83['class'] = NULL;
$arguments83['dir'] = NULL;
$arguments83['id'] = NULL;
$arguments83['lang'] = NULL;
$arguments83['style'] = NULL;
$arguments83['title'] = NULL;
$arguments83['accesskey'] = NULL;
$arguments83['tabindex'] = NULL;
$arguments83['onclick'] = NULL;
$arguments83['name'] = NULL;
$arguments83['rel'] = NULL;
$arguments83['rev'] = NULL;
$arguments83['target'] = NULL;
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
return 'Create new post';
};
$viewHelper85 = $self->getViewHelper('$viewHelper85', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper85->setArguments($arguments83);
$viewHelper85->setRenderingContext($renderingContext);
$viewHelper85->setRenderChildrenClosure($renderChildrenClosure84);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output73 .= $viewHelper85->initializeArgumentsAndRender();

$output73 .= '</p>
    <h3>Author: </h3>
    <p>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments86 = array();
$arguments86['action'] = 'index';
$arguments86['controller'] = 'author';
$arguments86['additionalAttributes'] = NULL;
$arguments86['data'] = NULL;
$arguments86['arguments'] = array (
);
$arguments86['package'] = NULL;
$arguments86['subpackage'] = NULL;
$arguments86['section'] = '';
$arguments86['format'] = '';
$arguments86['additionalParams'] = array (
);
$arguments86['addQueryString'] = false;
$arguments86['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments86['useParentRequest'] = false;
$arguments86['absolute'] = true;
$arguments86['class'] = NULL;
$arguments86['dir'] = NULL;
$arguments86['id'] = NULL;
$arguments86['lang'] = NULL;
$arguments86['style'] = NULL;
$arguments86['title'] = NULL;
$arguments86['accesskey'] = NULL;
$arguments86['tabindex'] = NULL;
$arguments86['onclick'] = NULL;
$arguments86['name'] = NULL;
$arguments86['rel'] = NULL;
$arguments86['rev'] = NULL;
$arguments86['target'] = NULL;
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
return 'View Author';
};
$viewHelper88 = $self->getViewHelper('$viewHelper88', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper88->setArguments($arguments86);
$viewHelper88->setRenderingContext($renderingContext);
$viewHelper88->setRenderChildrenClosure($renderChildrenClosure87);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output73 .= $viewHelper88->initializeArgumentsAndRender();

$output73 .= '</p>
    <p>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments89 = array();
$arguments89['action'] = 'new';
$arguments89['controller'] = 'author';
$arguments89['additionalAttributes'] = NULL;
$arguments89['data'] = NULL;
$arguments89['arguments'] = array (
);
$arguments89['package'] = NULL;
$arguments89['subpackage'] = NULL;
$arguments89['section'] = '';
$arguments89['format'] = '';
$arguments89['additionalParams'] = array (
);
$arguments89['addQueryString'] = false;
$arguments89['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments89['useParentRequest'] = false;
$arguments89['absolute'] = true;
$arguments89['class'] = NULL;
$arguments89['dir'] = NULL;
$arguments89['id'] = NULL;
$arguments89['lang'] = NULL;
$arguments89['style'] = NULL;
$arguments89['title'] = NULL;
$arguments89['accesskey'] = NULL;
$arguments89['tabindex'] = NULL;
$arguments89['onclick'] = NULL;
$arguments89['name'] = NULL;
$arguments89['rel'] = NULL;
$arguments89['rev'] = NULL;
$arguments89['target'] = NULL;
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
return 'Create New Author';
};
$viewHelper91 = $self->getViewHelper('$viewHelper91', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper91->setArguments($arguments89);
$viewHelper91->setRenderingContext($renderingContext);
$viewHelper91->setRenderChildrenClosure($renderChildrenClosure90);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output73 .= $viewHelper91->initializeArgumentsAndRender();

$output73 .= '</p>
';
return $output73;
};

$output45 .= '';

$output45 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments92 = array();
$arguments92['name'] = 'Content';
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
$output94 = '';

$output94 .= '
	';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper
$arguments95 = array();
$arguments95['action'] = 'update';
$arguments95['object'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'category', $renderingContext);
$arguments95['objectName'] = 'category';
$arguments95['additionalAttributes'] = NULL;
$arguments95['data'] = NULL;
$arguments95['arguments'] = array (
);
$arguments95['controller'] = NULL;
$arguments95['package'] = NULL;
$arguments95['subpackage'] = NULL;
$arguments95['section'] = '';
$arguments95['format'] = '';
$arguments95['additionalParams'] = array (
);
$arguments95['absolute'] = false;
$arguments95['addQueryString'] = false;
$arguments95['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments95['fieldNamePrefix'] = NULL;
$arguments95['actionUri'] = NULL;
$arguments95['useParentRequest'] = false;
$arguments95['enctype'] = NULL;
$arguments95['method'] = NULL;
$arguments95['name'] = NULL;
$arguments95['onreset'] = NULL;
$arguments95['onsubmit'] = NULL;
$arguments95['class'] = NULL;
$arguments95['dir'] = NULL;
$arguments95['id'] = NULL;
$arguments95['lang'] = NULL;
$arguments95['style'] = NULL;
$arguments95['title'] = NULL;
$arguments95['accesskey'] = NULL;
$arguments95['tabindex'] = NULL;
$arguments95['onclick'] = NULL;
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
$output97 = '';

$output97 .= '
		<div class="col-md-8 col-sm-8 col-xs-12">
            <table class="table">
                <tr>
                    <td><label for="title">Title</label></td>
                    <td>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments98 = array();
$arguments98['class'] = 'form-control';
$arguments98['property'] = 'title';
$arguments98['id'] = 'title';
$arguments98['additionalAttributes'] = NULL;
$arguments98['data'] = NULL;
$arguments98['required'] = false;
$arguments98['type'] = 'text';
$arguments98['name'] = NULL;
$arguments98['value'] = NULL;
$arguments98['disabled'] = NULL;
$arguments98['maxlength'] = NULL;
$arguments98['readonly'] = NULL;
$arguments98['size'] = NULL;
$arguments98['placeholder'] = NULL;
$arguments98['autofocus'] = NULL;
$arguments98['errorClass'] = 'f3-form-error';
$arguments98['dir'] = NULL;
$arguments98['lang'] = NULL;
$arguments98['style'] = NULL;
$arguments98['title'] = NULL;
$arguments98['accesskey'] = NULL;
$arguments98['tabindex'] = NULL;
$arguments98['onclick'] = NULL;
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper100 = $self->getViewHelper('$viewHelper100', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper100->setArguments($arguments98);
$viewHelper100->setRenderingContext($renderingContext);
$viewHelper100->setRenderChildrenClosure($renderChildrenClosure99);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output97 .= $viewHelper100->initializeArgumentsAndRender();

$output97 .= '</td>
                </tr>
                <tr>
                    <td>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments101 = array();
$arguments101['class'] = 'btn btn-primary';
$arguments101['value'] = 'Update';
$arguments101['additionalAttributes'] = NULL;
$arguments101['data'] = NULL;
$arguments101['name'] = NULL;
$arguments101['property'] = NULL;
$arguments101['disabled'] = NULL;
$arguments101['dir'] = NULL;
$arguments101['id'] = NULL;
$arguments101['lang'] = NULL;
$arguments101['style'] = NULL;
$arguments101['title'] = NULL;
$arguments101['accesskey'] = NULL;
$arguments101['tabindex'] = NULL;
$arguments101['onclick'] = NULL;
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper103 = $self->getViewHelper('$viewHelper103', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper103->setArguments($arguments101);
$viewHelper103->setRenderingContext($renderingContext);
$viewHelper103->setRenderChildrenClosure($renderChildrenClosure102);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper

$output97 .= $viewHelper103->initializeArgumentsAndRender();

$output97 .= '</td>
                    <td></td>
                </tr>
            </table>
        </div>
	';
return $output97;
};
$viewHelper104 = $self->getViewHelper('$viewHelper104', $renderingContext, 'TYPO3\Fluid\ViewHelpers\FormViewHelper');
$viewHelper104->setArguments($arguments95);
$viewHelper104->setRenderingContext($renderingContext);
$viewHelper104->setRenderChildrenClosure($renderChildrenClosure96);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper

$output94 .= $viewHelper104->initializeArgumentsAndRender();

$output94 .= '
';
return $output94;
};

$output45 .= '';

$output45 .= '
';

return $output45;
}


}
#0             42500     