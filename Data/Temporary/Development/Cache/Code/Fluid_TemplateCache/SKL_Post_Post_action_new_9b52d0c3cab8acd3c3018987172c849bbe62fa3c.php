<?php class FluidCache_SKL_Post_Post_action_new_9b52d0c3cab8acd3c3018987172c849bbe62fa3c extends \TYPO3\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

return 'New post';
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
	<p>Just fill out the following form to create a new post:</p>

	';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper
$arguments31 = array();
$arguments31['action'] = 'create';
$arguments31['objectName'] = 'newPost';
$arguments31['additionalAttributes'] = NULL;
$arguments31['data'] = NULL;
$arguments31['arguments'] = array (
);
$arguments31['controller'] = NULL;
$arguments31['package'] = NULL;
$arguments31['subpackage'] = NULL;
$arguments31['object'] = NULL;
$arguments31['section'] = '';
$arguments31['format'] = '';
$arguments31['additionalParams'] = array (
);
$arguments31['absolute'] = false;
$arguments31['addQueryString'] = false;
$arguments31['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments31['fieldNamePrefix'] = NULL;
$arguments31['actionUri'] = NULL;
$arguments31['useParentRequest'] = false;
$arguments31['enctype'] = NULL;
$arguments31['method'] = NULL;
$arguments31['name'] = NULL;
$arguments31['onreset'] = NULL;
$arguments31['onsubmit'] = NULL;
$arguments31['class'] = NULL;
$arguments31['dir'] = NULL;
$arguments31['id'] = NULL;
$arguments31['lang'] = NULL;
$arguments31['style'] = NULL;
$arguments31['title'] = NULL;
$arguments31['accesskey'] = NULL;
$arguments31['tabindex'] = NULL;
$arguments31['onclick'] = NULL;
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
$output33 = '';

$output33 .= '
		<table class="table">
			<tr>
				<td><label for="name">Title</label></td>
				<td>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments34 = array();
$arguments34['class'] = 'form-control';
$arguments34['style'] = 'width:100%;';
$arguments34['property'] = 'name';
$arguments34['id'] = 'name';
$arguments34['placeholder'] = 'Type title...';
$arguments34['additionalAttributes'] = NULL;
$arguments34['data'] = NULL;
$arguments34['required'] = false;
$arguments34['type'] = 'text';
$arguments34['name'] = NULL;
$arguments34['value'] = NULL;
$arguments34['disabled'] = NULL;
$arguments34['maxlength'] = NULL;
$arguments34['readonly'] = NULL;
$arguments34['size'] = NULL;
$arguments34['autofocus'] = NULL;
$arguments34['errorClass'] = 'f3-form-error';
$arguments34['dir'] = NULL;
$arguments34['lang'] = NULL;
$arguments34['title'] = NULL;
$arguments34['accesskey'] = NULL;
$arguments34['tabindex'] = NULL;
$arguments34['onclick'] = NULL;
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper36 = $self->getViewHelper('$viewHelper36', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper36->setArguments($arguments34);
$viewHelper36->setRenderingContext($renderingContext);
$viewHelper36->setRenderChildrenClosure($renderChildrenClosure35);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output33 .= $viewHelper36->initializeArgumentsAndRender();

$output33 .= '</td>
			</tr>
			<tr>
				<td><label for="content">Content</label></td>
				<td>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextareaViewHelper
$arguments37 = array();
$arguments37['class'] = 'form-control';
$arguments37['style'] = 'width:100%;font-family:cursive;font-size: 11pt;height: 100px;';
$arguments37['property'] = 'content';
$arguments37['id'] = 'content';
$arguments37['placeholder'] = 'Type something...';
$arguments37['additionalAttributes'] = NULL;
$arguments37['data'] = NULL;
$arguments37['name'] = NULL;
$arguments37['value'] = NULL;
$arguments37['rows'] = NULL;
$arguments37['cols'] = NULL;
$arguments37['disabled'] = NULL;
$arguments37['autofocus'] = NULL;
$arguments37['errorClass'] = 'f3-form-error';
$arguments37['required'] = false;
$arguments37['dir'] = NULL;
$arguments37['lang'] = NULL;
$arguments37['title'] = NULL;
$arguments37['accesskey'] = NULL;
$arguments37['tabindex'] = NULL;
$arguments37['onclick'] = NULL;
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper39 = $self->getViewHelper('$viewHelper39', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\TextareaViewHelper');
$viewHelper39->setArguments($arguments37);
$viewHelper39->setRenderingContext($renderingContext);
$viewHelper39->setRenderChildrenClosure($renderChildrenClosure38);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextareaViewHelper

$output33 .= $viewHelper39->initializeArgumentsAndRender();

$output33 .= '</td>
			</tr>
			<tr>
				<th>Choose category: </th>
				<td>
					';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments40 = array();
$arguments40['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'listCategories', $renderingContext);
$arguments40['as'] = 'cat';
$arguments40['key'] = '';
$arguments40['reverse'] = false;
$arguments40['iteration'] = NULL;
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
$output42 = '';

$output42 .= '
						<label class="checkbox-inline">
							';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\CheckboxViewHelper
$arguments43 = array();
$arguments43['property'] = 'categories';
$arguments43['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'cat.identity', $renderingContext);
// Rendering Boolean node
$arguments43['multiple'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('true');
$arguments43['additionalAttributes'] = NULL;
$arguments43['data'] = NULL;
$arguments43['checked'] = NULL;
$arguments43['name'] = NULL;
$arguments43['disabled'] = NULL;
$arguments43['errorClass'] = 'f3-form-error';
$arguments43['class'] = NULL;
$arguments43['dir'] = NULL;
$arguments43['id'] = NULL;
$arguments43['lang'] = NULL;
$arguments43['style'] = NULL;
$arguments43['title'] = NULL;
$arguments43['accesskey'] = NULL;
$arguments43['tabindex'] = NULL;
$arguments43['onclick'] = NULL;
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper45 = $self->getViewHelper('$viewHelper45', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\CheckboxViewHelper');
$viewHelper45->setArguments($arguments43);
$viewHelper45->setRenderingContext($renderingContext);
$viewHelper45->setRenderChildrenClosure($renderChildrenClosure44);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\CheckboxViewHelper

$output42 .= $viewHelper45->initializeArgumentsAndRender();
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments46 = array();
$arguments46['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'cat.title', $renderingContext);
$arguments46['keepQuotes'] = false;
$arguments46['encoding'] = 'UTF-8';
$arguments46['doubleEncode'] = true;
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
return NULL;
};
$value48 = ($arguments46['value'] !== NULL ? $arguments46['value'] : $renderChildrenClosure47());

$output42 .= !is_string($value48) && !(is_object($value48) && method_exists($value48, '__toString')) ? $value48 : htmlspecialchars($value48, ($arguments46['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments46['encoding'], $arguments46['doubleEncode']);

$output42 .= '
                        </label>
                    ';
return $output42;
};

$output33 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output33 .= '
				</td>
				<!-- ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments49 = array();
$arguments49['property'] = 'categories';
$arguments49['optionLabelField'] = 'title';
$arguments49['options'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'listCategory', $renderingContext);
$arguments49['size'] = '3';
$arguments49['prependOptionLabel'] = '- select one -';
$arguments49['multiple'] = 'true';
$arguments49['additionalAttributes'] = NULL;
$arguments49['data'] = NULL;
$arguments49['name'] = NULL;
$arguments49['value'] = NULL;
$arguments49['class'] = NULL;
$arguments49['dir'] = NULL;
$arguments49['id'] = NULL;
$arguments49['lang'] = NULL;
$arguments49['style'] = NULL;
$arguments49['title'] = NULL;
$arguments49['accesskey'] = NULL;
$arguments49['tabindex'] = NULL;
$arguments49['onclick'] = NULL;
$arguments49['disabled'] = NULL;
$arguments49['optionValueField'] = NULL;
$arguments49['sortByOptionLabel'] = false;
$arguments49['selectAllByDefault'] = false;
$arguments49['errorClass'] = 'f3-form-error';
$arguments49['translate'] = NULL;
$arguments49['prependOptionValue'] = NULL;
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper51 = $self->getViewHelper('$viewHelper51', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper51->setArguments($arguments49);
$viewHelper51->setRenderingContext($renderingContext);
$viewHelper51->setRenderChildrenClosure($renderChildrenClosure50);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\SelectViewHelper

$output33 .= $viewHelper51->initializeArgumentsAndRender();

$output33 .= ' -->
			</tr>
			<tr>
				<th>Choose authors: </th>
				<td>
					';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments52 = array();
$arguments52['style'] = 'width:100%;';
$arguments52['property'] = 'authors';
$arguments52['optionLabelField'] = 'name';
$arguments52['options'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'listAuthor', $renderingContext);
$arguments52['size'] = '3';
$arguments52['prependOptionLabel'] = '--Select one--';
$arguments52['multiple'] = 'true';
$arguments52['additionalAttributes'] = NULL;
$arguments52['data'] = NULL;
$arguments52['name'] = NULL;
$arguments52['value'] = NULL;
$arguments52['class'] = NULL;
$arguments52['dir'] = NULL;
$arguments52['id'] = NULL;
$arguments52['lang'] = NULL;
$arguments52['title'] = NULL;
$arguments52['accesskey'] = NULL;
$arguments52['tabindex'] = NULL;
$arguments52['onclick'] = NULL;
$arguments52['disabled'] = NULL;
$arguments52['optionValueField'] = NULL;
$arguments52['sortByOptionLabel'] = false;
$arguments52['selectAllByDefault'] = false;
$arguments52['errorClass'] = 'f3-form-error';
$arguments52['translate'] = NULL;
$arguments52['prependOptionValue'] = NULL;
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper54 = $self->getViewHelper('$viewHelper54', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper54->setArguments($arguments52);
$viewHelper54->setRenderingContext($renderingContext);
$viewHelper54->setRenderChildrenClosure($renderChildrenClosure53);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\SelectViewHelper

$output33 .= $viewHelper54->initializeArgumentsAndRender();

$output33 .= '
				</td>
			</tr>
			<tr>
				<td>
					';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments55 = array();
$arguments55['class'] = 'btn btn-primary';
$arguments55['value'] = 'Create';
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

$output33 .= $viewHelper57->initializeArgumentsAndRender();

$output33 .= '
				</td>
			</tr>
		</table>
	';
return $output33;
};
$viewHelper58 = $self->getViewHelper('$viewHelper58', $renderingContext, 'TYPO3\Fluid\ViewHelpers\FormViewHelper');
$viewHelper58->setArguments($arguments31);
$viewHelper58->setRenderingContext($renderingContext);
$viewHelper58->setRenderChildrenClosure($renderChildrenClosure32);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper

$output30 .= $viewHelper58->initializeArgumentsAndRender();

$output30 .= '
';

return $output30;
}
/**
 * Main Render function
 */
public function render(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output59 = '';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments60 = array();
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper
$arguments61 = array();
$arguments61['name'] = 'Default';
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper63 = $self->getViewHelper('$viewHelper63', $renderingContext, 'TYPO3\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper63->setArguments($arguments61);
$viewHelper63->setRenderingContext($renderingContext);
$viewHelper63->setRenderChildrenClosure($renderChildrenClosure62);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper
$arguments60['value'] = $viewHelper63->initializeArgumentsAndRender();
$arguments60['keepQuotes'] = false;
$arguments60['encoding'] = 'UTF-8';
$arguments60['doubleEncode'] = true;
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
return NULL;
};
$value65 = ($arguments60['value'] !== NULL ? $arguments60['value'] : $renderChildrenClosure64());

$output59 .= !is_string($value65) && !(is_object($value65) && method_exists($value65, '__toString')) ? $value65 : htmlspecialchars($value65, ($arguments60['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments60['encoding'], $arguments60['doubleEncode']);

$output59 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments66 = array();
$arguments66['name'] = 'Title';
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
return 'New post';
};

$output59 .= '';

$output59 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments68 = array();
$arguments68['name'] = 'Navigation';
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
$output70 = '';

$output70 .= '

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
$arguments71 = array();
$arguments71['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'listCategories', $renderingContext);
$arguments71['as'] = 'navCategory';
$arguments71['key'] = '';
$arguments71['reverse'] = false;
$arguments71['iteration'] = NULL;
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
$output73 = '';

$output73 .= '
                        <li>
                            ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments74 = array();
$arguments74['action'] = 'show';
$arguments74['controller'] = 'category';
// Rendering Array
$array75 = array();
$array75['category'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'navCategory', $renderingContext);
$arguments74['arguments'] = $array75;
$arguments74['additionalAttributes'] = NULL;
$arguments74['data'] = NULL;
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
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments77 = array();
$arguments77['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'navCategory.title', $renderingContext);
$arguments77['keepQuotes'] = false;
$arguments77['encoding'] = 'UTF-8';
$arguments77['doubleEncode'] = true;
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
return NULL;
};
$value79 = ($arguments77['value'] !== NULL ? $arguments77['value'] : $renderChildrenClosure78());
return !is_string($value79) && !(is_object($value79) && method_exists($value79, '__toString')) ? $value79 : htmlspecialchars($value79, ($arguments77['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments77['encoding'], $arguments77['doubleEncode']);
};
$viewHelper80 = $self->getViewHelper('$viewHelper80', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper80->setArguments($arguments74);
$viewHelper80->setRenderingContext($renderingContext);
$viewHelper80->setRenderChildrenClosure($renderChildrenClosure76);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output73 .= $viewHelper80->initializeArgumentsAndRender();

$output73 .= '
                        </li>
                    ';
return $output73;
};

$output70 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);

$output70 .= '
                </ul>
            </div>
        </div>
    </nav>

';
return $output70;
};

$output59 .= '';

$output59 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments81 = array();
$arguments81['name'] = 'Sidebar';
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
$output83 = '';

$output83 .= '
    <h3>Category: </h3>
    <p>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments84 = array();
$arguments84['action'] = 'index';
$arguments84['controller'] = 'category';
$arguments84['additionalAttributes'] = NULL;
$arguments84['data'] = NULL;
$arguments84['arguments'] = array (
);
$arguments84['package'] = NULL;
$arguments84['subpackage'] = NULL;
$arguments84['section'] = '';
$arguments84['format'] = '';
$arguments84['additionalParams'] = array (
);
$arguments84['addQueryString'] = false;
$arguments84['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments84['useParentRequest'] = false;
$arguments84['absolute'] = true;
$arguments84['class'] = NULL;
$arguments84['dir'] = NULL;
$arguments84['id'] = NULL;
$arguments84['lang'] = NULL;
$arguments84['style'] = NULL;
$arguments84['title'] = NULL;
$arguments84['accesskey'] = NULL;
$arguments84['tabindex'] = NULL;
$arguments84['onclick'] = NULL;
$arguments84['name'] = NULL;
$arguments84['rel'] = NULL;
$arguments84['rev'] = NULL;
$arguments84['target'] = NULL;
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
return 'View Category';
};
$viewHelper86 = $self->getViewHelper('$viewHelper86', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper86->setArguments($arguments84);
$viewHelper86->setRenderingContext($renderingContext);
$viewHelper86->setRenderChildrenClosure($renderChildrenClosure85);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output83 .= $viewHelper86->initializeArgumentsAndRender();

$output83 .= '</p>
    <p>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments87 = array();
$arguments87['action'] = 'new';
$arguments87['controller'] = 'category';
$arguments87['additionalAttributes'] = NULL;
$arguments87['data'] = NULL;
$arguments87['arguments'] = array (
);
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
return 'Create a new category';
};
$viewHelper89 = $self->getViewHelper('$viewHelper89', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper89->setArguments($arguments87);
$viewHelper89->setRenderingContext($renderingContext);
$viewHelper89->setRenderChildrenClosure($renderChildrenClosure88);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output83 .= $viewHelper89->initializeArgumentsAndRender();

$output83 .= '</p>
    <h3>Post: </h3>
    <p>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments90 = array();
$arguments90['action'] = 'index';
$arguments90['controller'] = 'post';
$arguments90['additionalAttributes'] = NULL;
$arguments90['data'] = NULL;
$arguments90['arguments'] = array (
);
$arguments90['package'] = NULL;
$arguments90['subpackage'] = NULL;
$arguments90['section'] = '';
$arguments90['format'] = '';
$arguments90['additionalParams'] = array (
);
$arguments90['addQueryString'] = false;
$arguments90['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments90['useParentRequest'] = false;
$arguments90['absolute'] = true;
$arguments90['class'] = NULL;
$arguments90['dir'] = NULL;
$arguments90['id'] = NULL;
$arguments90['lang'] = NULL;
$arguments90['style'] = NULL;
$arguments90['title'] = NULL;
$arguments90['accesskey'] = NULL;
$arguments90['tabindex'] = NULL;
$arguments90['onclick'] = NULL;
$arguments90['name'] = NULL;
$arguments90['rel'] = NULL;
$arguments90['rev'] = NULL;
$arguments90['target'] = NULL;
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
return 'View Post';
};
$viewHelper92 = $self->getViewHelper('$viewHelper92', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper92->setArguments($arguments90);
$viewHelper92->setRenderingContext($renderingContext);
$viewHelper92->setRenderChildrenClosure($renderChildrenClosure91);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output83 .= $viewHelper92->initializeArgumentsAndRender();

$output83 .= '</p>
    <p>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments93 = array();
$arguments93['action'] = 'new';
$arguments93['controller'] = 'post';
$arguments93['additionalAttributes'] = NULL;
$arguments93['data'] = NULL;
$arguments93['arguments'] = array (
);
$arguments93['package'] = NULL;
$arguments93['subpackage'] = NULL;
$arguments93['section'] = '';
$arguments93['format'] = '';
$arguments93['additionalParams'] = array (
);
$arguments93['addQueryString'] = false;
$arguments93['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments93['useParentRequest'] = false;
$arguments93['absolute'] = true;
$arguments93['class'] = NULL;
$arguments93['dir'] = NULL;
$arguments93['id'] = NULL;
$arguments93['lang'] = NULL;
$arguments93['style'] = NULL;
$arguments93['title'] = NULL;
$arguments93['accesskey'] = NULL;
$arguments93['tabindex'] = NULL;
$arguments93['onclick'] = NULL;
$arguments93['name'] = NULL;
$arguments93['rel'] = NULL;
$arguments93['rev'] = NULL;
$arguments93['target'] = NULL;
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
return 'Create new post';
};
$viewHelper95 = $self->getViewHelper('$viewHelper95', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper95->setArguments($arguments93);
$viewHelper95->setRenderingContext($renderingContext);
$viewHelper95->setRenderChildrenClosure($renderChildrenClosure94);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output83 .= $viewHelper95->initializeArgumentsAndRender();

$output83 .= '</p>
    <h3>Author: </h3>
    <p>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments96 = array();
$arguments96['action'] = 'index';
$arguments96['controller'] = 'author';
$arguments96['additionalAttributes'] = NULL;
$arguments96['data'] = NULL;
$arguments96['arguments'] = array (
);
$arguments96['package'] = NULL;
$arguments96['subpackage'] = NULL;
$arguments96['section'] = '';
$arguments96['format'] = '';
$arguments96['additionalParams'] = array (
);
$arguments96['addQueryString'] = false;
$arguments96['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments96['useParentRequest'] = false;
$arguments96['absolute'] = true;
$arguments96['class'] = NULL;
$arguments96['dir'] = NULL;
$arguments96['id'] = NULL;
$arguments96['lang'] = NULL;
$arguments96['style'] = NULL;
$arguments96['title'] = NULL;
$arguments96['accesskey'] = NULL;
$arguments96['tabindex'] = NULL;
$arguments96['onclick'] = NULL;
$arguments96['name'] = NULL;
$arguments96['rel'] = NULL;
$arguments96['rev'] = NULL;
$arguments96['target'] = NULL;
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
return 'View Author';
};
$viewHelper98 = $self->getViewHelper('$viewHelper98', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper98->setArguments($arguments96);
$viewHelper98->setRenderingContext($renderingContext);
$viewHelper98->setRenderChildrenClosure($renderChildrenClosure97);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output83 .= $viewHelper98->initializeArgumentsAndRender();

$output83 .= '</p>
    <p>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments99 = array();
$arguments99['action'] = 'new';
$arguments99['controller'] = 'author';
$arguments99['additionalAttributes'] = NULL;
$arguments99['data'] = NULL;
$arguments99['arguments'] = array (
);
$arguments99['package'] = NULL;
$arguments99['subpackage'] = NULL;
$arguments99['section'] = '';
$arguments99['format'] = '';
$arguments99['additionalParams'] = array (
);
$arguments99['addQueryString'] = false;
$arguments99['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments99['useParentRequest'] = false;
$arguments99['absolute'] = true;
$arguments99['class'] = NULL;
$arguments99['dir'] = NULL;
$arguments99['id'] = NULL;
$arguments99['lang'] = NULL;
$arguments99['style'] = NULL;
$arguments99['title'] = NULL;
$arguments99['accesskey'] = NULL;
$arguments99['tabindex'] = NULL;
$arguments99['onclick'] = NULL;
$arguments99['name'] = NULL;
$arguments99['rel'] = NULL;
$arguments99['rev'] = NULL;
$arguments99['target'] = NULL;
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
return 'Create New Author';
};
$viewHelper101 = $self->getViewHelper('$viewHelper101', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper101->setArguments($arguments99);
$viewHelper101->setRenderingContext($renderingContext);
$viewHelper101->setRenderChildrenClosure($renderChildrenClosure100);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output83 .= $viewHelper101->initializeArgumentsAndRender();

$output83 .= '</p>
';
return $output83;
};

$output59 .= '';

$output59 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments102 = array();
$arguments102['name'] = 'Content';
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
$output104 = '';

$output104 .= '
	<p>Just fill out the following form to create a new post:</p>

	';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper
$arguments105 = array();
$arguments105['action'] = 'create';
$arguments105['objectName'] = 'newPost';
$arguments105['additionalAttributes'] = NULL;
$arguments105['data'] = NULL;
$arguments105['arguments'] = array (
);
$arguments105['controller'] = NULL;
$arguments105['package'] = NULL;
$arguments105['subpackage'] = NULL;
$arguments105['object'] = NULL;
$arguments105['section'] = '';
$arguments105['format'] = '';
$arguments105['additionalParams'] = array (
);
$arguments105['absolute'] = false;
$arguments105['addQueryString'] = false;
$arguments105['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments105['fieldNamePrefix'] = NULL;
$arguments105['actionUri'] = NULL;
$arguments105['useParentRequest'] = false;
$arguments105['enctype'] = NULL;
$arguments105['method'] = NULL;
$arguments105['name'] = NULL;
$arguments105['onreset'] = NULL;
$arguments105['onsubmit'] = NULL;
$arguments105['class'] = NULL;
$arguments105['dir'] = NULL;
$arguments105['id'] = NULL;
$arguments105['lang'] = NULL;
$arguments105['style'] = NULL;
$arguments105['title'] = NULL;
$arguments105['accesskey'] = NULL;
$arguments105['tabindex'] = NULL;
$arguments105['onclick'] = NULL;
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
$output107 = '';

$output107 .= '
		<table class="table">
			<tr>
				<td><label for="name">Title</label></td>
				<td>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments108 = array();
$arguments108['class'] = 'form-control';
$arguments108['style'] = 'width:100%;';
$arguments108['property'] = 'name';
$arguments108['id'] = 'name';
$arguments108['placeholder'] = 'Type title...';
$arguments108['additionalAttributes'] = NULL;
$arguments108['data'] = NULL;
$arguments108['required'] = false;
$arguments108['type'] = 'text';
$arguments108['name'] = NULL;
$arguments108['value'] = NULL;
$arguments108['disabled'] = NULL;
$arguments108['maxlength'] = NULL;
$arguments108['readonly'] = NULL;
$arguments108['size'] = NULL;
$arguments108['autofocus'] = NULL;
$arguments108['errorClass'] = 'f3-form-error';
$arguments108['dir'] = NULL;
$arguments108['lang'] = NULL;
$arguments108['title'] = NULL;
$arguments108['accesskey'] = NULL;
$arguments108['tabindex'] = NULL;
$arguments108['onclick'] = NULL;
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper110 = $self->getViewHelper('$viewHelper110', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper110->setArguments($arguments108);
$viewHelper110->setRenderingContext($renderingContext);
$viewHelper110->setRenderChildrenClosure($renderChildrenClosure109);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output107 .= $viewHelper110->initializeArgumentsAndRender();

$output107 .= '</td>
			</tr>
			<tr>
				<td><label for="content">Content</label></td>
				<td>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextareaViewHelper
$arguments111 = array();
$arguments111['class'] = 'form-control';
$arguments111['style'] = 'width:100%;font-family:cursive;font-size: 11pt;height: 100px;';
$arguments111['property'] = 'content';
$arguments111['id'] = 'content';
$arguments111['placeholder'] = 'Type something...';
$arguments111['additionalAttributes'] = NULL;
$arguments111['data'] = NULL;
$arguments111['name'] = NULL;
$arguments111['value'] = NULL;
$arguments111['rows'] = NULL;
$arguments111['cols'] = NULL;
$arguments111['disabled'] = NULL;
$arguments111['autofocus'] = NULL;
$arguments111['errorClass'] = 'f3-form-error';
$arguments111['required'] = false;
$arguments111['dir'] = NULL;
$arguments111['lang'] = NULL;
$arguments111['title'] = NULL;
$arguments111['accesskey'] = NULL;
$arguments111['tabindex'] = NULL;
$arguments111['onclick'] = NULL;
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper113 = $self->getViewHelper('$viewHelper113', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\TextareaViewHelper');
$viewHelper113->setArguments($arguments111);
$viewHelper113->setRenderingContext($renderingContext);
$viewHelper113->setRenderChildrenClosure($renderChildrenClosure112);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextareaViewHelper

$output107 .= $viewHelper113->initializeArgumentsAndRender();

$output107 .= '</td>
			</tr>
			<tr>
				<th>Choose category: </th>
				<td>
					';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments114 = array();
$arguments114['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'listCategories', $renderingContext);
$arguments114['as'] = 'cat';
$arguments114['key'] = '';
$arguments114['reverse'] = false;
$arguments114['iteration'] = NULL;
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
$output116 = '';

$output116 .= '
						<label class="checkbox-inline">
							';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\CheckboxViewHelper
$arguments117 = array();
$arguments117['property'] = 'categories';
$arguments117['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'cat.identity', $renderingContext);
// Rendering Boolean node
$arguments117['multiple'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('true');
$arguments117['additionalAttributes'] = NULL;
$arguments117['data'] = NULL;
$arguments117['checked'] = NULL;
$arguments117['name'] = NULL;
$arguments117['disabled'] = NULL;
$arguments117['errorClass'] = 'f3-form-error';
$arguments117['class'] = NULL;
$arguments117['dir'] = NULL;
$arguments117['id'] = NULL;
$arguments117['lang'] = NULL;
$arguments117['style'] = NULL;
$arguments117['title'] = NULL;
$arguments117['accesskey'] = NULL;
$arguments117['tabindex'] = NULL;
$arguments117['onclick'] = NULL;
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper119 = $self->getViewHelper('$viewHelper119', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\CheckboxViewHelper');
$viewHelper119->setArguments($arguments117);
$viewHelper119->setRenderingContext($renderingContext);
$viewHelper119->setRenderChildrenClosure($renderChildrenClosure118);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\CheckboxViewHelper

$output116 .= $viewHelper119->initializeArgumentsAndRender();
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments120 = array();
$arguments120['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'cat.title', $renderingContext);
$arguments120['keepQuotes'] = false;
$arguments120['encoding'] = 'UTF-8';
$arguments120['doubleEncode'] = true;
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
return NULL;
};
$value122 = ($arguments120['value'] !== NULL ? $arguments120['value'] : $renderChildrenClosure121());

$output116 .= !is_string($value122) && !(is_object($value122) && method_exists($value122, '__toString')) ? $value122 : htmlspecialchars($value122, ($arguments120['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments120['encoding'], $arguments120['doubleEncode']);

$output116 .= '
                        </label>
                    ';
return $output116;
};

$output107 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments114, $renderChildrenClosure115, $renderingContext);

$output107 .= '
				</td>
				<!-- ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments123 = array();
$arguments123['property'] = 'categories';
$arguments123['optionLabelField'] = 'title';
$arguments123['options'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'listCategory', $renderingContext);
$arguments123['size'] = '3';
$arguments123['prependOptionLabel'] = '- select one -';
$arguments123['multiple'] = 'true';
$arguments123['additionalAttributes'] = NULL;
$arguments123['data'] = NULL;
$arguments123['name'] = NULL;
$arguments123['value'] = NULL;
$arguments123['class'] = NULL;
$arguments123['dir'] = NULL;
$arguments123['id'] = NULL;
$arguments123['lang'] = NULL;
$arguments123['style'] = NULL;
$arguments123['title'] = NULL;
$arguments123['accesskey'] = NULL;
$arguments123['tabindex'] = NULL;
$arguments123['onclick'] = NULL;
$arguments123['disabled'] = NULL;
$arguments123['optionValueField'] = NULL;
$arguments123['sortByOptionLabel'] = false;
$arguments123['selectAllByDefault'] = false;
$arguments123['errorClass'] = 'f3-form-error';
$arguments123['translate'] = NULL;
$arguments123['prependOptionValue'] = NULL;
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper125 = $self->getViewHelper('$viewHelper125', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper125->setArguments($arguments123);
$viewHelper125->setRenderingContext($renderingContext);
$viewHelper125->setRenderChildrenClosure($renderChildrenClosure124);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\SelectViewHelper

$output107 .= $viewHelper125->initializeArgumentsAndRender();

$output107 .= ' -->
			</tr>
			<tr>
				<th>Choose authors: </th>
				<td>
					';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments126 = array();
$arguments126['style'] = 'width:100%;';
$arguments126['property'] = 'authors';
$arguments126['optionLabelField'] = 'name';
$arguments126['options'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'listAuthor', $renderingContext);
$arguments126['size'] = '3';
$arguments126['prependOptionLabel'] = '--Select one--';
$arguments126['multiple'] = 'true';
$arguments126['additionalAttributes'] = NULL;
$arguments126['data'] = NULL;
$arguments126['name'] = NULL;
$arguments126['value'] = NULL;
$arguments126['class'] = NULL;
$arguments126['dir'] = NULL;
$arguments126['id'] = NULL;
$arguments126['lang'] = NULL;
$arguments126['title'] = NULL;
$arguments126['accesskey'] = NULL;
$arguments126['tabindex'] = NULL;
$arguments126['onclick'] = NULL;
$arguments126['disabled'] = NULL;
$arguments126['optionValueField'] = NULL;
$arguments126['sortByOptionLabel'] = false;
$arguments126['selectAllByDefault'] = false;
$arguments126['errorClass'] = 'f3-form-error';
$arguments126['translate'] = NULL;
$arguments126['prependOptionValue'] = NULL;
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper128 = $self->getViewHelper('$viewHelper128', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper128->setArguments($arguments126);
$viewHelper128->setRenderingContext($renderingContext);
$viewHelper128->setRenderChildrenClosure($renderChildrenClosure127);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\SelectViewHelper

$output107 .= $viewHelper128->initializeArgumentsAndRender();

$output107 .= '
				</td>
			</tr>
			<tr>
				<td>
					';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments129 = array();
$arguments129['class'] = 'btn btn-primary';
$arguments129['value'] = 'Create';
$arguments129['additionalAttributes'] = NULL;
$arguments129['data'] = NULL;
$arguments129['name'] = NULL;
$arguments129['property'] = NULL;
$arguments129['disabled'] = NULL;
$arguments129['dir'] = NULL;
$arguments129['id'] = NULL;
$arguments129['lang'] = NULL;
$arguments129['style'] = NULL;
$arguments129['title'] = NULL;
$arguments129['accesskey'] = NULL;
$arguments129['tabindex'] = NULL;
$arguments129['onclick'] = NULL;
$renderChildrenClosure130 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper131 = $self->getViewHelper('$viewHelper131', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper131->setArguments($arguments129);
$viewHelper131->setRenderingContext($renderingContext);
$viewHelper131->setRenderChildrenClosure($renderChildrenClosure130);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper

$output107 .= $viewHelper131->initializeArgumentsAndRender();

$output107 .= '
				</td>
			</tr>
		</table>
	';
return $output107;
};
$viewHelper132 = $self->getViewHelper('$viewHelper132', $renderingContext, 'TYPO3\Fluid\ViewHelpers\FormViewHelper');
$viewHelper132->setArguments($arguments105);
$viewHelper132->setRenderingContext($renderingContext);
$viewHelper132->setRenderChildrenClosure($renderChildrenClosure106);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper

$output104 .= $viewHelper132->initializeArgumentsAndRender();

$output104 .= '
';
return $output104;
};

$output59 .= '';

$output59 .= '
';

return $output59;
}


}
#0             56568     