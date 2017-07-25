let abierto = false;

function openNav() { 
	if(!abierto){
	    	abierto = true;
            document.getElementById('menu-toggle').className = "fa fa-bars fa-2x";
		}else{
			document.getElementById('menu-toggle').className = "fa fa-times fa-2x";
			abierto=false;
		}
}

 $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });