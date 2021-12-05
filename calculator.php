<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="UTF-8" />
	<title>Калькулятор дров - Дрова в Гатчине</title>
	<meta name="description" content="Калькулятор для расчёта количества дров для отопления." />
    <meta name="keywords" content="калькулятор дров" />
		<?php
$page="calculator";
include("block/header.php");
?> 

    <div class="wrapper">
    
    		<div class="grids">

                  <div class="grid-16 grid">
                            <h2>Калькулятор</h2>
                            <form>
							<table>
							<tr><td>Порода дров</td>
							<td>
							<select id="poroda" class="input-text">
								<option value="650">Берёза</option>
								<option value="550">Ольха</option>
								<option value="510">Осина</option>
								<option value="690">Дуб</option>
								<option value="520">Сосна</option>
								<option value="450">Ель</option>
							</select>
							</td></tr>
							<tr><td>Влажность дров</td><td>
							<select id="vlagnost" class="input-text">
								<option value="3634">15</option>
								<option value="3381">20</option>
								<option value="3128">25</option>
								<option value="2875">30</option>
								<option value="2745">35</option>
								<option value="2622">40</option>
								<option value="2116">45</option>
								<option value="1863">50</option>
							</select>
							</td></tr>
							<tr><td>Отапливаемая площадь</td><td><input class="input-text" type="text" id="ploshad" value="100" size=5 maxlength=5>м2</td></tr>
							<tr><td>Период отопления</td><td><input class="input-text" id="period" type="text" value="100" size=5 maxlength=5><select class="input-text" id="type_period">
								<option value="1">дней</option>
								<option value="30">месяцев</option>
								<option value="365">лет</option>
							</select></td></tr>
							<tr><td>Сколько потребуется энергии</td><td><span id="kkal"></span> ккал</td></tr>
							<tr><td>Сколько потребуется дров</td><td><span id="objom"></span> м3</td></tr>
							<tr><td>Стоимость дров</td><td><span id="itog"></span> руб</td></tr>
							</table>
							</form>
							<h3>Нужны дрова? - позвоните нам по телефону +7(921)342-24-54</h3>
							<script type="text/javascript">
							function numFormat(n, d, s) { // number format function
							if (arguments.length == 2) { s = " "; }
							if (arguments.length == 1) { s = " "; d = "."; }
							n = n.toString();
							a = n.split(d);
							x = a[0];
							y = a[1];
							z = "";
							if (typeof(x) != "undefined") {
							for (i=x.length-1;i>=0;i--)
								z += x.charAt(i);
							z = z.replace(/(\d{3})/g, "$1" + s);
							if (z.slice(-s.length) == s)
								z = z.slice(0, -s.length);
							x = "";
							for (i=z.length-1;i>=0;i--)
								x += z.charAt(i);
							if (typeof(y) != "undefined" && y.length > 0)
								x += d + y;
							}
							return x;
						}
							function uploadform(){

							//Получаем данные
							var poroda=parseFloat($("#poroda").val());
							var vlagnost=parseInt($("#vlagnost").val());
							var ploshad=parseFloat($("#ploshad").val());
							var period=parseFloat($("#period").val());
							var type_period=parseInt($("#type_period").val());
							//Считаем
							var error=0;
							period=period*type_period;
							//50 Вт/м²
							var kkal=Math.ceil(period*24*50*ploshad*860.42065/1000);
							
							/*
							1 плотный кубометр березовых дров = 550 кг = 1,062Мкал
							1 складочный кубометр березовых дров = 423 кг = 0,816Мкал
							1 навальный кубометр березовых дров = 323 кг = 0,623Мкал
							*/
							//Выводим результат
							var ves=kkal/vlagnost/0.7;
							var objom=Math.round(ves/poroda);
							var itog=objom*1300;
							$("#kkal").html(numFormat(kkal));
							$("#objom").html(objom);
							$("#itog").html(itog);
							}
							uploadform();
							$(".input-text").change(uploadform);
							$(".input-text").keyup(uploadform);
							</script>
                            
                            
							<p style="text-align: justify;">
	Наиболее полезными и экономичными в плане расхода для получения тепла считаются дрова лежавшие на открытом воздухе под навесом один или два года. Влажность таких дров примерно равна 15-20%. Поэтому абсолютно оправдан запас не на одну зиму, а на два-три сезона (текущий и 1-2 следующих). От того сколько запасов дров было сделано весной и летом напрямую зависит сколько будет нужно дров зимой. Также как хороший алкоголь, дрова со временем становятся заметно лучше.</p>
<h3>
	Исходные данные использованные в калькуляторе расхода дров:</h3>
<p>
	&nbsp;</p>
<p style="text-align: justify;">
	При выборе дров для камина или печи большое значение имеет влажность. От влажности в первую очередь и зависит теплотворная способность. Считается, что для отопления наиболее хороши поленья влажностью не более 25%. В таблице приводятся показатели теплотворной способности (количество тепла при сгорании 1 кг дров в зависимости от их влажности):</p>
<table border="1" style="width: 100%;">
	<tbody>
		<tr>
			<td>
				<div style="text-align: center;">
					<strong>Влажность дров (%)</strong></div>
			</td>
			<td>
				<div style="text-align: center;">
					<strong>Теплотворность (ккал)</strong></div>
			</td>
			<td>
				<div style="text-align: center;">
					<strong>Примечания</strong></div>
			</td>
		</tr>
		<tr>
			<td>
				<div style="text-align: center;">
					15</div>
			</td>
			<td>
				<div style="text-align: center;">
					3634</div>
			</td>
			<td>
				<div style="text-align: center;">
					дрова камерной сушки</div>
			</td>
		</tr>
		<tr>
			<td>
				<div style="text-align: center;">
					20</div>
			</td>
			<td>
				<div style="text-align: center;">
					3381</div>
			</td>
			<td>
				<div style="text-align: center;">
					годовалые дрова под навесом</div>
			</td>
		</tr>
		<tr>
			<td>
				<div style="text-align: center;">
					25</div>
			</td>
			<td>
				<div style="text-align: center;">
					3128</div>
			</td>
			<td>
				&nbsp;</td>
		</tr>
		<tr>
			<td>
				<div style="text-align: center;">
					30</div>
			</td>
			<td>
				<div style="text-align: center;">
					2875</div>
			</td>
			<td>
				&nbsp;</td>
		</tr>
		<tr>
			<td>
				<div style="text-align: center;">
					40</div>
			</td>
			<td>
				<div style="text-align: center;">
					2622</div>
			</td>
			<td>
				&nbsp;</td>
		</tr>
		<tr>
			<td>
				<div style="text-align: center;">
					45</div>
			</td>
			<td>
				<div style="text-align: center;">
					2116</div>
			</td>
			<td>
				&nbsp;</td>
		</tr>
		<tr>
			<td>
				<div style="text-align: center;">
					50</div>
			</td>
			<td>
				<div style="text-align: center;">
					1863</div>
			</td>
			<td>
				<div style="text-align: center;">
					свежесрубленные дрова</div>
			</td>
		</tr>
	</tbody>
</table>
<p>
	&nbsp;</p>
<p>
	На расход дров при топке камина или печи также влияет плотность или твердость древесины. В таблице даны показатели плотности древесины при влажности 12%:</p>
<table border="1" style="width: 100%;">
	<tbody>
		<tr>
			<td>
				<div style="text-align: center;">
					<strong>Порода дерева</strong></div>
			</td>
			<td>
				<div style="text-align: center;">
					<strong>Плотность (г/см<sup>3</sup>)</strong></div>
			</td>
		</tr>
		<tr>
			<td>
				<div style="text-align: center;">
					Ель</div>
			</td>
			<td>
				<div style="text-align: center;">
					0.45</div>
			</td>
		</tr>
		<tr>
			<td>
				<div style="text-align: center;">
					Осина</div>
			</td>
			<td>
				<div style="text-align: center;">
					0.51</div>
			</td>
		</tr>
		<tr>
			<td>
				<div style="text-align: center;">
					<span style="text-decoration: underline;">Сосна</span></div>
			</td>
			<td>
				<div style="text-align: center;">
					0.52</div>
			</td>
		</tr>
		<tr>
			<td>
				<div style="text-align: center;">
					<span style="text-decoration: underline;">Ольха</span></div>
			</td>
			<td>
				<div style="text-align: center;">
					0.55</div>
			</td>
		</tr>
		<tr>
			<td>
				<div style="text-align: center;">
					<span style="text-decoration: underline;">Береза</span></div>
			</td>
			<td>
				<div style="text-align: center;">
					0.65</div>
			</td>
		</tr>
		<tr>
			<td>
				<div style="text-align: center;">
					Вишня</div>
			</td>
			<td>
				<div style="text-align: center;">
					0.66</div>
			</td>
		</tr>
		<tr>
			<td>
				<div style="text-align: center;">
					Лиственница</div>
			</td>
			<td>
				<div style="text-align: center;">
					0.66</div>
			</td>
		</tr>
		<tr>
			<td>
				<div style="text-align: center;">
					<span style="text-decoration: underline;">Дуб</span></div>
			</td>
			<td>
				<div style="text-align: center;">
					0.69</div>
			</td>
		</tr>
	</tbody>
</table>
<p>
	&nbsp;</p>
<p>
	Удельная теплотворная способность различных пород древесины:</p>
<table border="1" style="width: 100%;">
	<tbody>
		<tr>
			<td>
				<div style="text-align: center;">
					<strong>Порода дерева</strong></div>
			</td>
			<td>
				<div style="text-align: center;">
					<strong>Массовая теплотворная способность (ккал)</strong></div>
			</td>
			<td>
				<div style="text-align: center;">
					<strong>Плотность сухой древесины (г/см<sup>3</sup>)</strong></div>
			</td>
			<td>
				<div style="text-align: center;">
					<strong>Удельная теплотворная способность (ккал)</strong></div>
			</td>
		</tr>
		<tr>
			<td>
				<div style="text-align: center;">
					Дуб</div>
			</td>
			<td>
				<div style="text-align: center;">
					4857</div>
			</td>
			<td>
				<div style="text-align: center;">
					0,64</div>
			</td>
			<td>
				<div style="text-align: center;">
					3108</div>
			</td>
		</tr>
		<tr>
			<td>
				<div style="text-align: center;">
					Береза</div>
			</td>
			<td>
				<div style="text-align: center;">
					4919</div>
			</td>
			<td>
				<div style="text-align: center;">
					0,57</div>
			</td>
			<td>
				<div style="text-align: center;">
					2804</div>
			</td>
		</tr>
		<tr>
			<td>
				<div style="text-align: center;">
					Сосна</div>
			</td>
			<td>
				<div style="text-align: center;">
					5064</div>
			</td>
			<td>
				<div style="text-align: center;">
					0,42</div>
			</td>
			<td>
				<div style="text-align: center;">
					2127</div>
			</td>
		</tr>
		<tr>
			<td>
				<div style="text-align: center;">
					Ольха</div>
			</td>
			<td>
				<div style="text-align: center;">
					4878</div>
			</td>
			<td>
				<div style="text-align: center;">
					0,43</div>
			</td>
			<td>
				<div style="text-align: center;">
					2097</div>
			</td>
		</tr>
		<tr>
			<td>
				<div style="text-align: center;">
					Ель</div>
			</td>
			<td>
				<div style="text-align: center;">
					4857</div>
			</td>
			<td>
				<div style="text-align: center;">
					0,38</div>
			</td>
			<td>
				<div style="text-align: center;">
					1846</div>
			</td>
		</tr>
		<tr>
			<td>
				<div style="text-align: center;">
					Осина</div>
			</td>
			<td>
				<div style="text-align: center;">
					4779</div>
			</td>
			<td>
				<div style="text-align: center;">
					0,37</div>
			</td>
			<td>
				<div style="text-align: center;">
					1768</div>
			</td>
		</tr>
	</tbody>
</table>
<p>
	&nbsp;</p>
<p style="text-align: justify;">
	При расчете расходов КПД дровяной печи принят равным 70% а теплопотери при отоплении минимальными. Высота потолка в доме принята среднестатистической. Если Вам нужно рассчитать сколько дров нужно для отопления на самую холодную зиму в истории наблюдений для нестандартного частного загородного дома, используйте <b>калькулятор расхода дров</b>, применяя к нему поправки.</p>
	
	<!-- Put this script tag to the <head> of your page -->
<script type="text/javascript" src="//vk.com/js/api/openapi.js?116"></script>

<script type="text/javascript">
  VK.init({apiId: 4952111, onlyWidgets: true});
</script>

<!-- Put this div tag to the place, where the Comments block will be -->
<div id="vk_comments"></div>
<script type="text/javascript">
VK.Widgets.Comments("vk_comments", {limit: 10, width: "665", attach: "*"});
</script>
	</div><!--end of grid-10--> 
                
                

           
                
			</div><!--end of grids-->
           
		</div><!--end of wrapper-->
<hr /> 		

<!--========================================================================== Footer =====================================================================================-->     
<?php
include("block/footer.php");
?>