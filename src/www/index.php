<? include_once($_SERVER['FRAMEWORK_PATH']."/include/segment.php") ?>
<!DOCTYPE html>
<html>
<head>
	<title>Aranesp</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="viewport" content="width=1024; initial-scale=1.0; maximum-scale=1.0;" />

	<? if($_SESSION["dev_includes"]) { ?>
		<link type="text/css" rel="stylesheet" media="all" href="/css/lib/seg_<?= $_SESSION["segment"] ?>_include.css" />
		<script type="text/javascript" src="/js/lib/seg_<?= $_SESSION["segment"] ?>_include.js"></script>
	<? } else { ?>
		<link type="text/css" rel="stylesheet" media="all" href="/css/seg_<?= $_SESSION["segment"] ?>.css" />
		<script type="text/javascript" src="/js/seg_<?= $_SESSION["segment"] ?>.js"></script>
	<? } ?>

</head>

<body class="front i:validdevice">

<div id="page" class="i:page">

	<div id="header" class="i:header">
		<ul>
			<li class="button close_a id:slide11">close</li>
			<li class="button item2 id:slide2"></li>
			<li class="button item3 id:slide3_1"></li>
			<li class="button item4 id:slide4"></li>
			<li class="button item5 id:slide5"></li>
			<li class="button item6 id:slide6"></li>
			<li class="button home id:slide7_1">home</li>
			<li class="button item8 id:slide8"></li>
			<li class="button item9 id:slide9"></li>
			<li class="button item10 id:slide10"></li>
			<li class="item11"></li>
			<li class="button close_b id:slide11">close</li>
		</ul>
	</div>

	<div id="content" class="i:content">

		<ul class="slides">
			<li class="pri slide slide1 i:slide1">
				<h2>Home</h2>
				<div class="go"></div>
				<div class="hb"></div>
				<div class="qol"></div>
				<div class="flex"></div>
			</li>
			<li class="pri slide slide2 i:slide2">
				<h2>SureClick instructie (Beaaren1, Bewaaren2, Voorbereiden3, Voorbereiden4, Plaatsen5, Plaatsen6, Injecteren7, injecteren8)</h2>
				<div class="icon icon1"></div>
				<div class="icon icon2"></div>
				<div class="icon icon3"></div>
				<div class="icon icon4"></div>
				<div class="icon icon5"></div>
				<div class="icon icon6"></div>
				<div class="icon icon7"></div>
				<div class="icon icon8"></div>
				<div class="text_box"></div>
			</li>
			<li class="pri slide slide3 i:swipe">
				<ul class="subslides">
					<li class="slide slide3_1 i:slide3_1 slices:7 i:sliderefx2"><h2>Doseringskaart geen dialyse</h2></li>
					<li class="slide slide3_2 i:slide3_1 slices:8 i:sliderefx1"><h2>Doseringskaart voor dialysepatiënten</h2></li>
				</ul>
			</li>
			<li class="pri slide slide4 i:slide4">
				<h2>Referenties</h2>
				<div class="ref_drag">
				<div class="ref">
					<p class="ref01">
						1.
						<a href="javascript:openPDF('pdf/1_EgrieBrown_NDT.2001.16.3-13.pdf');">
						Egrie JC, Browne JK. Development and characterization of novel erythropoiesis stimulating protein (NESP). Nephrol Dial Transplant. 2001;16(suppl 3):3-13.</a>
					</p>
					<p class="ref02">
						2.
						<a href="javascript:openPDF('pdf/2_Elliott_AnnHematol_2006.85.641-669.pdf');">
							Elliott S, Agoram B, Doshi S, et al. Mechanism of action of erythropoiesis stimulating proteins (ESPs) [abstract]. Ann Hematol. 2006;85:641-669. Abstract 1.
						</a>
					</p>
					<p class="ref03">
						3.
						<a href="javascript:openPDF('pdf/3_Agarwal_JIM2006.260.577-585.pdf');">
							Agarwal AK, Silver MR, Reed JE, et al. An open-label study of darbepoetin alfa administered once monthly for the maintenance of haemoglobin concentrations in patients with chronic kidney disease not receiving dialysis.
							 J Int Med. 2006;260:577-585.
						</a>
					</p>
					<p class="ref04">
						4.
						<a href="javascript:openPDF('pdf/4_Toto_AJN_2004.24.453-460.pdf');">
							Toto RD, Pichette V, Navarro J, et al. Darbepoetin alfa effectively treats anemia in patients with chronic kidney disease with de nove every-other-week administration. Am J Nephrol. 2004;24:453-460. 
						</a>
					</p>
					<p class="ref05">
						5.
						<a href="javascript:openPDF('pdf/5_SmPC Aranesp feb 11.pdf');">
							Samenvatting van de productkenmerken Aranesp® (SureClickTM), Versie februari 2011, Amgen.
						</a>
					</p>
					<p class="ref06">
						6.
						<a href="javascript:openPDF('pdf/6_Ling_ClinNephrol_2005.63.327-334.pdf');">
							Ling B, Walczyk M, Agarwal A, et al. Darbepoetin alfa administered once monthly maintains hemoglobin concentrations in patients with chronic kidney disease. Clin Nephrol. 2005;63:327–334. 
						</a>
					</p>
					<p class="ref07">
						7.
						<a href="javascript:openPDF('pdf/7_Rutkowski_J_Am_Soc_Nephrol_2006.pdf');">
							Rutkowski B, Bitterova Z, Ferenczi S, et al. Effectiveness of converting from intravenous (iv) or subcutaneous (sc) recombinant human erythropoietin (rHuEPO) to IV darbepoetin alfa (DA) in end stage renal disease (ESRD) patients (Pts) on hemodialysis (HD) [abstract]. J Am Soc Nephrol. 2006;17:187A–188A. Abstract TH-PO380.
						</a>
					</p>
					<p class="ref08">
						8.
						<a href="javascript:openPDF('pdf/8_Carrera 2004 RevPortNefrolHipert.pdf');">
							Carrera F, Anucianda AI, Nogueira C, et al. Once-weekly darbepoetin alfa is as effective as three-times weekly epoetin. Rev Port Nefrol Hipert. 2004;18:33–40. 
						</a>
					</p>
					<p class="ref09">
						9.
						<a href="javascript:openPDF('pdf/9_Vanrenterghem_KI_2002.62.2167-2175.pdf');">
							Vanrenterghem Y, Barany P, Mann JF, et al. On behalf of the European/Australian NESP 970200 Study Group. Randomized trial of darbepoetin alfa for treatment of renal anemia at a reduced dose frequency compared with rHuEPO in dialysis patients. Kidney Int. 2002;62:2167–2175. 
						</a>
					</p>
					<p class="ref10">
						10.
						<a href="javascript:openPDF('pdf/10_Urena_EDTA 2007_Urena Poster_FINAL FOR PRINT.pdf');">
							Urena P, Maetzel A. Dose efficiency of AranespR (darbepoetin alfa) compared with epoetin alfa or epoetin beta in dialysis patients – a meta analysis. Presented at the XLIV European Renal Association-European Dialysis and Transplant Association (ERA-EDTA) Congress; June 21–24, 2007; Barcelona, Spain. Abstract and Poster. 
						</a>
					</p>
					<p class="ref11">
						11.
						<a href="javascript:openPDF('pdf/11_Nissenson_AJKD_2002.40.110-118.pdf');">
							Nissenson AR, Swan SK, Lindberg JS, et al. Randomized, controlled trial of darbepoetin alfa for the treatment of anemia in hemodialysis patients. Am J Kidney Dis. 2002;40:110–118.
						</a>
					</p>
					<p class="ref12">
						12.
						<a href="javascript:openPDF('pdf/12_Molina_Nefrologia_2004.14.564-571.pdf');">
							Molina M, Garcia Hernandez MA, Navarrese MJ, et al. Estudio comparativo sobre el tratamiento de la anemia renal en el paciente en hemodialisis: cambo de viade administracion de epoetina alfa frente a conversion a darbepoetina. Nefrologia. 2004;24:564–571. 
						</a>
					</p>
					<p class="ref13">
						13.
						<a href="javascript:openPDF('pdf/13_Tolman_JASN_2005.16.1463-1470.pdf');">
							Tolman C, Richardson D, Bartlett C, et al. Structured conversion from thrice weekly to weekly erythropoietic regimens using a computerized decision-support system: a randomized clinical study. J Am Soc Nephrol. 2005;16:1463–1470. 
						</a>
					</p>
					<p class="ref14">
						14.
						<a href="javascript:openPDF('pdf/14_Icardi JNephrol2007.pdf');">
							Icardi A, Sacco P, Salvatore F, et al. Long-term intravenous epoetin-α/darbepoetin-α ratio in iron-replete
							hemodialysis patients. J Nephrol. 2007;20:73–79.
						</a>
					</p>
					<p class="ref15">
						15.
						<a href="javascript:openPDF('pdf/15_Tanghe_Mercurius FINAL EUPA FPA Author Approved PRINT 16October2006.pdf');">
							Tanghe A, Rooryck N, Legrand M, et al. Economic benefits of less frequent dosing of erythropoietic stimulating proteins in patients on dialysis. Presented at the 35th European Symposium on Clinical Pharmacy; October 18–21, 2006; Vienna, Austria. 
						</a>
					</p>
					<p class="ref16">
						16.
						<a href="javascript:openPDF('pdf/16_DruekeTB-NEJM2006.pdf');">
							Drüeke TB, Locatelli F, Clyne N, et al. Normalization of hemoglobin level in patients with chronic kidney disease and anemia. N Engl J Med. 2006;355:2071-2084.
						</a>
					</p>
					<p class="ref17">
						17.
						<a href="javascript:openPDF('pdf/17_SinghAK-NEnglJMed2006.pdf');">
							Singh AK, Szczech L, Tang KL, et al. Correction of anemia with epoetin alfa in chronic kidney disease. N Engl J Med. 2006;355:2085-2098.  
						</a>
					</p>
					<p class="ref18">
						18.
						<a href="javascript:openPDF('pdf/18_Macdougall CJASN 2008 ARCTOS.PDF');">
							MacDougall IC, Walker R, Provenzano R, et al. C.E.R.A. corrects anemia in patients with chronic kidney disease not on dialysis: results of a randomized clinical trial. Clin J Am Soc Nephrol. 2008;3:337-347. 
						</a>
					</p>
					<p class="ref19">
						19.
						<a href="javascript:openPDF('pdf/19_Alexander Curr Med Res Opinion 2007.pdf');">
							Alexander M, Kewalramani R, Agodoa I, et al. Association of anemia correction with health related quality of life in patients not on dialysis. Curr Med Res Opin. 2007;23:2997-3008. 
						</a>
					</p>
					<p class="ref20">
						20.
						<a href="javascript:openPDF('pdf/20_Benz CJASN 2007.pdf');">
							Benz R, Schmidt R, Kelly K, et al. Epoetin alfa once every 2 weeks is effective for initiation of treatment of anemia of chronic kidney disease. Clin J Am Soc Nephrol.2007;2:215-221. 
						</a>
					</p>
					<p class="ref21">
						21.
						<a href="javascript:openPDF('pdf/21_Revicki 1995 AJKD.pdf');">
							Revicki DA, Brown RE, Feeny DH, et al. Healthrelated quality of life associated with recombinant human erythropoietin therapy for predialysis chronic renal disease patients. Am J Kidney Dis. 1995;25:548-554.
						</a>
					</p>
					<p class="ref22">
						22.
						<a>
							Onderzoek uitgevoerd onder nefrologische patiënten binnen de 2care service die in de maanden oktober 2008 t/m september 2009 een enquête over de 2care service hebben ingevuld (n=143), Amgen data on file. 
						</a>
					</p>
					<p class="ref23">
						23.
						<a href="javascript:openPDF('pdf/23_Johansen Kirsten L.pdf');">
							Johansen KL, Finkelstein FO, Revicki DA, et al. Systematic review and meta-analysis of exercise tolerance and physical functioning in dialysis patients treated with erythropoiesis-stimulating agents. Am J Kidney Dis. 2010;55:535-548. 
						</a>
					</p>
					<p class="ref24">
						24.
						<a href="javascript:openPDF('pdf/24_Gandra Ahravanthi R.pdf');">
							Gandra SR, Finkelstein FO, Bennett AV, et al. Impact of erythropoiesis-stimulating agents on energy and physical function in nondialysis CKD patients with anemia: a systematic review. Am J Kidney Dis. 2010; 55: 519 - 534.  
						</a>
					</p>
					<p class="ref25">
						25.
						<a href="javascript:openPDF('pdf/25_KDOQI  update 2007.pdf');">
							National Kidney Foundation. K/DOQI clinical pratice guideline and clinical practice recommendations for anemia in chronic kidney disease. Am J Kidney Dis 2007;50(suppl 3):s474-s530.
						</a>
					</p>
				</div>
				</div>
			</li>
			<li class="pri slide slide5 i:slide5">
				<h2>SmPC</h2>
				<div class="drag">
					<div class="smpc">
						<strong>Aranesp<sup>®</sup></strong><br />
						Samenstelling: oplossing voor injectievloeistof met darbepoetin alfa. Aranesp SureClick uitsluitend voor s.c. gebruik. Afleveringsvorm: Aranesp SureClick: verpakking met één voorgevulde pen met 20, 40, 60, 80, 100, 150, 300 of 500 microgram. Aranesp voorgevulde spuiten met automatische naaldbeschermer: verpakking met vier voorgevulde spuiten met 20, 30, 40, 50, 60, 80, 100, 130 of 150 microgram of verpakking met één voorgevulde spuit met 300 of 500 microgram. Aranesp voorgevulde spuiten: verpakking met vier voorgevulde spuiten met 10 microgram. Farmacotherapeutische categorie: Preparaten tegen anemie, andere preparaten tegen anemie. ATC-code: B03XA02. Indicaties en dosering: Behandeling van symptomatische anemie t.g.v. chronische nierinsufficiëntie bij volwassenen en kinderen. Behandeling van symptomatische anemie bij volwassen kankerpatiënten met non-myeloïde maligniteiten die chemotherapie toegediend krijgen. Dosering is afhankelijk van de indicatie (zie geregistreerde productinformatie). Contra-indicaties: Overgevoeligheid voor darbepoetin alfa, r-HuEPO of één van de hulpstoffen. Slecht gecontroleerde hypertensie. Bijzondere waarschuwingen en voorzorgen bij gebruik: Algemeen: De merknaam van de toegediende erytropoëse-stimulerende agentia (ESA) dient duidelijk te worden vermeld in het patiëntendossier t.b.v. traceerbaarheid. De bloeddruk dient te worden gecontroleerd bij alle patiënten, vooral bij aanvang van de behandeling met Aranesp. Aanbevolen wordt om de Hb streefwaarden niet te overschrijden. Gevallen van ernstige hypertensie, met optreden van hypertensieve crisis, hypertensieve encefalopathie en toevallen, zijn waargenomen bij CNI-patiënten behandeld met Aranesp. Voor een effectieve erytropoëse, de ijzerstatus evalueren bij alle patiënten voor en tijdens de behandeling; een supplementaire ijzertherapie kan noodzakelijk zijn. Erytrocytaire aplasie (PRCA) veroorzaakt door neutraliserende anti-erytropoëtine antilichamen is gerapporteerd in samenhang met recombinante erytropoëtische eiwitten, inclusief Aranesp. Patiënten met vermoede of bevestigde neutraliserende antilichamen t.g.v. erytropoëtine niet overzetten op Aranesp. Aranesp met voorzichtigheid gebruiken bij patiënten met een leveraandoening. Voorzichtigheid betrachten bij sikkelcelanemie. Patiënten met chronische nierinsufficiëntie: In de onderhoudsfase de bovenste limiet van de Hb streefwaarde niet overschrijden. Tijdens klinische onderzoeken werd een verhoogd risico op overlijden en ernstige cardiovasculaire of cerebrovasculaire voorvallen waargenomen wanneer ESA’s werden toegediend met streefwaarden van de Hb concentratie hoger dan 7,5 mmol/l. Gecontroleerde klinische onderzoeken hebben geen significante voordelen aangetoond die toe te schrijven zijn aan de toediening van epoëtines wanneer de hemoglobineconcentratie wordt verhoogd tot boven de waarde die nodig is om de symptomen van anemie onder controle te houden en een bloedtransfusie te voorkomen. IJzersuppletie is aanbevolen bij alle patiënten met een serumferritinespiegel < 100 µg/l of een transferrinesaturatie < 20%.. De kaliumspiegels regelmatig controleren tijdens de behandeling. Indien een gestegen of stijgende kaliumspiegel wordt waargenomen, overwegen om de toediening van Aranesp stop te zetten tot normale spiegels. Patiënten met kanker: ESA’s zijn niet geïndiceerd voor gebruik bij patiënten met actieve maligniteiten die noch chemotherapie noch radiotherapie ontvangen, omdat bij deze patiënten is vastgesteld dat zij een verhoogd risico op overlijden hebben wanneer ESA’s werden toegediend om een Hb concentratie van 7,5 mmol/l te bereiken. Zoals bij alle groeifactoren, is er bezorgdheid dat epoëtines de groei van tumoren zou kunnen stimuleren. In sommige klinische situaties heeft een bloedtransfusie de voorkeur. Bij solide tumoren of lymfoproliferatieve maligniteiten Hb > 7,5 mmol/l dosisaanpassing volgen om potentieel risico op trombo-embolische gebeurtenissen te minimaliseren. Aantal bloedplaatjes en Hb dienen regelmatig te worden gecontroleerd. Interacties: De tot op heden verkregen klinische resultaten wijzen niet op enige interactie van darbepoetin alfa met andere stoffen. Er is een mogelijkheid op interactie met stoffen die in hoge mate worden gebonden aan rode bloedcellen, zoals cyclosporine en tacrolimus. Indien Aranesp samen gegeven wordt met een van deze behandelingen, bloedspiegels van deze stoffen controleren en de dosering aanpassen als het Hb stijgt. Zwangerschap en borstvoeding: Voorzichtigheid is geboden bij het voorschrijven aan zwangere vrouwen. Aranesp niet toedienen aan vrouwen die borstvoeding geven. Wanneer behandeling met Aranesp absoluut is aangewezen, dienen vrouwen te stoppen met het geven van borstvoeding. Bijwerkingen: Algemeen: ernstige allergische reacties waaronder anafylactische reactie, angio-oedeem, allergische bronchospasmen, huiduitslag en urticaria. In klinisch onderzoek: Patiënten met chronische nierinsufficiëntie: zeer vaak: hypertensie. Vaak: huiduitslag, erytheem, beroerte en pijn op de injectieplaats. Patiënten met kanker: zeer vaak: oedeem. Vaak: huiduitslag, erytheem, trombo-embolische voorvallen waaronder pulmonair embolisme en pijn op de injectieplaats. Postmarketing ervaring: In geïsoleerde gevallen: erytrocytaire aplasie (PRCA) veroorzaakt door neutraliserende anti-erytropoëtine antilichamen. Allergische reacties, waaronder anafylactische reactie, angio-oedeem, huiduitslag en urticaria. Convulsies & hypertensie. Vergoeding: U.R. Aranesp wordt volledig vergoed. Voor prijzen zie Z-index. Voor meer informatie zie de geregistreerde productinformatie.<br />
						Amgen BV te Breda, tel. 076-5732500.<br />
						Versie 28 februari 2011 / Projectnummer:Mar2011270I<br />
						<br /><br />
						Amgen B.V.<br />
						Minervum 7061<br />
						Postbus 3345<br />
						4800 DH BREDA<br />
						Tel.: 076-5732500<br />
						<br /><br />
					</div>
				</div>
			</li>
			<li class="pri slide slide6 ready i:slide6">
				<h2>2Care</h2>
				<div class="care_link"></div>
			</li>
			<li class="pri slide slide7 i:swipe">
				<ul class="subslides">
					<li class="slide slide7_1 ready i:sliderefx5"><h2>home intro</h2></li>
					<li class="slide slide7_2 i:slide7_2"><h2>home question</h2></li>
				</ul>
			</li>
			<li class="pri slide slide8 i:slide8">
				<h2>Hb</h2>
				<div class="pop pop1"></div>
				<div class="pop pop2"></div>
				<div class="pop pop3"></div>
				<div class="pop pop4"></div>
				<div class="pop pop5"></div>
				<div class="pop pop6"></div>
				<div class="pop pop7"></div>
				<div class="pop pop8"></div>
				<div class="pop_select pop_select_bottom pop1_area"></div>
				<div class="pop_select pop_select_top pop2_area"></div>
				<div class="pop_select pop_select_bottom pop3_area"></div>
				<div class="pop_select pop_select_top pop4_area"></div>
				<div class="pop_select pop_select_bottom pop5_area"></div>
				<div class="pop_select pop_select_top pop6_area"></div>
				<div class="pop_select pop_select_bottom pop7_area"></div>
				<div class="pop_select pop_select_top pop8_area"></div>
			</li>
			<li class="pri slide slide9 i:slide9 i:sliderefx2">
				<h2>QoL</h2>
				<div class="graph square_area"></div>
				<div class="graph circle_area"></div>
				<div class="graph outline_area"></div>
				<div class="square_button"></div>
				<div class="circle_button"></div>
				<div class="outline_button"></div>
				<div class="explain"></div>
				<div class="explain_button"></div>
			</li>
			<li class="pri slide slide10 ready i:sliderefx3"><h2>Flexible</h2></li>
			<li class="pri slide slide11 ready i:sliderefx3"><h2>Closing Page</h2></li>
		</ul>

	</div>

	<div id="footer" class="i:footer show"></div>

</div>

</body>
</html>