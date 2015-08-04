<?php class FluidCache_SKL_Post_Category_action_index_6e084b7d6182211af558eb749463f5f9fb067e5f extends \TYPO3\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments31 = array();
$arguments31['name'] = 'Title';
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return 'A list of categories';
};

$output30 .= '';

$output30 .= '
	';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper
$arguments33 = array();
// Rendering Boolean node
$arguments33['condition'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'listCategories', $renderingContext));
$arguments33['then'] = NULL;
$arguments33['else'] = NULL;
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$output35 = '';

$output35 .= '
		';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper
$arguments36 = array();
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
$output38 = '';

$output38 .= '
			<table class="table">
				';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments39 = array();
$arguments39['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'listCategories', $renderingContext);
$arguments39['as'] = 'category';
$arguments39['key'] = '';
$arguments39['reverse'] = false;
$arguments39['iteration'] = NULL;
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
$output41 = '';

$output41 .= '
					<tr>
						<td>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments42 = array();
$arguments42['action'] = 'show';
// Rendering Array
$array43 = array();
$array43['category'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'category', $renderingContext);
$arguments42['arguments'] = $array43;
$arguments42['additionalAttributes'] = NULL;
$arguments42['data'] = NULL;
$arguments42['controller'] = NULL;
$arguments42['package'] = NULL;
$arguments42['subpackage'] = NULL;
$arguments42['section'] = '';
$arguments42['format'] = '';
$arguments42['additionalParams'] = array (
);
$arguments42['addQueryString'] = false;
$arguments42['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments42['useParentRequest'] = false;
$arguments42['absolute'] = true;
$arguments42['class'] = NULL;
$arguments42['dir'] = NULL;
$arguments42['id'] = NULL;
$arguments42['lang'] = NULL;
$arguments42['style'] = NULL;
$arguments42['title'] = NULL;
$arguments42['accesskey'] = NULL;
$arguments42['tabindex'] = NULL;
$arguments42['onclick'] = NULL;
$arguments42['name'] = NULL;
$arguments42['rel'] = NULL;
$arguments42['rev'] = NULL;
$arguments42['target'] = NULL;
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments45 = array();
$arguments45['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'category.title', $renderingContext);
$arguments45['keepQuotes'] = false;
$arguments45['encoding'] = 'UTF-8';
$arguments45['doubleEncode'] = true;
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
return NULL;
};
$value47 = ($arguments45['value'] !== NULL ? $arguments45['value'] : $renderChildrenClosure46());
return !is_string($value47) && !(is_object($value47) && method_exists($value47, '__toString')) ? $value47 : htmlspecialchars($value47, ($arguments45['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments45['encoding'], $arguments45['doubleEncode']);
};
$viewHelper48 = $self->getViewHelper('$viewHelper48', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper48->setArguments($arguments42);
$viewHelper48->setRenderingContext($renderingContext);
$viewHelper48->setRenderChildrenClosure($renderChildrenClosure44);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output41 .= $viewHelper48->initializeArgumentsAndRender();

$output41 .= '</td>
						<td>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments49 = array();
$arguments49['class'] = 'btn btn-primary';
$arguments49['action'] = 'edit';
// Rendering Array
$array50 = array();
$array50['category'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'category', $renderingContext);
$arguments49['arguments'] = $array50;
$arguments49['additionalAttributes'] = NULL;
$arguments49['data'] = NULL;
$arguments49['controller'] = NULL;
$arguments49['package'] = NULL;
$arguments49['subpackage'] = NULL;
$arguments49['section'] = '';
$arguments49['format'] = '';
$arguments49['additionalParams'] = array (
);
$arguments49['addQueryString'] = false;
$arguments49['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments49['useParentRequest'] = false;
$arguments49['absolute'] = true;
$arguments49['dir'] = NULL;
$arguments49['id'] = NULL;
$arguments49['lang'] = NULL;
$arguments49['style'] = NULL;
$arguments49['title'] = NULL;
$arguments49['accesskey'] = NULL;
$arguments49['tabindex'] = NULL;
$arguments49['onclick'] = NULL;
$arguments49['name'] = NULL;
$arguments49['rel'] = NULL;
$arguments49['rev'] = NULL;
$arguments49['target'] = NULL;
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
return 'Edit';
};
$viewHelper52 = $self->getViewHelper('$viewHelper52', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper52->setArguments($arguments49);
$viewHelper52->setRenderingContext($renderingContext);
$viewHelper52->setRenderChildrenClosure($renderChildrenClosure51);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output41 .= $viewHelper52->initializeArgumentsAndRender();

$output41 .= '</td>
                        <td>
                            ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper
$arguments53 = array();
$arguments53['action'] = 'delete';
// Rendering Array
$array54 = array();
$array54['category'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'category', $renderingContext);
$arguments53['arguments'] = $array54;
$arguments53['additionalAttributes'] = NULL;
$arguments53['data'] = NULL;
$arguments53['controller'] = NULL;
$arguments53['package'] = NULL;
$arguments53['subpackage'] = NULL;
$arguments53['object'] = NULL;
$arguments53['section'] = '';
$arguments53['format'] = '';
$arguments53['additionalParams'] = array (
);
$arguments53['absolute'] = false;
$arguments53['addQueryString'] = false;
$arguments53['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments53['fieldNamePrefix'] = NULL;
$arguments53['actionUri'] = NULL;
$arguments53['objectName'] = NULL;
$arguments53['useParentRequest'] = false;
$arguments53['enctype'] = NULL;
$arguments53['method'] = NULL;
$arguments53['name'] = NULL;
$arguments53['onreset'] = NULL;
$arguments53['onsubmit'] = NULL;
$arguments53['class'] = NULL;
$arguments53['dir'] = NULL;
$arguments53['id'] = NULL;
$arguments53['lang'] = NULL;
$arguments53['style'] = NULL;
$arguments53['title'] = NULL;
$arguments53['accesskey'] = NULL;
$arguments53['tabindex'] = NULL;
$arguments53['onclick'] = NULL;
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
$output56 = '';

$output56 .= '
                                ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments57 = array();
$arguments57['class'] = 'btn btn-danger';
$arguments57['value'] = 'Delete';
$arguments57['additionalAttributes'] = NULL;
$arguments57['data'] = NULL;
$arguments57['name'] = NULL;
$arguments57['property'] = NULL;
$arguments57['disabled'] = NULL;
$arguments57['dir'] = NULL;
$arguments57['id'] = NULL;
$arguments57['lang'] = NULL;
$arguments57['style'] = NULL;
$arguments57['title'] = NULL;
$arguments57['accesskey'] = NULL;
$arguments57['tabindex'] = NULL;
$arguments57['onclick'] = NULL;
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper59 = $self->getViewHelper('$viewHelper59', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper59->setArguments($arguments57);
$viewHelper59->setRenderingContext($renderingContext);
$viewHelper59->setRenderChildrenClosure($renderChildrenClosure58);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper

$output56 .= $viewHelper59->initializeArgumentsAndRender();

$output56 .= '
                            ';
return $output56;
};
$viewHelper60 = $self->getViewHelper('$viewHelper60', $renderingContext, 'TYPO3\Fluid\ViewHelpers\FormViewHelper');
$viewHelper60->setArguments($arguments53);
$viewHelper60->setRenderingContext($renderingContext);
$viewHelper60->setRenderChildrenClosure($renderChildrenClosure55);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper

$output41 .= $viewHelper60->initializeArgumentsAndRender();

$output41 .= '
                        </td>
					</tr>
				';
return $output41;
};

$output38 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output38 .= '
            </table>
		';
return $output38;
};
$viewHelper61 = $self->getViewHelper('$viewHelper61', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper61->setArguments($arguments36);
$viewHelper61->setRenderingContext($renderingContext);
$viewHelper61->setRenderChildrenClosure($renderChildrenClosure37);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper

$output35 .= $viewHelper61->initializeArgumentsAndRender();

$output35 .= '
		';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ElseViewHelper
$arguments62 = array();
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
return '
			<p>No categories created yet.</p>
		';
};
$viewHelper64 = $self->getViewHelper('$viewHelper64', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ElseViewHelper');
$viewHelper64->setArguments($arguments62);
$viewHelper64->setRenderingContext($renderingContext);
$viewHelper64->setRenderChildrenClosure($renderChildrenClosure63);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ElseViewHelper

$output35 .= $viewHelper64->initializeArgumentsAndRender();

$output35 .= '
	';
return $output35;
};
$arguments33['__thenClosure'] = function() use ($renderingContext, $self) {
$output65 = '';

$output65 .= '
			<table class="table">
				';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments66 = array();
$arguments66['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'listCategories', $renderingContext);
$arguments66['as'] = 'category';
$arguments66['key'] = '';
$arguments66['reverse'] = false;
$arguments66['iteration'] = NULL;
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
$output68 = '';

$output68 .= '
					<tr>
						<td>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments69 = array();
$arguments69['action'] = 'show';
// Rendering Array
$array70 = array();
$array70['category'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'category', $renderingContext);
$arguments69['arguments'] = $array70;
$arguments69['additionalAttributes'] = NULL;
$arguments69['data'] = NULL;
$arguments69['controller'] = NULL;
$arguments69['package'] = NULL;
$arguments69['subpackage'] = NULL;
$arguments69['section'] = '';
$arguments69['format'] = '';
$arguments69['additionalParams'] = array (
);
$arguments69['addQueryString'] = false;
$arguments69['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments69['useParentRequest'] = false;
$arguments69['absolute'] = true;
$arguments69['class'] = NULL;
$arguments69['dir'] = NULL;
$arguments69['id'] = NULL;
$arguments69['lang'] = NULL;
$arguments69['style'] = NULL;
$arguments69['title'] = NULL;
$arguments69['accesskey'] = NULL;
$arguments69['tabindex'] = NULL;
$arguments69['onclick'] = NULL;
$arguments69['name'] = NULL;
$arguments69['rel'] = NULL;
$arguments69['rev'] = NULL;
$arguments69['target'] = NULL;
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments72 = array();
$arguments72['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'category.title', $renderingContext);
$arguments72['keepQuotes'] = false;
$arguments72['encoding'] = 'UTF-8';
$arguments72['doubleEncode'] = true;
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
return NULL;
};
$value74 = ($arguments72['value'] !== NULL ? $arguments72['value'] : $renderChildrenClosure73());
return !is_string($value74) && !(is_object($value74) && method_exists($value74, '__toString')) ? $value74 : htmlspecialchars($value74, ($arguments72['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments72['encoding'], $arguments72['doubleEncode']);
};
$viewHelper75 = $self->getViewHelper('$viewHelper75', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper75->setArguments($arguments69);
$viewHelper75->setRenderingContext($renderingContext);
$viewHelper75->setRenderChildrenClosure($renderChildrenClosure71);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output68 .= $viewHelper75->initializeArgumentsAndRender();

$output68 .= '</td>
						<td>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments76 = array();
$arguments76['class'] = 'btn btn-primary';
$arguments76['action'] = 'edit';
// Rendering Array
$array77 = array();
$array77['category'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'category', $renderingContext);
$arguments76['arguments'] = $array77;
$arguments76['additionalAttributes'] = NULL;
$arguments76['data'] = NULL;
$arguments76['controller'] = NULL;
$arguments76['package'] = NULL;
$arguments76['subpackage'] = NULL;
$arguments76['section'] = '';
$arguments76['format'] = '';
$arguments76['additionalParams'] = array (
);
$arguments76['addQueryString'] = false;
$arguments76['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments76['useParentRequest'] = false;
$arguments76['absolute'] = true;
$arguments76['dir'] = NULL;
$arguments76['id'] = NULL;
$arguments76['lang'] = NULL;
$arguments76['style'] = NULL;
$arguments76['title'] = NULL;
$arguments76['accesskey'] = NULL;
$arguments76['tabindex'] = NULL;
$arguments76['onclick'] = NULL;
$arguments76['name'] = NULL;
$arguments76['rel'] = NULL;
$arguments76['rev'] = NULL;
$arguments76['target'] = NULL;
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
return 'Edit';
};
$viewHelper79 = $self->getViewHelper('$viewHelper79', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper79->setArguments($arguments76);
$viewHelper79->setRenderingContext($renderingContext);
$viewHelper79->setRenderChildrenClosure($renderChildrenClosure78);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output68 .= $viewHelper79->initializeArgumentsAndRender();

$output68 .= '</td>
                        <td>
                            ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper
$arguments80 = array();
$arguments80['action'] = 'delete';
// Rendering Array
$array81 = array();
$array81['category'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'category', $renderingContext);
$arguments80['arguments'] = $array81;
$arguments80['additionalAttributes'] = NULL;
$arguments80['data'] = NULL;
$arguments80['controller'] = NULL;
$arguments80['package'] = NULL;
$arguments80['subpackage'] = NULL;
$arguments80['object'] = NULL;
$arguments80['section'] = '';
$arguments80['format'] = '';
$arguments80['additionalParams'] = array (
);
$arguments80['absolute'] = false;
$arguments80['addQueryString'] = false;
$arguments80['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments80['fieldNamePrefix'] = NULL;
$arguments80['actionUri'] = NULL;
$arguments80['objectName'] = NULL;
$arguments80['useParentRequest'] = false;
$arguments80['enctype'] = NULL;
$arguments80['method'] = NULL;
$arguments80['name'] = NULL;
$arguments80['onreset'] = NULL;
$arguments80['onsubmit'] = NULL;
$arguments80['class'] = NULL;
$arguments80['dir'] = NULL;
$arguments80['id'] = NULL;
$arguments80['lang'] = NULL;
$arguments80['style'] = NULL;
$arguments80['title'] = NULL;
$arguments80['accesskey'] = NULL;
$arguments80['tabindex'] = NULL;
$arguments80['onclick'] = NULL;
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
$output83 = '';

$output83 .= '
                                ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments84 = array();
$arguments84['class'] = 'btn btn-danger';
$arguments84['value'] = 'Delete';
$arguments84['additionalAttributes'] = NULL;
$arguments84['data'] = NULL;
$arguments84['name'] = NULL;
$arguments84['property'] = NULL;
$arguments84['disabled'] = NULL;
$arguments84['dir'] = NULL;
$arguments84['id'] = NULL;
$arguments84['lang'] = NULL;
$arguments84['style'] = NULL;
$arguments84['title'] = NULL;
$arguments84['accesskey'] = NULL;
$arguments84['tabindex'] = NULL;
$arguments84['onclick'] = NULL;
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper86 = $self->getViewHelper('$viewHelper86', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper86->setArguments($arguments84);
$viewHelper86->setRenderingContext($renderingContext);
$viewHelper86->setRenderChildrenClosure($renderChildrenClosure85);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper

$output83 .= $viewHelper86->initializeArgumentsAndRender();

$output83 .= '
                            ';
return $output83;
};
$viewHelper87 = $self->getViewHelper('$viewHelper87', $renderingContext, 'TYPO3\Fluid\ViewHelpers\FormViewHelper');
$viewHelper87->setArguments($arguments80);
$viewHelper87->setRenderingContext($renderingContext);
$viewHelper87->setRenderChildrenClosure($renderChildrenClosure82);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper

$output68 .= $viewHelper87->initializeArgumentsAndRender();

$output68 .= '
                        </td>
					</tr>
				';
return $output68;
};

$output65 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output65 .= '
            </table>
		';
return $output65;
};
$arguments33['__elseClosure'] = function() use ($renderingContext, $self) {
return '
			<p>No categories created yet.</p>
		';
};
$viewHelper88 = $self->getViewHelper('$viewHelper88', $renderingContext, 'TYPO3\Fluid\ViewHelpers\IfViewHelper');
$viewHelper88->setArguments($arguments33);
$viewHelper88->setRenderingContext($renderingContext);
$viewHelper88->setRenderChildrenClosure($renderChildrenClosure34);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper

$output30 .= $viewHelper88->initializeArgumentsAndRender();

$output30 .= '

';

return $output30;
}
/**
 * section Title
 */
public function section_768e0c1c69573fb588f61f1308a015c11468e05f(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;

return 'A list of categories';
}
/**
 * Main Render function
 */
public function render(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output89 = '';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments90 = array();
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper
$arguments91 = array();
$arguments91['name'] = 'Default';
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper93 = $self->getViewHelper('$viewHelper93', $renderingContext, 'TYPO3\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper93->setArguments($arguments91);
$viewHelper93->setRenderingContext($renderingContext);
$viewHelper93->setRenderChildrenClosure($renderChildrenClosure92);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper
$arguments90['value'] = $viewHelper93->initializeArgumentsAndRender();
$arguments90['keepQuotes'] = false;
$arguments90['encoding'] = 'UTF-8';
$arguments90['doubleEncode'] = true;
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
return NULL;
};
$value95 = ($arguments90['value'] !== NULL ? $arguments90['value'] : $renderChildrenClosure94());

$output89 .= !is_string($value95) && !(is_object($value95) && method_exists($value95, '__toString')) ? $value95 : htmlspecialchars($value95, ($arguments90['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments90['encoding'], $arguments90['doubleEncode']);

$output89 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments96 = array();
$arguments96['name'] = 'Navigation';
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
$output98 = '';

$output98 .= '

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
$arguments99 = array();
$arguments99['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'listCategories', $renderingContext);
$arguments99['as'] = 'navCategory';
$arguments99['key'] = '';
$arguments99['reverse'] = false;
$arguments99['iteration'] = NULL;
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
$output101 = '';

$output101 .= '
                        <li>
                            ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments102 = array();
$arguments102['action'] = 'show';
$arguments102['controller'] = 'category';
// Rendering Array
$array103 = array();
$array103['category'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'navCategory', $renderingContext);
$arguments102['arguments'] = $array103;
$arguments102['additionalAttributes'] = NULL;
$arguments102['data'] = NULL;
$arguments102['package'] = NULL;
$arguments102['subpackage'] = NULL;
$arguments102['section'] = '';
$arguments102['format'] = '';
$arguments102['additionalParams'] = array (
);
$arguments102['addQueryString'] = false;
$arguments102['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments102['useParentRequest'] = false;
$arguments102['absolute'] = true;
$arguments102['class'] = NULL;
$arguments102['dir'] = NULL;
$arguments102['id'] = NULL;
$arguments102['lang'] = NULL;
$arguments102['style'] = NULL;
$arguments102['title'] = NULL;
$arguments102['accesskey'] = NULL;
$arguments102['tabindex'] = NULL;
$arguments102['onclick'] = NULL;
$arguments102['name'] = NULL;
$arguments102['rel'] = NULL;
$arguments102['rev'] = NULL;
$arguments102['target'] = NULL;
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments105 = array();
$arguments105['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'navCategory.title', $renderingContext);
$arguments105['keepQuotes'] = false;
$arguments105['encoding'] = 'UTF-8';
$arguments105['doubleEncode'] = true;
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
return NULL;
};
$value107 = ($arguments105['value'] !== NULL ? $arguments105['value'] : $renderChildrenClosure106());
return !is_string($value107) && !(is_object($value107) && method_exists($value107, '__toString')) ? $value107 : htmlspecialchars($value107, ($arguments105['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments105['encoding'], $arguments105['doubleEncode']);
};
$viewHelper108 = $self->getViewHelper('$viewHelper108', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper108->setArguments($arguments102);
$viewHelper108->setRenderingContext($renderingContext);
$viewHelper108->setRenderChildrenClosure($renderChildrenClosure104);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output101 .= $viewHelper108->initializeArgumentsAndRender();

$output101 .= '
                        </li>
                    ';
return $output101;
};

$output98 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext);

$output98 .= '
                </ul>
            </div>
        </div>
    </nav>

';
return $output98;
};

$output89 .= '';

$output89 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments109 = array();
$arguments109['name'] = 'Sidebar';
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
$output111 = '';

$output111 .= '
    <h3>Category: </h3>
    <p>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments112 = array();
$arguments112['action'] = 'index';
$arguments112['controller'] = 'category';
$arguments112['additionalAttributes'] = NULL;
$arguments112['data'] = NULL;
$arguments112['arguments'] = array (
);
$arguments112['package'] = NULL;
$arguments112['subpackage'] = NULL;
$arguments112['section'] = '';
$arguments112['format'] = '';
$arguments112['additionalParams'] = array (
);
$arguments112['addQueryString'] = false;
$arguments112['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments112['useParentRequest'] = false;
$arguments112['absolute'] = true;
$arguments112['class'] = NULL;
$arguments112['dir'] = NULL;
$arguments112['id'] = NULL;
$arguments112['lang'] = NULL;
$arguments112['style'] = NULL;
$arguments112['title'] = NULL;
$arguments112['accesskey'] = NULL;
$arguments112['tabindex'] = NULL;
$arguments112['onclick'] = NULL;
$arguments112['name'] = NULL;
$arguments112['rel'] = NULL;
$arguments112['rev'] = NULL;
$arguments112['target'] = NULL;
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
return 'View Category';
};
$viewHelper114 = $self->getViewHelper('$viewHelper114', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper114->setArguments($arguments112);
$viewHelper114->setRenderingContext($renderingContext);
$viewHelper114->setRenderChildrenClosure($renderChildrenClosure113);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output111 .= $viewHelper114->initializeArgumentsAndRender();

$output111 .= '</p>
    <p>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments115 = array();
$arguments115['action'] = 'new';
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
return 'Create a new category';
};
$viewHelper117 = $self->getViewHelper('$viewHelper117', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper117->setArguments($arguments115);
$viewHelper117->setRenderingContext($renderingContext);
$viewHelper117->setRenderChildrenClosure($renderChildrenClosure116);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output111 .= $viewHelper117->initializeArgumentsAndRender();

$output111 .= '</p>
    <h3>Post: </h3>
    <p>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments118 = array();
$arguments118['action'] = 'index';
$arguments118['controller'] = 'post';
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
return 'View Post';
};
$viewHelper120 = $self->getViewHelper('$viewHelper120', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper120->setArguments($arguments118);
$viewHelper120->setRenderingContext($renderingContext);
$viewHelper120->setRenderChildrenClosure($renderChildrenClosure119);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output111 .= $viewHelper120->initializeArgumentsAndRender();

$output111 .= '</p>
    <p>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments121 = array();
$arguments121['action'] = 'new';
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
return 'Create new post';
};
$viewHelper123 = $self->getViewHelper('$viewHelper123', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper123->setArguments($arguments121);
$viewHelper123->setRenderingContext($renderingContext);
$viewHelper123->setRenderChildrenClosure($renderChildrenClosure122);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output111 .= $viewHelper123->initializeArgumentsAndRender();

$output111 .= '</p>
    <h3>Author: </h3>
    <p>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments124 = array();
$arguments124['action'] = 'index';
$arguments124['controller'] = 'author';
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
return 'View Author';
};
$viewHelper126 = $self->getViewHelper('$viewHelper126', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper126->setArguments($arguments124);
$viewHelper126->setRenderingContext($renderingContext);
$viewHelper126->setRenderChildrenClosure($renderChildrenClosure125);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output111 .= $viewHelper126->initializeArgumentsAndRender();

$output111 .= '</p>
    <p>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments127 = array();
$arguments127['action'] = 'new';
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
return 'Create New Author';
};
$viewHelper129 = $self->getViewHelper('$viewHelper129', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper129->setArguments($arguments127);
$viewHelper129->setRenderingContext($renderingContext);
$viewHelper129->setRenderChildrenClosure($renderChildrenClosure128);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output111 .= $viewHelper129->initializeArgumentsAndRender();

$output111 .= '</p>
';
return $output111;
};

$output89 .= '';

$output89 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments130 = array();
$arguments130['name'] = 'Content';
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
$output132 = '';

$output132 .= '
    ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments133 = array();
$arguments133['name'] = 'Title';
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
return 'A list of categories';
};

$output132 .= '';

$output132 .= '
	';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper
$arguments135 = array();
// Rendering Boolean node
$arguments135['condition'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'listCategories', $renderingContext));
$arguments135['then'] = NULL;
$arguments135['else'] = NULL;
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
$output137 = '';

$output137 .= '
		';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper
$arguments138 = array();
$renderChildrenClosure139 = function() use ($renderingContext, $self) {
$output140 = '';

$output140 .= '
			<table class="table">
				';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments141 = array();
$arguments141['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'listCategories', $renderingContext);
$arguments141['as'] = 'category';
$arguments141['key'] = '';
$arguments141['reverse'] = false;
$arguments141['iteration'] = NULL;
$renderChildrenClosure142 = function() use ($renderingContext, $self) {
$output143 = '';

$output143 .= '
					<tr>
						<td>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments144 = array();
$arguments144['action'] = 'show';
// Rendering Array
$array145 = array();
$array145['category'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'category', $renderingContext);
$arguments144['arguments'] = $array145;
$arguments144['additionalAttributes'] = NULL;
$arguments144['data'] = NULL;
$arguments144['controller'] = NULL;
$arguments144['package'] = NULL;
$arguments144['subpackage'] = NULL;
$arguments144['section'] = '';
$arguments144['format'] = '';
$arguments144['additionalParams'] = array (
);
$arguments144['addQueryString'] = false;
$arguments144['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments144['useParentRequest'] = false;
$arguments144['absolute'] = true;
$arguments144['class'] = NULL;
$arguments144['dir'] = NULL;
$arguments144['id'] = NULL;
$arguments144['lang'] = NULL;
$arguments144['style'] = NULL;
$arguments144['title'] = NULL;
$arguments144['accesskey'] = NULL;
$arguments144['tabindex'] = NULL;
$arguments144['onclick'] = NULL;
$arguments144['name'] = NULL;
$arguments144['rel'] = NULL;
$arguments144['rev'] = NULL;
$arguments144['target'] = NULL;
$renderChildrenClosure146 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments147 = array();
$arguments147['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'category.title', $renderingContext);
$arguments147['keepQuotes'] = false;
$arguments147['encoding'] = 'UTF-8';
$arguments147['doubleEncode'] = true;
$renderChildrenClosure148 = function() use ($renderingContext, $self) {
return NULL;
};
$value149 = ($arguments147['value'] !== NULL ? $arguments147['value'] : $renderChildrenClosure148());
return !is_string($value149) && !(is_object($value149) && method_exists($value149, '__toString')) ? $value149 : htmlspecialchars($value149, ($arguments147['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments147['encoding'], $arguments147['doubleEncode']);
};
$viewHelper150 = $self->getViewHelper('$viewHelper150', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper150->setArguments($arguments144);
$viewHelper150->setRenderingContext($renderingContext);
$viewHelper150->setRenderChildrenClosure($renderChildrenClosure146);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output143 .= $viewHelper150->initializeArgumentsAndRender();

$output143 .= '</td>
						<td>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments151 = array();
$arguments151['class'] = 'btn btn-primary';
$arguments151['action'] = 'edit';
// Rendering Array
$array152 = array();
$array152['category'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'category', $renderingContext);
$arguments151['arguments'] = $array152;
$arguments151['additionalAttributes'] = NULL;
$arguments151['data'] = NULL;
$arguments151['controller'] = NULL;
$arguments151['package'] = NULL;
$arguments151['subpackage'] = NULL;
$arguments151['section'] = '';
$arguments151['format'] = '';
$arguments151['additionalParams'] = array (
);
$arguments151['addQueryString'] = false;
$arguments151['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments151['useParentRequest'] = false;
$arguments151['absolute'] = true;
$arguments151['dir'] = NULL;
$arguments151['id'] = NULL;
$arguments151['lang'] = NULL;
$arguments151['style'] = NULL;
$arguments151['title'] = NULL;
$arguments151['accesskey'] = NULL;
$arguments151['tabindex'] = NULL;
$arguments151['onclick'] = NULL;
$arguments151['name'] = NULL;
$arguments151['rel'] = NULL;
$arguments151['rev'] = NULL;
$arguments151['target'] = NULL;
$renderChildrenClosure153 = function() use ($renderingContext, $self) {
return 'Edit';
};
$viewHelper154 = $self->getViewHelper('$viewHelper154', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper154->setArguments($arguments151);
$viewHelper154->setRenderingContext($renderingContext);
$viewHelper154->setRenderChildrenClosure($renderChildrenClosure153);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output143 .= $viewHelper154->initializeArgumentsAndRender();

$output143 .= '</td>
                        <td>
                            ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper
$arguments155 = array();
$arguments155['action'] = 'delete';
// Rendering Array
$array156 = array();
$array156['category'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'category', $renderingContext);
$arguments155['arguments'] = $array156;
$arguments155['additionalAttributes'] = NULL;
$arguments155['data'] = NULL;
$arguments155['controller'] = NULL;
$arguments155['package'] = NULL;
$arguments155['subpackage'] = NULL;
$arguments155['object'] = NULL;
$arguments155['section'] = '';
$arguments155['format'] = '';
$arguments155['additionalParams'] = array (
);
$arguments155['absolute'] = false;
$arguments155['addQueryString'] = false;
$arguments155['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments155['fieldNamePrefix'] = NULL;
$arguments155['actionUri'] = NULL;
$arguments155['objectName'] = NULL;
$arguments155['useParentRequest'] = false;
$arguments155['enctype'] = NULL;
$arguments155['method'] = NULL;
$arguments155['name'] = NULL;
$arguments155['onreset'] = NULL;
$arguments155['onsubmit'] = NULL;
$arguments155['class'] = NULL;
$arguments155['dir'] = NULL;
$arguments155['id'] = NULL;
$arguments155['lang'] = NULL;
$arguments155['style'] = NULL;
$arguments155['title'] = NULL;
$arguments155['accesskey'] = NULL;
$arguments155['tabindex'] = NULL;
$arguments155['onclick'] = NULL;
$renderChildrenClosure157 = function() use ($renderingContext, $self) {
$output158 = '';

$output158 .= '
                                ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments159 = array();
$arguments159['class'] = 'btn btn-danger';
$arguments159['value'] = 'Delete';
$arguments159['additionalAttributes'] = NULL;
$arguments159['data'] = NULL;
$arguments159['name'] = NULL;
$arguments159['property'] = NULL;
$arguments159['disabled'] = NULL;
$arguments159['dir'] = NULL;
$arguments159['id'] = NULL;
$arguments159['lang'] = NULL;
$arguments159['style'] = NULL;
$arguments159['title'] = NULL;
$arguments159['accesskey'] = NULL;
$arguments159['tabindex'] = NULL;
$arguments159['onclick'] = NULL;
$renderChildrenClosure160 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper161 = $self->getViewHelper('$viewHelper161', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper161->setArguments($arguments159);
$viewHelper161->setRenderingContext($renderingContext);
$viewHelper161->setRenderChildrenClosure($renderChildrenClosure160);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper

$output158 .= $viewHelper161->initializeArgumentsAndRender();

$output158 .= '
                            ';
return $output158;
};
$viewHelper162 = $self->getViewHelper('$viewHelper162', $renderingContext, 'TYPO3\Fluid\ViewHelpers\FormViewHelper');
$viewHelper162->setArguments($arguments155);
$viewHelper162->setRenderingContext($renderingContext);
$viewHelper162->setRenderChildrenClosure($renderChildrenClosure157);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper

$output143 .= $viewHelper162->initializeArgumentsAndRender();

$output143 .= '
                        </td>
					</tr>
				';
return $output143;
};

$output140 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments141, $renderChildrenClosure142, $renderingContext);

$output140 .= '
            </table>
		';
return $output140;
};
$viewHelper163 = $self->getViewHelper('$viewHelper163', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper163->setArguments($arguments138);
$viewHelper163->setRenderingContext($renderingContext);
$viewHelper163->setRenderChildrenClosure($renderChildrenClosure139);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper

$output137 .= $viewHelper163->initializeArgumentsAndRender();

$output137 .= '
		';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ElseViewHelper
$arguments164 = array();
$renderChildrenClosure165 = function() use ($renderingContext, $self) {
return '
			<p>No categories created yet.</p>
		';
};
$viewHelper166 = $self->getViewHelper('$viewHelper166', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ElseViewHelper');
$viewHelper166->setArguments($arguments164);
$viewHelper166->setRenderingContext($renderingContext);
$viewHelper166->setRenderChildrenClosure($renderChildrenClosure165);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ElseViewHelper

$output137 .= $viewHelper166->initializeArgumentsAndRender();

$output137 .= '
	';
return $output137;
};
$arguments135['__thenClosure'] = function() use ($renderingContext, $self) {
$output167 = '';

$output167 .= '
			<table class="table">
				';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments168 = array();
$arguments168['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'listCategories', $renderingContext);
$arguments168['as'] = 'category';
$arguments168['key'] = '';
$arguments168['reverse'] = false;
$arguments168['iteration'] = NULL;
$renderChildrenClosure169 = function() use ($renderingContext, $self) {
$output170 = '';

$output170 .= '
					<tr>
						<td>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments171 = array();
$arguments171['action'] = 'show';
// Rendering Array
$array172 = array();
$array172['category'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'category', $renderingContext);
$arguments171['arguments'] = $array172;
$arguments171['additionalAttributes'] = NULL;
$arguments171['data'] = NULL;
$arguments171['controller'] = NULL;
$arguments171['package'] = NULL;
$arguments171['subpackage'] = NULL;
$arguments171['section'] = '';
$arguments171['format'] = '';
$arguments171['additionalParams'] = array (
);
$arguments171['addQueryString'] = false;
$arguments171['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments171['useParentRequest'] = false;
$arguments171['absolute'] = true;
$arguments171['class'] = NULL;
$arguments171['dir'] = NULL;
$arguments171['id'] = NULL;
$arguments171['lang'] = NULL;
$arguments171['style'] = NULL;
$arguments171['title'] = NULL;
$arguments171['accesskey'] = NULL;
$arguments171['tabindex'] = NULL;
$arguments171['onclick'] = NULL;
$arguments171['name'] = NULL;
$arguments171['rel'] = NULL;
$arguments171['rev'] = NULL;
$arguments171['target'] = NULL;
$renderChildrenClosure173 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments174 = array();
$arguments174['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'category.title', $renderingContext);
$arguments174['keepQuotes'] = false;
$arguments174['encoding'] = 'UTF-8';
$arguments174['doubleEncode'] = true;
$renderChildrenClosure175 = function() use ($renderingContext, $self) {
return NULL;
};
$value176 = ($arguments174['value'] !== NULL ? $arguments174['value'] : $renderChildrenClosure175());
return !is_string($value176) && !(is_object($value176) && method_exists($value176, '__toString')) ? $value176 : htmlspecialchars($value176, ($arguments174['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments174['encoding'], $arguments174['doubleEncode']);
};
$viewHelper177 = $self->getViewHelper('$viewHelper177', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper177->setArguments($arguments171);
$viewHelper177->setRenderingContext($renderingContext);
$viewHelper177->setRenderChildrenClosure($renderChildrenClosure173);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output170 .= $viewHelper177->initializeArgumentsAndRender();

$output170 .= '</td>
						<td>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments178 = array();
$arguments178['class'] = 'btn btn-primary';
$arguments178['action'] = 'edit';
// Rendering Array
$array179 = array();
$array179['category'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'category', $renderingContext);
$arguments178['arguments'] = $array179;
$arguments178['additionalAttributes'] = NULL;
$arguments178['data'] = NULL;
$arguments178['controller'] = NULL;
$arguments178['package'] = NULL;
$arguments178['subpackage'] = NULL;
$arguments178['section'] = '';
$arguments178['format'] = '';
$arguments178['additionalParams'] = array (
);
$arguments178['addQueryString'] = false;
$arguments178['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments178['useParentRequest'] = false;
$arguments178['absolute'] = true;
$arguments178['dir'] = NULL;
$arguments178['id'] = NULL;
$arguments178['lang'] = NULL;
$arguments178['style'] = NULL;
$arguments178['title'] = NULL;
$arguments178['accesskey'] = NULL;
$arguments178['tabindex'] = NULL;
$arguments178['onclick'] = NULL;
$arguments178['name'] = NULL;
$arguments178['rel'] = NULL;
$arguments178['rev'] = NULL;
$arguments178['target'] = NULL;
$renderChildrenClosure180 = function() use ($renderingContext, $self) {
return 'Edit';
};
$viewHelper181 = $self->getViewHelper('$viewHelper181', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper181->setArguments($arguments178);
$viewHelper181->setRenderingContext($renderingContext);
$viewHelper181->setRenderChildrenClosure($renderChildrenClosure180);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output170 .= $viewHelper181->initializeArgumentsAndRender();

$output170 .= '</td>
                        <td>
                            ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper
$arguments182 = array();
$arguments182['action'] = 'delete';
// Rendering Array
$array183 = array();
$array183['category'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'category', $renderingContext);
$arguments182['arguments'] = $array183;
$arguments182['additionalAttributes'] = NULL;
$arguments182['data'] = NULL;
$arguments182['controller'] = NULL;
$arguments182['package'] = NULL;
$arguments182['subpackage'] = NULL;
$arguments182['object'] = NULL;
$arguments182['section'] = '';
$arguments182['format'] = '';
$arguments182['additionalParams'] = array (
);
$arguments182['absolute'] = false;
$arguments182['addQueryString'] = false;
$arguments182['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments182['fieldNamePrefix'] = NULL;
$arguments182['actionUri'] = NULL;
$arguments182['objectName'] = NULL;
$arguments182['useParentRequest'] = false;
$arguments182['enctype'] = NULL;
$arguments182['method'] = NULL;
$arguments182['name'] = NULL;
$arguments182['onreset'] = NULL;
$arguments182['onsubmit'] = NULL;
$arguments182['class'] = NULL;
$arguments182['dir'] = NULL;
$arguments182['id'] = NULL;
$arguments182['lang'] = NULL;
$arguments182['style'] = NULL;
$arguments182['title'] = NULL;
$arguments182['accesskey'] = NULL;
$arguments182['tabindex'] = NULL;
$arguments182['onclick'] = NULL;
$renderChildrenClosure184 = function() use ($renderingContext, $self) {
$output185 = '';

$output185 .= '
                                ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments186 = array();
$arguments186['class'] = 'btn btn-danger';
$arguments186['value'] = 'Delete';
$arguments186['additionalAttributes'] = NULL;
$arguments186['data'] = NULL;
$arguments186['name'] = NULL;
$arguments186['property'] = NULL;
$arguments186['disabled'] = NULL;
$arguments186['dir'] = NULL;
$arguments186['id'] = NULL;
$arguments186['lang'] = NULL;
$arguments186['style'] = NULL;
$arguments186['title'] = NULL;
$arguments186['accesskey'] = NULL;
$arguments186['tabindex'] = NULL;
$arguments186['onclick'] = NULL;
$renderChildrenClosure187 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper188 = $self->getViewHelper('$viewHelper188', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper188->setArguments($arguments186);
$viewHelper188->setRenderingContext($renderingContext);
$viewHelper188->setRenderChildrenClosure($renderChildrenClosure187);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper

$output185 .= $viewHelper188->initializeArgumentsAndRender();

$output185 .= '
                            ';
return $output185;
};
$viewHelper189 = $self->getViewHelper('$viewHelper189', $renderingContext, 'TYPO3\Fluid\ViewHelpers\FormViewHelper');
$viewHelper189->setArguments($arguments182);
$viewHelper189->setRenderingContext($renderingContext);
$viewHelper189->setRenderChildrenClosure($renderChildrenClosure184);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper

$output170 .= $viewHelper189->initializeArgumentsAndRender();

$output170 .= '
                        </td>
					</tr>
				';
return $output170;
};

$output167 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments168, $renderChildrenClosure169, $renderingContext);

$output167 .= '
            </table>
		';
return $output167;
};
$arguments135['__elseClosure'] = function() use ($renderingContext, $self) {
return '
			<p>No categories created yet.</p>
		';
};
$viewHelper190 = $self->getViewHelper('$viewHelper190', $renderingContext, 'TYPO3\Fluid\ViewHelpers\IfViewHelper');
$viewHelper190->setArguments($arguments135);
$viewHelper190->setRenderingContext($renderingContext);
$viewHelper190->setRenderChildrenClosure($renderChildrenClosure136);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper

$output132 .= $viewHelper190->initializeArgumentsAndRender();

$output132 .= '

';
return $output132;
};

$output89 .= '';

$output89 .= '
';

return $output89;
}


}
#0             70544     