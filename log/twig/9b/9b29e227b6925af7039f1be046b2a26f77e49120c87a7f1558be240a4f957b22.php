<?php

/* add.html */
class __TwigTemplate_aae3c173f6e816a8fb4177ac0853f4d3c107e50ca6d078b6e7c5a678a677374e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "add.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "\t";
        echo twig_escape_filter($this->env, (isset($context["data"]) ? $context["data"] : null), "html", null, true);
        echo "
<form class=\"form-horizontal\" role=\"form\"  method ='post'  action=\"/index/save\">
  <div class=\"form-group\">
    <label for=\"title\" class=\"col-sm-2 control-label\">title</label>
    <div class=\"col-sm-10\">
      <input type=\"text\" class=\"form-control\" id=\"title\" name=\"title\" placeholder=\"title\">
    </div>
  </div>
  <div class=\"form-group\">
    <label for=\"content\" class=\"col-sm-2 control-label\">content</label>
    <div class=\"col-sm-10\">
      <input type=\"text\" class=\"form-control\" id=\"content\" name=\"content\" placeholder=\"content\">
    </div>
  </div>
  <div class=\"form-group\">
    <div class=\"col-sm-offset-2 col-sm-10\">
      <button type=\"submit\" class=\"btn btn-default\">提交</button>
    </div>
  </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "add.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "layout.html" %}*/
/* {% block content %}*/
/* 	{{ data }}*/
/* <form class="form-horizontal" role="form"  method ='post'  action="/index/save">*/
/*   <div class="form-group">*/
/*     <label for="title" class="col-sm-2 control-label">title</label>*/
/*     <div class="col-sm-10">*/
/*       <input type="text" class="form-control" id="title" name="title" placeholder="title">*/
/*     </div>*/
/*   </div>*/
/*   <div class="form-group">*/
/*     <label for="content" class="col-sm-2 control-label">content</label>*/
/*     <div class="col-sm-10">*/
/*       <input type="text" class="form-control" id="content" name="content" placeholder="content">*/
/*     </div>*/
/*   </div>*/
/*   <div class="form-group">*/
/*     <div class="col-sm-offset-2 col-sm-10">*/
/*       <button type="submit" class="btn btn-default">提交</button>*/
/*     </div>*/
/*   </div>*/
/* </form>*/
/* {% endblock %} */
