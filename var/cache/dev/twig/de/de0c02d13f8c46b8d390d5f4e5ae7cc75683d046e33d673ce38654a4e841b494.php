<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* main/index.html.twig */
class __TwigTemplate_63184cedf43bc75ff375821f766af4df04a98a9374bde5072a38973f10bcb4fc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello MainController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css\">

    <style>
        #poruka {
            border: 1px solid black;
            margin: 10px;
            padding: 5px;
            height: 30px;
        }

        #komande {
            border: 2px solid black;
            width: 220px;
            padding: 10px;
            margin: 10px;
        }

        #komande button {
            width: 40%;
            margin: 5px;
        }

        #komande input {
            width: 100%;
            margin-bottom: 10px;
        }

        #komande label {
            margin-bottom: 0px;
        }

    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 39
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 40
        echo "    <div id=\"poruka\"></div>

    <div class=\"row container\">
        <div id=\"komande\">
            <label for=\"customerID\">ID</label>
            <input id=\"customerID\" type=\"number\" value=\"1\" />

            <button id=\"customerDeleteID\">Delete</button>
            <button id=\"GetID\">Get</button>

            <label for=\"customerFN\">FirstName</label>
            <input id=\"customerFN\" type=\"text\"/>

            <label for=\"customerLN\">LastName</label>
            <input id=\"customerLN\" type=\"text\" />

            <label for=\"customerEmail\">Email</label>
            <input id=\"customerEmail\" type=\"text\" />

            <label for=\"customerPhone\">Phone</label>
            <input id=\"customerPhone\" type=\"text\" />

            <button id=\"customerPostID\">Add</button>
            <button id=\"customerPutID\">Update</button>
        </div>

        <div id=\"tabela\"></div>
    </div>

    <hr />

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 73
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 74
        echo "    <script>
        \$(document).ready(function () {
            GetAll();
        });

        \$(document.body)
            .on(\"click\", \".table tr:not(:first-child)\", function () {
            var id = \$(this).children(':nth-child(1)').text();
            var fn = \$(this).children(':nth-child(2)').text();
            var ln = \$(this).children(':nth-child(3)').text();
            var email = \$(this).children(':nth-child(4)').text();
            var pn = \$(this).children(':nth-child(5)').text();
            \$(\"#customerID\").val(id);
            \$(\"#customerFN\").val(fn);
            \$(\"#customerLN\").val(ln);
            \$(\"#customerEmail\").val(email);
            \$(\"#customerPhone\").val(pn);
            \$(\"#poruka\").text('Klik na tabelu ne koristi bazu.');
        });

        function GetAll() {
            \$.ajax({
                url: './customer/get-all',
                type: 'GET',
                dataType: 'json',
                success: function (data) {
                    var strResult = \"<table class='table table-hover'><tr><th>ID</th><th>FirstName</th><th>LastName</th><th>Email</th><th>Phone</th></tr>\";
                    \$.each(data.customers, function (index, customer) {
                        strResult += \"<tr><td>\" + customer.id + \"</td><td>\" + customer.firstName + \"</td><td>\" + customer.lastName + \"</td><td>\" + customer.email + \"</td><td>\" + customer.phoneNumber + \"</td></tr>\";
                    });

                    strResult += \"</table>\";

                    \$(\"#tabela\").html(strResult);
                    //\$(\"#poruka\").text(\"Uspesno su ocitani svi podaci iz tabele.\");
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    \$(\"#poruka\").text('Greska! Meni nije ucitan. ' + jqXHR.status + \" - \" + errorThrown);
                }
            });

        }

        \$('#GetID').click(function () {
            var customerID = \$('#customerID').val().toString();
            \$('#komande input').val('');
            \$.ajax({
                url: './customer/get/' + customerID,
                type: 'GET',
                dataType: 'json',
                success: function (data) {
                    \$(\"#poruka\").text('Get: Stavka ' + customerID + ' je uspesno ucitana.');

                    \$('#customerID').val(data.customer.id);
                    \$('#customerFN').val(data.customer.firstName);
                    \$('#customerLN').val(data.customer.lastName);
                    \$('#customerEmail').val(data.customer.email);
                    \$('#customerPhone').val(data.customer.phoneNumber);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    \$(\"#poruka\").text('Get: Greska! Stavka nije ucitana.' + jqXHR.status + \" - \" + errorThrown);
                }
            });

        });

        \$('#customerPostID').click(function () {
            var cData = {
                firstName: \$('#customerFN').val(),
                lastName: \$('#customerLN').val(),
                email: \$('#customerEmail').val(),
                phoneNumber: \$('#customerPhone').val()
            };

            \$.ajax({
                url: './customer/add',
                type: 'POST',
                data: JSON.stringify(cData),
                contentType: \"application/json;charset=utf-8\",
                success: function (data) {
                    GetAll();
                    \$(\"#poruka\").text('Add: Stavka je uspesno dodata.');
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    \$(\"#poruka\").text('Add: Greska! Stavka nije dodata. ' + jqXHR.status + \" - \" + errorThrown);
                }
            });
        });

        \$('#customerPutID').click(function () {
            var customerID = \$('#customerID').val().toString();
            var cData = {
                id: \$('#customerID').val(),
                firstName: \$('#customerFN').val(),
                lastName: \$('#customerLN').val(),
                email: \$('#customerEmail').val(),
                phoneNumber: \$('#customerPhone').val()
            };

            \$.ajax({
                url: './customer/update/' + customerID,
                type: 'PUT',
                data: JSON.stringify(cData),
                contentType: \"application/json;charset=utf-8\",
                success: function (data) {
                    GetAll();
                    \$(\"#poruka\").text('Update: Stavka je uspesno promenjena.');
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    \$(\"#poruka\").text('Update: Greska! Stavka nije promenjena. ' + jqXHR.status + \" - \" + errorThrown);
                }
            });
        });

        \$('#customerDeleteID').click(function () {
            var customerID = \$('#customerID').val().toString();
            \$.ajax({
                url: './customer/delete/' + customerID,
                type: 'DELETE',
                dataType: 'json',
                success: function (data) {
                    GetAll();
                    \$(\"#poruka\").text('Delete: Stavka ' + customerID + ' je izbrisana.');
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    \$(\"#poruka\").text('Delete: Greska! Trazena stavka nije izbrisana. ' + jqXHR.status + \" - \" + errorThrown);
                }
            });
        });



    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 74,  183 => 73,  142 => 40,  132 => 39,  90 => 5,  80 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello MainController!{% endblock %}
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css\">

    <style>
        #poruka {
            border: 1px solid black;
            margin: 10px;
            padding: 5px;
            height: 30px;
        }

        #komande {
            border: 2px solid black;
            width: 220px;
            padding: 10px;
            margin: 10px;
        }

        #komande button {
            width: 40%;
            margin: 5px;
        }

        #komande input {
            width: 100%;
            margin-bottom: 10px;
        }

        #komande label {
            margin-bottom: 0px;
        }

    </style>
{% endblock %}

{% block body %}
    <div id=\"poruka\"></div>

    <div class=\"row container\">
        <div id=\"komande\">
            <label for=\"customerID\">ID</label>
            <input id=\"customerID\" type=\"number\" value=\"1\" />

            <button id=\"customerDeleteID\">Delete</button>
            <button id=\"GetID\">Get</button>

            <label for=\"customerFN\">FirstName</label>
            <input id=\"customerFN\" type=\"text\"/>

            <label for=\"customerLN\">LastName</label>
            <input id=\"customerLN\" type=\"text\" />

            <label for=\"customerEmail\">Email</label>
            <input id=\"customerEmail\" type=\"text\" />

            <label for=\"customerPhone\">Phone</label>
            <input id=\"customerPhone\" type=\"text\" />

            <button id=\"customerPostID\">Add</button>
            <button id=\"customerPutID\">Update</button>
        </div>

        <div id=\"tabela\"></div>
    </div>

    <hr />

{% endblock %}

{% block javascripts %}
    <script>
        \$(document).ready(function () {
            GetAll();
        });

        \$(document.body)
            .on(\"click\", \".table tr:not(:first-child)\", function () {
            var id = \$(this).children(':nth-child(1)').text();
            var fn = \$(this).children(':nth-child(2)').text();
            var ln = \$(this).children(':nth-child(3)').text();
            var email = \$(this).children(':nth-child(4)').text();
            var pn = \$(this).children(':nth-child(5)').text();
            \$(\"#customerID\").val(id);
            \$(\"#customerFN\").val(fn);
            \$(\"#customerLN\").val(ln);
            \$(\"#customerEmail\").val(email);
            \$(\"#customerPhone\").val(pn);
            \$(\"#poruka\").text('Klik na tabelu ne koristi bazu.');
        });

        function GetAll() {
            \$.ajax({
                url: './customer/get-all',
                type: 'GET',
                dataType: 'json',
                success: function (data) {
                    var strResult = \"<table class='table table-hover'><tr><th>ID</th><th>FirstName</th><th>LastName</th><th>Email</th><th>Phone</th></tr>\";
                    \$.each(data.customers, function (index, customer) {
                        strResult += \"<tr><td>\" + customer.id + \"</td><td>\" + customer.firstName + \"</td><td>\" + customer.lastName + \"</td><td>\" + customer.email + \"</td><td>\" + customer.phoneNumber + \"</td></tr>\";
                    });

                    strResult += \"</table>\";

                    \$(\"#tabela\").html(strResult);
                    //\$(\"#poruka\").text(\"Uspesno su ocitani svi podaci iz tabele.\");
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    \$(\"#poruka\").text('Greska! Meni nije ucitan. ' + jqXHR.status + \" - \" + errorThrown);
                }
            });

        }

        \$('#GetID').click(function () {
            var customerID = \$('#customerID').val().toString();
            \$('#komande input').val('');
            \$.ajax({
                url: './customer/get/' + customerID,
                type: 'GET',
                dataType: 'json',
                success: function (data) {
                    \$(\"#poruka\").text('Get: Stavka ' + customerID + ' je uspesno ucitana.');

                    \$('#customerID').val(data.customer.id);
                    \$('#customerFN').val(data.customer.firstName);
                    \$('#customerLN').val(data.customer.lastName);
                    \$('#customerEmail').val(data.customer.email);
                    \$('#customerPhone').val(data.customer.phoneNumber);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    \$(\"#poruka\").text('Get: Greska! Stavka nije ucitana.' + jqXHR.status + \" - \" + errorThrown);
                }
            });

        });

        \$('#customerPostID').click(function () {
            var cData = {
                firstName: \$('#customerFN').val(),
                lastName: \$('#customerLN').val(),
                email: \$('#customerEmail').val(),
                phoneNumber: \$('#customerPhone').val()
            };

            \$.ajax({
                url: './customer/add',
                type: 'POST',
                data: JSON.stringify(cData),
                contentType: \"application/json;charset=utf-8\",
                success: function (data) {
                    GetAll();
                    \$(\"#poruka\").text('Add: Stavka je uspesno dodata.');
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    \$(\"#poruka\").text('Add: Greska! Stavka nije dodata. ' + jqXHR.status + \" - \" + errorThrown);
                }
            });
        });

        \$('#customerPutID').click(function () {
            var customerID = \$('#customerID').val().toString();
            var cData = {
                id: \$('#customerID').val(),
                firstName: \$('#customerFN').val(),
                lastName: \$('#customerLN').val(),
                email: \$('#customerEmail').val(),
                phoneNumber: \$('#customerPhone').val()
            };

            \$.ajax({
                url: './customer/update/' + customerID,
                type: 'PUT',
                data: JSON.stringify(cData),
                contentType: \"application/json;charset=utf-8\",
                success: function (data) {
                    GetAll();
                    \$(\"#poruka\").text('Update: Stavka je uspesno promenjena.');
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    \$(\"#poruka\").text('Update: Greska! Stavka nije promenjena. ' + jqXHR.status + \" - \" + errorThrown);
                }
            });
        });

        \$('#customerDeleteID').click(function () {
            var customerID = \$('#customerID').val().toString();
            \$.ajax({
                url: './customer/delete/' + customerID,
                type: 'DELETE',
                dataType: 'json',
                success: function (data) {
                    GetAll();
                    \$(\"#poruka\").text('Delete: Stavka ' + customerID + ' je izbrisana.');
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    \$(\"#poruka\").text('Delete: Greska! Trazena stavka nije izbrisana. ' + jqXHR.status + \" - \" + errorThrown);
                }
            });
        });



    </script>
{% endblock %}
", "main/index.html.twig", "E:\\000\\Symfony5---The-REST-the-CRUD-and-the-Swag\\templates\\main\\index.html.twig");
    }
}
