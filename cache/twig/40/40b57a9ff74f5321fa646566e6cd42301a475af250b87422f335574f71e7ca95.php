<?php

/* theme.yaml.twig */
class __TwigTemplate_b36aa45a1ca86d9f09b4b9194c45e9a938bd4839f07ea826eb9a8c342a3107dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "enabled: true
dropdown:
  enabled: true
";
    }

    public function getTemplateName()
    {
        return "theme.yaml.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("enabled: true
dropdown:
  enabled: true
", "theme.yaml.twig", "C:\\xampp7\\htdocs\\grav-project\\user\\plugins\\devtools\\components\\theme\\pure-blank\\theme.yaml.twig");
    }
}
