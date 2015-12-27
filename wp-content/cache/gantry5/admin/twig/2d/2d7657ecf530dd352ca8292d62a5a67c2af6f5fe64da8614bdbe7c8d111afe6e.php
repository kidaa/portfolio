<?php

/* forms/fields/container/set.html.twig */
class __TwigTemplate_0c42539639f73a0c661941cbf1462d0317a0a3f3449b0d66f3cb029c77d4527f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'contents' => array($this, 'block_contents'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((("forms/" . ((array_key_exists("layout", $context)) ? (_twig_default_filter((isset($context["layout"]) ? $context["layout"] : null), "field")) : ("field"))) . ".html.twig"), "forms/fields/container/set.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_contents($context, array $blocks = array())
    {
        // line 4
        echo "    <h5>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array()), "html", null, true);
        echo "</h5>
    <div>
    ";
        // line 6
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fields", array())) {
            // line 7
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fields", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["childName"] => $context["child"]) {
                // line 8
                echo "            ";
                if ((is_string($__internal_64c64204c246337efa3510ef17efa7a7e3b3145794054b2abc7ce9a93c75e499 = $context["childName"]) && is_string($__internal_6a6352a24026c9ea071489b9949804eb73d905aa5736c467f2374008a610b079 = ".") && ('' === $__internal_6a6352a24026c9ea071489b9949804eb73d905aa5736c467f2374008a610b079 || 0 === strpos($__internal_64c64204c246337efa3510ef17efa7a7e3b3145794054b2abc7ce9a93c75e499, $__internal_6a6352a24026c9ea071489b9949804eb73d905aa5736c467f2374008a610b079)))) {
                    // line 9
                    echo "                ";
                    $context["childValue"] = $this->getAttribute((isset($context["value"]) ? $context["value"] : null), twig_slice($this->env, $context["childName"], 1, null), array(), "array");
                    // line 10
                    echo "                ";
                    $context["childDefault"] = $this->getAttribute((isset($context["default_value"]) ? $context["default_value"] : null), twig_slice($this->env, $context["childName"], 1, null), array(), "array");
                    // line 11
                    echo "                ";
                    $context["childName"] = ((isset($context["name"]) ? $context["name"] : null) . $context["childName"]);
                    // line 12
                    echo "            ";
                } else {
                    // line 13
                    echo "                ";
                    $context["childValue"] = $this->env->getExtension('GantryTwig')->nestedFunc((isset($context["data"]) ? $context["data"] : null), ((isset($context["scope"]) ? $context["scope"] : null) . $context["childName"]));
                    // line 14
                    echo "                ";
                    $context["childDefault"] = $this->env->getExtension('GantryTwig')->nestedFunc((isset($context["defaults"]) ? $context["defaults"] : null), ((isset($context["scope"]) ? $context["scope"] : null) . $context["childName"]));
                    // line 15
                    echo "            ";
                }
                // line 16
                echo "
            ";
                // line 17
                if ($this->getAttribute($context["child"], "type", array())) {
                    // line 18
                    echo "                ";
                    $this->loadTemplate(array(0 => (("forms/fields/" . twig_replace_filter($this->getAttribute($context["child"], "type", array()), ".", "/")) . ".html.twig"), 1 => "forms/fields/unknown/unknown.html.twig"), "forms/fields/container/set.html.twig", 18)->display(array_merge($context, array("name" =>                     // line 19
$context["childName"], "field" => $context["child"], "value" => (isset($context["childValue"]) ? $context["childValue"] : null), "default_value" => (isset($context["childDefault"]) ? $context["childDefault"] : null))));
                    // line 20
                    echo "            ";
                }
                // line 21
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['childName'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "    ";
        }
        // line 23
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/container/set.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 23,  106 => 22,  92 => 21,  89 => 20,  87 => 19,  85 => 18,  83 => 17,  80 => 16,  77 => 15,  74 => 14,  71 => 13,  68 => 12,  65 => 11,  62 => 10,  59 => 9,  56 => 8,  38 => 7,  36 => 6,  30 => 4,  27 => 3,  18 => 1,);
    }
}
/* {% extends 'forms/' ~ layout|default('field') ~ '.html.twig' %}*/
/* */
/* {% block contents %}*/
/*     <h5>{{ field.label }}</h5>*/
/*     <div>*/
/*     {% if field.fields %}*/
/*         {% for childName, child in field.fields %}*/
/*             {% if childName starts with '.' %}*/
/*                 {% set childValue = value[childName[1:]] %}*/
/*                 {% set childDefault = default_value[childName[1:]] %}*/
/*                 {% set childName = name ~ childName %}*/
/*             {% else %}*/
/*                 {% set childValue = nested(data, scope ~ childName) %}*/
/*                 {% set childDefault = nested(defaults, scope ~ childName) %}*/
/*             {% endif %}*/
/* */
/*             {% if child.type %}*/
/*                 {% include ["forms/fields/" ~ child.type|replace('.', '/') ~ ".html.twig", 'forms/fields/unknown/unknown.html.twig']*/
/*                 with {name: childName, field: child, value: childValue, default_value: childDefault} %}*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*     {% endif %}*/
/*     </div>*/
/* {% endblock %}*/
/* */
