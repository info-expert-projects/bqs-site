---
title: UI  
description: Описание ui элементов, используемых в Bitrix Quick Start
template: index

---

# UI
<a href="https://github.com/pafnuty/bqs-site/blob/dev/content/documentation/less/ui.md" class="btn btn-mini" target="_blank">Редактировать страницу</a>


На этой странице даны примеры UI-элементов, уже готовых для использования.

---
### [Копки](#buttons){#buttons}
---

Для стилизации элементов в виде кнопок предназначен класс `.btn`.

Его можно применять к любому html-элементу на странице.
```html
<a href="#" class="btn">Ссылка</a>
<span class="btn">span</span>
<div class="btn">div</div>
<input type="submit" class="btn" value="input">
<button class="btn">button</button>
```

#### Примеры кнопок:

<div class="content">
	<div class="col col-mb-12 mb10">
		<p>
			<b>Разные html-элементы</b>
		</p>
		<div class="fl-l mr10">
			<a href="#" class="btn">Ссылка</a>
		</div>
		<div class="fl-l mr10">
			<span class="btn">span</span>
		</div>
		<div class="fl-l mr10">
			<div class="btn">div</div>
		</div>
		<div class="fl-l mr10">
			<input type="submit" class="btn" value="input">
		</div>
		<div class="fl-l mr10">
			<button class="btn">button</button>
		</div>
	</div>
</div>

<div class="content">
	<div class="col col-mb-12 mb10">
		<p>
			<b>Разные цвета</b>
		</p>
		<div class="btn btn-primary mr10">btn-primary</div>
		<div class="btn btn-secondary mr10">btn-secondary</div>
		<div class="btn btn-additional mr10">btn-additional</div>
	</div>
	<div class="col col-mb-12 mb10">
		<p>
			<b>Разные резмеры</b>
		</p>
		<div class="btn btn-primary btn-small mr10">btn-small</div>
		<div class="btn btn-secondary btn-small mr10">btn-small</div>
		<div class="btn btn-additional btn-small mr10">btn-small</div>
	</div>
	<div class="col col-mb-12 mb10">
		<div class="btn btn-primary btn-mini mr10">btn-mini</div>
		<div class="btn btn-secondary btn-mini mr10">btn-mini</div>
		<div class="btn btn-additional btn-mini mr10">btn-mini</div>
	</div>
	<div class="col col-mb-12 mb10">
		<p>
			<b>Отключенные кнопки</b>
		</p>
		<input class="btn btn-primary mr10" type="button" value="disabled" disabled>
		<input class="btn btn-secondary mr10" type="button" value="disabled" disabled>
		<input class="btn btn-additional mr10" type="button" value="disabled" disabled>
	</div>
	<div class="col col-mb-12 mb10">
		<p>
			<b>блочная кнопка</b>
		</p>
		<a href="#" class="btn btn-block">btn-block</a>
	</div>
	<div class="col col-mb-12 mb10">
		<p>
			<b>Разные варианты</b>
		</p>
		<a href="#" class="btn btn-square mr10">btn-square</a>
		<a href="#" class="btn btn-outline mr10">btn-outline</a>
		<a href="#" class="btn btn-link">btn-link</a>
	</div>
</div>


---
### [Инпуты](#inputs){#inputs}
---

```html
<input class="input" type="text">
<textarea class="input"></textarea>

<input type="checkbox" class="checkbox" id="checkbox1" name="checkbox1">
<label for="checkbox1"><span></span> checkbox1</label>

<input type="radio" class="radio" id="radio1" name="radio1">
<label for="radio1"><span></span> checkbox1</label>
```

<div class="content">
	<div class="col col-mb-12">
	
		<form>
			<input class="input mr10" type="text" value=".input">
			<input class="input mr10" disabled="" type="text" value=".input disabled">
			<input class="input mr10" required="" type="text" value=".input required">
	
			<input class="input input-block" type="text" value=".input.input-block">
	
			<textarea class="input">.input</textarea>
			<textarea class="input input-block">.input.input-block</textarea>
	
			<span class="col-2 d-ib ta-right pr20">checkbox2:</span>
			<input class="checkbox" type="checkbox" value="checkbox2" id="checkbox2" name="ckbx2">
			<label for="checkbox2">
				<span></span>
				checkbox2
			</label>
			<br>
			<span class="col-2 d-ib ta-right pr20">radio3:</span>
			<input class="radio" type="radio" value="radio" id="radio3" name="radio2">
			<label for="radio3">
				<span></span>
				radio3
			</label>
			<br>
			<span class="col-2 d-ib ta-right pr20">radio4:</span>
			<input class="radio" type="radio" value="radio" id="radio4" name="radio2">
			<label for="radio4">
				<span></span>
				radio4
			</label>
			<p> </p>
			<span class="col-2 d-ib ta-right pr20">email:</span>
			<input class="input" type="email" value="email">
			<br>
			<span class="col-2 d-ib ta-right pr20">number:</span>
			<input class="input" type="number" value="number">
			<br>
			<span class="col-2 d-ib ta-right pr20">password:</span>
			<input class="input" type="password" value="password">
			<br>
			<span class="col-2 d-ib ta-right pr20">search:</span>
			<input class="input" type="search" value="search">
			<br>
			<span class="col-2 d-ib ta-right pr20">text:</span>
			<input class="input" type="text" value="text">
		</form>
	</div>
</div>

---
### [Файловые инпуты](#inputfile){#inputfile}
---

```html
<input class="input" type="file">
<input class="input" type="file" multiple>
<input class="styler" type="file">
<input class="styler" type="file" multiple data-placeholder="Выберите файлы">
```
<div class="content">
	<div class="col col-mb-12">
		<form>
			<div class="content">
				<div class="col col-mb-12 col-2">
					<b>.input</b>
				</div>
				<div class="col col-mb-12 col-10">
					<input class="input" type="file">
					<br>
					<input class="input" type="file" multiple>
				</div>
			</div>
			<div class="content">
				<div class="col col-mb-12 col-2">
					<b>.styler</b>
				</div>
				<div class="col col-mb-12 col-10">
					<input class="styler col-4" type="file">
					<br>
					<input class="styler col-4" type="file" multeple>
				</div>
			</div>
		</form>
	</div>
</div>


---
### [Селекты](#selects){#selects}
---

```html
<select class="styler">
	<option value="1">Далеко-далеко за.</option>
	<option value="2">Не, пор?</option>
</select>
```

<div class="content">
	<div class="col col-mb-12">
		<form>
			<p>
				<span class="col-2">.styler</span>
		
				<select class="styler mr10">
					<option value="1">Далеко-далеко за.</option>
					<option value="2">Не, пор?</option>
					<option value="3">Запятой, на берегу!</option>
					<option value="4">Ведущими, послушавшись?</option>
					<option value="5">Имени, журчит.</option>
				</select>
				<select class="styler col-3 mr10">
					<option value="01">Далеко-далеко за.</option>
					<option value="02">Скатился, последний.</option>
					<option value="03">Сих, взобравшись?</option>
					<option value="04">От всех, семь.</option>
					<option value="05">Вершину, свою.</option>
					<option value="06">Однажды, подпоясал!</option>
					<option value="07">Единственное, наш.</option>
					<option value="08">Текст, заглавных.</option>
					<option value="09">Злых, до!</option>
					<option value="10">Знаках, заголовок.</option>
					<option value="11">Путь, однажды.</option>
					<option value="12">Деревни, ему!</option>
					<option value="13">Власти, там?</option>
					<option value="14">Это, рыбными.</option>
					<option value="15">Дороге, встретил.</option>
					<option value="16">Ты, взобравшись.</option>
					<option value="17">Однажды, заголовок.</option>
					<option value="18">Своего, семь.</option>
					<option value="19">Власти, свой.</option>
					<option value="20">Алфавит, но.</option>
					<option value="21">Далеко-далеко за словесными горами в стране.</option>
				</select>
				<select class="styler" disabled>
					<option value="1">Далеко-далеко</option>
				</select>
			</p>
		
			<p>
				<span class="col-2">.input</span>
		
				<select class="input">
					<option value="1">Далеко-далеко за.</option>
					<option value="2">Не, пор?</option>
					<option value="3">Запятой, на берегу!</option>
					<option value="4">Ведущими, послушавшись?</option>
					<option value="5">Имени, журчит.</option>
				</select>
			</p>
			<p>
				<span class="col-2">.input[multiple]</span>
				<select class="input" multiple>
					<option value="1">Далеко-далеко за.</option>
					<option value="2">Не, пор?</option>
					<option value="3">Запятой, на берегу!</option>
					<option value="4">Ведущими, послушавшись?</option>
					<option value="5">Имени, журчит.</option>
				</select>
			</p>
		</form>
	</div>
</div>


---
### [Алерты](#alerts){#alerts}
---

```html
<p class="alert">alert</p>
<p class="alert alert-info">alert-info</p>
<p class="alert alert-error">alert-error</p>
<p class="alert alert-success">alert-success</p>
```

<div class="content">
	<div class="col col-mb-12">
		<p class="alert">alert</p>
		<p class="alert alert-info">alert-info</p>
		<p class="alert alert-error">alert-error</p>
		<p class="alert alert-success">alert-success</p>
	</div>
</div>