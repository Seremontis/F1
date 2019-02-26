<script type="text/javascript" src="detail.js"></script>
<?php
/*początkowo strona miała korzystać z bazy dancych dlatego pisana po części w php*/
class Detail{

    function Detail(){        
        if(isset($_GET['type'])){
        switch($_GET['type']){
            case 'main':
                $this->main();
                break;
            case 'clas':
                $this->classification();
                break;
            case "cal":
                $this->calendar();
                break;
            case "loc":
                $this->location();
                break;
            case "car":
                $this->cars();
                break;
            case "info":
                $this->info();
                break;
            default:
                $this->main();               
                break;

        }
        }
        else{
            $this->main();
            ?>
            <script>
            animation();
            </script>
            <?php
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

        function classification(){

            if($_GET['what']=='team'){
            ?>
                <script>
                    classificationTeam(<?php echo $_GET['year'];?>);
                </script>
            <?php } 
            else if($_GET['what']=='driv'){
                ?>
                    <script>
                        classificationDrive(<?php echo $_GET['year'];?>);
                    </script>

                <?php
                }
            
        }

        function calendar(){
            ?>
                    <script>
                        calendar(<?php echo $_GET['year'];?>);
                    </script>
            <?php
        }

        function location(){
            if(isset($_GET['year'])){
                ?>
            <script>
               locationTrackPresent(<?php echo $_GET['year'];?>);
            </script>
            <?php
            }
            else{
                ?>
                <script>
                    locationTrackOld();
                 </script>
            <?php
            }
        }

        function cars(){
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
                        case 'mc':
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

        function info(){
            ?>
            <script>
            info();
            </script>
            <?php
        }
        

}
?>