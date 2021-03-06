<?php

/* themes/tripogater/partials/questionnaire/step2-carhire.html.twig */
class __TwigTemplate_e1f6673c1f49aa73b9b4ab6eb121d0b44be7c0181852822051705b3b295fd437 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 159
        echo "

  <div ng-show=\"quote == 'car_hire'\" class=\"step-2_car_hire\">

    <div class=\"row\">
      <div class=\"col-md-5\">

        <div class=\"form-group row\">
          <label for=\"ch-pickup-location\" class=\"col-md-5 col-form-label\">Pickup Location</label>
          <div class=\"col-md-7\">
            <input ng-model=\"step2.car_hire.car_hire_pickup_location.value\" ng-change=\"airports(step2.car_hire.car_hire_pickup_location.value)\" list=\"airportlistFrom\" class=\"form-control\" type=\"text\" value=\"\" id=\"ch-pickup-location\">
              <datalist ng-model=\"selected\" id=\"carlistFrom\">
                <option ng-repeat=\"result in airportsResults\" value=\"{{result['title']}}\"></option>
              </datalist>
          </div>
        </div>
        <div class=\"form-group row\">
          <label for=\"ch-drop-off-location\" class=\"col-md-5 col-form-label\">Drop off Location</label>
          <div class=\"col-md-7\">
            <input ng-model=\"step2.car_hire.car_hire_drop_off_location.value\" ng-change=\"airports(step2.car_hire.car_hire_drop_off_location.value)\" list=\"airportlistFrom\" class=\"form-control\" type=\"text\" value=\"\" id=\"ch-drop_off-location\">
              <datalist ng-model=\"selected\" id=\"carlistTo\">
                <option ng-repeat=\"result in airportsResults\" value=\"{{result['title']}}\"></option>
              </datalist>
          </div>
        </div>
        <div class=\"form-group row\">
          <label for=\"ch-pickup-date\" class=\"col-md-5 col-form-label\">Pickup Date</label>
          <div class=\"col-md-7\">
            <md-datepicker ng-model=\"step2.car_hire.car_hire_pickup_date.value\" md-placeholder=\"Enter date\" md-open-on-focus></md-datepicker>
          </div>
        </div>
        <div class=\"form-group row\">
          <label for=\"ch-pickup-time\" class=\"col-md-5 col-form-label\">Pickup Time</label>
          <div class=\"col-md-7 timepick\">
            <md-time-picker ng-model=\"step2.car_hire.car_hire_pickup_time.value\" message=\"message\" md-disable-backdrop=\"true\" no-meridiem no-auto-switch></md-time-picker>
          </div>
          <!-- <div class=\"input-group bootstrap-timepicker timepicker\">
            <input id=\"timepicker1\" type=\"text\" class=\"form-control input-small\">
            <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-time\"></i></span>
          </div> -->
        </div>
        <div class=\"form-group row\">
          <label for=\"ch-dropoff-date\" class=\"col-md-5 col-form-label\">Dropoff Date</label>
          <div class=\"col-md-7\">
            <md-datepicker ng-model=\"step2.car_hire.car_hire_drop_off_date.value\" md-placeholder=\"Enter date\" md-open-on-focus></md-datepicker>
          </div>
        </div>
        <div class=\"form-group row\">
          <label for=\"ch-dropoff-time\" class=\"col-md-5 col-form-label\">Dropoff Time</label>
          <div class=\"col-md-7 timepick\">
          <md-time-picker ng-model=\"step2.car_hire.car_hire_drop_off_time.value\" message=\"message\" no-meridiem no-auto-switch></md-time-picker>
          </div>
        </div>
        <div class=\"form-group row\">
          <label for=\"ch-number-of-passengers\" class=\"col-md-5 col-form-label\">Number of passengers</label>
          <div class=\"col-md-7\">
            <input class=\"form-control\" ng-click=\"showCabin(step2.car_hire.cabins, 0)\" ng-model=\"step2.car_hire.cabins.values[0].passenger_count.value\" type=\"text\" value=\"\" id=\"ch-number-of-passengers\">

            <div ng-if=\"step2.car_hire.cabins.values[0].passenger_show\" class=\"custom-modal\">
                  <p class=\"pass-label\">Adults</p>
                  <div class=\"input-group\">
                    <span class=\"input-group-btn\">
                        <button type=\"button\" ng-click=\"passengers_action(step2.car_hire.cabins.values[0].passenger_adult,'-',[step2.car_hire.cabins.values[0].passenger_count])\" class=\"btn btn-danger btn-number\" data-type=\"minus\" data-field=\"quant[2]\">
                          <span class=\"glyphicon glyphicon-minus\"></span>
                        </button>
                    </span>
                    <input type=\"text\" name=\"quant[2]\" ng-model=\"step2.car_hire.cabins.values[0].passenger_adult.value\" class=\"form-control input-number\" value=\"1\" min=\"1\" max=\"100\">
                    <span class=\"input-group-btn\">
                        <button type=\"button\" ng-click=\"passengers_action(step2.car_hire.cabins.values[0].passenger_adult,'+',[step2.car_hire.cabins.values[0].passenger_count])\" class=\"btn btn-success btn-number\" data-type=\"plus\" data-field=\"quant[2]\">
                            <span class=\"glyphicon glyphicon-plus\"></span>
                        </button>
                    </span>
                  </div>
                  <p class=\"pass-label\">Children</p>
                  <div class=\"age-explanation\">
                    <p class=\"hidden-explanation\">A child 12 years and over is considered an adult, less than 12  and up to 2 is considered a child , under 2 is an infant.</p>
                  </div>
                  <div class=\"input-group\">
                    <span class=\"input-group-btn\">
                        <button type=\"button\" ng-click=\"passengers_action(step2.car_hire.cabins.values[0].passenger_children,'-',[step2.car_hire.cabins.values[0].passenger_count])\" class=\"btn btn-default btn-number\" data-type=\"minus\" data-field=\"quant[1]\">
                            <span class=\"glyphicon glyphicon-minus\"></span>
                        </button>
                    </span>
                    <input type=\"text\" name=\"quant[1]\" ng-model=\"step2.car_hire.cabins.values[0].passenger_children.value\" class=\"form-control input-number\" value=\"1\" min=\"1\" max=\"10\">
                    <span class=\"input-group-btn\">
                        <button type=\"button\" ng-click=\"passengers_action(step2.car_hire.cabins.values[0].passenger_children,'+',[step2.car_hire.cabins.values[0].passenger_count])\" class=\"btn btn-default btn-number\" data-type=\"plus\" data-field=\"quant[1]\">
                            <span class=\"glyphicon glyphicon-plus\"></span>
                        </button>
                    </span>
                  </div>
                  <div ng-repeat=\"child in step2.car_hire.cabins.values[0].passenger_children.age track by \$index\" class=\"age-of-child\">
                    <label for=\"age-of-child\" class=\"col-form-label\">Age of child <span>{{\$index + 1}}</span></label>
                    <select ng-model=\"step2.car_hire.cabins.values[0].passenger_children.age[\$index]\">
                      <option value=\"1\">1</option>
                      <option value=\"2\">2</option>
                      <option value=\"3\">3</option>
                      <option value=\"4\">4</option>
                      <option value=\"5\">5</option>
                      <option value=\"6\">6</option>
                      <option value=\"7\">7</option>
                      <option value=\"8\">8</option>
                      <option value=\"9\">9</option>
                      <option value=\"10\">10</option>
                      <option value=\"11\">11</option>
                      <option value=\"12\">12</option>
                      <option value=\"13\">13</option>
                      <option value=\"13\">14</option>
                      <option value=\"13\">15</option>
                    </select>
                  </div><!--/age-of-child-->
                </div>
          </div>
        </div>

      </div><!--/col-md-5-->

      <div class=\"col-md-5 col-md-offset-2\">

        <div class=\"form-group row\">
          <label class=\"col-md-5 col-form-label\" for=\"ch-type-of-vehicle\">Other Information</label>
          <div id=\"ch-type-of-vehicle\" class=\"col-md-7\">
            <div class=\"checkbox\">
              <label><input value=\"sedan\" ng-model=\"step2.car_hire.car_hire_type_of_vehicle.value.sedan\" type=\"checkbox\">Sedan</label>
            </div>
            <div class=\"checkbox\">
              <label><input value=\"van\" ng-model=\"step2.car_hire.car_hire_type_of_vehicle.value.van\" type=\"checkbox\">Van</label>
            </div>
            <div class=\"checkbox\">
              <label><input value=\"mini bus\" ng-model=\"step2.car_hire.car_hire_type_of_vehicle.value.mini_bus\" type=\"checkbox\">Mini Bus</label>
            </div>
            <div class=\"checkbox\">
              <label><input value=\"luxury / convertible\" ng-model=\"step2.car_hire.car_hire_type_of_vehicle.value.luxury_convertible\" type=\"checkbox\">Luxury / Convertible</label>
            </div>
            <div class=\"checkbox\">
              <label><input value=\"cheapest option\" ng-model=\"step2.car_hire.car_hire_type_of_vehicle.value.cheapest_option\" type=\"checkbox\">Cheapest Option</label>
            </div>
          </div><!--/cruise-cabin-selection-->
        </div><!--/form-group-->

        <div class=\"form-group row\">
          <label for=\"ch-number-of-cars\" class=\"col-md-5 col-form-label\">Number of Cars</label>
          <div class=\"col-md-7\">
            <input class=\"form-control\" ng-model=\"step2.car_hire.car_hire_number_of_cars.value\" type=\"text\" value=\"\" id=\"ch-number-of-cars\">
          </div>
        </div>
        <div class=\"form-group row\">
          <label for=\"ch-other\" class=\"col-md-5 col-form-label\">Other</label>
          <div class=\"col-md-7\">
            <input class=\"form-control\" ng-model=\"step2.car_hire.car_hire_other.value\" type=\"text\" value=\"car seats, roof racks\" id=\"ch-other\">
          </div>
        </div>

      </div>

    </div><!--/row-->

  </div>

";
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/tripogater/partials/questionnaire/step2-carhire.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 159,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/tripogater/partials/questionnaire/step2-carhire.html.twig", "/var/www/html/dev/themes/tripogater/partials/questionnaire/step2-carhire.html.twig");
    }
}
