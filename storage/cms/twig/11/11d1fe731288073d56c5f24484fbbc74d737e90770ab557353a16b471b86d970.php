<?php

/* C:\Users\ruanl\Desktop\restaurant-planner/themes/rainlab-vanilla/pages/home.htm */
class __TwigTemplate_a389f14ac68c1fae85cfb9a20f5d22ec6f6c9a396a1faf4feb866e3c2d84b56e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["dias"] = twig_get_attribute($this->env, $this->source, ($context["dias"] ?? null), "records", array());
        // line 2
        $context["ing"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "records", array());
        // line 3
        echo "
<!-- Button trigger modal -->


<!-- Modal -->
";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dias"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["dia"]) {
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["dia"], "pratos", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["prato"]) {
                // line 10
                echo "
<div class=\"modal fade\" id=\"exampleModal";
                // line 11
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prato"], "id", array()), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
  aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ingredientes</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\" style=\"text-align:center;\">
        <img src=\"";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["prato"], "foto", array()), "path", array()), "html", null, true);
                echo "\" class=\"img-responsive\" style=\"display: block;
                    margin-left: auto;
                    margin-right: auto;
                    margin-bottom: 10px;
                    max-width: 200px;
                    max-height: 200px;\"/>
        ";
                // line 28
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["prato"], "ingredientes", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["prat"]) {
                    // line 29
                    echo "        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["prat"], "ingrediente", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["prati"]) {
                        // line 30
                        echo "        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["ing"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["ingg"]) {
                            // line 31
                            echo "        ";
                            if ((twig_get_attribute($this->env, $this->source, $context["ingg"], "id", array()) == $context["prati"])) {
                                // line 32
                                echo "        <p>";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ingg"], "nome", array()), "html", null, true);
                                echo "</p>
        ";
                            }
                            // line 34
                            echo "        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ingg'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 35
                        echo "
        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prati'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 37
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prat'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fechar</button>
      </div>
    </div>
  </div>
</div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prato'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dia'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "


<div class=\"row responsive \">
  ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dias"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["dia"]) {
            // line 53
            echo "  <div class=\"thumbnail text-center teste\">
    <br />
    <img src=\"";
            // line 55
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/cardapio.png");
            echo "\" alt=\"RainLab.User\" />
    <div class=\"caption\">
      <h3>";
            // line 57
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dia"], "dia", array()), "d/m/Y"), "html", null, true);
            echo "</h3>
      ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["dia"], "pratos", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["prato"]) {
                // line 59
                echo "      <p><a data-toggle=\"modal\" data-target=\"#exampleModal";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prato"], "id", array()), "html", null, true);
                echo "\" style=\"color: #000; text-decoration: none;\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source,                 // line 60
$context["prato"], "nome", array()), "html", null, true);
                echo "</a></p>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prato'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "    </div>
  </div>

  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dia'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\ruanl\\Desktop\\restaurant-planner/themes/rainlab-vanilla/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 66,  167 => 62,  159 => 60,  155 => 59,  151 => 58,  147 => 57,  142 => 55,  138 => 53,  134 => 52,  128 => 48,  110 => 38,  104 => 37,  97 => 35,  91 => 34,  85 => 32,  82 => 31,  77 => 30,  72 => 29,  68 => 28,  59 => 22,  45 => 11,  42 => 10,  38 => 9,  34 => 8,  27 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set dias = dias.records %}
{% set ing = builderList.records %}

<!-- Button trigger modal -->


<!-- Modal -->
{% for dia in dias %}
{% for prato in dia.pratos %}

<div class=\"modal fade\" id=\"exampleModal{{prato.id}}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
  aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ingredientes</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\" style=\"text-align:center;\">
        <img src=\"{{ prato.foto.path }}\" class=\"img-responsive\" style=\"display: block;
                    margin-left: auto;
                    margin-right: auto;
                    margin-bottom: 10px;
                    max-width: 200px;
                    max-height: 200px;\"/>
        {% for prat in prato.ingredientes %}
        {% for prati in prat.ingrediente %}
        {% for ingg in ing %}
        {% if ingg.id == prati %}
        <p>{{ ingg.nome }}</p>
        {% endif %}
        {% endfor %}

        {% endfor%}
        {% endfor %}

      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fechar</button>
      </div>
    </div>
  </div>
</div>
{% endfor %}
{% endfor %}



<div class=\"row responsive \">
  {% for dia in dias %}
  <div class=\"thumbnail text-center teste\">
    <br />
    <img src=\"{{ 'assets/images/cardapio.png'|theme }}\" alt=\"RainLab.User\" />
    <div class=\"caption\">
      <h3>{{ dia.dia |date(\"d/m/Y\") }}</h3>
      {% for prato in dia.pratos %}
      <p><a data-toggle=\"modal\" data-target=\"#exampleModal{{prato.id}}\" style=\"color: #000; text-decoration: none;\"> {{
          prato.nome }}</a></p>
      {% endfor %}
    </div>
  </div>

  {% endfor %}
</div>", "C:\\Users\\ruanl\\Desktop\\restaurant-planner/themes/rainlab-vanilla/pages/home.htm", "");
    }
}
