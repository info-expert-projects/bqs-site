---
title: Правила оформления HTML-кода
description: Правила оформления HTML-кода в Bitrix Quick Start
template: index 

---

# Правила оформления HTML-кода

<div class="tip">
	:construction: Страница не закончена. <a href="https://github.com/pafnuty/bqs-site/blob/dev/storage/pages/code/html.md" class="btn btn-small" target="_blank">Редактировать</a>
</div>

На этапе вёрстки собственных проектов необходимо на основе графического макета произвести html-вёрстку сайта, которая будет передана на следующий этап разработки.

Под вёрсткой на быстром старте понимается создание вёрстки на основе php-файлов из репозитория [QuickStart](https://github.com/pafnuty/quickstart)

---
## Основные принципы разметки кода{.h1}
---

- Для более эффективной организации работы следует использовать набор [Быстрый старт](https://github.com/pafnuty/quickstart). Он полностью соответствует требованиям данного документа.
- В качестве отступов используем табуляцию (а не пробелы). Вложенные блоки должны отделяться одним отступом.
- DOCTYPE по умолчанию: **html5** `<!DOCTYPE html>`. 
- Кодировка по умолчанию: **UTF-8** `<meta charset="UTF-8">`.
- Не забываем про метатег для IE `<meta http-equiv="X-UA-Compatible" content="IE=Edge">`.
- Если сайт адаптивный — не забываем про метатег `<meta name="viewport" content="width=device-width, initial-scale=1.0">`.
- Для подключения стилей и скриптов не нужно указывать атрибут `type`:
	```html
	<link rel="stylesheet" href="...">
	<script src="..."></script>
	```
- Шапка сайта заключается в тег `<header />`.
- Основная навигация по сайту — в тег `<nav />`.
- Контентные блоки сайта заключаются в тег `<section />`, но лишь в том случае, если они нормально воспринимаются отдельно от всего контента страницы. (например блок с новостями или статьями сайта или сама статья или детальная страница товара).
- Подвал сайта — в тег `<footer />`.
- Если используемый тег имеет закрывающий тег — он должен быть закрыт не зависимо от желания разработчика.
	```html
	<p>текст</p>
	<ul>
		<li>текст</li>
	</ul>
	```
- [Атрибуты, не требующие объявления значения](https://html.spec.whatwg.org/multipage/infrastructure.html#boolean-attributes), не должны содержать этого значения:
	```html
	<input type="checkbox" checked disabled>
	<select>
		<option value="1" selected></option>
	</select>
	```
- Если у тега много атрибутов — можно перечислять их с новой строки, при этом следует делать отступ перед объявлением атрибута:
	```html
	<img 
		class="..."
		src="..." 
		alt="..."
		title="..."
		data-mfp-src="..."
		data-params="..."
	>
	<div
		class="..."
		id="..."
		data-params="..."
	>
		текст
	</div>
	```
- Если необходимо передать в js неопределённое количество данных — следует использовать json-объект.
	```html
	<script>
	$(document).on('click', '[data-basket-add]', function(e) {
		e.preventDefault();
		var $basketAdd = $(this).data('basketAdd');
		$.ajax({
			...
			data: $basketAdd,
		})
		...
		;		
	});
	</script>
	<span data-basket-add='{"id":"150","name":"Заголовок товара"}'>текст</span>
	```
- Значения атрибутов заключаем в двойные кавычки. Исключением являются атрибуты, используемые для передачи json-данных в js-обработчик.
	```html
	<span data-basket-add='{"id":"150","name":"Заголовок товара"}'>текст</span>
	```
- Вёрстка должна полностью проходить [валидацию](http://validator.w3.org/).
- **Запрещено использование таблиц для нетабличных данных!**
- **Запрещено вкладывать блочные элементы внутрь строчных!**
- При разметке страниц так же можно делать микроразметку. 
	+ Ссылки на стандарт: [schema.org](http://schema.org/), [ruschema.org](http://ruschema.org/). 
	+ Инструменты проверки: [от google](http://www.google.ru/webmasters/tools/richsnippets?hl=ru), [от яндекса](http://webmaster.yandex.ru/microtest.xml).
- Если закрывающий тег находится от открывающего дальше чем на 4-6 строк, то необходимо ставить после него html-комментарий. **Пример:** 
	```html
	<div class="container">
		<div class="content">
			<div class="col col-mb-12 col-6">Далеко-далеко за словесными горами в стране.</div> <!-- .col col-mb-12 col-6 -->
			<div class="col col-mb-12 col-6">Моей семь, агенство. Он, скатился!</div> <!-- .col col-mb-12 col-6 -->
		</div> <!-- .content -->
	</div> <!-- .container -->
	```
- В подвале сайта необходимо предусмотреть блок с `id="bx-composite-banner"`, размером 182x31px. Этот блок необходим для отображения баннера композитного режима работы bitrix.

---
## Создание стилей less/css{.h1}
---
<div class="tip">
	Под созданием стилей понимается создание одного результирующего файла стилей (css-файл) вне зависимости от использования препроцессоров (less). В отдельных случаях допускается использование нескольких css файлов, к примеру если в проекте есть плагины (карусель, слайдеры, внешние сервисы) с большими объёмами css-кода.
</div>

При создании стилей следует учитывать следующее:
- Используем препроцессор [LESS](http://lesscss.org/). 
- В качестве локального компилятора рекомендуется использовать [prepros](http://alphapixels.com/prepros/) при этом в настройках отключить авторасстановку префиксов, расставлять их следует либо вручную, либо через миксины. *Это связано с техническими моментами компиляции средствами php на серверной стороне.*
- В качестве серверного компилятора используем, встроенный в Быстрый старт, компилятор на php.
- Основные правила написания LESS и CSS кода описаны на [этой странице](/code/css).
- Результирующий css-файл должен быть один вне зависимости от использования препроцессоров.
- Все кликабельные элементы должны иметь `cursor: pointer;`, а так же визуально реагировать на три состояния: обычное, при наведении `:hover`, активное `:active`, `:focus`. Если эти состояния не описаны в дизайне - ~~следует поставить минус в карму дизайнеру и~~ реализовать эти поведения на своё усмотрение, но не внося дисгармонии в общий дизайн сайта.
- Все видимые инпуты форм должны реагировать на получение фокуса `:focus` и, если это предусмотрено дизайном, при наведении. Если эти состояния не описаны в дизайне - ~~следует поставить минус в карму дизайнеру и~~ реализовать реакцию на получение фокуса на своё усмотрение, но не внося дисгармонии в общий дизайн сайта.
- Не следует использовать следующие названия классов, *т.к. они зарезервированы системными стилями bitrix*:
	+ `.section` (исп. в всплывающем окне редактирования параметров компонентов)
	+ `.empty` (исп. в всплывающем окне редактирования параметров компонентов)

- **Ни при каких условиях не используем reset.css** Если вы не понимаете для чего нужен сброс стилей — просто попробуйте в контент вставить нумерованный список или параграф. Вместо reset.css используем **[normalize.css](http://necolas.github.io/normalize.css/)**
- В качестве отступов используем табуляцию (а не пробелы).
- Стили для пользовательского интерфейса форм (инпуты, текстовые поля, кнопки) должны основываться на именах классов, а не на html-тегах. Т.е. к примеру класс `.btn`, применённый к диву, должен визуально превращать этот див в кнопку.

---
## Написание необходимых скриптов js/jQuery{.h1}
---

<div class="tip">
	Под написанием js-скриптов понимается создание одного основного js-файла
</div>

- В качестве библиотеки используем **jQuery 2.x**. Если в ТЗ прописана поддержка IE8 - используем последнюю актуальную версию jQuery 1.x.
- **Комментарии в коде обязательны!** В качестве стандарта используем [jsDoc](http://ru.wikipedia.org/wiki/JSDoc).
- Если какой то код можно превратить в функцию - делаем это.
- Если какую-то функцию можно превратить в плагин - превращаем.
- Не используем устаревшие и неоптимальные функции. 
```javascript 
	//Например: 
	//Вместо 
	$('.element').click(function(){}); 
	// Используем 
	$(document).on('click', '.element', function(){});
```
- Инициализацию необходимых плагинов производим в одном основном рабочем файле, который подключается к странице. При этом учитываем тот факт, что элемент, на который навешивается плагин, может отсутствовать на странице (если плагин плохо написан, он может выдавать ошибку).
- При использовании плагинов следует правильно именовать их по типу jquery.[имя_плагина][.min].js и по умолчанию минимизировать код плагина, оставляя ссылку на источник, откуда взят плагин в комментариях на первой строке и версию плагина. Пример:
```javascript
/*! http://site.ru | v.1.0 */
jQuery(document).ready(function(a){a(".btn-quont").on("click",function(){var b=a(this),c=b.parent().find("input").val();if("+"==b.text())var d=parseInt(c)+1;else if(c>0)var d=parseInt(c)-1;else d=0;b.parent().find("input").val(d)})});
```
- Весь код, который не обрабатывает события пишем внутри функции и вызываем эту функцию в сависимости от текущего режима отображения страниц (композитный или обычный). Такая конструкция обеспечит безошибочное выполнение кода как в вёрстке, так и в продакшне.
	
	**Пример:**
	```js
	if (window.frameCacheVars !== undefined) {
		BX.addCustomEvent("onFrameDataReceived", function (json) {
			runFunction();
		});
	}
	else {
		jQuery(document).ready(function ($) {
			runFunction();
		});
	}
	
	function runFunction() {
		// Тут пишем основной код, не обрабатывающий события
	}
	```


---
## Подготовка изображений{.h1}
---

При подготовке изображений для вёрстки следует учитывать следующее:
- Все иконки объединяем в спрайт.
- Вcе изображения, объёмом менее 500 байт смело перегоняем в [base64](http://b64i.ru/). Регистрируемся в сервисе для автоматической оптимизации картинок через kraken.io.
- Для уменьшения объёма изображений используем сервис [kraken.io](https://kraken.io/web-interface), не забываем, что сжимать надо в режиме lossless (без потерь).
- Все изображения контента получаем через сервис [imgholder.ru](http://imgholder.ru/) или [lorempixel](http://lorempixel.com/) или другие подобные сервисы. *Вёрстку всё равно клиенту не показывает никто, а вычищать левые картинки из продакшна — плохая идея*.
- Если в PSD используется такой способ реализации задумки дизайнера, при котором невозможно адекватно сохранить картинку — нужно передать дизайн на доработку, либо попросить дизайнера сохранить картинку в нужном формате ~~,пусть помучается~~.

---
## Тестирование{.h1}
---

При тестировании выделяем браузеры, под которые нужно делать:
- «абсолютную» поддержку (полное соответствие дизайну). По умолчанию это браузеры, прописанные в ТЗ. Если в ТЗ нет такого, то тестируем под актуальными версиями Chrome, Firefox, Opera, а так же IE9-10 и выше.
- «относительную» поддержку (не допускать явного визуального смещения элементов). Если при этом некоторые эффекты не будут отображаться (к примеру, вместо «вдавленного» текста - простой), об этом нужно предупредить менеджера.
- Если сайт адаптивный, то вёрстка тестируется на iphone, ipad и на современном смартфоне и планшете Android (4.x) в стандартных браузерах.




