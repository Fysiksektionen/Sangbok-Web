<?php

class SongsTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('songs')->truncate();
        
		\DB::table('songs')->insert(array (
			0 => 
			array (
				'id' => 1,
				'chapter_id' => 1,
				'number' => 1,
				'title' => 'Du gamla du fria',
				'author' => 'Rikard Dybeck',
				'melody' => 'Till svenska fosterjorden
Noter till blandad kör finns i notkapitlet.',
				'text' => 'Du gamla du fria, du fjällhöga nord
Du tysta, du glädjerika sköna
Jag hälsar dig vänaste land uppå jord
||:Din sol, din himmel, dina ängder gröna :||

Du tronar på minnen från fornstora dar
Då ärat ditt namn flög över jorden
Jag vet att du är och du blir vad du var
||:Ja, jag vill leva jag vill dö i Norden :||

Jag städes vill dig tjäna mitt älskade land,
Dig trohet till döden vill jag svära.
Din rätt skall jag värna med håg och med hand,
||:Din fana, högt din bragderika bära. :||

Med Gud skall jag kämpa, för hem och för härd,
för Sverige, den kära fosterjorden.
Jag byter Dig ej, mot allt i en värld
||:Nej, jag vill leva jag vill dö i Norden!:||',
			),
			1 => 
			array (
				'id' => 2,
				'chapter_id' => 1,
				'number' => 2,
				'title' => 'Kungssången',
				'author' => 'Text: C. V. A. Strandberg
Musik: Otto Lindblad.',
				'melody' => 'Hymn
Noter till manskör finns i notkapitlet',
				'text' => 'Ur svenska hjärtans djup en gång
En samfälld och en enkel sång
Som går till Kungen fram
Var honom trofast och hans ätt
Gör kronan på hans hjässa lätt
Och all din tro till honom sätt
Du folk av frejdad stam

Du himlens herre med oss var,
Som förr du med oss varit har,
Och liva på vår strand.
Det gamla lynnets art igen
Hos sveakungen och hans män,
Och låt den ande vila än
Utöver nordanland.',
			),
			2 => 
			array (
				'id' => 3,
				'chapter_id' => 1,
				'number' => 3,
				'title' => 'Sveriges flagga',
				'author' => 'Text: KG Ossiannilsson
Musik: Hugo Alfvén',
				'melody' => 'Noter finns i notkapitlet.',
				'text' => 'Flamma stolt mot dunkla skyar
lik en glimt av sommarns sol
Över Sveriges skogar, berg och byar,
över vatten och viol.
Du, som sjunger, när du bredes,
som vår gamla lyckas tolk:
"Solen lyser! Solen lyser!
Ingen vredes åska slog vårt tappra folk!"

Flamma högt, vår kärleks tecken,
värm oss, när det blåser kallt!
Stråla ur de blåa vecken,
kärlek, mera starkt än allt!
Sveriges flagga, Sveriges ära,
fornklenod och framtids tolk:
Gud är med oss, Gud är med oss
Han skall bära starkt vårt fria svenska folk.',
			),
			3 => 
			array (
				'id' => 4,
				'chapter_id' => 1,
				'number' => 4,
				'title' => 'Internationalen',
				'author' => 'Originaltext: Eugène Pottier
Musik: Pierre Degeyter
Svensk text: Henrik Menander',
				'melody' => NULL,
				'text' => 'Upp trälar uti alla stater,
som hungern bojor lagt uppå.
Det dånar uti maktens krater,
snart skall frihetens timma slå.
Störtas skall det gamla uti gruset.
Slav, stig upp för att slå dig fri!
Från mörkret stiga vi mot ljuset,
från intet allt vi vilja bli.

||:Upp till kamp emot kvalen
sista striden det är.
ty Internationalen
åt alla lycka bär.:||

I höjden räddarn vi ej hälsa,
ej gudar, furstar slå oss bi.
Nej, själva vilja vi oss frälsa,
och samfälld skall vår räddning bli.
För att kräva ut det stulna, bröder,
och för att slita andens band,
vi smida medan järnet glöder,
med senig arm och kraftig hand.

Upp till kamp...

I sin förgudning avskyvärda,
månn\' guldets kungar nå\'nsin haft
ett annat mål är att bli närda
av proletärens arbetskraft?
Vad hen skapat under nöd och vaka
utav tjuvar rånat är,
när folket kräva det tillbaka
sin egen rätt de blott begär.

Upp till kamp...

Båd\' stat och lagar oss förtrycka,
vi under skatter digna ner.
Den rike inga plikter trycka,
den arme ingen rätt man ger.
Länge nog som myndlingar vi böjt oss,
jämlikheten skall nu bli lag.
Med plikterna vi hittills nöjt oss,
nu taga vi vår rätt en dag.

Upp till kamp...

Till krigets slaktande vi dragits,
vi mejats ned i jämna led.
För furstars lögner har vi slagits,
nu vill vi skapa evig fred.
Om de oss driver, dessa kannibaler,
mot våra grannar än en gång,
vi skjuter våra generaler
och sjunger broderskapets sång.

Upp till kamp...

Arbetare, i stad på landet,
en gång skall jorden bliva vår
När fast vi knyta systrabandet,
då lättingen ej råda får.
Många rovdjur på vårt blod sig mätta
men när vi nu till vårt försvar,
en dag en gräns för dessa sätta,
skall solen stråla lika klar.

Upp till kamp emot kvalen
sista striden det är.
ty Internationalen
åt alla lycka bär.
Upp slå ned allt det gamla,
tålamodet är slut!
För frihet vi oss samla,
förgöra våldets krut!',
			),
			4 => 
			array (
				'id' => 5,
				'chapter_id' => 1,
				'number' => 5,
				'title' => 'Auld lang syne',
				'author' => NULL,
				'melody' => NULL,
				'text' => 'Should auld acquaintance be forgot,
And never brought to mind?
Should auld acquaintance be forgot,
And days o\' lang syne?
For auld lang syne my dear,
For auld lang syne,
We\'ll take a cup o\' kindness yet
For auld lang syne. 

And there\'s a hand, my trusty friend,
And gie\'s a hand o\' thine
We\'ll take a cup o\' kindness yet
For auld lang syne.
For auld lang syne my dear,
For auld lang syne,
We\'ll take a cup o\' kindness yet
For auld lang syne.',
			),
			5 => 
			array (
				'id' => 6,
				'chapter_id' => 10,
				'number' => 1,
				'title' => 'Festen skall börjas',
				'author' => NULL,
				'melody' => 'Vårvindar friska',
				'text' => 'Festen skall börjas kråset ska smörjas
magen skall få det som den vill ha.
Glasen står fulla låt sången rulla
Glädjen skall vara gäst här i da.

Glasen i handen fatta och sjung
glöm alla sorger, var bara ung.
Glöm morgondagen.
Tänk blott på magen.
Skål alla vänner! Hej och gutår!',
			),
			6 => 
			array (
				'id' => 7,
				'chapter_id' => 10,
				'number' => 10,
				'title' => 'Hårgalåten',
				'author' => '',
				'melody' => '',
				'text' => 'Spelmannen drog fiol\'n ur lådan och
Lyfte stråken högt mot söndagsolens kula
Då blev det fart i Hårgafolket
De glömde Gud och hela världen

Dansen gick på äng och backar
Högt upp på Hårgaåsens topp
En slet ut båd skor och klackar
Aldrig fick en på dansen stopp

Varifrån kommer du som spelar
säg vem har lärt dig detta spel, det vilda, det galna,
stannar du inte brister hjärtat;
O Gud bevare, hen har bockfot!

Klockorna hade ringt i dalen och där gick
Far och mor och bror till sockenkyrkan
Var kan nu Hårgas ungdom vara
Å herregud de dansar ännu

Dansen går till Hårgalåten
Högt upp på Hårgaåsens topp
En har inte långt till gråten
Dansar nu sönder själ och kropp

Hejda din stråke spelman innan 
vi dansar liv och själ och alla ben ur kroppen
Nej inte slutar hen sin dans 
Förr\'n de allesammans faller döda',
			),
			7 => 
			array (
				'id' => 8,
				'chapter_id' => 10,
				'number' => 11,
				'title' => 'En dansk aquavit',
				'author' => 'Hans Hartvig Seedorf',
				'melody' => '',
				'text' => 'Ren som en jomfru
og stærk som en bejler,
hed som det hjærte,
der hamre mod dit.

Kølig som kilden,
der vårhimlen spejler:
||: sådan min ven,
er en dansk aquavit. :||',
			),
			8 => 
			array (
				'id' => 9,
				'chapter_id' => 10,
				'number' => 12,
				'title' => 'Trink, trink',
				'author' => '',
				'melody' => 'Trink, trink',
				'text' => 'Trink, trink, Brüderlein/Schwesterlein trink
Lasset die Sorgen zu Haus
Trink, trink, Bruderlein/Schwesterlein trink
Bald ist das Leben aus

||: Meide den Kummer und meide den Schmerz
Dann ist das Leben ein Schertz :||

Trink... etc.

||: Meide die Weiber und meide das Bier
Dann wird ein Sportsman aus dir :||

Trink... etc.

||: Heirat im Sommer und scheide in März
Dann ist das Leben ein Schertz :||

Trink... etc.

||: Kauf dir ein Auto, fahr gegen ein Baum
Dann wird das Leben ein Traum :||',
			),
			9 => 
			array (
				'id' => 10,
				'chapter_id' => 10,
				'number' => 13,
				'title' => 'Smedsvisan',
				'author' => 'Daniel Helldén',
				'melody' => 'Noter finns i notkapitlet',
				'text' => 'En gång i min ungdom älskade jag
en flicka med rena och sköna behag.
Hon lovfte mig tro, i lust och i nöd
allt in till sin blekaste död

Hej hopp faderi faderalladerej
Hej hopp faderi faderalladerej
Hon lovfte mig tro, i lust och i nöd
allt in till sin blekaste död

Hon var som en lilja vit uti hyn
den vackraste kvinna en skådat i byn,
ett smittande skratt, en lustiger sång
vi älskade sommaren lång.

Hej hopp faderi faderalladerej
Hej hopp faderi faderalladerej
ett smittande skratt, en lustiger sång
vi älskade sommaren lång.

Men kärleken vissna\', kärleken dog
vid Mikaels mässa den flickan fått nog.
Hon fann sig en riker och högfärdig man
sa "Tack och adjö" och försvann.

Hej hopp faderi faderalladerej
Hej hopp faderi faderalladerej
Hon fann sig en riker och högfärdig man
sa "Tack och adjö" och försvann.

Nu står jag vid städet sliten och grå
och hammaren bultar och hjärtat likså.
Den flickan hon kommer aldrig igen,
hon är hos sin nyfunne vän.

Hej hopp faderi faderalladerej
Hej hopp faderi faderalladerej
Den flickan hon kommer aldrig igen,
men sången den trallar jag än.',
			),
			10 => 
			array (
				'id' => 11,
				'chapter_id' => 10,
				'number' => 14,
				'title' => 'Korta smedsvisan',
				'author' => '',
				'melody' => '',
				'text' => 'En gång i min ungdom älskade jag -
Sa tack och adjö och försvann!',
			),
			11 => 
			array (
				'id' => 12,
				'chapter_id' => 10,
				'number' => 2,
				'title' => 'Festvisa',
				'author' => 'nØllespexet 2004',
				'melody' => 'Sjösala vals',
				'text' => 'Årets första fest sker på klassiskt manér,
känn hur glädjen spritter uti kroppen med väldig fart.
Börja lätt med ölen ty den gåt alltid ner,
å innan festens slut sänkes nog några fler.

Smaka nu på bäsken, det ädla fabrikat,
om kryddan bränner strupen finns bättre destillat.
Ty punschen kommer ljuv och sval,
Läskar ända in i märgen.
Nu ska vi roa oss kungligt till klockan fem.',
			),
			12 => 
			array (
				'id' => 13,
				'chapter_id' => 10,
				'number' => 3,
				'title' => 'Sjösala vals',
				'author' => 'Evert Taube',
				'melody' => 'Sjösala vals',
				'text' => 'Rönnerdahl han skuttar med ett skratt ur sin säng.
Solen står på Orrberget. Sunnanvind brusar.
Rönnerdahl han valsar över Sjösala äng.
- Hör min vackra visa, kom sjung min refräng!

Tärnan har fått ungar och dyker i min vik,
ur alla gröna dungar hörs finkarnas musik,
och se, så många blommor som redan 
slagit ut på ängen!
Gullviva, mandelblom, kattfot och blå viol.

Rönnerdahl han virvlar sina lurviga ben,
under vita skjortan som viftar kring vadorna.
Lycklig som en lärka uti majsolens sken,
sjunger han för ekorr\'n, som gungar på gren!

- Kurre, kurre, kurre ! Nu dansar Rönnerdahl!
Kokó ! Och göken ropar uti hans gröna dal
och se, så många blommor som redan 
slagit ut på ängen!
Gullviva, mandelblom, kattfot och blå viol.

Rönnerdahl han binder utav blommor en krans,
binder den kring håret, det gråa och rufsiga,
valsar in i stugan och har lutan till hands,
väcker frun och barnen med drill och kadans.

- Titta ropar ungarna, Pappa är en brud
med blomsterkrans i håret och nattskjorta till skrud!
Och se, så många blommor som redan 
slagit ut på ängen!
Gullviva, mandelblom, kattfot och blå viol.

Rönnerdahl är gammal, men han valsar ändå!
Rönnerdahl har sorger och ont om sekiner.
Sällan får han rasta - han får slita för två.
Hur han klarar skivan, kan ingen förstå

Ingen utom tärnan i viken, hon som dök
och ekorren och finken och vårens första gök
och blommorna, de blommor som redan 
slagit ut på ängen
Gullviva, mandelblom, kattfot och blå viol.',
			),
			13 => 
			array (
				'id' => 14,
				'chapter_id' => 10,
				'number' => 4,
				'title' => 'Änglamark',
				'author' => 'Evert Taube',
				'melody' => 'Änglamark',
				'text' => 'Kalla den änglamarken eller himlajorden om du vill,
jorden vi ärvde och lunden den gröna.
Vildrosor och blåklockor och lindblommor och kamomill
låt dem få leva, de är ju så sköna.

Låt barnen dansa som änglar kring lönn och alm,
leka tittut mellan blommande grenar.
Låt fåglar flyga och sjunga för oss sin psalm,
låt fiskar simma bland bryggor och stenar.

Sluta att utrota skogarnas alla djur!
Låt örnen flyga, låt rådjuren löpa!
Låt sista älven som brusar i vår natur
brusa alltjämt mellan fjällar och gran och fur!

Kalla den änglamarken eller himlajorden om du vill,
jorden vi ärvde och lunden den gröna.
Vildrosor och blåklockor och lindblommor och kamomill
låt dem få leva, de är ju så sköna.',
			),
			14 => 
			array (
				'id' => 15,
				'chapter_id' => 10,
				'number' => 5,
				'title' => 'Frithiof och Carmencita',
				'author' => 'Evert Taube',
				'melody' => 'Frithiof och Carmencita',
				'text' => 'Samborombon, en liten by förutan gata, 
den ligger inte långt från Rio de la Plata, 
nästan i kanten av den blåa Atlanten 
och med Pampas bakom sig 
många hundra gröna mil, 
dit kom jag ridande en afton i april, 
för jag ville dansa tango. 

Dragspel, fiol och mandolin 
hördes från krogen och i salen steg jag in, 
där på bänken i mantilj 
och med en ros vid sin barm
satt den bedårande lilla Carmencita. 
Mamman, värdinnan satt i vrån, 
hon tog mitt ridspö, min pistol och min manton. 
Jag bjöd upp och Carmencita sa: 
\'Si gracias señor. Vamos á bailár este tango.\' 

Carmencita lilla vän, håller du utav mig än? 
Får jag tala med din pappa och din mamma, 
jag vill gifta mig med dig, Carmencita! 
Nej, don Fritiof Andersson, kom ej till Samborombon, 
om ni hyser andra planer när det gäller mig, 
än att dansa tango. 

Ack, Carmencita gör mig inte så besviken, 
jag tänker skaffa mig ett jobb här i butiken, 
sköta mig noga, bara spara och knoga 
inte spela och dricka, men bara älska dig. 
Säg, Carmencita, det är ändå blott med mig, 
säg, som du vill dansa tango. 

Nej Fritiof, ni förstår musik, 
men jag tror inte ni kan stå i en butik 
och förresten sa min pappa just idag att han visste, 
vem som snart skulle fria till hans dotter. 
En som har tjugotusen kor, 
och en estancia som är förfärligt stor. 
Han har prisbelönta tjurar, 
han har oxar, kor och svin 
och han dansar underbar tango. 

Carmencita, lilla vän, akta dig för rika män! 
Lyckan den bor ej i oxar eller kor 
och den kan heller inte köpas för pengar. 
Men min kärlek gör dig rik, 
skaffa mig ett jobb i er butik. 
Och när vi blir gifta söta ungar skall vi få, 
som kan dansa tango.',
			),
			15 => 
			array (
				'id' => 16,
				'chapter_id' => 10,
				'number' => 6,
				'title' => 'Än en gång däran',
				'author' => 'Evert Taube',
				'melody' => 'Än en gång däran',
				'text' => 'Än en gång däran, bröder
Än en gång däran
Följom den urgamla seden
In till sista man, bröder
In till sista man,
Trotsa vi hatet och vreden

Blankare vapen sågs aldrig i en här
Än dessa glasen kamrater i gevär
Än en gång däran, bröder
Än en gång däran
Svenska hjärtans djup här är din sup.

Livet är så kort, systrar
Livet är så kort
Lek det ej bort, nej var redo!
Kämpa mot allt torrt, systrar
Kämpa mot allt torrt
Tänk på de gamla som skredo

Fram utan fruktan i floder av champagne
Stärkta i själen av brännvin från vårt land
Kämpa mot allt torrt, systrar
Kämpa mot allt torrt
Svenska hjärtans djup här är din sup.',
			),
			16 => 
			array (
				'id' => 17,
				'chapter_id' => 10,
				'number' => 7,
				'title' => 'En liten blå förgätmigej',
				'author' => '',
				'melody' => 'Sjungs knästående för serveringspersonalen',
				'text' => 'Hur gärna ville jag ej vara
en liten blå förgätmigej
en liten blå förgätmigej.
Då skulle jag för dig förklara
hur innerligt jag älskar dig!',
			),
			17 => 
			array (
				'id' => 18,
				'chapter_id' => 10,
				'number' => 8,
				'title' => 'Längtan till landet',
				'author' => 'H. Sätherberg',
				'melody' => 'Noter till blandad kör finns i notkapitlet',
				'text' => 'Vintern rasat ut bland våra fjällar,
Drivans blommor smälta ned och dö.
Himlen ler i vårens ljusa kvällar,
Solen kysser liv i skog och sjö.

||: Snart är sommarn här i purpurvågor,
Guldbelagda, azur skiftande,
Ligga ängarne i dagens lågor,
Och i lunden dansa källorne :||

Ja, jag kommer! Hälsen glada vindar,
Ut till landet, ut till fåglarne,
Att jag älskar dem, till björk och lindar,
Sjö och berg jag vill dem återse,

||: Se dem än som i min barndoms stunder,
Följa bäckens dans till klarnad sjö,
Trastens sång i furuskogens lunder,
Vattenfågelns lek kring fjärd och ö. :||',
			),
			18 => 
			array (
				'id' => 19,
				'chapter_id' => 10,
				'number' => 9,
				'title' => 'Balladen om Herr Fredrik Åkare och den söta fröken Cecilia Lind',
				'author' => 'Text: Cornelis Vreeswijk',
				'melody' => 'Monday morning',
				'text' => 'Från Öckerö loge hörs dragspel och bas
och fullmånen lyser som var den av glas.
Där dansar Fredrik Åkare kind emot kind
med lilla fröken Cecilia Lind.

Hon dansar och blundar så nära intill,
hon följer i dansen precis vart han vill.
Han för och hon följer så lätt som en vind,
Men säg varför rodnar Cecilia Lind?

Säg var det för det Fredrik Åkare sa:
Du doftar så gott och du dansar så bra.
Din midja är smal och barmen är trind.
Vad du är vacker, Cecilia Lind.

Men dansen tog slut och vart skulle dom gå?
Dom bodde så nära varandra ändå.
Till slut kom dom fram till Cecilias grind.
Nu vill jag bli kysst, sa Cecilia Lind.

Vet hut, Fredrik Åkare, skäms gamla karln!
Cecilia Lind är ju bara ett barn.
Ren som en blomma, skygg som en hind.
Jag fyller snart sjutton, sa Cecilia Lind.

Och stjärnorna vandra och timmarna fly
och Fredrik är gammal men månen är ny.
Ja, Fredrik är gammal men kärlek är blind.
Åh, kyss mig igen, sa Cecilia Lind.',
			),
			19 => 
			array (
				'id' => 20,
				'chapter_id' => 11,
				'number' => 1,
				'title' => 'Fredmans sång n:o 21 - Måltidssång',
				'author' => 'C. M. Bellman',
				'melody' => '',
				'text' => 'Så lunka vi så småningom
Från Bacchi buller och tumult,
När döden ropar "Granne kom,
Ditt timglas är nu fullt" 
Du gubbe, fäll din krycka ner,
Och du, du yngling, lyd min lag,
Den skönsta nymf som mot dig ler
Inunder armen tag.

||: Tycker du att graven är för djup,
Nå, välan så tag dig då en sup,
Tag dig sen dito en, dito två, dito tre
Så dör du nöjdare. :||

Du vid din remmare och präss,
rödbrusig och med hatt på sned,
snart skrider fram din likprocess
i några svarta led;
och du som pratar där så stort,
med band och stjernor på din rock,
ren snickarn kistan färdig gjort,
och hyflar på dess lock.

||: Tycker du... :||

Men du som med en trumpen min,
bland riglar, galler, järn och lås,
dig vilar på ditt penningskrin,
inom din stängda bås;
och du som svartsjuk slår i kras
buteljer, speglar och pokal;
bjud nu god natt, drick ut ditt glas,
och hälsa din rival.

||: Tycker du… :||

Och du som under titlars klang
din tiggarstav förgyllt vart år,
som knappast har, med all din rang,
en skilling till din bår;
och du som ilsken, feg och lat,
fördömer vaggan som dig välvt,
och ändå dagligt är plakat
till glasets sista hälft

||: Tycker du... :||

Du som vid Martis fältbasun
i blodig skjorta sträckt ditt steg,
och du som tumlar i paulun,
i Chloris armar feg;
och du som med din gyllne bok
vid templets genljud reser dig,
som rister huvud lärd och klok,
och för mot avgrund krig,

||: Tycker du... :||

Men du som med en ärlig min
plär dina vänner häda jämt,
och dem förtalar vid ditt vin,
och det liksom på skämt,
och du som ej försvarar dem,
fastän ur deras flaskor du,
du väl kan slicka dina fem,
vad svarar du väl nu?

||: Tycker du... :||

Men du som till din återfärd,
ifrån det du till bordet gick,
ej klingat för din raska värd,
fastän han ropar: Drick,
driv sådan gäst från mat och vin,
kör honom med sitt anhang ut,
och sen med en ovänlig min,
ryck remmarn ur hans trut.

||: Tycker du... :||

Säg är du nöjd, min granne säg,
så prisa världen nu till slut;
om vi ha en och samma väg,
så följoms åt; drick ut.
Men först med vinet rött och vitt
för vår värdinna bugom oss,
och halkom sen i graven fritt,
vid aftonstjärnans bloss.

||: Tycker du... :||





Bacchi   -   tillhörande vinguden Baccus
nymf   -   naturväsen
remmare   -   buktigt vinglas med fot
präss   -   vin- eller citronpress
band, stjärnor   -   ordnar',
			),
			20 => 
			array (
				'id' => 21,
				'chapter_id' => 11,
				'number' => 10,
				'title' => 'Glunt nr. 25 - Examenssexa',
				'author' => 'G. Wennerberg',
				'melody' => '',
				'text' => 'Här är gudagott att vara
O, vad livet dock är skönt.
Hör vad fröjd från fåglars skara,
Se vad gräset lyser grönt.
Humlan surrar, fjäriln prålar,
Lärkan slår i skyn sin drill
Och ur nektarfyllda skålar
Dricka oss små blommor till.',
			),
			21 => 
			array (
				'id' => 22,
				'chapter_id' => 11,
				'number' => 11,
				'title' => 'Sommarpsalm',
				'author' => 'Text: Carl David af Wirsén',
				'melody' => '',
				'text' => 'En vänlig grönskas rika dräkt
har smyckat dal och ängar.
Nu smeker vindens ljumma fläkt
de fagra örtesängar,
och solen ljus, och lundens sus,
och vågens sorl bland viden.
Förkunnar sommartiden

Sin lycka och sin sommarro,
de yra fåglar prisa,
Ur skogen snår, ur stilla bo
framklingar deras visa.
En hymn går opp, med fröjd och hopp
från deras glada kväden.
Bland blommorna och träden

Men du, o Gud, som gör vår jord
så skön i sommarns stunder.
Giv att jag aktar främst ditt ord
och dina nådesunder.
Allt kött är hö, och blomstren dö,
och tiden allt fördriver.
Blott Herrens ord förbliver',
			),
			22 => 
			array (
				'id' => 23,
				'chapter_id' => 11,
				'number' => 12,
				'title' => 'Uti vår hage',
				'author' => 'Svensk folkvisa',
				'melody' => '',
				'text' => 'Uti vår hage där växa blå bär.
Kom hjärtans fröjd
Vill du mig något, så har du mig här!
Kom liljor och aquileja,
Kom rosor och salvia,
Kom ljuva krusmynta, kom hjärtans fröjd!

Fagra små blommor där bjuda till dans.
Kom hjärtans fröjd
Vill du, så binder jag åt dig en krans!
Kom liljor och aquileja,
Kom rosor och salvia,
Kom ljuva krusmynta, kom hjärtans fröjd!

Kransen den sätter jag sen i ditt hår,
Kom hjärtans fröjd
Solen den dalar men hoppet uppgår!
Kom liljor och aquileja,
Kom rosor och salvia,
Kom ljuva krusmynta, kom hjärtans fröjd!

Uti vår hage finns blommor och bär. 
Kom hjärtansfröjd! 
Men utav alla du kärast mig är. 
Kom liljor och akvileja,
kom rosor och salivia! 
Kom ljuva krusmynta, kom hjärtansfröjd!',
			),
			23 => 
			array (
				'id' => 24,
				'chapter_id' => 11,
				'number' => 13,
				'title' => 'Värmlandsvisan',
				'author' => '',
				'melody' => '',
				'text' => 'Ack, Värmeland, du sköna, du härliga land!  
Du krona för Svea rikes länder!  
Ja, om jag komme mitt i det förlovade land,  
till Värmland jag ändå återvänder.  
Ja, där vill jag leva, ja, där vill jag dö.  
Om en gång ifrån Värmland jag tager mig en mö,  
så vet jag att aldrig jag mig ångrar. 

I Värmeland är lustigt att leva och bo
det landet jag prisar så gärna.
Där klappar det hjärtan med heder och tro
så fasta som bergenas kärna.
Och var och en svensk i Svea rike\'s land
som kommer att gästa vi Klarälvens strand
han finner blott bröder och systrar.

I Värmeland, ja, där vill jag bygga och bo,
med enklaste lycka förnöjder.
Dess dalar och skog ger mig tystnadens ro,
och luften är frisk på dess höjder.
Och forsarna sjunga sin ljuvliga sång,
vid den vill jag somna så stilla en gång
och vila i värmländska jorden.',
			),
			24 => 
			array (
				'id' => 25,
				'chapter_id' => 11,
				'number' => 2,
				'title' => 'Kor ur Bacchi tempel',
				'author' => 'C. M. Bellman',
				'melody' => '',
				'text' => 'Bort allt vad oro gör,
Bort allt vad hjärtat kväljer
Bäst att man väljer bland
Desse buteljer
Sin maglikör.

||: Granne, gör du just som jag gör,
Vet denna oljan ger humör.
Vad det var läckert!
Vad var det? Rhenskt bläckert
Oui, Monseigneur. :||

Bort allt vad oro gör,
Allt är ju stoft och aska.
Låt oss bli raska och
Tömma vår flaska
Bland bröderna

||: Granne, gör du just som jag gör,
Vet denna oljan ger humör.
Vad det var mäktigt!
Vad var det? Jo, präktigt!
Malaga - ja. :||',
			),
			25 => 
			array (
				'id' => 26,
				'chapter_id' => 11,
				'number' => 3,
				'title' => 'Fredmans epistel n:o 48',
				'author' => 'C. M. Bellman',
				'melody' => '',
				'text' => 'Solen glimmar blank och trind,
Vattnet likt en spegel;
Småningom upblåser vind
I de fallna segel;
Vimpeln sträcks, och med en år
Olle på en Höbåt står;
Kerstin ur Kajutan går,
Skjuter lås och regel.

Seglen fladdra, skutan går,
Jerker tar sin lyra,
Lyran brummar, böljan slår,
Alt med våld och yra;
Skutan knarkar, bräcklig, gles,
Vimplens fläkt i toppen ses,
Tuppen gol så sträf och hes.
Nu slog klockan fyra.

Movitz stöt åt dem i lurn,
Som på skutan fara.
Olle du hvad kostar Tjurn?
Lyssna hvad de svara.
Hör hvar är ni hemma ni?
Ifrån Lofön komma vi
Med Grönsaker, Silleri,
Mjölk och Äplen klara.

Lilla Fästman på dig ser,
Kom min Norström lilla,
Sätt dig bred vid mej, sitt ner,
Fritt din låga stilla;
Vi ha alla lika rang.
Lustigt! hör basuners klang.
Prosit och Contentement!
Dyrbar ögonvila.

Morgon supen, Movitz, går;
Ljuvligt böljan svallar;
Ser du Ekensberg? Gutår!
Hör hur folket trallar;
Där framsätter en sin fot,
Klotet käglorna slår mot;
Hör du dunsen af hans klot
Uti bergen skallar?

Allstäds gott, men hemma bäst!
Sakta, lät oss unna
Vattukörarn med sin häst
Hvälfva om sin tunna;
Kärlet glittrar, hjulet går,
Sprundet sprutar, hästen slår.
Om den prakt för ögat står
Sjunga de som kunna.

Norström stjelper sin peruk
Af sin röda skalle,
Och min Ulla blek och sjuk
Lät sin kjortel falla,
Klev så bredbent i paulun;
Movitz efter med basun:
Maka åt dig Norström! Frun
Hör ju till oss alla.',
			),
			26 => 
			array (
				'id' => 27,
				'chapter_id' => 11,
				'number' => 4,
				'title' => 'Molltoner från Norrland',
				'author' => 'Julia Kristina Nyberg',
				'melody' => 'Noter finns i notkapitlet',
				'text' => 'Vårvindar friska, leka och viska
Lunderna kring likt älskande par
Strömmarna ila, finna ej vila
Förrän i havet störtvågen far.
Klappa mitt hjärta, klaga och hör
Vallhornets klang bland klipporna dör
Strömkarlen spelar, sorgerna delar
Vakan kring berg och dal.

Hjärtat vill brista - Ack! när när sista
gången jag hörde kärlekens röst:
avskedets plåga, ögonens låga,
mun emot mun vid klappande bröst.
Fjälldalen stod i blomstrande skrud.
Trasten slog drill på drill för sin brud;
Strömkarlen spelte, sorgerna delte,
suckande, berg och dal.

Natten så fager, ljus som en dager,
göt över skog och bölja sin glans.
Älvornas vingar, glänsande ringar
slöto kring ängens tuva i dans.
Suckande hjärtan, suckande lund,
Smekande ord och saligt förbund!
Strömkarlen spelte, sorgerna delte
suckande, berg och dal.

Ack, att vid polen midsommarsolen
Tusende år bortsovit så sällt!
Hastigt vem kallar? Krigsbudet skallar
Fjärran ifrån: "Till vapen!" så gällt.
Nu var ej tid hos flickan att bo,
Löftet han gav om kärlek och tro;
Strömkarlen spelte, sorgerna delte,
suckande, berg och dal.

Hurtigt på slätten, med bajonetten,
Snabb som en ren, han ilade ned;
Där, ibland fanor, flygande svanor,
Klingande spel, i blixtrande led,
Rak som en tall, han höjde sig opp,
Såg jag hans bild vid tårarnas lopp.
Strömkarlen spelte, sorgerna delte,
suckande, berg och dal.

Snart han marschera\' — Kom aldrig mera
Åter till hemmets brudliga tjäll.
När av min Modig vålnaden blodig
Svävar på västerns rodnande fjäll,
Klaga, mitt hjärta, klaga! — O, hör!
Vallhornets klang bland klipporna dör:
Strömkarlen spelar, sorgerna delar
Vakan kring berg och dal.',
			),
			27 => 
			array (
				'id' => 28,
				'chapter_id' => 11,
				'number' => 5,
				'title' => 'Den blomstertid',
				'author' => 'Isak Kolmodin',
				'melody' => '',
				'text' => 'Den blomstertid nu kommer
med lust och fägring stor:
Du nalkas ljuva sommar,
Då gräs och gröda gror.
Med blid och livlig värma
Till allt som varit dött,
Sig solen strålar närma,
Och allt blir återfött.

De fagra blomsterängar
Och åkerns ädla säd,
de rika örtesängar
Och lundens gröna träd,
De skola oss påminna
Guds godhets rikedom,
Att vi den nåd besinna,
Som räcker året om.

Man hörer fåglar sjunga
med mångahanda ljud:
Skall icke då vår tunga
lovsäga Herren Gud?
Min själ, upphöj Guds ära,
stäm upp din glädjesång
till den som vill oss nära
och fröjda på en gång.',
			),
			28 => 
			array (
				'id' => 29,
				'chapter_id' => 11,
				'number' => 6,
				'title' => 'Nu grönskar det',
				'author' => 'Musik: J. S. Bach
Svensk text: Evelyn Lindström',
				'melody' => 'Noter finns i notkapitlet',
				'text' => 'Nu grönskar det i dalens famn,
Nu doftar äng och lid.
Kom med, kom med på vandringsfärd
I vårens glada tid!
Var dag är som en gyllne skål,
Till brädden fylld med vin.
Så drick, min vän, drick sol och doft,
Ty dagen den är din.

Långt bort från dagens gråa hus
Vi glatt vår kosa styr
Och följer vägens vita band
Mot ljusa äventyr
Med öppna ögon låt oss se
På livets rikedom
Som gror och sjuder överallt
Där våren går i blom!',
			),
			29 => 
			array (
				'id' => 30,
				'chapter_id' => 11,
				'number' => 7,
				'title' => 'Visa vid midsommartid',
				'author' => 'Musik: Håkan Norlen
Svensk text: Rune Lindström',
				'melody' => '',
				'text' => 'Du lindar av olvon en midsommarkrans
och hänger den om ditt hår.
Du skrattar åt mångubbens benvita glans,
som högt över tallen står.
I natt skall du dansa vid Svartrama tjärn
i långdans, i språngdans på glödande järn.
I natt är du bjuden av dimman till dans,
där Ull-Stina, Kull-Lina går.

Nu tager du månen från Blåbergets kam
att ge dig en glorias sken.
Och ynglet som avlas i gölarnas slam
blir fålar på flygande ben.
Nu far du till Mosslinda, Mosslunda mor,
där Ull-Stina, Kull-Lina, Gull-Fina bor.
I natt skall du somna vid Svartrama damm
där natten och mossan är len.',
			),
			30 => 
			array (
				'id' => 31,
				'chapter_id' => 11,
				'number' => 8,
				'title' => 'Kristallen den fina',
				'author' => 'Svensk folkvisa',
				'melody' => '',
				'text' => 'Kristallen den fina, som solen månd\' skina,
Som stjärnorna blänka i skyn.
Jag känner en flicka, i dygden den fina,
En flicka i denna här byn.

Min vän, min vän och Älskogsblomma,
Ack om vi kunde tillsammans komma,
Och jag vore vännen din,
Och du allra kärestan min!
Du ädela ros
Och förgyllande skrin.

Och om jag än fore till världenes ände,
Så längtar mitt hjärta till dig.
Och om jag än fore till världenes ände,
Så längtar mitt hjärta till dig.

Till dig, min vän och Älskogsblomma,
Ack om vi kunde tillsammans komma,
Och jag vore vännen din,
Och du allra kärestan min!
Du ädela ros
och förgyllande skrin.',
			),
			31 => 
			array (
				'id' => 32,
				'chapter_id' => 11,
				'number' => 9,
				'title' => 'Madrigal',
				'author' => 'A. de la Hale',
				'melody' => '',
				'text' => 'Kom, du ljuva hjärtevän!
Skall jag vänta länge än?
||: Längtan mig förbränner,
Hjärtevän! :||

Månens skiva blank och rund
Glider fram i nattens stund.
||: Du, du är mitt hjärtas
Enda tröst .:||

Liksom rosen skär och ren,
slår du ut i solens sken.
||: Kom, kom du min ljuva
Hjärtevän! :||',
			),
			32 => 
			array (
				'id' => 33,
				'chapter_id' => 12,
				'number' => 1,
				'title' => 'Jag har aldrig vart på snusen',
				'author' => '',
				'melody' => 'Åh, hur saligt att få vandra',
				'text' => 'Jag har aldrig vart på snusen,
Aldrig rökat en cigarr, haleluja
Mina dygder äro tusen
Inga syndiga laster jag har
Jag har aldrig sett nå\'t naket
Inte ens ett litet nyfött barn
Mina blickar går mot taket
Därmed undgår jag frestarens garn

Haleluja - haleluja...

Bacchus spelar på gitarren
Satan spelar på sitt handklaver
Alla djävlar dansar tango
Säg vad kan en väl önska sig mer?
Jo, att alla bäckar vore brännvin
Riddarfjärden full av bayerskt öl
Konjak i varenda rännsten
Och punsch i varenda vattenpöl

Och mellanöl - och mellanöl...',
			),
			33 => 
			array (
				'id' => 34,
				'chapter_id' => 12,
				'number' => 2,
				'title' => 'Handelsvisa',
				'author' => 'Team kangaroo Gerhards-gasque 1977',
				'melody' => 'Åh, hur saligt att få vandra',
				'text' => 'Vi vill aldrig gå på Handels,
Aldrig tenta företagsekonomi.
Deras IQ den e\' Mandels
Och förståndet, det har ju gjort sorti.
Dom har jätteusla snören,
Till sitt jätteusla draperi.
Dom kan bara räkna ören,
Hela skolan e\' ett enda aperi!

Handels är skit - Jag vill ej dit ....

Mammons pojkar är dom alla,
Pappas flickor är dom likaså,
Går och tror att dom är balla,
Fastän dom inget alls ju förstå.
Hela Handels borde rivas,
Detta anser hela vårat lag.
Då skulle Osquarulda trivas
Uppå denna Handels ljuva domedag!

Åh, vilket drag - på denna dag ....',
			),
			34 => 
			array (
				'id' => 35,
				'chapter_id' => 12,
				'number' => 3,
				'title' => 'Fysikhatarvisan',
				'author' => 'DKM hösten 2000',
				'melody' => 'Åh, hur saligt att få vandra',
				'text' => 'Jag vill inte gå på fysik,
aldrig tenta termometerdynamik.
Jag vill inte höra syntmusik,
inte festa som en tråkig mattegeek.
Vi ser ut som Televerket
i vår jättefula overall.
Vi kan bara räkna kvarkar,
nu hyllar vi Data med en skål!

Fysik är torrt - jag vill ju bort!

Einsteins vänner är vi alla.
Handelsmänniskor kan vi aldrig få.
Går och tror att vi är balla,
det får bli på egen hand om det ska gå.
Nu ska hela Sing-Sing rivas,
Arkitekt är med på Datas lag.
Televerket ska fördrivas
uppå Konsulatets ljuva domedag

Å nubbedrag - på denna dag ...',
			),
			35 => 
			array (
				'id' => 36,
				'chapter_id' => 12,
				'number' => 4,
				'title' => 'Datas visa',
			'author' => 'Mattis Castegren (D)
Ettans fest 2001',
				'melody' => 'Åh, hur saligt att få vandra',
				'text' => 'Alla vi som går på Data
sitter mest och kodar Perl-script varje natt.
Med oss kan en inte prata
om en inte loggat in på någon chatt.
Våran hy är grå som aska
när solen skiner sysslar vi med webdesign
och när de andra börjat gasqua
sitter vi och spelar Ultima Online.

||: Datan är grå - visst är det så!
Datan är trist - javisst, javisst!
Datan är skit - en drar en nit
om en går dit! :||

Vi har något tomt i blicken,
en hel skvadron av tomtar på vårt loft!
Ingen av oss har nån partner,
men vi drömmer varje natt om Lara Croft.
Data borde formateras,
systematiskt, partition för partition.
Nördarna dekompileras
och uppgraderas till en användbar version.

Datan är grå...',
			),
			36 => 
			array (
				'id' => 37,
				'chapter_id' => 12,
				'number' => 5,
				'title' => 'Hyllningsvisa',
				'author' => 'V - LTH',
				'melody' => 'Sit on my face',
				'text' => 'Teknik fysik är mössbeklädda töntar,
mammas pojkar och en samling pappas flickor.
Liknar mest en televerksbil, som gått för många mil,
en teknisk fossil.

Teknisk Fysik är lättare än att fjärta,
döda älgar värmer nu mitt kalla hjärta.
Ta hit dynamit, sprängteknik vårt gebit!
||: Dessa tofsprydda avskum som ger oss kolik!:|| (3 ggr)


<Sjunges tre gånger medan tofsen snurras i cirklar. Bärs ej mössa, så låtsas en och snurrar i luften. Därefter:>

Dessa tekniska lik!!! Barampam!

<På Barampam lyftes mössan, alternativtluften ovanför hjässan, i hälsning.>',
			),
			37 => 
			array (
				'id' => 38,
				'chapter_id' => 12,
				'number' => 6,
				'title' => 'Man ska gå Teknis',
				'author' => 'TjejnØllan, FanFar',
				'melody' => 'Husvagn',
				'text' => 'Jag har prövat nästan allt som finns att välja på:
Sjukgymnastik, historia är inge\' kul att gå
Jag har studerat på de allra konstigaste sätt
och äntligen jag funnit hur en ska studera rättEn ska gå Teknis - och läsa matte och fysikEn ska gå Teknis - då har jag hört att en blir rik
En ska gå Teknis - och flytta in på KTH
För att på Teknis - där vill alla gå!

I många år så var vi faktiskt bland de allra bästa
Men nu så är vi sämst, så vi kan lika gärna festa
Föhseriet säger nØllan är schlemmig och wüdrogh
Så\'n tur att fadderiet plocka\' upp oss där vi låg

En ska ha faddrar - som står och väntar utanför
En ska ha faddrar - som alltid visar hur en görEn ska ha faddrar - som en kan krama på ibland
Ja våra faddrar - ror ju allt i land!

5 minuter övningsgasque och 5 minuter draqueflyg
5 minuter Kårens dag och Föhseriets otyg
5 minuter intromatte, 5 minuter vals
Bäsk å punsch å andra drycker fyller våran hals.

En ska gå Teknis - och läsa matte och fysik
En ska gå Teknis - då har jag hört att en blir rikEn ska gå Teknis - och flytta in på KTH
För att på Teknis - där vill alla gå!',
			),
			38 => 
			array (
				'id' => 39,
				'chapter_id' => 12,
				'number' => 7,
				'title' => 'Teknologvisa',
				'author' => '',
				'melody' => 'Lumberjack song
F: Försångare
A: Alla',
				'text' => 'F: Jag är teknolog och helt OK
jag jobbar hårt och jag roar mig.
A: Hen är teknolog och helt OK
hen jobbar hårt och hen roar sig.

F: Teknik är ball
Jag kan Pascal
Till Lophtet vill jag gå
Där träffas alla vänner
som är från LTH

A:Teknik är ballHen kan Pascal
Till Lophtet vill Hen gå
Där träffas alla vänner
som är från LTH

För hen är teknolog och helt OK
Hen jobbar hårt och hen roar sig

F: Min mattebok, den gör mig klok
Jag läser kärnfysik
Jag går på föreläsning
och älskar juridik

A: Hens mattebok, den gör hen klok
Hen läser kärnfysik
Hen går på föreläsning
och älskar juridik   (förvånat)

Men hen är teknolog och helt OK
Hen jobbar hårt och hen roar sig

F: Som ekonom jag blir fantom
Konkurser gör mig säll
Till kärlek blankt jag nekar
Jag älskar en tabell

A: Som ekonom hen blir fantom   (förvånat)
konkurser...
Nää, BUU!!

Men hen är teknolog och helt OK
Hen jobbar hårt och hen roar sig',
			),
			39 => 
			array (
				'id' => 40,
				'chapter_id' => 13,
				'number' => 1,
				'title' => 'Lingonben',
				'author' => 'Povel Ramel',
				'melody' => '',
				'text' => 'Bluff och Spark och Tork och Kvark 
voro sex små dvärgar. 
En var ful och en var glad 
Och en var dum i huvet.

Hej, sa Kvark till lille Tork. 
Känner du igelkotten Pilt?
Han som har varit i Paris? 
Ja, det gjorde Ivar!

Hör du hans lilla runda tass 
när som han trippar på sitt pass. 
Tripp och Trapp och trypa,
Se hans lilla faster.

Tomtefar i skogens brus 
sitter som ett päron.
Han har inget eget hus 
allt i sin stora näsa.

Söt och blöt är skogens fé. 
Trollen är bjudna hit på te. 
Det lilla trollet pass för det! 
Nu ska mormor bada!

Väva och spinna natten lång. 
Prinsen är här i fjorton språng 
Hipp och hopp och häppla! 
Hästen heter Sverker.

Stora slottet Drummeldimp! 
ligger bortom fjärran.
Dit får ingen komma in 
som ej kan baka struvor.

Gyllenkrull och Sockertipp! 
Kom, ska vi dansa häxan våt! 
Vill du mig här, så har du nåt! 
Sov du lilla tryne!

Kungen är full av stock och sten. 
Skogen är full av lingonben. 
Per är full av tomtar. 
Hur ska lillan orka?',
			),
			40 => 
			array (
				'id' => 41,
				'chapter_id' => 13,
				'number' => 10,
				'title' => 'Kanta Studjosi',
				'author' => 'magister Ludvig Hagwald, Grönköping',
				'melody' => 'Studentsången',
				'text' => 'Kantom studjosi extarbon sjur!
Lassom galejan in spring juvenar,
nock funkar kardan kum san\' bravur,
kaj futura blondina üst var.
Nolla furii
in va psykosan sit,
esperan v\'ami,
promissan va kredit,
kum voj knopa bandage in plantage,
kvo dulkissan diploma florit,
kvo dulkissan diploma florit,
Hojlah!',
			),
			41 => 
			array (
				'id' => 42,
				'chapter_id' => 13,
				'number' => 11,
				'title' => 'Indialand',
				'author' => 'Karl Lindén',
				'melody' => '',
				'text' => 'I Indialand, bak Himalayas rand,
där händer det konstiga saker ibland.
Se\'n urminnes tider fanns heliga kon.
Nu har den bytts ut mot en Boforskanon.

Det började så, en man vid namn Gandhi
sa: "Vi ska ha något med mycket krut i.
Det som finns i Sverige behöver vi nu,
säg, hette den inte Haubits 77?"

Han trollade så att ett konto i Schweiz
försvann och bluvanerna sade hej-svejs,
för tydligen har inte papper fyllts i
och Roine förstår lika lite som vi
Woine woine Roine woine Roine...',
			),
			42 => 
			array (
				'id' => 43,
				'chapter_id' => 13,
				'number' => 12,
				'title' => 'Zwampen',
				'author' => 'Electric Banana Band',
				'melody' => '',
				'text' => 'Jag gillar inte höghus
Sten och lätt betong
Jag trivs inte i stan
För den är grå och trång

Jag vill bo i en svamp, annars får jag kramp (svamp)
Det finns hopp för min kropp, i en mullig sopp (svamp)
Kom ikväll och var snäll, until min kantarell (svamp)
Titta in och ta ton, i min champinjon (svamp)

Jag vill bo i skogen
I lugn och rymd och ljus
Och sitta framför svampen
Och höra tallens sus

Jag vill bo i en svamp, annars får jag kramp (svamp)
Det finns hopp för min kropp, i en mullig sopp (svamp)
Kom ikväll och var snäll, until min kantarell (svamp)
Titta in och ta ton, i min champinjon (svamp)

Tiderna är hårda
Livet är en kamp
Det känns mycket bättre
Om jag har min svamp

Jag vill bo i en svamp, annars får jag kramp (svamp)
Det finns hopp för min kropp, i en mullig sopp (svamp)
Kom ikväll och var snäll, until min kantarell (svamp)
Titta in och ta ton, i min champinjon (svamp)',
			),
			43 => 
			array (
				'id' => 44,
				'chapter_id' => 13,
				'number' => 13,
				'title' => 'Lumberjack song',
				'author' => 'Monty Python\'s Flying Circus',
				'melody' => 'F: Försångare
A: Alla',
				'text' => 'F:I\'m a lumberjack 
And I\'m O.K 
I sleep all night 
And I work all day

A: He\'s a lumberjack 
And he\'s O.K 
He sleeps all night 
And he works all day

F: I cut down trees 
I eat my lunch 
I go to the lavatory 
On Wednesday I go shopping 
And have buttered scones for tea

A: He cuts down trees 
He eats his lunch 
He goes to the lavatory 
On Wednesday he goes shopping 
And has buttered scones for tea 

He\'s a lumberjack 
And he\'s O.K 
He sleeps all night
And he works all day

F: I cut down trees 
I skip and jump 
I like to press wild flowers 
I put on women\'s clothing 
And hang around in bars

A: He cuts down trees 
He skips and jumps 
He likes to press wild flowers 
He puts on women\'s clothing 
And hangs around in bars

He\'s a lumberjack 
And he\'s O.K 
He sleeps all night 
And he works all day

F: I cut down trees 
I wear high heels 
Suspenders and a bra 
I wish I\'d been a girlie 
Just like my dear Papa

A: He cuts down trees 
He wears high heels 
(spoken rather than sung)
Suspenders ..... and a bra? 
That\'s shocking! 
That\'s rude...tuttut...tut...tut',
			),
			44 => 
			array (
				'id' => 45,
				'chapter_id' => 13,
				'number' => 14,
				'title' => 'Under en filt i Madrid',
				'author' => 'Claes Eriksson',
				'melody' => '',
				'text' => 'Under en filt i Madrid 
där ligger en flicka på glid. 
Tittar på mannen bredvid 
under en filt i Madrid.

Bakom ett berg i Geneve 
där får en moder ett brev
från hennes dotter på glid 
under en filt i Madrid.

Framför en stolpe i Bonn 
sitter det nu inte nån. 
Bara en tom La Garonne 
framför en stolpe i Bonn.

Men, där i vindarnas drev 
fladdrar ett brev från Geneve, 
postat en gång i Bretagne, 
doftande billig Champagne.

På en bordell i Borås 
smörjer en herre sitt krås. 
Bakom ett skjul i Tasjkent 
där står ett fönster på glänt.

Någon har kastat ett skal 
genom en jak i Nepal. 
Ingenting är som det skall 
solen är blott en marschall. 

Och själv är jag blott en kostym. 
Mamma är bara parfym. 
Pappa förspiller sin tid 
under en filt i Madrid.

Under ett lakan i Prag 
ligger en kvinna och jag. 
Sängen är full av resår 
sången jag sjunger är svår.

Omöjlig att ta sig ur, 
jag vete fan inte hur. 
Orden får snart inte rum, 
jag får väl sjunga mig stum!

Tonerna trängs i min gom, 
sätt mig på tåget till Rom! 
Låt mig få sluta min tid 
under en filt i Madrid!',
			),
			45 => 
			array (
				'id' => 46,
				'chapter_id' => 13,
				'number' => 15,
				'title' => 'Styrman Karlssons äventyr med porslinspjäsen',
				'author' => '',
				'melody' => '',
				'text' => 'Stackars styrman Karlsson hade otur,
skulle gå på flottans fest igår.
När han skulle snöra på sej skorna
måttade han fel med sina tår.

Han satte foten i sin potta
och kunde inte komma loss!
Hans fot är storlek förtiåtta
och den var alltför stor förstås.

Han putsa upp den med skokräm,
så att den glänste svart och fin,
och snart på balen sågs han dansa
med sin sko utav porslin.

Han hade foten i en potta
men så han svängde sina ben!
Så bra att chefen för vår flotta
utnämnde Karlsson till kapten.

Nu är kapten Karlsson havets fasa,
alla sjöpiraters stora skräck.
Över vattnet hör en tydligt ekot
av hans steg, när han går kring på däck.

Ja han går med foten i en potta
för han har aldrig kommit loss.
Och såna sparkar han kan måtta,
när han i drabbningarna slåss!

En gång så föll han från skutan
och tänkte: "Nu så blir jag våt.
Hur ska jag komma hem till Sverige?
Jag har ju inte någon båt."

Han hade foten i en potta.
I denna seglade han hem.
Och möttes av sin fru Charlotta,
som också har sin fot i kläm
(i en byrålåda i en chiffonjé, olé!)',
			),
			46 => 
			array (
				'id' => 47,
				'chapter_id' => 13,
				'number' => 16,
				'title' => 'Sjung om Fru Svenssons lyckliga karl',
				'author' => 'Povel Ramel',
				'melody' => 'Studentsången',
				'text' => 'Sjung om fru Svenssons lyckliga karl,
låt honom plöja i ungdomens fåror.
Fem gamla hjärtan i sprit har jag.
å\' en ljus elefant i ett snår.
Inga stoppar den,
i vårat linneskåp.
Loppor tär vår vän, 
som idisslar en sko 
när vi snyta en rund liten hund.
||: Där den här lilla bagaren bor. :|||
Hursa?',
			),
			47 => 
			array (
				'id' => 48,
				'chapter_id' => 13,
				'number' => 17,
				'title' => 'Temperaturen',
				'author' => '',
				'melody' => '',
				'text' => 'Temperaturen är hög uti kroppen 
Närmare 40 än 37,5. 
Men så skall det vara när ångan är oppe 
Och så är fallet uti detta nu! 
||: Det rullar, det rullar, vi rullar, vi rullar, 
Vi rullar, vi rullar, vi rullar, å hej! :||

Å framåt och bakåt...
Å höger och vänster... 
August... och Lotta...',
			),
			48 => 
			array (
				'id' => 49,
				'chapter_id' => 13,
				'number' => 2,
				'title' => 'Älska dig själv',
				'author' => 'Fysikalen Wagner 1986',
				'melody' => 'Mermaid',
				'text' => 'Är du trött på att va\' som andra, 
driva med i livets älv? 
Ta och övervinn din mesighet 
och satsa på dej själv!

Omvärdera dina värden, 
kasta bort din slavmoral 
och bli krönet på den utveckling 
som har pågått sen neanderthal:

Bli en övermänska, långt bortom gott och ont! 
Övermänni-männi-människan är 
glad och ond som en god James Bond och 
håller blott sej själver kär!

Du som jämt står sist i krogkön 
och som aldrig får en dans: 
sluta sjåpa dej, ta piskan fram 
och ge dej själv en chans!

Hur än allting kommer åter 
gäller blonda bestars bud: 
Du skall upphöjt sträva efter makt 
och du ska va\' din egen gud.

Bli en övermänska, långt bortom gott och ont! 
Övermänni-männi-människan är 
helt komplett, luktar aldrig svett, och 
fri från impotensbesvär.',
			),
			49 => 
			array (
				'id' => 50,
				'chapter_id' => 13,
				'number' => 3,
				'title' => 'Balladen om den kaxiga myran',
				'author' => 'Stefan Demert',
				'melody' => '',
				'text' => 'Jag uppstämma vill min lyra 
fast det blott är en gitarr 
och berätta om en myra 
som gick ut att leta barr. 
Hen gick ut i morgondiset 
sen hen druckit sin choklad 
och försvann i lingonriset 
||: både mätt och nöjd och glad. :||

Det var långan väg att vandra, 
det var långt till närmsta tall. 
Hen kom bort ifrån de andra, 
men var glad i alla fall. 
Femtio meter ifrån stacken, 
just när solnedgången kom, 
hittade hen ett barr på backen 
||: som hen tyckte mycket om. :||

För att lyfta fick hen stånka, 
hen fick spänna varje lem.
Men så började hen kånka 
på det fina barret hem. 
När hen gått i fyra timmar 
kom hen till en ölbutelj. 
Hen såg allting som i dimma, 
||: Bröstet hävdes som en bälg. :||

Den låg kvar sen förra lördan. 
-Jag ska släcka törsten min, 
tänkte hen och lade bördan 
utanför och klättrade in. 
Hen drack upp den sista droppen, 
som fanns kvar i den butelj. 
Sedan slog hen sig för kroppen
||: och skrek ut: -Jag är en älg! :||

-Ej ett barr jag drar till tjället, 
nej nu ska jag tamigfan 
lämna skogen och istället 
vända uppochner på stan! 
Men hen kom aldrig till staden, 
något spärrade hens stig. 
En koloss där låg bland bladen 
||: och vår myra hejdar sig. :||

Den var hiskelig att skåda. 
Den var stor och den var grå, 
men vår myra skrek: Anåda, 
om du hindrar mig att gå! 
Hen for ilsket på kolossen, 
som låg utsträckt i hens väg, 
men vår myra kom ej loss sen. 
||: Hen satt fast som i en deg. :||

Sorgligt slutar denna sången. 
Myran stretade och drog, 
men kolossen höllen fången 
tills hen svalt ihjäl och dog. 
Undvik alkoholens yra. 
Du blir stursk, men kroppen loj 
och om du är född till myra: 
||:Brottas aldrig med ett TOY! :||',
			),
			50 => 
			array (
				'id' => 51,
				'chapter_id' => 13,
				'number' => 4,
				'title' => 'Nikolajev',
				'author' => '',
				'melody' => 'Rysslands nationalsång',
				'text' => 'Mitt namn är Nikolajev, 
kosmonaut från Sovjet. 
Jag flyger runt jorden 
i min rymdraket. 
Och där ska jag stanna i 84 varv 
för det har Chrustjev sagt, 
men det tycker jag är larv.

Jag längtar hem, hem till min planet. 
Till fru och barn därhemma i Sovjet. 
Men mest utav allt längtar jag till ett rum 
med ett hjärta på dörren. 
Jag längtar hem till min planet. 
Till fru och barn därhemma i Sovjet.

Min kapsel innehåller 
många instrument. 
Ja, mycket av sådant 
som ännu ej är känt. 
Men lika förbannat, vad du än tror: 
jag glömde gå på muggen 
Innan jag for.

Jag längtar hem...',
			),
			51 => 
			array (
				'id' => 52,
				'chapter_id' => 13,
				'number' => 5,
				'title' => 'Danse Macabre',
				'author' => 'Carl-Erik Carlstedt, CTH',
				'melody' => 'Vårvindar friska',
				'text' => 'Runt kring vår stuga 
smådjävlar sluga 
tassa så tyst med bockfot och svans. 
Varulvar yla, 
isande kyla 
sveper i dimma fanstygets dans.

Bäva, o fränder, lyssna och hör 
vrålen från gast som osalig dör. 
Satan han skrattar, 
flaskan han fattar, 
uper tills dagen gryr.

Gastar och spöken 
skymtar i kröken. 
Dödingar släpar ruttnande lik. 
Benrangel skramla, 
spökhänder famla, 
kväva din strupes rosslande skrik.

Helvetets alla fasor släppts loss, 
Fan rider här med hela sin tross. 
Göm dig i stugan, 
du har fått flugan, 
dille det blir din lott.',
			),
			52 => 
			array (
				'id' => 53,
				'chapter_id' => 13,
				'number' => 6,
				'title' => 'Katten',
				'author' => '',
				'melody' => 'Glad såsom fågeln',
				'text' => 'Glad åt en fågel i morgonstunden 
går hen på jakt i den friska natur. 
Lärkan hen ratar, men trasten i lunden 
lyckas hen fånga, nej tänk en sån tur!

Se hur de fjädrade vingarne små 
hoppa och slå, hoppa och slå 
Vänliga tarmar kring buskar och grenor 
se, hur det spritter i muskler och senor 
av liv och av dans? Nej, trasten är hens,
och hen kröker sin listiga svans 
jakten går som en dans
uti vår-sol-ens glans!',
			),
			53 => 
			array (
				'id' => 54,
				'chapter_id' => 13,
				'number' => 7,
				'title' => 'Undulaten',
				'author' => '',
				'melody' => 'Med en enkel tulipan',
				'text' => 'Jag är en liten undulat,
som får så dåligt med mat,
för de jag bor hos,
för de jag bor hos,
de är så snåla.
De ger mig fisk varenda dag,
men det vill jag inte ha,
jag vill ha rödvin,
jag vill ha rödvin,
och Gorgonzola.',
			),
			54 => 
			array (
				'id' => 55,
				'chapter_id' => 13,
				'number' => 8,
				'title' => 'Bakfyllosofen',
				'author' => 'Fysiksektionen, LTH',
				'melody' => '34:an',
				'text' => 'Eskimåer jagar valross.
Alla tyskar jagar älg.
Pedofiler jagar småglin.
Vilken värld, ja skål och svälj.

Uti skogen finns det blåbär.
På balkongen står en stol.
Uti stolen sitter jag.
Jag har vatt bakfull sen i fjol.

Om du hör nånting som tickar,
kan det kanske va en bomb.
Om det är en väckarklocka,
bara vänd och somna om.
Om du har en liten tax
och så en fet gul undulat.
||:Ja då hopar sig problemen,
en kan inte ge dem samma mat. :||',
			),
			55 => 
			array (
				'id' => 56,
				'chapter_id' => 13,
				'number' => 9,
				'title' => 'Mellansup',
				'author' => 'Fysiksektionen, LTH',
				'melody' => 'Fredagsmys',
				'text' => 'Det är dags för mellansup,
om det så är det sista jag gör.
Det är dags för mellansup, 
hoppas inte att toastmastern stör.
Nu är det slut på versen,
det är dags för mellansup!',
			),
			56 => 
			array (
				'id' => 57,
				'chapter_id' => 14,
				'number' => 1,
				'title' => 'Konglig Fysiks Paradhymn',
				'author' => 'Dum-Dum 1977',
				'melody' => 'Katyuscha',
				'text' => 'Här på festen stiger åter glammet
Sången börjar, tentan bortglömd är
Lyss min strupe Du plågas utav dammet
Frukta ej ty hjälpen är just här
ibland oss
Höj pokalen, dess flöde känns som sammet
Drick till det som Bacchi vapen lär.

Känn, Osquarulda, känn hur blodet hettar
Osqarulda orsak till det är
Timmar skrider och dygdens bojor lättar
Fest och glädje kärleksflamman när
men minns att
Blott ej synen en hungrig kärlek mättar
Drick till det som Venus\' vapen lär.

FYSIKER, gasqueropen de har skallat
Likt musik från någon högre sfär
Tentans piska för länge har oss vallat
Trotsa den och studiernas misär
med lärdom
Från de makter som ytterst har oss kallat
Bacchus, Venus värdar hos oss är
och vänner
Bacchi nektar ej Venus\' flamma släcker 
SKÅL för det Fysiks skyddsgudar lär. 



Under sista versen står fysiker, men inga andra, upp. "Osquarulda" kan bytas mot "Osquar" eller "Osqulda" efter behag.',
			),
			57 => 
			array (
				'id' => 58,
				'chapter_id' => 14,
				'number' => 2,
				'title' => 'Årskursernas hederssång',
				'author' => NULL,
				'melody' => NULL,
				'text' => 'Alla: För det var i vår ungdoms fagraste vår,
vi drack varandra till och vi sade "gutår".
Och alla så dricka vi nu <Foo> till,

Foo: Och <Foo> säger inte nej därtill...

Vid <Foo> insättes n-m, där n=aktuellt årtal, m=0, 1, 2...
35 Fux
42 Fibonacci
51 Filibuster
54 Fafner
55 Femfemman
56 Fjalar
57 Fimbul
58 Fatal
59 Fritiof
60 Fredag
61 Fulbia
62 Figaro
63 Fter
64 Fyran
65 Frukt
66 Födde
67 Fnark
68 Flirp
69 Fiasko
70 Flera
71 Funilla
72 Fillhouse
73 Fadäs
74 Förutan
75 Finans
76 Filur
77 Fräck
78 Fyffes
79 Fnusk
80 Fuktig
81 Flykting
82 Fiqus
83 Fikon
84 Filmjölk
85 Fortsätt!
86 Flyter
87 Fnöske
88 Flora
89 Fagott
90 FemFel
91 Fjortis
92 Fido
93 Fromhet
94 Flaxa
95 Ferdinand
96 Felande Länken
97 Fängsel
98 Folkdans
99 Fulöl
00 Formfranska
01 Flykta!
02 Fusklapp
03 Fetvadd
04 FanFar
05 Flörtfrisk
06 Friskus
07 Fokus
08 Førspel
09 Falsklarm
10 Framfusig
11 Frappera
12 Fumla
13 Frågvis',
			),
			58 => 
			array (
				'id' => 59,
				'chapter_id' => 14,
				'number' => 3,
			'title' => 'De Brevitate Vitae (Gaudeamus)',
				'author' => 'Biskop Stada 1267,
C.W. Kindleben 1781',
				'melody' => NULL,
				'text' => '||: Gaudeamus igitur, iuvenes dum sumus! :||
Post icundam iuventutem, post molestam senectutem
||: nos habebit humus. :||

||: Ubi sunt, qui ante nos in mundo fuere?:||
Vadite ad superos, transite ad inferos,
||: ubi iam fuere!:||

||: Vita nostra brevis est, brevi finietur,:||
venit mors velociter, rapit nos atrociter,
||: nemini parcetur.:||

||: Vivat academia, vivant professores!:||
Vivat membra quaelibet, vivant membran quaelibet
||: semper sint in flore!:||

||: Vivant omnes virgines, graciles formosae!:||
Vivant et mulieres, tenerae,
||: amabiles bonae laboriosae!:||

||: Vivat et respublica et qui illam regit!:||
Vivat nostra civitas, Maecenatum caritas,
||: quae nos hic protegit!:||

||: Pereat tristitia, pereant osores!:||
Pereat diabolus, quivis antiburschius,
||: atque irrisores! :||',
			),
			59 => 
			array (
				'id' => 60,
				'chapter_id' => 14,
				'number' => 4,
				'title' => 'Överföhssång',
				'author' => 'Skriven till Ettans Fest 1990',
				'melody' => 'Kungssången',
				'text' => 'Ur teknologens djup en gång
En samfälld och en enkel sång
Som går till Överföhs fram
Var henom trofast och hens ätt
Gör piskan i hens näve lätt
Och all din tro till henom sätt
Du schlemm av ingen rang',
			),
			60 => 
			array (
				'id' => 61,
				'chapter_id' => 14,
				'number' => 5,
				'title' => 'Studentsången',
				'author' => 'Herman Sätherberg',
				'melody' => 'Noter till blandat kör finns i notkapitlet.',
				'text' => 'Sjung om studentens lyckliga dag!
Låtom oss fröjdas i ungdomens vår!
Än klappar hjärtat med friska slag,
och den ljusnande framtid är vår

Inga stormar än i våra sinnen bo,
hoppet är vår vän och vi dess löften tro
När vi knyta förbund i en lund
Där de härliga lagrarna gro,
Där de härliga lagrarna gro.
Hurra!

Svea vår moder hugstor och skön
manar till bragd som i fornstora dar,
vinkar med segerns och ärans lön,
men den skörd utan strid man ej tar.

Aldrig slockne då känslans rena brand,
aldrig brista må trohets helga brand,
så i gyllene frid som i strid.
Liv och blod för vårt fädernesland!
Liv och blod för vårt fädernesland!',
			),
			61 => 
			array (
				'id' => 62,
				'chapter_id' => 14,
				'number' => 6,
				'title' => 'O gamla klang och jubeltid',
				'author' => 'Ur "Alt Heidelberg - Rückblick eines alten Burschen"
Svensk text: August Lindh',
				'melody' => 'Noter finns i notkapitlet',
				'text' => 'O gamla klang och jubeltid
Ditt minne skall förbliva
Och än åt livets bistra strid
Ett rosigt skimmer giva
Snart tystnar allt vårt yra skämt
Vår sång blir stum, vårt skratt förstämt
O, jerum jerum jerum
O, quae mutatio rerum

Var äro de som kunde allt
Blott ej sin ära svika
Som voro folk av äkta halt
Och världens chefer lika
De drogo bort från vin och sång
Till vardagslivets tråk och tvång
O, jerum...

Den ene vetenskap och vett
In i scholares mängder   (filosofer) 
Den andre i sitt anlets svett
På paragrafer vränger   (jurister)
En plåstrar själen som är skral   (teologer)
En lappar hop dess trasiga fodral   (medicinare)
O, jerum...

Men hjärtat i en sann student
Kan ingen tid förfrysa
Den glädjen eld som där hen tänt
Hens hela liv skall lysa
Det gamla skalet brustit har
Men KÄRNAN finnes frisk dock kvar
Och vad hen än skall mista
Den skall dock aldrig brista

Så sluten fränder fast vår krets
Till glädjens värn och ära
Trots allt vi tryggt och väl tillfreds
Vår vänskap trohet svära
Lyft bägarn högt och klinga vän
De gamla gudar leva än
Bland skålar och pokaler
Bland skålar och pokaler',
			),
			62 => 
			array (
				'id' => 63,
				'chapter_id' => 2,
				'number' => 1,
				'title' => 'Porthos visa',
				'author' => 'Tore Norén
Bergsspexet 1960',
				'melody' => 'Athos visa
You can\'t get a man with a gun
Noter finns i notkapitlet',
				'text' => 'Jag vill börja gasqua, var fan är min flaska?
Vem i helvete stal min butelj?
Skall törsten mig tvinga, en TT börja svinga
Nej, för fan bara blunda och svälj
Vilken smörja, får jag spörja
Vem för f-n tror att jag är en älg?

Till England vi rider och sedan vad det lider
Träffar vi välan på någon pub
Och där skall vi festa, blott dricka av det bästa
Utav Whisky och portvin, jag tänker gå hårt in
För att prova på rubb och stubb',
			),
			63 => 
			array (
				'id' => 64,
				'chapter_id' => 2,
				'number' => 10,
				'title' => 'Mattevisan',
				'author' => 'Text: Jan-Ola Vensson, F',
				'melody' => 'Jag är en liten undulat',
				'text' => 'Jag är en liten teknolog
som har så helvetes svårt,
med all den matten,
med all den matten,
jag måste läsa 

Jag vill ha öl och billigt vin
Kan kalla mig fyllesvin
Ja, derivata och integraler
de kan ni glömma!',
			),
			64 => 
			array (
				'id' => 65,
				'chapter_id' => 2,
				'number' => 11,
				'title' => '37:an',
				'author' => 'Ur Lunds Fysikteknologers sångbok 1999',
				'melody' => '34:an',
				'text' => 'Jag har druckit många punschar,
blandat grogg i alla år
svept en herrans massa cognac
och vält 100 000 får - VA?!
Fått betongkeps utav rödvin,
haft likör som måltidsdryck
sabbat Chivas med en Cola, 
halsat folköl med en knyck

Men nu e\' det slut på halvmesyrer
nu ska blannevattnet bort,
här ska rationaliseras, proceduren göras kort.
Fina spriten flödar bäst i strupen utan fint manér,
så helt utan krusiduller går 37:an i magen ner!',
			),
			65 => 
			array (
				'id' => 66,
				'chapter_id' => 2,
				'number' => 2,
				'title' => 'Lyft ditt välförsedda glas',
				'author' => NULL,
				'melody' => 'Ding dong, merrily on high
Noter till blandad kör finns i notkapitlet',
				'text' => 'Lyft ditt välförsedda glas, 
det är en ljuvlig börda! 
Nu har polarna kalas, 
i morgon är det lördag! 
||: Dingedingedinge dingedingedinge 
Dingedingedinge ding dong dong 
Vi segern snart skall skörda :|| 

Sätt nu glaset till din mun, 
se döden på dig vänta! 
Nu har polarna kalas, 
hör liemannen flämta! 
||: Dingedingedinge dingedingedinge 
Dingedingedinge ding dong dong 
Begravningsklockor klämta :||',
			),
			66 => 
			array (
				'id' => 67,
				'chapter_id' => 2,
				'number' => 3,
				'title' => 'Härjavisan',
				'author' => 'Text: Hans Alfredsson
Lundaspexet Djingis Khan 1954',
				'melody' => 'Gärdebylåten',
				'text' => 'Hurra nu ska man äntligen få röra på benen,
hela stammen jublar och det spritter i grenen.
Tänk att än en gång få spränga fram på Brunte i galopp.

Din doft o kära Brunte är trots brist i hygienen
för en vild mongol minst lika ljuv som syrenen.
Tänk att på din rygg få rida runt i stan och spela topp! 

Ja, nu skall vi ut och härja
supa och slåss och svärja,
bränna röda stugor,
slå små barn och säga fula ord
Med blod ska vi stäppen färga
nu änteligen lär jag
kunna dra nån riktig nytta 
av min Hermodskurs i mord.

Ja, mordbränder är klämmiga, ta fram fotogenen
eftersläckningen tillhör just de fenomenen,
inom brandmansyrket som jag tycker det är nån nytta med.
Jag målar för mitt inre upp den härliga scenen
blodrött mitt i brandgult, ej ens prins Eugen, en
lika mustig vy kan måla, ens om han målade med sked.

Ja, nu skall vi ut och härja...

Liksom våra fäder, 
vikingarna i Norden
drar vi riket runt och super oss under borden.
Brännvinet har blivit ett elixir för kropp såväl som själ.
Känner du dig liten och är ynklig på jorden
växer du med supen och blir stor uti orden,
slår dig för ditt håriga bröst och blir så tuff från hår till häl. 

Ja, nu skall vi ut och härja...',
			),
			67 => 
			array (
				'id' => 68,
				'chapter_id' => 2,
				'number' => 4,
				'title' => 'Kalmarevisan',
				'author' => NULL,
				'melody' => 'F: Försångare
A: Alla
Sjungs lämpligen på småländska.',
				'text' => 'F: Uti Kalmare stad
ja där finns det ingen kvast
A: förrän lördagen!

F: Hej dick...
A: ...hej dack!
F: Jag slog i...
A: ...och vi drack!
F: Hej dickom dickom dack!
A: Hej dickom dickom dack!
För uti Kalmare stad, ja där finns det ingen kvast förrän lördagen![/REFR]

||:F: När som bonden kommer hem
A: kommer bondekvinnan ut :|| och är så stor i sin trut.

F: Hej dick...

||:F: Var är pengarna du fått?
A: Jo, dem har jag supit opp:|| uppå Kalmare slott

F: Hej dick...

||:F: Jag skall mäla dig an
A: för vår kronbefallningsman :||  och du skall få skam.

F: Hej dick...

||:F: Kronbefallningsmannen vår
A: satt på krogen i går:|| och var full som ett får.

F: Hej dick...',
			),
			68 => 
			array (
				'id' => 69,
				'chapter_id' => 2,
				'number' => 5,
				'title' => 'Jag skall festa',
				'author' => NULL,
				'melody' => 'Bamse-låten',
				'text' => 'Jag skall festa, ta det lugnt med spriten,
ha det roligt utan att va\' full.
Inte krypa runt med festeliten,
ta det sansat för min egen skull.

Först en öl i torra strupen,
efter det så kommer supen,
i med vinet, ned med punschen
sist en groggbuffé

Jag är skitfull, däckar först av alla,
missar festen, men vad gör väl de\'.
Blandar hejdlöst öl och gammal filmjölk,
kastar upp på bordspartnern bredve\'.

Först en öl i torra strupen...

Spyan rinner ner för ylleslipsen,
raviolin torkar i mitt hår.
Vem har lagt mig här i pissoaren,
vems är gaffeln i mitt högra lår?',
			),
			69 => 
			array (
				'id' => 70,
				'chapter_id' => 2,
				'number' => 6,
				'title' => 'Emils spritvisa',
				'author' => NULL,
				'melody' => 'Snickerboa',
				'text' => 'Till spritbutiken ränner jag 
och bankar på dess port. 
Jag vill ha nå\'t som bränner bra 
och gör mig skitfull fort. 
Expediten sa: "Godda\', 
hur gammal kan min herre va\'? 
Har du nå\'t leg, ditt jävla drägg? 
Kom hit igen när du fått skägg!" 

Men detta var ju inte bra 
jag vill bli full i kväll. 
Då plötsligt en idé fick jag: 
de har ju sprit på Shell! 
Många flaskor stod där på rad 
så nu kan jag bli skitfull och glad. 
Den röda vätskan rinner ner... 
Nu kan jag inte se nå\'t mer.',
			),
			70 => 
			array (
				'id' => 71,
				'chapter_id' => 2,
				'number' => 7,
				'title' => 'Hej på er vänner alla',
				'author' => NULL,
				'melody' => NULL,
				'text' => 'Hej på er vänner alla, 
ja vi ska supa tills dess vi falla, 
och brännvinslitern, den är för liten, 
den är för liten för oss alla! 

Och en gång när jag är döder 
och lagd mellan tvenne vänner 
Begrav mig, begrav mig 
i en brännvinskällare på Söder 

Och på min gravsten skall det stå ristat 
med tvenne små enkla rader: 
Här vilar det en fylletrogen, 
som alltid var så glad och goder. 
Här vilar det en fylletrogen, 
som alltid var så glad och goder.',
			),
			71 => 
			array (
				'id' => 72,
				'chapter_id' => 2,
				'number' => 8,
				'title' => 'Lille Olle',
				'author' => 'Text: Calle Isaksson, D-LiTH',
				'melody' => 'Katyuscha',
				'text' => 'Lille Olle skulle gå på disco, 
men hen hade inte någon sprit. 
Lille Olle skaffa\' lite hembränt, 
lille Olle gick då på en nit. 

La lalla la la la...

Lille Olle skulle börja festa, 
spriten blandade hen ut med Mer. 
Lille Olle drack upp hela bålen, 
lille Olle ser nu inte mer. 

La lalla la la la...

Lille Olle skaffade en ledhund, 
den var ful, men även ganska trind. 
Olles ledhund drack upp femton flaskor, 
Olles ledhund är nu också blind. 

La lalla la la la...

Lille Olle började med droger, 
blandade sin LSD med juice. 
Lille Olles hjärna står i lågor, 
lille Olle dog av överdos. 

La lalla la la la...

(Långsamt)
Lille Olle sitter nu i himlen, 
festa kan man göra även där. 
(Snabbt)
Lille Olle skaffade en ölback, 
capsar nu med Gud och Sankte Per. 

La lalla la la la...',
			),
			72 => 
			array (
				'id' => 73,
				'chapter_id' => 2,
				'number' => 9,
				'title' => 'Gaqueljäsen',
				'author' => 'Fysikalen Kristina 1982',
				'melody' => 'Marseljäsen/de Lisle',
				'text' => 'Vi dricker öl, vi dricker alkohol,
vi dricker mer än vad vi tål!
Det var kaos och dimmigt i Lützen,
men här är det värre ändå!
Här har bordet just börjat att gå,
och denna fest helt utan lik é
så här är det inte så dött.
Min lever har sitt öde mött!
Skålar gör vi för vårt svenska rike!
Vi super med kultur,
fast vi vet inte hur,

||: Drick ur, drick ur
tills det tar slut
1: Vi dricker med bravur! :||
2: Vi super med kultur!',
			),
			73 => 
			array (
				'id' => 74,
				'chapter_id' => 3,
				'number' => 1,
				'title' => 'Ölbytarvisan',
				'author' => NULL,
				'melody' => 'Kgl Södermanlands Regementes marsch',
				'text' => 'Här i Bayern skall ölet flöda fritt
Ingen skiljer här nå\'nsin mellan mitt och ditt
Bjud varandra så håller ni er kvitt
Saknar någon en öl
Får hen en utan men

Raj-raj...

Gillar du öl
Så ge din granne en öl
Tar hen din öl
Så får du nog hens öl
Båda har öl
Och ni har båda blivit bjudna
Så ni har det bra
Tills ni ser sejdelbottnarna! 

<author>
Fysikalen Wagner 1986',
			),
			74 => 
			array (
				'id' => 75,
				'chapter_id' => 3,
				'number' => 10,
				'title' => 'Ju mera öl vi dricker',
				'author' => NULL,
				'melody' => 'Ju mer vi är tillsammans',
				'text' => 'Ju mera öl vi dricker,
vi dricker, vi dricker,
ju mera öl vi dricker,
ju rundare vi bli.

För rundare är sundare
och sundare är rundare.
Ju mera öl vi dricker,
ju rundare vi bli.',
			),
			75 => 
			array (
				'id' => 76,
				'chapter_id' => 3,
				'number' => 11,
				'title' => 'Vi älskar öl',
				'author' => NULL,
				'melody' => 'Ser du stjärnan i det blå',
				'text' => 'Täckt av silver sejdeln full
gnistrar mot oss med sitt guld
humle, malt, är livets salt, vi älskar öl. 

Källarsval så bärs den in
för att glädja gommen din
släcka törsten, stärka rösten, till dess lov. 

Knubbig blir du, men so what
gott och roligt har du fått
extra turen, rensat njuren, öl är gott.',
			),
			76 => 
			array (
				'id' => 77,
				'chapter_id' => 3,
				'number' => 2,
				'title' => 'Strejk på Pripps',
				'author' => NULL,
				'melody' => 'I natt jag drömde',
				'text' => 'I natt jag drömde något som
jag aldrig drömt förut.
Jag drömde det var strejk på Pripps
och alla ölen var slut.

Jag drömde om en jättesal
där ölen stod på rad.
Jag drack så där en femton öl
och reste mig och sa:


"Man kan ha roligt utan sprit
Men det är dumt att chansa!"',
			),
			77 => 
			array (
				'id' => 78,
				'chapter_id' => 3,
				'number' => 3,
				'title' => 'Ode till ölet',
				'author' => NULL,
				'melody' => 'Trampa på gasen',
				'text' => 'Tu-tu-tu Tuborg
och ca-ca-ca Carlsberg
det är den bästa 
pi-pi-pi pilsnern som jag vet.

Tu-tu-tu Carlsberg
och ca-ca-ca Tuborg
det är det bästa
pi-pi-pi ölet som jag vet.

Tu-tu-tu Ölberg
och ca-ca-ca Pilsborg
det är den bästa 
pi-pi-pi biran som jag vet!

Tu-ca-pi Ölsner och 
pi-tu-ca bira
det är den mästa ca-pi-tu-lering som jag gjort.',
			),
			78 => 
			array (
				'id' => 79,
				'chapter_id' => 3,
				'number' => 4,
				'title' => 'Min pilsner',
				'author' => NULL,
				'melody' => 'My Bonnie',
				'text' => 'Min pilsner skall svalka min tunga. 
Min pilsner skall duscha min gom. 
Min pilsner skall få mig att sjunga, 
om jag ser att flaskan är tom: 

PILSNER! PILSNER! 
Hämta en pilsner till mig, till mig. 
PILSNER! PILSNER! 
Hämta en pilsner till mig!',
			),
			79 => 
			array (
				'id' => 80,
				'chapter_id' => 3,
				'number' => 5,
				'title' => 'Sanningen om ölet',
				'author' => NULL,
				'melody' => 'Här är gudagott att vara',
				'text' => 'Öl är gudagott att dricka. 
O, vad öldrycken dock är skön. 
Dricka öl med älskad flicka 
billigare än likören grön. 
Humlan surrar, flickan strålar 
nu går jag och slår en drill. 
Lättad, törstig, sedan jag skålar 
i gott öl min flicka till.',
			),
			80 => 
			array (
				'id' => 81,
				'chapter_id' => 3,
				'number' => 6,
				'title' => 'Ölvisan',
				'author' => NULL,
				'melody' => 'SJ, SJ, gamle vän',
				'text' => 'Dricka pilsner varje da\'
de e kul å de e bra
Ja, det borde alla ha,
pilsner varje da.

Öl det slinker ner så lätt
lättare än fläskkotlett
Å när en har slunkit ner
så måste man ha fler

Efter sex, sju flaskor till
blir det svårt att sitta still
Å vid cirka trettitvå
blir det svårt att gå

Öl de e ju faktiskt mat
öl på burk å öl på fat
Måste fyllas på i ett
för annars går det snett

Ingen har väl illa mått
utav öl som är så gott
Den som ändå detta gjort
har druckit det för fort

Så korka upp din öl å drick
så blir du en festlig prick
Korka upp å drick min vän
och rapa högljutt sen',
			),
			81 => 
			array (
				'id' => 82,
				'chapter_id' => 3,
				'number' => 7,
				'title' => 'En pilsnerdrickare',
				'author' => NULL,
				'melody' => 'En sockerbagare',
				'text' => 'En pilsnerdrickare här bor i staden
hen dricker pilsner mest hela dagen
hen dricker gröna, hen dricker blå,
hen dricker några med renat på
Och i hens fönster hänga tomma glasen,
och alla burkarna från kalasen
och är hen nykter så kan hen gå
nertill butiken och fylla på.',
			),
			82 => 
			array (
				'id' => 83,
				'chapter_id' => 3,
				'number' => 8,
				'title' => 'Öl, öl, öl i glas',
				'author' => NULL,
				'melody' => 'Row, row, row your boat',
				'text' => 'Öl, öl, öl i glas eller i butelj,
Skummande, skummande, skummande, skummande.
Ta en klunk och svälj.',
			),
			83 => 
			array (
				'id' => 84,
				'chapter_id' => 3,
				'number' => 9,
				'title' => 'Lapin Kulta',
				'author' => NULL,
				'melody' => 'Broder Jakob',
				'text' => 'Lapin Kulta, Lapin Kulta
Karjala, Karjala
Aura sekä Olvi, Aura sekä Olvi
Koff, Koff, Koff
Koff, Koff, Koff',
			),
			84 => 
			array (
				'id' => 85,
				'chapter_id' => 4,
				'number' => 1,
				'title' => 'Helan går',
				'author' => NULL,
				'melody' => NULL,
				'text' => 'Helan går,   
sjung hopp faderallan lallan lej!   
Helan går,   
sjung hopp faderallan lej! 

Och den som inte helan tar,   
hen heller inte halvan får.   
Helan går (supen intages)  
Sjung hopp faderallan lej!',
			),
			85 => 
			array (
				'id' => 86,
				'chapter_id' => 4,
				'number' => 10,
				'title' => 'Helan gick',
				'author' => NULL,
				'melody' => 'Amanda Lundbom',
				'text' => 'Helan gick i vänstra foten,   
bom-faderia, faderareralla.   
Gudskelov, så vet jag boten,   
bom-faderi, faderallanlej!   
Halvan ställer saken rätt,   
bom-faderi, faderallanlej   
Hugg i!   
På nubbar blir man aldrig mätt,   
bom-faderi, faderallanlej!',
			),
			86 => 
			array (
				'id' => 87,
				'chapter_id' => 4,
				'number' => 11,
				'title' => 'Helan rasat',
				'author' => NULL,
				'melody' => 'Längtan till landet',
				'text' => 'Helan rasat ned i våra magar,   
sQuvValpar nu på botten mol allen.   
I sin ensamhet den bittert klaga:   
"Det är svårt att bara vara en."   
Snart är halvan här, den härliga supen,   
alkoholiskt ren och silverklar,   
Dansar som en vårbäck ned genom strupen   
Hamnar --- plask! --- i helans budoir.',
			),
			87 => 
			array (
				'id' => 88,
				'chapter_id' => 4,
				'number' => 12,
				'title' => 'Nubbekantat',
				'author' => NULL,
				'melody' => 'Smedsvisa',
				'text' => 'Att höja en skål kan nog vara rätt   
men måttfullhet krävs för att ej halka snett.   
Av drycker är tersen särklassigt bäst   
som tömmes av vänner på fest.   
Så, blott några koppar är allt vi vill ha   
och bäska droppar måste det va\'.   
Men vägen till tersen är ganska lång   
så helan vi tar med en gång. 

Nu har vi väl sagt varandra gutår,   
lagt bort våra titlar så gott som det går,   
inlett med vår bordsvän konversation,   
då strupen vill ha solution.   
Så, blott några koppar är allt vi vill ha   
och bäska droppar måste det va\'.   
Ty talet gör halsen otroligt torr   
så halvan vi tar med en knorr. 

Om vi mot förmodan äter nån mat   
så bytes vårt lammkött mot pizza på fat.   
Den vådliga rätten får nog stå kvar   
istället vi tar oss en klar.   
Så, blott några koppar är allt vi vill ha   
och bäska droppar måste det va\'.   
Av maten så blir man tjocker och fet   
så tersen får bli vår diet. 
<author>Ur det 46:e Bergsspexet KrigEtt',
			),
			88 => 
			array (
				'id' => 89,
				'chapter_id' => 4,
				'number' => 13,
				'title' => 'Var Osquar',
				'author' => NULL,
			'melody' => 'Te deum (Eurovision-signaturen)',
				'text' => 'Var Osquar/Osqulda som går på vår sektion
av äldre kollegor lärt en tradition,
att noga se om sin kondition,
Och högra armen ge motion.',
			),
			89 => 
			array (
				'id' => 90,
				'chapter_id' => 4,
				'number' => 14,
				'title' => 'Små nubbarba',
				'author' => NULL,
				'melody' => 'Små grodorna',
				'text' => 'Små nubbarna, små nubbarna   
är äckliga att se,   
små nubbarna, små nubbarna   
är äckliga att se.

Nu tar vi dom, nu tar vi dom,   
så slipper vi dom se,   
nu tar vi dom, nu tar vi dom,   
så slipper vi dom se.',
			),
			90 => 
			array (
				'id' => 91,
				'chapter_id' => 4,
				'number' => 15,
			'title' => 'Planksaft (Längtan till baren)',
				'author' => NULL,
				'melody' => 'Längtan till landet',
				'text' => 'Törsten rasar uti våra strupar,   
tungan hänger torr och styv och stel.   
Men snart vankas stora långa supar,   
var och en får sin beskärda del.   
Snapsen kommer, den vi vilja tömma,   
denna nektar lik Olympens saft   
kommer oss att våra sorger glömma.   
Snapsen skänker hälsa, liv och kraft. 

Fordom odlade man vindruvsrankor   
av vars saft man bryggde ädelt vin,   
Nu man pressar saften ur en planka,   
doftande av äkta terpentin.   
Höj nu bägaren o broder, syster,   
låt den svenska skogen rinna kall,   
genom strupen och om du är dyster,   
låt oss dricka upp en liten tall.

Helan tänder helig eld i själen,   
halvan rosar livet som en sky,   
tersen känns från hjässan ned i hälen,   
kvarten gör en som en männska ny.   
Låt oss skåla med varandra go\' vänner   
skål för vår levnads glada hopp   
Törstens eld på nytt i strupen bränner.   
Leve livet skål och botten opp!',
			),
			91 => 
			array (
				'id' => 92,
				'chapter_id' => 4,
				'number' => 16,
				'title' => 'Brännvin hit',
				'author' => NULL,
				'melody' => 'Skära havre',
				'text' => 'Brännvin hit
och brännvin dit
och brännvin är det bästa
Och fan den
som brännvin har
och inte bju\'r sin nästa.',
			),
			92 => 
			array (
				'id' => 93,
				'chapter_id' => 4,
				'number' => 17,
				'title' => 'Gums visa',
				'author' => NULL,
				'melody' => 'Skära havre',
				'text' => 'Skål, kamrater,
livet är glatt,
och snart förgäta vi sorgen,
Vi söpo igår,
vi supa idag
och tar en sjujäkel i morgon!',
			),
			93 => 
			array (
				'id' => 94,
				'chapter_id' => 4,
				'number' => 18,
				'title' => 'Jäsa brännvin',
				'author' => 'Skeppssektionen, KTH',
				'melody' => 'Skära havre',
				'text' => 'Alla: Jäsa, jäsa brännvin,
vem skall brygden dricka?
Osqulda: Osqulda säger inte nej!
Alla:Vad säger Osquldas flicka?
Osqulda: Fy fan, fy fan,
Jag får så\'n jävla hicka!',
			),
			94 => 
			array (
				'id' => 95,
				'chapter_id' => 4,
				'number' => 19,
				'title' => 'Fkåne faft',
				'author' => NULL,
				'melody' => 'Helan går',
				'text' => 'Fkåne faft,
En fydfvenfk faft med fällfam kraft.
Fkåne faft,
Den bäfta faft vi haft.

Enf livfluft löfef, fläppef loff,
När fådan faft ferveraf off,
Fmakenf faft
Till landf, till luftf, till havf.',
			),
			95 => 
			array (
				'id' => 96,
				'chapter_id' => 4,
				'number' => 2,
				'title' => 'Hell and gore',
				'author' => NULL,
				'melody' => 'Helan går',
				'text' => 'Hell and Gore,   
Chung Hop father Allan, Allan ley!   
Hell and Gore,   
Chung Hop father Allan ley!

On handsome in the hell and tar   
Hell are in the half and four   
Hell and Gore!   
Chung Hop father Allan ley!',
			),
			96 => 
			array (
				'id' => 97,
				'chapter_id' => 4,
				'number' => 20,
				'title' => 'Mera Skåne',
				'author' => NULL,
				'melody' => 'Internationalen',
				'text' => 'Nu är det dags att taga supen; 
den stärker varje svag fysik. 
Den rinner ner igenom strupen, 
river gott som en tolvtumsspik. 

Den är vårt hopp mot gula faran, 
vår tröst vid varje beklagd sorg. 
Den stärker oss mot mask i magen, 
starkare än Svea borg! 

Mera Skåne i glasen, 
flera glas på vårt bord! 
Mera bord på kalasen, 
fler kalas på vår jord! 
Mera jordar kring månen, 
flera månar kring Mars! 
Mera marscher till Skåne! 
Mer Skåne gubevars, bevars, bevars!',
			),
			97 => 
			array (
				'id' => 98,
				'chapter_id' => 4,
				'number' => 21,
				'title' => 'Man cyklar för lite',
				'author' => 'Povel Ramel, 1964',
				'melody' => 'Väda vadmal',
				'text' => 'Man cyklar för lite\' 
Man röker för mycke\' 

och man är fasen så liberal  
när det det gäller maten och spriten 
Man borde slutat för länge sedan
men denna sup är för liten

Vad tjänar att hyckla 
Tids nog får man cykla

Man badar för lite\' 
Man röker för mycke\' 

och man är...

Det kan inte skada. 
Tids nog får man bada.

Man sover för lite\', 
man röker för mycke\'. 

och man är...

Njut var gudagåva! 
Tids nog får man sova.
Ja, det vill jag lova!',
			),
			98 => 
			array (
				'id' => 99,
				'chapter_id' => 4,
				'number' => 22,
				'title' => 'För att människan',
				'author' => NULL,
				'melody' => 'Bä, bä, vita lamm',
				'text' => 'För att människan 
skall trivas på vår jord 
bör hen ständigt ha 
på sitt smörgårsbord: 

en stor, stor sup åt far, 
en liten snaps åt mor, 
och två små droppar 
åt lille, lille bror.',
			),
			99 => 
			array (
				'id' => 100,
				'chapter_id' => 4,
				'number' => 23,
				'title' => 'Finsk snapsvisa',
				'author' => NULL,
				'melody' => 'Bör sjungas efter grundliga förberedelser, angivande av ett flertal tonarter med bibehållen taktkänsla.
Hiss-dur, Vivace molto fortissimo con spirito.',
			'text' => '(17 sekunders tystnad)
NU!!!',
			),
			100 => 
			array (
				'id' => 101,
				'chapter_id' => 4,
				'number' => 24,
				'title' => 'Finsk brännvinsvisa',
				'author' => NULL,
				'melody' => 'Ratataa ur Povel Ramels film "Ratataa"
(bör sjungas med finlänsk brytning. På "Ratataa" drar man i tofsen i mössan.)',
				'text' => 'Att dricka brännvin är en sed 
som ingen oss har lärt. 
Från början vi ej kunde 
men det var blott temporärt. 
Så lärde vi oss så småningom, 
och det var värt besvär\'t. 
Fililurum bom, tutigalen pang! 
Visst var det värt besvär\'t. 

Ratatataa, så tar vi oss en tuting. 
Ratatataa, med mycket brännvin i. 
Ratatataa, ratatataa! 
Dricka brännvin gillar jag, 
för jag blir så full och glad!',
			),
			101 => 
			array (
				'id' => 102,
				'chapter_id' => 4,
				'number' => 25,
				'title' => 'Sädesfälten',
				'author' => NULL,
				'melody' => 'Barndomshemmet',
				'text' => 'När som sädesfälten böja sig för vinden,
står en jäkel där och böjer dom tillbaks!',
			),
			102 => 
			array (
				'id' => 103,
				'chapter_id' => 4,
				'number' => 26,
				'title' => 'Räven',
				'author' => NULL,
				'melody' => NULL,
				'text' => 'Jag fångade en räv idag,
men räven slank ur näven,
men lika gla\' för det är ja\'
men gladast är nog räven. 

Åh hum, vår sång är dum
Den är ju ingenting
Vad gör det om hundra år
när allting kommer kring?

Jag gillar steppa runt i takt
men jag har tappat takten.
Jag har letat överallt,
var katten har jag lagt den? 

Åh hum, vår sång är dum...',
			),
			103 => 
			array (
				'id' => 104,
				'chapter_id' => 4,
				'number' => 27,
				'title' => 'Supen',
				'author' => NULL,
				'melody' => 'Räven',
				'text' => 'Jag fångade en sup idag 
men supen slank ur näven. 
Men lika gla\' för det är ja\' 
Men gladast är nog levern! 

Lala lalalala...

Jag fångade en PRezt idag 
men prästen damp i gatan, 
men lika gla\' för det är ja\' 
men gladast är nog Satan 

Lala lalalala...

Jag fångade en biff idag 
men den var seg som kola 
och lika seg som den är ja\'. 
Det är så kul att skåla!',
			),
			104 => 
			array (
				'id' => 105,
				'chapter_id' => 4,
				'number' => 28,
				'title' => 'Nu ska vi klämma septen',
				'author' => NULL,
				'melody' => 'Nu ska vi skörda linet',
				'text' => 'Nu skall vi klämma septen gutår, 
sjunga en trudelutt om det går. 
Tjosan Muhammed, nu är det vår, 
julafton är en fredag. 

Klunk-klunk-klunk, klunk-klunk-klunk, 
blanda och ge, blanda och ge, 
abra kadabra klunk, 
julafton är en fredag. 

(om och om igen, fortare och fortare)',
			),
			105 => 
			array (
				'id' => 106,
				'chapter_id' => 4,
				'number' => 29,
				'title' => 'Full och galen',
				'author' => NULL,
			'melody' => 'Kors på Idas grav (Imbelupet)',
				'text' => 'Full och galen med moralen minimal, 
ljuder nu signalen till vår bacchanal. 
Sensmoralen i lokalen 
är att tömma sin pokal 
så skandalen i finalen blir total.',
			),
			106 => 
			array (
				'id' => 107,
				'chapter_id' => 4,
				'number' => 3,
				'title' => 'Et langue d\'or',
				'author' => NULL,
				'melody' => 'Helan går',
				'text' => 'Et langue d\'or, joue haute fadeur a l\'an la langue laide!   
Et langue d\'or, joue haute fadeur a l\'an laide!   
Octane somme mine te et loitain,   
A ni te et leur halle vend fort.   
Et langue d\'or!   
Joue haute fadeur a l\'an laide!',
			),
			107 => 
			array (
				'id' => 108,
				'chapter_id' => 4,
				'number' => 30,
				'title' => 'Toj hemtegubbar',
				'author' => NULL,
				'melody' => 'Hej tomtegubbar',
				'text' => '||: Toj hemtegubbar gla i slåsen 
och låt oss vastiga lura! :||

En liten tid vi heva lär 
Med möcken hyda och svär bestor, 
Toj hemtegubbar gla i slåsen 
och låt oss vastiga lura.',
			),
			108 => 
			array (
				'id' => 109,
				'chapter_id' => 4,
				'number' => 31,
				'title' => 'Full är bäst',
				'author' => NULL,
				'melody' => 'Vi gå över daggstänkta berg',
				'text' => 'Vi som oss för att glupa satt 
supa glatt, 
ity den som försmår sin första tår 
törsta får. 
Av längtan vi tryckas, av trängtan att lyckas, 
vi nu med bravur häller ur,
eller hur? 

Vi ger tätt som titt strupen sitt, 
supen stritt 
skall forsa och snart får sig tarmen vår 
varm en tår. 
Er öven i seder, och söven sen ned er 
på denna protestbullerfest, 
full är bäst!',
			),
			109 => 
			array (
				'id' => 110,
				'chapter_id' => 4,
				'number' => 32,
				'title' => 'Morsgrisar små',
				'author' => NULL,
				'melody' => 'Morsgrisar är vi allihopa',
				'text' => 'Morsgrisar små ska inte supa 
för de stupa allihopa. 
Men vi vill ha brännvin fyllt med skupa 
i våra djupa strupa. 

Nu med,   (supen tas)
och nu med.   (tupen sas)
Nu med,   (schupen tasch)
och nu med.   (schnaps)',
			),
			110 => 
			array (
				'id' => 111,
				'chapter_id' => 4,
				'number' => 33,
				'title' => 'Livet är härligt',
				'author' => 'Chalmersspexet Katarina 1959
Denna sjunges först på alla Chalmerssittningar',
				'melody' => 'Röda kavalleriet
Sjunges först svagt, sedan starkt',
				'text' => '||: Livet är härligt!
Tavaritj, vårt liv är härligt!
Vi alla våra små bekymmer glömmer
när vi har fått en tår på tanden, skål!
Tag dig en vodka!
Tavaritj, en liten vodka!
Glasen i botten vi tillsammans tömmer! 

1: Det kommer mera efter ha-a-and. :||

2: Det kommer mera efter hand!',
			),
			111 => 
			array (
				'id' => 112,
				'chapter_id' => 4,
				'number' => 34,
				'title' => 'Vodka, vodka',
				'author' => NULL,
				'melody' => 'Stenka Razin',
				'text' => 'Vodka, vodka vill jag dricka, 
jag vill äta kaviar, 
||: jag vill älska russkij människa, 
jag vill spy i samovar :||

Vita möss som gå i taket, 
råma hest och falla ned, 
||: men ni skall inte var rädda, 
ta en sup och allt går väl :||

Uppå väggen går en gädda, 
med långa ludna, svarta ben, 
||:men ni skall inte var rädda, 
ta en sup och allt går väl :||


(Varianter på första versen)
Falu brännvin - falukorv - falu människa - Faluån 
Whisky - baked beans - Yankee människa - på mina jeans 
En kan också permutera "äta", "älska" och "spy i"',
			),
			112 => 
			array (
				'id' => 113,
				'chapter_id' => 4,
				'number' => 35,
				'title' => 'Så hastigt',
				'author' => NULL,
				'melody' => 'Flickan går i ringen',
				'text' => 'Så hastigt den lilla nubben i strupen försvann, 
Så hastigt den lilla nubben i strupen försvann. 
Håhå jaja, kommer rafflan idag, 
Håhå jaja, kommer rafflan idag?',
			),
			113 => 
			array (
				'id' => 114,
				'chapter_id' => 4,
				'number' => 36,
				'title' => 'Gräv ur tundran',
				'author' => 'Ekonomspexet Lenin 1989',
				'melody' => 'Katyuscha',
				'text' => 'Gräv ur tundran två dussin potäter 
låt dem jäsa uti fjorton dar. 
||: Modersmjölken för ryssar och sovjeter, 
brännes i babusjkans samovar :||

Kyl sen drycken i Sibiriens tjäle, 
tappa upp på immiga små glas. 
Höj sen glasen för fosterlandets välgång, 
sjung "Nastrovie" med en mäktig bas. 
Höj sen glasen för fosterlandets välgång, 
sjung "Nastrovie"... (supen intages) 
låt glasen gå i kras!',
			),
			114 => 
			array (
				'id' => 115,
				'chapter_id' => 4,
				'number' => 37,
				'title' => 'Hyllning till OP Andersson',
				'author' => NULL,
			'melody' => 'Lilie Marlene (Gul lyser solen)
(Inte "Vi äro musikanter")',
				'text' => 'Vi kan dricka Sädes 
och vi kan dricka Kron. 
Men allra mest vi glädes, 
åt OP Andersson.

När den gått ned uti vår strup, 
så ropas det på nästa sup: 
ur svenska hjärtans djup, 
ur svenska hjärtans djup.',
			),
			115 => 
			array (
				'id' => 116,
				'chapter_id' => 4,
				'number' => 38,
				'title' => 'Tänk om jag hade lilla nubben...',
				'author' => NULL,
				'melody' => 'Hej tomtegubbar',
				'text' => '||: Tänk om jag hade lilla nubben 
uppå ett snöre i halsen! :||

Och kunde dra den upp och ner 
så att den smaka\' som många fler! 
Tänk om jag hade lilla nubben 
uppå ett snöre i halsen',
			),
			116 => 
			array (
				'id' => 117,
				'chapter_id' => 4,
				'number' => 39,
				'title' => 'Krök armen',
				'author' => NULL,
				'melody' => 'Väva vadmal',
				'text' => 'Krök armen i vinken, 
här vankas det finkel. 
Och vanka finkel 
och finka vankel 
och kröka armen i finkel. 
Här vankas det vinkel.',
			),
			117 => 
			array (
				'id' => 118,
				'chapter_id' => 4,
				'number' => 4,
				'title' => 'Imbelupet',
				'author' => NULL,
				'melody' => 'Kors på Idas grav',
				'text' => 'Imbelupet glaset står på bräcklig fot.   
Svala pilsnerpavor luta sig därmot.   
Men därnere, miserere... 

...uti magens mörka djup   
sitter Djävulen och väntar på en sup. 

...uti magens dunkla valv   
sitter Djävulen och ropar på en halv. 

...uti magen kors och tvärs   
irrar Djävulen och skriker på en ters. 

...uti magens tom och svart   
sitter Djävulen och skränar på en kvart. 

...uti magens labyrint   
sitter Djävulen och tjoar på en kvint. 

...uti magens slingerväxt   
sitter Djävulen och skriar på en sext. 

...uti magen heluppknäppt   
sitter djävulen och vrålar på en sept. 

...uti magen varm och kvav   
sitter djävulen och väser på oktav.',
			),
			118 => 
			array (
				'id' => 119,
				'chapter_id' => 4,
				'number' => 40,
				'title' => 'Inre dialog',
				'author' => 'Text: Mikael Segersten, E-76',
				'melody' => 'An der schönen blauen Donaul
F: Försångare
A: Alla',
				'text' => 'F: Jag vill inte ha - A: en nubbe till!
F: Jag mår inte bra - A: en nubbe till!
F: Om ni ger mig mer - A: en nubbe till!
F: ser jag er som fler - A: en nubbe till!
F: Min mage är sjuk - A: en nubbe till!
F: Min hjärna är mjuk - A: en nubbe till!
A: Jag kan inte tänka så bra,
så jag får väl nubben ta - hurra!',
			),
			119 => 
			array (
				'id' => 120,
				'chapter_id' => 4,
				'number' => 41,
				'title' => 'Månvisa',
				'author' => NULL,
				'melody' => NULL,
				'text' => 'När månen vandrar sin tysta ban 
och tittar in genom rutan 
Då tänker jag att på ljusa dan 
då kan jag klara mig utan. 
Ja, jag kan klara mig utan måne, 
men utan renat och utan Skåne, 
det vete f-n, det vete f-n.',
			),
			120 => 
			array (
				'id' => 121,
				'chapter_id' => 4,
				'number' => 42,
				'title' => 'Måsen',
				'author' => NULL,
				'melody' => 'Månvisa',
				'text' => 'Det satt en mås på en klyvarbom, 
och torr i krävan var kräket. 
Och torkan brände i skepparns gom, 
när de låg där i bleket. 
"Jag vill ha sill" hördes måsen rope, 
Och skepparn svarte "Jag vill ha OP 
om blott jag får, om blott jag får" 

Nu lyfte måsen från klyvarbom 
och vinden spelar i tågen 
och O.P:n svalkade skepparns gom. 
Jag önskar blott att jag såg \'en. 
Så arm och nykter den arme kraken 
hen sätter storsegel den krabaten. 
Till sjöss hen far och halvan tar.',
			),
			121 => 
			array (
				'id' => 122,
				'chapter_id' => 4,
				'number' => 43,
				'title' => 'Den vingklippta måsen',
				'author' => NULL,
				'melody' => NULL,
				'text' => 'Det satt en mås på en klyvarbom
Jag vill ha OP!',
			),
			122 => 
			array (
				'id' => 123,
				'chapter_id' => 4,
				'number' => 44,
				'title' => 'JASen',
				'author' => 'Dadderiet 1993',
				'melody' => 'Månvisa',
				'text' => 'Det flög en JAS över Västerbron 
men styrsystemet var trasigt. 
Piloten sköt ut sig med kanon 
för planet svängde så knasigt. 
"Jag vill ju uppåt, jag vill ju mer"
men planet svarte: "Jag vill ju ner"
mot alla hjon på Västerbron.',
			),
			123 => 
			array (
				'id' => 124,
				'chapter_id' => 4,
				'number' => 45,
				'title' => 'När nubben blänker',
				'author' => NULL,
				'melody' => 'Månvisa',
				'text' => 'När nubben blänker i immigt glas 
som hoppets strålande stjärna, 
då är det avsett att det ska tas 
förutan fruktan och gärna. 
Så klang och klingom, så tar vi supen, 
den läskar härligt den torra strupen. 
Ja, skål gutår, ja, skål gutår!',
			),
			124 => 
			array (
				'id' => 125,
				'chapter_id' => 4,
				'number' => 46,
				'title' => 'Moose:en',
				'author' => NULL,
				'melody' => 'Månvisa',
				'text' => 'Det satt en älg i en klyvartopp
förklädd i älgjaktens månad
Befjädrad var han från tå till topp
skepparn blev rätt förvånad
"Jag är en mås, goa skepparn!", ljög den
förklädda älgen, därefter flög den
Mjukt föll den sen, på skepparen',
			),
			125 => 
			array (
				'id' => 126,
				'chapter_id' => 4,
				'number' => 47,
				'title' => 'När jag är fuller',
				'author' => 'Sångartäflan 1942',
				'melody' => 'Månvisa',
				'text' => 'När jag är fuller, då är jag glad, 
fan vet om jag ej är vacker. 
Då går jag runt i vår lilla stad, 
ibland lyxhus och baracker. 
Jag sjunger stilla en serenad, 
det gör jag bara när jag är glad, 
och full och vacker, och full och vacker. 

När jag är fuller då är jag stark, 
fan vet om jag ej är modig. 
Då kan jag slå vem som helst i mark, 
så hen blir trasig och blodig. 
Jag välter träden uti vår park, 
det gör jag bara när jag är stark, 
och full och modig, och full och modig. 

När jag är fuller då är jag rik, 
fan vet om jag ej är snille. 
Och dör jag blir jag ett vackert lik, 
begravd med gravöl och gille. 
I himlen möts jag av hornmusik, 
det gör man bara när man är rik, 
och är ett snille, och är ett snille.

Men om jag kvicknar till ett litet slag, 
i något enkelrum med galler. 
Då känner jag mig så rysligt svag, 
och avskyr bråk och kravaller. 
Min mage krånglar och är ur lag, 
och fan ska veta att jag idag 
är bakom galler, är bakom galler.',
			),
			126 => 
			array (
				'id' => 127,
				'chapter_id' => 4,
				'number' => 48,
				'title' => 'Mesen',
				'author' => NULL,
				'melody' => 'Månvisa',
				'text' => 'Det satt en mes i en klyvarmast
där sågs han ragla och svaja
för trot att frön var hans enda last
var han nu full som en kaja.
"Vad har du gjort!" hördes skepparn stöna
och mesen svarte: "Jag rökte fröna!
I egen holk, i egen holk"',
			),
			127 => 
			array (
				'id' => 128,
				'chapter_id' => 4,
				'number' => 49,
				'title' => 'Musen',
				'author' => NULL,
				'melody' => 'Månvisa',
				'text' => 'Det satt en mus i en hushållsost,
och åt och åt utan måtta.
Tills osten blivit en mushåls-ost,
och hen en klotformad råtta.
"Så bra", sa musen, "att va en fettboll,
nu kan jag rulla med hast åt rätt håll:
Ostindien! Ostindien!"',
			),
			128 => 
			array (
				'id' => 129,
				'chapter_id' => 4,
				'number' => 5,
				'title' => 'Vem sade ordet "skål"?',
				'author' => NULL,
				'melody' => 'Vårvindar friska',
				'text' => 'Vem sade ordet "skål" här vid bordet,  
viskande for det sällskapet kring.  
Fattom kristallen, nubben är kall den,  
stiger åt skallen, pling, plang, pling.  
Käraste vänner välkomna hit  
känn hur det bränner god akvavit.  
Nu lilla hutten går i kaputten  
skål lilla tutten, pling, plang, pling',
			),
			129 => 
			array (
				'id' => 130,
				'chapter_id' => 4,
				'number' => 50,
				'title' => 'Måsens sista sup',
				'author' => NULL,
				'melody' => 'Månvisa',
				'text' => 'Den mås som satt på en klyvarbom
den är nu död och begraven,
och skepparn som drack en flaska rom
hen har nu drunknat i haven
Så kan det gå om en fått för mycke\'
om en för brännvin har fattat tycke.
Vi som har kvar, vi resten tar.',
			),
			130 => 
			array (
				'id' => 131,
				'chapter_id' => 4,
				'number' => 51,
				'title' => 'Humlorna',
				'author' => NULL,
				'melody' => 'Karl Alfred boy',
				'text' => 'Vi äro små humlor vi, bzzz, bzzz. 
Vi äro små humlor vi, bzzz, bzzz. 
Vi äro små humlor som tar oss en geting 
Vi äro små humlor vi, bzzz, bzzz.',
			),
			131 => 
			array (
				'id' => 132,
				'chapter_id' => 4,
				'number' => 52,
				'title' => 'Fiskarna',
				'author' => NULL,
				'melody' => 'Karl Alfred boy',
				'text' => 'Vi äro små fiskar vi, blubb, blubb. 
Vi äro små fiskar vi, blubb, blubb. 
Vi äro små fiskar som tar oss en kallsup, 
Vi äro små fiskar vi, blubb blubb.',
			),
			132 => 
			array (
				'id' => 133,
				'chapter_id' => 4,
				'number' => 53,
				'title' => 'Änglarna',
				'author' => NULL,
				'melody' => 'Karl Alfred boy',
				'text' => 'Vi äro små änglar vi, flax, flax
Vi äro små änglar vi, flax, flax
Vi äro små änglar som tar oss en djävel
Vi äro små änglar vi, flax, flax',
			),
			133 => 
			array (
				'id' => 134,
				'chapter_id' => 4,
				'number' => 54,
				'title' => 'Brännvin är jävligt gott',
				'author' => NULL,
				'melody' => 'Karl Alfred boy',
			'text' => 'Ja, brännvin är jävligt gott. (bank, bank)
Ju bättre ju mer en fått. (bank, bank)
Det rinner längst halsen, en tappar balansen.
Ja, brännvin är jävligt gott! (bank, bank)

Ja, brännvin är jävligt gott. (bank, bank)
Ju bättre ju mer en fått. (bank, bank)
Men går en i golvet, så där framåt tolv-ett
Så slår en sig jävligt hårt (bank, bank)',
			),
			134 => 
			array (
				'id' => 135,
				'chapter_id' => 4,
				'number' => 55,
				'title' => 'En liten fyllhund',
				'author' => NULL,
				'melody' => 'Mors lilla Olle',
				'text' => 'En liten fyllhund på krogen satt. 
Rosor på kinden - men blicken var matt. 
Läpparna små liksom näsan var blå. 
Bara jag kunde så skulle jag gå.',
			),
			135 => 
			array (
				'id' => 136,
				'chapter_id' => 4,
				'number' => 56,
				'title' => 'Getingen',
				'author' => NULL,
				'melody' => 'Jazzgossen',
				'text' => 'Å så kommer det en geting, 
genom luften som ett reaplan. 
Å hen åker på en snyting, 
mitt under röda kran. 
Å hen trillar ner i magen, 
med ett jätte plask, 
jätte plask, jätteplask. 
Å så blir en lite dragen, 
men pigg och rask, 
pigg och rask, pigg och rask.',
			),
			136 => 
			array (
				'id' => 137,
				'chapter_id' => 4,
				'number' => 57,
				'title' => 'Kalla små nubbar',
				'author' => NULL,
				'melody' => 'Kalle på spången
F: Försångare
A: Alla',
				'text' => 'F: Vad är det som gör
att en skojare trivs?
A: Jo, kalla, kalla, kalla, kalla
små nubbar.
F: Vad är det som först 
uppå festen väl givs? 
A: Jo, kalla, kalla, kalla, kalla 
små nubbar.
F: Dom skänker oss alla 
ett solljust humör, 
och även för kroppen 
stor nytta dom gör. 
Men skall en ta nubbar 
som regel dom bör 
Va\' kalla 
A: Mycket kalla
F: Ja, kalla 
A: Mycket kalla
Ja, kalla, kalla, kalla, kalla 
små nubbar.',
			),
			137 => 
			array (
				'id' => 138,
				'chapter_id' => 4,
				'number' => 58,
				'title' => 'Mod i Barm',
				'author' => NULL,
				'melody' => 'Kungssången',
				'text' => 'Ur svenska hjärtans djup en sup, 
en samfälld och en enkel sup 
som ger oss mod i barm. 
I prima äktsvensk alkohol 
för svenska folkets höga mål 
vi höjer nu vår första skål, 
vi ungdoms främsta vän',
			),
			138 => 
			array (
				'id' => 139,
				'chapter_id' => 4,
				'number' => 59,
				'title' => 'Oh Besinna',
				'author' => NULL,
				'melody' => 'Oh, Susanna',
				'text' => 'Smuttans ungar har just runnit ner 
uti magens boudoir. 
Kommer inte genast något mer, 
Höres magens kommentar. 
Oh besinna, den saken är ju klar, 
både tarmvred, magsår och kolik 
dunstar bort med lite sprit.',
			),
			139 => 
			array (
				'id' => 140,
				'chapter_id' => 4,
				'number' => 6,
				'title' => 'Ubåten',
				'author' => NULL,
				'melody' => 'Jazzgossen',
				'text' => 'Å så kommer det en ångbåt,   
och den säger "Tut-tut-tut!"   
Å så kommer det en ubåt,   
och den säger   

(Gurgla nubben)',
			),
			140 => 
			array (
				'id' => 141,
				'chapter_id' => 4,
				'number' => 60,
				'title' => 'Mera järn',
				'author' => NULL,
				'melody' => 'Milord',
				'text' => 'Vi vill ha mera järn, 
vi vill ha flera järn, 
ett litet rostfritt, oböjt, 
destillerat järn! 
Och vi ska böja järn, 
och vi ska kröka järn 
så att vi har det 
flytande i morgon kväll',
			),
			141 => 
			array (
				'id' => 142,
				'chapter_id' => 4,
				'number' => 61,
				'title' => 'Vem kan kröka',
				'author' => NULL,
				'melody' => 'Vem kan segla',
				'text' => 'Vem kan kröka förutan krök? 
Vem kan gå utan vingel? 
Vem kan skala en stor gul lök 
Utan att fälla tårar?',
			),
			142 => 
			array (
				'id' => 143,
				'chapter_id' => 4,
				'number' => 62,
				'title' => 'Vem kan hugga',
				'author' => NULL,
				'melody' => 'Vem kan segla',
				'text' => 'Vem kan hugga sig själv i knät? 
Vem kan slå sig på tummen? 
Vem kan skära i vännen sin, 
utan att dra på munnen? 

Jag kan hugga mig själv i knät,
Jag kan slå mig på tummen, 
Men ej skära i vännen min, 
utan att dra på munnen. 

Vem kan ragla förutan vin? 
Vem är nykter om våren? 
Vem kan skilja på kron och gin, 
utan att smaka på\'ren? 

Jag kan ragla förutan vin, 
Och visst var jag nykter om våren, 
men ej skilja på kron och gin, 
efter den elfte tåren.',
			),
			143 => 
			array (
				'id' => 144,
				'chapter_id' => 4,
				'number' => 63,
				'title' => 'Var redo!',
				'author' => NULL,
				'melody' => 'Ur vägen',
				'text' => '||: Var redo, var redo, 
För nu skall supen tas :||
Den gör gott åt kroppen ock åt själen, 
känns ifrån hjässan långt ned i hälen. 
Kling, klang, kling, klang, 
nu börjar vårt kalas.',
			),
			144 => 
			array (
				'id' => 145,
				'chapter_id' => 4,
				'number' => 64,
				'title' => 'Till supen så tager man sill',
				'author' => NULL,
				'melody' => 'Daggstänkta berg',
				'text' => 'Till supen så tager en sill, sill, sill,
men också ansjovis om en vill, vill, vill.
||: Och om en är oviss om sillen är ansjovis,
så tar en bara några supar till, till, till. :||',
			),
			145 => 
			array (
				'id' => 146,
				'chapter_id' => 4,
				'number' => 65,
				'title' => 'Vi går över ån',
				'author' => NULL,
				'melody' => 'Daggstänkta berg',
				'text' => 'Vi går över ån efter sprit fallera,
men efter vatten går vi ej en bit, fallera
Ja sup kära vänner 
fast näsan den ränner,
en gång så blir den ack va vit, fallera',
			),
			146 => 
			array (
				'id' => 147,
				'chapter_id' => 4,
				'number' => 66,
				'title' => 'Sänkta Lucia',
				'author' => NULL,
				'melody' => 'Sankta Lucia',
				'text' => 'Huvet slåt kopparslag, ögonen svider,
i magen obehag, natten den lider.
Då genom strupen går
hembränt en liten tår.
Vördat vare vårat brännvin,
vördat vårt brännvin.',
			),
			147 => 
			array (
				'id' => 148,
				'chapter_id' => 4,
				'number' => 67,
				'title' => 'Lundströms kök',
				'author' => NULL,
				'melody' => 'Ska det verkligen behövas någon melodi?',
				'text' => 'Trrrrrretton studenter i Lundströms kök, 
i Lundströms kök, i Lundströms kök. 
Alla var de fulla utom en som söp, 
en som söp sig full, skål!',
			),
			148 => 
			array (
				'id' => 149,
				'chapter_id' => 4,
				'number' => 68,
				'title' => 'Solen',
				'author' => NULL,
				'melody' => 'Camptown Ladies',
				'text' => 'Solen den går upp och ner, doda, doda! 
Jag ska aldrig supa mer, hej doda dej! 
Hej doda dej, hej doda dej! 
Jag ska aldrig supa mer, hej doda dej! 

Men detta var ju inte sant, doda, doda! 
I morgon gör jag likadant, hej doda dej!',
			),
			149 => 
			array (
				'id' => 150,
				'chapter_id' => 4,
				'number' => 69,
				'title' => 'Korta solen',
				'author' => NULL,
				'melody' => NULL,
				'text' => 'Solen den går upp och ner, snapsen den går ner!',
			),
			150 => 
			array (
				'id' => 151,
				'chapter_id' => 4,
				'number' => 7,
				'title' => 'När helan man tagit',
				'author' => NULL,
				'melody' => 'Skånska slott och härresäten',
				'text' => 'När helan man tagit   
och halvan ska dricka,   
Det är som att kyssa   
en nymornad flicka/pojke. 

Ju mera man får,   
desto mer vill man ha,   
En ensammer jävel   
gör alls ingen gla\'.',
			),
			151 => 
			array (
				'id' => 152,
				'chapter_id' => 4,
				'number' => 70,
				'title' => 'Old Janx Spirit',
				'author' => 'Gruvarbetarsång från Orion',
				'melody' => 'When Johnny Comes Marching Home',
				'text' => 'Oh don\'t give me none more of that 
Old Janx Spirit! 
No, don\'t you give me none more of that 
Old Janx Spirit! 
For my head will fly, 
my tongue will lie 
my eyes will fry 
and I may die. 
Won\'t you pour me one more 
of that sinful Old Janx Spirit.',
			),
			152 => 
			array (
				'id' => 153,
				'chapter_id' => 4,
				'number' => 71,
				'title' => 'Självmördarvisan',
				'author' => NULL,
				'melody' => 'Hej tomtegubbar',
				'text' => 'Hej, tomtegubbar, vrid på gasen 
och ta er själva av daga. 
Rödsprit vi hällt i alla glasen 
och fjäriln vinglar på Haga. 
Av akvavit man får kolik 
och alla tomtar skola-sto-lik. 
Hej, tomtegubbar, vrid på gasen 
och ta er själva av daga.',
			),
			153 => 
			array (
				'id' => 154,
				'chapter_id' => 4,
				'number' => 72,
				'title' => 'Hörapparaten',
				'author' => NULL,
				'melody' => 'Jenka',
				'text' => 'Brännvin, öl, och gammal finkel 
gör att jag jag nu ser i vinkel. 
Därför hamnar inte supen (alt. maten) 
uti strupen utan i min hörapparat.',
			),
			154 => 
			array (
				'id' => 155,
				'chapter_id' => 4,
				'number' => 73,
				'title' => 'Göken',
				'author' => NULL,
				'melody' => 'Räven raskar över isen',
				'text' => 'Ett bord: Och nubben kallas också göken. 
Och nubben kallas också göken. 
Säg, får jag lov, säg, får jag lov, 
att byta byxor i Kröken? 

Ett annat bord: Nej, det går inte alls, mitt herrskap,  
det går inte alls, mitt herrskap. 
För se ni har, för se ni har, ju 
inga byxor dessvärre.',
			),
			155 => 
			array (
				'id' => 156,
				'chapter_id' => 4,
				'number' => 74,
				'title' => 'Magen brummar',
				'author' => NULL,
				'melody' => 'Broder Jakob
Kanon',
				'text' => 'Magen brummar. 
Jag försummar 
hälla dit 
mera sprit. 
Nu så ska vi dricka, 
så att vi får hicka. 
Mera sprit. 
Akvavit.',
			),
			156 => 
			array (
				'id' => 157,
				'chapter_id' => 4,
				'number' => 75,
				'title' => 'Gammalt brännvin',
				'author' => NULL,
				'melody' => 'Gubben Noak',
				'text' => 'Gammalt brännvin, 
Gammalt brännvin 
finnes i vårt krus. 
Slån i glaset gubbar, 
många stora nubbar 
Gån till verket, 
gån till verket! 
Tag ett stadigt rus! 

Gammalt brännvin, 
gammalt brännvin 
flödar i vår kropp. 
Genom torra strupar 
rinna starka supar. 
Ge åt kroppen, 
ge åt själen 
kraft och frejdigt hopp!',
			),
			157 => 
			array (
				'id' => 158,
				'chapter_id' => 4,
				'number' => 76,
			'title' => 'Månen (En gång i månan)',
				'author' => NULL,
				'melody' => 'Mors lilla Olle',
				'text' => 'En gång i månan är månen full, 
men aldrig jag sett henom ramla omkull. 
Stum av beundran hur mycket hen tål, 
höja vi glasen och dricka hens skål.',
			),
			158 => 
			array (
				'id' => 159,
				'chapter_id' => 4,
				'number' => 77,
				'title' => 'Raj-Raj',
				'author' => NULL,
				'melody' => 'Kväsarvalsen',
				'text' => 'Ingen har det så bra som jag, 
nej, ingen har det så bra som jag, 
förutom min bror som, så vitt jag vet, 
ligger i sprit uppå Riksmuseet. 

Raj-raj-raj...',
			),
			159 => 
			array (
				'id' => 160,
				'chapter_id' => 4,
				'number' => 78,
				'title' => 'Tjugotre',
				'author' => 'Carl Nisser, E-80',
				'melody' => 'Amanda Lundbom',
				'text' => 'Tjugotre är Bäska Droppar, 
bom-faderia, bomfaderaderalla. 
skänker liv åt döda kroppar, 
bom-faderi, faderallanlej. 

Slå en sup i död väns kropp, 
bom-faderi, faderallanlej. Hugg i! 
så stapplar hen ur graven opp, 
bom-faderi faderallanlej. 

Jesus visste att de döda, 
bom-faderia, bomfaderaderalla, 
kunde väckas utan möda, 
bom-faderi faderallanlej. 

Bäska Droppar nyttja\' han, 
Bom-faderi, faderallanlej, Hugg i! 
och Lazarus spratt till, minsann, 
bom-faderi faderallanlej.',
			),
			160 => 
			array (
				'id' => 161,
				'chapter_id' => 4,
				'number' => 79,
				'title' => 'Vikingen',
				'author' => 'Sångarstriden 1981',
				'melody' => 'When Johnny Comes Marching Home',
				'text' => 'En viking älskar livets vand, 
hurra, hurra! 
Det hastigt i hens svalg försvann, 
hurra, hurra! 
Till kalv, till oxe, till fisk, till fläsk, 
när alla veklingar dricker läsk. 
Ja, då vill alla vikingar ha en bäsk. 

När bäsken småningom är slut, 
tragik, tragik! 
Då bärs varenda viking ut 
som lik, sig lik. 
Och sen när vi vaknar, vi sjunger en bit, 
och korkar upp skånes akvavit. 
Skål för alla vikingar som kom hit.',
			),
			161 => 
			array (
				'id' => 162,
				'chapter_id' => 4,
				'number' => 8,
				'title' => 'Halvan',
				'author' => NULL,
				'melody' => 'Pojkarne
Noter finns i notkapitlet',
				'text' => 'Hur länge skall på borden   
den lilla halvan stå?   
Skall snart ej höras orden:   
Nu halvan går, låt gå!

Det ärvda vikingsinne   
till supen trår igen,   
och helans trogna minne   
i halvan går igen.',
			),
			162 => 
			array (
				'id' => 163,
				'chapter_id' => 4,
				'number' => 80,
				'title' => 'Uti min mage',
				'author' => NULL,
				'melody' => 'Uti vår hage',
				'text' => 'Uti min mage en längtan mig tär. 
Kom hjärtans fröjd. 
Där råder en hunger som ropar så här: 
Kom kryddsill och kall potatis. 
Kom brännvin och quantum satis. 
Kom allt som kan drickas, kom hjärtans fröjd. 

Uti mitt hjärta en längtan mig tär. 
Kom hjärtans fröjd. 
Där råder en hunger som ropar så här: 
Kom famnande lena armar. 
Kom läppar och sköna barmar. 
Kom fagraste människor. 
Kom hjärtans fröjd. 

Uti vår mage där växa begär. 
Kom hjärtans kär. 
Vill du mig något så träffas vi där. 
Kom Renat och Aqua Vitae, 
Kom OP och allt vad sprit e\', 
Kom ljuva Genever, 
Kom Överste.',
			),
			163 => 
			array (
				'id' => 164,
				'chapter_id' => 4,
				'number' => 81,
				'title' => 'Då verka lätt',
				'author' => NULL,
				'melody' => 'Dover Calais',
				'text' => 'När jag tar mig en sup 
blir jag intressant och djup. 
Allting som är svårt 
kan dä verka lätt. 

All min rädsla går bort 
med en grogg av någon sort. 
Allting som är svårt 
kan då verka lätt!',
			),
			164 => 
			array (
				'id' => 165,
				'chapter_id' => 4,
				'number' => 9,
				'title' => 'Angorakatten',
				'author' => NULL,
				'melody' => 'Vi går över daggstänkta berg',
				'text' => 'Det var en gång en vanlig bonnakatt, fallera,   
som älskade en hel-angorakatt, fallera!   
Och följden blev en jamare,   
men den blev mycket tamare,   
för den var blott en halv-an-gor-akatt, fallera.',
			),
			165 => 
			array (
				'id' => 166,
				'chapter_id' => 5,
				'number' => 1,
				'title' => 'Vinets lov',
				'author' => NULL,
				'melody' => 'Fjäriln vingad',
				'text' => 'När det strålar uti salen
Utav glädje glans och färg
När det gnistrar uti pokalen
Utav ädla druvors märg

Kära vänner varför dröja
Med att dricka glädjen till
Låt oss bortom framtids slöja
Se allt skönt vi skåda vill.

Drick för allt som livet skänker,
Glädjestunder, ljus och sol
Drick för stjärnorna som blänker
Över oss från pol till pol!

Drick för våren, väl Du kan det.
Drick för värmen våren ger.
Drick för starka vänskapsbanden.
Drick för allt vad skönt Du ser.',
			),
			166 => 
			array (
				'id' => 167,
				'chapter_id' => 5,
				'number' => 10,
				'title' => 'Portvinsvisa',
				'author' => 'Bosse Österberg',
				'melody' => 'Polly Wolly Doodle',
				'text' => 'Jag var ung konduktör
jag var lång som en stör
men så la jag mig där som tågena kör

Så nu mer är jag kort,
jag har bena bort
och jag dricker bara Invalid Port.',
			),
			167 => 
			array (
				'id' => 168,
				'chapter_id' => 5,
				'number' => 11,
				'title' => 'Röda vinet',
				'author' => NULL,
				'melody' => 'Gubben Noak',
				'text' => 'Röda vinet, röda vinet,
uti glsen står.
Bäst vi börjar smaka,
ifall det tas tillbaka.
Fatta glasen, djupt i basen,
utbringar vi SKÅL!

Mera, mera, vin servera,
när vi druckit ur.
Bara vi nu tål\'et,
se upp för alkoholet.
Tag nu skvätten, i falsetten,
om igen en SKÅL!',
			),
			168 => 
			array (
				'id' => 169,
				'chapter_id' => 5,
				'number' => 12,
				'title' => 'Vinet väntar',
				'author' => NULL,
				'melody' => 'Gubben Noak',
				'text' => 'Vinet väntar, vinet väntar,
på att drucket bli.
Det är smått förläget,
känner ej till vägen.
Sträck fram handen, fukta tanden.
Så går vinet ner.',
			),
			169 => 
			array (
				'id' => 170,
				'chapter_id' => 5,
				'number' => 2,
				'title' => 'Feta fransyskor',
				'author' => 'K-LTH, Sångarstriden 1985',
			'melody' => 'Marche Militaire (Tomatarnas vaktparad)',
				'text' => 'Feta fransyskor 
som svettas om fötterna
de trampar druvor 
som sedan skall jäsas till vin!
Transpirationen viktig e\', 
ty den ger fin bouquet,
Vårtor och svampar följer med, 
men vad gör väl det?
För
vi vill ha vin, vill ha vin, 
vill ha mera vin,
även om följderna bli
att vi må lida pin!

Damer: Flaskan och glasen har gått i sin!
Herrar: Hit med vin, mera vin!
Damer: Tror ni att vi är fyllesvin?
Herrar: JA, fast större!',
			),
			170 => 
			array (
				'id' => 171,
				'chapter_id' => 5,
				'number' => 3,
			'title' => 'Vinvisa (Har ni sett på attan)',
				'author' => NULL,
				'melody' => 'Amanda Lundbom',
				'text' => 'Har ni sett på attan gubbar.
Bomfaderi och bomfaderalla
Här serveras inga nubbar
Bomfaderi faderallanlej
Vi som väntat brännevin
Bom faderi faderallanlej,
Uj-uj
Men glasen fylls med vanligt vin
Bom faderi faderallanlej.

Men det kanske går att dricka
Bomfaderi och bomfaderalla
Och ej giver någon hicka
Bomfaderi faderallanlej

Alla säkert drycken tål
Bom faderi faderallanlej,
Hugg i
Så dricka vi nu allas skål
Bom faderi faderallanlej.',
			),
			171 => 
			array (
				'id' => 172,
				'chapter_id' => 5,
				'number' => 4,
				'title' => 'Vinet skänker',
				'author' => NULL,
				'melody' => 'Längtan till landet',
				'text' => 'Goda vänner, låt oss fatta glaset,
Stämma upp en ljuvlig hyllningssång
Frid och fröjd ska råda på kalaset,
Glädjen vara hela kvällen lång.

Må det glada skämtet alltid trivas
Här i detta sällskaps glada lag
Låtom oss av druvans safter livas -
Spara vatten till en annan dag!

Vinet skänker helig eld i själen
Vinet rosar som en sky.
Vinet lossar varje band på trälen
Vinet gör en mänska ny.

Nu skall vi skåla alla go vänner
Tippe tippe topp, tipp topp, tippe topp.
Törsten uti våra strupar bränner,
Höj ditt glas, ja - skål och botten upp.',
			),
			172 => 
			array (
				'id' => 173,
				'chapter_id' => 5,
				'number' => 5,
				'title' => 'Du gamla vin',
				'author' => NULL,
				'melody' => 'Du gamla du fria',
				'text' => 'Du gamla, du fina, du årgågna vin
som plockats och trampats bland bergen
Jag dyrkar aromen och smaken så fin,
men ljuvast utav  av är ändå färgen
Den drycken den går ända in i märgen.

Nu fyller vi glasen och höjer vår arm
för lycka och vänskapsband vi skåla.
Ja vinet det har en förunderlig charm
är nästan lika gott som rom och cola
så låt oss därför med varandra skåla.',
			),
			173 => 
			array (
				'id' => 174,
				'chapter_id' => 5,
				'number' => 6,
				'title' => 'Elysisk längtan',
				'author' => NULL,
			'melody' => 'An die Freude (Beethovens 10:e symfoni)',
				'text' => 'Aftonrodnan svalka sprider
Skymningen sig sänker fin
Och likt dimridåer sprider
Doften av det rena vin

||: Låt det hjälpa mig till att segla
Rakt in i rusets röda tröst
Natten flyrr på gryningsvingar
Värmen flammar i mitt bröst :||
HEJ!!!',
			),
			174 => 
			array (
				'id' => 175,
				'chapter_id' => 5,
				'number' => 7,
				'title' => 'Bordeaux, Bordeaux',
				'author' => NULL,
				'melody' => 'I sommarens soliga dagar',
				'text' => 'Jag minns än i dag hur min fader
kom hem ifrån staden så glader
och rada\' upp flaskor på rader
och sade nöjt som så:
Bordeaux, Bordeaux!

Han drack ett glas, kom i extas
och sedan blev det stort kalas.
Och vi små glin, ja vi drack vin
som första klassens fyllesvin.
Och vi dansade runt på bordet,
och sjöng så vi blev blå:
Bordeaux, Bordeaux!',
			),
			175 => 
			array (
				'id' => 176,
				'chapter_id' => 5,
				'number' => 8,
				'title' => 'Spegelvisa',
				'author' => NULL,
				'melody' => 'Så länge skutan',
				'text' => 'Så länge rösten är mild
så länge ingen är vild
så länge spegeln på väggen
ger halvskaplig bild.
Så länge alla kan stå
så länge alla kan gå
så länge alla kan tralla
så fyller vi på.

Vem har sagt att just du kom med storken
för att bli glad av att lukta på korken.
Men bland fysikbokens fans
vi höjer bägarn med glans
och låter vinet gå ner i en yrande dans.',
			),
			176 => 
			array (
				'id' => 177,
				'chapter_id' => 5,
				'number' => 9,
				'title' => 'Röd vitamin',
				'author' => NULL,
				'melody' => 'My Bonnie',
				'text' => 'Hur badar en bäst på en kurort?
Jo, om en har fyllt en bassäng,
med vätskan som snart skall besjungas
när vi kommit till en refräng;

Rödvin, rödvin.
Rödvin är fin hälsokost, kost, kost.
Rödvin, rödvin.
Rödvin vår bästa flaskpost.

En får vitaminer från rödvin.
En piggnar ju till med en gång,
när glaset har tömts uti botten
så stämmer vi upp till en sång.

Rödvin, rödvin...',
			),
			177 => 
			array (
				'id' => 178,
				'chapter_id' => 6,
				'number' => 1,
				'title' => 'Punschen kommer',
				'author' => NULL,
				'melody' => 'Glada änkan
(Sjungs medan punschen serveras, under det att man gungar vänster-höger, framåt-bakåt och uppåt-nedåt
Den som fått sin punsch slutar sjunga)',
				'text' => 'Punschen kommer, punschen kommer,
ljuv och sval.
Glasen imma, röster stimma,
i vår sal.
Skål för glada minnen,
skål för varje vår!
Inga sorger finnas mer
när punsch vi får.',
			),
			178 => 
			array (
				'id' => 179,
				'chapter_id' => 6,
				'number' => 10,
				'title' => 'Studiemedelsrondo',
				'author' => NULL,
				'melody' => 'Lossa sand
(Upprepas, allt snabbare)',
				'text' => 'Vi dricker punsch till lunch
när vi har fått avin
Vi lunchar hela dagen
tills kassan gått i sin.',
			),
			179 => 
			array (
				'id' => 180,
				'chapter_id' => 6,
				'number' => 11,
				'title' => 'FESTU:s punschvisa',
				'author' => NULL,
				'melody' => 'Tomtarnas julnatt',
				'text' => 'Punschen, punschen,
rinner genom strupen, 
ner i djupen.
Blandas, konfronteras
där med supen,
där med supen.
Gula droppar
stärker våra kroppar!
Punsch, punsch, punsch!',
			),
			180 => 
			array (
				'id' => 181,
				'chapter_id' => 6,
				'number' => 12,
				'title' => 'Visa en torsdagskväll',
				'author' => NULL,
				'melody' => 'Visa vid midsommartid',
				'text' => 'Du häller ur flaskan en gyllene tår
av punsch ifrån Cederlunds.
Du lyfter sen bägarn och väl du förstår
att föra den till din mun.
Ikväll ska du dricka ditt livselixir
och känna den ljuva punschen
som ett vårbjörkeskir.
I natt ska du bäras av Osquar på bår
och kallas för fyllefår.',
			),
			181 => 
			array (
				'id' => 182,
				'chapter_id' => 6,
				'number' => 13,
				'title' => 'Sveriges Arraktionalhymn',
				'author' => 'Ekonomspexet Erik XIV, 1992',
				'melody' => 'Du gamla, Du fria',
				'text' => 'Du ädla, du friska, du livselixir,
med dig vill jag mina läppar blöta.
Den svenskaste drycken på jorden, den förblir
den gyllene, den underbara söta,
den gyllene, den underbara söta.

Som iskallt till kaffet du ställs på vårt bord
och även som varm till torsdagslunchen.
Jag halsar dig lenaste drycken uppå jord.
Ja, jag vill leva, jag vill dö av punschen.
Ja, jag vill leva, jag vill dö av punschen.',
			),
			182 => 
			array (
				'id' => 183,
				'chapter_id' => 6,
				'number' => 14,
				'title' => 'Punschfinalen',
				'author' => 'Bergsspexet Lord Nelson 1975',
				'melody' => 'Rysslands nationalsång',
				'text' => 'Ikväll har Napoleon gjort England den äran
att komma på middag till dess ambassad.
Men nu har ni sett till allas förfäran
att blott tomma flaskor står på parad.

Så går vi ner, ner till stadens hamnkvarter
och vid kajen Victory vi ser.
Vi går ombord och där väntar ett Nachspiel på oss.
Vi går till bords både fiende och vän
och våra gräl dom sparar vi till sen.
Vi tar en matbit, en sup, nej flera förtås.

Idag har lord Nelson krökat i Neapel.
Han raglar omkring med armen i en slips.
Men snart står han uppsträckt i London på en stapel,
vi undrar om någon i groggen har lagt gips.

Så går vi ner...',
			),
			183 => 
			array (
				'id' => 184,
				'chapter_id' => 6,
				'number' => 15,
				'title' => 'Sista punschvisan',
				'author' => NULL,
				'melody' => 'Auld lang syne',
				'text' => 'När punschen småningom ta\'t slut
och vår flaska blivit tom.
Då vänder vi den upp och ner
till dess inget rinner ut.

||: Så slicka vi, så slicka vi,
båd\' utanpå och i.
Och finns det ändå något kvar
får det va\' till sämre dar. :||




Andra versen brukar sjungas två gånger på fina sittningar. På mer uppsluppna fester sjunger en andra versen
sittande
stående
med en fot på stolen
med båda fötter på stolen
med en fot på bordet
och till sist under bordet',
			),
			184 => 
			array (
				'id' => 185,
				'chapter_id' => 6,
				'number' => 2,
				'title' => 'Punschhkanon',
				'author' => NULL,
				'melody' => 'Gökvisa',
				'text' => 'Herrar:
||: Punsch punsch punsch punsch
punsch punsch, alla sorters :||

Damer:
När snapsen vandrat hädan
och maten lagts därpå
och kaffet står på bordet
vad väntar vi då på?

||: Jo, punsch, och punsch
och ännu mera punsch :||

Ja den föll oss i smaken 
nu ropar vi gutår
och koppen står där naken
och väntar på påtår

Jo punsch...',
			),
			185 => 
			array (
				'id' => 186,
				'chapter_id' => 6,
				'number' => 3,
				'title' => 'Punschschottis',
				'author' => NULL,
				'melody' => 'Schottis på Valhall',
				'text' => 'Uppå bordet står nu en liten tår
den har lyster precis som en kristall.
Den är lockande, den är pockande,
och fast den är isande kall.
den oss värme ger när den slunkit ner
i en dammig och torr liten hals.
Det är punschen som går.
det är punschen som får
hela livet att bli till en vals.',
			),
			186 => 
			array (
				'id' => 187,
				'chapter_id' => 6,
				'number' => 4,
				'title' => 'Punschens lov',
				'author' => 'Kårspexet Sven Hedin 1987',
				'melody' => 'Rövarvisan',
				'text' => '||: Punsch, punsch, punsch, punsch :||

Punschen är och punschen var
och punschen skall förbliva
en lidelse vi alla har
som ingen kan fördriva

Ja, punschen tinar upp så väl
och svalkar både kropp och själ.
Det botar begären
och lindrar besvären
ja punschen den gör både gott och väl.',
			),
			187 => 
			array (
				'id' => 188,
				'chapter_id' => 6,
				'number' => 5,
				'title' => 'Jag gillar punschen',
				'author' => 'Ur Skoogshögskolans sångbok 1906',
				'melody' => NULL,
				'text' => 'Länge har jag tänkt
att punschen övergiva,
men det blir aldrig av
så länge jag får leva,
för när jag en gång dör
så står det på min grav
"Här vilar en som
Svenska punschen gillat har"

Jag gillar, jag gillar punschen,
jag gillar den som punschen skapat har.
Jag gillar, jag gillar punschen,
jag gillar punschen och dess far.',
			),
			188 => 
			array (
				'id' => 189,
				'chapter_id' => 6,
				'number' => 6,
				'title' => 'Imperial punsch',
				'author' => 'DKM 2000',
			'melody' => 'Imperial March (Star Wars)',
				'text' => 'Punsch, punsch, punsch, mera punsch, mera punsch!
Punsch, punsch, punsch, mera punsch, mera punsch!

Punsch, punsch, punsch, mera punsch, punsch punsch,
mera punsch, punsch, punsch, mera punsh,
mera punsch!',
			),
			189 => 
			array (
				'id' => 190,
				'chapter_id' => 6,
				'number' => 7,
				'title' => 'Djungelpunsch',
				'author' => NULL,
			'melody' => 'Var nöjd med... (Djungelboken)',
				'text' => 'Jag gillar alla tiders punsch
Punsch till frukost, punsch till lunch
En punsch till förrätt, varmrätt och dessert
Jag gillar punsch för vet du vad
Rent kaffe gör ju ingen glad

Så punsch för fulla muggar vill jag ha!',
			),
			190 => 
			array (
				'id' => 191,
				'chapter_id' => 6,
				'number' => 8,
				'title' => 'Vi vill ha punsch',
				'author' => NULL,
				'melody' => 'Theme from the Addams family',
			'text' => 'Vi vill ha punsch (knäpp, knäpp)
Vi vill ha punsch (knäpp, knäpp)
Vi vill ha punsch, vi vill ha punsch
Vi vill ha punsch (knäpp, knäpp)

När en vill festen liva,
upp är det bra att kliva
omkring på bordets skiva
och klafsa runt i punsch

Klafsa i punsch (slurp, slurp)
Klafsa i punsch (slurp, slurp)
Klafsa i punsch, klafsa i punsch
Klafsa i punsch (slurp, slurp)',
			),
			191 => 
			array (
				'id' => 192,
				'chapter_id' => 6,
				'number' => 9,
				'title' => 'Punsch, punsch',
				'author' => NULL,
				'melody' => 'Ritsch, ratsch',
				'text' => 'Punsch, punsch fillibombombom,
fillibombombom, fillibombombom.
Punsch, punsch fillibombombom,
fillibombombom, fillibom!

Vi har ju både 
Cederlunds och Carlshamns flagg
Och Grönstedts blå
och lilla Caloric.
Det blir för trist med sodavatten,
sodavatten, sodavatten.
Blir för trist med sodavatten,
ge mig lite punsch!',
			),
			192 => 
			array (
				'id' => 193,
				'chapter_id' => 7,
				'number' => 1,
				'title' => 'Skål för vattnet',
				'author' => 'Vattenfysikalen Shakespeare 1992',
				'melody' => 'Rule Britannia',
				'text' => 'I Spanien hör det till god ton och etikett
att gå omkring och skryta vitt och brett
De trodde att de skulle slå oss lätt!

Men vi är modesta
ja, vår profil är låg,
men vi är de som väger tyngst på havets våg!

Skål för vattnet, tjoho för H$_2$O!
Skål för ön där bara blyga britter bo!
Skål för vattnet som gör vår flotta stark,
hell allt vatten som ger flyt åt vår monark!',
			),
			193 => 
			array (
				'id' => 194,
				'chapter_id' => 7,
				'number' => 10,
				'title' => 'Avundsjuk visa',
				'author' => 'Lundakarnevalen 2002',
				'melody' => 'En sockerbagare',
				'text' => 'En sockerdrickare finns på kalaset
hen dricker Champis det lilla aset.
Hen dricker Pommac och 7-up,
och när jag däckar så får hen napp.

En sockerdrickare finns på kalaset
hen dricker Champis det lilla aset.
Och när hen däckar så får jag napp,
för jag har spetsat hens 7-up!',
			),
			194 => 
			array (
				'id' => 195,
				'chapter_id' => 7,
				'number' => 11,
				'title' => 'Kaffe',
				'author' => NULL,
				'melody' => 'Du ska få min gamla cykel när jag dör',
				'text' => 'Kaffe, kaffe, kaffe,
konjak och likör,
ger åt alla här ett mycket gott humör.
På det ska ni ge er katten,
vi skall sitta hela natten,
dricka kaffe, kaffe, konjak och likör.',
			),
			195 => 
			array (
				'id' => 196,
				'chapter_id' => 7,
				'number' => 12,
				'title' => 'Whiskyn',
				'author' => 'Jan Engshagen, 2011',
				'melody' => 'Längtan till landet',
				'text' => 'Whiskyn är förädling utav ölet,
destilleras, lagras flera år.
En mästardryck, full av gamla anor
den är glasklart barens bästa tår.

Drycken njutas bäst uti kristallglas
aldrig mer än fyror på en gång.
En kultiverad dryck som saknar like.
Vi hyllar alla whiskys med en sång.',
			),
			196 => 
			array (
				'id' => 197,
				'chapter_id' => 7,
				'number' => 13,
				'title' => '1, 2, 3, Whisky!',
				'author' => 'Didrik Lundberg, 2011',
			'melody' => 'Siffersången (Fem myror)',
				'text' => 'Glenlivet,
Highland Park,
Glegoyne,
Glenmorangie,
Oban,
Isle of Jura,
Lagavulin, Bowmore, Ardbeg
** Laphroig!
Talisker,
Macallan,
Knockando,
Glenfarclas,
Clynelish!',
			),
			197 => 
			array (
				'id' => 198,
				'chapter_id' => 7,
				'number' => 14,
				'title' => 'Kahlua',
				'author' => 'Fysikalen Anastasia 2004',
				'melody' => 'Kalinka',
				'text' => 'Vi söker våra rötter,
dricker allt som rött är,
upphäver sedan glatt vårt röda tjut.

Vi söker våra rötter.
Dricker allt som rött är.
Vill vi ha vodka till? Ja, Absolut!

||: Kahlua, kahlua, kahlua ska i
med vodka och grädde rör med frenesi.
White Russian, White Russian, 
White Russian det bli.
Den dryck som har blivit vårt livselixir. :||',
			),
			198 => 
			array (
				'id' => 199,
				'chapter_id' => 7,
				'number' => 2,
				'title' => 'En kan dricka vatten',
				'author' => 'n0llespexet 1995',
				'melody' => 'Vi äro musikanter',
				'text' => 'En kan dricka vatten, 
mjölk, och gammalt flott.
Men vi dricker hellre
sådant som är gott.

Vi kan dricka brännvin, öl och billigt vin.
Vi kan dricka olja och bensin.

Och vi kan svepa islandshästar,
mockavästar när vi festar.
Vi kan svepa svavelsyra på vår yra fest.

Vi kan häva kvicksilver och helium.
Vi kan häva ost och vardagsrum.

Och vi kan supa bomfadderalla,
bomfadderalla, skål på Er alla!
Vi kan supa andra hållet, andra hållet med.',
			),
			199 => 
			array (
				'id' => 200,
				'chapter_id' => 7,
				'number' => 3,
				'title' => 'Nu tar vi rom',
				'author' => 'Fysikalen Shakespeare 1990',
				'melody' => 'Deck the hall',
				'text' => 'Här på skeppet rinner rommen,
lalalalala lalalala!
Rom till varje nyankommen,
lalalalala lalalala!
Höj nu bägarn eller spannen,
lalala lalala lalala!
Sjung och skåla sen med grannen,
lalalalala lalalala!

Om än rommen smakar som en,
lalalalala lalalatrin
är till vommen rommen kommen
jajajajamaicas brända vin!
ROM och RAM och rom och cola,
lalalalax lägger också rom.
"Rom och mjölke" vill vi vråla.
Allalala vägar bär till rom!',
			),
			200 => 
			array (
				'id' => 201,
				'chapter_id' => 7,
				'number' => 4,
				'title' => 'Däj-o',
				'author' => NULL,
				'melody' => 'Banana boat song',
				'text' => '||: Däj-o, däääj-o
Daylight come, and me wan\' go home. :||
Work all night on a drink of rum.
Daylight come, and me wan\' go home
Stack the banana till the morning come.
Daylight come, and me wan\' go home

||: Dääj-o, däääj-o
Daylight come, and me wan\' go home :||
Däääj-o!',
			),
			201 => 
			array (
				'id' => 202,
				'chapter_id' => 7,
				'number' => 5,
				'title' => 'Mjölk',
				'author' => NULL,
				'melody' => 'Trink, trink',
				'text' => 'Mjölk, mjölk vi vill ha mjölk.
Det är en underbar dryck.
Mjölk, mjölk vi vill ha mjölk,
Det är vår senaste nyck.
Hämta din spann, mjölka din get,
Ge mig en klunk utav det.
Slut upp i kampen för helnykterhet.
Mjölk är det bästa jag vet.',
			),
			202 => 
			array (
				'id' => 203,
				'chapter_id' => 7,
				'number' => 6,
				'title' => 'Mjölksång',
				'author' => NULL,
				'melody' => 'Mors lilla Olle',
				'text' => 'Vad dom kan göra i vårt mejeri!
Mjölk kan dom tillverka med grejer i.
Lättmjölk och folkmjölk och starkmjölk är bra.
Dom ska vi dricka imorgon, hurra!',
			),
			203 => 
			array (
				'id' => 204,
				'chapter_id' => 7,
				'number' => 7,
				'title' => 'Hyllningsvisa till absinten',
				'author' => 'Sing-Sing Singers 2000',
				'melody' => 'Come All Ye Faithful',
				'text' => 'Var är absinten,
illgrön liksom minten,
som skänker galenskap åt var teknolog?

(Vi) är för banala, nästan helt normala.
Ja, vi vill bli unika, ja rent av magnifika,
helt enkelt gudalika och värda en skål!

Här är absinten,
illgrön liksom minten
som ger oss stirrig blick och rufsigt hår,

dessutom kindfärg liksom August Strindberg.
För att bli kreativa har vi bli\'tt addiktiva,
snart blir vi högaktiva; vi tar oss en tår!',
			),
			204 => 
			array (
				'id' => 205,
				'chapter_id' => 7,
				'number' => 8,
				'title' => 'Schottis på Valhall',
				'author' => 'Ulf Peder Olrog',
				'melody' => NULL,
				'text' => 'Opp och hoppa, Tor
Slå på trumman, bror
Det är dans här på Valhall i natt
Uti Fröjas sal
Står vår asabal
Opp och hoppa fast Oden har spatt
Slå i mera mjöd
Det får bli min död
Nej, se där är ju Idun min skatt
Min Valkyria kom hit
Till vår midvinterrit
Opp och hoppa på Valhall i natt

Höder han hade hiskelig hicka
Balder den bota med ingefärsdricka
Vred vart väl Ving-Tor, vakna och vråla
Brage bråka och Skade hon skrek:

Opp och hoppa, Tor...',
			),
			205 => 
			array (
				'id' => 206,
				'chapter_id' => 7,
				'number' => 9,
				'title' => 'Häflåten',
				'author' => NULL,
				'melody' => 'Midnatt råder',
				'text' => 'Yoghurt, yoghurt,
fyller oss till bredden,
oss till bredden.
Gurglar härligt samman där med grädden
där med grädden.
Gräddfil kräver att vi törstigt häfver
Mjölk! Mjölk! Mjölk!',
			),
			206 => 
			array (
				'id' => 207,
				'chapter_id' => 8,
				'number' => 1,
				'title' => 'Störthärligt full',
				'author' => 'Hittad på Handels 1981',
				'melody' => 'Fat mamie Brown',
				'text' => 'Nu har alla lämnat festen och jag 
sitter ensam kvar,
ibland groggar, pilsnerflaskor
i en sönderslagen bar.
Första pilsnerflaskan tog jag vid
min frukost klockan fem,
och nu sitter jag och väntar på att
få bli buren hem.

För jag är störthärligt full
och jag ramlar mest omkull,
och jag ser skära elefanter,
som har jättekonstig ull.
Ja, jag är är störthärligt full
och jag ramlar mest omkull
och det är präktigt härligt
att supa och va\' full.

Ifrån festen minns jag inget - jo
mitt öga blev visst blått,
och det måste jag ha fått när
någon kasta\' en karott.
Full med vispgrädde och
fimpar och en okammad peruk,
eller också när jag stod i moraklockan
och var sjuk.

För jag är störthärligt full...

Och i morgon när jag vaknar -
med en bergsborr i min kropp,
sandpapper på tungan och
jag vill ej stiga opp.
Mina armar de känns tunga
och min näsa den är sne\',
så jag raglar ut till köket
för en återställare!

För jag är störthärligt full...',
			),
			207 => 
			array (
				'id' => 208,
				'chapter_id' => 8,
				'number' => 10,
				'title' => 'Vi dricka, vi dricka',
			'author' => 'David Danowsky (F)',
				'melody' => 'Tre Pepparkaksgubbar',
				'text' => 'Vi dricka, vi dricka
upp allt som dukas fram
Först ölen och vinet
sen snapsar vi som f-n
Väl runda och goda
vi lämnar vår salong
Men ramlar ner och somnar sött
i rännstenens schäslong.',
			),
			208 => 
			array (
				'id' => 209,
				'chapter_id' => 8,
				'number' => 11,
				'title' => 'When I get drunker',
				'author' => NULL,
				'melody' => 'When I\'m 64',
				'text' => 'When I get drunker, loosing my mind
many beers from now.
Will I still be having me a jolly good time,
whisky, gin and a bottle of wine.
So, fill up the glasses, drunk as a skunk,
don\'t say you want no more,
\'cause we are the singers
and we are the swingers,
join us and you won\'t get bored.',
			),
			209 => 
			array (
				'id' => 210,
				'chapter_id' => 8,
				'number' => 12,
				'title' => 'Vi ska supa',
				'author' => NULL,
				'melody' => 'Askungen',
				'text' => 'Vi ska supa, vi ska festa,
vi ska göra vårat bästa,
vi ska låta marken gunga,
vi äro ännu unga.
Vi dansar uppå borden
vi festar in Norden
och vi ska bara supa, sjunga, 
Spexa, älska, vara unga,
Imorgon äro alla huven tunga.',
			),
			210 => 
			array (
				'id' => 211,
				'chapter_id' => 8,
				'number' => 13,
				'title' => 'Härjarens bordsvisa',
				'author' => 'Bordsvisa Sångarstriden 1985, Lund',
				'melody' => 'Askungen',
				'text' => 'Vi ska röja, vi ska härja
vi ska supa, slåss och svärja
oss förnöja sisådärja
med blod vi knappt oss värja
kan från ett "Bloody-Mary"-a
nu änteligen lär ja\'
dra någon riktig nytta av
min gamla brännvinsautoklav
och om deet så ska bli min grav
min sprit förtär ja\'

La la la...',
			),
			211 => 
			array (
				'id' => 212,
				'chapter_id' => 8,
				'number' => 14,
				'title' => 'Selen lever',
				'author' => NULL,
				'melody' => 'He\'s got the whole world in his hand',
				'text' => '||: Selen lever, i vår hånd :|| x4

Vi stikker hakkapikken i den, i vår sel...

Men! Selen lever...

Vi river skinnet av den, av vår sel...

Men! Selen lever...

Vi river loffene av den, av vår sel...

Men! Selen lever...

Vi river tarmene ut av den, av var sel...

Men! Selen lever...

Vi stikker øynere ut av den, av vår sel...

Men! Selen lever...

Vi kjører speedbåt over den, på vår sel...

Men! Selen lever...

Carl Gustaf gråter, för vår sel...',
			),
			212 => 
			array (
				'id' => 213,
				'chapter_id' => 8,
				'number' => 2,
				'title' => 'Jag var full en gång',
				'author' => NULL,
				'melody' => 'Flottarkärlek',
				'text' => 'Jag var full en gång för länge se\'n 
På knäna kröp jag hem, 
Varje dike var för mig ett vilohem. 
I varje hörn och varje vrå 
Där hade jag en liten vän, 
Ifrån renat upp till nittiosex procent. 

Jag var full en gång för länge se\'n 
På knäna kröp jag hem, 
Och i sällskap hade jag en elefant. 
Elefanten spruta\' vatten 
Och jag trodde det var öl 
Sedan dess har alla kallat mig för knöl -- fylleknöl! 

Andra versen kan upprepas med "öl-fylleknöl" utbytt mot "vin-fyllesvin", och sedan "sprit-fylleskit"',
			),
			213 => 
			array (
				'id' => 214,
				'chapter_id' => 8,
				'number' => 3,
				'title' => 'Bär ner mig till sjön',
				'author' => NULL,
				'melody' => 'Bei mir bist du schön',
				'text' => '||: Bär ner mig till sjön 
Bär ner mig till sjön 
Jag känner att jag måste i! :|| 
Och när du badat mig 
Så skall du torka mig. 
Och när du torkat mig 
Så vill jag i igen! 

||: Bär upp mig i en tall,
bär upp mig i en tall,
jag känner att jag måste upp. :|| 
Och när jag kommit upp,
så vill jag ner igen 
och när jag kommit ner,
så vill jag upp igen. 

||: Häll i mig min grogg,
häll i mig min grogg
Jag känner att jag tål det väl. :||
Och när jag fått min grogg, 
så fyll då på igen, 
och när du fyllt mitt glas, 
så häll då i igen. 

||: Bär ut mig i snön, 
bär ut mig i snön 
Jag känner att jag måste spy :|| 
Och när jag kastat upp 
så får du torka opp 
och när du torkat upp 
så kan jag spy igen 

||: Var var jag igår 
Var var jag igår 
Jag undrar, var var jag igår :||
Mitt huvud känns så tungt, 
Jag kan ej andas lugnt. 
Hur har jag kommit hem, 
Och vem har stoppat mig i säng?',
			),
			214 => 
			array (
				'id' => 215,
				'chapter_id' => 8,
				'number' => 4,
				'title' => 'Minne',
				'author' => NULL,
			'melody' => 'Memories (Cats)',
				'text' => 'Minne, jag har tappat mitt minne! 
Är jag svensk eller finne?
Kommer inte ihåg...

Inne, är jag ut eller inne?
Jag har luckor i minnet,
sådär små alko-hål.
Men besinn\' er,
en tätar med det brännvin en får
fastän minnet och helan går.',
			),
			215 => 
			array (
				'id' => 216,
				'chapter_id' => 8,
				'number' => 5,
				'title' => 'Antisnapsvisa',
				'author' => NULL,
				'melody' => 'Sjösala vals',
				'text' => 'Huvudet vi lyfter med ett stön ur vår säng
Diskmaskin i buken, kanoner i huvudet
Tungan som en plyschsoffa och yrseln i sväng
I ångesten vi svettas, kom sjung din refräng

Varför finns det aldrig någon nykter QuArneVal?
O, låt oss somna om så vi slipper våra kval
Men se, så många supar vi redan kastat upp i sängen:
Renat och Skåne, Svartvinbär och fager Bäsk!',
			),
			216 => 
			array (
				'id' => 217,
				'chapter_id' => 8,
				'number' => 6,
				'title' => 'Dom som är nyktra',
				'author' => NULL,
				'melody' => 'Du är den ende',
				'text' => 'Dom som är nyktra
de har inge\' roligt
dom har bara ansvar
och inte nå\'t tjolit-
an-lej-faderulla,
men vi som är fulla
vi har bara kul nästan jämt

Det sägs att en mänska
kan va\' utan brännvin,
det stämmer kanhända
men se blott på den min,
som pryder en absolutist
den är jävligt trist,
därför så sjunger vi så:

Dom som är nyktra ...

Dom som är rika
har mynt så det räcker,
ur de som är harmynt-
a brännvinet läcker.
När de tar en hela
ses gommen sig dela
så därför är jag hellre rik än harmynt! 



Vers att sjunga i dur:
Det gör det samma var vi må va\' gäster
ja, till och med lanthushållningssällskapsfester
kan uthärdas med eau-de-vie
som får månda\'n att bli blott en vag utopi.',
			),
			217 => 
			array (
				'id' => 218,
				'chapter_id' => 8,
				'number' => 7,
				'title' => 'Treo-comp',
				'author' => NULL,
				'melody' => 'Längtan till landet',
				'text' => 'Morgonstund med smak av döda bävrar
frukostmorgonen är över oss
hur vi alla stretar, hur vi vägrar
så går solen lik förbannat opp.

Snart är dagen här med hemska plågor
huvudvärk, yrsel, elände men
det finns faktiskt ett glas som dej kan rädda
Treo-comp vår frälsare och vän.',
			),
			218 => 
			array (
				'id' => 219,
				'chapter_id' => 8,
				'number' => 8,
				'title' => 'Vit vecka',
				'author' => 'Sångarstriden 1992',
				'melody' => 'White christmas',
				'text' => 'Jag drömmer om en vit vecka.
Sju dagar utan alkohol.
Tänk att bara skåla
i juice och cola
och sedan minnas allt en gjort.

Jag drömmer om en vit vecka.
Det finns en gräns för vad jag tål.
Jag vill inte ha mera sprit,
så låt nästa vecka vara vit.',
			),
			219 => 
			array (
				'id' => 220,
				'chapter_id' => 8,
				'number' => 9,
				'title' => 'The drunken sailor',
				'author' => NULL,
				'melody' => NULL,
			'text' => '||:What shall we do with the drunken sailor :|| (3 ggr)
Early in the morning

||:Hooray and up she rises :|| (3 ggr)
Early in the morning


Put them in the longboat \'til they’re sober... etc.

Pull out the plug and wet them all over...etc.

Tie them to the mast until they’re sober...etc.

Shave their head with a rusty razor...etc.

Put them into bed with the Captain\'s children...etc.

That\'s what we\'ll do with the drunken sailor...etc.',
			),
			220 => 
			array (
				'id' => 221,
				'chapter_id' => 9,
				'number' => 1,
				'title' => 'Système International',
				'author' => NULL,
				'melody' => 'Studentsången',
				'text' => 'W    kg    m    Wb    s
Ωm    T    A    rad
Cd    S    N    s
Ω    A    m    Lx    dB
°C    W/m²
J/kg    H    V    C
kg/m²    mol
m/s²    m/s²    F!',
			),
			221 => 
			array (
				'id' => 222,
				'chapter_id' => 9,
				'number' => 10,
				'title' => 'Hållfvisa',
				'author' => 'Mikael Ros 1975',
				'melody' => 'Mors lilla Olle
SE1055 Hållfasthetslära, grundkurs F',
				'text' => 'Mohrs lilla cirkel i skogen kröp, 
Gränslast på axeln och skjuvning i blick. 
Ytorna små utav tryck äro blå, 
Tänk om jag slapp att få flyta ändå. 

Brumelibrum, vem stöter där? 
Knakar, en dislokation visst det är. 
σ den ökar och cirkeln blir krökt: 
Hör du, jag tror att du spänner för högt. 

Hooke fick nu se dem, gav till ett skri. 
Linjen försvann, nu är leken förbi. 
Å varför skrämde du undan min vän? 
Mohr lilla bed honom käla igen.',
			),
			222 => 
			array (
				'id' => 223,
				'chapter_id' => 9,
				'number' => 11,
				'title' => 'Elämnenas lov',
				'author' => '',
				'melody' => 'Trink, Trink
EI1240 Teoretisk elektroteknik',
				'text' => 'Ström, ström, vi vill ha ström, 
Det är vår senaste dröm. 
Ström, ström, vi vill ha ström, 
Det är vår senaste dröm. 

Shunta din MOS 
Och bottna din FET 
Och ge mig en puls utav det. 
Slut upp i kampen för Elmät och TET, 
Ström är det bästa vi vet!',
			),
			223 => 
			array (
				'id' => 224,
				'chapter_id' => 9,
				'number' => 12,
				'title' => 'O hemska lab',
				'author' => 'Sångartäfvlan 1992',
			'melody' => 'O Helga Natt (Adams Julsång)
2B1507 Halvledarelektronik',
				'text' => 'O hemska lab, o grymma kval imorgon, 
Här sitter jag och förstår ingenting. 
Hela mitt inre fylls utav ett motstånd 
Emot eländig elektrisk mätteknik. 

Jag skulle nog behöva litet ledning, 
Här räcker inte min kapacitans. 

Kondensatorer och felvända dioder, 
O hemska lab, nu vill jag koppla af. 
O hemska lab, ty detta blir min graf!',
			),
			224 => 
			array (
				'id' => 225,
				'chapter_id' => 9,
				'number' => 13,
				'title' => 'Aris summavisa',
				'author' => 'Mikael Winai 2001',
				'melody' => 'Idas sommarvisa
SF1628 Komplex analys',
				'text' => 'Du ska inte tro att en summa 
blir alls vad den ser ut att va\', 
ja summor kan va\' lite krångligt 
det gäller att arbeta smart. 

Jag gör alla index till blommor 
jag gör konvergensradien grön, 
och nu så har serien bli\'tt konvergent 
för jag har just trollat bort n. 

Jag gör några byten av tecken 
- det blev visst Laurentserien kvar. 
Jag gör integraler så dryga 
men summan blir sist ganska rar. 

Jag gör residyer på tvären 
med nå\'n enkelpol här och där. 
Jag gör en Maclaurin av ln 
och sedan så är svaret där. 

Och KS:ar gör jag åt F:arna 
(för det tycker Bengt de ska få) 
med många små roliga saker 
som passar till kunskaper små. 

Och jag gör små roliga ställen 
där kurvan är snirklig och fin. 
Då blir bladen fulla med summor 
och svaren blir fulla med π:n',
			),
			225 => 
			array (
				'id' => 226,
				'chapter_id' => 9,
				'number' => 14,
				'title' => 'Kvarkvisan',
			'author' => 'Skriven under (sic) Forces 20-årsjubileum 1997',
				'melody' => 'Lingonben
SI1151 Kvantfysik',
				'text' => 'Upp och ner och charm och sär 
voro sex små kvarkar 
en var grön och en var blå 
och en var lite anti 

"Hej" sa topp till lille charm 
känner du till Plancks konstant 
och en förskjutningslag från Wien; 
Ja det gjorde Boltzmann! 

Tre stycken kvarkar för en proton, 
se där passerar en foton 
Fermi, Bose och Einstein. 
Tjo! sa Stephen Hawking.',
			),
			226 => 
			array (
				'id' => 227,
				'chapter_id' => 9,
				'number' => 15,
				'title' => 'Liten visa om Gram-Schmidts metod',
				'author' => 'Christian Adåker, FanFar',
				'melody' => 'Imse vimse spine
SF1604 Linjär algebra II',
				'text' => 'Tag en delrumsbas M
och en vektor a.
Projicera ner, tag dess residual.
Normalisera, tillför den till M.
Tag sen nästa vektor, börja om igen.',
			),
			227 => 
			array (
				'id' => 228,
				'chapter_id' => 9,
				'number' => 16,
				'title' => 'Kemisången',
				'author' => '',
				'melody' => 'Studentsången',
				'text' => 'Sn   As   B   Pt   Br
Na   Tl   Pr 
P   Pd   N   Cr
Er   I   Xe   Nd
Gd   Hg   Pb   Zr
Pa   Fe   Bi   Cl   Rn
V   C   Se   Mo
Al   Si   Ar
Al   Si   Ar
U!',
			),
			228 => 
			array (
				'id' => 229,
				'chapter_id' => 9,
				'number' => 17,
				'title' => 'Imperial system',
				'author' => 'Skriven till Sektionens 75-årsjubileum
2007-11-15 av GM²N',
				'melody' => 'Studentsången',
				'text' => 'ft   kp   K   bu   B
\'\'   Gb   Oe   lb   rdr   std 
st   msk   kn   E
Fr   krm   c   cSt
°F
pt   -   \'\'   \'
at
hk   nmi
M   Ci   dptr   cal
mvp   mvp   ha!',
			),
			229 => 
			array (
				'id' => 230,
				'chapter_id' => 9,
				'number' => 2,
				'title' => 'Integralkalkylens fader',
				'author' => NULL,
				'melody' => 'Sveriges fana
SF1602 Differential- och integralkalkyl II',
				'text' => 'Integralkalkylens fader, 
G W Leibniz hette han. 
Han blev trött på att skriva rader 
Av plustecken efter varann. 

Så han tänkte: 
"Das Wort Summe, 
Es beginnt ja mit ein S". 
Och han sade, 
Och han gjorde 
Integrationssymbolen av sitt S. 

Integralkalkylens fader 
Fick iden för länge se\'n, 
Den elfte uti november 
Sextonhudra-sjuttifem. 
Se\'n det året, 
Se\'n den dagen, 
Vi skriver det tecknet så. 
Och vi räknar 
Och kalkylerar, 
Integralens tecken kan en lita på. 

Och idag vi tecknet hylla 
Det löser alla problem. 
Det lyckas vår fritid fylla 
Med dx och med dt:n. 
Ja, må det leva, 
Ja, må det leva 
I många hundrade år. 
Så att våra barn 
Och våra barnbarn 
Integralens tecken lära får. 

<author>
Skriven till integralens 300-årsdag 1975-11-11.',
			),
			230 => 
			array (
				'id' => 231,
				'chapter_id' => 9,
				'number' => 3,
				'title' => 'GG-visan',
				'author' => 'nØllespexet 1999',
				'melody' => 'Jag är ett litet ylle
5A1203 Fysik, grundkurs del I',
				'text' => 'Jag heter Göran Grimvall, W pdV Vdp, 
med världens bästa infall, W pdV Vdp. 
Jag lär ut termodynamik 
och har problem i Ny Teknik, 
Grimvall, Grimvall, 
Grimvall på dig, Grimvall-freak. 

I julas ringde Platen, W pdV Vdp 
precis efter julmaten, W pdV Vdp 
Hur kunde han störa då, den token, 
jag tittade ju på Djungelboken 
Grimvall, Grimvall, 
Grimvall på dig, Grimvall-snoken. 

Jag var student på Chalmers, W pdV Vdp 
Det här blir blott en halv vers, W pdV Vdp 

Jag satt i kommissionen, W pdV Vdp 
för ubåtsinvasionen, W pdV Vdp 
Jag springer efter skärmar när 
jag inte plockar svamp och bär. 
Grimvall, Grimvall,
oj... nu sitter Grimvall där!',
			),
			231 => 
			array (
				'id' => 232,
				'chapter_id' => 9,
				'number' => 4,
				'title' => 'Öl sex',
				'author' => 'F-CTH',
				'melody' => 'Med en enkel tulipan
SI1140 Vektoranalys',
				'text' => 'En liten enkel integral 
Uti ett Vektor III-tal 
Ni har besväret, 
Ni har besväret att derivera. 

Först tar en Stokes\' sats däruppå, 
Så blir det så enkelt så 
Att integralen, 
Att integralen evaluera. 

Och rotationen den integreras 
Sen över ytan utav en boll, 
Och koordinaterna transformeras 
Så integranden blir bara noll. 

En liten enkel integral 
Uti ett Vektor III-tal 
Kan va\' så jävlig 
Att en ej hinner med något mera.',
			),
			232 => 
			array (
				'id' => 233,
				'chapter_id' => 9,
				'number' => 5,
				'title' => 'The BASIC song',
				'author' => NULL,
				'melody' => 'Mors lilla Olle
DD1346 Programkonstruktion
Radnumren sjungs ej!',
				'text' => '10 LET oss nu fatta i våra glas
20 INPUT en klunk utav det som där has
30 IF du fått nog THEN till 50 min vän
40 ELSE GOTO-baka till 10 igen
50 END',
			),
			233 => 
			array (
				'id' => 234,
				'chapter_id' => 9,
				'number' => 6,
				'title' => 'Mors lilla dator',
				'author' => NULL,
				'melody' => 'Mors lilla Olle
DD1345 Grundläggande datalogi',
				'text' => 'Mors lilla dator åt skogen gick,
mitt i programmet sade det klick
svart bidde skärmen och minnet försvann,
den informationen kan ingen få fram.

Brummeli-brum vad brummar där?
Det sprakar och gnistrar, ett jordfel det är!
Blixtar blå från burken det slå,
synd att jag här nu ensam stå.

Hyscheli-hysch vad prasslar här?
fram väller pappret ur printern där!
Den har fått nippran av tecken så små,
jag tror att jag snart hemåt skall gå.',
			),
			234 => 
			array (
				'id' => 235,
				'chapter_id' => 9,
				'number' => 7,
				'title' => 'Tentamenssång',
				'author' => NULL,
				'melody' => 'Stockholmsmelodi',
				'text' => 'Se hur hela Teknis går i vånda 
Snart så kommer tentaperiod 
Mek på fredag sedan Funk på måndag 
Det är så att en kan gråta blod 

Vad har jag gjort hela långa våren 
När jag skulle pluggat och stått i 
Jag har bara druckit öl på kåren 
Men det kan en inte tenta i 

Se så många stackars teknologer 
Transpirerar i en kvalmig sal 
Grubblar planlöst över svåra frågor 
Suckar, deppar åt en massa tal 

Skriver formler, söker kombinera 
För att få ihop en ekvation 
Sedan kan de ilsket konstatera 
Att de ej fått rätt på dimension',
			),
			235 => 
			array (
				'id' => 236,
				'chapter_id' => 9,
				'number' => 8,
				'title' => 'ODE till en husvagn',
				'author' => 'Första Fulölfesten, 2000',
				'melody' => 'Husvagn
SG1130 Mekanik, baskurs',
				'text' => 'Vi har ägnat våren åt en kurs i mekanik, 
prickar, streck och pilar och en massa dynamik. 
Vi har haft svårt att fatta vad en svängning innebär 
men äntligen har vi förstått vad Newtons lagar lär...

En ska ha husvagn, som sitter fastspänd i en båt, 
en ska ha husvagn, som sedan sjunker och blir våt, 
en ska ha husvagn, som först är odämpad och fri, 
en ska ha husvagn, nu så fattar vi! 

En tänker sig en vagn med massan m och så en fjäder 
som står på däcket på en båt som seglar i hårt väder. 
När båten gungar skapas det en svängningsekvation, 
och vattnet som sen strömmar in ger stark viskös friktion. 

En ska ha husvagn, då kommer en att räkna rätt, 
en ska ha husvagn, för då kan resten inses lätt, 
en ska ha husvagn, det är ett bra svängningssystem, 
en ska ha husvagn i sina problem! 

m x prick prick + c x prick + k x är m g 
x prick är A ω-n cos ωn t 
τ är lika med 2 π genom ω-n, 
där ω-n är roten ur k genom m. 

En ska ha husvagn, det är en bild som är konkret, 
en ska ha husvagn, men för en hög viskositet 
ska en ha honung - det ger ett ζ som är högt, 
en ska ha honung - för det är kladdigt, mjukt och sött!',
			),
			236 => 
			array (
				'id' => 237,
				'chapter_id' => 9,
				'number' => 9,
				'title' => 'Matlab',
				'author' => 'Uppsala teknologers sångbok',
				'melody' => 'Husvagn
DN1240 Numeriska metoder, grundkurs II',
				'text' => 'Jag har prövat nästan allt som finns att pröva på:
Kulram, fingrar, räknesticka, tärning eller så.
Jag har kalkylerat på de konstigaste sätt
men nu så har jag kommit på hur en ska räkna rätt. 

En ska ha MATLAB - då är kalkylen redan klar.
En ska ha MATLAB - det har jag sett att andra har.
En ska ha MATLAB - det är min livsfilosofi.
En ska ha MATLAB - för då blir en fri.

I många år så var jag inte alls så särskilt lärd.
Jag visste ej vad som vänta’ mig i denna stora värld.
Men sedan jag till NADA kom, och ända sedan dess
så har jag funnit livets stora lyxdelikatess.

En ska ha MATLAB - så att en slipper tänka alls.
En ska ha MATLAB - ja, då går allting som en vals.
En ska ha MATLAB - det bygger på nån slags logik.
En ska ha MATLAB - för då blir en rik.

5 minuter mekanik, 5 minuter statfys.
5 minuter kvantfysik, 5 minuter analys.
5 minuter fråga propp, 5 minuter kolla opp.
5 minuter tänka själv och sedan tar det stopp.

En ska ha MATLAB - och datasalens friska luft.
En ska ha MATLAB - det tycker tjejerna är tufft.
En ska ha MATLAB - när Ryssen kommer med sitt MIG
En ska ha MATLAB - då vinner en i krig',
			),
		));
	}

}
