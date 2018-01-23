<!DOCTYPE html>

<!-- hämtad från https://www.w3schools.com/w3css/4/w3.css  2017-12-17 --->

<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Stäng meny</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>Peter Thulin <br> Fastighetskonsult AB</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Hem</a>
    <a href="#houses" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Våra fastigheter</a>
    <a href="#movein" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Inflyttning</a>
    <a href="#rules" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Trivselregler</a>
    <a href="#moveout" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Avflyttning</a>
    <a href="#winter" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Inför vintern</a>
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Felanmälan</a>
    <a href="#consulting" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Förvaltning</a>
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span>PTF</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="houses">
    <h1 class="w3-jumbo"><b>Peter Thulin Fastighetskonsult AB</b></h1>
    <h1 class="w3-xxxlarge w3-text-red"><b>Våra fastigheter.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
  </div>

  <!-- Photo grid (modal) -->
  <div class="w3-row-padding">
    <div class="w3-half">
      <img src="valrossen71.jpg" style="width:70%" onclick="onClick(this)" alt="Lindgatan 5">
      <p> Lindgatan 5, Vinslöv. </p>
    </div>


<!---
    <div class="w3-half">
      <img src="/w3images/atrium.jpg" style="width:100%" onclick="onClick(this)" alt="Windows for the atrium">
      <img src="/w3images/bedroom.jpg" style="width:100%" onclick="onClick(this)" alt="Bedroom and office in one space">
      <img src="/w3images/livingroom2.jpg" style="width:100%" onclick="onClick(this)" alt="Scandinavian design">
    </div>
  </div>
--->

  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xxlarge w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>

  <!-- Inflyttnong -->
  <div class="w3-container" id="movein" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Inflyttning.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>
      Varmt välkommen som hyresgäst hos Peter Thulin Fastighetskonsult AB!
    </p>
    <h2 class="w3-xlarge w3-text-red"><b>Anmäl ändrad adress i god tid.</b></h2>
    <p>
      För att din post ska komma till din nya adress är det viktigt att du gör en
      flyttanmälan i god tid före flytten. Du gör din anmälan till Svensk
      Adressändring på <a href="https://www.adressandring.se" title="adressandring" target="_blank" class="w3-hover-opacity">www.adressandring.se</a>.
    </p>
    <h2 class="w3-xlarge w3-text-red"><b>El och telefon.</b></h2>
    <p>
      Vi anmäler din inflyttning till nätägaren, C4 Energi. Gör du inget aktivt
      val av elleverantör så blir du anvisad en elhandlare av dom. Kom ihåg att
      avsluta ditt gamla abonnemang på din förra adress. Du måste anmäla flyttning
      av ditt telefonabonnemang och eventuellt internetabonnemang. Kontakta ditt
      telefonbolag och din internetleverantör för mer information.
    </p>
    <h2 class="w3-xlarge w3-text-red"><b>Gemensamma utrymmen.</b></h2>
    <p>
      Rökförbud råder i alla gemensamma utrymmen, dvs i trapphus, tvättstuga, källare,
      soprum m.m. Skärpta regler från Räddningstjänst och Försäkringsbolag innebär att det
      inte får finnas cyklar, barnvagnar, möbler, dörrmattor, skor m.m i trapphus av utrymnings-
      och brandsäkerhetsskäl.
    </p>
    <h2 class="w3-xlarge w3-text-red"><b>Tillträde.</b></h2>
    <p>
      Du har tillträde till din nya bostad från första kontraktsdagen kl 12.00.
      Börjar ditt kontrakt gälla en lördag, söndag eller annan helgdag så har du
      tillträde först nästkommande vardag kl 12.00. Nyckelutlämning
      sker på vårt kontor om inte annat har avtalats.
    </p>
    <h2 class="w3-xlarge w3-text-red"><b>Kontraktet.</b></h2>
    <p>
      Tänk på att hyreskontraktet är en originalhandling - ta väl vara på det.
    </p>
    <h2 class="w3-xlarge w3-text-red"><b>Besiktning.</b></h2>
    <p>
      Lägenheten besiktigas innan inflyttning. Du erhåller en kopia på
      besiktningsprotokollet när du kvitterar ut dina nycklar. Vill du anmäla
      eventuella fel och brister som inte finns med i protokollet så vänder du
      dig till kontoret inom 8 dagar.
    </p>
    <h2 class="w3-xlarge w3-text-red"><b>Hyresavi.</b></h2>
    <p>
      Det är viktigt att hyran betalas i tid, annars riskerar du att förlora
      ditt hyreskontrakt. Våra hyresavier skickas ut kvartalsvis. Det finns även
      möjlighet att betala hyran via autogiro. Kontakta oss om du vill ha en
      autogiro-anmälan. Betala aldrig med någon annans hyresavi. Se till att
      få ett eget inbetalningskort.
    </p>
    <h2 class="w3-xlarge w3-text-red"><b>Lägenhetsförråd.</b></h2>
    <p>
      Som hyresgäst är du ansvarig för att alla utrymmen som tillhör lägenheten
      hålls låsta under hela hyrestiden. Du kan bli tvungen att betala tömning om
      annan hyresgäst använder ditt förråd.
    </p>
    <h2 class="w3-xlarge w3-text-red"><b>Brandvarnare.</b></h2>
    <p>
      En brandvarnare är en billig livförsäkring. Vi har monterat brandvarnare i alla
      våra lägenheter och den får inte tas med när du flyttar. Som hyresgäst är du
      skyldig att se till så att den fungerar genom att rengöra den, prova den regelbundet
      och att byta batteri.
    </p>
    <h2 class="w3-xlarge w3-text-red"><b>Hemförsäkring.</b></h2>
    <p>
      En hemförsäkring bör du alltid ha. Det är ett bra skydd för dig och ditt hem.
      Hyresvärdens försäkring täcker bara skador på själva byggnaden - inte dina
      personliga ägodelar.
    </p>
  </div>

  <!-- Trivselregler -->
  <div class="w3-container" id="rules" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Trivselregler.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>
      En trygghet med att bo i flerfamiljshus är att man har människor omkring sig.
      Det hörs ljud från andra, det rör sig i området, det är liv och rörelse. Men
      människor har olika referensramar. En del blir störda av sådant som andra inte
      bryr sig om. För att ett myller av olika människor ska fungera tillsammans och
      trivas bra, krävs alltså att man tar hänsyn till varandra - både inom de egna
      väggarna och i gemensamma utrymmen.
    </p>
    <h2 class="w3-xlarge w3-text-red"><b>Störningsjour.</b></h2>
    <p>
      Förvarna gärna dina grannar om du ska ha fest. Du har ansvaret om dina gäster
      stör - både i lägenheten, i trapphus, ute på gården osv. Blir du störd, så ta i
      första hand kontakt med din störande granne. Om inte det hjälper så kan du efter
      kontorstid ringa till störningsjouren hos Grupplarm på telefon 044-10 38 50.
      På Grupplarm tar man emot anmälan och skickar ut väktare för att kontrollera
      uppgifterna och åtgärda problemet. En hyresgäst som återkommande stör sina grannar
      och inte rättar sig efter tillsägelser kan bli uppsagd från sin lägenhet.
    </p>
    <h2 class="w3-xlarge w3-text-red"><b>Balkong.</b></h2>
    <p>
      Det är alltid trevligt med en balkong eller uteplats, men tänk på att du måste
      ta hänsyn till dina grannar även där. Använd inte balkongen för att piska mattor
      eller skaka kläder då det dammar på dina grannar. Blomlådor skall placeras på
      insidan av balkongräcket för att undvika olyckor. Tänk också på att vattna så att
      det inte hamnar vatten och jord på grannens balkong. Elgrill är tillåtet, dock kan
      man prata med sina grannar så att ingen känner sig störd av rök eller os.
      Att grilla med kol- eller gasolgrill är förbjudet på grund av brandrisken. Undvik
      att röka på balkongen eftersom många tycker att cigarettrök är obehaglig. Man får
      absolut inte kasta ut fimpar från balkongen. Mata inte fåglar från balkongen eftersom
      det även drar till sig möss och råttor. Det är inte tillåtet att använda små pooler/bassänger
      på balkongen.
    </p>
    <h2 class="w3-xlarge w3-text-red"><b>Gemensamma utrymmen.</b></h2>
    <p>
      Rökförbud råder i alla gemensamma utrymmen, dvs i trapphus, tvättstuga, källare,
      soprum m.m. Skärpta regler från Räddningstjänst och Försäkringsbolag innebär att det
      inte får finnas cyklar, barnvagnar, möbler, dörrmattor, skor m.m i trapphus av utrymnings-
      och brandsäkerhetsskäl.
    </p>
    <h2 class="w3-xlarge w3-text-red"><b>Tvättstuga.</b></h2>
    <p>
      Alla behöver tvätta då och då och därför är tvättstugan en viktig plats i huset.
      Håll djur- och rökfritt samt rent och snyggt i tvättstugan. Och förstås - respektera
      de tider som är bokade av andra och använd inte tvättstugan utanför de bokningsbara
      tiderna. Torka av golv, maskiner och bänkar när du är klar. Ta bort luddrester i
      torktumlaren och rengör tvättmedelsfacken. Följ de skötselanvisningar som gäller för
      maskiner och annan utrustning. Du får inte bleka eller färga kläder i maskinerna.
      Gör en felanmälan om något inte fungerar. Tvättstugan ska alltid lämnas i det skick
      du själv vill ha den nästa gång du ska tvätta!
    </p>
    <h2 class="w3-xlarge w3-text-red"><b>Sopsortering.</b></h2>
    <p>
      Vi vill erbjuda sopsortering i många fraktioner redan i fastigheten men det
      är inte alltid det finns förutsättningar för det. Det finns därför olika
      sorteringslösningar i olika fastigheter. Det som inte får slängas i kärlen ska
      man lämna till en återvinningsstation/central. Tänk på att förpacka dina sopor
      ordentligt och sortera rätt för miljöns skull!
    </p>
    <h2 class="w3-xlarge w3-text-red"><b>Husdjur.</b></h2>
    <p>
      Det är tillåtet att ha husdjur i lägenheten men du som hyresgäst har alltid ansvaret för djuren.
      Därför ber vi dig om följande:
    </p>
    <p>
      &#8226; Släpp inte ut djur utan tillsyn. Hundar ska alltid vara kopplade.<br>
      &#8226; Plocka alltid upp bajs efter din hund.<br>
      &#8226; Tänk på allergikerna. Rengör t.ex torktumlarfiltret noga så att det inte finns hund- eller katthår kvar. <br>
      &#8226; Husdjur utan tillsyn kan ställa till med stora skador i lägenheten. Hyresgästen bär här hela ansvaret.<br>
      &#8226; Spola aldrig ner kattsand i toaletten. Sanden lägger sig som en propp i rören och täpper till avloppet.
      Släng istället sanden i hushållssoporna och se till att påsen är ordentligt försluten.
    </p>
    <h2 class="w3-xlarge w3-text-red"><b>Skadedjur.</b></h2>
    <p>
      En del djur väljer vi själva att ha i lägenheten, andra är mer objudna gäster.
      Skadedjur finns av olika slag:
    <p>
      &#8226; En del angriper mat och textil, t.ex mjölbaggar och pälsängrar.<br>
      &#8226; En del besvärar människor, t.ex loppor och löss.<br>
      &#8226; En del angriper virke, t.ex husbock.
    </p>
    <p>
      Om du får skadedjur i din lägenhet så har du ansvar för att åtgärda detta.
      På Anticimex hemsida, <a href="https://www.anticimex.se" title="anticimex" target="_blank" class="w3-hover-opacity">www.anticimex.se</a> hittar du tips och råd på hur du gör
      en egen skadedjursbekämpning. Om inte det hjälper så ska du kontakta Anticimex
      på telefon 044-790 64 00. Vid anmälan måste du meddela att hyresvärden har avtal
      med Nordeuropa Försäkring AB. Underrätta även oss på kontoret.
    </p>
  </div>

  <!-- Avflyttining -->
  <div class="w3-container" id="moveout" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Avflyttning.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>
      Du måste säga upp ditt hyreskontrakt skriftligt, antingen via email eller
      brevledes. Uppsägningstiden inleds alltid vid närmast kommande månadsskifte
      efter att uppsägningen kommit in till oss. Om du exempelvis säger upp din
      lägenhet den 15 mars så börjar uppsägningstiden att gälla från och med den
      1 april. Uppsägningstiden är normalt tre månader. Din uppsägningstid framgår
      av kontraktet.
    </p>
    <h2 class="w3-xlarge w3-text-red"><b>Visning.</b></h2>
    <p>
      Du måste vara beredd på att visa den lägenhet du ska flytta från för
      personer som får erbjudande om att flytta in efter dig. Vanligtvis tar
      dessa personer kontakt direkt med dig för att komma överens om en tid för
      visning som passar er båda.
    </p>
    <h2 class="w3-xlarge w3-text-red"><b>Besiktning.</b></h2>
    <p>
      I anslutning till flytten görs en lägenhetsbesiktning och du bör vara med
      när den görs. Beställ tid för besiktning hos din fastighetsskötare.
      Besiktningen görs när lägenheten är tömd och städad. Tänk på att ta med
      dig alla dina tillhörigheter - i lägenheten, på balkongen, i förrådet m.m.
      Tillsammans med uppsägningsbekräftelsen skickar vi med en checklista för
      städningen. Vid skador, onormalt slitage eller ej godtagbar städning kan
      du bli ersättningsskyldig.
    </p>
    <h2 class="w3-xlarge w3-text-red"><b>Nycklar.</b></h2>
    <p>
      Samtliga nycklar som tillhör lägenheten måste lämnas tillbaka när du
      flyttar. Om inte alla nycklar lämnas in kan du bli skyldig att betala
      kostnaden för låsbyte. Nycklarna lämnas i samband med besiktningen.
      Nycklar får inte överlämnas direkt till den nya hyresgästen.
    </p>
    <h2 class="w3-xlarge w3-text-red"><b>Addressändring.</b></h2>
    <p>
      För att post från myndigheter ska komma till din nya adress är det viktigt
      att du gör en flyttanmälan i god tid före flytten. Du gör din anmälan till
      Svensk Adressändring på <a href="https://www.adressandring.se" title="adressandring" target="_blank" class="w3-hover-opacity">www.adressandring.se</a>
    </p>
    <h2 class="w3-xlarge w3-text-red"><b>El och telefon.</b></h2>
    <p>
      Glöm inte att säga upp ditt elabonnemang hos nätägaren minst 1 månad före
      flytt. Dom ser till att din el-leverantör blir informerad om detta och
      läser av elmätaren det datum du flyttar. Gör även en flyttanmälan på ditt
      telefon- och internetabonnemang.
    </p>
  </div>

  <!-- Inför vintern -->
  <div class="w3-container" id="winter" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Inför vintern.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>
      Under hösten och vintern är frågorna om värmen många. Alla upplever värmen på olika sätt. En del fryser och en del tycker att det är för varmt. Är elementen kalla, ja då fryser man även om det är 21 grader i lägenheten. Spelar det egentligen någon roll om elementen är kalla om man har rätt temperatur inne? Svar nej, det är ett tecken på att termostaten fungerar. Det väsentliga är att rumstemperaturen är ca 20-21 grader. Och ofta är det inte så kallt som man tror. Tänk på att inte hålla fönster och dörrar öppna några längre stunder eftersom ni då släpper ut mycket av den varmluft som lagras i huset.
    </p>
    <p>
      Här kommer svar på de vanligaste frågorna som dyker upp;
    </p>
    <p>
      &#8226;<b> Vilken temperatur skall man ha i lägenheten? </b>
    </p>
    <p>
      Socialstyrelsen rekommenderar att temperaturen i en lägenhet bör ligga mellan 20-23 grader. Temperaturen ska aldrig vara lägre än 18 grader.
    </p>
    <p>
      &#8226;<b> Vad ska man göra om man upplever att det är kallt i lägenheten? </b>
    </p>
    <p>
      Då är det önskvärt att ni själv mäter temperaturen i lägenheten innan ni felanmäler. För att mäta en korrekt temperatur i ditt rum ska du placera termometern t.ex på ett soffbord (ca 1 meter från yttervägg och ca 60 cm från golv).
    </p>
    <p>
      &#8226; <b>När sätts värmen i huset igång?</b>
    </p>
    <p>
      Nu för tiden sker detta per automatik. När det är kallt ute går värmen på automatiskt. Ju kallare det är desto varmare vatten skickas ut till elementen.
    </p>
    <p>
      &#8226; <b>Varför är mitt element kallt ibland?</b>
    </p>
    <p>
      På elementet sitter en termostatventil som känner av temperaturen i lägenheten. När termostaten känner av att det är 20-21 grader i rummet, stänger den av vattenflödet igenom elementet. Efter ett tag så svalnar elementet av till samma temperatur som det är i rummet. Det är därför som man ibland kan känna att elementet är kallt trots att det är minusgrader ute. När sedan temperaturen i rummet sjunker under 20 grader så öppnar termostaten igen. På så sätt håller man en jämn temperatur inne.
    </p>
    <p>
      En viktig sak att tänka på är att man möblerar rätt. Det vill säga att man inte ställer soffor, hyllor eller andra stora möbler tätt intill elementet så att värmen inte kan spridas ut i rummet. Tjocka gardiner som hänger framför termostaten påverkar dess funktion då den stänger för tidigt.
    </p>
    <p>
      &#8226; <b>Jag har en termometer som är placerad på fönsterbrädan och den visar 16 grader inne. Vad är fel?</b>
    </p>
    <p>
      Placeras termometern mot en yttervägg eller i ett fönster blir temperaturen missvisande eftersom kalla väggar och fönster håller en lägre temperatur än i övriga rummet. För att mäta en korrekt temperatur ska du placera din termometer mitt i rummet.
    </p>
    <p>
      &#8226; <b>Jag upplever att temperaturen sjunker på natten, stämmer detta?</b>
    </p>
    <p>
      Temperaturen på värmesystemet sänks inte på natten men då lampor, TV m.m stängs av så kan temperaturen sjunka något.
    </p>
  </div>



  <?php include >'contact.php';?>


  <!-- Contact -->
  <div class="w3-container" id="contact" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Felanmälan.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>Problem med din bostad, lokal eller i de allmänna utrymmena? Gör en felanmälan så att vi kan åtgärda problemet.</p>
    <form action="/action_page.php" target="_blank">
      <div class="w3-section">
        <label>Hyresgäst*</label>
        <input class="w3-input w3-border" type="text" name="Namn" required>
      </div>
      <div class="w3-section">
        <label>Email*</label>
        <input class="w3-input w3-border" type="text" name="Email" required>
      </div>
      <div class="w3-section">
        <label>Telefonnummer*</label>
        <input class="w3-input w3-border" type="text" name="Telefonnummer" required>
      </div>
      <div class="w3-section">
        <label>Husdjur</label>
        <input class="w3-input w3-border" type="text" name="Pet">
      </div>
      <div class="w3-section">
        <label>Får vi gå in med huvudnyckel?*<br></label>
        <form action="headkey">
          <input type="radio" checked="checked" name="headkey" value="yes"> Ja<brk>
          <input type="radio" name="headkey" value="no"> Nej<br>
        </form>
      </div>
      <div class="w3-section">
        <label>Meddelande*</label>
        <input class="w3-input w3-border" type="text" name="Meddelande" required>
      </div>
      <div class="w3-section">
        <label>Kopia på felanmälan?*<br></label>
        <form action="copy">
          <input type="radio" checked="checked" name="copy" value="yes"> Ja<brk>
          <input type="radio" name="copy" value="no"> Nej<br>
        </form>
      </div>
      <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Skicka felanmälan</button>
    </form>
  </div>

<!--- Consult --->
  <div class="w3-container" id="consulting" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Förvaltning.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>
      Företaget fövaltar idag 122 000 m<sup>2</sup> till externa fastighetesföretag.
    </p>
  </div>

<!-- End page content -->
</div>

<!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">w3.css</a></p></div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}

function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>

</body>
</html>
