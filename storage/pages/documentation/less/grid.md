---
title: Сетка  
description: Описание CSS сетки, используемой в Bitrix Quick Start
template: grid

---

# Сетка Быстрого старта

<a href="https://github.com/pafnuty/bqs-site/blob/dev/storage/pages/documentation/less/grid.md" class="btn btn-mini" target="_blank">Редактировать страницу</a>



---
### [Особенности сетки](#features){#features}
---

- Сетка адаптивная и строится по принципу mobile-first.
- Нет фиксированной ширины ячейки. Ширина формируется автоматически на основе параметров (кол-во ячеек и ширина отступов между ячейками).
- Настраиваемая ширина отступов между ячейками для разных размеров экранов.
- Неорганиченная вложенность сетки с сохранением параметров.
- Настриваемые точки перехода (breackpoints).
- Включение, при необходимости, классов для изменения пордка следования блоков и визуального смещения.
- Можно использовать отдельно от быстого старта в любом проекте.

---
### [Параметры](#options){#options}
---

<table class="table table-bordered">
	<thead>
		<tr>
			<th>Параметр</th>
			<th>Описание параметра</th>
			<th>Значение по умолчанию</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>@columns</td>
			<td>Количество колонок</td>
			<td>12</td>
		</tr>
		<tr>
			<td colspan="3" class="ta-center">
				<b>Ширина отступов между колонок</b>
			</td>
		</tr>
		<tr>
			<td>@gutterWidthMobile</td>
			<td>Мобильники и выше</td>
			<td>10px</td>
		</tr>
		<tr>
			<td>@gutterWidth</td>
			<td>Планшеты и выше</td>
			<td>30px</td>
		</tr>
		<tr>
			<td>@gutterWidthDesktop</td>
			<td>Десктоп и выше</td>
			<td>40px</td>
		</tr>
		<tr>
			<td>@gutterWidthLargeDesktop</td>
			<td>Большой десткоп</td>
			<td>40px</td>
		</tr>
		<tr>
			<td colspan="3" class="ta-center">
				<b>Уменьшаем количество css кода, если не нужен расширенный функционал (0 — откл. 1 — вкл.)</b>
			</td>
		</tr>
		<tr>
			<td>@enablePushPull</td>
			<td>Разрешить классы перемещения (для порядка следования блоков)</td>
			<td>0</td>
		</tr>
		<tr>
			<td>@enableOffset</td>
			<td>
				Разрешить классы смещения (для изменеия визуальной позиции блоков — смещение вправо)
			</td>
			<td>0</td>
		</tr>
		<tr>
			<td colspan="3" class="ta-center">
				<b>Break-Points. Точки перехода между размерами сетки.</b>
			</td>
		</tr>
		<tr>
			<td>@screenPhone</td>
			<td>
				Телефоны
			</td>
			<td>480px</td>
		</tr>
		<tr>
			<td>@screenTablet</td>
			<td>
				Планшеты
			</td>
			<td>768px</td>
		</tr>
		<tr>
			<td>@screenDesktop</td>
			<td>
				Мелкие десктопы и планшеты в горизонтальной ориентации
			</td>
			<td>992px</td>
		</tr>
		<tr>
			<td>@screenLarge</td>
			<td>
				Большие десктопы
			</td>
			<td>1280px</td>
		</tr>
	</tbody>
</table>


<div class="content">
	<div class="col col-mb-12">
		<hr>
		<h3 id="main-classes"><a href="#main-classes">Основные классы</a></h3>
		<hr>
		<p><code>.container</code> — контейнер для блоков c классом <code>.content</code>, имеет 100% ширину. Можно неограниченно вкладывать один контейнер в другой.</p>
		<p><code>.content</code> — контейнер для колонок, выравнивает контент по центру, для разных разрешений имеет разную ширину, настраиваемую в less файле.</p>
		<p><code>.col</code> - базовый класс, для любой колонки сетки.</p>
		<p><code>.col-mb-X</code> — мобильники и выше.</p>
		<p><code>.col-X</code>    — планшеты и выше.</p>
		<p><code>.col-dt-X</code> — десктопы и выше.</p>
		<p><code>.col-ld-X</code> — большие десктопы.</p>
		<p>где X - число от 1 до значения, заданного в <code>@columns</code> (по умолчанию 12)</p>
		
		<hr>
		<h3 id="offset"><a href="#offset">Классы для управления смещением колонок</a></h3>
		<hr>
		<p>Работают только тогда, когда включен параметр: <code>@enableOffset: 1;</code>.</p>
		<p>Классы -offset- нужны для случаев, когда требуется добавить "отступ" справа для колонки, равный ширине одной или нескольких колонок.</p>
		<p><code>.col-mb-offset-X</code> — смещение вправо на X колонок для мобильников и выше.</p>
		<p><code>.col-offset-X</code>    — смещение вправо на X колонок для планшетов и выше.</p>
		<p><code>.col-dt-offset-X</code> — смещение вправо на X колонок для десктопов и выше.</p>
		<p><code>.col-ld-offset-X</code> — смещение вправо на X колонок для больших десктопов.</p>
		<p>где X - число от 1 до значения, заданного в <code>@columns</code>.</p>

		<div class="col-margin-bottom ta-center"><b>Пример</b></div>
		<div class="content">

			<div class="col col-mb-12 col-4 col-offset-2 col-margin-bottom">
				<div class="demo-gray-block">col-4 col-offset-2</div>
			</div>

			<div class="col col-mb-12 col-4 col-margin-bottom">
				<div class="demo-gray-block">col-4</div>
			</div>
		</div>

		<hr>
		<h3 id="pushpull"><a href="#pushpull">Классы для управления позиционированием колонок</a></h3>
		<hr>

		<p>Работают только тогда, когда включен параметр: <code>@enablePushPull: 1;</code>.</p>
		<p>Классы <code>-right-</code> и <code>-left-</code> нужны для случаев, когда требуется визуально поменять колонки местами.</p>
		
		<p><code>.col-mb-right-X</code> — свободное место справа, шириной X колонок для мобильников и выше.</p>
		<p><code>.col-right-X</code>    — свободное место справа, шириной X колонок для планшетов и выше.</p>
		<p><code>.col-dt-right-X</code> — свободное место справа, шириной X колонок для десктопов и выше.</p>
		<p><code>.col-ld-right-X</code> — свободное место справа, шириной X колонок для больших десктопов.</p>
		
		<p><code>.col-mb-left-X</code> — свободное место слева, шириной X колонок для мобильников и выше.</p>
		<p><code>.col-left-X</code>    — свободное место слева, шириной X колонок для планшетов и выше.</p>
		<p><code>.col-dt-left-X</code> — свободное место слева, шириной X колонок для десктопов и выше.</p>
		<p><code>.col-ld-left-X</code> — свободное место слева, шириной X колонок для больших десктопов.</p>
		
		<p>где X - число от 1 до значения, заданного в <code>@columns</code>.</p>

		<div class="col-margin-bottom ta-center"><b>Пример</b></div>
		<div class="content">
			<div class="col col-mb-12 col-4 col-left-8 col-margin-bottom">
				<div class="demo-gray-block">col-4 col-left-8</div>
			</div>
			<div class="col col-mb-12 col-8 col-right-4 col-margin-bottom">
				<div class="demo-gray-block">col-8 col-right-4</div>
			</div>
		</div>
		
		<hr>
		<h3 id="helpers"><a href="#helpers">Вспомогательные классы сетки</a></h3>
		<hr>
		
		<p><code>.center-block</code> — выравнивание блока по центру родителя</p>
		
		<p><b>Показ/скрытие элементов только на определённых экранах</b></p>
		<p><code>.col-mb-hide, .mb-hide</code> — скрытие блоков на мобильниках.</p>
		<p><code>.col-hide, .tablet-hide</code> — скрытие блоков на планшетах.</p>
		<p><code>.col-dt-hide, .dt-hide</code> — скрытие блоков на десктопах.</p>
		<p><code>.col-ld-hide, .ld-hide</code> — скрытие блоков на больших десктопах.</p>
		<p><code>.mb-block</code> — показ блоков на мобильниках.</p>
		<p><code>.tablet-block</code> — показ блоков на планшетах.</p>
		<p><code>.dt-block</code> — показ блоков на десктопах.</p>
		<p><code>.ld-block</code> — показ блоков на больших десктопах.</p>
		
		<p><b>Отступы</b></p>
		<p><code>.col-padding</code> — padding сверху и снизу, равный ширине зазора между колонками.</p>
		
		<p><code>.col-margin</code> — margin сверху и снизу, равный ширине зазора между колонками.</p>
		<p><code>.col-margin-top</code> — margin сверху, равный ширине зазора между колонками.</p>
		<p><code>.col-margin-bottom</code> — margin снизу, равный ширине зазора между колонками.</p>
	</div>
</div>

<div class="content col-margin">
	<div class="col col-mb-12 col-margin-bottom">
		<hr>
		<h3 id="example"><a href="#example">Пример сетки</a> <small class="text-muted">цифра означает ширину колонки</small></h3>
		<hr>
	</div>
	<div class="col col-mb-1">
		<div class="demo-gray-block">1</div>
	</div>
	<div class="col col-mb-1">
		<div class="demo-gray-block">1</div>
	</div>
	<div class="col col-mb-1">
		<div class="demo-gray-block">1</div>
	</div>
	<div class="col col-mb-1">
		<div class="demo-gray-block">1</div>
	</div>
	<div class="col col-mb-1">
		<div class="demo-gray-block">1</div>
	</div>
	<div class="col col-mb-1">
		<div class="demo-gray-block">1</div>
	</div>
	<div class="col col-mb-1">
		<div class="demo-gray-block">1</div>
	</div>
	<div class="col col-mb-1">
		<div class="demo-gray-block">1</div>
	</div>
	<div class="col col-mb-1">
		<div class="demo-gray-block">1</div>
	</div>
	<div class="col col-mb-1">
		<div class="demo-gray-block">1</div>
	</div>
	<div class="col col-mb-1">
		<div class="demo-gray-block">1</div>
	</div>
	<div class="col col-mb-1">
		<div class="demo-gray-block">1</div>
	</div>
</div>
<div class="content col-margin">
	<div class="col col-mb-2">
		<div class="demo-gray-block">2</div>
	</div>
	<div class="col col-mb-2">
		<div class="demo-gray-block">2</div>
	</div>
	<div class="col col-mb-2">
		<div class="demo-gray-block">2</div>
	</div>
	<div class="col col-mb-2">
		<div class="demo-gray-block">2</div>
	</div>
	<div class="col col-mb-2">
		<div class="demo-gray-block">2</div>
	</div>
	<div class="col col-mb-2">
		<div class="demo-gray-block">2</div>
	</div>
</div>
<div class="content col-margin">
	<div class="col col-mb-3">
		<div class="demo-gray-block">3</div>
	</div>
	<div class="col col-mb-3">
		<div class="demo-gray-block">3</div>
	</div>
	<div class="col col-mb-3">
		<div class="demo-gray-block">3</div>
	</div>
	<div class="col col-mb-3">
		<div class="demo-gray-block">3</div>
	</div>      
</div>
<div class="content col-margin">
	<div class="col col-mb-4">
		<div class="demo-gray-block">4</div>
	</div>
	<div class="col col-mb-4">
		<div class="demo-gray-block">4</div>
	</div>
	<div class="col col-mb-4">
		<div class="demo-gray-block">4</div>
	</div>      
</div>
<div class="content col-margin">
	<div class="col col-mb-6">
		<div class="demo-gray-block">6</div>
	</div>
	<div class="col col-mb-6">
		<div class="demo-gray-block">6</div>
	</div>      
</div>
<div class="content col-margin">
	<div class="col col-mb-12">
		<div class="demo-gray-block">12</div>
	</div>  
</div>
<div class="content col-margin">
	<div class="col col-mb-2">
		<div class="demo-gray-block">2</div>
	</div>
	<div class="col col-mb-10">
		<div class="demo-gray-block">10</div>
	</div>      
</div>
<div class="content col-margin">
	<div class="col col-mb-3">
		<div class="demo-gray-block">3</div>
	</div>
	<div class="col col-mb-9">
		<div class="demo-gray-block">9</div>
	</div>      
</div>
<div class="content col-margin">
	<div class="col col-mb-4">
		<div class="demo-gray-block">4</div>
	</div>
	<div class="col col-mb-8">
		<div class="demo-gray-block">8</div>
	</div>      
</div>
<div class="content col-margin">
	<div class="col col-mb-5">
		<div class="demo-gray-block">5</div>
	</div>
	<div class="col col-mb-7">
		<div class="demo-gray-block">7</div>
	</div>      
</div>

