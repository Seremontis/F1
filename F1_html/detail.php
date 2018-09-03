<?php
/*początkowo strona miała korzystać z bazy dancych dlatego pisana po części w php*/
class Detail{

    function Detail(){
        if(isset($_GET['co'])){
        switch($_GET['co']){
            case 'main':
                $this->main();
                break;
            case 'klas':
                $this->klasyfikacje();
                break;
            case "kal":
                $this->kalendarz();
                break;
            case "lok":
                $this->lokalizacje();
                break;
            case "poj":
                $this->samochody();
                break;
            case "info":
                $this->informacje();
                break;
            default:
                $this->main();
                break;

        }
        }
        else{
            $_GET['co']='main';
            $this->main();
        }
    }



     function main(){
        echo '<span>
                <h1>Skrót wydarzeń z sezonu 2017</h1>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/Lq7_7K9Rafo" frameborder="0" allow="autoplay; encrypted-media"allowfullscreen></iframe>
            </span>
            <span>
                <h1>Top 10 dramatycznych momentów</h1>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/SBi92AOSW2E" frameborder="0" allow="autoplay; encrypted-media"allowfullscreen></iframe>
            </span>';
        }

        function klasyfikacje(){

            if($_GET['jaka']=='zesp'){
            ?>
                <script>
                    if (window.XMLHttpRequest)
                    {// code for IE7+, Firefox, Chrome, Opera, Safari
                        xmlhttp=new XMLHttpRequest();
                    }
                    else
                    {// code for IE6, IE5
                        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                    }

                    var rok=<?php echo $_GET['rok'];?>;
                    
                    xmlhttp.onload = function() {

                        var xmlDoc = new DOMParser().parseFromString(xmlhttp.responseText,'text/xml');

                        document.write("<h1>Klasyfikacja zespołowa sezonu "+rok+"</h1>");
                        document.write("<table id='klas'>");
                        document.write("<tr><th>L.P.</th>");
                        document.write("<th>Nazwa</th>");
                        document.write("<th>Punkty</th>");
                        document.write("<th>Wygrane</th></tr>");
                        var x=xmlDoc.getElementsByTagName("ConstructorStanding");
                        for (i=0;i<x.length;i++)
                        { 
                            document.write("<tr><td>");
                            document.write(x[i].getAttribute("position"));
                            document.write("</td>");
                            document.write("<td>");
                            document.write(x[i].getElementsByTagName("Name")[0].textContent);
                            document.write("<td>");
                            document.write(x[i].getAttribute("points"));
                            document.write("</td>");
                            document.write("<td>");
                            document.write(x[i].getAttribute("wins"));
                            document.write("</td></tr>");
                        }
                        document.write("</table>");

                    }
                    
                    xmlhttp.open("GET","http://ergast.com/api/f1/"+rok+"/constructorStandings.xml",false);
                    xmlhttp.send();
                    </script>
            <?php } 
            else if($_GET['jaka']=='kier'){
                ?>
                    <script>
                        if (window.XMLHttpRequest)
                        {// code for IE7+, Firefox, Chrome, Opera, Safari
                            xmlhttp=new XMLHttpRequest();
                        }
                        else
                        {// code for IE6, IE5
                            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                        }

                        var rok=<?php echo $_GET['rok']; ?>;
                        
                        xmlhttp.onload = function() {

                            var xmlDoc = new DOMParser().parseFromString(xmlhttp.responseText,'text/xml');

                            document.write("<h1>Klasyfikacja kierowców sezonu "+rok+"</h1>");
                            document.write("<table id='klas'>");
                            document.write("<tr><th>L.P.</th>");
                            document.write("<th>Imię i Nazwisko</th>");
                            document.write("<th>Punkty</th>");
                            document.write("<th>Wygrane</th></tr>");
                            var x=xmlDoc.getElementsByTagName("DriverStanding");
                            for (i=0;i<x.length;i++)
                            { 
                                document.write("<tr><td>");     
                                document.write(x[i].getAttribute("position"));
                                document.write("</td>");
                                document.write("<td>");    
                                document.write(x[i].getElementsByTagName("GivenName")[0].textContent+" "+x[i].getElementsByTagName("FamilyName")[0].textContent);
                                document.write("<td>");
                                document.write(x[i].getAttribute("points"));
                                document.write("</td>");
                                document.write("<td>");
                                document.write(x[i].getAttribute("wins"));
                                document.write("</td></tr>");
                            }
                            document.write("</table>");

                        }
                        
                        xmlhttp.open("GET","http://ergast.com/api/f1/"+rok+"/driverStandings.xml",false);
                        xmlhttp.send();
                        </script>

                <?php
                }
            
        }
        function kalendarz(){
            ?>
                    <script>
                        if (window.XMLHttpRequest)
                        {// code for IE7+, Firefox, Chrome, Opera, Safari
                            xmlhttp=new XMLHttpRequest();
                        }
                        else
                        {// code for IE6, IE5
                            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                        }

                        var rok=<?php echo $_GET['rok']; ?>;
                        
                        xmlhttp.onload = function() {

                            var xmlDoc = new DOMParser().parseFromString(xmlhttp.responseText,'text/xml');

                            document.write("<h1>Kalendarz sezonu "+rok+"</h1>");
                            document.write("<table>");
                            document.write("<tr><th>Runda</th>");
                            document.write("<th>Nazwa wyścigu</th>");
                            document.write("<th>Nazwa toru</th>");
                            document.write("<th>Lokalizacja </th>");
                            document.write("<th>Data</th></tr>");
                            var x=xmlDoc.getElementsByTagName("Race");
                            for (i=0;i<x.length;i++)
                            { 
                                document.write("<tr><td>");
                                document.write(x[i].getAttribute("round"));
                                document.write("</td><td>");   
                                document.write(x[i].getElementsByTagName("RaceName")[0].textContent);
                                document.write("</td><td>"); 
                                document.write(x[i].getElementsByTagName("CircuitName")[0].textContent);
                                document.write("</td>");
                                document.write("<td>");
                                document.write(x[i].getElementsByTagName("Locality")[0].textContent);
                                document.write("</td><td>"); 
                                document.write(x[i].getElementsByTagName("Date")[0].textContent);
                                document.write("</td>");
                                document.write("</td></tr>");
                            }
                            document.write("</table>");

                        }
                        
                        xmlhttp.open("GET","http://ergast.com/api/f1/"+rok+".xml",false);
                        xmlhttp.send();
                        </script>
            <?php
            }

        function lokalizacje(){
            if(isset($_GET['rok'])){?>
            <script>
                document.getElementsByTagName('main')[0].style.display="block";
                if (window.XMLHttpRequest)
                {// code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp=new XMLHttpRequest();
                }
                else
                {// code for IE6, IE5
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }       
                var rok=<?php echo $_GET['rok'];?> 
                
                xmlhttp.onload = function() {

                    var xmlDoc = new DOMParser().parseFromString(xmlhttp.responseText,'text/xml');
                    
                    var licz=document.createElement('ul');
                    var h1=document.createElement('h1');
                    h1.appendChild(document.createTextNode("Obecne tory"));
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

                xmlhttp.open("GET","http://ergast.com/api/f1/"+rok+"/circuits.xml",false);
                xmlhttp.send();
                </script>
            <?php
            }
            else{
                ?>
                <script>
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
                    div.setAttribute('class','lista')
                    var licz=document.createElement('ul');
                    var h1=document.createElement('h1');
                    h1.appendChild(document.createTextNode("Dawne tory"));
                    licz.appendChild(h1);
                        while(licznik<limit)
                        {
                            var rok=0;
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
                        div2.setAttribute('class','lista2')
                        for(var i=1;i<4;i++){
                            var img = document.createElement("img");
                            img.src="picture\\track"+i+".jpg";
                            div2.appendChild(img);
                        }
                        
                        document.getElementsByTagName('main')[0].appendChild(div);                        
                        document.getElementsByTagName('main')[0].appendChild(div2);   
                 </script>
            <?php
            }
        }

        function samochody(){
            if(isset($_GET['jaki']))
            {
            switch($_GET['jaki']){
                case 'fer':
            ?>
            <script>
                var div=document.getElementsByTagName('main')[0];
                var h1=document.createElement('h1');
                h1.innerHTML ="Ferrari";
                h1.style.textAlign='center';
                var p=document.createElement('p');
                p.innerHTML ="Scuderia Ferrari, popularna nazwa Gestione Sportiva – dywizja firmy Ferrari zajmującej się sportami motorowymi.Podczas gdy Ferrari zajmuje się klientami i prywatnymi zespołami, Scuderia Ferrari odpowiedzialna jest za fabryczną ekipę w Formule 1.Zespół zadebiutował w Formule 1 podczas drugiej rundy w historii Mistrzostw Świata (Grand Prix Monako w sezonie 1950 z modelem Tipo 125 F1). Ferrari jest tym samym najbardziej doświadczonym i utytułowanym zespołem w historii F1. Zespół wywalczył 16 tytułów w klasyfikacji konstruktorów oraz 15 w klasyfikacji kierowców. Kierowcami Ferrari są Sebastian Vettel (od 2015) i Kimi Räikkönen (od 2014).";
                p.style.marginTop = "40px";

                var img = document.createElement("img");
                    img.src="picture\\ferrari2.jpg";
                    img.style.display='block';
                    img.style.margin='0 auto';
                    img.style.maxWidth='700px';
                    img.style.maxHeight='1000px';
                div.appendChild(h1);
                div.appendChild(img);
                div.appendChild(p);

            </script>
            <?php
                break;
                case 'red':
            ?>
            <script>
                var div=document.getElementsByTagName('main')[0];
                var h1=document.createElement('h1');
                h1.innerHTML ="Red Bull";
                h1.style.textAlign='center';
                var p=document.createElement('p');
                p.innerHTML ="Aston Martin Red Bull Racing, w latach 2005–2012, 2016–2017 Red Bull Racing, w latach 2013–2015 Infiniti Red Bull Racing – zespół Formuły 1, powstały w 2005 roku na bazie Jaguar Racing, zespołu odkupionego od koncernu Ford pod koniec 2004 roku. Obok Scuderii Toro Rosso jest to jedna z dwóch ekip w stawce, będących w posiadaniu austriackiego producenta napojów energetycznych Red Bull. Siedziba zespołu mieści się w Milton Keynes w Wielkiej Brytanii, jednak zespół korzysta z austriackiej licencji.";
                p.style.marginTop = "40px";
                var img = document.createElement("img");
                    img.src="picture\\redbull.jpg";
                    img.style.display='block';
                    img.style.margin='0 auto';
                    img.style.maxWidth='700px';
                    img.style.maxHeight='1000px';

                div.appendChild(h1);
                div.appendChild(img);
                div.appendChild(p);

            </script>
            <?php
                break;
                case 'mer':
                ?>
                <script>
                    var div=document.getElementsByTagName('main')[0];
                    var h1=document.createElement('h1');
                    h1.innerHTML ="Mercedes";
                    h1.style.textAlign='center';
                    var p=document.createElement('p');
                    p.innerHTML ="Mercedes (oficjalnie od 2017 roku Mercedes AMG Petronas Motorsport) – fabryczny zespół wyścigowy Mercedes-Benz w Formule 1, reaktywowany w 2009 po wykupieniu 75,1% udziałów w Brawn GP. Szefem zespołu od stycznia 2014 roku jest Toto Wolff.";
                    p.style.marginTop = "40px";
                    var img = document.createElement("img");
                        img.src="picture\\mercedes.jpg";
                        img.style.display='block';
                        img.style.margin='0 auto';
                        img.style.maxWidth='700px';
                        img.style.maxHeight='1000px';
    
                    div.appendChild(h1);
                    div.appendChild(img);
                    div.appendChild(p);
    
                </script>
                <?php
                    break;
                    case 'mcl':
                    ?>
                    <script>
                        var div=document.getElementsByTagName('main')[0];
                        var h1=document.createElement('h1');
                        h1.innerHTML ="McLaren";
                        h1.style.textAlign='center';
                        var p=document.createElement('p');
                        p.innerHTML ="McLaren (oficjalnie, w latach 2016–2017 McLaren Honda Formula 1 Team) – brytyjski zespół wyścigowy, założony w 1963 r. przez Bruce'a McLarena. Obecnie najlepiej znany jest jako konstruktor i zespół Formuły 1, w której startuje jako McLaren Honda. W swojej historii brał także udział w seriach: CanAm, IndyCar oraz Formuła 2. Siedzibą zespołu jest McLaren Technology Centre, znajdujący się w Woking w Wielkiej Brytanii.";
                        p.style.marginTop = "40px";
                        var img = document.createElement("img");
                            img.src="picture\\mcl.jpg";
                            img.style.display='block';
                            img.style.margin='0 auto';
                            img.style.maxWidth='700px';
                            img.style.maxHeight='1000px';
        
                        div.appendChild(h1);
                        div.appendChild(img);
                        div.appendChild(p);
        
                    </script>
                    <?php
                        break;
                        case 'sc':
                    ?>
                    <script>
                        var div=document.getElementsByTagName('main')[0];
                        var h1=document.createElement('h1');
                        h1.innerHTML ="Samochód bezpieczństwa";
                        h1.style.textAlign='center';
                        var p=document.createElement('p');
                        p.innerHTML ="Samochód bezpieczeństwa (ang. safety car, w Stanach Zjednoczonych określany mianem pace car) – samochód, który w wyścigach samochodowych i motocyklowych ogranicza prędkość pojazdów biorących udział w zawodach. Samochód bezpieczeństwa wyjeżdża na tor w przypadku nieoczekiwanych, niebezpiecznych zdarzeń na torze, na przykład wypadków czy drastycznych załamań pogody. Prędkość utrzymywana przez samochód bezpieczeństwa, choć niższa niż tempo wyścigowe, musi być i tak dość wysoka, by zapobiec nadmiernemu oziębieniu się opon pojazdów biorących udział w wyścigu. Dlatego też kierowcą samochodu bezpieczeństwa zawsze jest profesjonalny kierowca wyścigowy. Podczas przebywania na torze samochodu bezpieczeństwa wyprzedzanie innego kierowcy jest zabronione.";
                        p.style.marginTop = "40px";
                        var img = document.createElement("img");
                            img.src="picture\\sc.jpg";
                            img.style.display='block';
                            img.style.margin='0 auto';
                            img.style.maxWidth='700px';
                            img.style.maxHeight='1000px';
        
                        div.appendChild(h1);
                        div.appendChild(img);
                        p.innerHTML+="Samochód bezpieczeństwa w wyścigach Formuły 1 wyposażony jest w zielone i żółte światła. Jego pojawienie się na torze sygnalizowane jest przez obsługę toru żółtymi flagami oraz tablicą z napisem \"SC\". Początkowo samochód bezpieczeństwa ma włączone zielone światła, czym sygnalizuje, że bolid jadący za nim może go wyprzedzić. Gdy za samochodem bezpieczeństwa znajdzie się lider wyścigu, włączane są żółte światła, a wyprzedzanie samochodu bezpieczeństwa jest niedopuszczalne. W przypadku podjęcia przez dyrektora wyścigu decyzji o wznowieniu rywalizacji, światła samochodu bezpieczeństwa są wyłączane na kilka zakrętów przed zjazdem do alei serwisowej. Wzajemne wyprzedzanie się bolidów jest ponownie dopuszczone po przekroczeniu przez nie tzw. pierwszej linii samochodu bezpieczeństwa (miejsca zjazdu do alei serwisowej).";                       
                        p.innerHTML+="<br><br>W sezonie 2007 rolę safety car pełnił zmodyfikowany Mercedes-Benz CLK 63 AMG, z 8-cylindrowym, 481-konnym silnikiem. Mimo znacznego \"odchudzenia\" wersji dla Grand Prix, auto jest mniej więcej trzykrotnie cięższe i dwukrotnie słabsze od bolidów F1. W sezonie 2008 i 2009 rolę samochodu bezpieczeństwa pełnił Mercedes-Benz SL 63 AMG z 6,2-litrowym silnikiem V8 o mocy 525 KM i przyspieszeniem od 0 do 100 km/h w 3,8 sekundy. W sezonie 2010 wprowadzono nowy samochód bezpieczeństwa Mercedes-Benz SLS AMG[1]. Pod względem technicznym Safety Car SLS AMG jest takim samym autem jakie mogą kupić klienci w salonie. To, czym Safety Car SLS AMG różni się od swych seryjnych odpowiedników to malowanie nadwozia – kalkomania zdradzająca pojazd bezpieczeństwa F1. Oprócz tego w aucie zamontowane są \"koguty\" z wbudowaną weń kamerą. Wykonano je przy użyciu diod i z uwagi na niekonwencjonalnie otwierające się drzwi, zamontowano na specjalnej, wykonanej z włókna węglowego podstawce, która zaprojektowana została pod kątem minimalizacji oporów powietrza, i \"zsunięta\" jest częściowo w kierunku tylnej szyby."                        
                        p.innerHTML+="<br><br>Od sezonu 2000 funkcję kierowcy samochodu bezpieczeństwa w wyścigach Formuły 1 pełni Bernd Mayländer.";
                        div.appendChild(p);
                    </script>
                    <?php
                        break;
                        case 'sm':
                    ?>
                    <script>
                        var div=document.getElementsByTagName('main')[0];
                        var h1=document.createElement('h1');
                        h1.innerHTML ="Samochód medyczny";
                        h1.style.textAlign='center';
                        var p=document.createElement('p');
                        p.innerHTML ="Samochód medyczny przeznaczony jest do udzielenia pierwszej pomocy poszkodowanemu kierowcy oraz przetransportowanie go do centrum medycznego znajdującego się na torze";
                        p.style.marginTop = "40px";
                        var img = document.createElement("img");
                            img.src="picture\\mc.jpg";
                            img.style.display='block';
                            img.style.margin='0 auto';
                            img.style.maxWidth='700px';
                            img.style.maxHeight='1000px';
        
                        div.appendChild(h1);
                        div.appendChild(img);
                        div.appendChild(p);
        
                    </script>
                    <?php
                        break;
                        default:
                            $this->main();
                            break;
            }
            }
            else
                $this->main();
        }

        function informacje(){
            ?>
            <script>
            var div=document.getElementsByTagName('main')[0];
            var p=document.createElement('p');
            p.innerHTML ="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget urna at velit mattis condimentum. Sed erat erat, pretium ac erat eu, placerat maximus quam. Suspendisse quis fermentum eros, vitae semper quam. Duis nec risus pellentesque, venenatis nisl non, condimentum felis. Nam dictum, augue eget mattis viverra, sapien lorem imperdiet nisl, et molestie lacus erat eu arcu. In tempor, nunc eu placerat egestas, dolor orci consequat massa, in bibendum turpis mauris vitae eros. Suspendisse justo eros, tempor in magna eu, sollicitudin mollis mauris. Fusce sit amet elementum mi.";
            div.appendChild(p);
            </script>
            <?php
        }
        

}
?>