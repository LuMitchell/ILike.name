<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1" /> 
<title>{{ config('app.name') }}</title>

<link href="https://cdn.bootcss.com/flat-ui/2.3.0/css/flat-ui.css" rel="stylesheet">
<link href="./css/animate.css" type="text/css" rel="stylesheet"> 
<link href="./css/style.css" type="text/css" rel="stylesheet"> 

</head>

<body>
	<div id="div-title">
		<h1 id="title">I Like You</h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="searchbox">
				<p class="subtitle">
					你有喜欢的人或物吗？写下TA的名字吧！
					<br>
					<span>
						<p class="subtitle-en">
						Is there someone or something you like? Just write down his/her/its name!
						</p>
					</span>
				</p>
				<div class="span1">
					<div><p></p></div>
				</div>
				<div class="span2">
          			<div class="tile tile-hot login-form">
						<p id="ilikediv">
        				<span style="max-width: 10%;font-size: 0.8em">我喜欢</span>
        				<input type="text" placeholder="名字" class="login-field inputbox1" maxlength="14" />
          				<input id="inputme" onClick="me()" type="text" placeholder="署名(可选)" class="login-field inputbox2" maxlength="14" />
          				<a class="btn btn-primary btn-small btn-block" style="max-width: 15%" href="#">确定</a>
          				</p>
          			</div>
        		</div>
				<div class="span1">
					<div><p></p></div>
				</div>
			</div>
		</div>
		<div>
			<div class="span3">
				<div class="tile span-bot1">
					<span class="tile inner-div">
						<span class="tile mid">
							<p class="ilike-span">I Like</p>
							<div class="you-span">
								<p id="jtextfill1">
									<span id="textspan">ilike.name</span>
								</p>
							</div>
							<p class="dateandby">2017.6.25&nbsp;&nbsp;&nbsp;&nbsp;  by&nbsp;&nbsp;&nbsp;&nbsp;Mitchell</p>
   						</span>
   						<span class="tile mid">
							<p class="ilike-span">I Like</p>
							<div class="you-span">
								<p id="jtextfill2">
									<span id="textspan">
									qwq.kim.qwq.kim
									</span>
								</p>
							</div>
							<p class="dateandby">2017.6.25&nbsp;&nbsp;&nbsp;&nbsp;  by&nbsp;&nbsp;&nbsp;&nbsp;Mitchell</p>
   						</span>
					</span>
					<br>
           			<h3 class="tile-title">XXX</h3>
            		<p style="margin-bottom: 4px;">When I was 19</p>
          		</div>
			</div>
			<div class="span4">
				<div class="tile span-bot2">
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
		
	</script>

</body>
</html>