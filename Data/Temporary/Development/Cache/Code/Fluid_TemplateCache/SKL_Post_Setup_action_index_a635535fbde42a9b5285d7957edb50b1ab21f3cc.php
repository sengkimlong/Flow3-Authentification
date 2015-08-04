<?php class FluidCache_SKL_Post_Setup_action_index_a635535fbde42a9b5285d7957edb50b1ab21f3cc extends \TYPO3\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
                    <li>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments11 = array();
$arguments11['action'] = 'index';
$arguments11['controller'] = 'User';
$arguments11['additionalAttributes'] = NULL;
$arguments11['data'] = NULL;
$arguments11['arguments'] = array (
);
$arguments11['package'] = NULL;
$arguments11['subpackage'] = NULL;
$arguments11['section'] = '';
$arguments11['format'] = '';
$arguments11['additionalParams'] = array (
);
$arguments11['addQueryString'] = false;
$arguments11['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments11['useParentRequest'] = false;
$arguments11['absolute'] = true;
$arguments11['class'] = NULL;
$arguments11['dir'] = NULL;
$arguments11['id'] = NULL;
$arguments11['lang'] = NULL;
$arguments11['style'] = NULL;
$arguments11['title'] = NULL;
$arguments11['accesskey'] = NULL;
$arguments11['tabindex'] = NULL;
$arguments11['onclick'] = NULL;
$arguments11['name'] = NULL;
$arguments11['rel'] = NULL;
$arguments11['rev'] = NULL;
$arguments11['target'] = NULL;
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments13 = array();
$arguments13['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'usrname', $renderingContext);
$arguments13['keepQuotes'] = false;
$arguments13['encoding'] = 'UTF-8';
$arguments13['doubleEncode'] = true;
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$value15 = ($arguments13['value'] !== NULL ? $arguments13['value'] : $renderChildrenClosure14());
return !is_string($value15) && !(is_object($value15) && method_exists($value15, '__toString')) ? $value15 : htmlspecialchars($value15, ($arguments13['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments13['encoding'], $arguments13['doubleEncode']);
};
$viewHelper16 = $self->getViewHelper('$viewHelper16', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper16->setArguments($arguments11);
$viewHelper16->setRenderingContext($renderingContext);
$viewHelper16->setRenderChildrenClosure($renderChildrenClosure12);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output0 .= $viewHelper16->initializeArgumentsAndRender();

$output0 .= '</li>
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
$output17 = '';

$output17 .= '
    ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments18 = array();
$arguments18['action'] = 'logout';
$arguments18['controller'] = 'Login';
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
return 'Logout';
};
$viewHelper20 = $self->getViewHelper('$viewHelper20', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper20->setArguments($arguments18);
$viewHelper20->setRenderingContext($renderingContext);
$viewHelper20->setRenderChildrenClosure($renderChildrenClosure19);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output17 .= $viewHelper20->initializeArgumentsAndRender();

$output17 .= '
    <h3>Category: </h3>
    <p>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments21 = array();
$arguments21['action'] = 'index';
$arguments21['controller'] = 'category';
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
return 'View Category';
};
$viewHelper23 = $self->getViewHelper('$viewHelper23', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper23->setArguments($arguments21);
$viewHelper23->setRenderingContext($renderingContext);
$viewHelper23->setRenderChildrenClosure($renderChildrenClosure22);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output17 .= $viewHelper23->initializeArgumentsAndRender();

$output17 .= '</p>
    <p>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments24 = array();
$arguments24['action'] = 'new';
$arguments24['controller'] = 'category';
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
return 'Create a new category';
};
$viewHelper26 = $self->getViewHelper('$viewHelper26', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper26->setArguments($arguments24);
$viewHelper26->setRenderingContext($renderingContext);
$viewHelper26->setRenderChildrenClosure($renderChildrenClosure25);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output17 .= $viewHelper26->initializeArgumentsAndRender();

$output17 .= '</p>
    <h3>Post: </h3>
    <p>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments27 = array();
$arguments27['action'] = 'index';
$arguments27['controller'] = 'post';
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
return 'View Post';
};
$viewHelper29 = $self->getViewHelper('$viewHelper29', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper29->setArguments($arguments27);
$viewHelper29->setRenderingContext($renderingContext);
$viewHelper29->setRenderChildrenClosure($renderChildrenClosure28);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output17 .= $viewHelper29->initializeArgumentsAndRender();

$output17 .= '</p>
    <p>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments30 = array();
$arguments30['action'] = 'new';
$arguments30['controller'] = 'post';
$arguments30['additionalAttributes'] = NULL;
$arguments30['data'] = NULL;
$arguments30['arguments'] = array (
);
$arguments30['package'] = NULL;
$arguments30['subpackage'] = NULL;
$arguments30['section'] = '';
$arguments30['format'] = '';
$arguments30['additionalParams'] = array (
);
$arguments30['addQueryString'] = false;
$arguments30['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments30['useParentRequest'] = false;
$arguments30['absolute'] = true;
$arguments30['class'] = NULL;
$arguments30['dir'] = NULL;
$arguments30['id'] = NULL;
$arguments30['lang'] = NULL;
$arguments30['style'] = NULL;
$arguments30['title'] = NULL;
$arguments30['accesskey'] = NULL;
$arguments30['tabindex'] = NULL;
$arguments30['onclick'] = NULL;
$arguments30['name'] = NULL;
$arguments30['rel'] = NULL;
$arguments30['rev'] = NULL;
$arguments30['target'] = NULL;
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
return 'Create new post';
};
$viewHelper32 = $self->getViewHelper('$viewHelper32', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper32->setArguments($arguments30);
$viewHelper32->setRenderingContext($renderingContext);
$viewHelper32->setRenderChildrenClosure($renderChildrenClosure31);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output17 .= $viewHelper32->initializeArgumentsAndRender();

$output17 .= '</p>
    <h3>Author: </h3>
    <p>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments33 = array();
$arguments33['action'] = 'index';
$arguments33['controller'] = 'author';
$arguments33['additionalAttributes'] = NULL;
$arguments33['data'] = NULL;
$arguments33['arguments'] = array (
);
$arguments33['package'] = NULL;
$arguments33['subpackage'] = NULL;
$arguments33['section'] = '';
$arguments33['format'] = '';
$arguments33['additionalParams'] = array (
);
$arguments33['addQueryString'] = false;
$arguments33['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments33['useParentRequest'] = false;
$arguments33['absolute'] = true;
$arguments33['class'] = NULL;
$arguments33['dir'] = NULL;
$arguments33['id'] = NULL;
$arguments33['lang'] = NULL;
$arguments33['style'] = NULL;
$arguments33['title'] = NULL;
$arguments33['accesskey'] = NULL;
$arguments33['tabindex'] = NULL;
$arguments33['onclick'] = NULL;
$arguments33['name'] = NULL;
$arguments33['rel'] = NULL;
$arguments33['rev'] = NULL;
$arguments33['target'] = NULL;
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
return 'View Author';
};
$viewHelper35 = $self->getViewHelper('$viewHelper35', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper35->setArguments($arguments33);
$viewHelper35->setRenderingContext($renderingContext);
$viewHelper35->setRenderChildrenClosure($renderChildrenClosure34);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output17 .= $viewHelper35->initializeArgumentsAndRender();

$output17 .= '</p>
    <p>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments36 = array();
$arguments36['action'] = 'new';
$arguments36['controller'] = 'author';
$arguments36['additionalAttributes'] = NULL;
$arguments36['data'] = NULL;
$arguments36['arguments'] = array (
);
$arguments36['package'] = NULL;
$arguments36['subpackage'] = NULL;
$arguments36['section'] = '';
$arguments36['format'] = '';
$arguments36['additionalParams'] = array (
);
$arguments36['addQueryString'] = false;
$arguments36['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments36['useParentRequest'] = false;
$arguments36['absolute'] = true;
$arguments36['class'] = NULL;
$arguments36['dir'] = NULL;
$arguments36['id'] = NULL;
$arguments36['lang'] = NULL;
$arguments36['style'] = NULL;
$arguments36['title'] = NULL;
$arguments36['accesskey'] = NULL;
$arguments36['tabindex'] = NULL;
$arguments36['onclick'] = NULL;
$arguments36['name'] = NULL;
$arguments36['rel'] = NULL;
$arguments36['rev'] = NULL;
$arguments36['target'] = NULL;
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
return 'Create New Author';
};
$viewHelper38 = $self->getViewHelper('$viewHelper38', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper38->setArguments($arguments36);
$viewHelper38->setRenderingContext($renderingContext);
$viewHelper38->setRenderChildrenClosure($renderChildrenClosure37);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output17 .= $viewHelper38->initializeArgumentsAndRender();

$output17 .= '</p>
';

return $output17;
}
/**
 * section Content
 */
public function section_4f9be057f0ea5d2ba72fd2c810e8d7b9aa98b469(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output39 = '';

$output39 .= '
    ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments40 = array();
$arguments40['name'] = 'Title';
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
return 'Welcome to MyBlog';
};

$output39 .= '';

$output39 .= '

    <div class="jumbotron">
        <h1>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments42 = array();
$arguments42['name'] = 'Title';
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
return 'Welcome to MyBlog';
};

$output39 .= '';

$output39 .= '</h1>
        <p>Our website provide the user to create their own blog on the internet with a specific category
            and author. The user can create their own account and start playing around. User can first create
            the category for the blog and then start making new post according to category. Users can assign
            the post belong to any author or category as they want.</p>
    </div>

';

return $output39;
}
/**
 * section Title
 */
public function section_768e0c1c69573fb588f61f1308a015c11468e05f(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;

return 'Welcome to MyBlog';
}
/**
 * Main Render function
 */
public function render(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output44 = '';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments45 = array();
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper
$arguments46 = array();
$arguments46['name'] = 'Default';
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper48 = $self->getViewHelper('$viewHelper48', $renderingContext, 'TYPO3\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper48->setArguments($arguments46);
$viewHelper48->setRenderingContext($renderingContext);
$viewHelper48->setRenderChildrenClosure($renderChildrenClosure47);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper
$arguments45['value'] = $viewHelper48->initializeArgumentsAndRender();
$arguments45['keepQuotes'] = false;
$arguments45['encoding'] = 'UTF-8';
$arguments45['doubleEncode'] = true;
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
return NULL;
};
$value50 = ($arguments45['value'] !== NULL ? $arguments45['value'] : $renderChildrenClosure49());

$output44 .= !is_string($value50) && !(is_object($value50) && method_exists($value50, '__toString')) ? $value50 : htmlspecialchars($value50, ($arguments45['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments45['encoding'], $arguments45['doubleEncode']);

$output44 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments51 = array();
$arguments51['name'] = 'Navigation';
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
$output53 = '';

$output53 .= '

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
$arguments54 = array();
$arguments54['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'listCategories', $renderingContext);
$arguments54['as'] = 'navCategory';
$arguments54['key'] = '';
$arguments54['reverse'] = false;
$arguments54['iteration'] = NULL;
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
$output56 = '';

$output56 .= '
                        <li>
                            ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments57 = array();
$arguments57['action'] = 'show';
$arguments57['controller'] = 'category';
// Rendering Array
$array58 = array();
$array58['category'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'navCategory', $renderingContext);
$arguments57['arguments'] = $array58;
$arguments57['additionalAttributes'] = NULL;
$arguments57['data'] = NULL;
$arguments57['package'] = NULL;
$arguments57['subpackage'] = NULL;
$arguments57['section'] = '';
$arguments57['format'] = '';
$arguments57['additionalParams'] = array (
);
$arguments57['addQueryString'] = false;
$arguments57['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments57['useParentRequest'] = false;
$arguments57['absolute'] = true;
$arguments57['class'] = NULL;
$arguments57['dir'] = NULL;
$arguments57['id'] = NULL;
$arguments57['lang'] = NULL;
$arguments57['style'] = NULL;
$arguments57['title'] = NULL;
$arguments57['accesskey'] = NULL;
$arguments57['tabindex'] = NULL;
$arguments57['onclick'] = NULL;
$arguments57['name'] = NULL;
$arguments57['rel'] = NULL;
$arguments57['rev'] = NULL;
$arguments57['target'] = NULL;
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments60 = array();
$arguments60['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'navCategory.title', $renderingContext);
$arguments60['keepQuotes'] = false;
$arguments60['encoding'] = 'UTF-8';
$arguments60['doubleEncode'] = true;
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
return NULL;
};
$value62 = ($arguments60['value'] !== NULL ? $arguments60['value'] : $renderChildrenClosure61());
return !is_string($value62) && !(is_object($value62) && method_exists($value62, '__toString')) ? $value62 : htmlspecialchars($value62, ($arguments60['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments60['encoding'], $arguments60['doubleEncode']);
};
$viewHelper63 = $self->getViewHelper('$viewHelper63', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper63->setArguments($arguments57);
$viewHelper63->setRenderingContext($renderingContext);
$viewHelper63->setRenderChildrenClosure($renderChildrenClosure59);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output56 .= $viewHelper63->initializeArgumentsAndRender();

$output56 .= '
                        </li>
                    ';
return $output56;
};

$output53 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);

$output53 .= '
                    <li>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments64 = array();
$arguments64['action'] = 'index';
$arguments64['controller'] = 'User';
$arguments64['additionalAttributes'] = NULL;
$arguments64['data'] = NULL;
$arguments64['arguments'] = array (
);
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
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments66 = array();
$arguments66['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'usrname', $renderingContext);
$arguments66['keepQuotes'] = false;
$arguments66['encoding'] = 'UTF-8';
$arguments66['doubleEncode'] = true;
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
return NULL;
};
$value68 = ($arguments66['value'] !== NULL ? $arguments66['value'] : $renderChildrenClosure67());
return !is_string($value68) && !(is_object($value68) && method_exists($value68, '__toString')) ? $value68 : htmlspecialchars($value68, ($arguments66['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments66['encoding'], $arguments66['doubleEncode']);
};
$viewHelper69 = $self->getViewHelper('$viewHelper69', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper69->setArguments($arguments64);
$viewHelper69->setRenderingContext($renderingContext);
$viewHelper69->setRenderChildrenClosure($renderChildrenClosure65);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output53 .= $viewHelper69->initializeArgumentsAndRender();

$output53 .= '</li>
                </ul>
            </div>
        </div>
    </nav>

';
return $output53;
};

$output44 .= '';

$output44 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments70 = array();
$arguments70['name'] = 'Sidebar';
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
$output72 = '';

$output72 .= '
    ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments73 = array();
$arguments73['action'] = 'logout';
$arguments73['controller'] = 'Login';
$arguments73['additionalAttributes'] = NULL;
$arguments73['data'] = NULL;
$arguments73['arguments'] = array (
);
$arguments73['package'] = NULL;
$arguments73['subpackage'] = NULL;
$arguments73['section'] = '';
$arguments73['format'] = '';
$arguments73['additionalParams'] = array (
);
$arguments73['addQueryString'] = false;
$arguments73['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments73['useParentRequest'] = false;
$arguments73['absolute'] = true;
$arguments73['class'] = NULL;
$arguments73['dir'] = NULL;
$arguments73['id'] = NULL;
$arguments73['lang'] = NULL;
$arguments73['style'] = NULL;
$arguments73['title'] = NULL;
$arguments73['accesskey'] = NULL;
$arguments73['tabindex'] = NULL;
$arguments73['onclick'] = NULL;
$arguments73['name'] = NULL;
$arguments73['rel'] = NULL;
$arguments73['rev'] = NULL;
$arguments73['target'] = NULL;
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
return 'Logout';
};
$viewHelper75 = $self->getViewHelper('$viewHelper75', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper75->setArguments($arguments73);
$viewHelper75->setRenderingContext($renderingContext);
$viewHelper75->setRenderChildrenClosure($renderChildrenClosure74);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output72 .= $viewHelper75->initializeArgumentsAndRender();

$output72 .= '
    <h3>Category: </h3>
    <p>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments76 = array();
$arguments76['action'] = 'index';
$arguments76['controller'] = 'category';
$arguments76['additionalAttributes'] = NULL;
$arguments76['data'] = NULL;
$arguments76['arguments'] = array (
);
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
$arguments76['class'] = NULL;
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
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
return 'View Category';
};
$viewHelper78 = $self->getViewHelper('$viewHelper78', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper78->setArguments($arguments76);
$viewHelper78->setRenderingContext($renderingContext);
$viewHelper78->setRenderChildrenClosure($renderChildrenClosure77);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output72 .= $viewHelper78->initializeArgumentsAndRender();

$output72 .= '</p>
    <p>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments79 = array();
$arguments79['action'] = 'new';
$arguments79['controller'] = 'category';
$arguments79['additionalAttributes'] = NULL;
$arguments79['data'] = NULL;
$arguments79['arguments'] = array (
);
$arguments79['package'] = NULL;
$arguments79['subpackage'] = NULL;
$arguments79['section'] = '';
$arguments79['format'] = '';
$arguments79['additionalParams'] = array (
);
$arguments79['addQueryString'] = false;
$arguments79['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments79['useParentRequest'] = false;
$arguments79['absolute'] = true;
$arguments79['class'] = NULL;
$arguments79['dir'] = NULL;
$arguments79['id'] = NULL;
$arguments79['lang'] = NULL;
$arguments79['style'] = NULL;
$arguments79['title'] = NULL;
$arguments79['accesskey'] = NULL;
$arguments79['tabindex'] = NULL;
$arguments79['onclick'] = NULL;
$arguments79['name'] = NULL;
$arguments79['rel'] = NULL;
$arguments79['rev'] = NULL;
$arguments79['target'] = NULL;
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
return 'Create a new category';
};
$viewHelper81 = $self->getViewHelper('$viewHelper81', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper81->setArguments($arguments79);
$viewHelper81->setRenderingContext($renderingContext);
$viewHelper81->setRenderChildrenClosure($renderChildrenClosure80);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output72 .= $viewHelper81->initializeArgumentsAndRender();

$output72 .= '</p>
    <h3>Post: </h3>
    <p>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments82 = array();
$arguments82['action'] = 'index';
$arguments82['controller'] = 'post';
$arguments82['additionalAttributes'] = NULL;
$arguments82['data'] = NULL;
$arguments82['arguments'] = array (
);
$arguments82['package'] = NULL;
$arguments82['subpackage'] = NULL;
$arguments82['section'] = '';
$arguments82['format'] = '';
$arguments82['additionalParams'] = array (
);
$arguments82['addQueryString'] = false;
$arguments82['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments82['useParentRequest'] = false;
$arguments82['absolute'] = true;
$arguments82['class'] = NULL;
$arguments82['dir'] = NULL;
$arguments82['id'] = NULL;
$arguments82['lang'] = NULL;
$arguments82['style'] = NULL;
$arguments82['title'] = NULL;
$arguments82['accesskey'] = NULL;
$arguments82['tabindex'] = NULL;
$arguments82['onclick'] = NULL;
$arguments82['name'] = NULL;
$arguments82['rel'] = NULL;
$arguments82['rev'] = NULL;
$arguments82['target'] = NULL;
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
return 'View Post';
};
$viewHelper84 = $self->getViewHelper('$viewHelper84', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper84->setArguments($arguments82);
$viewHelper84->setRenderingContext($renderingContext);
$viewHelper84->setRenderChildrenClosure($renderChildrenClosure83);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output72 .= $viewHelper84->initializeArgumentsAndRender();

$output72 .= '</p>
    <p>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments85 = array();
$arguments85['action'] = 'new';
$arguments85['controller'] = 'post';
$arguments85['additionalAttributes'] = NULL;
$arguments85['data'] = NULL;
$arguments85['arguments'] = array (
);
$arguments85['package'] = NULL;
$arguments85['subpackage'] = NULL;
$arguments85['section'] = '';
$arguments85['format'] = '';
$arguments85['additionalParams'] = array (
);
$arguments85['addQueryString'] = false;
$arguments85['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments85['useParentRequest'] = false;
$arguments85['absolute'] = true;
$arguments85['class'] = NULL;
$arguments85['dir'] = NULL;
$arguments85['id'] = NULL;
$arguments85['lang'] = NULL;
$arguments85['style'] = NULL;
$arguments85['title'] = NULL;
$arguments85['accesskey'] = NULL;
$arguments85['tabindex'] = NULL;
$arguments85['onclick'] = NULL;
$arguments85['name'] = NULL;
$arguments85['rel'] = NULL;
$arguments85['rev'] = NULL;
$arguments85['target'] = NULL;
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
return 'Create new post';
};
$viewHelper87 = $self->getViewHelper('$viewHelper87', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper87->setArguments($arguments85);
$viewHelper87->setRenderingContext($renderingContext);
$viewHelper87->setRenderChildrenClosure($renderChildrenClosure86);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output72 .= $viewHelper87->initializeArgumentsAndRender();

$output72 .= '</p>
    <h3>Author: </h3>
    <p>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments88 = array();
$arguments88['action'] = 'index';
$arguments88['controller'] = 'author';
$arguments88['additionalAttributes'] = NULL;
$arguments88['data'] = NULL;
$arguments88['arguments'] = array (
);
$arguments88['package'] = NULL;
$arguments88['subpackage'] = NULL;
$arguments88['section'] = '';
$arguments88['format'] = '';
$arguments88['additionalParams'] = array (
);
$arguments88['addQueryString'] = false;
$arguments88['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments88['useParentRequest'] = false;
$arguments88['absolute'] = true;
$arguments88['class'] = NULL;
$arguments88['dir'] = NULL;
$arguments88['id'] = NULL;
$arguments88['lang'] = NULL;
$arguments88['style'] = NULL;
$arguments88['title'] = NULL;
$arguments88['accesskey'] = NULL;
$arguments88['tabindex'] = NULL;
$arguments88['onclick'] = NULL;
$arguments88['name'] = NULL;
$arguments88['rel'] = NULL;
$arguments88['rev'] = NULL;
$arguments88['target'] = NULL;
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
return 'View Author';
};
$viewHelper90 = $self->getViewHelper('$viewHelper90', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper90->setArguments($arguments88);
$viewHelper90->setRenderingContext($renderingContext);
$viewHelper90->setRenderChildrenClosure($renderChildrenClosure89);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output72 .= $viewHelper90->initializeArgumentsAndRender();

$output72 .= '</p>
    <p>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments91 = array();
$arguments91['action'] = 'new';
$arguments91['controller'] = 'author';
$arguments91['additionalAttributes'] = NULL;
$arguments91['data'] = NULL;
$arguments91['arguments'] = array (
);
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
return 'Create New Author';
};
$viewHelper93 = $self->getViewHelper('$viewHelper93', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper93->setArguments($arguments91);
$viewHelper93->setRenderingContext($renderingContext);
$viewHelper93->setRenderChildrenClosure($renderChildrenClosure92);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output72 .= $viewHelper93->initializeArgumentsAndRender();

$output72 .= '</p>
';
return $output72;
};

$output44 .= '';

$output44 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments94 = array();
$arguments94['name'] = 'Content';
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
$output96 = '';

$output96 .= '
    ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments97 = array();
$arguments97['name'] = 'Title';
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
return 'Welcome to MyBlog';
};

$output96 .= '';

$output96 .= '

    <div class="jumbotron">
        <h1>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments99 = array();
$arguments99['name'] = 'Title';
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
return 'Welcome to MyBlog';
};

$output96 .= '';

$output96 .= '</h1>
        <p>Our website provide the user to create their own blog on the internet with a specific category
            and author. The user can create their own account and start playing around. User can first create
            the category for the blog and then start making new post according to category. Users can assign
            the post belong to any author or category as they want.</p>
    </div>

';
return $output96;
};

$output44 .= '';

$output44 .= '
';

return $output44;
}


}
#0             40751     