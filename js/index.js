function menu(){
	var menu=document.getElementById('menu');

	if (menu.className==="lista-menu") {

		menu.className += " menu2";
		document.getElementById('menu').style.marginLeft="0%";
	}else{
		menu.className="lista-menu";
		document.getElementById('menu').style.marginLeft="-70%";

	}
}