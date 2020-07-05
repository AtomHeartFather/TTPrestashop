<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__ff266d6d5234cec9a35583397d93379fffe8f9c47fec2fcf0c4ed7bddf5a94db */
class __TwigTemplate_1cdca1f02be7d02658be4e5e437cbc0c7d21e8233c1ec28de2ed7709d8461798 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"ru\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/ttprestashop/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/ttprestashop/img/app_icon.png\" />

<title>Управление модулями • Test Task</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminModulesManage';
    var iso_user = 'ru';
    var lang_is_rtl = '0';
    var full_language_code = 'ru-ru';
    var full_cldr_language_code = 'ru-RU';
    var country_iso_code = 'RU';
    var _PS_VERSION_ = '1.7.6.6';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'В вашем магазине появился новый заказ.';
    var order_number_msg = 'Номер заказа: ';
    var total_msg = 'Всего: ';
    var from_msg = 'С: ';
    var see_order_msg = 'Смотреть заказ';
    var new_customer_msg = 'Новый клиент зарегистрировался в вашем магазине.';
    var customer_name_msg = 'Имя клиента: ';
    var new_msg = 'Новая сообщение было отправлено в ваш магазин.';
    var see_msg = 'Прочитать это сообщение';
    var token = '045cf6ec279d7235643022769a4d0a53';
    var token_admin_orders = '5e2e56c18954553c154647956a2e7d45';
    var token_admin_customers = '4814adea49399e0d5122bb68d68a661b';
    var token_admin_customer_threads = 'e9d15ca6c738aa9a8b1935974a55f990';
    var currentIndex = 'index.php?controller=AdminModulesManage';
    var employee_token = '706f12eef2337d11c8da1fa3b6ae7daa';
    var choose_language_translate = 'Выберите язык';
    var default_language = '1';
    var admin_modules_link = '/ttprestashop/admin5456qeen5/index.php/improve/modules/catalog/recommended?_token=mK-GWpBEjRz2tN3l4F0y1UPutZhZqBuiXiDHFXOI8fk';
    var admin_notification_get_link = '/ttprestashop/admin5456qeen5/index.php/common/notifications?_token=mK-GWpBEjRz2tN3l4F0y1UPutZhZqBuiXiDHFXOI8fk';
    var admin_notification_push_link = '/ttprestashop/admin5456qeen5/index.php/common/notifications/ack?_token=mK-GWpBEjRz2tN3l4F0y1UPutZhZqBuiXiDHFXOI8fk';
    var tab_modules_list = '';
    var update_success_msg = 'Успешно обновлено';
    var errorLogin = 'PrestaShop не может войти в систему Addons, пожалуйста, проверьте свои данные и интернет-соединение.';
    var search_product_msg = 'Искать товар';
  </script>

      <link href=\"/ttprestashop/modules/welcome/public/module.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/ttprestashop/admin5456qeen5/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/ttprestashop/modules/emarketing/views/css/menuTabIcon.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/ttprestashop/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/ttprestashop/admin5456qeen5/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/ttprestashop/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/ttprestashop/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/ttprestashop\\/admin5456qeen5\\/\";
var baseDir = \"\\/ttprestashop\\/\";
var changeFormLanguageUrl = \"\\/ttprestashop\\/admin5456qeen5\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=mK-GWpBEjRz2tN3l4F0y1UPutZhZqBuiXiDHFXOI8fk\";
var currency = {\"iso_code\":\"RUB\",\"sign\":\"\\u20bd\",\"name\":\"\\u0420\\u043e\\u0441\\u0441\\u0438\\u0439\\u0441\\u043a\\u0438\\u0439 \\u0440\\u0443\\u0431\\u043b\\u044c\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"\\u043d\\u0435\\u00a0\\u0447\\u0438\\u0441\\u043b\\u043e\"],\"currencyCode\":\"RUB\",\"currencySymbol\":\"\\u20bd\",\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"\\u043d\\u0435\\u00a0\\u0447\\u0438\\u0441\\u043b\\u043e\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/ttprestashop/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/ttprestashop/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>
<script type=\"text/javascript\" src=\"/ttprestashop/modules/welcome/public/module.js\"></script>
<script type=\"text/javascript\" src=\"/ttprestashop/admin5456qeen5/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/ttprestashop/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/ttprestashop/js/admin.js?v=1.7.6.6\"></script>
<script type=\"text/javascript\" src=\"/ttprestashop/admin5456qeen5/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/ttprestashop/js/tools.js?v=1.7.6.6\"></script>
<script type=\"text/javascript\" src=\"/ttprestashop/admin5456qeen5/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/ttprestashop/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/ttprestashop/admin5456qeen5/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/ttprestashop/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/ttprestashop/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/ttprestashop/modules/ps_mbo/views/js/recommended-modules.js?v=2.0.1\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/ttprestashop/admin5456qeen5/index.php/common/notifications?_token=mK-GWpBEjRz2tN3l4F0y1UPutZhZqBuiXiDHFXOI8fk',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
<script>
            var admin_gamification_ajax_url = \"http:\\/\\/localhost\\/ttprestashop\\/admin5456qeen5\\/index.php?controller=AdminGamification&token=5b28a62ae4878c9414c3622e0912bed6\";
            var current_id_tab = 45;
        </script>

";
        // line 103
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>

<body class=\"lang-ru adminmodulesmanage\">

  <header id=\"header\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/ttprestashop/admin5456qeen5/index.php?controller=AdminDashboard&amp;token=ee1c8acee647f2447705405650ab99a5\"></a>
      <span id=\"shop_version\">1.7.6.6</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Быстрый доступ
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"http://localhost/ttprestashop/admin5456qeen5/index.php?controller=AdminOrders&amp;token=5e2e56c18954553c154647956a2e7d45\"
                 data-item=\"Заказы\"
      >Заказы</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/ttprestashop/admin5456qeen5/index.php/sell/catalog/categories/new?token=6d9335343da6108b4eba1840b425d8f0\"
                 data-item=\"Новая категория\"
      >Новая категория</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/ttprestashop/admin5456qeen5/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=aa4d824afad696887ff82692d7723a47\"
                 data-item=\"Новый купон\"
      >Новый купон</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/ttprestashop/admin5456qeen5/index.php/sell/catalog/products/new?token=6d9335343da6108b4eba1840b425d8f0\"
                 data-item=\"Новый товар\"
      >Новый товар</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/ttprestashop/admin5456qeen5/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=3ad26eeefff2ed74400944c5ec548161\"
                 data-item=\"Оценка каталога\"
      >Оценка каталога</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/ttprestashop/admin5456qeen5/index.php/improve/modules/manage?token=6d9335343da6108b4eba1840b425d8f0\"
                 data-item=\"Установленные модули\"
      >Установленные модули</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"56\"
        data-icon=\"icon-AdminModulesSf\"
        data-method=\"add\"
        data-url=\"index.php/improve/modules/manage?-GWpBEjRz2tN3l4F0y1UPutZhZqBuiXiDHFXOI8fk\"
        data-post-link=\"http://localhost/ttprestashop/admin5456qeen5/index.php?controller=AdminQuickAccesses&token=23610772271d8bb0dab7be914f090247\"
        data-prompt-text=\"Задайте название ярлыка:\"
        data-link=\"Модули - Список\"
      >
        <i class=\"material-icons\">add_circle</i>
        Добавить текущую страницу в Быстрый Доступ
      </a>
        <a class=\"dropdown-item\" href=\"http://localhost/ttprestashop/admin5456qeen5/index.php?controller=AdminQuickAccesses&token=23610772271d8bb0dab7be914f090247\">
      <i class=\"material-icons\">settings</i>
      Управление быстрым доступом
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/ttprestashop/admin5456qeen5/index.php?controller=AdminSearch&amp;token=5172adc53b9f18f0d82b8715c0391766\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Поиск (например, артикул, имя пользователя...)\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Везде
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Везде\" href=\"#\" data-value=\"0\" data-placeholder=\"Что вы ищете?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Везде</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Каталог\" href=\"#\" data-value=\"1\" data-placeholder=\"Название товара, артикул, ссылка...\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Каталог</a>
        <a class=\"dropdown-item\" data-item=\"Клиенты по имени\" href=\"#\" data-value=\"2\" data-placeholder=\"E-mail, имя...\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Клиенты по имени</a>
        <a class=\"dropdown-item\" data-item=\"Клиенты по IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Клиенты по IP-адресу</a>
        <a class=\"dropdown-item\" data-item=\"Заказы\" href=\"#\" data-value=\"3\" data-placeholder=\"№ заказа\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Заказы</a>
        <a class=\"dropdown-item\" data-item=\"По счетам\" href=\"#\" data-value=\"4\" data-placeholder=\"Номер накладной\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> По счетам</a>
        <a class=\"dropdown-item\" data-item=\"Корзины\" href=\"#\" data-value=\"5\" data-placeholder=\"ID Корзины\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Корзины</a>
        <a class=\"dropdown-item\" data-item=\"Модули\" href=\"#\" data-value=\"7\" data-placeholder=\"Название модуля\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Модули</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">Поиск</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
      </div>

      
      
      <div class=\"component\" id=\"header-shop-list-container\">
          <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/ttprestashop/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      Перейти в магазин
    </a>
  </div>
      </div>

              <div class=\"component header-right-component\" id=\"header-notifications-container\">
          <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Заказы<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Клиенты<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Сообщения<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Сейчас нет новых заказов :(<br>
              Давно проверяли вашу конверсию?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Пока нет новых клиентов :(<br>
              Были ли вы активны в соцсетях в эти дни?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Пока нет сообщений.<br>
              Нет новостей - уже хорошая новость, ведь так?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      c <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - зарегистрировано <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
        </div>
      
      <div class=\"component\" id=\"header-employee-container\">
        <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      
      <span class=\"employee_avatar\"><img class=\"avatar rounded-circle\" src=\"http://profile.prestashop.com/quito%40mail.ru.jpg\" /></span>
      <span class=\"employee_profile\">Welcome back Egor</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/ttprestashop/admin5456qeen5/index.php/configure/advanced/employees/1/edit?_token=mK-GWpBEjRz2tN3l4F0y1UPutZhZqBuiXiDHFXOI8fk\">
      <i class=\"material-icons\">settings</i>
      Ваш профиль
    </a>
    </div>
    
    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/resources/documentations?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">book</i> Resources</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=training-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">school</i> Тренировка</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=expert-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">person_pin_circle</i> Find an Expert</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">extension</i> Маркет PrestaShop</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=help-center-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">help</i> Help Center</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/ttprestashop/admin5456qeen5/index.php?controller=AdminLogin&amp;logout=1&amp;token=81a0a9d9d60930be3244613fb4dd5dbb\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Выход</span>
    </a>
  </div>
</div>
      </div>
    </nav>

      </header>

  <nav class=\"nav-bar d-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/ttprestashop/admin5456qeen5/index.php/configure/advanced/employees/toggle-navigation?_token=mK-GWpBEjRz2tN3l4F0y1UPutZhZqBuiXiDHFXOI8fk\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
            <a href=\"http://localhost/ttprestashop/admin5456qeen5/index.php?controller=AdminDashboard&amp;token=ee1c8acee647f2447705405650ab99a5\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Пульт</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"2\" id=\"tab-SELL\">
              <span class=\"title\">Продажа</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                  <a href=\"http://localhost/ttprestashop/admin5456qeen5/index.php?controller=AdminOrders&amp;token=5e2e56c18954553c154647956a2e7d45\" class=\"link\">
                    <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                    <span>
                    Заказы
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                              <a href=\"http://localhost/ttprestashop/admin5456qeen5/index.php?controller=AdminOrders&amp;token=5e2e56c18954553c154647956a2e7d45\" class=\"link\"> Заказы
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                              <a href=\"/ttprestashop/admin5456qeen5/index.php/sell/orders/invoices/?_token=mK-GWpBEjRz2tN3l4F0y1UPutZhZqBuiXiDHFXOI8fk\" class=\"link\"> По счетам
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                              <a href=\"http://localhost/ttprestashop/admin5456qeen5/index.php?controller=AdminSlip&amp;token=0526576235336353e04e43905b74be38\" class=\"link\"> Платежные квитанции
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                              <a href=\"/ttprestashop/admin5456qeen5/index.php/sell/orders/delivery-slips/?_token=mK-GWpBEjRz2tN3l4F0y1UPutZhZqBuiXiDHFXOI8fk\" class=\"link\"> Транспортные накладные
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                              <a href=\"http://localhost/ttprestashop/admin5456qeen5/index.php?controller=AdminCarts&amp;token=fc1373f9314acfda22847de2c7914937\" class=\"link\"> Корзины
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                  <a href=\"/ttprestashop/admin5456qeen5/index.php/sell/catalog/products?_token=mK-GWpBEjRz2tN3l4F0y1UPutZhZqBuiXiDHFXOI8fk\" class=\"link\">
                    <i class=\"material-icons mi-store\">store</i>
                    <span>
                    Каталог
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                              <a href=\"/ttprestashop/admin5456qeen5/index.php/sell/catalog/products?_token=mK-GWpBEjRz2tN3l4F0y1UPutZhZqBuiXiDHFXOI8fk\" class=\"link\"> Товары
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                              <a href=\"/ttprestashop/admin5456qeen5/index.php/sell/catalog/categories?_token=mK-GWpBEjRz2tN3l4F0y1UPutZhZqBuiXiDHFXOI8fk\" class=\"link\"> Категории
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                              <a href=\"http://localhost/ttprestashop/admin5456qeen5/index.php?controller=AdminTracking&amp;token=a27968984a789f6ff83e57095c7d9f8c\" class=\"link\"> Мониторинг
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                              <a href=\"http://localhost/ttprestashop/admin5456qeen5/index.php?controller=AdminAttributesGroups&amp;token=0ef14a7cc2d1055a4bf90bce18d9cb4d\" class=\"link\"> Атрибуты и характеристики
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                              <a href=\"/ttprestashop/admin5456qeen5/index.php/sell/catalog/brands/?_token=mK-GWpBEjRz2tN3l4F0y1UPutZhZqBuiXiDHFXOI8fk\" class=\"link\"> Бренды и Поставщики
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                              <a href=\"http://localhost/ttprestashop/admin5456qeen5/index.php?controller=AdminAttachments&amp;token=65a209c18ab21405ce12c534509253a8\" class=\"link\"> Файлы
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                              <a href=\"http://localhost/ttprestashop/admin5456qeen5/index.php?controller=AdminCartRules&amp;token=aa4d824afad696887ff82692d7723a47\" class=\"link\"> Скидки
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                              <a href=\"/ttprestashop/admin5456qeen5/index.php/sell/stocks/?_token=mK-GWpBEjRz2tN3l4F0y1UPutZhZqBuiXiDHFXOI8fk\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                  <a href=\"/ttprestashop/admin5456qeen5/index.php/sell/customers/?_token=mK-GWpBEjRz2tN3l4F0y1UPutZhZqBuiXiDHFXOI8fk\" class=\"link\">
                    <i class=\"material-icons mi-account_circle\">account_circle</i>
                    <span>
                    Клиенты
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                              <a href=\"/ttprestashop/admin5456qeen5/index.php/sell/customers/?_token=mK-GWpBEjRz2tN3l4F0y1UPutZhZqBuiXiDHFXOI8fk\" class=\"link\"> Клиенты
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                              <a href=\"http://localhost/ttprestashop/admin5456qeen5/index.php?controller=AdminAddresses&amp;token=0a3fce26d34c9e134883f4824ce82a07\" class=\"link\"> Адреса
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                  <a href=\"http://localhost/ttprestashop/admin5456qeen5/index.php?controller=AdminCustomerThreads&amp;token=e9d15ca6c738aa9a8b1935974a55f990\" class=\"link\">
                    <i class=\"material-icons mi-chat\">chat</i>
                    <span>
                    Клиентская служба
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                              <a href=\"http://localhost/ttprestashop/admin5456qeen5/index.php?controller=AdminCustomerThreads&amp;token=e9d15ca6c738aa9a8b1935974a55f990\" class=\"link\"> Клиентская служба
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                              <a href=\"http://localhost/ttprestashop/admin5456qeen5/index.php?controller=AdminOrderMessage&amp;token=70ee2f9900c964c1f0491b6c6565b939\" class=\"link\"> Сообщения о заказах
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                              <a href=\"http://localhost/ttprestashop/admin5456qeen5/index.php?controller=AdminReturn&amp;token=6d9a15d399e100faa2c1330386229629\" class=\"link\"> Возвраты товаров
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                  <a href=\"http://localhost/ttprestashop/admin5456qeen5/index.php?controller=AdminStats&amp;token=3ad26eeefff2ed74400944c5ec548161\" class=\"link\">
                    <i class=\"material-icons mi-assessment\">assessment</i>
                    <span>
                    Статистика
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title -active\" data-submenu=\"42\" id=\"tab-IMPROVE\">
              <span class=\"title\">Улучшения</span>
          </li>

                          
                
                                                
                                                    
                <li class=\"link-levelone has_submenu -active open ul-open\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                  <a href=\"/ttprestashop/admin5456qeen5/index.php/improve/modules/manage?_token=mK-GWpBEjRz2tN3l4F0y1UPutZhZqBuiXiDHFXOI8fk\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Модули
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_up
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                              <a href=\"/ttprestashop/admin5456qeen5/index.php/improve/modules/manage?_token=mK-GWpBEjRz2tN3l4F0y1UPutZhZqBuiXiDHFXOI8fk\" class=\"link\"> Module Manager
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                              <a href=\"/ttprestashop/admin5456qeen5/index.php/modules/addons/modules/catalog?_token=mK-GWpBEjRz2tN3l4F0y1UPutZhZqBuiXiDHFXOI8fk\" class=\"link\"> Каталог модулей
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                  <a href=\"/ttprestashop/admin5456qeen5/index.php/improve/design/themes/?_token=mK-GWpBEjRz2tN3l4F0y1UPutZhZqBuiXiDHFXOI8fk\" class=\"link\">
                    <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                    <span>
                    Дизайн
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"126\" id=\"subtab-AdminThemesParent\">
                              <a href=\"/ttprestashop/admin5456qeen5/index.php/improve/design/themes/?_token=mK-GWpBEjRz2tN3l4F0y1UPutZhZqBuiXiDHFXOI8fk\" class=\"link\"> Шаблон и логотип
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"137\" id=\"subtab-AdminPsMboTheme\">
                              <a href=\"/ttprestashop/admin5456qeen5/index.php/modules/addons/themes/catalog?_token=mK-GWpBEjRz2tN3l4F0y1UPutZhZqBuiXiDHFXOI8fk\" class=\"link\"> Каталог шаблонов
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                              <a href=\"/ttprestashop/admin5456qeen5/index.php/improve/design/mail_theme/?_token=mK-GWpBEjRz2tN3l4F0y1UPutZhZqBuiXiDHFXOI8fk\" class=\"link\"> Email Theme
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                              <a href=\"/ttprestashop/admin5456qeen5/index.php/improve/design/cms-pages/?_token=mK-GWpBEjRz2tN3l4F0y1UPutZhZqBuiXiDHFXOI8fk\" class=\"link\"> Страницы
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                              <a href=\"/ttprestashop/admin5456qeen5/index.php/improve/design/modules/positions/?_token=mK-GWpBEjRz2tN3l4F0y1UPutZhZqBuiXiDHFXOI8fk\" class=\"link\"> Расположение блоков
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"59\" id=\"subtab-AdminImages\">
                              <a href=\"http://localhost/ttprestashop/admin5456qeen5/index.php?controller=AdminImages&amp;token=730a834f573da4662afdb568f9a7356f\" class=\"link\"> Настройки изображений
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"125\" id=\"subtab-AdminLinkWidget\">
                              <a href=\"/ttprestashop/admin5456qeen5/index.php/modules/link-widget/list?_token=mK-GWpBEjRz2tN3l4F0y1UPutZhZqBuiXiDHFXOI8fk\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                  <a href=\"http://localhost/ttprestashop/admin5456qeen5/index.php?controller=AdminCarriers&amp;token=6a129f5d8637452ab6b009ff596b2524\" class=\"link\">
                    <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                    <span>
                    Доставка
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                              <a href=\"http://localhost/ttprestashop/admin5456qeen5/index.php?controller=AdminCarriers&amp;token=6a129f5d8637452ab6b009ff596b2524\" class=\"link\"> Перевозчики
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                              <a href=\"/ttprestashop/admin5456qeen5/index.php/improve/shipping/preferences?_token=mK-GWpBEjRz2tN3l4F0y1UPutZhZqBuiXiDHFXOI8fk\" class=\"link\"> Настройки
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                  <a href=\"/ttprestashop/admin5456qeen5/index.php/improve/payment/payment_methods?_token=mK-GWpBEjRz2tN3l4F0y1UPutZhZqBuiXiDHFXOI8fk\" class=\"link\">
                    <i class=\"material-icons mi-payment\">payment</i>
                    <span>
                    Оплата
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                              <a href=\"/ttprestashop/admin5456qeen5/index.php/improve/payment/payment_methods?_token=mK-GWpBEjRz2tN3l4F0y1UPutZhZqBuiXiDHFXOI8fk\" class=\"link\"> Способы оплаты
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                              <a href=\"/ttprestashop/admin5456qeen5/index.php/improve/payment/preferences?_token=mK-GWpBEjRz2tN3l4F0y1UPutZhZqBuiXiDHFXOI8fk\" class=\"link\"> Настройки
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                  <a href=\"/ttprestashop/admin5456qeen5/index.php/improve/international/localization/?_token=mK-GWpBEjRz2tN3l4F0y1UPutZhZqBuiXiDHFXOI8fk\" class=\"link\">
                    <i class=\"material-icons mi-language\">language</i>
                    <span>
                    Интернационализация
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                              <a href=\"/ttprestashop/admin5456qeen5/index.php/improve/international/localization/?_token=mK-GWpBEjRz2tN3l4F0y1UPutZhZqBuiXiDHFXOI8fk\" class=\"link\"> Локализация
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                              <a href=\"http://localhost/ttprestashop/admin5456qeen5/index.php?controller=AdminZones&amp;token=592f4ee05647f43b2b3a451cafd067c2\" class=\"link\"> География
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                              <a href=\"/ttprestashop/admin5456qeen5/index.php/improve/international/taxes/?_token=mK-GWpBEjRz2tN3l4F0y1UPutZhZqBuiXiDHFXOI8fk\" class=\"link\"> Налоги
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                              <a href=\"/ttprestashop/admin5456qeen5/index.php/improve/international/translations/settings?_token=mK-GWpBEjRz2tN3l4F0y1UPutZhZqBuiXiDHFXOI8fk\" class=\"link\"> Переводы
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"131\" id=\"subtab-AdminEmarketing\">
                  <a href=\"http://localhost/ttprestashop/admin5456qeen5/index.php?controller=AdminEmarketing&amp;token=aa2d7b6fd5c7be7e2f5bbc79f30f3932\" class=\"link\">
                    <i class=\"material-icons mi-track_changes\">track_changes</i>
                    <span>
                    Advertising
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"80\" id=\"tab-CONFIGURE\">
              <span class=\"title\">Настроить</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                  <a href=\"/ttprestashop/admin5456qeen5/index.php/configure/shop/preferences/preferences?_token=mK-GWpBEjRz2tN3l4F0y1UPutZhZqBuiXiDHFXOI8fk\" class=\"link\">
                    <i class=\"material-icons mi-settings\">settings</i>
                    <span>
                    Параметры магазина
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                              <a href=\"/ttprestashop/admin5456qeen5/index.php/configure/shop/preferences/preferences?_token=mK-GWpBEjRz2tN3l4F0y1UPutZhZqBuiXiDHFXOI8fk\" class=\"link\"> Общее
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                              <a href=\"/ttprestashop/admin5456qeen5/index.php/configure/shop/order-preferences/?_token=mK-GWpBEjRz2tN3l4F0y1UPutZhZqBuiXiDHFXOI8fk\" class=\"link\"> Настройки заказов
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                              <a href=\"/ttprestashop/admin5456qeen5/index.php/configure/shop/product-preferences/?_token=mK-GWpBEjRz2tN3l4F0y1UPutZhZqBuiXiDHFXOI8fk\" class=\"link\"> Настройки товаров
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                              <a href=\"/ttprestashop/admin5456qeen5/index.php/configure/shop/customer-preferences/?_token=mK-GWpBEjRz2tN3l4F0y1UPutZhZqBuiXiDHFXOI8fk\" class=\"link\"> Настройки клиента
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                              <a href=\"/ttprestashop/admin5456qeen5/index.php/configure/shop/contacts/?_token=mK-GWpBEjRz2tN3l4F0y1UPutZhZqBuiXiDHFXOI8fk\" class=\"link\"> Контакты
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                              <a href=\"/ttprestashop/admin5456qeen5/index.php/configure/shop/seo-urls/?_token=mK-GWpBEjRz2tN3l4F0y1UPutZhZqBuiXiDHFXOI8fk\" class=\"link\"> Трафик и SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                              <a href=\"http://localhost/ttprestashop/admin5456qeen5/index.php?controller=AdminSearchConf&amp;token=726b99dc85a9d2e7e377b546ea15eaef\" class=\"link\"> Поиск
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"130\" id=\"subtab-AdminGamification\">
                              <a href=\"http://localhost/ttprestashop/admin5456qeen5/index.php?controller=AdminGamification&amp;token=5b28a62ae4878c9414c3622e0912bed6\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                  <a href=\"/ttprestashop/admin5456qeen5/index.php/configure/advanced/system-information/?_token=mK-GWpBEjRz2tN3l4F0y1UPutZhZqBuiXiDHFXOI8fk\" class=\"link\">
                    <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                    <span>
                    Расширенные параметры
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                              <a href=\"/ttprestashop/admin5456qeen5/index.php/configure/advanced/system-information/?_token=mK-GWpBEjRz2tN3l4F0y1UPutZhZqBuiXiDHFXOI8fk\" class=\"link\"> Информация
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                              <a href=\"/ttprestashop/admin5456qeen5/index.php/configure/advanced/performance/?_token=mK-GWpBEjRz2tN3l4F0y1UPutZhZqBuiXiDHFXOI8fk\" class=\"link\"> Производительность
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                              <a href=\"/ttprestashop/admin5456qeen5/index.php/configure/advanced/administration/?_token=mK-GWpBEjRz2tN3l4F0y1UPutZhZqBuiXiDHFXOI8fk\" class=\"link\"> Администрирование
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                              <a href=\"/ttprestashop/admin5456qeen5/index.php/configure/advanced/emails/?_token=mK-GWpBEjRz2tN3l4F0y1UPutZhZqBuiXiDHFXOI8fk\" class=\"link\"> E-mail
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"108\" id=\"subtab-AdminImport\">
                              <a href=\"/ttprestashop/admin5456qeen5/index.php/configure/advanced/import/?_token=mK-GWpBEjRz2tN3l4F0y1UPutZhZqBuiXiDHFXOI8fk\" class=\"link\"> Импорт
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                              <a href=\"/ttprestashop/admin5456qeen5/index.php/configure/advanced/employees/?_token=mK-GWpBEjRz2tN3l4F0y1UPutZhZqBuiXiDHFXOI8fk\" class=\"link\"> Сотрудники
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                              <a href=\"/ttprestashop/admin5456qeen5/index.php/configure/advanced/sql-requests/?_token=mK-GWpBEjRz2tN3l4F0y1UPutZhZqBuiXiDHFXOI8fk\" class=\"link\"> База данных
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                              <a href=\"/ttprestashop/admin5456qeen5/index.php/configure/advanced/logs/?_token=mK-GWpBEjRz2tN3l4F0y1UPutZhZqBuiXiDHFXOI8fk\" class=\"link\"> Журнал событий
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                              <a href=\"/ttprestashop/admin5456qeen5/index.php/configure/advanced/webservice-keys/?_token=mK-GWpBEjRz2tN3l4F0y1UPutZhZqBuiXiDHFXOI8fk\" class=\"link\"> Веб службы
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
            </ul>
  <div class=\"onboarding-navbar bootstrap\">
  <div class=\"row text\">
    <div class=\"col-md-8\">
      Запуск магазина!
    </div>
    <div class=\"col-md-4 text-right text-md-right\">7%</div>
  </div>
  <div class=\"progress\">
    <div class=\"bar\" role=\"progressbar\" style=\"width:7.1428571428571%;\"></div>
  </div>
  <div>
    <button class=\"btn btn-main btn-sm onboarding-button-resume\">Продолжить</button>
  </div>
  <div>
    <a class=\"btn -small btn-main btn-sm onboarding-button-stop\">Остановить</a>
  </div>
</div>

</nav>

<div id=\"main-div\">
          
<div class=\"header-toolbar\">
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Module Manager</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/ttprestashop/admin5456qeen5/index.php/improve/modules/manage?_token=mK-GWpBEjRz2tN3l4F0y1UPutZhZqBuiXiDHFXOI8fk\" aria-current=\"page\">Модули</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Управление модулями          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-add_module\"
                  href=\"#\"                  title=\"Загрузить модуль\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                >
                  <i class=\"material-icons\">cloud_upload</i>                  Загрузить модуль
                </a>
                                                                        <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-addons_connect\"
                  href=\"#\"                  title=\"Подключиться к магазину расширений\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                >
                  <i class=\"material-icons\">vpn_key</i>                  Подключиться к магазину расширений
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Помощь\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/ttprestashop/admin5456qeen5/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fru%252Fdoc%252FAdminModules%253Fversion%253D1.7.6.6%2526country%253Dru/%D0%9F%D0%BE%D0%BC%D0%BE%D1%89%D1%8C?_token=mK-GWpBEjRz2tN3l4F0y1UPutZhZqBuiXiDHFXOI8fk\"
                   id=\"product_form_open_help\"
                >
                  Помощь
                </a>
                                    </div>
        </div>
      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <li class=\"nav-item\">
                    <a href=\"/ttprestashop/admin5456qeen5/index.php/improve/modules/manage?_token=mK-GWpBEjRz2tN3l4F0y1UPutZhZqBuiXiDHFXOI8fk\" id=\"subtab-AdminModulesManage\" class=\"nav-link tab active current\" data-submenu=\"45\">
                      Модули
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/ttprestashop/admin5456qeen5/index.php/improve/modules/alerts?_token=mK-GWpBEjRz2tN3l4F0y1UPutZhZqBuiXiDHFXOI8fk\" id=\"subtab-AdminModulesNotifications\" class=\"nav-link tab \" data-submenu=\"46\">
                      Оповещения
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/ttprestashop/admin5456qeen5/index.php/improve/modules/updates?_token=mK-GWpBEjRz2tN3l4F0y1UPutZhZqBuiXiDHFXOI8fk\" id=\"subtab-AdminModulesUpdates\" class=\"nav-link tab \" data-submenu=\"47\">
                      Обновления
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  </ul>
    </div>
    <script>
  if (undefined !== mbo) {
    mbo.initialize({
      translations: {
        'Recommended Modules and Services': 'Рекомендованные Модули и Сервисы',
        'Close': 'Закрыть',
      },
      recommendedModulesUrl: '/ttprestashop/admin5456qeen5/index.php/modules/addons/modules/recommended?tabClassName=AdminModulesManage&_token=mK-GWpBEjRz2tN3l4F0y1UPutZhZqBuiXiDHFXOI8fk',
      shouldAttachRecommendedModulesAfterContent: 0,
      shouldAttachRecommendedModulesButton: 0,
      shouldUseLegacyTheme: 0,
    });
  }
</script>

</div>
      
      <div class=\"content-div  with-tabs\">

        
<div class=\"onboarding-advancement\" style=\"display: none\">
  <div class=\"advancement-groups\">
          <div class=\"group group-0\" style=\"width: 7.1428571428571%;\">
        <div class=\"advancement\" style=\"width: 7.1428571428571%;\"></div>
        <div class=\"id\">1</div>
      </div>
          <div class=\"group group-1\" style=\"width: 35.714285714286%;\">
        <div class=\"advancement\" style=\"width: 7.1428571428571%;\"></div>
        <div class=\"id\">2</div>
      </div>
          <div class=\"group group-2\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 7.1428571428571%;\"></div>
        <div class=\"id\">3</div>
      </div>
          <div class=\"group group-3\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 7.1428571428571%;\"></div>
        <div class=\"id\">4</div>
      </div>
          <div class=\"group group-4\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 7.1428571428571%;\"></div>
        <div class=\"id\">5</div>
      </div>
          <div class=\"group group-5\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 7.1428571428571%;\"></div>
        <div class=\"id\">6</div>
      </div>
      </div>
  <div class=\"col-md-8\">
    <h4 class=\"group-title\"></h4>
    <div class=\"step-title step-title-1\"></div>
    <div class=\"step-title step-title-2\"></div>
  </div>
  <button class=\"btn btn-primary onboarding-button-next\">Продолжить</button>
  <a class=\"onboarding-button-shut-down\">Пропустить этот урок</a>
</div>

<script type=\"text/javascript\">

  var onBoarding;

  \$(function(){
    onBoarding = new OnBoarding(1, {\"groups\":[{\"steps\":[{\"type\":\"popup\",\"text\":\"<div class=\\\"onboarding-welcome\\\">\\n  <i class=\\\"material-icons onboarding-button-shut-down\\\">close<\\/i>\\n  <p class=\\\"welcome\\\">\\u0414\\u043e\\u0431\\u0440\\u043e \\u043f\\u043e\\u0436\\u0430\\u043b\\u043e\\u0432\\u0430\\u0442\\u044c!<\\/p>\\n  <div class=\\\"content\\\">\\n    <p>\\u041f\\u0440\\u0438\\u0432\\u0435\\u0442! \\u041c\\u0435\\u043d\\u044f \\u0437\\u043e\\u0432\\u0443\\u0442 \\u041f\\u0440\\u0435\\u0441\\u0442\\u043e\\u043d, \\u044f \\u043c\\u043e\\u0433\\u0443 \\u0432\\u0430\\u043c \\u0437\\u0434\\u0435\\u0441\\u044c \\u0432\\u0441\\u0451 \\u043f\\u043e\\u043a\\u0430\\u0437\\u0430\\u0442\\u044c.<\\/p>\\n    <p>\\u0412\\u0430\\u043c \\u0441\\u0442\\u043e\\u0438\\u0442 \\u043e\\u0437\\u043d\\u0430\\u043a\\u043e\\u043c\\u0438\\u0442\\u044c\\u0441\\u044f \\u0441 \\u043d\\u0435\\u043a\\u043e\\u0442\\u043e\\u0440\\u044b\\u043c\\u0438 \\u043d\\u0435\\u043e\\u0431\\u0445\\u043e\\u0434\\u0438\\u043c\\u044b\\u043c\\u0438 \\u0448\\u0430\\u0433\\u0430\\u043c\\u0438 \\u0434\\u043b\\u044f \\u0437\\u0430\\u043f\\u0443\\u0441\\u043a\\u0430 \\u043c\\u0430\\u0433\\u0430\\u0437\\u0438\\u043d\\u0430:\\n    \\u0421\\u043e\\u0437\\u0434\\u0430\\u0439\\u0442\\u0435 \\u0432\\u0430\\u0448 \\u043f\\u0435\\u0440\\u0432\\u044b\\u0439 \\u0442\\u043e\\u0432\\u0430\\u0440, \\u043d\\u0430\\u0441\\u0442\\u0440\\u043e\\u0439\\u0442\\u0435 \\u043c\\u0430\\u0433\\u0430\\u0437\\u0438\\u043d, \\u043d\\u0430\\u0441\\u0442\\u0440\\u043e\\u0439\\u0442\\u0435 \\u0434\\u043e\\u0441\\u0442\\u0430\\u0432\\u043a\\u0443 \\u0438 \\u043f\\u043b\\u0430\\u0442\\u0435\\u0436\\u0438...<\\/p>\\n  <\\/div>\\n  <div class=\\\"started\\\">\\n    <p>\\u041f\\u0440\\u0438\\u0441\\u0442\\u0443\\u043f\\u0438\\u043c!<\\/p>\\n  <\\/div>\\n  <div class=\\\"buttons\\\">\\n    <button class=\\\"btn btn-tertiary-outline btn-lg onboarding-button-shut-down\\\">\\u041f\\u043e\\u0437\\u0436\\u0435<\\/button>\\n    <button class=\\\"blue-balloon btn btn-primary btn-lg with-spinner onboarding-button-next\\\">\\u041f\\u0443\\u0441\\u043a<\\/button>\\n  <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"http:\\/\\/localhost\\/ttprestashop\\/admin5456qeen5\\/index.php?controller=AdminDashboard&token=ee1c8acee647f2447705405650ab99a5\"}]},{\"title\":\"\\u0414\\u0430\\u0432\\u0430\\u0439\\u0442\\u0435 \\u0441\\u043e\\u0437\\u0434\\u0430\\u0434\\u0438\\u043c \\u0412\\u0430\\u0448 \\u043f\\u0435\\u0440\\u0432\\u044b\\u0439 \\u0442\\u043e\\u0432\\u0430\\u0440\",\"subtitle\":{\"1\":\"\\u0427\\u0442\\u043e \\u0432\\u044b \\u0445\\u043e\\u0442\\u0438\\u0442\\u0435 \\u0441\\u043e\\u043e\\u0431\\u0449\\u0438\\u0442\\u044c \\u043e\\u0431 \\u044d\\u0442\\u043e\\u043c? \\u041f\\u043e\\u0434\\u0443\\u043c\\u0430\\u0439\\u0442\\u0435, \\u0447\\u0442\\u043e \\u0445\\u043e\\u0442\\u044f\\u0442 \\u0443\\u0437\\u043d\\u0430\\u0442\\u044c \\u0432\\u0430\\u0448\\u0438 \\u043a\\u043b\\u0438\\u0435\\u043d\\u0442\\u044b.\",\"2\":\"\\u0414\\u043e\\u0431\\u0430\\u0432\\u044c\\u0442\\u0435 \\u044f\\u0441\\u043d\\u0443\\u044e \\u0438 \\u043f\\u0440\\u0438\\u0432\\u043b\\u0435\\u043a\\u0430\\u0442\\u0435\\u043b\\u044c\\u043d\\u0443\\u044e \\u0438\\u043d\\u0444\\u043e\\u0440\\u043c\\u0430\\u0446\\u0438\\u044e. \\u041f\\u043e\\u0437\\u0436\\u0435 \\u0435\\u0451 \\u043c\\u043e\\u0436\\u043d\\u043e \\u0438\\u0441\\u043f\\u0440\\u0430\\u0432\\u0438\\u0442\\u044c :)\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"\\u0414\\u0430\\u0439\\u0442\\u0435 \\u0432\\u0430\\u0448\\u0435\\u043c\\u0443 \\u0442\\u043e\\u0432\\u0430\\u0440\\u0443 \\u0438\\u043d\\u0442\\u0435\\u0440\\u0435\\u0441\\u043d\\u043e\\u0435 \\u043d\\u0430\\u0437\\u0432\\u0430\\u043d\\u0438\\u0435.\",\"options\":[\"savepoint\"],\"page\":[\"\\/ttprestashop\\/admin5456qeen5\\/index.php\\/sell\\/catalog\\/products\\/new?_token=mK-GWpBEjRz2tN3l4F0y1UPutZhZqBuiXiDHFXOI8fk\",\"index.php\\/sell\\/catalog\\/products\\/.+\"],\"selector\":\"#form_step1_name_1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"\\u0417\\u0430\\u043f\\u043e\\u043b\\u043d\\u0438\\u0442\\u0435 \\u043d\\u0435\\u043e\\u0431\\u0445\\u043e\\u0434\\u0438\\u043c\\u0443\\u044e \\u0438\\u043d\\u0444\\u043e\\u0440\\u043c\\u0430\\u0446\\u0438\\u044e \\u0432 \\u044d\\u0442\\u043e\\u0439 \\u0432\\u043a\\u043b\\u0430\\u0434\\u043a\\u0435. \\u0414\\u0440\\u0443\\u0433\\u0438\\u0435 \\u0432\\u043a\\u043b\\u0430\\u0434\\u043a\\u0438 \\u0434\\u043b\\u044f \\u0440\\u0430\\u0441\\u0448\\u0438\\u0440\\u0435\\u043d\\u043d\\u043e\\u0439 \\u0438\\u043d\\u0444\\u043e\\u0440\\u043c\\u0430\\u0446\\u0438\\u0438.\",\"page\":\"index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\"#tab_step1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"\\u0414\\u043e\\u0431\\u0430\\u0432\\u044c\\u0442\\u0435 \\u043e\\u0434\\u043d\\u043e \\u0438\\u043b\\u0438 \\u043d\\u0435\\u0441\\u043a\\u043e\\u043b\\u044c\\u043a\\u043e \\u0438\\u0437\\u043e\\u0431\\u0440\\u0430\\u0436\\u0435\\u043d\\u0438\\u0439, \\u0447\\u0442\\u043e\\u0431\\u044b \\u0432\\u0430\\u0448 \\u0442\\u043e\\u0432\\u0430\\u0440 \\u0432\\u044b\\u0433\\u043b\\u044f\\u0434\\u0435\\u043b \\u043f\\u0440\\u0438\\u0432\\u043b\\u0435\\u043a\\u0430\\u0442\\u0435\\u043b\\u044c\\u043d\\u043e!\",\"page\":\"index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\"#product-images-dropzone\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"\\u041a\\u0430\\u043a \\u0434\\u043e\\u0440\\u043e\\u0433\\u043e \\u0432\\u044b \\u0445\\u043e\\u0442\\u0438\\u0442\\u0435 \\u043f\\u0440\\u043e\\u0434\\u0430\\u0432\\u0430\\u0442\\u044c?\",\"page\":\"index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\".right-column > .row > .col-md-12 > .form-group:nth-child(4) > .row > .col-md-6:first-child > .input-group\",\"position\":\"left\",\"action\":{\"selector\":\"#product_form_save_go_to_catalog_btn\",\"action\":\"click\"}},{\"type\":\"tooltip\",\"text\":\"\\u0423\\u0445! \\u0412\\u044b \\u0442\\u043e\\u043b\\u044c\\u043a\\u043e \\u0447\\u0442\\u043e \\u0441\\u043e\\u0437\\u0434\\u0430\\u043b\\u0438 \\u0432\\u0430\\u0448 \\u043f\\u0435\\u0440\\u0432\\u044b\\u0439 \\u0442\\u043e\\u0432\\u0430\\u0440. \\u0417\\u0434\\u043e\\u0440\\u043e\\u0432\\u043e, \\u043d\\u0435 \\u0442\\u0430\\u043a \\u043b\\u0438?\",\"page\":\"index.php\\/sell\\/catalog\\/products\",\"selector\":\"#product_catalog_list table tr:first-child td:nth-child(3)\",\"position\":\"left\"}]},{\"title\":\"\\u041f\\u0440\\u0438\\u0434\\u0430\\u0439\\u0442\\u0435 \\u0432\\u0430\\u0448\\u0435\\u043c\\u0443 \\u043c\\u0430\\u0433\\u0430\\u0437\\u0438\\u043d\\u0443 \\u0438\\u043d\\u0434\\u0438\\u0432\\u0438\\u0434\\u0443\\u0430\\u043b\\u044c\\u043d\\u043e\\u0441\\u0442\\u044c\",\"subtitle\":{\"1\":\"\\u041a\\u0430\\u043a \\u043f\\u043e-\\u0432\\u0430\\u0448\\u0435\\u043c\\u0443 \\u0434\\u043e\\u043b\\u0436\\u0435\\u043d \\u0432\\u044b\\u0433\\u043b\\u044f\\u0434\\u0435\\u0442\\u044c \\u0432\\u0430\\u0448 \\u043c\\u0430\\u0433\\u0430\\u0437\\u0438\\u043d? \\u0427\\u0442\\u043e \\u0434\\u0435\\u043b\\u0430\\u0435\\u0442 \\u0435\\u0433\\u043e \\u043e\\u0441\\u043e\\u0431\\u0435\\u043d\\u043d\\u044b\\u043c?\",\"2\":\"\\u041d\\u0430\\u0441\\u0442\\u0440\\u043e\\u0439\\u0442\\u0435 \\u0432\\u0430\\u0448 \\u0448\\u0430\\u0431\\u043b\\u043e\\u043d \\u0438\\u043b\\u0438 \\u0432\\u044b\\u0431\\u0435\\u0440\\u0438\\u0442\\u0435 \\u043d\\u0430\\u043b\\u0438\\u0443\\u0447\\u0448\\u0438\\u0439 \\u0432 \\u043d\\u0430\\u0448\\u0435\\u043c \\u043a\\u0430\\u0442\\u0430\\u043b\\u043e\\u0433\\u0435 \\u0448\\u0430\\u0431\\u043b\\u043e\\u043d\\u043e\\u0432.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"\\u0425\\u043e\\u0440\\u043e\\u0448\\u0430\\u044f \\u0438\\u0434\\u0435\\u044f - \\u043d\\u0430\\u0447\\u0430\\u0442\\u044c \\u0441 \\u0437\\u0430\\u0434\\u0430\\u043d\\u0438\\u044f \\u0432\\u0430\\u0448\\u0435\\u0433\\u043e \\u043b\\u043e\\u0433\\u043e\\u0442\\u0438\\u043f\\u0430!\",\"options\":[\"savepoint\"],\"page\":\"\\/ttprestashop\\/admin5456qeen5\\/index.php\\/improve\\/design\\/themes\\/?_token=mK-GWpBEjRz2tN3l4F0y1UPutZhZqBuiXiDHFXOI8fk\",\"selector\":\"#form_shop_logos_header_logo\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"\\u0415\\u0441\\u043b\\u0438 \\u0432\\u0430\\u043c \\u043d\\u0443\\u0436\\u043d\\u043e \\u0447\\u0442\\u043e-\\u0442\\u043e \\u0434\\u0435\\u0439\\u0441\\u0442\\u0432\\u0438\\u0442\\u0435\\u043b\\u044c\\u043d\\u043e \\u043e\\u0441\\u043e\\u0431\\u0435\\u043d\\u043d\\u043e\\u0435, \\u043f\\u043e\\u0441\\u0435\\u0442\\u0438\\u0442\\u0435 \\u043d\\u0430\\u0448 \\u043a\\u0430\\u0442\\u0430\\u043b\\u043e\\u0433 \\u0448\\u0430\\u0431\\u043b\\u043e\\u043d\\u043e\\u0432!\",\"page\":\"\\/ttprestashop\\/admin5456qeen5\\/index.php\\/improve\\/design\\/themes-catalog\\/?_token=mK-GWpBEjRz2tN3l4F0y1UPutZhZqBuiXiDHFXOI8fk\",\"selector\":\".addons-theme-one:first-child\",\"position\":\"right\"}]},{\"title\":\"\\u041f\\u043e\\u0434\\u0433\\u043e\\u0442\\u043e\\u0432\\u0438\\u0442\\u044c \\u043c\\u0430\\u0433\\u0430\\u0437\\u0438\\u043d \\u043a \\u043f\\u0440\\u0438\\u0435\\u043c\\u0443 \\u043f\\u043b\\u0430\\u0442\\u0435\\u0436\\u0435\\u0439\",\"subtitle\":{\"1\":\"\\u041a\\u0430\\u043a \\u0432\\u0430\\u0448\\u0438 \\u043a\\u043b\\u0438\\u0435\\u043d\\u0442\\u044b \\u0434\\u043e\\u043b\\u0436\\u043d\\u044b \\u0440\\u0430\\u0441\\u043f\\u043b\\u0430\\u0447\\u0438\\u0432\\u0430\\u0442\\u044c\\u0441\\u044f \\u0441 \\u0432\\u0430\\u043c\\u0438?\",\"2\":\"\\u0418\\u0434\\u0438\\u0442\\u0435 \\u0432 \\u043d\\u043e\\u0433\\u0443 \\u0441 \\u0440\\u044b\\u043d\\u043a\\u043e\\u043c: \\u043f\\u0440\\u0435\\u0434\\u043e\\u0441\\u0442\\u0430\\u0432\\u044c\\u0442\\u0435 \\u0441\\u0430\\u043c\\u044b\\u0435 \\u043f\\u043e\\u043f\\u0443\\u043b\\u044f\\u0440\\u043d\\u044b\\u0435 \\u0441\\u043f\\u043e\\u0441\\u043e\\u0431\\u044b \\u043e\\u043f\\u043b\\u0430\\u0442\\u044b \\u0441\\u0432\\u043e\\u0438\\u043c \\u043a\\u043b\\u0438\\u0435\\u043d\\u0442\\u0430\\u043c!\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"\\u0421\\u043f\\u043e\\u0441\\u043e\\u0431\\u044b \\u043e\\u043f\\u043b\\u0430\\u0442\\u044b, \\u0443\\u0436\\u0435 \\u0434\\u043e\\u0441\\u0442\\u0443\\u043f\\u043d\\u044b\\u0435 \\u0432\\u0430\\u0448\\u0438\\u043c \\u043a\\u043b\\u0438\\u0435\\u043d\\u0442\\u0430\\u043c.\",\"options\":[\"savepoint\"],\"page\":\"\\/ttprestashop\\/admin5456qeen5\\/index.php\\/improve\\/payment\\/payment_methods?_token=mK-GWpBEjRz2tN3l4F0y1UPutZhZqBuiXiDHFXOI8fk\",\"selector\":\".modules_list_container_tab:first tr:first-child .text-muted, .card:eq(0) .text-muted:eq(0)\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"\\u0417\\u0434\\u0435\\u0441\\u044c \\u0432\\u044b \\u043c\\u043e\\u0436\\u0435\\u0442\\u0435 \\u0432\\u044b\\u0431\\u0440\\u0430\\u0442\\u044c \\u0438 \\u0434\\u043e\\u0431\\u0430\\u0432\\u0438\\u0442\\u044c \\u0434\\u0440\\u0443\\u0433\\u0438\\u0435 \\u0441\\u043f\\u043e\\u0441\\u043e\\u0431\\u044b \\u043e\\u043f\\u043b\\u0430\\u0442\\u044b!\",\"page\":\"\\/ttprestashop\\/admin5456qeen5\\/index.php\\/improve\\/payment\\/payment_methods?_token=mK-GWpBEjRz2tN3l4F0y1UPutZhZqBuiXiDHFXOI8fk\",\"selector\":\".panel:eq(1) table tr:eq(0) td:eq(1), .card:eq(1) .module-item-list div:eq(0) div:eq(1)\",\"position\":\"top\"}]},{\"title\":\"\\u041d\\u0430\\u0441\\u0442\\u0440\\u043e\\u0439\\u043a\\u0430 \\u0434\\u043e\\u0441\\u0442\\u0430\\u0432\\u043a\\u0438\",\"subtitle\":{\"1\":\"\\u041a\\u0430\\u043a \\u0432\\u044b \\u0445\\u043e\\u0442\\u0438\\u0442\\u0435 \\u0434\\u043e\\u0441\\u0442\\u0430\\u0432\\u043b\\u044f\\u0442\\u044c \\u0432\\u0430\\u0448\\u0438 \\u0442\\u043e\\u0432\\u0430\\u0440\\u044b?\",\"2\":\"\\u0412\\u044b\\u0431\\u0435\\u0440\\u0438\\u0442\\u0435 \\u043d\\u0430\\u0438\\u0431\\u043e\\u043b\\u0435\\u0435 \\u0443\\u0434\\u043e\\u0431\\u043d\\u044b\\u0435 \\u0432\\u0430\\u0448\\u0438\\u043c \\u043a\\u043b\\u0438\\u0435\\u043d\\u0442\\u0430\\u043c \\u0441\\u043f\\u043e\\u0441\\u043e\\u0431\\u044b \\u0434\\u043e\\u0441\\u0442\\u0430\\u0432\\u0438\\u043a! \\u0421\\u043e\\u0437\\u0434\\u0430\\u0439\\u0442\\u0435 \\u0441\\u043e\\u0431\\u0441\\u0442\\u0432\\u0435\\u043d\\u043d\\u043e\\u0433\\u043e \\u043f\\u0435\\u0440\\u0435\\u0432\\u043e\\u0437\\u0447\\u0438\\u043a\\u0430 \\u0438\\u043b\\u0438 \\u0434\\u043e\\u0431\\u0430\\u0432\\u044c\\u0442\\u0435 \\u0433\\u043e\\u0442\\u043e\\u0432\\u044b\\u0435 \\u043c\\u043e\\u0434\\u0443\\u043b\\u0438.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"\\u0412\\u043e\\u0442 \\u0441\\u043f\\u0438\\u0441\\u043e\\u043a \\u0434\\u043e\\u0441\\u0442\\u0443\\u043f\\u043d\\u044b\\u0445 \\u0432 \\u0432\\u0430\\u0448\\u0435\\u043c \\u043c\\u0430\\u0433\\u0430\\u0437\\u0438\\u043d\\u0435 \\u0441\\u043f\\u043e\\u0441\\u043e\\u0431\\u043e\\u0432 \\u0434\\u043e\\u0441\\u0442\\u0430\\u0432\\u043a\\u0438.\",\"options\":[\"savepoint\"],\"page\":\"http:\\/\\/localhost\\/ttprestashop\\/admin5456qeen5\\/index.php?controller=AdminCarriers&token=6a129f5d8637452ab6b009ff596b2524\",\"selector\":\"#table-carrier tr:eq(2) td:eq(3)\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"\\u0412\\u044b \\u043c\\u043e\\u0436\\u0435\\u0442\\u0435 \\u043f\\u0440\\u0435\\u0434\\u043b\\u043e\\u0436\\u0438\\u0442\\u044c \\u043d\\u0435\\u0441\\u043a\\u043e\\u043b\\u044c\\u043a\\u043e \\u0432\\u0430\\u0440\\u0438\\u0430\\u043d\\u0442\\u043e\\u0432 \\u0434\\u043e\\u0441\\u0442\\u0430\\u0432\\u043a\\u0438, \\u043d\\u0430\\u0441\\u0442\\u0440\\u043e\\u0438\\u0432 \\u043d\\u0435\\u0441\\u043a\\u043e\\u043b\\u044c\\u043a\\u043e \\u043f\\u0435\\u0440\\u0435\\u0432\\u043e\\u0437\\u0447\\u0438\\u043a\\u043e\\u0432\",\"page\":\"http:\\/\\/localhost\\/ttprestashop\\/admin5456qeen5\\/index.php?controller=AdminCarriers&token=6a129f5d8637452ab6b009ff596b2524\",\"selector\":\".modules_list_container_tab tr:eq(0) .text-muted\",\"position\":\"right\"}]},{\"title\":\"\\u0423\\u043b\\u0443\\u0447\\u0448\\u0438\\u0442\\u0435 \\u0441\\u0432\\u043e\\u0439 \\u043c\\u0430\\u0433\\u0430\\u0437\\u0438\\u043d \\u0441 \\u043f\\u043e\\u043c\\u043e\\u0449\\u044c\\u044e \\u043c\\u043e\\u0434\\u0443\\u043b\\u0435\\u0439\",\"subtitle\":{\"1\":\"\\u0414\\u043e\\u0431\\u0430\\u0432\\u043b\\u044f\\u0439\\u0442\\u0435 \\u043d\\u043e\\u0432\\u044b\\u0435 \\u0444\\u0443\\u043d\\u043a\\u0446\\u0438\\u0438 \\u0438 \\u0443\\u043f\\u0440\\u0430\\u0432\\u043b\\u044f\\u0439\\u0442\\u0435 \\u0441\\u0443\\u0449\\u0435\\u0441\\u0442\\u0432\\u0443\\u044e\\u0449\\u0438\\u043c\\u0438 \\u043f\\u043e\\u0441\\u0440\\u0435\\u0434\\u0441\\u0442\\u0432\\u043e\\u043c \\u043c\\u043e\\u0434\\u0443\\u043b\\u0435\\u0439.\",\"2\":\"\\u041d\\u0435\\u043a\\u043e\\u0442\\u043e\\u0440\\u044b\\u0435 \\u043c\\u043e\\u0434\\u0443\\u043b\\u0438 \\u0443\\u0436\\u0435 \\u043f\\u0440\\u0435\\u0434\\u0443\\u0441\\u0442\\u0430\\u043d\\u043e\\u0432\\u043b\\u0435\\u043d\\u044b, \\u043f\\u0440\\u043e\\u0447\\u0438\\u0435 \\u043c\\u043e\\u0433\\u0443\\u0442 \\u0431\\u044b\\u0442\\u044c \\u043f\\u043b\\u0430\\u0442\\u043d\\u044b\\u043c\\u0438 \\u0438\\u043b\\u0438 \\u0431\\u0435\\u0441\\u043f\\u043b\\u0430\\u0442\\u043d\\u044b\\u043c\\u0438 - \\u043f\\u043e\\u0441\\u043c\\u043e\\u0442\\u0440\\u0438\\u0442\\u0435 \\u043d\\u0430\\u0448\\u0443 \\u043a\\u043e\\u043b\\u043b\\u0435\\u043a\\u0446\\u0438\\u044e \\u0438 \\u0432\\u044b\\u0431\\u0435\\u0440\\u0438\\u0442\\u0435 \\u043f\\u043e\\u0434\\u0445\\u043e\\u0434\\u044f\\u0449\\u0438\\u0435!\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"\\u041e\\u0437\\u043d\\u0430\\u043a\\u043e\\u043c\\u044c\\u0442\\u0435\\u0441\\u044c \\u0441 \\u043d\\u0430\\u0448\\u0435\\u0439 \\u043f\\u043e\\u0434\\u0431\\u043e\\u0440\\u043a\\u043e\\u0439 \\u043c\\u043e\\u0434\\u0443\\u043b\\u0435\\u0439 \\u043d\\u0430 \\u043f\\u0435\\u0440\\u0432\\u043e\\u0439 \\u0432\\u043a\\u043b\\u0430\\u0434\\u043a\\u0435, \\u0443\\u043f\\u0440\\u0430\\u0432\\u043b\\u0435\\u043d\\u0438\\u0435 \\u0438\\u043c\\u0438 \\u043d\\u0430 \\u0432\\u0442\\u043e\\u0440\\u043e\\u0439, \\u0443\\u0432\\u0435\\u0434\\u043e\\u043c\\u043b\\u0435\\u043d\\u0438\\u044f - \\u043d\\u0430 \\u0442\\u0440\\u0435\\u0442\\u044c\\u0435\\u0439.\",\"options\":[\"savepoint\"],\"page\":\"\\/ttprestashop\\/admin5456qeen5\\/index.php\\/improve\\/modules\\/catalog?_token=mK-GWpBEjRz2tN3l4F0y1UPutZhZqBuiXiDHFXOI8fk\",\"selector\":\".page-head-tabs .tab:eq(0)\",\"position\":\"right\"},{\"type\":\"popup\",\"text\":\"<div id=\\\"onboarding-welcome\\\" class=\\\"modal-body\\\">\\n    <div class=\\\"col-12\\\">\\n        <button class=\\\"onboarding-button-next pull-right close\\\" type=\\\"button\\\">&times;<\\/button>\\n        <h2 class=\\\"text-center text-md-center\\\">\\u0412\\u0430\\u043c \\u0434\\u043e\\u0441\\u0442\\u0430\\u0442\\u043e\\u0447\\u043d\\u043e!<\\/h2>\\n    <\\/div>\\n    <div class=\\\"col-12\\\">\\n        <p class=\\\"text-center text-md-center\\\">\\n          \\u0412\\u044b \\u0443\\u0432\\u0438\\u0434\\u0435\\u043b\\u0438 \\u043c\\u0438\\u043d\\u0438\\u043c\\u0443\\u043c, \\u043d\\u043e \\u0437\\u0434\\u0435\\u0441\\u044c \\u0435\\u0441\\u0442\\u044c \\u0433\\u043e\\u0440\\u0430\\u0437\\u0434\\u043e \\u0431\\u043e\\u043b\\u044c\\u0448\\u0435 \\u0432\\u0435\\u0449\\u0435\\u0439 \\u0434\\u043b\\u044f \\u043e\\u0437\\u043d\\u0430\\u043a\\u043e\\u043c\\u043b\\u0435\\u043d\\u0438\\u044f.<br \\/>\\n          \\u041d\\u0435\\u043a\\u043e\\u0442\\u043e\\u0440\\u044b\\u0435 \\u0440\\u0435\\u0441\\u0443\\u0440\\u0441\\u044b, \\u0434\\u043b\\u044f \\u043f\\u043e\\u043c\\u043e\\u0449\\u0438 \\u0432\\u0430\\u043c \\u0432 \\u0434\\u0430\\u043b\\u044c\\u043d\\u0435\\u0439\\u0448\\u0435\\u043c:\\n        <\\/p>\\n        <div class=\\\"container-fluid\\\">\\n          <div class=\\\"row\\\">\\n            <div class=\\\"col-md-6  justify-content-center text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"http:\\/\\/doc.prestashop.com\\/display\\/PS17\\/Getting+Started\\\" target=\\\"_blank\\\">\\n                <div class=\\\"starter-guide\\\"><\\/div>\\n                <span class=\\\"link\\\">\\u0420\\u0443\\u043a\\u043e\\u0432\\u043e\\u0434\\u0441\\u0442\\u0432\\u043e \\u043d\\u0430\\u0447\\u0438\\u043d\\u0430\\u044e\\u0449\\u0435\\u0433\\u043e<\\/span>\\n              <\\/a>\\n            <\\/div>\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/forums\\/\\\" target=\\\"_blank\\\">\\n                <div class=\\\"forum\\\"><\\/div>\\n                <span class=\\\"link\\\">\\u0424\\u043e\\u0440\\u0443\\u043c<\\/span>\\n              <\\/a>\\n            <\\/div>\\n          <\\/div>\\n          <div class=\\\"row\\\">\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/en\\/training-prestashop\\\" target=\\\"_blank\\\">\\n                <div class=\\\"training\\\"><\\/div>\\n                <span class=\\\"link\\\">\\u0422\\u0440\\u0435\\u043d\\u0438\\u0440\\u043e\\u0432\\u043a\\u0430<\\/span>\\n              <\\/a>\\n            <\\/div>\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.youtube.com\\/user\\/prestashop\\\" target=\\\"_blank\\\">\\n                <div class=\\\"video-tutorial\\\"><\\/div>\\n                <span class=\\\"link\\\">\\u0412\\u0438\\u0434\\u0435\\u043e\\u0443\\u0440\\u043e\\u043a\\u0438<\\/span>\\n              <\\/a>\\n            <\\/div>\\n          <\\/div>\\n        <\\/div>\\n    <\\/div>\\n    <div class=\\\"modal-footer\\\">\\n        <div class=\\\"col-12\\\">\\n            <div class=\\\"text-center text-md-center\\\">\\n                <button class=\\\"btn btn-primary onboarding-button-next\\\">\\u042f \\u0433\\u043e\\u0442\\u043e\\u0432<\\/button>\\n            <\\/div>\\n        <\\/div>\\n    <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"index.php\\/improve\\/modules\\/catalog\"}]}]}, 1, \"http://localhost/ttprestashop/admin5456qeen5/index.php?controller=AdminWelcome&token=5f231c2c9850cc31efe16d3b5d2e7657\", baseAdminDir);

          onBoarding.addTemplate('lost', '<div class=\"onboarding onboarding-popup bootstrap\">  <div class=\"content\">    <p>Ау! Вы потерялись?</p>    <p>Для продолжения кликните здесь:</p>    <div class=\"text-center\">      <button class=\"btn btn-primary onboarding-button-goto-current\">Продолжить</button>    </div>    <p>Если хотите совсем остановить урок, кликните здесь:</p>    <div class=\"text-center\">      <button class=\"btn btn-alert onboarding-button-stop\">Выход из Приветственного урока</button>    </div>  </div></div>');
          onBoarding.addTemplate('popup', '<div class=\"onboarding-popup bootstrap\">  <div class=\"content\"></div></div>');
          onBoarding.addTemplate('tooltip', '<div class=\"onboarding-tooltip\">  <div class=\"content\"></div>  <div class=\"onboarding-tooltipsteps\">    <div class=\"total\">Шаг <span class=\"count\">1/5</span></div>    <div class=\"bulls\">    </div>  </div>  <button class=\"btn btn-primary btn-xs onboarding-button-next\">Вперед</button></div>');
    
    onBoarding.showCurrentStep();

    var body = \$(\"body\");

    body.delegate(\".onboarding-button-next\", \"click\", function(){
      if (\$(this).is('.with-spinner')) {
        if (!\$(this).is('.animated')) {
          \$(this).addClass('animated');
          onBoarding.gotoNextStep();
        }
      } else {
        onBoarding.gotoNextStep();
      }
    }).delegate(\".onboarding-button-shut-down\", \"click\", function(){
      onBoarding.setShutDown(true);
    }).delegate(\".onboarding-button-resume\", \"click\", function(){
      onBoarding.setShutDown(false);
    }).delegate(\".onboarding-button-goto-current\", \"click\", function(){
      onBoarding.gotoLastSavePoint();
    }).delegate(\".onboarding-button-stop\", \"click\", function(){
      onBoarding.stop();
    });

  });

</script>


                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1239
        $this->displayBlock('content_header', $context, $blocks);
        // line 1240
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1241
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1242
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1243
        echo "
            
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>О, нет!</h1>
  <p class=\"mt-3\">
    Мобильная версия этой страницы еще не доступна.
  </p>
  <p class=\"mt-2\">
    Используйте настольный компьютер для просмотра этой страницы, пока она не адаптирована для мобильных устройств.
  </p>
  <p class=\"mt-2\">
    Спасибо.
  </p>
  <a href=\"http://localhost/ttprestashop/admin5456qeen5/index.php?controller=AdminDashboard&amp;token=ee1c8acee647f2447705405650ab99a5\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Назад
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-RU&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/ru/login?email=quito%40mail.ru&amp;firstname=Egor&amp;lastname=Iaklich&amp;website=http%3A%2F%2Flocalhost%2Fttprestashop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-RU&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/ttprestashop/admin5456qeen5/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Подключите Ваш магазин к маркету PrestaShop для автоматического импорта приобретенных дополнений.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Нет учетной записи?</h4>
\t\t\t\t\t\t<p class='text-justify'>Откройте для себя мощь PrestaShop Addons! Исследуйте официальный PrestaShop-маркет.  В нем более 3500 инновационных модулей и шаблонов, оптимизирующих коэффициент конверсии, повышающих посещаемость, укрепляющих лояльность, повышающих вашу производительность</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Присоединиться к PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/ru/forgot-your-password\">Я забыл пароль</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/ru/login?email=quito%40mail.ru&amp;firstname=Egor&amp;lastname=Iaklich&amp;website=http%3A%2F%2Flocalhost%2Fttprestashop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-RU&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tСоздать учетную запись
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Войти
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>
  
";
        // line 1350
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 103
    public function block_stylesheets($context, array $blocks = [])
    {
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
    }

    // line 1239
    public function block_content_header($context, array $blocks = [])
    {
    }

    // line 1240
    public function block_content($context, array $blocks = [])
    {
    }

    // line 1241
    public function block_content_footer($context, array $blocks = [])
    {
    }

    // line 1242
    public function block_sidebar_right($context, array $blocks = [])
    {
    }

    // line 1350
    public function block_javascripts($context, array $blocks = [])
    {
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "__string_template__ff266d6d5234cec9a35583397d93379fffe8f9c47fec2fcf0c4ed7bddf5a94db";
    }

    public function getDebugInfo()
    {
        return array (  1440 => 1350,  1435 => 1242,  1430 => 1241,  1425 => 1240,  1420 => 1239,  1411 => 103,  1403 => 1350,  1294 => 1243,  1291 => 1242,  1288 => 1241,  1285 => 1240,  1283 => 1239,  143 => 103,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__ff266d6d5234cec9a35583397d93379fffe8f9c47fec2fcf0c4ed7bddf5a94db", "");
    }
}
