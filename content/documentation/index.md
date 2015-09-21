Title: Документация  
Description: Документация к Bitrix Quick Start
Date: 2015-09-20 16:08 
Robots: index,follow  

----

# Документация

<div class="tip">
    :construction: Страница не закончена. <a href="https://github.com/pafnuty/bqs-site/blob/dev/content/documentation/index.md" class="btn btn-small" target="_blank">Редактировать</a>
</div>




### verstka/
- Содержимое этой папки следует распаковвывать в корень сайта на этапе создания чистой вёрстки.
- **cn_autoloader_verstka.php** — автозагрузчик cn_autoloader, адаптированный под чистую вёрстку.
- **header.php** — шапка сайта. 
сюда пишем всё, что потом будем переносить в header.php шаблона
- **footer.php** — подвал сайта. 
сюда пишем всё, что потом будем переносить в footer.php шаблона
- **index.php** — собственно контент сайта. 


# Другие папки

### PSD/logo470.psd 
Логотип сайта для красивого отображения в ленте фейсбука, когда пользователь делится ссылкой на сайт. Напрягаем дизайнера

### examples
Папка с готовыми шаблонами компонентов (и компонентами)

### snippets
Папка со сниппетами и различными полезностями


# Правки под композит
На забываем при разработке добавлять в dbconn.php эти строки:
```php
define("BX_COMPOSITE_DEBUG", true);
define("LOG_FILENAME", $_SERVER["DOCUMENT_ROOT"]."/local/logs/bx_log.txt");
```
И удалять их после сдачи и тестирования проекта.

#Монитор качества
Этот код вставляем в админку, в блок "Информация о сайте", предварительно не забываем поправить данные.

![Информация о сайте](https://dl.dropboxusercontent.com/u/8142395/site_info.png "Информация о сайте")

```html                                             
<table class="bx-gadgets-info-site-table" cellspacing="0"> 
    <tbody> 
        <tr>
            <td class="bx-gadget-gray">Создатель сайта:</td>
            <td>Инфо-Эксперт</td>
            <td class="bx-gadgets-info-site-logo" rowspan="5"><img src="/local/codenails/images/ie_logo.png"  /></td>
        </tr>         
        <tr>
            <td class="bx-gadget-gray">Адрес сайта:</td>
            <td><a href="http://www.info-expert.ru" >www.info-expert.ru</a></td>
        </tr>
         
        <tr>
            <td class="bx-gadget-gray">Сайт сдан:</td>
            <td>21 ноября 2014 г.</td>
        </tr>
         
        <tr>
            <td class="bx-gadget-gray">Ответственное лицо:</td>
            <td>Марина Вострикова</td>
        </tr>
         
        <tr>
            <td class="bx-gadget-gray">E-mail:</td>
            <td><a href="mailto:sales@info-expert.ru" >sales@info-expert.ru</a></td>
        </tr>
     </tbody>
 </table>
 ```
