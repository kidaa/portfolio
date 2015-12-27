<?php

/* forms/fields/collection/list.html.twig */
class __TwigTemplate_3209f125e1dd9153195f76913482dec2a8e04994d2ce64bfb10d0b3282a4c573 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'contents' => array($this, 'block_contents'),
            'label' => array($this, 'block_label'),
            'input' => array($this, 'block_input'),
            'collection_fields' => array($this, 'block_collection_fields'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((("forms/" . ((array_key_exists("layout", $context)) ? (_twig_default_filter((isset($context["layout"]) ? $context["layout"] : null), "field")) : ("field"))) . ".html.twig"), "forms/fields/collection/list.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["value"] = (((( !$this->getAttribute((isset($context["field"]) ? $context["field"] : null), "key", array()) && twig_test_iterable((isset($context["value"]) ? $context["value"] : null))) && twig_length_filter($this->env, (isset($context["value"]) ? $context["value"] : null)))) ? ($this->env->getExtension('GantryTwig')->valuesFilter((isset($context["value"]) ? $context["value"] : null))) : (((array_key_exists("value", $context)) ? (_twig_default_filter((isset($context["value"]) ? $context["value"] : null), $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "default", array()))) : ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "default", array())))));
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_field($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "is_current", array())) {
            // line 7
            echo "        <div class=\"g-grid\">
            ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : null));
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
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 9
                echo "                <div class=\"card settings-block\">
                    <h4>
                        <span data-title-editable=\"";
                // line 11
                echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()) == $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "key", array()))) ? ($context["key"]) : ($this->getAttribute($context["val"], $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()), array(), "array"))));
                echo "\" data-collection-key=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->fieldNameFilter((((((isset($context["prefix"]) ? $context["prefix"] : null) . ".") . $context["key"]) . ".") . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()))));
                echo "\" class=\"title\">";
                echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()) == $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "key", array()))) ? ($context["key"]) : ($this->getAttribute($context["val"], $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()), array(), "array"))));
                echo "</span> <i class=\"fa fa-pencil font-small\"  tabindex=\"0\" aria-label=\"";
                echo twig_escape_filter($this->env, twig_replace_filter($this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_EDIT_TITLE"), array("%s" => twig_escape_filter($this->env, ((($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()) == $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "key", array()))) ? ($context["key"]) : ($this->getAttribute($context["val"], $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()), array(), "array")))))), "html", null, true);
                echo "\" data-title-edit></i>
                    </h4>
                    <div class=\"inner-params\">
                        ";
                // line 14
                $this->displayBlock("collection_fields", $context, $blocks);
                echo "
                    </div>
                </div>
            ";
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "        </div>
    ";
        } else {
            // line 20
            echo "        ";
            $context["can_reorder"] = (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "reorder", array(), "any", true, true)) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "reorder", array())) : (true));
            // line 21
            echo "        ";
            $context["can_remove"] = (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "deletion", array(), "any", true, true)) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "deletion", array())) : (true));
            // line 22
            echo "        ";
            $context["can_addnew"] = (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "add_new", array(), "any", true, true)) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "add_new", array())) : (true));
            // line 23
            echo "        <div class=\"settings-param ";
            echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type", array()), ".", "-"));
            echo "\">
            ";
            // line 24
            if ((((isset($context["overrideable"]) ? $context["overrideable"] : null) && ( !$this->getAttribute((isset($context["field"]) ? $context["field"] : null), "overridable", array(), "any", true, true) || ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "overridable", array()) == true))) && ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type", array()) != "container.set"))) {
                // line 25
                echo "                <input type=\"checkbox\" class=\"settings-param-toggle\" id=\"of-";
                echo twig_escape_filter($this->env, ((isset($context["scope"]) ? $context["scope"] : null) . (isset($context["name"]) ? $context["name"] : null)));
                echo "\"";
                echo ((((isset($context["value"]) ? $context["value"] : null) != (isset($context["default_value"]) ? $context["default_value"] : null))) ? (" checked=\"checked\"") : (""));
                echo " />
                <label class=\"settings-param-override\" for=\"of-";
                // line 26
                echo twig_escape_filter($this->env, ((isset($context["scope"]) ? $context["scope"] : null) . (isset($context["name"]) ? $context["name"] : null)));
                echo "\"></label>
            ";
            }
            // line 28
            echo "            ";
            $this->displayBlock('contents', $context, $blocks);
            // line 100
            echo "        </div>
    ";
        }
    }

    // line 28
    public function block_contents($context, array $blocks = array())
    {
        // line 29
        echo "                ";
        $context["field_route"] = twig_replace_filter((((((isset($context["route"]) ? $context["route"] : null) . ".") . (isset($context["scope"]) ? $context["scope"] : null)) . ".") . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array())), ".", "/");
        // line 30
        echo "                    <span class=\"settings-param-title float-left\">
                    ";
        // line 31
        $this->displayBlock('label', $context, $blocks);
        // line 39
        echo "                </span>
                <div class=\"settings-param-field\" data-field-name=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()));
        echo "\">
                    ";
        // line 41
        $this->displayBlock('input', $context, $blocks);
        // line 98
        echo "                </div>
            ";
    }

    // line 31
    public function block_label($context, array $blocks = array())
    {
        // line 32
        echo "                        ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "description", array())) {
            // line 33
            echo "                            <span aria-label=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "description", array()));
            echo "\" data-tip=\"";
            echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "description", array());
            echo "\" data-tip-place=\"top-right\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array()));
            echo "</span>
                        ";
        } else {
            // line 35
            echo "                            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array()));
            echo "
                        ";
        }
        // line 37
        echo "                        ";
        echo ((twig_in_filter($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) ? ("<span class=\"required\">*</span>") : (""));
        echo "
                    ";
    }

    // line 41
    public function block_input($context, array $blocks = array())
    {
        // line 42
        echo "<ul>";
        // line 43
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fields", array())) {
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : null));
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
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 45
                echo "                                    ";
                if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "ajax", array()) == true)) {
                    // line 46
                    echo "                                        <li data-collection-item=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()));
                    echo "\">
                                            ";
                    // line 47
                    $context["itemValue"] = ((($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()) == $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "key", array()))) ? ($context["key"]) : ($this->getAttribute($context["val"], $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()), array(), "array")));
                    // line 48
                    echo "                                            ";
                    if ((isset($context["can_reorder"]) ? $context["can_reorder"] : null)) {
                        echo "<i class=\"fa fa-reorder font-small item-reorder\"></i>";
                    }
                    // line 49
                    echo "                                            <a class=\"config-cog\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => (((isset($context["field_route"]) ? $context["field_route"] : null) . "/") . $context["key"])), "method"));
                    echo "\"><span data-title-editable=\"";
                    echo twig_escape_filter($this->env, (isset($context["itemValue"]) ? $context["itemValue"] : null));
                    echo "\" class=\"title\">";
                    echo twig_escape_filter($this->env, (isset($context["itemValue"]) ? $context["itemValue"] : null));
                    echo "</span></a>
                                            ";
                    // line 50
                    if ((isset($context["can_remove"]) ? $context["can_remove"] : null)) {
                        echo "<i class=\"fa fa-fw fa-trash font-small\" data-collection-remove=\"\"></i>";
                    }
                    // line 51
                    echo "                                            <i class=\"fa fa-fw fa-pencil font-small\" tabindex=\"0\" aria-label=\"";
                    echo twig_escape_filter($this->env, twig_replace_filter($this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_EDIT_TITLE"), array("%s" => twig_escape_filter($this->env, (isset($context["itemValue"]) ? $context["itemValue"] : null)))), "html", null, true);
                    echo "\" data-title-edit=\"\"></i>
                                        </li>
                                    ";
                } else {
                    // line 54
                    echo "                                        ";
                    $this->displayBlock('collection_fields', $context, $blocks);
                    // line 80
                    echo "                                    ";
                }
                // line 81
                echo "                                ";
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 83
        echo "</ul>
                    <div>
                        <ul style=\"display: none\">
                            <li data-collection-nosort data-collection-template=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()));
        echo "\" style=\"display: none;\">
                                ";
        // line 87
        if ((isset($context["can_reorder"]) ? $context["can_reorder"] : null)) {
            echo "<i class=\"fa fa-reorder font-small item-reorder\"></i>";
        }
        // line 88
        echo "                                <a class=\"config-cog\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => ((isset($context["field_route"]) ? $context["field_route"] : null) . "/%id%")), "method"));
        echo "\"><span data-title-editable=\"New item\" class=\"title\">New item</span></a>
                                ";
        // line 89
        if ((isset($context["can_remove"]) ? $context["can_remove"] : null)) {
            echo "<i class=\"fa fa-fw fa-trash font-small\" data-collection-remove=\"\"></i>";
        }
        // line 90
        echo "                                <i class=\"fa fa-fw fa-pencil font-small\" data-title-edit=\"\"></i>
                            </li>
                        </ul>
                        ";
        // line 93
        if ((isset($context["can_addnew"]) ? $context["can_addnew"] : null)) {
            echo "<span class=\"collection-addnew button button-simple\" data-collection-addnew=\"\" title=\"Add new item\"><i class=\"fa fa-plus font-small\"></i></span>";
        }
        // line 94
        echo "                        <a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => (isset($context["field_route"]) ? $context["field_route"] : null)), "method"));
        echo "\" class=\"collection-editall button button-simple\" data-collection-editall=\"\" title=\"Edit all items\" ";
        if ((twig_length_filter($this->env, (isset($context["value"]) ? $context["value"] : null)) <= 1)) {
            echo "style=\"display: none;\"";
        }
        echo "><i class=\"fa fa-th-large font-small\"></i></a>
                    </div>
                    <input data-collection-data=\"\" name=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->fieldNameFilter((((isset($context["scope"]) ? $context["scope"] : null) . (isset($context["name"]) ? $context["name"] : null)) . "._json")));
        echo "\" type=\"hidden\" value=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter(((array_key_exists("value", $context)) ? (_twig_default_filter((isset($context["value"]) ? $context["value"] : null), array())) : (array())), twig_constant("JSON_UNESCAPED_SLASHES")), "html_attr");
        echo "\"/>
                    ";
    }

    // line 54
    public function block_collection_fields($context, array $blocks = array())
    {
        // line 55
        echo "                                            <div data-g5-collections=\"\">
                                                ";
        // line 56
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
            // line 57
            echo "                                                    ";
            if ((is_string($__internal_934faa4ec868cc21816f0fd4f587a0e6051a5893e5dcd0e01624c5dddd86d261 = $context["childName"]) && is_string($__internal_9384f6911a842a3f31379138f6c08f3e3032a2ac6bc68234553789b57db65186 = ".") && ('' === $__internal_9384f6911a842a3f31379138f6c08f3e3032a2ac6bc68234553789b57db65186 || 0 === strpos($__internal_934faa4ec868cc21816f0fd4f587a0e6051a5893e5dcd0e01624c5dddd86d261, $__internal_9384f6911a842a3f31379138f6c08f3e3032a2ac6bc68234553789b57db65186)))) {
                // line 58
                echo "                                                        ";
                $context["childKey"] = trim($context["childName"], ".");
                // line 59
                echo "                                                        ";
                $context["childValue"] = $this->getAttribute((isset($context["val"]) ? $context["val"] : null), twig_slice($this->env, $context["childName"], 1, null), array(), "array");
                // line 60
                echo "                                                        ";
                $context["childDefault"] = $this->getAttribute((isset($context["default_value"]) ? $context["default_value"] : null), twig_slice($this->env, $context["childName"], 1, null), array(), "array");
                // line 61
                echo "                                                        ";
                $context["childName"] = ((((isset($context["name"]) ? $context["name"] : null) . ".") . (isset($context["key"]) ? $context["key"] : null)) . $context["childName"]);
                // line 62
                echo "                                                    ";
            } else {
                // line 63
                echo "                                                        ";
                $context["childKey"] = $context["childName"];
                // line 64
                echo "                                                        ";
                $context["childValue"] = $this->env->getExtension('GantryTwig')->nestedFunc((isset($context["data"]) ? $context["data"] : null), ((isset($context["scope"]) ? $context["scope"] : null) . $context["childName"]));
                // line 65
                echo "                                                        ";
                $context["childDefault"] = $this->env->getExtension('GantryTwig')->nestedFunc((isset($context["defaults"]) ? $context["defaults"] : null), ((isset($context["scope"]) ? $context["scope"] : null) . $context["childName"]));
                // line 66
                echo "                                                        ";
                $context["childName"] = twig_replace_filter($context["childName"], array("*" => (isset($context["key"]) ? $context["key"] : null)));
                // line 67
                echo "                                                    ";
            }
            // line 68
            echo "                                                    ";
            if (((!twig_in_filter($context["childName"], (isset($context["skip"]) ? $context["skip"] : null)) &&  !$this->getAttribute($context["child"], "skip", array())) && ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()) != (isset($context["childKey"]) ? $context["childKey"] : null)))) {
                // line 69
                echo "                                                         ";
                if (($this->getAttribute($context["child"], "type", array()) == "key")) {
                    // line 70
                    echo "                                                             ";
                    $this->loadTemplate("forms/fields/key/key.html.twig", "forms/fields/collection/list.html.twig", 70)->display(array_merge($context, array("name" =>                     // line 71
$context["childName"], "field" => $context["child"], "value" => (isset($context["key"]) ? $context["key"] : null))));
                    // line 72
                    echo "                                                         ";
                } elseif ($this->getAttribute($context["child"], "type", array())) {
                    // line 73
                    echo "                                                             ";
                    $this->loadTemplate(array(0 => (("forms/fields/" . twig_replace_filter($this->getAttribute($context["child"], "type", array()), ".", "/")) . ".html.twig"), 1 => "forms/fields/unknown/unknown.html.twig"), "forms/fields/collection/list.html.twig", 73)->display(array_merge($context, array("name" =>                     // line 74
$context["childName"], "field" => $context["child"], "value" => (isset($context["childValue"]) ? $context["childValue"] : null), "default_value" => (isset($context["childDefault"]) ? $context["childDefault"] : null))));
                    // line 75
                    echo "                                                        ";
                }
                // line 76
                echo "                                                    ";
            }
            // line 77
            echo "                                                ";
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
        // line 78
        echo "                                            </div>
                                        ";
    }

    public function getTemplateName()
    {
        return "forms/fields/collection/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  411 => 78,  397 => 77,  394 => 76,  391 => 75,  389 => 74,  387 => 73,  384 => 72,  382 => 71,  380 => 70,  377 => 69,  374 => 68,  371 => 67,  368 => 66,  365 => 65,  362 => 64,  359 => 63,  356 => 62,  353 => 61,  350 => 60,  347 => 59,  344 => 58,  341 => 57,  324 => 56,  321 => 55,  318 => 54,  310 => 96,  300 => 94,  296 => 93,  291 => 90,  287 => 89,  282 => 88,  278 => 87,  274 => 86,  269 => 83,  254 => 81,  251 => 80,  248 => 54,  241 => 51,  237 => 50,  228 => 49,  223 => 48,  221 => 47,  216 => 46,  213 => 45,  196 => 44,  194 => 43,  192 => 42,  189 => 41,  182 => 37,  176 => 35,  166 => 33,  163 => 32,  160 => 31,  155 => 98,  153 => 41,  149 => 40,  146 => 39,  144 => 31,  141 => 30,  138 => 29,  135 => 28,  129 => 100,  126 => 28,  121 => 26,  114 => 25,  112 => 24,  107 => 23,  104 => 22,  101 => 21,  98 => 20,  94 => 18,  76 => 14,  64 => 11,  60 => 9,  43 => 8,  40 => 7,  37 => 6,  34 => 5,  30 => 1,  28 => 3,  22 => 1,);
    }
}
/* {% extends 'forms/' ~ layout|default('field') ~ '.html.twig' %}*/
/* {# If values contains a plain list of items, we need to reindex them. #}*/
/* {% set value = not field.key and value is iterable and value|length ? value|values : value|default(field.default) %}*/
/* */
/* {% block field %}*/
/*     {% if field.is_current %}*/
/*         <div class="g-grid">*/
/*             {% for key, val in value %}*/
/*                 <div class="card settings-block">*/
/*                     <h4>*/
/*                         <span data-title-editable="{{ (field.value == field.key ? key : val[field.value])|e }}" data-collection-key="{{ (prefix ~ '.' ~ key ~ '.' ~ field.value)|fieldName|e }}" class="title">{{ (field.value == field.key ? key : val[field.value])|e }}</span> <i class="fa fa-pencil font-small"  tabindex="0" aria-label="{{ 'GANTRY5_PLATFORM_EDIT_TITLE'|trans|replace({'%s': (field.value == field.key ? key : val[field.value])|e}) }}" data-title-edit></i>*/
/*                     </h4>*/
/*                     <div class="inner-params">*/
/*                         {{ block('collection_fields') }}*/
/*                     </div>*/
/*                 </div>*/
/*             {% endfor %}*/
/*         </div>*/
/*     {% else %}*/
/*         {% set can_reorder = field.reorder is defined ? field.reorder : true %}*/
/*         {% set can_remove = field.deletion is defined ? field.deletion : true %}*/
/*         {% set can_addnew = field.add_new is defined ? field.add_new : true %}*/
/*         <div class="settings-param {{ field.type|replace('.', '-')|e }}">*/
/*             {% if overrideable and (field.overridable is not defined or field.overridable == true) and field.type != 'container.set' %}*/
/*                 <input type="checkbox" class="settings-param-toggle" id="of-{{ (scope ~ name)|e }}"{{ value != default_value ? ' checked="checked"' }} />*/
/*                 <label class="settings-param-override" for="of-{{ (scope ~ name)|e }}"></label>*/
/*             {% endif %}*/
/*             {% block contents %}*/
/*                 {% set field_route = (route ~ '.' ~ scope ~ '.' ~ field.name)|replace('.', '/') %}*/
/*                     <span class="settings-param-title float-left">*/
/*                     {% block label %}*/
/*                         {% if field.description %}*/
/*                             <span aria-label="{{ field.description|e }}" data-tip="{{ field.description|raw }}" data-tip-place="top-right">{{ field.label|e }}</span>*/
/*                         {% else %}*/
/*                             {{ field.label|e }}*/
/*                         {% endif %}*/
/*                         {{ field.validate.required in ['on', 'true', 1] ? '<span class="required">*</span>' }}*/
/*                     {% endblock %}*/
/*                 </span>*/
/*                 <div class="settings-param-field" data-field-name="{{ field.name|e }}">*/
/*                     {% block input -%}*/
/*                         <ul>*/
/*                         {%- if field.fields -%}*/
/*                                 {% for key, val in value %}*/
/*                                     {% if (field.ajax == true) %}*/
/*                                         <li data-collection-item="{{ field.value|e }}">*/
/*                                             {% set itemValue = field.value == field.key ? key : val[field.value] %}*/
/*                                             {% if can_reorder %}<i class="fa fa-reorder font-small item-reorder"></i>{% endif %}*/
/*                                             <a class="config-cog" href="{{ gantry.route(field_route ~ '/' ~ key)|e }}"><span data-title-editable="{{ itemValue|e }}" class="title">{{ itemValue|e }}</span></a>*/
/*                                             {% if can_remove %}<i class="fa fa-fw fa-trash font-small" data-collection-remove=""></i>{% endif %}*/
/*                                             <i class="fa fa-fw fa-pencil font-small" tabindex="0" aria-label="{{ 'GANTRY5_PLATFORM_EDIT_TITLE'|trans|replace({'%s': itemValue|e}) }}" data-title-edit=""></i>*/
/*                                         </li>*/
/*                                     {% else %}*/
/*                                         {% block collection_fields %}*/
/*                                             <div data-g5-collections="">*/
/*                                                 {% for childName, child in field.fields %}*/
/*                                                     {% if childName starts with '.' %}*/
/*                                                         {% set childKey = childName|trim('.') %}*/
/*                                                         {% set childValue = val[childName[1:]] %}*/
/*                                                         {% set childDefault = default_value[childName[1:]] %}*/
/*                                                         {% set childName = name ~ '.' ~ key ~ childName %}*/
/*                                                     {% else %}*/
/*                                                         {% set childKey = childName %}*/
/*                                                         {% set childValue = nested(data, scope ~ childName) %}*/
/*                                                         {% set childDefault = nested(defaults, scope ~ childName) %}*/
/*                                                         {% set childName = childName|replace({'*': key}) %}*/
/*                                                     {% endif %}*/
/*                                                     {% if childName not in skip and not child.skip and field.value != childKey %}*/
/*                                                          {% if child.type == 'key' %}*/
/*                                                              {% include 'forms/fields/key/key.html.twig'*/
/*                                                              with {name: childName, field: child, value: key} %}*/
/*                                                          {% elseif child.type %}*/
/*                                                              {% include ["forms/fields/" ~ child.type|replace('.', '/') ~ ".html.twig", 'forms/fields/unknown/unknown.html.twig']*/
/*                                                              with {name: childName, field: child, value: childValue, default_value: childDefault} %}*/
/*                                                         {% endif %}*/
/*                                                     {% endif %}*/
/*                                                 {% endfor %}*/
/*                                             </div>*/
/*                                         {% endblock %}*/
/*                                     {% endif %}*/
/*                                 {% endfor %}*/
/*                         {%- endif -%}*/
/*                     </ul>*/
/*                     <div>*/
/*                         <ul style="display: none">*/
/*                             <li data-collection-nosort data-collection-template="{{ field.value|e }}" style="display: none;">*/
/*                                 {% if can_reorder %}<i class="fa fa-reorder font-small item-reorder"></i>{% endif %}*/
/*                                 <a class="config-cog" href="{{ gantry.route(field_route ~ '/%id%')|e }}"><span data-title-editable="New item" class="title">New item</span></a>*/
/*                                 {% if can_remove %}<i class="fa fa-fw fa-trash font-small" data-collection-remove=""></i>{% endif %}*/
/*                                 <i class="fa fa-fw fa-pencil font-small" data-title-edit=""></i>*/
/*                             </li>*/
/*                         </ul>*/
/*                         {% if can_addnew %}<span class="collection-addnew button button-simple" data-collection-addnew="" title="Add new item"><i class="fa fa-plus font-small"></i></span>{% endif %}*/
/*                         <a href="{{ gantry.route(field_route)|e }}" class="collection-editall button button-simple" data-collection-editall="" title="Edit all items" {% if value|length <= 1 %}style="display: none;"{% endif %}><i class="fa fa-th-large font-small"></i></a>*/
/*                     </div>*/
/*                     <input data-collection-data="" name="{{ (scope ~ name ~ '._json')|fieldName|e }}" type="hidden" value="{{ value|default({})|json_encode(constant('JSON_UNESCAPED_SLASHES'))|e('html_attr') }}"/>*/
/*                     {% endblock %}*/
/*                 </div>*/
/*             {% endblock %}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
