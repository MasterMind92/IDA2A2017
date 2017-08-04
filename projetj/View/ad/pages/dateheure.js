function afficher()
{	
	var jrtab=new Array("Dimanche","Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi")
	var mstab=new Array("Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre")

	var mydate=new Date();
	var an=mydate.getFullYear();
	var jrs=mydate.getDay();
	var ms=mydate.getMonth();
	var jrc=mydate.getDate();
	var h=mydate.getHours();
	var m=mydate.getMinutes();
	var s=mydate.getSeconds();
	if(h<10)
	{h="0"+h;}
	if(m<10)
	{m="0"+m;}
	if(s<10)
	{s="0"+s;}
	var cdate=jrtab[jrs]+" "+jrc+" "+mstab[ms]+" "+an+"  "+h+"h"+m+"min"+s+"s";
	document.horloge.ici.value=cdate;
	setTimeout("afficher()",1000);
}