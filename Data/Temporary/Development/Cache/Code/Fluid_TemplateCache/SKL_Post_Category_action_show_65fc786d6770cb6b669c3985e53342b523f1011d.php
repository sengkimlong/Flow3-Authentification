<?php class FluidCache_SKL_Post_Category_action_show_65fc786d6770cb6b669c3985e53342b523f1011d extends \TYPO3\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= 'Category "';
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
	<table class="table">
        ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper
$arguments35 = array();
// Rendering Boolean node
$arguments35['condition'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'category.posts', $renderingContext));
$arguments35['then'] = NULL;
$arguments35['else'] = NULL;
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
$output37 = '';

$output37 .= '
            ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper
$arguments38 = array();
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
$output40 = '';

$output40 .= '
                ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments41 = array();
$arguments41['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'category.posts', $renderingContext);
$arguments41['as'] = 'post';
$arguments41['key'] = '';
$arguments41['reverse'] = false;
$arguments41['iteration'] = NULL;
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
$output43 = '';

$output43 .= '
                    <tr>
                        <td>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments44 = array();
$arguments44['action'] = 'show';
$arguments44['controller'] = 'post';
// Rendering Array
$array45 = array();
$array45['post'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post', $renderingContext);
$arguments44['arguments'] = $array45;
$arguments44['additionalAttributes'] = NULL;
$arguments44['data'] = NULL;
$arguments44['package'] = NULL;
$arguments44['subpackage'] = NULL;
$arguments44['section'] = '';
$arguments44['format'] = '';
$arguments44['additionalParams'] = array (
);
$arguments44['addQueryString'] = false;
$arguments44['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments44['useParentRequest'] = false;
$arguments44['absolute'] = true;
$arguments44['class'] = NULL;
$arguments44['dir'] = NULL;
$arguments44['id'] = NULL;
$arguments44['lang'] = NULL;
$arguments44['style'] = NULL;
$arguments44['title'] = NULL;
$arguments44['accesskey'] = NULL;
$arguments44['tabindex'] = NULL;
$arguments44['onclick'] = NULL;
$arguments44['name'] = NULL;
$arguments44['rel'] = NULL;
$arguments44['rev'] = NULL;
$arguments44['target'] = NULL;
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments47 = array();
$arguments47['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.name', $renderingContext);
$arguments47['keepQuotes'] = false;
$arguments47['encoding'] = 'UTF-8';
$arguments47['doubleEncode'] = true;
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
return NULL;
};
$value49 = ($arguments47['value'] !== NULL ? $arguments47['value'] : $renderChildrenClosure48());
return !is_string($value49) && !(is_object($value49) && method_exists($value49, '__toString')) ? $value49 : htmlspecialchars($value49, ($arguments47['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments47['encoding'], $arguments47['doubleEncode']);
};
$viewHelper50 = $self->getViewHelper('$viewHelper50', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper50->setArguments($arguments44);
$viewHelper50->setRenderingContext($renderingContext);
$viewHelper50->setRenderChildrenClosure($renderChildrenClosure46);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output43 .= $viewHelper50->initializeArgumentsAndRender();

$output43 .= '</td>
                        <td>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments51 = array();
$arguments51['action'] = 'edit';
$arguments51['controller'] = 'post';
// Rendering Array
$array52 = array();
$array52['post'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post', $renderingContext);
$arguments51['arguments'] = $array52;
$arguments51['class'] = 'btn btn-primary';
$arguments51['additionalAttributes'] = NULL;
$arguments51['data'] = NULL;
$arguments51['package'] = NULL;
$arguments51['subpackage'] = NULL;
$arguments51['section'] = '';
$arguments51['format'] = '';
$arguments51['additionalParams'] = array (
);
$arguments51['addQueryString'] = false;
$arguments51['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments51['useParentRequest'] = false;
$arguments51['absolute'] = true;
$arguments51['dir'] = NULL;
$arguments51['id'] = NULL;
$arguments51['lang'] = NULL;
$arguments51['style'] = NULL;
$arguments51['title'] = NULL;
$arguments51['accesskey'] = NULL;
$arguments51['tabindex'] = NULL;
$arguments51['onclick'] = NULL;
$arguments51['name'] = NULL;
$arguments51['rel'] = NULL;
$arguments51['rev'] = NULL;
$arguments51['target'] = NULL;
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
return 'Edit';
};
$viewHelper54 = $self->getViewHelper('$viewHelper54', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper54->setArguments($arguments51);
$viewHelper54->setRenderingContext($renderingContext);
$viewHelper54->setRenderChildrenClosure($renderChildrenClosure53);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output43 .= $viewHelper54->initializeArgumentsAndRender();

$output43 .= '</td>
                        <td>
                            ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper
$arguments55 = array();
$arguments55['action'] = 'delete';
// Rendering Array
$array56 = array();
$array56['post'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post', $renderingContext);
$arguments55['arguments'] = $array56;
$arguments55['additionalAttributes'] = NULL;
$arguments55['data'] = NULL;
$arguments55['controller'] = NULL;
$arguments55['package'] = NULL;
$arguments55['subpackage'] = NULL;
$arguments55['object'] = NULL;
$arguments55['section'] = '';
$arguments55['format'] = '';
$arguments55['additionalParams'] = array (
);
$arguments55['absolute'] = false;
$arguments55['addQueryString'] = false;
$arguments55['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments55['fieldNamePrefix'] = NULL;
$arguments55['actionUri'] = NULL;
$arguments55['objectName'] = NULL;
$arguments55['useParentRequest'] = false;
$arguments55['enctype'] = NULL;
$arguments55['method'] = NULL;
$arguments55['name'] = NULL;
$arguments55['onreset'] = NULL;
$arguments55['onsubmit'] = NULL;
$arguments55['class'] = NULL;
$arguments55['dir'] = NULL;
$arguments55['id'] = NULL;
$arguments55['lang'] = NULL;
$arguments55['style'] = NULL;
$arguments55['title'] = NULL;
$arguments55['accesskey'] = NULL;
$arguments55['tabindex'] = NULL;
$arguments55['onclick'] = NULL;
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
$output58 = '';

$output58 .= '
                                ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments59 = array();
$arguments59['class'] = 'btn btn-danger';
$arguments59['value'] = 'Delete';
$arguments59['additionalAttributes'] = NULL;
$arguments59['data'] = NULL;
$arguments59['name'] = NULL;
$arguments59['property'] = NULL;
$arguments59['disabled'] = NULL;
$arguments59['dir'] = NULL;
$arguments59['id'] = NULL;
$arguments59['lang'] = NULL;
$arguments59['style'] = NULL;
$arguments59['title'] = NULL;
$arguments59['accesskey'] = NULL;
$arguments59['tabindex'] = NULL;
$arguments59['onclick'] = NULL;
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper61 = $self->getViewHelper('$viewHelper61', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper61->setArguments($arguments59);
$viewHelper61->setRenderingContext($renderingContext);
$viewHelper61->setRenderChildrenClosure($renderChildrenClosure60);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper

$output58 .= $viewHelper61->initializeArgumentsAndRender();

$output58 .= '
                            ';
return $output58;
};
$viewHelper62 = $self->getViewHelper('$viewHelper62', $renderingContext, 'TYPO3\Fluid\ViewHelpers\FormViewHelper');
$viewHelper62->setArguments($arguments55);
$viewHelper62->setRenderingContext($renderingContext);
$viewHelper62->setRenderChildrenClosure($renderChildrenClosure57);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper

$output43 .= $viewHelper62->initializeArgumentsAndRender();

$output43 .= '
                        </td>
                    </tr>
                ';
return $output43;
};

$output40 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);

$output40 .= '
            ';
return $output40;
};
$viewHelper63 = $self->getViewHelper('$viewHelper63', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper63->setArguments($arguments38);
$viewHelper63->setRenderingContext($renderingContext);
$viewHelper63->setRenderChildrenClosure($renderChildrenClosure39);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper

$output37 .= $viewHelper63->initializeArgumentsAndRender();

$output37 .= '
            ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ElseViewHelper
$arguments64 = array();
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
return '
                <div class="alert alert-success">
                    <strong>Note!</strong> There is no any post for this category.
                </div>
            ';
};
$viewHelper66 = $self->getViewHelper('$viewHelper66', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ElseViewHelper');
$viewHelper66->setArguments($arguments64);
$viewHelper66->setRenderingContext($renderingContext);
$viewHelper66->setRenderChildrenClosure($renderChildrenClosure65);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ElseViewHelper

$output37 .= $viewHelper66->initializeArgumentsAndRender();

$output37 .= '
        ';
return $output37;
};
$arguments35['__thenClosure'] = function() use ($renderingContext, $self) {
$output67 = '';

$output67 .= '
                ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments68 = array();
$arguments68['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'category.posts', $renderingContext);
$arguments68['as'] = 'post';
$arguments68['key'] = '';
$arguments68['reverse'] = false;
$arguments68['iteration'] = NULL;
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
$output70 = '';

$output70 .= '
                    <tr>
                        <td>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments71 = array();
$arguments71['action'] = 'show';
$arguments71['controller'] = 'post';
// Rendering Array
$array72 = array();
$array72['post'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post', $renderingContext);
$arguments71['arguments'] = $array72;
$arguments71['additionalAttributes'] = NULL;
$arguments71['data'] = NULL;
$arguments71['package'] = NULL;
$arguments71['subpackage'] = NULL;
$arguments71['section'] = '';
$arguments71['format'] = '';
$arguments71['additionalParams'] = array (
);
$arguments71['addQueryString'] = false;
$arguments71['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments71['useParentRequest'] = false;
$arguments71['absolute'] = true;
$arguments71['class'] = NULL;
$arguments71['dir'] = NULL;
$arguments71['id'] = NULL;
$arguments71['lang'] = NULL;
$arguments71['style'] = NULL;
$arguments71['title'] = NULL;
$arguments71['accesskey'] = NULL;
$arguments71['tabindex'] = NULL;
$arguments71['onclick'] = NULL;
$arguments71['name'] = NULL;
$arguments71['rel'] = NULL;
$arguments71['rev'] = NULL;
$arguments71['target'] = NULL;
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments74 = array();
$arguments74['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.name', $renderingContext);
$arguments74['keepQuotes'] = false;
$arguments74['encoding'] = 'UTF-8';
$arguments74['doubleEncode'] = true;
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
return NULL;
};
$value76 = ($arguments74['value'] !== NULL ? $arguments74['value'] : $renderChildrenClosure75());
return !is_string($value76) && !(is_object($value76) && method_exists($value76, '__toString')) ? $value76 : htmlspecialchars($value76, ($arguments74['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments74['encoding'], $arguments74['doubleEncode']);
};
$viewHelper77 = $self->getViewHelper('$viewHelper77', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper77->setArguments($arguments71);
$viewHelper77->setRenderingContext($renderingContext);
$viewHelper77->setRenderChildrenClosure($renderChildrenClosure73);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output70 .= $viewHelper77->initializeArgumentsAndRender();

$output70 .= '</td>
                        <td>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments78 = array();
$arguments78['action'] = 'edit';
$arguments78['controller'] = 'post';
// Rendering Array
$array79 = array();
$array79['post'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post', $renderingContext);
$arguments78['arguments'] = $array79;
$arguments78['class'] = 'btn btn-primary';
$arguments78['additionalAttributes'] = NULL;
$arguments78['data'] = NULL;
$arguments78['package'] = NULL;
$arguments78['subpackage'] = NULL;
$arguments78['section'] = '';
$arguments78['format'] = '';
$arguments78['additionalParams'] = array (
);
$arguments78['addQueryString'] = false;
$arguments78['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments78['useParentRequest'] = false;
$arguments78['absolute'] = true;
$arguments78['dir'] = NULL;
$arguments78['id'] = NULL;
$arguments78['lang'] = NULL;
$arguments78['style'] = NULL;
$arguments78['title'] = NULL;
$arguments78['accesskey'] = NULL;
$arguments78['tabindex'] = NULL;
$arguments78['onclick'] = NULL;
$arguments78['name'] = NULL;
$arguments78['rel'] = NULL;
$arguments78['rev'] = NULL;
$arguments78['target'] = NULL;
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
return 'Edit';
};
$viewHelper81 = $self->getViewHelper('$viewHelper81', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper81->setArguments($arguments78);
$viewHelper81->setRenderingContext($renderingContext);
$viewHelper81->setRenderChildrenClosure($renderChildrenClosure80);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output70 .= $viewHelper81->initializeArgumentsAndRender();

$output70 .= '</td>
                        <td>
                            ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper
$arguments82 = array();
$arguments82['action'] = 'delete';
// Rendering Array
$array83 = array();
$array83['post'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post', $renderingContext);
$arguments82['arguments'] = $array83;
$arguments82['additionalAttributes'] = NULL;
$arguments82['data'] = NULL;
$arguments82['controller'] = NULL;
$arguments82['package'] = NULL;
$arguments82['subpackage'] = NULL;
$arguments82['object'] = NULL;
$arguments82['section'] = '';
$arguments82['format'] = '';
$arguments82['additionalParams'] = array (
);
$arguments82['absolute'] = false;
$arguments82['addQueryString'] = false;
$arguments82['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments82['fieldNamePrefix'] = NULL;
$arguments82['actionUri'] = NULL;
$arguments82['objectName'] = NULL;
$arguments82['useParentRequest'] = false;
$arguments82['enctype'] = NULL;
$arguments82['method'] = NULL;
$arguments82['name'] = NULL;
$arguments82['onreset'] = NULL;
$arguments82['onsubmit'] = NULL;
$arguments82['class'] = NULL;
$arguments82['dir'] = NULL;
$arguments82['id'] = NULL;
$arguments82['lang'] = NULL;
$arguments82['style'] = NULL;
$arguments82['title'] = NULL;
$arguments82['accesskey'] = NULL;
$arguments82['tabindex'] = NULL;
$arguments82['onclick'] = NULL;
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
$output85 = '';

$output85 .= '
                                ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments86 = array();
$arguments86['class'] = 'btn btn-danger';
$arguments86['value'] = 'Delete';
$arguments86['additionalAttributes'] = NULL;
$arguments86['data'] = NULL;
$arguments86['name'] = NULL;
$arguments86['property'] = NULL;
$arguments86['disabled'] = NULL;
$arguments86['dir'] = NULL;
$arguments86['id'] = NULL;
$arguments86['lang'] = NULL;
$arguments86['style'] = NULL;
$arguments86['title'] = NULL;
$arguments86['accesskey'] = NULL;
$arguments86['tabindex'] = NULL;
$arguments86['onclick'] = NULL;
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper88 = $self->getViewHelper('$viewHelper88', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper88->setArguments($arguments86);
$viewHelper88->setRenderingContext($renderingContext);
$viewHelper88->setRenderChildrenClosure($renderChildrenClosure87);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper

$output85 .= $viewHelper88->initializeArgumentsAndRender();

$output85 .= '
                            ';
return $output85;
};
$viewHelper89 = $self->getViewHelper('$viewHelper89', $renderingContext, 'TYPO3\Fluid\ViewHelpers\FormViewHelper');
$viewHelper89->setArguments($arguments82);
$viewHelper89->setRenderingContext($renderingContext);
$viewHelper89->setRenderChildrenClosure($renderChildrenClosure84);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper

$output70 .= $viewHelper89->initializeArgumentsAndRender();

$output70 .= '
                        </td>
                    </tr>
                ';
return $output70;
};

$output67 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext);

$output67 .= '
            ';
return $output67;
};
$arguments35['__elseClosure'] = function() use ($renderingContext, $self) {
return '
                <div class="alert alert-success">
                    <strong>Note!</strong> There is no any post for this category.
                </div>
            ';
};
$viewHelper90 = $self->getViewHelper('$viewHelper90', $renderingContext, 'TYPO3\Fluid\ViewHelpers\IfViewHelper');
$viewHelper90->setArguments($arguments35);
$viewHelper90->setRenderingContext($renderingContext);
$viewHelper90->setRenderChildrenClosure($renderChildrenClosure36);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper

$output34 .= $viewHelper90->initializeArgumentsAndRender();

$output34 .= '
	</table>
	';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments91 = array();
$arguments91['action'] = 'index';
$arguments91['additionalAttributes'] = NULL;
$arguments91['data'] = NULL;
$arguments91['arguments'] = array (
);
$arguments91['controller'] = NULL;
$arguments91['package'] = NULL;
$arguments91['subpackage'] = NULL;
$arguments91['section'] = '';
$arguments91['format'] = '';
$arguments91['additionalParams'] = array (
);
$arguments91['addQueryString'] = false;
$arguments91['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments91['useParentRequest'] = false;
$arguments91['absolute'] = true;
$arguments91['class'] = NULL;
$arguments91['dir'] = NULL;
$arguments91['id'] = NULL;
$arguments91['lang'] = NULL;
$arguments91['style'] = NULL;
$arguments91['title'] = NULL;
$arguments91['accesskey'] = NULL;
$arguments91['tabindex'] = NULL;
$arguments91['onclick'] = NULL;
$arguments91['name'] = NULL;
$arguments91['rel'] = NULL;
$arguments91['rev'] = NULL;
$arguments91['target'] = NULL;
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
return 'Back';
};
$viewHelper93 = $self->getViewHelper('$viewHelper93', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper93->setArguments($arguments91);
$viewHelper93->setRenderingContext($renderingContext);
$viewHelper93->setRenderChildrenClosure($renderChildrenClosure92);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output34 .= $viewHelper93->initializeArgumentsAndRender();

$output34 .= '
';

return $output34;
}
/**
 * Main Render function
 */
public function render(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output94 = '';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments95 = array();
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper
$arguments96 = array();
$arguments96['name'] = 'Default';
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper98 = $self->getViewHelper('$viewHelper98', $renderingContext, 'TYPO3\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper98->setArguments($arguments96);
$viewHelper98->setRenderingContext($renderingContext);
$viewHelper98->setRenderChildrenClosure($renderChildrenClosure97);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper
$arguments95['value'] = $viewHelper98->initializeArgumentsAndRender();
$arguments95['keepQuotes'] = false;
$arguments95['encoding'] = 'UTF-8';
$arguments95['doubleEncode'] = true;
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
return NULL;
};
$value100 = ($arguments95['value'] !== NULL ? $arguments95['value'] : $renderChildrenClosure99());

$output94 .= !is_string($value100) && !(is_object($value100) && method_exists($value100, '__toString')) ? $value100 : htmlspecialchars($value100, ($arguments95['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments95['encoding'], $arguments95['doubleEncode']);

$output94 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments101 = array();
$arguments101['name'] = 'Title';
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
$output103 = '';

$output103 .= 'Category "';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments104 = array();
$arguments104['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'category.title', $renderingContext);
$arguments104['keepQuotes'] = false;
$arguments104['encoding'] = 'UTF-8';
$arguments104['doubleEncode'] = true;
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
return NULL;
};
$value106 = ($arguments104['value'] !== NULL ? $arguments104['value'] : $renderChildrenClosure105());

$output103 .= !is_string($value106) && !(is_object($value106) && method_exists($value106, '__toString')) ? $value106 : htmlspecialchars($value106, ($arguments104['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments104['encoding'], $arguments104['doubleEncode']);

$output103 .= '"';
return $output103;
};

$output94 .= '';

$output94 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments107 = array();
$arguments107['name'] = 'Navigation';
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
$output109 = '';

$output109 .= '

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
$arguments110 = array();
$arguments110['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'listCategories', $renderingContext);
$arguments110['as'] = 'navCategory';
$arguments110['key'] = '';
$arguments110['reverse'] = false;
$arguments110['iteration'] = NULL;
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
$output112 = '';

$output112 .= '
                        <li>
                            ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments113 = array();
$arguments113['action'] = 'show';
$arguments113['controller'] = 'category';
// Rendering Array
$array114 = array();
$array114['category'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'navCategory', $renderingContext);
$arguments113['arguments'] = $array114;
$arguments113['additionalAttributes'] = NULL;
$arguments113['data'] = NULL;
$arguments113['package'] = NULL;
$arguments113['subpackage'] = NULL;
$arguments113['section'] = '';
$arguments113['format'] = '';
$arguments113['additionalParams'] = array (
);
$arguments113['addQueryString'] = false;
$arguments113['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments113['useParentRequest'] = false;
$arguments113['absolute'] = true;
$arguments113['class'] = NULL;
$arguments113['dir'] = NULL;
$arguments113['id'] = NULL;
$arguments113['lang'] = NULL;
$arguments113['style'] = NULL;
$arguments113['title'] = NULL;
$arguments113['accesskey'] = NULL;
$arguments113['tabindex'] = NULL;
$arguments113['onclick'] = NULL;
$arguments113['name'] = NULL;
$arguments113['rel'] = NULL;
$arguments113['rev'] = NULL;
$arguments113['target'] = NULL;
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments116 = array();
$arguments116['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'navCategory.title', $renderingContext);
$arguments116['keepQuotes'] = false;
$arguments116['encoding'] = 'UTF-8';
$arguments116['doubleEncode'] = true;
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
return NULL;
};
$value118 = ($arguments116['value'] !== NULL ? $arguments116['value'] : $renderChildrenClosure117());
return !is_string($value118) && !(is_object($value118) && method_exists($value118, '__toString')) ? $value118 : htmlspecialchars($value118, ($arguments116['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments116['encoding'], $arguments116['doubleEncode']);
};
$viewHelper119 = $self->getViewHelper('$viewHelper119', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper119->setArguments($arguments113);
$viewHelper119->setRenderingContext($renderingContext);
$viewHelper119->setRenderChildrenClosure($renderChildrenClosure115);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output112 .= $viewHelper119->initializeArgumentsAndRender();

$output112 .= '
                        </li>
                    ';
return $output112;
};

$output109 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments110, $renderChildrenClosure111, $renderingContext);

$output109 .= '
                </ul>
            </div>
        </div>
    </nav>

';
return $output109;
};

$output94 .= '';

$output94 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments120 = array();
$arguments120['name'] = 'Sidebar';
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
$output122 = '';

$output122 .= '
    <h3>Category: </h3>
    <p>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments123 = array();
$arguments123['action'] = 'index';
$arguments123['controller'] = 'category';
$arguments123['additionalAttributes'] = NULL;
$arguments123['data'] = NULL;
$arguments123['arguments'] = array (
);
$arguments123['package'] = NULL;
$arguments123['subpackage'] = NULL;
$arguments123['section'] = '';
$arguments123['format'] = '';
$arguments123['additionalParams'] = array (
);
$arguments123['addQueryString'] = false;
$arguments123['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments123['useParentRequest'] = false;
$arguments123['absolute'] = true;
$arguments123['class'] = NULL;
$arguments123['dir'] = NULL;
$arguments123['id'] = NULL;
$arguments123['lang'] = NULL;
$arguments123['style'] = NULL;
$arguments123['title'] = NULL;
$arguments123['accesskey'] = NULL;
$arguments123['tabindex'] = NULL;
$arguments123['onclick'] = NULL;
$arguments123['name'] = NULL;
$arguments123['rel'] = NULL;
$arguments123['rev'] = NULL;
$arguments123['target'] = NULL;
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
return 'View Category';
};
$viewHelper125 = $self->getViewHelper('$viewHelper125', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper125->setArguments($arguments123);
$viewHelper125->setRenderingContext($renderingContext);
$viewHelper125->setRenderChildrenClosure($renderChildrenClosure124);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output122 .= $viewHelper125->initializeArgumentsAndRender();

$output122 .= '</p>
    <p>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments126 = array();
$arguments126['action'] = 'new';
$arguments126['controller'] = 'category';
$arguments126['additionalAttributes'] = NULL;
$arguments126['data'] = NULL;
$arguments126['arguments'] = array (
);
$arguments126['package'] = NULL;
$arguments126['subpackage'] = NULL;
$arguments126['section'] = '';
$arguments126['format'] = '';
$arguments126['additionalParams'] = array (
);
$arguments126['addQueryString'] = false;
$arguments126['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments126['useParentRequest'] = false;
$arguments126['absolute'] = true;
$arguments126['class'] = NULL;
$arguments126['dir'] = NULL;
$arguments126['id'] = NULL;
$arguments126['lang'] = NULL;
$arguments126['style'] = NULL;
$arguments126['title'] = NULL;
$arguments126['accesskey'] = NULL;
$arguments126['tabindex'] = NULL;
$arguments126['onclick'] = NULL;
$arguments126['name'] = NULL;
$arguments126['rel'] = NULL;
$arguments126['rev'] = NULL;
$arguments126['target'] = NULL;
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
return 'Create a new category';
};
$viewHelper128 = $self->getViewHelper('$viewHelper128', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper128->setArguments($arguments126);
$viewHelper128->setRenderingContext($renderingContext);
$viewHelper128->setRenderChildrenClosure($renderChildrenClosure127);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output122 .= $viewHelper128->initializeArgumentsAndRender();

$output122 .= '</p>
    <h3>Post: </h3>
    <p>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments129 = array();
$arguments129['action'] = 'index';
$arguments129['controller'] = 'post';
$arguments129['additionalAttributes'] = NULL;
$arguments129['data'] = NULL;
$arguments129['arguments'] = array (
);
$arguments129['package'] = NULL;
$arguments129['subpackage'] = NULL;
$arguments129['section'] = '';
$arguments129['format'] = '';
$arguments129['additionalParams'] = array (
);
$arguments129['addQueryString'] = false;
$arguments129['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments129['useParentRequest'] = false;
$arguments129['absolute'] = true;
$arguments129['class'] = NULL;
$arguments129['dir'] = NULL;
$arguments129['id'] = NULL;
$arguments129['lang'] = NULL;
$arguments129['style'] = NULL;
$arguments129['title'] = NULL;
$arguments129['accesskey'] = NULL;
$arguments129['tabindex'] = NULL;
$arguments129['onclick'] = NULL;
$arguments129['name'] = NULL;
$arguments129['rel'] = NULL;
$arguments129['rev'] = NULL;
$arguments129['target'] = NULL;
$renderChildrenClosure130 = function() use ($renderingContext, $self) {
return 'View Post';
};
$viewHelper131 = $self->getViewHelper('$viewHelper131', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper131->setArguments($arguments129);
$viewHelper131->setRenderingContext($renderingContext);
$viewHelper131->setRenderChildrenClosure($renderChildrenClosure130);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output122 .= $viewHelper131->initializeArgumentsAndRender();

$output122 .= '</p>
    <p>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments132 = array();
$arguments132['action'] = 'new';
$arguments132['controller'] = 'post';
$arguments132['additionalAttributes'] = NULL;
$arguments132['data'] = NULL;
$arguments132['arguments'] = array (
);
$arguments132['package'] = NULL;
$arguments132['subpackage'] = NULL;
$arguments132['section'] = '';
$arguments132['format'] = '';
$arguments132['additionalParams'] = array (
);
$arguments132['addQueryString'] = false;
$arguments132['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments132['useParentRequest'] = false;
$arguments132['absolute'] = true;
$arguments132['class'] = NULL;
$arguments132['dir'] = NULL;
$arguments132['id'] = NULL;
$arguments132['lang'] = NULL;
$arguments132['style'] = NULL;
$arguments132['title'] = NULL;
$arguments132['accesskey'] = NULL;
$arguments132['tabindex'] = NULL;
$arguments132['onclick'] = NULL;
$arguments132['name'] = NULL;
$arguments132['rel'] = NULL;
$arguments132['rev'] = NULL;
$arguments132['target'] = NULL;
$renderChildrenClosure133 = function() use ($renderingContext, $self) {
return 'Create new post';
};
$viewHelper134 = $self->getViewHelper('$viewHelper134', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper134->setArguments($arguments132);
$viewHelper134->setRenderingContext($renderingContext);
$viewHelper134->setRenderChildrenClosure($renderChildrenClosure133);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output122 .= $viewHelper134->initializeArgumentsAndRender();

$output122 .= '</p>
    <h3>Author: </h3>
    <p>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments135 = array();
$arguments135['action'] = 'index';
$arguments135['controller'] = 'author';
$arguments135['additionalAttributes'] = NULL;
$arguments135['data'] = NULL;
$arguments135['arguments'] = array (
);
$arguments135['package'] = NULL;
$arguments135['subpackage'] = NULL;
$arguments135['section'] = '';
$arguments135['format'] = '';
$arguments135['additionalParams'] = array (
);
$arguments135['addQueryString'] = false;
$arguments135['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments135['useParentRequest'] = false;
$arguments135['absolute'] = true;
$arguments135['class'] = NULL;
$arguments135['dir'] = NULL;
$arguments135['id'] = NULL;
$arguments135['lang'] = NULL;
$arguments135['style'] = NULL;
$arguments135['title'] = NULL;
$arguments135['accesskey'] = NULL;
$arguments135['tabindex'] = NULL;
$arguments135['onclick'] = NULL;
$arguments135['name'] = NULL;
$arguments135['rel'] = NULL;
$arguments135['rev'] = NULL;
$arguments135['target'] = NULL;
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
return 'View Author';
};
$viewHelper137 = $self->getViewHelper('$viewHelper137', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper137->setArguments($arguments135);
$viewHelper137->setRenderingContext($renderingContext);
$viewHelper137->setRenderChildrenClosure($renderChildrenClosure136);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output122 .= $viewHelper137->initializeArgumentsAndRender();

$output122 .= '</p>
    <p>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments138 = array();
$arguments138['action'] = 'new';
$arguments138['controller'] = 'author';
$arguments138['additionalAttributes'] = NULL;
$arguments138['data'] = NULL;
$arguments138['arguments'] = array (
);
$arguments138['package'] = NULL;
$arguments138['subpackage'] = NULL;
$arguments138['section'] = '';
$arguments138['format'] = '';
$arguments138['additionalParams'] = array (
);
$arguments138['addQueryString'] = false;
$arguments138['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments138['useParentRequest'] = false;
$arguments138['absolute'] = true;
$arguments138['class'] = NULL;
$arguments138['dir'] = NULL;
$arguments138['id'] = NULL;
$arguments138['lang'] = NULL;
$arguments138['style'] = NULL;
$arguments138['title'] = NULL;
$arguments138['accesskey'] = NULL;
$arguments138['tabindex'] = NULL;
$arguments138['onclick'] = NULL;
$arguments138['name'] = NULL;
$arguments138['rel'] = NULL;
$arguments138['rev'] = NULL;
$arguments138['target'] = NULL;
$renderChildrenClosure139 = function() use ($renderingContext, $self) {
return 'Create New Author';
};
$viewHelper140 = $self->getViewHelper('$viewHelper140', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper140->setArguments($arguments138);
$viewHelper140->setRenderingContext($renderingContext);
$viewHelper140->setRenderChildrenClosure($renderChildrenClosure139);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output122 .= $viewHelper140->initializeArgumentsAndRender();

$output122 .= '</p>
';
return $output122;
};

$output94 .= '';

$output94 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments141 = array();
$arguments141['name'] = 'Content';
$renderChildrenClosure142 = function() use ($renderingContext, $self) {
$output143 = '';

$output143 .= '
	<table class="table">
        ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper
$arguments144 = array();
// Rendering Boolean node
$arguments144['condition'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'category.posts', $renderingContext));
$arguments144['then'] = NULL;
$arguments144['else'] = NULL;
$renderChildrenClosure145 = function() use ($renderingContext, $self) {
$output146 = '';

$output146 .= '
            ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper
$arguments147 = array();
$renderChildrenClosure148 = function() use ($renderingContext, $self) {
$output149 = '';

$output149 .= '
                ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments150 = array();
$arguments150['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'category.posts', $renderingContext);
$arguments150['as'] = 'post';
$arguments150['key'] = '';
$arguments150['reverse'] = false;
$arguments150['iteration'] = NULL;
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
$output152 = '';

$output152 .= '
                    <tr>
                        <td>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments153 = array();
$arguments153['action'] = 'show';
$arguments153['controller'] = 'post';
// Rendering Array
$array154 = array();
$array154['post'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post', $renderingContext);
$arguments153['arguments'] = $array154;
$arguments153['additionalAttributes'] = NULL;
$arguments153['data'] = NULL;
$arguments153['package'] = NULL;
$arguments153['subpackage'] = NULL;
$arguments153['section'] = '';
$arguments153['format'] = '';
$arguments153['additionalParams'] = array (
);
$arguments153['addQueryString'] = false;
$arguments153['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments153['useParentRequest'] = false;
$arguments153['absolute'] = true;
$arguments153['class'] = NULL;
$arguments153['dir'] = NULL;
$arguments153['id'] = NULL;
$arguments153['lang'] = NULL;
$arguments153['style'] = NULL;
$arguments153['title'] = NULL;
$arguments153['accesskey'] = NULL;
$arguments153['tabindex'] = NULL;
$arguments153['onclick'] = NULL;
$arguments153['name'] = NULL;
$arguments153['rel'] = NULL;
$arguments153['rev'] = NULL;
$arguments153['target'] = NULL;
$renderChildrenClosure155 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments156 = array();
$arguments156['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.name', $renderingContext);
$arguments156['keepQuotes'] = false;
$arguments156['encoding'] = 'UTF-8';
$arguments156['doubleEncode'] = true;
$renderChildrenClosure157 = function() use ($renderingContext, $self) {
return NULL;
};
$value158 = ($arguments156['value'] !== NULL ? $arguments156['value'] : $renderChildrenClosure157());
return !is_string($value158) && !(is_object($value158) && method_exists($value158, '__toString')) ? $value158 : htmlspecialchars($value158, ($arguments156['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments156['encoding'], $arguments156['doubleEncode']);
};
$viewHelper159 = $self->getViewHelper('$viewHelper159', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper159->setArguments($arguments153);
$viewHelper159->setRenderingContext($renderingContext);
$viewHelper159->setRenderChildrenClosure($renderChildrenClosure155);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output152 .= $viewHelper159->initializeArgumentsAndRender();

$output152 .= '</td>
                        <td>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments160 = array();
$arguments160['action'] = 'edit';
$arguments160['controller'] = 'post';
// Rendering Array
$array161 = array();
$array161['post'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post', $renderingContext);
$arguments160['arguments'] = $array161;
$arguments160['class'] = 'btn btn-primary';
$arguments160['additionalAttributes'] = NULL;
$arguments160['data'] = NULL;
$arguments160['package'] = NULL;
$arguments160['subpackage'] = NULL;
$arguments160['section'] = '';
$arguments160['format'] = '';
$arguments160['additionalParams'] = array (
);
$arguments160['addQueryString'] = false;
$arguments160['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments160['useParentRequest'] = false;
$arguments160['absolute'] = true;
$arguments160['dir'] = NULL;
$arguments160['id'] = NULL;
$arguments160['lang'] = NULL;
$arguments160['style'] = NULL;
$arguments160['title'] = NULL;
$arguments160['accesskey'] = NULL;
$arguments160['tabindex'] = NULL;
$arguments160['onclick'] = NULL;
$arguments160['name'] = NULL;
$arguments160['rel'] = NULL;
$arguments160['rev'] = NULL;
$arguments160['target'] = NULL;
$renderChildrenClosure162 = function() use ($renderingContext, $self) {
return 'Edit';
};
$viewHelper163 = $self->getViewHelper('$viewHelper163', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper163->setArguments($arguments160);
$viewHelper163->setRenderingContext($renderingContext);
$viewHelper163->setRenderChildrenClosure($renderChildrenClosure162);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output152 .= $viewHelper163->initializeArgumentsAndRender();

$output152 .= '</td>
                        <td>
                            ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper
$arguments164 = array();
$arguments164['action'] = 'delete';
// Rendering Array
$array165 = array();
$array165['post'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post', $renderingContext);
$arguments164['arguments'] = $array165;
$arguments164['additionalAttributes'] = NULL;
$arguments164['data'] = NULL;
$arguments164['controller'] = NULL;
$arguments164['package'] = NULL;
$arguments164['subpackage'] = NULL;
$arguments164['object'] = NULL;
$arguments164['section'] = '';
$arguments164['format'] = '';
$arguments164['additionalParams'] = array (
);
$arguments164['absolute'] = false;
$arguments164['addQueryString'] = false;
$arguments164['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments164['fieldNamePrefix'] = NULL;
$arguments164['actionUri'] = NULL;
$arguments164['objectName'] = NULL;
$arguments164['useParentRequest'] = false;
$arguments164['enctype'] = NULL;
$arguments164['method'] = NULL;
$arguments164['name'] = NULL;
$arguments164['onreset'] = NULL;
$arguments164['onsubmit'] = NULL;
$arguments164['class'] = NULL;
$arguments164['dir'] = NULL;
$arguments164['id'] = NULL;
$arguments164['lang'] = NULL;
$arguments164['style'] = NULL;
$arguments164['title'] = NULL;
$arguments164['accesskey'] = NULL;
$arguments164['tabindex'] = NULL;
$arguments164['onclick'] = NULL;
$renderChildrenClosure166 = function() use ($renderingContext, $self) {
$output167 = '';

$output167 .= '
                                ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments168 = array();
$arguments168['class'] = 'btn btn-danger';
$arguments168['value'] = 'Delete';
$arguments168['additionalAttributes'] = NULL;
$arguments168['data'] = NULL;
$arguments168['name'] = NULL;
$arguments168['property'] = NULL;
$arguments168['disabled'] = NULL;
$arguments168['dir'] = NULL;
$arguments168['id'] = NULL;
$arguments168['lang'] = NULL;
$arguments168['style'] = NULL;
$arguments168['title'] = NULL;
$arguments168['accesskey'] = NULL;
$arguments168['tabindex'] = NULL;
$arguments168['onclick'] = NULL;
$renderChildrenClosure169 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper170 = $self->getViewHelper('$viewHelper170', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper170->setArguments($arguments168);
$viewHelper170->setRenderingContext($renderingContext);
$viewHelper170->setRenderChildrenClosure($renderChildrenClosure169);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper

$output167 .= $viewHelper170->initializeArgumentsAndRender();

$output167 .= '
                            ';
return $output167;
};
$viewHelper171 = $self->getViewHelper('$viewHelper171', $renderingContext, 'TYPO3\Fluid\ViewHelpers\FormViewHelper');
$viewHelper171->setArguments($arguments164);
$viewHelper171->setRenderingContext($renderingContext);
$viewHelper171->setRenderChildrenClosure($renderChildrenClosure166);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper

$output152 .= $viewHelper171->initializeArgumentsAndRender();

$output152 .= '
                        </td>
                    </tr>
                ';
return $output152;
};

$output149 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments150, $renderChildrenClosure151, $renderingContext);

$output149 .= '
            ';
return $output149;
};
$viewHelper172 = $self->getViewHelper('$viewHelper172', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper172->setArguments($arguments147);
$viewHelper172->setRenderingContext($renderingContext);
$viewHelper172->setRenderChildrenClosure($renderChildrenClosure148);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper

$output146 .= $viewHelper172->initializeArgumentsAndRender();

$output146 .= '
            ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ElseViewHelper
$arguments173 = array();
$renderChildrenClosure174 = function() use ($renderingContext, $self) {
return '
                <div class="alert alert-success">
                    <strong>Note!</strong> There is no any post for this category.
                </div>
            ';
};
$viewHelper175 = $self->getViewHelper('$viewHelper175', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ElseViewHelper');
$viewHelper175->setArguments($arguments173);
$viewHelper175->setRenderingContext($renderingContext);
$viewHelper175->setRenderChildrenClosure($renderChildrenClosure174);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ElseViewHelper

$output146 .= $viewHelper175->initializeArgumentsAndRender();

$output146 .= '
        ';
return $output146;
};
$arguments144['__thenClosure'] = function() use ($renderingContext, $self) {
$output176 = '';

$output176 .= '
                ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments177 = array();
$arguments177['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'category.posts', $renderingContext);
$arguments177['as'] = 'post';
$arguments177['key'] = '';
$arguments177['reverse'] = false;
$arguments177['iteration'] = NULL;
$renderChildrenClosure178 = function() use ($renderingContext, $self) {
$output179 = '';

$output179 .= '
                    <tr>
                        <td>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments180 = array();
$arguments180['action'] = 'show';
$arguments180['controller'] = 'post';
// Rendering Array
$array181 = array();
$array181['post'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post', $renderingContext);
$arguments180['arguments'] = $array181;
$arguments180['additionalAttributes'] = NULL;
$arguments180['data'] = NULL;
$arguments180['package'] = NULL;
$arguments180['subpackage'] = NULL;
$arguments180['section'] = '';
$arguments180['format'] = '';
$arguments180['additionalParams'] = array (
);
$arguments180['addQueryString'] = false;
$arguments180['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments180['useParentRequest'] = false;
$arguments180['absolute'] = true;
$arguments180['class'] = NULL;
$arguments180['dir'] = NULL;
$arguments180['id'] = NULL;
$arguments180['lang'] = NULL;
$arguments180['style'] = NULL;
$arguments180['title'] = NULL;
$arguments180['accesskey'] = NULL;
$arguments180['tabindex'] = NULL;
$arguments180['onclick'] = NULL;
$arguments180['name'] = NULL;
$arguments180['rel'] = NULL;
$arguments180['rev'] = NULL;
$arguments180['target'] = NULL;
$renderChildrenClosure182 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments183 = array();
$arguments183['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.name', $renderingContext);
$arguments183['keepQuotes'] = false;
$arguments183['encoding'] = 'UTF-8';
$arguments183['doubleEncode'] = true;
$renderChildrenClosure184 = function() use ($renderingContext, $self) {
return NULL;
};
$value185 = ($arguments183['value'] !== NULL ? $arguments183['value'] : $renderChildrenClosure184());
return !is_string($value185) && !(is_object($value185) && method_exists($value185, '__toString')) ? $value185 : htmlspecialchars($value185, ($arguments183['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments183['encoding'], $arguments183['doubleEncode']);
};
$viewHelper186 = $self->getViewHelper('$viewHelper186', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper186->setArguments($arguments180);
$viewHelper186->setRenderingContext($renderingContext);
$viewHelper186->setRenderChildrenClosure($renderChildrenClosure182);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output179 .= $viewHelper186->initializeArgumentsAndRender();

$output179 .= '</td>
                        <td>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments187 = array();
$arguments187['action'] = 'edit';
$arguments187['controller'] = 'post';
// Rendering Array
$array188 = array();
$array188['post'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post', $renderingContext);
$arguments187['arguments'] = $array188;
$arguments187['class'] = 'btn btn-primary';
$arguments187['additionalAttributes'] = NULL;
$arguments187['data'] = NULL;
$arguments187['package'] = NULL;
$arguments187['subpackage'] = NULL;
$arguments187['section'] = '';
$arguments187['format'] = '';
$arguments187['additionalParams'] = array (
);
$arguments187['addQueryString'] = false;
$arguments187['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments187['useParentRequest'] = false;
$arguments187['absolute'] = true;
$arguments187['dir'] = NULL;
$arguments187['id'] = NULL;
$arguments187['lang'] = NULL;
$arguments187['style'] = NULL;
$arguments187['title'] = NULL;
$arguments187['accesskey'] = NULL;
$arguments187['tabindex'] = NULL;
$arguments187['onclick'] = NULL;
$arguments187['name'] = NULL;
$arguments187['rel'] = NULL;
$arguments187['rev'] = NULL;
$arguments187['target'] = NULL;
$renderChildrenClosure189 = function() use ($renderingContext, $self) {
return 'Edit';
};
$viewHelper190 = $self->getViewHelper('$viewHelper190', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper190->setArguments($arguments187);
$viewHelper190->setRenderingContext($renderingContext);
$viewHelper190->setRenderChildrenClosure($renderChildrenClosure189);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output179 .= $viewHelper190->initializeArgumentsAndRender();

$output179 .= '</td>
                        <td>
                            ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper
$arguments191 = array();
$arguments191['action'] = 'delete';
// Rendering Array
$array192 = array();
$array192['post'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post', $renderingContext);
$arguments191['arguments'] = $array192;
$arguments191['additionalAttributes'] = NULL;
$arguments191['data'] = NULL;
$arguments191['controller'] = NULL;
$arguments191['package'] = NULL;
$arguments191['subpackage'] = NULL;
$arguments191['object'] = NULL;
$arguments191['section'] = '';
$arguments191['format'] = '';
$arguments191['additionalParams'] = array (
);
$arguments191['absolute'] = false;
$arguments191['addQueryString'] = false;
$arguments191['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments191['fieldNamePrefix'] = NULL;
$arguments191['actionUri'] = NULL;
$arguments191['objectName'] = NULL;
$arguments191['useParentRequest'] = false;
$arguments191['enctype'] = NULL;
$arguments191['method'] = NULL;
$arguments191['name'] = NULL;
$arguments191['onreset'] = NULL;
$arguments191['onsubmit'] = NULL;
$arguments191['class'] = NULL;
$arguments191['dir'] = NULL;
$arguments191['id'] = NULL;
$arguments191['lang'] = NULL;
$arguments191['style'] = NULL;
$arguments191['title'] = NULL;
$arguments191['accesskey'] = NULL;
$arguments191['tabindex'] = NULL;
$arguments191['onclick'] = NULL;
$renderChildrenClosure193 = function() use ($renderingContext, $self) {
$output194 = '';

$output194 .= '
                                ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments195 = array();
$arguments195['class'] = 'btn btn-danger';
$arguments195['value'] = 'Delete';
$arguments195['additionalAttributes'] = NULL;
$arguments195['data'] = NULL;
$arguments195['name'] = NULL;
$arguments195['property'] = NULL;
$arguments195['disabled'] = NULL;
$arguments195['dir'] = NULL;
$arguments195['id'] = NULL;
$arguments195['lang'] = NULL;
$arguments195['style'] = NULL;
$arguments195['title'] = NULL;
$arguments195['accesskey'] = NULL;
$arguments195['tabindex'] = NULL;
$arguments195['onclick'] = NULL;
$renderChildrenClosure196 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper197 = $self->getViewHelper('$viewHelper197', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper197->setArguments($arguments195);
$viewHelper197->setRenderingContext($renderingContext);
$viewHelper197->setRenderChildrenClosure($renderChildrenClosure196);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper

$output194 .= $viewHelper197->initializeArgumentsAndRender();

$output194 .= '
                            ';
return $output194;
};
$viewHelper198 = $self->getViewHelper('$viewHelper198', $renderingContext, 'TYPO3\Fluid\ViewHelpers\FormViewHelper');
$viewHelper198->setArguments($arguments191);
$viewHelper198->setRenderingContext($renderingContext);
$viewHelper198->setRenderChildrenClosure($renderChildrenClosure193);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper

$output179 .= $viewHelper198->initializeArgumentsAndRender();

$output179 .= '
                        </td>
                    </tr>
                ';
return $output179;
};

$output176 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments177, $renderChildrenClosure178, $renderingContext);

$output176 .= '
            ';
return $output176;
};
$arguments144['__elseClosure'] = function() use ($renderingContext, $self) {
return '
                <div class="alert alert-success">
                    <strong>Note!</strong> There is no any post for this category.
                </div>
            ';
};
$viewHelper199 = $self->getViewHelper('$viewHelper199', $renderingContext, 'TYPO3\Fluid\ViewHelpers\IfViewHelper');
$viewHelper199->setArguments($arguments144);
$viewHelper199->setRenderingContext($renderingContext);
$viewHelper199->setRenderChildrenClosure($renderChildrenClosure145);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper

$output143 .= $viewHelper199->initializeArgumentsAndRender();

$output143 .= '
	</table>
	';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments200 = array();
$arguments200['action'] = 'index';
$arguments200['additionalAttributes'] = NULL;
$arguments200['data'] = NULL;
$arguments200['arguments'] = array (
);
$arguments200['controller'] = NULL;
$arguments200['package'] = NULL;
$arguments200['subpackage'] = NULL;
$arguments200['section'] = '';
$arguments200['format'] = '';
$arguments200['additionalParams'] = array (
);
$arguments200['addQueryString'] = false;
$arguments200['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments200['useParentRequest'] = false;
$arguments200['absolute'] = true;
$arguments200['class'] = NULL;
$arguments200['dir'] = NULL;
$arguments200['id'] = NULL;
$arguments200['lang'] = NULL;
$arguments200['style'] = NULL;
$arguments200['title'] = NULL;
$arguments200['accesskey'] = NULL;
$arguments200['tabindex'] = NULL;
$arguments200['onclick'] = NULL;
$arguments200['name'] = NULL;
$arguments200['rel'] = NULL;
$arguments200['rev'] = NULL;
$arguments200['target'] = NULL;
$renderChildrenClosure201 = function() use ($renderingContext, $self) {
return 'Back';
};
$viewHelper202 = $self->getViewHelper('$viewHelper202', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper202->setArguments($arguments200);
$viewHelper202->setRenderingContext($renderingContext);
$viewHelper202->setRenderChildrenClosure($renderChildrenClosure201);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output143 .= $viewHelper202->initializeArgumentsAndRender();

$output143 .= '
';
return $output143;
};

$output94 .= '';

$output94 .= '
';

return $output94;
}


}
#0             75968     