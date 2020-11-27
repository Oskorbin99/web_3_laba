

function dyn(test){
BodyJS = [$("div#BodyImgText"),$('img#Img_body'),$('p#text_body'),$('p#mus1'),$('audio#Audiomus1'),document.querySelector('p#mus2'),document.querySelector('audio#Audiomus2') ];
	$("div#BodyContent").show();
	$("div#laba3").hide();
	BodyJS[0].text( nameOsnova[test]);
	BodyJS[1].attr("src",ImgOsnova[test]);
	BodyJS[2].text( TextOsnova [test]);
	BodyJS[3].text( Namemus [0][test]);
	BodyJS[4].attr("src", Audiomus [0][test]);
	BodyJS[5].innerHTML = Namemus [1][test];
	BodyJS[6].src =  Audiomus [1][test];
	for (i = 0;i<7;i++)
	{
		if (i != test)
		{
			$('div#menu_'+i).css("margin-left","10px");
			$('div#menu_'+i).css("fontStyle", "normal");
		}
			else
			{
				$('div#menu_'+i).css("margin-left", "-0.5%");
				$('div#menu_'+i).css("fontStyle", "italic");
			}
	}
}
