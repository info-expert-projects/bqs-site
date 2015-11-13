---
title: Переменные LESS  
description: Описание переменных LESS, используемых в Bitrix Quick Start
template: index

---

# Переменные
<a href="https://github.com/pafnuty/bqs-site/blob/dev/storage/pages/documentation/less/variables.md" class="btn btn-mini" target="_blank">Редактировать страницу</a>

<div class="alert alert-error mt20">
	<p>Прежде всего необходимо отметить тот факт, что QuickStart это набор заготовок под старт проекта с нуля.</p>
	<p>Поэтому в нём нет вагона переменных, как в бутстрапе или другом "взрослом фреймворке", а есть только то, что действительно необходимо для старта, не более.</p>
	<p>Всё остальное необходимо делать под конкретный проект, внося изменения в less-файлы.</p>
</div>

Список переменных, используемых в Быстром старте по умолчанию.

```less
// Формируем цветовую схему сайта

@primary:            #00a6ed;     // primary
@secondary:          #f6511d;     // secondary
@additional:         #ffb400;     // additional

@textDark:           #1c1c1c;     // textDark
@textLight:          #828282;     // textLight		

@white:              #fbfdff;     // white
@gray:               #ededed;     // gray
@black:              #181818;     // black

// Цвета ошибок, предупреждений и уведомлений

@info:               #5bc0eb;     // info
@warning:            #ffc857;     // warning
@error:              #f6511d;     // error
@success:            #9bc53d;     // success

// Именованные цвета, для удобства использования

@bodyColor:          @white;      // bodyColor
@textColor:          @textDark;   // textColor
@selectionColor:     @additional; // selectionColor
@linkColor:          @primary;    // linkColor
@linkHoverColor:     @secondary;  // linkHoverColor
@placeholderText:    @white;      // placeholderText

// Цвета кнопок

@btnColor:           @white;      // btnColor
@btnBackground:      @primary;    // btnBackground
@btnHoverColor:      @white;      // btnHoverColor
@btnHoverBackground: @secondary;  // btnHoverBackground



// Шрифты

@sans:  Arial, Tahoma, sans-serif;        // sans
@serif: "Times New Roman", Times, serif;  // serif

// Размеры

@baseFontSize:   16px; // baseFontSize
@baseLineHeight: 20px; // baseLineHeight
@inputHeight:    40px; // inputHeight


// Прочие переменные

@allIconsUrl:       '/local/codenails/images/all-icons.png';    // allIconsUrl
@allIconsUrlRetina: '/local/codenails/images/all-icons@2x.png'; // allIconsUrlRetina
@allIconsSize:      '200px 300px';                              // allIconsSize
```



