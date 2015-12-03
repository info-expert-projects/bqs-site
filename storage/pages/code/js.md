---
title: Правила оформления js-кода
description: Правила оформления js-кода в Bitrix Quick Start
template: index  

---


# Правила оформления js-кода

<div class="tip">
    :construction: Страница не закончена. <a href="https://github.com/pafnuty/bqs-site/blob/dev/storage/pages/code/js.md" class="btn btn-small" target="_blank">Редактировать</a>
</div>

---
## [Комментирование кода](#comments){#comments .h3}
---

Комментирование кода JavaScript — его неотъемлимая часть!

При комментировании кода следует использовать [JSDoc](http://usejsdoc.org/) комментарии.

Для однострочных поясняющих комментариев в коде можно использовать обычные комментарии, начинающиеся с `// `.

---
## [Оформление JavaScript кода](#making){#making .h3}
---

- В качестве отступов используем табуляцию, а не пробелы.
- Перед открывающей фигурной скобкой ставим пробел.
- Открывающая фигурная скобка находится на одной строке.
- Закрывающая фигурная скобка располагается на следующей строке.

### [Переменные](#vars){#vars}


**Имена переменных не должны начинаться с подчеркивания.**

Именуем переменные в стиле camelCase.
```js
var myName = 'Фёдор';
```

Несколько переменных подряд перечисляем через запятую, при этом следует перечислять переменные по одной на строку и выравнивать вертикально.
```js
var myName = 'Фёдор',
    myGender = 'мужик',
    myAge = '35';
```

Допускается использование короткого синтаксиса условий ifelse при назначении переменных.
```js
var foo = bar || 'not set',
    baz = (foo == 150) ? 'wow' : 'sad';
```

Для упрощения восприятия кода следует ставить префикс `$` для переменных, являющихся объектом.
```js
var $this = $(this),
    $data = $this.data(),
    id = $data.id;
```

### [Функции](#functions){#functions}

- Обязательно использование `"use strict";` в функциях!


### [Условия](#conditions){#conditions}

Всегда пишем в нормальном виде, с открывающими и закрывающими скобками, даже если условие в одну строку.
```js
// плохо
if(foo = bar) console.log('foo = bar');

// хорошо
if (foo = bar) {
    console.log('foo = bar');
}
```


---
## [Использование jQuery плагнов](#jquery){#jquery .h3}
---

В быстрый страрт по умолчанию включены следующие библиотеки для удобства разработки:

для работы с формами:
- `cn.custom.form`
- `jquery.form.min` - Подробнее о плагине тут: [form](https://github.com/malsup/form#copyright-and-license)

-`jquery.formstyler.min` - используется для стилизации селектов и других трудно стилизуемых html-элементов. Побробнее о плагине смотреть тут: [jQueryFormStyler](https://github.com/Dimox/jQueryFormStyler) 

- `jquery.ladda.production.min` - красивости для форм и кнопочек
- `jquery.magnificpopup.min` - различные модальные окна. Подробнее о плагине тут: [Magnific Popup](http://dimsemenov.com/plugins/magnific-popup/#build=inline+image+ajax+iframe+gallery+retina+imagezoom+fastclick)
- `jquery.matchHeight-min` - для блоков одной высоты, часто используется в каталоге. Подробнее о плагине тут: [Magnific Popup](http://brm.io/jquery-match-height/)
- `-jquery.nicecode.min` - для удобной и красивой распечатки массивов и разных данных

## Инструменты для автоформатирования кода, настройка параметров
