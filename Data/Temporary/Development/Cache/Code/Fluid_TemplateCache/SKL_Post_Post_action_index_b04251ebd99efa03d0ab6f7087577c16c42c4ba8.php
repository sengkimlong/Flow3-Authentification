<?php class FluidCache_SKL_Post_Post_action_index_b04251ebd99efa03d0ab6f7087577c16c42c4ba8 extends \TYPO3\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

return 'A list of posts';
}
/**
 * section Navigation
 */
public function section_cf03cf2e9cdf95a20af09137dfb9071db0c31bf2(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '

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
$arguments1 = array();
$arguments1['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'listCategories', $renderingContext);
$arguments1['as'] = 'navCategory';
$arguments1['key'] = '';
$arguments1['reverse'] = false;
$arguments1['iteration'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
                        <li>
                            ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments4 = array();
$arguments4['action'] = 'show';
$arguments4['controller'] = 'category';
// Rendering Array
$array5 = array();
$array5['category'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'navCategory', $renderingContext);
$arguments4['arguments'] = $array5;
$arguments4['additionalAttributes'] = NULL;
$arguments4['data'] = NULL;
$arguments4['package'] = NULL;
$arguments4['subpackage'] = NULL;
$arguments4['section'] = '';
$arguments4['format'] = '';
$arguments4['additionalParams'] = array (
);
$arguments4['addQueryString'] = false;
$arguments4['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments4['useParentRequest'] = false;
$arguments4['absolute'] = true;
$arguments4['class'] = NULL;
$arguments4['dir'] = NULL;
$arguments4['id'] = NULL;
$arguments4['lang'] = NULL;
$arguments4['style'] = NULL;
$arguments4['title'] = NULL;
$arguments4['accesskey'] = NULL;
$arguments4['tabindex'] = NULL;
$arguments4['onclick'] = NULL;
$arguments4['name'] = NULL;
$arguments4['rel'] = NULL;
$arguments4['rev'] = NULL;
$arguments4['target'] = NULL;
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments7 = array();
$arguments7['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'navCategory.title', $renderingContext);
$arguments7['keepQuotes'] = false;
$arguments7['encoding'] = 'UTF-8';
$arguments7['doubleEncode'] = true;
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$value9 = ($arguments7['value'] !== NULL ? $arguments7['value'] : $renderChildrenClosure8());
return !is_string($value9) && !(is_object($value9) && method_exists($value9, '__toString')) ? $value9 : htmlspecialchars($value9, ($arguments7['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments7['encoding'], $arguments7['doubleEncode']);
};
$viewHelper10 = $self->getViewHelper('$viewHelper10', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper10->setArguments($arguments4);
$viewHelper10->setRenderingContext($renderingContext);
$viewHelper10->setRenderChildrenClosure($renderChildrenClosure6);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output3 .= $viewHelper10->initializeArgumentsAndRender();

$output3 .= '
                        </li>
                    ';
return $output3;
};

$output0 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
                </ul>
            </div>
        </div>
    </nav>

';

return $output0;
}
/**
 * section Sidebar
 */
public function section_f5171c931c5c70d4dc3557fd20c356b636c92e04(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output11 = '';

$output11 .= '
    <h3>Category: </h3>
    <p>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments12 = array();
$arguments12['action'] = 'index';
$arguments12['controller'] = 'category';
$arguments12['additionalAttributes'] = NULL;
$arguments12['data'] = NULL;
$arguments12['arguments'] = array (
);
$arguments12['package'] = NULL;
$arguments12['subpackage'] = NULL;
$arguments12['section'] = '';
$arguments12['format'] = '';
$arguments12['additionalParams'] = array (
);
$arguments12['addQueryString'] = false;
$arguments12['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments12['useParentRequest'] = false;
$arguments12['absolute'] = true;
$arguments12['class'] = NULL;
$arguments12['dir'] = NULL;
$arguments12['id'] = NULL;
$arguments12['lang'] = NULL;
$arguments12['style'] = NULL;
$arguments12['title'] = NULL;
$arguments12['accesskey'] = NULL;
$arguments12['tabindex'] = NULL;
$arguments12['onclick'] = NULL;
$arguments12['name'] = NULL;
$arguments12['rel'] = NULL;
$arguments12['rev'] = NULL;
$arguments12['target'] = NULL;
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
return 'View Category';
};
$viewHelper14 = $self->getViewHelper('$viewHelper14', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper14->setArguments($arguments12);
$viewHelper14->setRenderingContext($renderingContext);
$viewHelper14->setRenderChildrenClosure($renderChildrenClosure13);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output11 .= $viewHelper14->initializeArgumentsAndRender();

$output11 .= '</p>
    <p>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments15 = array();
$arguments15['action'] = 'new';
$arguments15['controller'] = 'category';
$arguments15['additionalAttributes'] = NULL;
$arguments15['data'] = NULL;
$arguments15['arguments'] = array (
);
$arguments15['package'] = NULL;
$arguments15['subpackage'] = NULL;
$arguments15['section'] = '';
$arguments15['format'] = '';
$arguments15['additionalParams'] = array (
);
$arguments15['addQueryString'] = false;
$arguments15['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments15['useParentRequest'] = false;
$arguments15['absolute'] = true;
$arguments15['class'] = NULL;
$arguments15['dir'] = NULL;
$arguments15['id'] = NULL;
$arguments15['lang'] = NULL;
$arguments15['style'] = NULL;
$arguments15['title'] = NULL;
$arguments15['accesskey'] = NULL;
$arguments15['tabindex'] = NULL;
$arguments15['onclick'] = NULL;
$arguments15['name'] = NULL;
$arguments15['rel'] = NULL;
$arguments15['rev'] = NULL;
$arguments15['target'] = NULL;
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return 'Create a new category';
};
$viewHelper17 = $self->getViewHelper('$viewHelper17', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper17->setArguments($arguments15);
$viewHelper17->setRenderingContext($renderingContext);
$viewHelper17->setRenderChildrenClosure($renderChildrenClosure16);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output11 .= $viewHelper17->initializeArgumentsAndRender();

$output11 .= '</p>
    <h3>Post: </h3>
    <p>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments18 = array();
$arguments18['action'] = 'index';
$arguments18['controller'] = 'post';
$arguments18['additionalAttributes'] = NULL;
$arguments18['data'] = NULL;
$arguments18['arguments'] = array (
);
$arguments18['package'] = NULL;
$arguments18['subpackage'] = NULL;
$arguments18['section'] = '';
$arguments18['format'] = '';
$arguments18['additionalParams'] = array (
);
$arguments18['addQueryString'] = false;
$arguments18['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments18['useParentRequest'] = false;
$arguments18['absolute'] = true;
$arguments18['class'] = NULL;
$arguments18['dir'] = NULL;
$arguments18['id'] = NULL;
$arguments18['lang'] = NULL;
$arguments18['style'] = NULL;
$arguments18['title'] = NULL;
$arguments18['accesskey'] = NULL;
$arguments18['tabindex'] = NULL;
$arguments18['onclick'] = NULL;
$arguments18['name'] = NULL;
$arguments18['rel'] = NULL;
$arguments18['rev'] = NULL;
$arguments18['target'] = NULL;
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return 'View Post';
};
$viewHelper20 = $self->getViewHelper('$viewHelper20', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper20->setArguments($arguments18);
$viewHelper20->setRenderingContext($renderingContext);
$viewHelper20->setRenderChildrenClosure($renderChildrenClosure19);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output11 .= $viewHelper20->initializeArgumentsAndRender();

$output11 .= '</p>
    <p>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments21 = array();
$arguments21['action'] = 'new';
$arguments21['controller'] = 'post';
$arguments21['additionalAttributes'] = NULL;
$arguments21['data'] = NULL;
$arguments21['arguments'] = array (
);
$arguments21['package'] = NULL;
$arguments21['subpackage'] = NULL;
$arguments21['section'] = '';
$arguments21['format'] = '';
$arguments21['additionalParams'] = array (
);
$arguments21['addQueryString'] = false;
$arguments21['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments21['useParentRequest'] = false;
$arguments21['absolute'] = true;
$arguments21['class'] = NULL;
$arguments21['dir'] = NULL;
$arguments21['id'] = NULL;
$arguments21['lang'] = NULL;
$arguments21['style'] = NULL;
$arguments21['title'] = NULL;
$arguments21['accesskey'] = NULL;
$arguments21['tabindex'] = NULL;
$arguments21['onclick'] = NULL;
$arguments21['name'] = NULL;
$arguments21['rel'] = NULL;
$arguments21['rev'] = NULL;
$arguments21['target'] = NULL;
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
return 'Create new post';
};
$viewHelper23 = $self->getViewHelper('$viewHelper23', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper23->setArguments($arguments21);
$viewHelper23->setRenderingContext($renderingContext);
$viewHelper23->setRenderChildrenClosure($renderChildrenClosure22);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output11 .= $viewHelper23->initializeArgumentsAndRender();

$output11 .= '</p>
    <h3>Author: </h3>
    <p>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments24 = array();
$arguments24['action'] = 'index';
$arguments24['controller'] = 'author';
$arguments24['additionalAttributes'] = NULL;
$arguments24['data'] = NULL;
$arguments24['arguments'] = array (
);
$arguments24['package'] = NULL;
$arguments24['subpackage'] = NULL;
$arguments24['section'] = '';
$arguments24['format'] = '';
$arguments24['additionalParams'] = array (
);
$arguments24['addQueryString'] = false;
$arguments24['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments24['useParentRequest'] = false;
$arguments24['absolute'] = true;
$arguments24['class'] = NULL;
$arguments24['dir'] = NULL;
$arguments24['id'] = NULL;
$arguments24['lang'] = NULL;
$arguments24['style'] = NULL;
$arguments24['title'] = NULL;
$arguments24['accesskey'] = NULL;
$arguments24['tabindex'] = NULL;
$arguments24['onclick'] = NULL;
$arguments24['name'] = NULL;
$arguments24['rel'] = NULL;
$arguments24['rev'] = NULL;
$arguments24['target'] = NULL;
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
return 'View Author';
};
$viewHelper26 = $self->getViewHelper('$viewHelper26', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper26->setArguments($arguments24);
$viewHelper26->setRenderingContext($renderingContext);
$viewHelper26->setRenderChildrenClosure($renderChildrenClosure25);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output11 .= $viewHelper26->initializeArgumentsAndRender();

$output11 .= '</p>
    <p>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments27 = array();
$arguments27['action'] = 'new';
$arguments27['controller'] = 'author';
$arguments27['additionalAttributes'] = NULL;
$arguments27['data'] = NULL;
$arguments27['arguments'] = array (
);
$arguments27['package'] = NULL;
$arguments27['subpackage'] = NULL;
$arguments27['section'] = '';
$arguments27['format'] = '';
$arguments27['additionalParams'] = array (
);
$arguments27['addQueryString'] = false;
$arguments27['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments27['useParentRequest'] = false;
$arguments27['absolute'] = true;
$arguments27['class'] = NULL;
$arguments27['dir'] = NULL;
$arguments27['id'] = NULL;
$arguments27['lang'] = NULL;
$arguments27['style'] = NULL;
$arguments27['title'] = NULL;
$arguments27['accesskey'] = NULL;
$arguments27['tabindex'] = NULL;
$arguments27['onclick'] = NULL;
$arguments27['name'] = NULL;
$arguments27['rel'] = NULL;
$arguments27['rev'] = NULL;
$arguments27['target'] = NULL;
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
return 'Create New Author';
};
$viewHelper29 = $self->getViewHelper('$viewHelper29', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper29->setArguments($arguments27);
$viewHelper29->setRenderingContext($renderingContext);
$viewHelper29->setRenderChildrenClosure($renderChildrenClosure28);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output11 .= $viewHelper29->initializeArgumentsAndRender();

$output11 .= '</p>
';

return $output11;
}
/**
 * section Content
 */
public function section_4f9be057f0ea5d2ba72fd2c810e8d7b9aa98b469(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output30 = '';

$output30 .= '
	';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper
$arguments31 = array();
// Rendering Boolean node
$arguments31['condition'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'posts', $renderingContext));
$arguments31['then'] = NULL;
$arguments31['else'] = NULL;
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
$output33 = '';

$output33 .= '
		';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper
$arguments34 = array();
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
$output36 = '';

$output36 .= '
			<table class="table">
				';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments37 = array();
$arguments37['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'posts', $renderingContext);
$arguments37['as'] = 'post';
$arguments37['key'] = '';
$arguments37['reverse'] = false;
$arguments37['iteration'] = NULL;
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
$output39 = '';

$output39 .= '
					<tr>
						<td>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments40 = array();
$arguments40['action'] = 'show';
// Rendering Array
$array41 = array();
$array41['post'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post', $renderingContext);
$arguments40['arguments'] = $array41;
$arguments40['additionalAttributes'] = NULL;
$arguments40['data'] = NULL;
$arguments40['controller'] = NULL;
$arguments40['package'] = NULL;
$arguments40['subpackage'] = NULL;
$arguments40['section'] = '';
$arguments40['format'] = '';
$arguments40['additionalParams'] = array (
);
$arguments40['addQueryString'] = false;
$arguments40['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments40['useParentRequest'] = false;
$arguments40['absolute'] = true;
$arguments40['class'] = NULL;
$arguments40['dir'] = NULL;
$arguments40['id'] = NULL;
$arguments40['lang'] = NULL;
$arguments40['style'] = NULL;
$arguments40['title'] = NULL;
$arguments40['accesskey'] = NULL;
$arguments40['tabindex'] = NULL;
$arguments40['onclick'] = NULL;
$arguments40['name'] = NULL;
$arguments40['rel'] = NULL;
$arguments40['rev'] = NULL;
$arguments40['target'] = NULL;
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments43 = array();
$arguments43['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.name', $renderingContext);
$arguments43['keepQuotes'] = false;
$arguments43['encoding'] = 'UTF-8';
$arguments43['doubleEncode'] = true;
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
return NULL;
};
$value45 = ($arguments43['value'] !== NULL ? $arguments43['value'] : $renderChildrenClosure44());
return !is_string($value45) && !(is_object($value45) && method_exists($value45, '__toString')) ? $value45 : htmlspecialchars($value45, ($arguments43['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments43['encoding'], $arguments43['doubleEncode']);
};
$viewHelper46 = $self->getViewHelper('$viewHelper46', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper46->setArguments($arguments40);
$viewHelper46->setRenderingContext($renderingContext);
$viewHelper46->setRenderChildrenClosure($renderChildrenClosure42);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output39 .= $viewHelper46->initializeArgumentsAndRender();

$output39 .= '</td>
						<td>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments47 = array();
$arguments47['action'] = 'edit';
$arguments47['class'] = 'btn btn-primary';
// Rendering Array
$array48 = array();
$array48['post'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post', $renderingContext);
$arguments47['arguments'] = $array48;
$arguments47['additionalAttributes'] = NULL;
$arguments47['data'] = NULL;
$arguments47['controller'] = NULL;
$arguments47['package'] = NULL;
$arguments47['subpackage'] = NULL;
$arguments47['section'] = '';
$arguments47['format'] = '';
$arguments47['additionalParams'] = array (
);
$arguments47['addQueryString'] = false;
$arguments47['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments47['useParentRequest'] = false;
$arguments47['absolute'] = true;
$arguments47['dir'] = NULL;
$arguments47['id'] = NULL;
$arguments47['lang'] = NULL;
$arguments47['style'] = NULL;
$arguments47['title'] = NULL;
$arguments47['accesskey'] = NULL;
$arguments47['tabindex'] = NULL;
$arguments47['onclick'] = NULL;
$arguments47['name'] = NULL;
$arguments47['rel'] = NULL;
$arguments47['rev'] = NULL;
$arguments47['target'] = NULL;
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
return 'Edit';
};
$viewHelper50 = $self->getViewHelper('$viewHelper50', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper50->setArguments($arguments47);
$viewHelper50->setRenderingContext($renderingContext);
$viewHelper50->setRenderChildrenClosure($renderChildrenClosure49);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output39 .= $viewHelper50->initializeArgumentsAndRender();

$output39 .= '</td>
						<td>
                            ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper
$arguments51 = array();
$arguments51['action'] = 'delete';
// Rendering Array
$array52 = array();
$array52['post'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post', $renderingContext);
$arguments51['arguments'] = $array52;
$arguments51['additionalAttributes'] = NULL;
$arguments51['data'] = NULL;
$arguments51['controller'] = NULL;
$arguments51['package'] = NULL;
$arguments51['subpackage'] = NULL;
$arguments51['object'] = NULL;
$arguments51['section'] = '';
$arguments51['format'] = '';
$arguments51['additionalParams'] = array (
);
$arguments51['absolute'] = false;
$arguments51['addQueryString'] = false;
$arguments51['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments51['fieldNamePrefix'] = NULL;
$arguments51['actionUri'] = NULL;
$arguments51['objectName'] = NULL;
$arguments51['useParentRequest'] = false;
$arguments51['enctype'] = NULL;
$arguments51['method'] = NULL;
$arguments51['name'] = NULL;
$arguments51['onreset'] = NULL;
$arguments51['onsubmit'] = NULL;
$arguments51['class'] = NULL;
$arguments51['dir'] = NULL;
$arguments51['id'] = NULL;
$arguments51['lang'] = NULL;
$arguments51['style'] = NULL;
$arguments51['title'] = NULL;
$arguments51['accesskey'] = NULL;
$arguments51['tabindex'] = NULL;
$arguments51['onclick'] = NULL;
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$output54 = '';

$output54 .= '
							    ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments55 = array();
$arguments55['class'] = 'btn btn-danger';
$arguments55['value'] = 'Delete';
$arguments55['additionalAttributes'] = NULL;
$arguments55['data'] = NULL;
$arguments55['name'] = NULL;
$arguments55['property'] = NULL;
$arguments55['disabled'] = NULL;
$arguments55['dir'] = NULL;
$arguments55['id'] = NULL;
$arguments55['lang'] = NULL;
$arguments55['style'] = NULL;
$arguments55['title'] = NULL;
$arguments55['accesskey'] = NULL;
$arguments55['tabindex'] = NULL;
$arguments55['onclick'] = NULL;
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper57 = $self->getViewHelper('$viewHelper57', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper57->setArguments($arguments55);
$viewHelper57->setRenderingContext($renderingContext);
$viewHelper57->setRenderChildrenClosure($renderChildrenClosure56);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper

$output54 .= $viewHelper57->initializeArgumentsAndRender();

$output54 .= '
						    ';
return $output54;
};
$viewHelper58 = $self->getViewHelper('$viewHelper58', $renderingContext, 'TYPO3\Fluid\ViewHelpers\FormViewHelper');
$viewHelper58->setArguments($arguments51);
$viewHelper58->setRenderingContext($renderingContext);
$viewHelper58->setRenderChildrenClosure($renderChildrenClosure53);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper

$output39 .= $viewHelper58->initializeArgumentsAndRender();

$output39 .= '
                        </td>
					</tr>
				';
return $output39;
};

$output36 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output36 .= '
			</table>
		';
return $output36;
};
$viewHelper59 = $self->getViewHelper('$viewHelper59', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper59->setArguments($arguments34);
$viewHelper59->setRenderingContext($renderingContext);
$viewHelper59->setRenderChildrenClosure($renderChildrenClosure35);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper

$output33 .= $viewHelper59->initializeArgumentsAndRender();

$output33 .= '
		';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ElseViewHelper
$arguments60 = array();
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
return '
			<p>No posts created yet.</p>
		';
};
$viewHelper62 = $self->getViewHelper('$viewHelper62', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ElseViewHelper');
$viewHelper62->setArguments($arguments60);
$viewHelper62->setRenderingContext($renderingContext);
$viewHelper62->setRenderChildrenClosure($renderChildrenClosure61);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ElseViewHelper

$output33 .= $viewHelper62->initializeArgumentsAndRender();

$output33 .= '
	';
return $output33;
};
$arguments31['__thenClosure'] = function() use ($renderingContext, $self) {
$output63 = '';

$output63 .= '
			<table class="table">
				';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments64 = array();
$arguments64['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'posts', $renderingContext);
$arguments64['as'] = 'post';
$arguments64['key'] = '';
$arguments64['reverse'] = false;
$arguments64['iteration'] = NULL;
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
$output66 = '';

$output66 .= '
					<tr>
						<td>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments67 = array();
$arguments67['action'] = 'show';
// Rendering Array
$array68 = array();
$array68['post'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post', $renderingContext);
$arguments67['arguments'] = $array68;
$arguments67['additionalAttributes'] = NULL;
$arguments67['data'] = NULL;
$arguments67['controller'] = NULL;
$arguments67['package'] = NULL;
$arguments67['subpackage'] = NULL;
$arguments67['section'] = '';
$arguments67['format'] = '';
$arguments67['additionalParams'] = array (
);
$arguments67['addQueryString'] = false;
$arguments67['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments67['useParentRequest'] = false;
$arguments67['absolute'] = true;
$arguments67['class'] = NULL;
$arguments67['dir'] = NULL;
$arguments67['id'] = NULL;
$arguments67['lang'] = NULL;
$arguments67['style'] = NULL;
$arguments67['title'] = NULL;
$arguments67['accesskey'] = NULL;
$arguments67['tabindex'] = NULL;
$arguments67['onclick'] = NULL;
$arguments67['name'] = NULL;
$arguments67['rel'] = NULL;
$arguments67['rev'] = NULL;
$arguments67['target'] = NULL;
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments70 = array();
$arguments70['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.name', $renderingContext);
$arguments70['keepQuotes'] = false;
$arguments70['encoding'] = 'UTF-8';
$arguments70['doubleEncode'] = true;
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
return NULL;
};
$value72 = ($arguments70['value'] !== NULL ? $arguments70['value'] : $renderChildrenClosure71());
return !is_string($value72) && !(is_object($value72) && method_exists($value72, '__toString')) ? $value72 : htmlspecialchars($value72, ($arguments70['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments70['encoding'], $arguments70['doubleEncode']);
};
$viewHelper73 = $self->getViewHelper('$viewHelper73', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper73->setArguments($arguments67);
$viewHelper73->setRenderingContext($renderingContext);
$viewHelper73->setRenderChildrenClosure($renderChildrenClosure69);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output66 .= $viewHelper73->initializeArgumentsAndRender();

$output66 .= '</td>
						<td>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments74 = array();
$arguments74['action'] = 'edit';
$arguments74['class'] = 'btn btn-primary';
// Rendering Array
$array75 = array();
$array75['post'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post', $renderingContext);
$arguments74['arguments'] = $array75;
$arguments74['additionalAttributes'] = NULL;
$arguments74['data'] = NULL;
$arguments74['controller'] = NULL;
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
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
return 'Edit';
};
$viewHelper77 = $self->getViewHelper('$viewHelper77', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper77->setArguments($arguments74);
$viewHelper77->setRenderingContext($renderingContext);
$viewHelper77->setRenderChildrenClosure($renderChildrenClosure76);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output66 .= $viewHelper77->initializeArgumentsAndRender();

$output66 .= '</td>
						<td>
                            ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper
$arguments78 = array();
$arguments78['action'] = 'delete';
// Rendering Array
$array79 = array();
$array79['post'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post', $renderingContext);
$arguments78['arguments'] = $array79;
$arguments78['additionalAttributes'] = NULL;
$arguments78['data'] = NULL;
$arguments78['controller'] = NULL;
$arguments78['package'] = NULL;
$arguments78['subpackage'] = NULL;
$arguments78['object'] = NULL;
$arguments78['section'] = '';
$arguments78['format'] = '';
$arguments78['additionalParams'] = array (
);
$arguments78['absolute'] = false;
$arguments78['addQueryString'] = false;
$arguments78['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments78['fieldNamePrefix'] = NULL;
$arguments78['actionUri'] = NULL;
$arguments78['objectName'] = NULL;
$arguments78['useParentRequest'] = false;
$arguments78['enctype'] = NULL;
$arguments78['method'] = NULL;
$arguments78['name'] = NULL;
$arguments78['onreset'] = NULL;
$arguments78['onsubmit'] = NULL;
$arguments78['class'] = NULL;
$arguments78['dir'] = NULL;
$arguments78['id'] = NULL;
$arguments78['lang'] = NULL;
$arguments78['style'] = NULL;
$arguments78['title'] = NULL;
$arguments78['accesskey'] = NULL;
$arguments78['tabindex'] = NULL;
$arguments78['onclick'] = NULL;
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
$output81 = '';

$output81 .= '
							    ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments82 = array();
$arguments82['class'] = 'btn btn-danger';
$arguments82['value'] = 'Delete';
$arguments82['additionalAttributes'] = NULL;
$arguments82['data'] = NULL;
$arguments82['name'] = NULL;
$arguments82['property'] = NULL;
$arguments82['disabled'] = NULL;
$arguments82['dir'] = NULL;
$arguments82['id'] = NULL;
$arguments82['lang'] = NULL;
$arguments82['style'] = NULL;
$arguments82['title'] = NULL;
$arguments82['accesskey'] = NULL;
$arguments82['tabindex'] = NULL;
$arguments82['onclick'] = NULL;
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper84 = $self->getViewHelper('$viewHelper84', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper84->setArguments($arguments82);
$viewHelper84->setRenderingContext($renderingContext);
$viewHelper84->setRenderChildrenClosure($renderChildrenClosure83);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper

$output81 .= $viewHelper84->initializeArgumentsAndRender();

$output81 .= '
						    ';
return $output81;
};
$viewHelper85 = $self->getViewHelper('$viewHelper85', $renderingContext, 'TYPO3\Fluid\ViewHelpers\FormViewHelper');
$viewHelper85->setArguments($arguments78);
$viewHelper85->setRenderingContext($renderingContext);
$viewHelper85->setRenderChildrenClosure($renderChildrenClosure80);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper

$output66 .= $viewHelper85->initializeArgumentsAndRender();

$output66 .= '
                        </td>
					</tr>
				';
return $output66;
};

$output63 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);

$output63 .= '
			</table>
		';
return $output63;
};
$arguments31['__elseClosure'] = function() use ($renderingContext, $self) {
return '
			<p>No posts created yet.</p>
		';
};
$viewHelper86 = $self->getViewHelper('$viewHelper86', $renderingContext, 'TYPO3\Fluid\ViewHelpers\IfViewHelper');
$viewHelper86->setArguments($arguments31);
$viewHelper86->setRenderingContext($renderingContext);
$viewHelper86->setRenderChildrenClosure($renderChildrenClosure32);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper

$output30 .= $viewHelper86->initializeArgumentsAndRender();

$output30 .= '
	<p>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments87 = array();
$arguments87['action'] = 'new';
$arguments87['additionalAttributes'] = NULL;
$arguments87['data'] = NULL;
$arguments87['arguments'] = array (
);
$arguments87['controller'] = NULL;
$arguments87['package'] = NULL;
$arguments87['subpackage'] = NULL;
$arguments87['section'] = '';
$arguments87['format'] = '';
$arguments87['additionalParams'] = array (
);
$arguments87['addQueryString'] = false;
$arguments87['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments87['useParentRequest'] = false;
$arguments87['absolute'] = true;
$arguments87['class'] = NULL;
$arguments87['dir'] = NULL;
$arguments87['id'] = NULL;
$arguments87['lang'] = NULL;
$arguments87['style'] = NULL;
$arguments87['title'] = NULL;
$arguments87['accesskey'] = NULL;
$arguments87['tabindex'] = NULL;
$arguments87['onclick'] = NULL;
$arguments87['name'] = NULL;
$arguments87['rel'] = NULL;
$arguments87['rev'] = NULL;
$arguments87['target'] = NULL;
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
return 'Create a new post';
};
$viewHelper89 = $self->getViewHelper('$viewHelper89', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper89->setArguments($arguments87);
$viewHelper89->setRenderingContext($renderingContext);
$viewHelper89->setRenderChildrenClosure($renderChildrenClosure88);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output30 .= $viewHelper89->initializeArgumentsAndRender();

$output30 .= '</p>
';

return $output30;
}
/**
 * Main Render function
 */
public function render(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output90 = '';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments91 = array();
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper
$arguments92 = array();
$arguments92['name'] = 'Default';
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper94 = $self->getViewHelper('$viewHelper94', $renderingContext, 'TYPO3\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper94->setArguments($arguments92);
$viewHelper94->setRenderingContext($renderingContext);
$viewHelper94->setRenderChildrenClosure($renderChildrenClosure93);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper
$arguments91['value'] = $viewHelper94->initializeArgumentsAndRender();
$arguments91['keepQuotes'] = false;
$arguments91['encoding'] = 'UTF-8';
$arguments91['doubleEncode'] = true;
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
return NULL;
};
$value96 = ($arguments91['value'] !== NULL ? $arguments91['value'] : $renderChildrenClosure95());

$output90 .= !is_string($value96) && !(is_object($value96) && method_exists($value96, '__toString')) ? $value96 : htmlspecialchars($value96, ($arguments91['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments91['encoding'], $arguments91['doubleEncode']);

$output90 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments97 = array();
$arguments97['name'] = 'Title';
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
return 'A list of posts';
};

$output90 .= '';

$output90 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments99 = array();
$arguments99['name'] = 'Navigation';
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
$output101 = '';

$output101 .= '

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
$arguments102 = array();
$arguments102['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'listCategories', $renderingContext);
$arguments102['as'] = 'navCategory';
$arguments102['key'] = '';
$arguments102['reverse'] = false;
$arguments102['iteration'] = NULL;
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
$output104 = '';

$output104 .= '
                        <li>
                            ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments105 = array();
$arguments105['action'] = 'show';
$arguments105['controller'] = 'category';
// Rendering Array
$array106 = array();
$array106['category'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'navCategory', $renderingContext);
$arguments105['arguments'] = $array106;
$arguments105['additionalAttributes'] = NULL;
$arguments105['data'] = NULL;
$arguments105['package'] = NULL;
$arguments105['subpackage'] = NULL;
$arguments105['section'] = '';
$arguments105['format'] = '';
$arguments105['additionalParams'] = array (
);
$arguments105['addQueryString'] = false;
$arguments105['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments105['useParentRequest'] = false;
$arguments105['absolute'] = true;
$arguments105['class'] = NULL;
$arguments105['dir'] = NULL;
$arguments105['id'] = NULL;
$arguments105['lang'] = NULL;
$arguments105['style'] = NULL;
$arguments105['title'] = NULL;
$arguments105['accesskey'] = NULL;
$arguments105['tabindex'] = NULL;
$arguments105['onclick'] = NULL;
$arguments105['name'] = NULL;
$arguments105['rel'] = NULL;
$arguments105['rev'] = NULL;
$arguments105['target'] = NULL;
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments108 = array();
$arguments108['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'navCategory.title', $renderingContext);
$arguments108['keepQuotes'] = false;
$arguments108['encoding'] = 'UTF-8';
$arguments108['doubleEncode'] = true;
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
return NULL;
};
$value110 = ($arguments108['value'] !== NULL ? $arguments108['value'] : $renderChildrenClosure109());
return !is_string($value110) && !(is_object($value110) && method_exists($value110, '__toString')) ? $value110 : htmlspecialchars($value110, ($arguments108['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments108['encoding'], $arguments108['doubleEncode']);
};
$viewHelper111 = $self->getViewHelper('$viewHelper111', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper111->setArguments($arguments105);
$viewHelper111->setRenderingContext($renderingContext);
$viewHelper111->setRenderChildrenClosure($renderChildrenClosure107);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output104 .= $viewHelper111->initializeArgumentsAndRender();

$output104 .= '
                        </li>
                    ';
return $output104;
};

$output101 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext);

$output101 .= '
                </ul>
            </div>
        </div>
    </nav>

';
return $output101;
};

$output90 .= '';

$output90 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments112 = array();
$arguments112['name'] = 'Sidebar';
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
$output114 = '';

$output114 .= '
    <h3>Category: </h3>
    <p>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments115 = array();
$arguments115['action'] = 'index';
$arguments115['controller'] = 'category';
$arguments115['additionalAttributes'] = NULL;
$arguments115['data'] = NULL;
$arguments115['arguments'] = array (
);
$arguments115['package'] = NULL;
$arguments115['subpackage'] = NULL;
$arguments115['section'] = '';
$arguments115['format'] = '';
$arguments115['additionalParams'] = array (
);
$arguments115['addQueryString'] = false;
$arguments115['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments115['useParentRequest'] = false;
$arguments115['absolute'] = true;
$arguments115['class'] = NULL;
$arguments115['dir'] = NULL;
$arguments115['id'] = NULL;
$arguments115['lang'] = NULL;
$arguments115['style'] = NULL;
$arguments115['title'] = NULL;
$arguments115['accesskey'] = NULL;
$arguments115['tabindex'] = NULL;
$arguments115['onclick'] = NULL;
$arguments115['name'] = NULL;
$arguments115['rel'] = NULL;
$arguments115['rev'] = NULL;
$arguments115['target'] = NULL;
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
return 'View Category';
};
$viewHelper117 = $self->getViewHelper('$viewHelper117', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper117->setArguments($arguments115);
$viewHelper117->setRenderingContext($renderingContext);
$viewHelper117->setRenderChildrenClosure($renderChildrenClosure116);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output114 .= $viewHelper117->initializeArgumentsAndRender();

$output114 .= '</p>
    <p>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments118 = array();
$arguments118['action'] = 'new';
$arguments118['controller'] = 'category';
$arguments118['additionalAttributes'] = NULL;
$arguments118['data'] = NULL;
$arguments118['arguments'] = array (
);
$arguments118['package'] = NULL;
$arguments118['subpackage'] = NULL;
$arguments118['section'] = '';
$arguments118['format'] = '';
$arguments118['additionalParams'] = array (
);
$arguments118['addQueryString'] = false;
$arguments118['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments118['useParentRequest'] = false;
$arguments118['absolute'] = true;
$arguments118['class'] = NULL;
$arguments118['dir'] = NULL;
$arguments118['id'] = NULL;
$arguments118['lang'] = NULL;
$arguments118['style'] = NULL;
$arguments118['title'] = NULL;
$arguments118['accesskey'] = NULL;
$arguments118['tabindex'] = NULL;
$arguments118['onclick'] = NULL;
$arguments118['name'] = NULL;
$arguments118['rel'] = NULL;
$arguments118['rev'] = NULL;
$arguments118['target'] = NULL;
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
return 'Create a new category';
};
$viewHelper120 = $self->getViewHelper('$viewHelper120', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper120->setArguments($arguments118);
$viewHelper120->setRenderingContext($renderingContext);
$viewHelper120->setRenderChildrenClosure($renderChildrenClosure119);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output114 .= $viewHelper120->initializeArgumentsAndRender();

$output114 .= '</p>
    <h3>Post: </h3>
    <p>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments121 = array();
$arguments121['action'] = 'index';
$arguments121['controller'] = 'post';
$arguments121['additionalAttributes'] = NULL;
$arguments121['data'] = NULL;
$arguments121['arguments'] = array (
);
$arguments121['package'] = NULL;
$arguments121['subpackage'] = NULL;
$arguments121['section'] = '';
$arguments121['format'] = '';
$arguments121['additionalParams'] = array (
);
$arguments121['addQueryString'] = false;
$arguments121['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments121['useParentRequest'] = false;
$arguments121['absolute'] = true;
$arguments121['class'] = NULL;
$arguments121['dir'] = NULL;
$arguments121['id'] = NULL;
$arguments121['lang'] = NULL;
$arguments121['style'] = NULL;
$arguments121['title'] = NULL;
$arguments121['accesskey'] = NULL;
$arguments121['tabindex'] = NULL;
$arguments121['onclick'] = NULL;
$arguments121['name'] = NULL;
$arguments121['rel'] = NULL;
$arguments121['rev'] = NULL;
$arguments121['target'] = NULL;
$renderChildrenClosure122 = function() use ($renderingContext, $self) {
return 'View Post';
};
$viewHelper123 = $self->getViewHelper('$viewHelper123', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper123->setArguments($arguments121);
$viewHelper123->setRenderingContext($renderingContext);
$viewHelper123->setRenderChildrenClosure($renderChildrenClosure122);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output114 .= $viewHelper123->initializeArgumentsAndRender();

$output114 .= '</p>
    <p>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments124 = array();
$arguments124['action'] = 'new';
$arguments124['controller'] = 'post';
$arguments124['additionalAttributes'] = NULL;
$arguments124['data'] = NULL;
$arguments124['arguments'] = array (
);
$arguments124['package'] = NULL;
$arguments124['subpackage'] = NULL;
$arguments124['section'] = '';
$arguments124['format'] = '';
$arguments124['additionalParams'] = array (
);
$arguments124['addQueryString'] = false;
$arguments124['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments124['useParentRequest'] = false;
$arguments124['absolute'] = true;
$arguments124['class'] = NULL;
$arguments124['dir'] = NULL;
$arguments124['id'] = NULL;
$arguments124['lang'] = NULL;
$arguments124['style'] = NULL;
$arguments124['title'] = NULL;
$arguments124['accesskey'] = NULL;
$arguments124['tabindex'] = NULL;
$arguments124['onclick'] = NULL;
$arguments124['name'] = NULL;
$arguments124['rel'] = NULL;
$arguments124['rev'] = NULL;
$arguments124['target'] = NULL;
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
return 'Create new post';
};
$viewHelper126 = $self->getViewHelper('$viewHelper126', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper126->setArguments($arguments124);
$viewHelper126->setRenderingContext($renderingContext);
$viewHelper126->setRenderChildrenClosure($renderChildrenClosure125);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output114 .= $viewHelper126->initializeArgumentsAndRender();

$output114 .= '</p>
    <h3>Author: </h3>
    <p>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments127 = array();
$arguments127['action'] = 'index';
$arguments127['controller'] = 'author';
$arguments127['additionalAttributes'] = NULL;
$arguments127['data'] = NULL;
$arguments127['arguments'] = array (
);
$arguments127['package'] = NULL;
$arguments127['subpackage'] = NULL;
$arguments127['section'] = '';
$arguments127['format'] = '';
$arguments127['additionalParams'] = array (
);
$arguments127['addQueryString'] = false;
$arguments127['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments127['useParentRequest'] = false;
$arguments127['absolute'] = true;
$arguments127['class'] = NULL;
$arguments127['dir'] = NULL;
$arguments127['id'] = NULL;
$arguments127['lang'] = NULL;
$arguments127['style'] = NULL;
$arguments127['title'] = NULL;
$arguments127['accesskey'] = NULL;
$arguments127['tabindex'] = NULL;
$arguments127['onclick'] = NULL;
$arguments127['name'] = NULL;
$arguments127['rel'] = NULL;
$arguments127['rev'] = NULL;
$arguments127['target'] = NULL;
$renderChildrenClosure128 = function() use ($renderingContext, $self) {
return 'View Author';
};
$viewHelper129 = $self->getViewHelper('$viewHelper129', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper129->setArguments($arguments127);
$viewHelper129->setRenderingContext($renderingContext);
$viewHelper129->setRenderChildrenClosure($renderChildrenClosure128);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output114 .= $viewHelper129->initializeArgumentsAndRender();

$output114 .= '</p>
    <p>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments130 = array();
$arguments130['action'] = 'new';
$arguments130['controller'] = 'author';
$arguments130['additionalAttributes'] = NULL;
$arguments130['data'] = NULL;
$arguments130['arguments'] = array (
);
$arguments130['package'] = NULL;
$arguments130['subpackage'] = NULL;
$arguments130['section'] = '';
$arguments130['format'] = '';
$arguments130['additionalParams'] = array (
);
$arguments130['addQueryString'] = false;
$arguments130['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments130['useParentRequest'] = false;
$arguments130['absolute'] = true;
$arguments130['class'] = NULL;
$arguments130['dir'] = NULL;
$arguments130['id'] = NULL;
$arguments130['lang'] = NULL;
$arguments130['style'] = NULL;
$arguments130['title'] = NULL;
$arguments130['accesskey'] = NULL;
$arguments130['tabindex'] = NULL;
$arguments130['onclick'] = NULL;
$arguments130['name'] = NULL;
$arguments130['rel'] = NULL;
$arguments130['rev'] = NULL;
$arguments130['target'] = NULL;
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
return 'Create New Author';
};
$viewHelper132 = $self->getViewHelper('$viewHelper132', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper132->setArguments($arguments130);
$viewHelper132->setRenderingContext($renderingContext);
$viewHelper132->setRenderChildrenClosure($renderChildrenClosure131);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output114 .= $viewHelper132->initializeArgumentsAndRender();

$output114 .= '</p>
';
return $output114;
};

$output90 .= '';

$output90 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments133 = array();
$arguments133['name'] = 'Content';
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
$output135 = '';

$output135 .= '
	';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper
$arguments136 = array();
// Rendering Boolean node
$arguments136['condition'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'posts', $renderingContext));
$arguments136['then'] = NULL;
$arguments136['else'] = NULL;
$renderChildrenClosure137 = function() use ($renderingContext, $self) {
$output138 = '';

$output138 .= '
		';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper
$arguments139 = array();
$renderChildrenClosure140 = function() use ($renderingContext, $self) {
$output141 = '';

$output141 .= '
			<table class="table">
				';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments142 = array();
$arguments142['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'posts', $renderingContext);
$arguments142['as'] = 'post';
$arguments142['key'] = '';
$arguments142['reverse'] = false;
$arguments142['iteration'] = NULL;
$renderChildrenClosure143 = function() use ($renderingContext, $self) {
$output144 = '';

$output144 .= '
					<tr>
						<td>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments145 = array();
$arguments145['action'] = 'show';
// Rendering Array
$array146 = array();
$array146['post'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post', $renderingContext);
$arguments145['arguments'] = $array146;
$arguments145['additionalAttributes'] = NULL;
$arguments145['data'] = NULL;
$arguments145['controller'] = NULL;
$arguments145['package'] = NULL;
$arguments145['subpackage'] = NULL;
$arguments145['section'] = '';
$arguments145['format'] = '';
$arguments145['additionalParams'] = array (
);
$arguments145['addQueryString'] = false;
$arguments145['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments145['useParentRequest'] = false;
$arguments145['absolute'] = true;
$arguments145['class'] = NULL;
$arguments145['dir'] = NULL;
$arguments145['id'] = NULL;
$arguments145['lang'] = NULL;
$arguments145['style'] = NULL;
$arguments145['title'] = NULL;
$arguments145['accesskey'] = NULL;
$arguments145['tabindex'] = NULL;
$arguments145['onclick'] = NULL;
$arguments145['name'] = NULL;
$arguments145['rel'] = NULL;
$arguments145['rev'] = NULL;
$arguments145['target'] = NULL;
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments148 = array();
$arguments148['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.name', $renderingContext);
$arguments148['keepQuotes'] = false;
$arguments148['encoding'] = 'UTF-8';
$arguments148['doubleEncode'] = true;
$renderChildrenClosure149 = function() use ($renderingContext, $self) {
return NULL;
};
$value150 = ($arguments148['value'] !== NULL ? $arguments148['value'] : $renderChildrenClosure149());
return !is_string($value150) && !(is_object($value150) && method_exists($value150, '__toString')) ? $value150 : htmlspecialchars($value150, ($arguments148['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments148['encoding'], $arguments148['doubleEncode']);
};
$viewHelper151 = $self->getViewHelper('$viewHelper151', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper151->setArguments($arguments145);
$viewHelper151->setRenderingContext($renderingContext);
$viewHelper151->setRenderChildrenClosure($renderChildrenClosure147);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output144 .= $viewHelper151->initializeArgumentsAndRender();

$output144 .= '</td>
						<td>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments152 = array();
$arguments152['action'] = 'edit';
$arguments152['class'] = 'btn btn-primary';
// Rendering Array
$array153 = array();
$array153['post'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post', $renderingContext);
$arguments152['arguments'] = $array153;
$arguments152['additionalAttributes'] = NULL;
$arguments152['data'] = NULL;
$arguments152['controller'] = NULL;
$arguments152['package'] = NULL;
$arguments152['subpackage'] = NULL;
$arguments152['section'] = '';
$arguments152['format'] = '';
$arguments152['additionalParams'] = array (
);
$arguments152['addQueryString'] = false;
$arguments152['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments152['useParentRequest'] = false;
$arguments152['absolute'] = true;
$arguments152['dir'] = NULL;
$arguments152['id'] = NULL;
$arguments152['lang'] = NULL;
$arguments152['style'] = NULL;
$arguments152['title'] = NULL;
$arguments152['accesskey'] = NULL;
$arguments152['tabindex'] = NULL;
$arguments152['onclick'] = NULL;
$arguments152['name'] = NULL;
$arguments152['rel'] = NULL;
$arguments152['rev'] = NULL;
$arguments152['target'] = NULL;
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
return 'Edit';
};
$viewHelper155 = $self->getViewHelper('$viewHelper155', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper155->setArguments($arguments152);
$viewHelper155->setRenderingContext($renderingContext);
$viewHelper155->setRenderChildrenClosure($renderChildrenClosure154);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output144 .= $viewHelper155->initializeArgumentsAndRender();

$output144 .= '</td>
						<td>
                            ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper
$arguments156 = array();
$arguments156['action'] = 'delete';
// Rendering Array
$array157 = array();
$array157['post'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post', $renderingContext);
$arguments156['arguments'] = $array157;
$arguments156['additionalAttributes'] = NULL;
$arguments156['data'] = NULL;
$arguments156['controller'] = NULL;
$arguments156['package'] = NULL;
$arguments156['subpackage'] = NULL;
$arguments156['object'] = NULL;
$arguments156['section'] = '';
$arguments156['format'] = '';
$arguments156['additionalParams'] = array (
);
$arguments156['absolute'] = false;
$arguments156['addQueryString'] = false;
$arguments156['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments156['fieldNamePrefix'] = NULL;
$arguments156['actionUri'] = NULL;
$arguments156['objectName'] = NULL;
$arguments156['useParentRequest'] = false;
$arguments156['enctype'] = NULL;
$arguments156['method'] = NULL;
$arguments156['name'] = NULL;
$arguments156['onreset'] = NULL;
$arguments156['onsubmit'] = NULL;
$arguments156['class'] = NULL;
$arguments156['dir'] = NULL;
$arguments156['id'] = NULL;
$arguments156['lang'] = NULL;
$arguments156['style'] = NULL;
$arguments156['title'] = NULL;
$arguments156['accesskey'] = NULL;
$arguments156['tabindex'] = NULL;
$arguments156['onclick'] = NULL;
$renderChildrenClosure158 = function() use ($renderingContext, $self) {
$output159 = '';

$output159 .= '
							    ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments160 = array();
$arguments160['class'] = 'btn btn-danger';
$arguments160['value'] = 'Delete';
$arguments160['additionalAttributes'] = NULL;
$arguments160['data'] = NULL;
$arguments160['name'] = NULL;
$arguments160['property'] = NULL;
$arguments160['disabled'] = NULL;
$arguments160['dir'] = NULL;
$arguments160['id'] = NULL;
$arguments160['lang'] = NULL;
$arguments160['style'] = NULL;
$arguments160['title'] = NULL;
$arguments160['accesskey'] = NULL;
$arguments160['tabindex'] = NULL;
$arguments160['onclick'] = NULL;
$renderChildrenClosure161 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper162 = $self->getViewHelper('$viewHelper162', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper162->setArguments($arguments160);
$viewHelper162->setRenderingContext($renderingContext);
$viewHelper162->setRenderChildrenClosure($renderChildrenClosure161);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper

$output159 .= $viewHelper162->initializeArgumentsAndRender();

$output159 .= '
						    ';
return $output159;
};
$viewHelper163 = $self->getViewHelper('$viewHelper163', $renderingContext, 'TYPO3\Fluid\ViewHelpers\FormViewHelper');
$viewHelper163->setArguments($arguments156);
$viewHelper163->setRenderingContext($renderingContext);
$viewHelper163->setRenderChildrenClosure($renderChildrenClosure158);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper

$output144 .= $viewHelper163->initializeArgumentsAndRender();

$output144 .= '
                        </td>
					</tr>
				';
return $output144;
};

$output141 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments142, $renderChildrenClosure143, $renderingContext);

$output141 .= '
			</table>
		';
return $output141;
};
$viewHelper164 = $self->getViewHelper('$viewHelper164', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper164->setArguments($arguments139);
$viewHelper164->setRenderingContext($renderingContext);
$viewHelper164->setRenderChildrenClosure($renderChildrenClosure140);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper

$output138 .= $viewHelper164->initializeArgumentsAndRender();

$output138 .= '
		';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ElseViewHelper
$arguments165 = array();
$renderChildrenClosure166 = function() use ($renderingContext, $self) {
return '
			<p>No posts created yet.</p>
		';
};
$viewHelper167 = $self->getViewHelper('$viewHelper167', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ElseViewHelper');
$viewHelper167->setArguments($arguments165);
$viewHelper167->setRenderingContext($renderingContext);
$viewHelper167->setRenderChildrenClosure($renderChildrenClosure166);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ElseViewHelper

$output138 .= $viewHelper167->initializeArgumentsAndRender();

$output138 .= '
	';
return $output138;
};
$arguments136['__thenClosure'] = function() use ($renderingContext, $self) {
$output168 = '';

$output168 .= '
			<table class="table">
				';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments169 = array();
$arguments169['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'posts', $renderingContext);
$arguments169['as'] = 'post';
$arguments169['key'] = '';
$arguments169['reverse'] = false;
$arguments169['iteration'] = NULL;
$renderChildrenClosure170 = function() use ($renderingContext, $self) {
$output171 = '';

$output171 .= '
					<tr>
						<td>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments172 = array();
$arguments172['action'] = 'show';
// Rendering Array
$array173 = array();
$array173['post'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post', $renderingContext);
$arguments172['arguments'] = $array173;
$arguments172['additionalAttributes'] = NULL;
$arguments172['data'] = NULL;
$arguments172['controller'] = NULL;
$arguments172['package'] = NULL;
$arguments172['subpackage'] = NULL;
$arguments172['section'] = '';
$arguments172['format'] = '';
$arguments172['additionalParams'] = array (
);
$arguments172['addQueryString'] = false;
$arguments172['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments172['useParentRequest'] = false;
$arguments172['absolute'] = true;
$arguments172['class'] = NULL;
$arguments172['dir'] = NULL;
$arguments172['id'] = NULL;
$arguments172['lang'] = NULL;
$arguments172['style'] = NULL;
$arguments172['title'] = NULL;
$arguments172['accesskey'] = NULL;
$arguments172['tabindex'] = NULL;
$arguments172['onclick'] = NULL;
$arguments172['name'] = NULL;
$arguments172['rel'] = NULL;
$arguments172['rev'] = NULL;
$arguments172['target'] = NULL;
$renderChildrenClosure174 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments175 = array();
$arguments175['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.name', $renderingContext);
$arguments175['keepQuotes'] = false;
$arguments175['encoding'] = 'UTF-8';
$arguments175['doubleEncode'] = true;
$renderChildrenClosure176 = function() use ($renderingContext, $self) {
return NULL;
};
$value177 = ($arguments175['value'] !== NULL ? $arguments175['value'] : $renderChildrenClosure176());
return !is_string($value177) && !(is_object($value177) && method_exists($value177, '__toString')) ? $value177 : htmlspecialchars($value177, ($arguments175['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments175['encoding'], $arguments175['doubleEncode']);
};
$viewHelper178 = $self->getViewHelper('$viewHelper178', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper178->setArguments($arguments172);
$viewHelper178->setRenderingContext($renderingContext);
$viewHelper178->setRenderChildrenClosure($renderChildrenClosure174);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output171 .= $viewHelper178->initializeArgumentsAndRender();

$output171 .= '</td>
						<td>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments179 = array();
$arguments179['action'] = 'edit';
$arguments179['class'] = 'btn btn-primary';
// Rendering Array
$array180 = array();
$array180['post'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post', $renderingContext);
$arguments179['arguments'] = $array180;
$arguments179['additionalAttributes'] = NULL;
$arguments179['data'] = NULL;
$arguments179['controller'] = NULL;
$arguments179['package'] = NULL;
$arguments179['subpackage'] = NULL;
$arguments179['section'] = '';
$arguments179['format'] = '';
$arguments179['additionalParams'] = array (
);
$arguments179['addQueryString'] = false;
$arguments179['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments179['useParentRequest'] = false;
$arguments179['absolute'] = true;
$arguments179['dir'] = NULL;
$arguments179['id'] = NULL;
$arguments179['lang'] = NULL;
$arguments179['style'] = NULL;
$arguments179['title'] = NULL;
$arguments179['accesskey'] = NULL;
$arguments179['tabindex'] = NULL;
$arguments179['onclick'] = NULL;
$arguments179['name'] = NULL;
$arguments179['rel'] = NULL;
$arguments179['rev'] = NULL;
$arguments179['target'] = NULL;
$renderChildrenClosure181 = function() use ($renderingContext, $self) {
return 'Edit';
};
$viewHelper182 = $self->getViewHelper('$viewHelper182', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper182->setArguments($arguments179);
$viewHelper182->setRenderingContext($renderingContext);
$viewHelper182->setRenderChildrenClosure($renderChildrenClosure181);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output171 .= $viewHelper182->initializeArgumentsAndRender();

$output171 .= '</td>
						<td>
                            ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper
$arguments183 = array();
$arguments183['action'] = 'delete';
// Rendering Array
$array184 = array();
$array184['post'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post', $renderingContext);
$arguments183['arguments'] = $array184;
$arguments183['additionalAttributes'] = NULL;
$arguments183['data'] = NULL;
$arguments183['controller'] = NULL;
$arguments183['package'] = NULL;
$arguments183['subpackage'] = NULL;
$arguments183['object'] = NULL;
$arguments183['section'] = '';
$arguments183['format'] = '';
$arguments183['additionalParams'] = array (
);
$arguments183['absolute'] = false;
$arguments183['addQueryString'] = false;
$arguments183['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments183['fieldNamePrefix'] = NULL;
$arguments183['actionUri'] = NULL;
$arguments183['objectName'] = NULL;
$arguments183['useParentRequest'] = false;
$arguments183['enctype'] = NULL;
$arguments183['method'] = NULL;
$arguments183['name'] = NULL;
$arguments183['onreset'] = NULL;
$arguments183['onsubmit'] = NULL;
$arguments183['class'] = NULL;
$arguments183['dir'] = NULL;
$arguments183['id'] = NULL;
$arguments183['lang'] = NULL;
$arguments183['style'] = NULL;
$arguments183['title'] = NULL;
$arguments183['accesskey'] = NULL;
$arguments183['tabindex'] = NULL;
$arguments183['onclick'] = NULL;
$renderChildrenClosure185 = function() use ($renderingContext, $self) {
$output186 = '';

$output186 .= '
							    ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments187 = array();
$arguments187['class'] = 'btn btn-danger';
$arguments187['value'] = 'Delete';
$arguments187['additionalAttributes'] = NULL;
$arguments187['data'] = NULL;
$arguments187['name'] = NULL;
$arguments187['property'] = NULL;
$arguments187['disabled'] = NULL;
$arguments187['dir'] = NULL;
$arguments187['id'] = NULL;
$arguments187['lang'] = NULL;
$arguments187['style'] = NULL;
$arguments187['title'] = NULL;
$arguments187['accesskey'] = NULL;
$arguments187['tabindex'] = NULL;
$arguments187['onclick'] = NULL;
$renderChildrenClosure188 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper189 = $self->getViewHelper('$viewHelper189', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper189->setArguments($arguments187);
$viewHelper189->setRenderingContext($renderingContext);
$viewHelper189->setRenderChildrenClosure($renderChildrenClosure188);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper

$output186 .= $viewHelper189->initializeArgumentsAndRender();

$output186 .= '
						    ';
return $output186;
};
$viewHelper190 = $self->getViewHelper('$viewHelper190', $renderingContext, 'TYPO3\Fluid\ViewHelpers\FormViewHelper');
$viewHelper190->setArguments($arguments183);
$viewHelper190->setRenderingContext($renderingContext);
$viewHelper190->setRenderChildrenClosure($renderChildrenClosure185);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper

$output171 .= $viewHelper190->initializeArgumentsAndRender();

$output171 .= '
                        </td>
					</tr>
				';
return $output171;
};

$output168 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments169, $renderChildrenClosure170, $renderingContext);

$output168 .= '
			</table>
		';
return $output168;
};
$arguments136['__elseClosure'] = function() use ($renderingContext, $self) {
return '
			<p>No posts created yet.</p>
		';
};
$viewHelper191 = $self->getViewHelper('$viewHelper191', $renderingContext, 'TYPO3\Fluid\ViewHelpers\IfViewHelper');
$viewHelper191->setArguments($arguments136);
$viewHelper191->setRenderingContext($renderingContext);
$viewHelper191->setRenderChildrenClosure($renderChildrenClosure137);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper

$output135 .= $viewHelper191->initializeArgumentsAndRender();

$output135 .= '
	<p>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments192 = array();
$arguments192['action'] = 'new';
$arguments192['additionalAttributes'] = NULL;
$arguments192['data'] = NULL;
$arguments192['arguments'] = array (
);
$arguments192['controller'] = NULL;
$arguments192['package'] = NULL;
$arguments192['subpackage'] = NULL;
$arguments192['section'] = '';
$arguments192['format'] = '';
$arguments192['additionalParams'] = array (
);
$arguments192['addQueryString'] = false;
$arguments192['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments192['useParentRequest'] = false;
$arguments192['absolute'] = true;
$arguments192['class'] = NULL;
$arguments192['dir'] = NULL;
$arguments192['id'] = NULL;
$arguments192['lang'] = NULL;
$arguments192['style'] = NULL;
$arguments192['title'] = NULL;
$arguments192['accesskey'] = NULL;
$arguments192['tabindex'] = NULL;
$arguments192['onclick'] = NULL;
$arguments192['name'] = NULL;
$arguments192['rel'] = NULL;
$arguments192['rev'] = NULL;
$arguments192['target'] = NULL;
$renderChildrenClosure193 = function() use ($renderingContext, $self) {
return 'Create a new post';
};
$viewHelper194 = $self->getViewHelper('$viewHelper194', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper194->setArguments($arguments192);
$viewHelper194->setRenderingContext($renderingContext);
$viewHelper194->setRenderChildrenClosure($renderChildrenClosure193);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output135 .= $viewHelper194->initializeArgumentsAndRender();

$output135 .= '</p>
';
return $output135;
};

$output90 .= '';

return $output90;
}


}
#0             72937     