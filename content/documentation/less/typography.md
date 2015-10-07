Title: Типографика  
Description: Описание стандартных html-элементов, используемых в Bitrix Quick Start
Date: 2015-10-04 22:50 
Robots: index,follow

----

# Типографика

<div class="tip">
	:construction: Страница не закончена. <a href="https://github.com/pafnuty/bqs-site/blob/dev/content/documentation/less/typography.md" class="btn btn-small" target="_blank">Редактировать</a>
</div>

---
### [Цитаты](#blockquote){#blockquote}
---

<blockquote>
	<cite>UserName</cite>
	Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты.
</blockquote>

<blockquote>Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты.</blockquote>
```html
<blockquote>
	<p>Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты.</p>
</blockquote>

<blockquote>Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты.</blockquote>
```


---
### [Figure](#figure){#figure}
---

<figure>
	<img src="https://imgholder.ru/300" alt="Описание картинки">
	<figcaption>Описание картинки</figcaption>
</figure>

```html
<figure>
	<img src="https://imgholder.ru/300" alt="Описание картинки">
	<figcaption>Описание картинки</figcaption>
</figure>
```

---
### [Заголовоки](#headings){#headings}
---

<h1>Заголовок h1 <small>с мелким текстом</small> и <a href="#">ссылкой</a></h1>
<h2>Заголовок h2 <small>с мелким текстом</small> и <a href="#">ссылкой</a></h2>
<h3>Заголовок h3 <small>с мелким текстом</small> и <a href="#">ссылкой</a></h3>
<h4>Заголовок h4 <small>с мелким текстом</small> и <a href="#">ссылкой</a></h4>
<h5>Заголовок h5 <small>с мелким текстом</small> и <a href="#">ссылкой</a></h5>
<h6>Заголовок h6 <small>с мелким текстом</small> и <a href="#">ссылкой</a></h6>

```html
<h1>Заголовок h1 <small>с мелким текстом</small> и <a href="#">ссылкой</a></h1>
<h2>Заголовок h2 <small>с мелким текстом</small> и <a href="#">ссылкой</a></h2>
<h3>Заголовок h3 <small>с мелким текстом</small> и <a href="#">ссылкой</a></h3>
<h4>Заголовок h4 <small>с мелким текстом</small> и <a href="#">ссылкой</a></h4>
<h5>Заголовок h5 <small>с мелким текстом</small> и <a href="#">ссылкой</a></h5>
<h6>Заголовок h6 <small>с мелким текстом</small> и <a href="#">ссылкой</a></h6>
```

---

<div class="h1">Блок с классом h1 <small>с мелким текстом</small> и <a href="#">ссылкой</a></div>
<div class="h2">Блок с классом h2 <small>с мелким текстом</small> и <a href="#">ссылкой</a></div>
<div class="h3">Блок с классом h3 <small>с мелким текстом</small> и <a href="#">ссылкой</a></div>
<div class="h4">Блок с классом h4 <small>с мелким текстом</small> и <a href="#">ссылкой</a></div>
<div class="h5">Блок с классом h5 <small>с мелким текстом</small> и <a href="#">ссылкой</a></div>
<div class="h6">Блок с классом h6 <small>с мелким текстом</small> и <a href="#">ссылкой</a></div>

```html
<div class="h1">Блок с классом h1 <small>с мелким текстом</small> и <a href="#">ссылкой</a></div>
<div class="h2">Блок с классом h2 <small>с мелким текстом</small> и <a href="#">ссылкой</a></div>
<div class="h3">Блок с классом h3 <small>с мелким текстом</small> и <a href="#">ссылкой</a></div>
<div class="h4">Блок с классом h4 <small>с мелким текстом</small> и <a href="#">ссылкой</a></div>
<div class="h5">Блок с классом h5 <small>с мелким текстом</small> и <a href="#">ссылкой</a></div>
<div class="h6">Блок с классом h6 <small>с мелким текстом</small> и <a href="#">ссылкой</a></div>
```


---
### [Списки](#lists){#lists}
---

**Ненумерованный список**

<ul>
	<li>Пункт 01</li>
	<li>Пункт 02</li>
	<li>
		Пункт 03
		<ul>
			<li>Подпункт 01</li>
			<li>
				Подпункт 02
				<ul>
					<li>ПодПодпункт 01</li>
					<li>ПодПодпункт 02</li>
				</ul>
			</li>
		</ul>
	</li>
	<li>Пункт 04</li>
	<li>Пункт 05</li>
</ul>

```html
<ul>
	<li>Пункт 01</li>
	<li>Пункт 02</li>
	<li>
		Пункт 03
		<ul>
			<li>Подпункт 01</li>
			<li>
				Подпункт 02
				<ul>
					<li>ПодПодпункт 01</li>
					<li>ПодПодпункт 02</li>
				</ul>
			</li>
		</ul>
	</li>
	<li>Пункт 04</li>
	<li>Пункт 05</li>
</ul>
```

---

**Нумерованный список**

<ol>
	<li>Пункт 01</li>
	<li>Пункт 02</li>
	<li>
		Пункт 03
		<ol>
			<li>Подпункт 01</li>
			<li>
				Подпункт 02
				<ol>
					<li>ПодПодпункт 01</li>
					<li>ПодПодпункт 02</li>
				</ol>
			</li>
		</ol>
	</li>
	<li>Пункт 04</li>
	<li>Пункт 05</li>
</ol>

```html
<ol>
	<li>Пункт 01</li>
	<li>Пункт 02</li>
	<li>
		Пункт 03
		<ol>
			<li>Подпункт 01</li>
			<li>
				Подпункт 02
				<ol>
					<li>ПодПодпункт 01</li>
					<li>ПодПодпункт 02</li>
				</ol>
			</li>
		</ol>
	</li>
	<li>Пункт 04</li>
	<li>Пункт 05</li>
</ol>
```

---

**Unstyled**

<ul class="unstyled">
	<li>Пункт 01</li>
	<li>Пункт 02</li>
</ul>

<ol class="unstyled">
	<li>Пункт 01</li>
	<li>Пункт 02</li>
</ol>

```html
<ul class="unstyled">
	<li>Пункт 01</li>
	<li>Пункт 02</li>
</ul>
<ol class="unstyled">
	<li>Пункт 01</li>
	<li>Пункт 02</li>
</ol>
```


---
### [Исходный код](#code){#code}
---

<pre>
P R E F O R M A T T E D T E X T
! " # $ % &amp; ' ( ) * + , - . /
0 1 2 3 4 5 6 7 8 9 : ; &lt; = &gt; ?
@ A B C D E F G H I J K L M N O
P Q R S T U V W X Y Z [ \ ] ^ _
` a b c d e f g h i j k l m n o
p q r s t u v w x y z { | } ~
</pre>

**pre>code**
<pre><code class="nohighlight">&lt;html>
	&lt;head>
	&lt;/head>
	&lt;body>
		&lt;div class="comeclass"> текст &lt;div>
	&lt;/body>
&lt;/html></code></pre>

```html
<pre>
P R E F O R M A T T E D T E X T
! " # $ % &amp; ' ( ) * + , - . /
0 1 2 3 4 5 6 7 8 9 : ; &lt; = &gt; ?
@ A B C D E F G H I J K L M N O
P Q R S T U V W X Y Z [ \ ] ^ _
` a b c d e f g h i j k l m n o
p q r s t u v w x y z { | } ~
</pre>

<pre><code>&lt;html>
	&lt;head>
	&lt;/head>
	&lt;body>
		&lt;div class="comeclass"> текст &lt;div>
	&lt;/body>
&lt;/html></code></pre>
```


---
### [Строчные теги](#strtags){#strtags}
---
<p>Тег: <a href="#">a</a></p>
<p>Тег: <abbr>abbr</abbr> и <abbr title="Аббревиатура">abbr</abbr> с заголовком</p>
<p>Тег: <b>b</b></p>
<p>Тег: <cite>cite</cite></p>
<p>Тег: <code>code</code></p>
<p>Тег: <em>em</em></p>
<p>Тег: <del>del</del></p>
<p>Тег: <dfn>dfn</dfn> и <dfn title="Текст заголовка">dfn с тултипом</dfn></p>
<p>Тег: <i>i</i></p>
<p>Тег: <ins>ins</ins></p>
<p>Тег: <kbd>kbd</kbd></p>
<p>Тег: <mark>mark</mark></p>
<p>Тег: <q>q</q></p>
<p>Тег: <q>q <q> с </q> цитатаой</q></p>
<p>Тег: <s>s</s></p>
<p>Тег: <samp>samp</samp></p>
<p>Тег: <small>small</small></p>
<p>Тег: <span>span</span></p>
<p>Тег: <strong>strong</strong></p>
<p>Тег: <sub>sub</sub></p>
<p>Тег: <sup>sup</sup></p>
<p>Тег: <u>u</u></p>
<p>Тег: <var>var</var></p>

```html
<p>Тег: <a href="#">a</a></p>
<p>Тег: <abbr>abbr</abbr> и <abbr title="Аббревиатура">abbr</abbr> с заголовком</p>
<p>Тег: <b>b</b></p>
<p>Тег: <cite>cite</cite></p>
<p>Тег: <code>code</code></p>
<p>Тег: <em>em</em></p>
<p>Тег: <del>del</del></p>
<p>Тег: <dfn>dfn</dfn> и <dfn title="Текст заголовка">dfn с тултипом</dfn></p>
<p>Тег: <i>i</i></p>
<p>Тег: <ins>ins</ins></p>
<p>Тег: <kbd>kbd</kbd></p>
<p>Тег: <mark>mark</mark></p>
<p>Тег: <q>q</q></p>
<p>Тег: <q>q <q> с </q> цитатаой</q></p>
<p>Тег: <s>s</s></p>
<p>Тег: <samp>samp</samp></p>
<p>Тег: <small>small</small></p>
<p>Тег: <span>span</span></p>
<p>Тег: <strong>strong</strong></p>
<p>Тег: <sub>sub</sub></p>
<p>Тег: <sup>sup</sup></p>
<p>Тег: <u>u</u></p>
<p>Тег: <var>var</var></p>
```