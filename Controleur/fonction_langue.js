function translate_page(lang)
{
	var url = self.location;
    var base = document.getElementsByTagName('base');
    if(base.length>0)
    {
    	url = base[0].href;
    }
	top.location='http://www.google.com/translate?hl=fr&sl=auto&tl='+lang+'&u='+url;
    return true;
}
var html_3293 = "<a style=\"cursor:pointer;margin:1px;display:inline-block;\" onclick=\"translate_page(\'en\');\"><div style=\"width:50px;height:50px;background:url(\'http://services.supportduweb.com/translator/styles/images/s2.png\');background-position:-0px 0px;display:inline-block;padding:0px;margin:0px;\" onmouseover=\"this.style.backgroundPosition=\'-0px -50px\';\" onmouseout=\"this.style.backgroundPosition=\'-0px 0px\';\" alt=\"English\"></div></a>";
document.getElementById('translator_3293').innerHTML=html_3293;
