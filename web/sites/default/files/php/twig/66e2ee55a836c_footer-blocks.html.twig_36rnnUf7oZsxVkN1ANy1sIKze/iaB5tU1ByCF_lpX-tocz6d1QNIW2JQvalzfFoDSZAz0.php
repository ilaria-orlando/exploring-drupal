<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @thex/template-parts/footer/footer-blocks.html.twig */
class __TwigTemplate_2876148ed89672c0d52e66607b3b4a2f extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<footer class=\"footer-blocks footer\">
  <div class=\"container\">
    <div class=\"footer-blocks-container\">
      ";
        // line 4
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_one", [], "any", false, false, true, 4)) {
            // line 5
            yield "        <div class=\"footer-block footer-one\">
          ";
            // line 6
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_one", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
            yield "
        </div>
      ";
        }
        // line 9
        yield "      ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_two", [], "any", false, false, true, 9)) {
            // line 10
            yield "        <div class=\"footer-block footer-two\">
          ";
            // line 11
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_two", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            yield "
        </div>
      ";
        }
        // line 14
        yield "      ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_three", [], "any", false, false, true, 14)) {
            // line 15
            yield "        <div class=\"footer-block footer-three\">
          ";
            // line 16
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_three", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
            yield "
        </div>
      ";
        }
        // line 19
        yield "      ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_four", [], "any", false, false, true, 19)) {
            // line 20
            yield "        <div class=\"footer-block footer-four\">
          ";
            // line 21
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_four", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
            yield "
        </div>
      ";
        }
        // line 24
        yield "    </div><!-- /footer-top-container -->
  </div><!-- /container -->
</footer><!-- /footer-top -->
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@thex/template-parts/footer/footer-blocks.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  96 => 24,  90 => 21,  87 => 20,  84 => 19,  78 => 16,  75 => 15,  72 => 14,  66 => 11,  63 => 10,  60 => 9,  54 => 6,  51 => 5,  49 => 4,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@thex/template-parts/footer/footer-blocks.html.twig", "/var/www/html/web/themes/contrib/thex/templates/template-parts/footer/footer-blocks.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 4);
        static $filters = array("escape" => 6);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
