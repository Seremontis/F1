function classificationTeam(year){
    if (window.XMLHttpRequest)
                    {// code for IE7+, Firefox, Chrome, Opera, Safari
                        xmlhttp=new XMLHttpRequest();
                    }
                    else
                    {// code for IE6, IE5
                        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                    }

                    //var year=<?php echo $_GET['year'];?>;
                    
                    
                    xmlhttp.onload = function() {

                        var xmlDoc = new DOMParser().parseFromString(xmlhttp.responseText,'text/xml');
                        
                        var main=document.getElementsByTagName("main");
                        var h1=document.createElement("h1");
                        h1.appendChild(document.createTextNode("Klasyfikacja zespołowa sezonu "+year));
                        main[0].appendChild(h1);

                        var tab=document.createElement("table");
                        tab.className="clas";
                        var trh=document.createElement("tr");
                        var th1=document.createElement("th");
                        th1.appendChild(document.createTextNode("L.P."));
                        var th2=document.createElement("th");
                        th2.appendChild(document.createTextNode("Nazwa"));
                        var th3=document.createElement("th");
                        th3.appendChild(document.createTextNode("Punkty"));
                        var th4=document.createElement("th");
                        th4.appendChild(document.createTextNode("Wygrane"));

                        trh.appendChild(th1);
                        trh.appendChild(th2);
                        trh.appendChild(th3);
                        trh.appendChild(th4);
                        tab.appendChild(trh);                     
                        var x=xmlDoc.getElementsByTagName("ConstructorStanding");
                        for (i=0;i<x.length;i++)
                        { 
                            var tr=document.createElement("tr");
                            var td1=document.createElement("td");
                            td1.appendChild(document.createTextNode(x[i].getAttribute("position")));
                            var td2=document.createElement("td");
                            td2.appendChild(document.createTextNode(x[i].getElementsByTagName("Name")[0].textContent));
                            var td3=document.createElement("td");
                            td3.appendChild(document.createTextNode(x[i].getAttribute("points")));
                            var td4=document.createElement("td");
                            td4.appendChild(document.createTextNode(x[i].getAttribute("wins")));
                            tr.appendChild(td1);
                            tr.appendChild(td2);
                            tr.appendChild(td3);
                            tr.appendChild(td4);
                            tab.appendChild(tr);
                        }

                        main[0].appendChild(tab);
                        
                    }
                    
                    xmlhttp.open("GET","http://ergast.com/api/f1/"+year+"/constructorStandings.xml",false);
                    xmlhttp.send();
}

function classificationDrive(year){
    if (window.XMLHttpRequest)
    {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
    }
    else
    {// code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    
    xmlhttp.onload = function() {

        var xmlDoc = new DOMParser().parseFromString(xmlhttp.responseText,'text/xml');

        var main=document.getElementsByTagName("main");
        var h1=document.createElement("h1");
        h1.appendChild(document.createTextNode("Klasyfikacja kierowców sezonu "+year));
        main[0].appendChild(h1);

        var tab=document.createElement("table");
        tab.className="clas";
        var trh=document.createElement("tr");
        var th1=document.createElement("th");
        th1.appendChild(document.createTextNode("L.P."));
        var th2=document.createElement("th");
        th2.appendChild(document.createTextNode("Imię i Nazwisko"));
        var th3=document.createElement("th");
        th3.appendChild(document.createTextNode("Punkty"));
        var th4=document.createElement("th");
        th4.appendChild(document.createTextNode("Wygrane"));

        trh.appendChild(th1);
        trh.appendChild(th2);
        trh.appendChild(th3);
        trh.appendChild(th4);
        tab.appendChild(trh);   

        var x=xmlDoc.getElementsByTagName("DriverStanding");
        for (i=0;i<x.length;i++)
        { 
            var tr=document.createElement("tr");
            var td1=document.createElement("td");
            td1.appendChild(document.createTextNode(x[i].getAttribute("position")));
            var td2=document.createElement("td");
            td2.appendChild(document.createTextNode(x[i].getElementsByTagName("GivenName")[0].textContent+" "+x[i].getElementsByTagName("FamilyName")[0].textContent));
            var td3=document.createElement("td");
            td3.appendChild(document.createTextNode(x[i].getAttribute("points")));
            var td4=document.createElement("td");
            td4.appendChild(document.createTextNode(x[i].getAttribute("wins")));
            tr.appendChild(td1);
            tr.appendChild(td2);
            tr.appendChild(td3);
            tr.appendChild(td4);
            tab.appendChild(tr);
        }
        main[0].appendChild(tab);

    }
    
    xmlhttp.open("GET","http://ergast.com/api/f1/"+year+"/driverStandings.xml",false);
    xmlhttp.send();
}

function calendar(year){
    if (window.XMLHttpRequest)
    {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
    }
    else
    {// code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    
    xmlhttp.onload = function() {

        var xmlDoc = new DOMParser().parseFromString(xmlhttp.responseText,'text/xml');

        var main=document.getElementsByTagName("main");
        var h1=document.createElement("h1");
        h1.appendChild(document.createTextNode("Kalendarz sezonu "+year));
        main[0].appendChild(h1);

        var tab=document.createElement("table");
        tab.className="schedule";
        var trh=document.createElement("tr");
        var th1=document.createElement("th");
        th1.appendChild(document.createTextNode("Runda"));
        var th2=document.createElement("th");
        th2.appendChild(document.createTextNode("Nazwa wyścigu"));
        var th3=document.createElement("th");
        th3.appendChild(document.createTextNode("Nazwa toru"));
        var th4=document.createElement("th");
        th4.appendChild(document.createTextNode("Lokalizacja"));
        var th5=document.createElement("th");
        th5.appendChild(document.createTextNode("Data"));


        trh.appendChild(th1);
        trh.appendChild(th2);
        trh.appendChild(th3);
        trh.appendChild(th4);
        trh.appendChild(th5);
        tab.appendChild(trh); 

        var x=xmlDoc.getElementsByTagName("Race");
        for (i=0;i<x.length;i++)
        { 
            var tr=document.createElement("tr");
            var td1=document.createElement("td");
            td1.appendChild(document.createTextNode(x[i].getAttribute("round")));
            var td2=document.createElement("td");
            td2.appendChild(document.createTextNode(x[i].getElementsByTagName("RaceName")[0].textContent));
            var td3=document.createElement("td");
            td3.appendChild(document.createTextNode(x[i].getElementsByTagName("CircuitName")[0].textContent));
            var td4=document.createElement("td");
            td4.appendChild(document.createTextNode(x[i].getElementsByTagName("Locality")[0].textContent));
            var td5=document.createElement("td");
            td5.appendChild(document.createTextNode(x[i].getElementsByTagName("Date")[0].textContent));

            tr.appendChild(td1);
            tr.appendChild(td2);
            tr.appendChild(td3);
            tr.appendChild(td4);
            tr.appendChild(td5);
            tab.appendChild(tr);
        }

        main[0].appendChild(tab);

    }
    
    xmlhttp.open("GET","http://ergast.com/api/f1/"+year+".xml",false);
    xmlhttp.send();
}



function locationTrackPresent(year){

    document.getElementsByTagName('main')[0].style.display="block";
    if (window.XMLHttpRequest)
    {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
    }
    else
    {// code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }       
    
    xmlhttp.onload = function() {

        var xmlDoc = new DOMParser().parseFromString(xmlhttp.responseText,'text/xml');
        
        var licz=document.createElement('ul');
        var h1=document.createElement('h1');
        h1.appendChild(document.createTextNode("Tory sezon "+year));
        licz.appendChild(h1);
        var x=xmlDoc.getElementsByTagName("Circuit");
        for (i=0;i<x.length;i++)
        { 
            var zm=document.createElement('li');
            var zmienna= document.createElement('a');
            zmienna.setAttribute("href",x[i].getAttribute('url'));
            zmienna.setAttribute("target","_blank");
            zmienna.innerHTML=x[i].getElementsByTagName('CircuitName')[0].textContent;
            zm.appendChild(zmienna);
            licz.appendChild(zm);
        }   
        document.getElementsByTagName('main')[0].appendChild(licz);    
    }

    xmlhttp.open("GET","http://ergast.com/api/f1/"+year+"/circuits.xml",false);
    xmlhttp.send();
}

function locationTrackOld(){
    var limit=100;
    var licznik=0;
    if (window.XMLHttpRequest)
            {// code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp=new XMLHttpRequest();
            }
            else
            {// code for IE6, IE5
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
    document.getElementsByTagName('main')[0].style.display="grid";
    var div=document.createElement('div');
    div.setAttribute('class','list')
    var licz=document.createElement('ul');
    var h1=document.createElement('h1');
    h1.appendChild(document.createTextNode("Dawne tory"));
    licz.appendChild(h1);
        while(licznik<limit)
        {
            var year=0;
            xmlhttp.onload = function() {

                var xmlDoc = new DOMParser().parseFromString(xmlhttp.responseText,'text/xml');
                var x=xmlDoc.getElementsByTagName("MRData");
                var limit=x[0].getAttribute('total');
                var x=xmlDoc.getElementsByTagName("Circuit");
                for (i=0;i<x.length;i++)
                { 
                    var zm=document.createElement('li');
                    var zmienna= document.createElement('a');
                    zmienna.setAttribute("href",x[i].getAttribute('url'));
                    zmienna.setAttribute("target","_blank");
                    zmienna.innerHTML=x[i].getElementsByTagName('CircuitName')[0].textContent;
                    zm.appendChild(zmienna);
                    licz.appendChild(zm);
                }   
                  
            }
            
            xmlhttp.open("GET","http://ergast.com/api/f1/circuits?limit=30&offset="+licznik,false);
            xmlhttp.send();

            licznik+=30;
        }
        div.appendChild(licz);
        var div2=document.createElement('div');
        div2.setAttribute('class','list2')
        for(var i=1;i<4;i++){
            var img = document.createElement("img");
            img.src="picture\\track"+i+".jpg";
            div2.appendChild(img);
        }
        
        document.getElementsByTagName('main')[0].appendChild(div);                        
        document.getElementsByTagName('main')[0].appendChild(div2);   
}

function info(){
            var div=document.getElementsByTagName('main')[0];
            var p=document.createElement('p');
            p.innerHTML ="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget urna at velit mattis condimentum. Sed erat erat, pretium ac erat eu, placerat maximus quam. Suspendisse quis fermentum eros, vitae semper quam. Duis nec risus pellentesque, venenatis nisl non, condimentum felis. Nam dictum, augue eget mattis viverra, sapien lorem imperdiet nisl, et molestie lacus erat eu arcu. In tempor, nunc eu placerat egestas, dolor orci consequat massa, in bibendum turpis mauris vitae eros. Suspendisse justo eros, tempor in magna eu, sollicitudin mollis mauris. Fusce sit amet elementum mi.";
            div.appendChild(p);
}


