<!doctype html>
<html>
<head><!--Author: LuMitchell-->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1" /> 
<title>我喜欢<?=$name?>- I Like <?=$name?></title>

<link href="https://cdn.bootcss.com/flat-ui/2.3.0/css/flat-ui.css" rel="stylesheet">
<link href="./css/style.css" type="text/css" rel="stylesheet"> 

</head>

<body>
	<div id="div-title">
		<h1 id="name-title"><a href="/" style="color: #34495e">I Like You</a></h1>
	</div>
	<div class="container">
		<div class="row">
			<div>
				<p class="subtitle">
					你有喜欢的人或物吗？写下TA的名字吧！
					<br>
					<span>
						<p class="subtitle-en">
						Is there someone or something you like? Just write down his/her/its name!
						</p>
					</span>
				</p>
			</div>
		</div>
		<div>
			<div class="span3">
				<div class="tile name-span-bot1">
					<span class="tile inner-div">
   						<span class="tile name-mid">
							<p class="name-ilike-span">I Like</p>
							<div class="you-span">
								<p id="jtextfill2">
									<span id="name-textspan2">
									<?=$name?>
									</span>
								</p>
							</div>
							<p class="dateandby"></p>
   						</span>
					</span>
					<br>
           			<h3 class="tile-title">XXX</h3>
					<p style="margin-bottom: 4px;">When I was <span class='like-count'>19</span></p>
          		</div>
			</div>
			<div class="span4">
				<div class="tile name-span-bot2">
					<div>
						
					</div>
            		<h3 class="tile-title">XXX</h3>
            		<p style="margin-bottom: 0.6em">When I was 17</p>
          		</div>
			</div>
		</div>
	</div>
	<div class="footer">
		<div>
			<ul></ul>
		</div>
		<div>
			<h3 id="f-text">喜欢就是放肆</h3>
			<p style="font-family: Capsuula;font-size: 0.4em; margin-bottom:0;">@Mitchell</p>
		</div>
	</div>
	
	<script>
		var i = false;
		function me()
		{
			if(!i)
				{
					alert("此项为你自己的署名，可不填，不填为匿名");
					i = true;
				}
		}
	</script>
	<script src="https://cdn.bootcss.com/jquery/3.0.0/jquery.min.js"></script>
	<script src="./js/jquery.textfill.min.js"></script>
	<script>
		$('#jtextfill1').textfill({ maxFontPixels: 80 });
		$('#jtextfill2').textfill({ maxFontPixels: 80 });
	</script>
	<script>
		window.onload = function()
		{
			var spant2 = document.getElementById('name-textspan2');
			if (/[\u4E00-\u9FA5]/i.test(spant2.innerHTML))
			{	
				spant2.style.top = '0';
				if(($.trim(spant2.innerHTML).length)>6)
				{
					spant2.style.top = '15%';
				}
			}

			
		}
	</script>

</body>
</html>