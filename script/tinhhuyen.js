// Script cho tỉnh/huyện
function tinh(){
			matinh=document.getElementById("tinh").value
			objhuyen=document.getElementById("huyen");

			xml=new XMLHttpRequest();
			xml.onreadystatechange=function(){
				if(xml.readyState==4){
					objhuyen.innerHTML=xml.responseText;
				}
			}
			url="huyen.php?matinh="+matinh;
			xml.open("GET",url,"false");
			xml.send();
}
