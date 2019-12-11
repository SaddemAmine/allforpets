function delconfirm(str,path) {
	document.getElementById("dellink"+str).innerHTML = '<span class="icon text-white-50"><i class="fas fa-trash"></i></span><span class="text">Confirmation</span>';
	document.getElementById("dellink"+str).setAttribute("onclick","delconfirm2("+str+",'"+path+"')");
	document.getElementById("dellink"+str).setAttribute("class","btn btn-success btn-icon-split");
}
function delconfirm2(str,path){
    console.log("test");
	document.getElementById("dellink"+str).setAttribute("href","supprimer"+path+".php?id"+path+"="+str);
}