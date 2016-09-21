<?php

/* layout.html */
class __TwigTemplate_69563066e9be11cc6a1d62f4fbec27b84fbdd62c3d93fa2d6878f62e2ab9d0c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"zh-cn\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href=\"/static/css/bootstrap/dist/css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src=\"http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
      <script src=\"http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
  </head>
  <body>
  <header>
    <h1 class=\"\">简单留言系统!</h1>
    <div>
      <a href=\"/index/index\">所有留言</a>
      <a href=\"/index/add\">添加留言</a>
    </div>

  </header>
    <content>
\t";
        // line 29
        $this->displayBlock('content', $context, $blocks);
        // line 32
        echo "\t</content>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=\"http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js\"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src=\"/static/css/bootstrap/dist/js/bootstrap.min.js\"></script>
  </body>
</html>";
    }

    // line 29
    public function block_content($context, array $blocks = array())
    {
        // line 30
        echo "\t\t
\t";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function getDebugInfo()
    {
        return array (  66 => 30,  63 => 29,  52 => 32,  50 => 29,  20 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="zh-cn">*/
/*   <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <title>Bootstrap 101 Template</title>*/
/* */
/*     <!-- Bootstrap -->*/
/*     <link href="/static/css/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">*/
/* */
/*     <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*       <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>*/
/*       <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/*   </head>*/
/*   <body>*/
/*   <header>*/
/*     <h1 class="">简单留言系统!</h1>*/
/*     <div>*/
/*       <a href="/index/index">所有留言</a>*/
/*       <a href="/index/add">添加留言</a>*/
/*     </div>*/
/* */
/*   </header>*/
/*     <content>*/
/* 	{% block content %}*/
/* 		*/
/* 	{% endblock %}*/
/* 	</content>*/
/* */
/*     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->*/
/*     <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>*/
/*     <!-- Include all compiled plugins (below), or include individual files as needed -->*/
/*     <script src="/static/css/bootstrap/dist/js/bootstrap.min.js"></script>*/
/*   </body>*/
/* </html>*/
