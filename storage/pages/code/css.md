---
title: Правила оформления CSS-кода
description: Правила оформления CSS-кода в Bitrix Quick Start
template: index  

---


# Правила оформления LESS и CSS кода 
<a href="https://github.com/pafnuty/bqs-site/blob/dev/storage/pages/code/css.md" class="btn btn-mini" target="_blank">Редактировать эту страницу</a>

Данный раздел описывает правила написания LESS и CSS кода, принятые в Инфо-Эксперт. 

Этих правил следует придерживаться при поддержке старых проектов и **обязательно соблюдать при разработке новых проектов.**

---
## [Комментирование кода](#comments){#comments .h3}
---

Комментироване LESS кода — его неотъемлимая часть. Без комментариев разобраться в чужом коде порой просто невозможно. Поэтому следует 

<div class="content">
	<div class="col col-mb-12 col-5 col-bad">
		<div class="text-error h5">Плохо</div>        
		<div class="error-block p20 equal">
			<pre><code class="nohighlight">// Каталог
.catalog {
	&-item {
		...
	}
}
// Тут может быть сколько угодно строк кода

// Корзина
.basket {
	&-item {
		...
	}
}
// Тут ещё 500 строк кода</code></pre>
		</div>
	</div>
	<div class="col col-mb-12 col-7 col-good">
		<div class="text-success h5">Хорошо</div>
		<div class="success-block p20 equal">
			<pre><code class="nohighlight">/* =============================
   Каталог */
/* ============================= */
	.catalog {
		&-item {
			...
		} //.catalog-item
	} //.catalog
	// Тут может быть сколько угодно строк кода

/* =============================
   Корзина */
/* ============================= */
	.basket {
		&-item {
			...
		} //.basket-item
	} //.basket
	// Тут ещё 500 строк кода</code></pre>
		</div>
	</div>
</div>


---
## [Организация LESS-файлов](#org){#org .h3}
---

Имя файла следует начинать с двухзначной цифры, после которой идёт тире и пояснительное название файла, понятное для человека. Это даёт возможность нормального восприятия структуры файлов и приводит структуру проектов в общий порядок.
- **00-09** — файлы, которые не попадают в результирующий CSS (миксины, переменные и т.д.)
- **10-19** — файлы, которые обязательно должны присутствовать, задают костяк шаблона (сетка, кнопки, иконки, формы и т.д.) и оформляют стандартные элементы html.
- **20-79** — различные дополнительные файлы, отвечающие за оформление конкретных кусков вёрстки (меню, модальные окна, слайдеры, хлебные крошки, каталог и т.д.).
- **80-main.less** — основной файл стилей сайта, сюда как правило пишется всё, что относится к конкретному сайту, это уникальный для каждого проекта файл, если куски кода кочуют в этом файле из проекта в проект - значит   надо выносить их в отдельный файлы в пределах имён 20-79.
- **90-helpers.less** — различные хелперы типа `.clearfix` и прочие стили, помогающие привести вёрстку в нужный вид, не создавая излишнего кода.

*При разработке допускается совпадение чисел в наименовани файлов.*

---
## [Оформление LESS и CSS кода ](#making){#making .h3}
---

### [Каждое свойство — отдельная строка.](#css1){#css1}
**Цель** — лучшая читаемость, проще найти и поправить свойство.

Допускается исключение для случаев, когда стиль описвается одним классом и одним свойством. В этом случае следует отделять пробелами скобки от свойства.
<div class="content">
	<div class="col col-mb-12 col-6 col-bad">
		<div class="text-error h5">Плохо</div>        
		<div class="error-block p20 equal">
			<pre><code class="nohighlight">.normal {font-weight: normal; font-style: normal; text-decoration: none;}
			.p10{padding:10px}</code></pre>
		</div>
	</div>
	<div class="col col-mb-12 col-6 col-good">
		<div class="text-success h5">Хорошо</div>
		<div class="success-block p20 equal">
			<pre><code class="nohighlight">.normal {
	font-weight: normal;
	font-style: normal;
	text-decoration: none;

	&:hover {
		color: red;
	}
}
.p10 { padding:10px; }</code></pre>
		</div>
	</div>
</div>

### [Каждый селектор — на отдельной строке](#css2){#css2}
**Цель** — лучшая читаемость, проще найти селектор.
<div class="content">
	<div class="col col-mb-12 col-6 col-bad">
		<div class="text-error h5">Плохо</div>        
		<div class="error-block p20 equal">
			<pre><code class="nohighlight">.class, .class1, .class2, .class3 {
	color: red;
}</code></pre>
		</div>
	</div>
	<div class="col col-mb-12 col-6 col-good">
		<div class="text-success h5">Хорошо</div>
		<div class="success-block p20 equal">
			<pre><code class="nohighlight">.class,
.class1,
.class2,
.class3 {
	color: red;
}</code></pre>
		</div>
	</div>
</div>


### [Группировка правил](#css3){#css3}
**Цель** — уменьшение длины селекторов, уменьшение веса CSS-файла, как следствие — ускорение обработки сыы браузером.
<div class="tip mb20">
	:exclamation: При этом в обязательном порядке после закрывающей фигурной скобки проставляем комментарий с текстом, соответствующим имени селектора в получаемом css-файле. <br>Это необходимо для лёгкого поиска нужного селектора при отладке и доработке вёрстки.
</div>

<div class="content">
	<div class="col col-mb-12 col-6 col-bad">
		<div class="text-error h5">Плохо</div>        
		<div class="error-block p20 equal">
			<pre><code class="nohighlight">// LESS
.class {
	color: blue;
	.class-red {
		color: red;
		.class-green {
			color: green;
			.class-yellow {
				color: yellow;
				.class-orange {
					color: orange;
				}
			}
		}
	}
}

//
//
//
//
// Скомпилированный CSS
.class {
	color: blue;
}
.class .class-red {
	color: red;
}
.class .class-red .class-green {
	color: green;
}
.class .class-red .class-green .class-yellow {
	color: yellow;
}
.class .class-red .class-green .class-yellow .class-orange {
	color: orange;
}</code></pre>
		</div>
	</div>
	<div class="col col-mb-12 col-6 col-good">
		<div class="text-success h5">Хорошо</div>
		<div class="success-block p20 equal">
			<pre><code class="nohighlight">// LESS
.class {
	color: blue;

	&-red {
		color: red;
	} //.class-red

	&-green {
		color: green;
	} //.class-green

	&-yellow {
		color: yellow;
	} //.class-yellow

	&-orange {
		color: orange;
	} //.class-orange
} //.class

// Скомпилированный CSS
.class {
	color: blue;
}
.class-red {
	color: red;
}
.class-green {
	color: green;
}
.class-yellow {
	color: yellow;
}
.class-orange {
	color: orange;
}</code></pre>
		</div>
	</div>
</div>

### [Скобки, отступы, порядок следования свойств и прочее](#css4){#css4}

- В качестве отступов используем табуляцию, а не пробелы.
- Перед открывающей фигурной скобкой ставим пробел.
- Открывающая фигурная скобка находится в одной строке с селектором.
- Закрывающая фигурная скобка располагается в следующей строке за последним свойством.
- После двоеточия ставим пробел.
- После каждого свойства ставим точку с запятой.
- Свойства с префиксами пишем в конце списка свойств.
- Свойства без префиксов пишем после свойств с префиксами.
- Используемые миксины по возможности пишем в конце списка свойств.
- Вложенные правила отделяем пустой строкой.
- Для служебных комментариев в тексте используем однострочный LESS-комментарий `//` вместо CSS-комментария `/* */`.
- Для нулевых значений единицы измерения не указываем (кроме transition-delay: 0s).
- Для дробных значений не обязательно писать ноль.
- В url() не обязательно ставить кавычки, однако если используется base64-строка — кавычки ставим в обязательном порядке.
- Составные свойства (например, padding, margin) группируем в одно по взможности.
- Не добавляйте пробелы после запятых в rgba(), rgb() и т.п.
- Цвет в формате HEX пишем в нижнем регистре `#fff`, `#f94568`.
- Ни при каких обстоятельствах не используем `@import` в CSS-файлах!

<div class="content">
	<div class="col col-mb-12 col-6 col-bad">
		<div class="text-error h5">Плохо</div>        
		<div class="error-block p20 equal">
			<pre><code class="nohighlight">.class,.class1,.class2,.class3{
	color: red
	&, &.mod {padding:10px;display:block;color:#FFFFFF}}
.class1
{
  color:@back;
  background:@white;
  padding:0px 0px 0px 0px;
  box-shadow:inset 0px 0 0 2px rgba(0, 0, 0, 0.5);
  -webkit-box-shadow:inset 0px 0 0 2px rgba(0, 0, 0, 0.5) }
			</code></pre>
		</div>
	</div>

	<div class="col col-mb-12 col-6 col-good">
		<div class="text-success h5">Хорошо</div>
		<div class="success-block p20 equal">
			<pre><code class="nohighlight">.class,
.class1,
.class2,
.class3 {
	color: red;

	&, 
	&.mod {
		padding: 10px;
		display: block;
		color: #fff;
	}
}
.class1 {
  color: @back;
  background: @white;
  padding: 0;
  -webkit-box-shadow: inset 0 0 0 2px rgba(0,0,0,.5);
  box-shadow: inset 0 0 0 2px rgba(0,0,0,.5);
}</code></pre>
		</div>
	</div>
</div>

### [Формирование имён селекторов](#css5){#css5}
Имена классов следует формировать так, что бы из имени можно было понять за что отвечает стиль или для чего предназначен.
Все имена классов пишем в нижнем регистре, в качестве разделителя слов используем черточку. **.aaa-bbb-ccc {}**

Для классов-помощников используем названия классов, соответствующих аббревиатурам emmet. *Пример таких классов можно наблюдать в файле 90-helpers.less*
<div class="content">
	<div class="col col-mb-12 col-6 col-bad">
		<div class="text-error h5">Плохо</div>        
		<div class="error-block p20 equal">
			<pre><code class="nohighlight">.className {
	border: solid 1px @gray;
	padding: 15px;
	background: lighten(@gray, 50%);
}
.block1 { padding: 10px; }
.mar_b_l { margin-left: 10px; }
			</code></pre>
		</div>
	</div>

	<div class="col col-mb-12 col-6 col-good">
		<div class="text-success h5">Хорошо</div>
		<div class="success-block p20 equal">
			<pre><code class="nohighlight">.gray-border-block {
	border: solid 1px @gray;
	padding: 15px;
	background: lighten(@gray, 50%);
}
.p10 { padding: 10px; }
.ml10 { margin-left: 10px; }
</code></pre>
		</div>
	</div>
</div>

### [Миксины](#css6){#css6}
Используем только параметризованные миксины. По возможности задаём значения по умолчанию для параметров миксина.

**Цель** — уменьшение количества ненужного css-кода.

Вызов миксина без передачи параметров допускается писать без скобок.

<div class="tip mb20">
	:exclamation: Все миксины располагаем в файле 01-mixins.less и снабжаем комментарием по возможности.
</div>

<div class="content">
	<div class="col col-mb-12 col-6 col-bad">
		<div class="text-error h5">Плохо</div>        
		<div class="error-block p20 equal">
			<pre><code class="nohighlight">.mix() {
	color: @red;
	background: @btnColor;
}
.class {
	.mix();
}
.class1 {
	.mix;
	color: @green;
}</code></pre>
		</div>
	</div>

	<div class="col col-mb-12 col-6 col-good">
		<div class="text-success h5">Хорошо</div>
		<div class="success-block p20 equal">
			<pre><code class="nohighlight">.mix(@color: #f00, @bgColor: #000) {
	color: @color;
	background: @bgColor;
}
.class {
	.mix;
}
.class1 {
	.mix(@green);
}</code></pre>
		</div>
	</div>
</div>

### [Переменные](#css7){#css7}

Называйте переменные осмысленно, так, чтобы можно было понять за что она отвечает. Не стоит называть переменную именем цвета (если конечно это не белый, серый или черный) т.к. цвет дизайна может смениться на противоположный и будет не очень красиво, когда переменная **@red** будет обозначать **синий** цвет.

В конце объявления переменной оставляйте комментарий, так SublimeText будет давать вам подсказки при попытке вести название переменной.

Хорошим тоном будет выравнивание значений переменный в один столбик.

<div class="content">
	<div class="col col-mb-12 col-6 col-bad">
		<div class="text-error h5">Плохо</div>        
		<div class="error-block p20 equal">
			<pre><code class="nohighlight">@blue: #3da4cb; // blue 
@red: #fe4a49; // red
@orange: #fed766; // orange
			</code></pre>
		</div>
	</div>

	<div class="col col-mb-12 col-6 col-good">
		<div class="text-success h5">Хорошо</div>
		<div class="success-block p20 equal">
			<pre><code class="nohighlight">@primary:    #3da4cb; // primary 
@secondary:  #fe4a49; // secondary
@additional: #fed766; // additional</code></pre>
		</div>
	</div>
</div>


---
## [Инструменты для авто-форматирования кода, настройка параметров](#tools){#tools .h3}
---

К сожалению корректное форматирование LESS кода возможно пока только ручками, поэтому не забывайте про раздел [ответственность](/blame). 

Однако есть несколько плагинов для SublimeText, немного упрощающих жизнь разработчика.

#### [Плагины для SublimeText](#stplugins){#stplugins}
- [Emmet](https://packagecontrol.io/packages/Emmet) — первый плагин, который должен быть установлен в ST после [packagecontrol](https://packagecontrol.io/installation).
- [Alignment](https://packagecontrol.io/packages/Alignment) — для выравнивания столбиком.
- [List stylesheet variables](https://packagecontrol.io/packages/List%20stylesheet%20variables) — для удобного просмотра списка доступных переменных LESS.
- [All Autocomplete](https://packagecontrol.io/packages/All%20Autocomplete) или [AutocompletionFuzzy](https://packagecontrol.io/packages/AutocompletionFuzzy) — для автокомплита.

#### [Сниппеты для SublimeText](#stsnippets){#stsnippets}

**[less_rule](#less_rule){#less_rule}** — для удобной вставки переменной (правила)
```xml
<snippet>
	<content><![CDATA[
@${1:lightColor}: #${2}; // ${1:lightColor}
${0}]]></content>
	<!-- Optional: Set a tabTrigger to define how to trigger the snippet -->
	<tabTrigger>rule</tabTrigger>
	<!-- Optional: Set a scope to limit where the snippet will trigger -->
	<!-- <scope>source.less</scope> -->
	<description>LESS rule</description>
</snippet>

```

**[less_class](#less_class){#less_class}** — для удобной вставки класса с комментарием.
```xml
<snippet>
	<content><![CDATA[
${1:.class} {
	${0}
} //${1:.class}
]]></content>
	<!-- Optional: Set a tabTrigger to define how to trigger the snippet -->
	<tabTrigger>less_class</tabTrigger>
	<!-- Optional: Set a scope to limit where the snippet will trigger -->
	<!-- <scope>source.python</scope> -->
	<description>LESS class</description>
</snippet>
```

**[less_subclass](#less_subclass){#less_subclass}** — для удобной вставки вложенного класса или модификатора.
```xml
<snippet>
	<content><![CDATA[
&-${1:item} {
	${0}
} //.${2:class}-${1:item}
]]></content>
	<!-- Optional: Set a tabTrigger to define how to trigger the snippet -->
	<tabTrigger>less_subclass</tabTrigger>
	<!-- Optional: Set a scope to limit where the snippet will trigger -->
	<!-- <scope>source.python</scope> -->
	<description>LESS sub class</description>
</snippet>

```

**[less_media](#less_media){#less_media}** — для удобной вставки медиазапросов с переменными.
```xml
<snippet>
	<content><![CDATA[
${1:@media (max-width: @screenPhone) {
	// телефоны
\}}
${2:@media (min-width: @screenPhoneMax) and (max-width: @screenTablet) {
	// таблетки
\}}
${3:@media (min-width: @screenTabletMax) and (max-width: @screenDesktop) {
	// десктоп
\}}
${4:@media (min-width: @screenDesktopMax) and (max-width: @screenLarge) {
	// большой десктоп
\}}
${5:@media (min-width: @screenLarge) {
	// больше большого десктопа
\}}
]]></content>
	<!-- Optional: Set a tabTrigger to define how to trigger the snippet -->
	<tabTrigger>less_media</tabTrigger>
	<!-- Optional: Set a scope to limit where the snippet will trigger -->
	<!-- <scope>source.python</scope> -->
	<description>Медиазапросы для LESS</description>
</snippet>

```

---

<a href="https://github.com/pafnuty/bqs-site/blob/dev/storage/pages/code/css.md" class="btn btn-small" target="_blank">Редактировать эту страницу</a>



