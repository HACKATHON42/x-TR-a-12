var deger;
var saniye=600;
function saniyeDurdur()
  {
	window.clearInterval(deger);
  }
function saniyeBaslat()
{
	saniye --;
	if(saniye >=0){
		document.getElementById('saniye').innerHTML=saniye;
	}else{
		window.clearInterval(deger);
	}
}
var deger=window.setInterval('saniyeBaslat()',1000);
