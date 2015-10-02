Title: Улучшение сайта
robots: noindex,nofollow
Template: index 

----

# Как помочь улучшить сайт

<div class="tip">
 :octocat: Контент и шаблон этого сайта хранятся в открытом репозитории на GitHub и вы можете без особого труда улучшить или дополнить этот сайт. 
</div>

### 1) Прежде всего нужно воссоздать окружение этого сайта.{.text-secondary}

Для этого нужно установить [Morfy CMS](http://morfy.org/) v1.1.0 и немного настроить систему, скопировав конфиг:
```php
# config/Morfy.php
return array(
    'site_url' => 'URL_ВАШЕГО_САЙТА',
    'site_charset' => 'UTF-8',
    'site_timezone' => 'Europe/Moscow',
    'site_theme'=> 'fenom', // Именно этот шаблон используется на сайте
    'site_title'=> 'Bitrix Qiuck Start',
    'site_description' => 'Быстрый старт для Bitrix',
    'site_keywords' => '',
    'email' => 'ваш@email',
    'plugins'=> array(
        'parsedown',
        'sitemap',
        'statistics', // Не забываем установить плагин https://github.com/pafnuty/morfy-statistics/releases
        'less', // Не забываем установить плагин https://github.com/pafnuty/morfy-less/releases
        'breadcrumb', // Не забываем установить плагин https://github.com/tovic/breadcrumb-plugin-for-morfy-cms
    ),
    'fenom' => array(
        'auto_reload' => true,
        'force_include' => true,
        'strip' => true,
    ),

    'less' => array(
        'fileNames' => array('main'),
    ),

    'breadcrumb_config' => array(
        'classes' => array(
            'item'=> 'item',
            'current' => 'active',
        ),
        'labels' => array(
            'home' => 'Главная',
        ),
        'divider' => ' <span class="bullet"></span> ',
    ),
);
```

### 2) Удаляем папку content, она нам не нужна т.к. на сайте имеется свой контент.{.text-secondary}

### 3) Рабтаем с сайтом:{.text-secondary}
1. Идём в [репозиторий](https://github.com/pafnuty/bqs-site/tree/dev). (это dev ветка). 
2. Клонируем в корень сайта, редактируем и создаём нужные файлы.
3. Делаем pull-request в **ветку dev**.
4. Ждём пока его примут в мастер.
5. **Profit!**
