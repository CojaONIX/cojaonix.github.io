/**
 * xySlider v2.2.13
 * Copyright 2013-2015 Goran Cojic
 * Licensed under MIT (http://opensource.org/licenses/MIT)
 */
 
(function ($) {
 
	$.fn.xySlider = function(options) {
		
		var settings = $.extend({
			TransType: 'okvirno',
			ClassType: 'talasi',
			deliX: 2,
			deliY: 2,
			tTotal: 3,
			tClass: 1,
			klaseUnazad: false,
			piecesOpacity: false,
			piecesScale: false,
			piecesRotate: 0,
			boxMoveX: 0,
			boxMoveY: 0,
			boxSkupiX: false,
			boxSkupiY: false,
			randomNaOkvir: false,
			talasi: [],
			prviSingle: 1,
			skokSingle: 1,
			grupaRandom: 1
			
        }, options );

		var deliX = parseInt(settings.deliX);
		var deliY = parseInt(settings.deliY);

		var parceW = $(this).width() / deliX;
		var parceH = $(this).height() / deliY;
				
		$('.pieces').remove();
		for (i = 0; i < deliX * deliY; i++)
			$(this).append('<canvas class="pieces"></canvas>');

		$('.pieces').attr({width: parceW, height: parceH});
		$('.pieces').css({width: parceW, height: parceH});
		
		return this.each(function() {
			var a, aX, aY, bsX, bsY, tX, tY;
			var aMax = 1;
			var ii, jj;
			var rot = (settings.piecesRotate != 0) ? "rotate(" + settings.piecesRotate + "deg)" : "";
			var	sca = settings.piecesScale ? "scale(0)" : "";

			if(settings.piecesOpacity)
				$('.pieces').css({opacity: 0});

			switch(settings.TransType) {
				case "okvirno":
					for (var i = 0; i < deliY; i++) {
						ii = deliY - i - 1;
						for (var j = 0; j < deliX; j++){
							jj = deliX - j - 1;
							aX = Math.min(j, jj);
							aY = Math.min(i, ii);
							a = Math.min(aX, aY);

							if (j == jj) a = aY;
							if (i == ii) a = aX;

							tX = (deliX - 2*a - 1) == 0 ? 0 : (2*(a + 1)) / (deliX - 2*a - 1) * parceW * (j - a) - parceW * (a + 1);
							tY = (deliY - 2*a - 1) == 0 ? 0 : (2*(a + 1)) / (deliY - 2*a - 1) * parceH * (i - a) - parceH * (a + 1);
							tra = "translate(" + tX + "px, " + tY + "px)";

							$('.pieces').eq(i * deliX + j)
								.css({transform: tra + " " + sca + " " + rot})
						}
					}
				break;
				
				case "box":
					for (var i = 0; i < deliY; i++) {
						for (var j = 0; j < deliX; j++){					
							tra = "translate(" + (settings.boxMoveX - j * settings.boxSkupiX) * parceW + "px, " + (settings.boxMoveY - i * settings.boxSkupiY) * parceH + "px)";
							$('.pieces').eq(i * deliX + j)
								.css({transform: tra + " " + sca + " " + rot});
						}
					}
				break;	
				
				case "random":
					for (var i = 0; i < deliY; i++) {
						for (var j = 0; j < deliX; j++){
							mestoX = Math.floor(Math.random() * deliX);
							mestoY = Math.floor(Math.random() * deliY);
							
							if (settings.randomNaOkvir) {
								xySmer = Math.floor(Math.random() * 4);
								if(xySmer == 0) mestoX = -1;
								if(xySmer == 1) mestoY = -1;								
								if(xySmer == 2) mestoX = deliX;
								if(xySmer == 3) mestoY = deliY;
							}
						
							tra = "translate(" + (mestoX - j) * parceW + "px, " + (mestoY - i) * parceH + "px)";
							$('.pieces').eq(i * deliX + j)
								.css({transform: tra + " " + sca + " " + rot});
						}
					}
				break;					
				
				default:

			}

// ===========================================================================

			switch(settings.ClassType) {
				case "talasi":
					for (var i = 0; i < deliY; i++) {
						ii = deliY - i - 1;
						for (var j = 0; j < deliX; j++){
							jj = deliX - j - 1;
							var aArr = [];
							$.each(settings.talasi, function(index, m) {
								if(m == "L") aArr.push(j);
								if(m == "R") aArr.push(jj);
								if(m == "T") aArr.push(i);
								if(m == "B") aArr.push(ii);
								if(m == "LT") aArr.push(i + j);
								if(m == "RT") aArr.push(i + jj);
								if(m == "LB") aArr.push(ii + j);								
								if(m == "RB") aArr.push(ii + jj);
							});

							a = (aArr.length == 0) ? 0 : Math.min(...aArr);
							aMax = Math.max(aMax, a + 1);	
				
							$('.pieces').eq(i * deliX + j).addClass("pieces" + (a + 1));
						}
					}
				break;
				
				case "single":
					a = parseInt(settings.prviSingle) - 1;
					var udarna = a;
					aMax = deliX * deliY;
					
					for (var i = 0; i < aMax; i++) {
						$('.pieces').eq(a).addClass("pieces" + (i + 1));

						a = (a + parseInt(settings.skokSingle)) % aMax;
						if (a == udarna) {
							a = (a + 1) % aMax;
							udarna = a;
						}
					}
				break;
				
				case "random":
					var niz = [];
					var pc;
					
					for (var i = 0; i < deliX * deliY; i++)
						niz.push(i);
				
					for (var i = 0; i < deliX * deliY; i++) {
						a = ~~(i / parseInt(settings.grupaRandom));
						aMax = Math.max(aMax, a + 1);
						rnd = Math.floor(Math.random() * (deliX * deliY - i));
						pc = niz[rnd];
						niz.splice(rnd, 1);
			
						$('.pieces').eq(pc).addClass("pieces" + (a + 1));
					}
				
				break;
			
				default:
			}
			

			for (var i = 0; i < deliY; i++) {
				for (var j = 0; j < deliX; j++){
					a = i * deliX + j;
					ctx = $('.pieces')[a].getContext('2d');
					if($('#drawImg').is(':checked')) {						
						ctx.drawImage($('.sSlika')[rbSlike], j * parceW, i * parceH, parceW, parceH, 0, 0, parceW, parceH);
					}else {
						ctx.fillStyle = "#" + Math.floor(Math.random()*16777215).toString(16);
						ctx.fillRect(0, 0, parceW, parceH);
						ctx.font = "16px Arial";
						ctx.fillStyle = "#fff";
						var klass = $('.pieces').eq(a).attr('class').substring(13);
						ctx.fillText(klass, 5, 15);
					}
				}
			}

// ===========================================================================

			setTimeout(function(){
				var tPeriod = settings.tTotal / aMax;
				var nKasni = 0;

				for(var i = 0; i < aMax; i++){
					klasa = settings.klaseUnazad ? aMax - i : i + 1;
					$('.pieces' + klasa).css({
						transform: "none",
						transition: settings.tClass + "s linear " + nKasni + "s",
						opacity: 1
					});
					nKasni += tPeriod;
				}
			}, 500);

		});
	};

}( jQuery ));
