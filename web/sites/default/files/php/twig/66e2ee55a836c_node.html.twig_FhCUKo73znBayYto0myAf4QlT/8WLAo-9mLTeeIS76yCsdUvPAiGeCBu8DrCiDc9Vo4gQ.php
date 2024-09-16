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

/* themes/contrib/thex/templates/content/node.html.twig */
class __TwigTemplate_0881eb76d011294bf0dcf5f554c2aa6f extends Template
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
        // line 70
        $context["node_classes"] = ["node", ("node-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,         // line 72
($context["node"] ?? null), "bundle", [], "any", false, false, true, 72), 72, $this->source))), ((CoreExtension::getAttribute($this->env, $this->source,         // line 73
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 73)) ? ("node-promoted") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 74
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 74)) ? ("node-sticky") : ("")), (( !CoreExtension::getAttribute($this->env, $this->source,         // line 75
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 75)) ? ("node-unpublished") : ("")), ((        // line 76
($context["view_mode"] ?? null)) ? (("node-view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 76, $this->source)))) : (""))];
        // line 79
        yield "<article";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["node_classes"] ?? null)], "method", false, false, true, 79), 79, $this->source), "html", null, true);
        yield ">
";
        // line 80
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 80, $this->source), "html", null, true);
        yield "
  ";
        // line 81
        if ( !($context["page"] ?? null)) {
            // line 82
            yield "    <h2";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", ["node-title"], "method", false, false, true, 82), 82, $this->source), "html", null, true);
            yield ">
      <a href=\"";
            // line 83
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 83, $this->source), "html", null, true);
            yield "\" rel=\"bookmark\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 83, $this->source), "html", null, true);
            yield "</a>
    </h2>
  ";
        }
        // line 86
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 86, $this->source), "html", null, true);
        yield "

";
        // line 88
        if (($context["display_submitted"] ?? null)) {
            // line 89
            yield "  <header class=\"node-header clear\">
    ";
            // line 90
            if (($context["node_author_pic"] ?? null)) {
                // line 91
                yield "      <div class=\"author-picture\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null), 91, $this->source), "html", null, true);
                yield "</div>
    ";
            }
            // line 93
            yield "    <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["author_attributes"] ?? null), "addClass", ["node-submitted-details"], "method", false, false, true, 93), 93, $this->source), "html", null, true);
            yield ">
      ";
            // line 94
            $context["createdDate"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "getCreatedTime", [], "any", false, false, true, 94), 94, $this->source), "j F Y");
            // line 95
            yield "      ";
            yield t("<span>@author_name</span> <span>@createdDate</span>", array("@author_name" => ($context["author_name"] ?? null), "@createdDate" => ($context["createdDate"] ?? null), ));
            // line 96
            yield "      ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 96, $this->source), "html", null, true);
            yield "
    </div>
  </header>
";
        }
        // line 100
        yield "  <div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", ["node-content clear"], "method", false, false, true, 100), 100, $this->source), "html", null, true);
        yield ">
    ";
        // line 101
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 101, $this->source), "html", null, true);
        yield "
  </div>
</article>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["node", "view_mode", "attributes", "title_prefix", "page", "title_attributes", "url", "label", "title_suffix", "display_submitted", "node_author_pic", "author_picture", "author_attributes", "author_name", "metadata", "content_attributes", "content"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/thex/templates/content/node.html.twig";
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
        return array (  116 => 101,  111 => 100,  103 => 96,  100 => 95,  98 => 94,  93 => 93,  87 => 91,  85 => 90,  82 => 89,  80 => 88,  75 => 86,  67 => 83,  62 => 82,  60 => 81,  56 => 80,  51 => 79,  49 => 76,  48 => 75,  47 => 74,  46 => 73,  45 => 72,  44 => 70,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/thex/templates/content/node.html.twig", "/var/www/html/web/themes/contrib/thex/templates/content/node.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 70, "if" => 81, "trans" => 95);
        static $filters = array("clean_class" => 72, "escape" => 79, "date" => 94);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'trans'],
                ['clean_class', 'escape', 'date'],
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
