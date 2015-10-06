Title: UI  
Description: Описание ui элементов, используемых в Bitrix Quick Start
Date: 2015-10-04 22:50 
Robots: index,follow

----

# UI

<div class="tip">
	:construction: Страница не закончена. <a href="https://github.com/pafnuty/bqs-site/blob/dev/content/documentation/less/ui.md" class="btn btn-small" target="_blank">Редактировать</a>
</div>

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






