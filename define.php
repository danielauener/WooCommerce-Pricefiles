<?php

//define('SCRIPT_DEBUG', TRUE);

define('WC_PRICEFILES_PLUGIN_SLUG', 'woocommerce-pricefiles');

define('WP_PRICEFILES_PLUGIN_PATH', plugin_dir_path(__FILE__));
define('WP_PRICEFILES_PLUGIN_URL', plugins_url('', __FILE__).'/');

//global $wc_pricefiles_list, $default_shipping_destination, $pricerunner_categories;
global $wc_pricefiles_globals;

$wc_pricefiles_globals = array();

$default_shipping_destination = array(
    'country'   => 'SE',
    'state'     => '',
    'postcode'  => '652 27',
    'city'      => 'KARLSTAD',
    'address_1'   => 'Gustafsgatan 1',
    'address_2' => '',
);
$wc_pricefiles_globals['default_shipping_destination'] = $default_shipping_destination;


//Last updated: 2013-09-20
$wc_pricefiles_categories = array(

    '350' => 'Barn och Familj > Barn- och Babytillbehör',
    '496' => 'Barn och Familj > Barnkammarmöbler',
    '497' => 'Barn och Familj > Barnsäkerhet',
    '352' => 'Barn och Familj > Barnsängar',
    '503' => 'Barn och Familj > Barntextilier',
    '674' => 'Barn och Familj > Barnvagnar',
    '689' => 'Barn och Familj > Barnvagnstillbehör',
    '369' => 'Barn och Familj > Bilbarnstolar',
    '72' => 'Barn och Familj > Leksaker',
    '730' => 'Barn och Familj > Maskeradkostymer',
    '613' => 'Barn och Familj > Sällskapsspel och Pussel',

    '27' => 'Datorprodukter > Datorer > Bärbara datorer',
    '735' => 'Datorprodukter > Datorer > Bärbara datorer med mobilt bredband',
    '288' => 'Datorprodukter > Datorer > GPS-mottagare',
    '28' => 'Datorprodukter > Datorer > Handdatorer',
    '1156' => 'Datorprodukter > Datorer > Läsplattor',
    '261' => 'Datorprodukter > Datorer > Servers',
    '223' => 'Datorprodukter > Datorer > Stationära datorer',
    '224' => 'Datorprodukter > Datorer > Surfplattor och Tablets',

    '186' => 'Datorprodukter > Datorkomponenter > Chassin',
    '184' => 'Datorprodukter > Datorkomponenter > Datorkylning',
    '38' => 'Datorprodukter > Datorkomponenter > Datorminnen',
    '37' => 'Datorprodukter > Datorkomponenter > Grafikkort',
    '48' => 'Datorprodukter > Datorkomponenter > Ljudkort',
    '35' => 'Datorprodukter > Datorkomponenter > Moderkort',
    '640' => 'Datorprodukter > Datorkomponenter > Nätaggregat',
    '117' => 'Datorprodukter > Datorkomponenter > Nätverkskort',
    '40' => 'Datorprodukter > Datorkomponenter > Processorer',
    '180' => 'Datorprodukter > Datorkomponenter > TV-kort',
    '181' => 'Datorprodukter > Datorkomponenter > Videoredigeringskort',

    '25' => 'Datorprodukter > Kringutrustning > Bildskärmar',
    '210' => 'Datorprodukter > Kringutrustning > Bildskärmstillbehör',
    '187' => 'Datorprodukter > Kringutrustning > Bläck och Toner',
    '260' => 'Datorprodukter > Kringutrustning > Datorbatterier och Nätadaptrar',
    '258' => 'Datorprodukter > Kringutrustning > Datorväskor',
    '259' => 'Datorprodukter > Kringutrustning > Dockningsstationer',
    '185' => 'Datorprodukter > Kringutrustning > Ergonomiprodukter',
    '304' => 'Datorprodukter > Kringutrustning > GPS-tillbehör',
    '203' => 'Datorprodukter > Kringutrustning > Handdatortillbehör',
    '263' => 'Datorprodukter > Kringutrustning > Kablar',
    '312' => 'Datorprodukter > Kringutrustning > KVM-switchar',
    '267' => 'Datorprodukter > Kringutrustning > MP3 och PC-högtalare',
    '116' => 'Datorprodukter > Kringutrustning > Multifunktionsskrivare',
    '110' => 'Datorprodukter > Kringutrustning > Möss',
    '535' => 'Datorprodukter > Kringutrustning > PC-mikrofoner',
    '182' => 'Datorprodukter > Kringutrustning > Ritplattor',
    '50' => 'Datorprodukter > Kringutrustning > Scanners',
    '26' => 'Datorprodukter > Kringutrustning > Skrivare',
    '276' => 'Datorprodukter > Kringutrustning > Skrivartillbehör',
    '569' => 'Datorprodukter > Kringutrustning > Surfplatte- och Tablet-tillbehör',
    '111' => 'Datorprodukter > Kringutrustning > Tangentbord',
    '202' => 'Datorprodukter > Kringutrustning > Tillbehör bärbara datorer',
    '1162' => 'Datorprodukter > Kringutrustning > Tillbehör E-boksläsare',
    '287' => 'Datorprodukter > Kringutrustning > Tillbehör stationära datorer',
    '49' => 'Datorprodukter > Kringutrustning > Webbkameror',

    '41' => 'Datorprodukter > Lagringsprodukter > CD/DVD/BD-media',
    '36' => 'Datorprodukter > Lagringsprodukter > Hårddiskar',
    '61' => 'Datorprodukter > Lagringsprodukter > Minneskort',
    '233' => 'Datorprodukter > Lagringsprodukter > Minneskortsläsare och Adaptrar',
    '744' => 'Datorprodukter > Lagringsprodukter > NAS Servers',
    '45' => 'Datorprodukter > Lagringsprodukter > Optiska enheter',

    '272' => 'Datorprodukter > Nätverk > Accesspunkter för trådlösa nätverk',
    '166' => 'Datorprodukter > Nätverk > Brandväggar',
    '167' => 'Datorprodukter > Nätverk > Hubbar och Switchar',
    '702' => 'Datorprodukter > Nätverk > Nätverk via elnätet',
    '168' => 'Datorprodukter > Nätverk > Routrar',

    '298' => 'Datorprodukter > Programvaror > Antivirusprogram',
    '296' => 'Datorprodukter > Programvaror > Foto- och Grafikprogram',
    '295' => 'Datorprodukter > Programvaror > Kontorsprogram',
    '294' => 'Datorprodukter > Programvaror > Operativsystem',
    '297' => 'Datorprodukter > Programvaror > Videoredigeringsprogram',
    '47' => 'Datorprodukter > Programvaror > Övriga programvaror',


    '121' => 'Fordon > Billjud > Bil Audio/Video',
    '567' => 'Fordon > Billjud > Bilhögtalare',
    '125' => 'Fordon > Billjud > Billjud: Slutsteg',
    '124' => 'Fordon > Billjud > Billjud: Växlare',

    '630' => 'Fordon > Båt > Båttillbehör',

    '657' => 'Fordon > Motorfordon > Bildäck',
    '656' => 'Fordon > Motorfordon > Bilfälg',
    '636' => 'Fordon > Motorfordon > Biltillbehör',
    '704' => 'Fordon > Motorfordon > Mopeder',
    '711' => 'Fordon > Motorfordon > Mopedtillbehör',
    '668' => 'Fordon > Motorfordon > Motorcykeltillbehör',
    '712' => 'Fordon > Motorfordon > Motorcyklar och Motocross',

    '1188' => 'Foto och Video > Batterigrepp',
    '622' => 'Foto och Video > Digitala fotoramar',
    '29' => 'Foto och Video > Digitalkameror',
    '525' => 'Foto och Video > Fotopapper',
    '1184' => 'Foto och Video > Kamerabatterier',
    '283' => 'Foto och Video > Kamerablixtar',
    '282' => 'Foto och Video > Kameralinsfilter',
    '543' => 'Foto och Video > Kameraobjektiv',
    '281' => 'Foto och Video > Kamerastativ',
    '280' => 'Foto och Video > Kameraväskor',
    '587' => 'Foto och Video > Studio och Ljussättning',
    '1186' => 'Foto och Video > Undervattenshus',
    '206' => 'Foto och Video > Videokameratillbehör',
    '8' => 'Foto och Video > Videokameror',
    '200' => 'Foto och Video > Övriga fototillbehör',


    '1400' => 'Hem och Trädgård > Badrum > Badkar',
    '1402' => 'Hem och Trädgård > Badrum > Badrumsmöbler',
    '1372' => 'Hem och Trädgård > Badrum > Badrumstillbehör',
    '1398' => 'Hem och Trädgård > Badrum > Bidéer',
    '1386' => 'Hem och Trädgård > Badrum > Blandare',
    '1388' => 'Hem och Trädgård > Badrum > Bubbelbadkar',
    '1390' => 'Hem och Trädgård > Badrum > Duschar',
    '1392' => 'Hem och Trädgård > Badrum > Duschkabiner',
    '1384' => 'Hem och Trädgård > Badrum > Fritidstoaletter',
    '1394' => 'Hem och Trädgård > Badrum > Handdukstorkar',
    '247' => 'Hem och Trädgård > Badrum > Handfat och Tvättställ',
    '397' => 'Hem och Trädgård > Badrum > Spa och Bastu',
    '1382' => 'Hem och Trädgård > Badrum > Toalettillbehör',
    '1380' => 'Hem och Trädgård > Badrum > Toalettstolar',

    '1274' => 'Hem och Trädgård > Belysning > Ficklampor',
    '460' => 'Hem och Trädgård > Belysning > Lampor',
    '1272' => 'Hem och Trädgård > Belysning > Ljuskällor',
    '1270' => 'Hem och Trädgård > Belysning > Trädgårdsbelysning',

    '1268' => 'Hem och Trädgård > Hem > Baktillbehör',
    '314' => 'Hem och Trädgård > Hem > Blommor',
    '1316' => 'Hem och Trädgård > Hem > Braskaminer',
    '484' => 'Hem och Trädgård > Hem > Festprodukter',
    '1340' => 'Hem och Trädgård > Hem > Garn och Stickning',
    '459' => 'Hem och Trädgård > Hem > Heminredning',
    '1342' => 'Hem och Trädgård > Hem > Hobbymaterial',
    '456' => 'Hem och Trädgård > Hem > Husdjursartiklar',
    '357' => 'Hem och Trädgård > Hem > Husgeråd',
    '627' => 'Hem och Trädgård > Hem > Konstnärsmaterial',
    '516' => 'Hem och Trädgård > Hem > Larm och Säkerhet',
    '492' => 'Hem och Trädgård > Hem > Ljus och Aromaoljor',
    '1266' => 'Hem och Trädgård > Hem > Matlagningsredskap',
    '685' => 'Hem och Trädgård > Hem > Mattor',
    '343' => 'Hem och Trädgård > Hem > Möbler',
    '677' => 'Hem och Trädgård > Hem > Pellets',
    '1254' => 'Hem och Trädgård > Hem > Solpaneler',
    '457' => 'Hem och Trädgård > Hem > Sovrum',
    '628' => 'Hem och Trädgård > Hem > Städutrustning',
    '1250' => 'Hem och Trädgård > Hem > Sybehör',
    '684' => 'Hem och Trädgård > Hem > Textilier',
    '590' => 'Hem och Trädgård > Hem > Väderstationer',

    '620' => 'Hem och Trädgård > Mat och Dryck > Mat och Dryck',

    '1296' => 'Hem och Trädgård > Trädgård > Friggebodar',
    '335' => 'Hem och Trädgård > Trädgård > Grillar',
    '659' => 'Hem och Trädgård > Trädgård > Grilltillbehör',
    '119' => 'Hem och Trädgård > Trädgård > Gräsklippare',
    '638' => 'Hem och Trädgård > Trädgård > Högtryckstvättar',
    '120' => 'Hem och Trädgård > Trädgård > Trädgårdsmaskiner',
    '347' => 'Hem och Trädgård > Trädgård > Trädgårdstillbehör',
    '348' => 'Hem och Trädgård > Trädgård > Trädgårdsverktyg',
    '519' => 'Hem och Trädgård > Trädgård > Trädgårdsväxter',
    '499' => 'Hem och Trädgård > Trädgård > Utemöbler',
    '1290' => 'Hem och Trädgård > Trädgård > Utomhusaktivitet',
    '541' => 'Hem och Trädgård > Trädgård > Utomhusbad',


    '90' => 'Hushållsapparater > Bakmaskiner',
    '84' => 'Hushållsapparater > Blenders',
    '88' => 'Hushållsapparater > Bordsgrillar och Smörgåsgrillar',
    '69' => 'Hushållsapparater > Brödrostar',
    '104' => 'Hushållsapparater > Elvispar',
    '81' => 'Hushållsapparater > Fritöser',
    '250' => 'Hushållsapparater > Glassmaskiner',
    '401' => 'Hushållsapparater > Inomhusfläktar',
    '479' => 'Hushållsapparater > Ismaskiner',
    '83' => 'Hushållsapparater > Juicepressar',
    '82' => 'Hushållsapparater > Kaffebryggare',
    '621' => 'Hushållsapparater > Kaffekvarnar',
    '1312' => 'Hushållsapparater > Kolsyremaskiner',
    '1244' => 'Hushållsapparater > Köksassistenter',
    '461' => 'Hushållsapparater > Kökstillbehör',
    '87' => 'Hushållsapparater > Luftfuktare och Avfuktare',
    '453' => 'Hushållsapparater > Luftkonditionering',
    '478' => 'Hushållsapparater > Luftrenare',
    '103' => 'Hushållsapparater > Matberedare',
    '85' => 'Hushållsapparater > Stavmixers',
    '80' => 'Hushållsapparater > Strykjärn',
    '550' => 'Hushållsapparater > Symaskiner',
    '68' => 'Hushållsapparater > Vattenkokare',
    '333' => 'Hushållsapparater > Våffeljärn',
    '248' => 'Hushållsapparater > Vågar',
    '89' => 'Hushållsapparater > Ång- och Riskokare',


    '349' => 'Kläder och Accessoarer > Accessoarer > Klockor',
    '1294' => 'Kläder och Accessoarer > Accessoarer > Paraplyer',
    '1200' => 'Kläder och Accessoarer > Accessoarer > Plånböcker',
    '338' => 'Kläder och Accessoarer > Accessoarer > Resväskor',
    '315' => 'Kläder och Accessoarer > Accessoarer > Smycken',
    '58' => 'Kläder och Accessoarer > Accessoarer > Solglasögon',
    '1196' => 'Kläder och Accessoarer > Accessoarer > Väskor',
    
    '734' => 'Kläder och Accessoarer > Kläder > Arbetskläder och Skydd',
    '359' => 'Kläder och Accessoarer > Kläder > Barnkläder',
    '336' => 'Kläder och Accessoarer > Kläder > Damkläder',
    '358' => 'Kläder och Accessoarer > Kläder > Damunderkläder',
    '360' => 'Kläder och Accessoarer > Kläder > Herrkläder',

    '1194' => 'Kläder och Accessoarer > Skor > Barnskor',
    '337' => 'Kläder och Accessoarer > Skor > Damskor',
    '1192' => 'Kläder och Accessoarer > Skor > Herrskor',

    '505' => 'Kontorsutrustning > Dokumentförstörare',
    '175' => 'Kontorsutrustning > Faxmaskiner',
    '483' => 'Kontorsutrustning > Kontorsmaterial',
    '277' => 'Kontorsutrustning > Kopiatorer',
    '452' => 'Kontorsutrustning > Miniräknare',

    '229' => 'Ljud och Bild > Bild > Digitalboxar',
    '4' => 'Ljud och Bild > Bild > DVD och Blu-ray-spelare',
    '649' => 'Ljud och Bild > Bild > Mediacenter',
    '178' => 'Ljud och Bild > Bild > Projektordukar',
    '98' => 'Ljud och Bild > Bild > Projektorer',
    '198' => 'Ljud och Bild > Bild > Projektortillbehör',
    '2' => 'Ljud och Bild > Bild > TV',
    '236' => 'Ljud och Bild > Bild > TV-bänkar',
    '239' => 'Ljud och Bild > Bild > TV-tillbehör',
    '95' => 'Ljud och Bild > Bild > Universalfjärrkontroller',

    '6' => 'Ljud och Bild > Bärbart ljud > CD-freestyles',
    '687' => 'Ljud och Bild > Bärbart ljud > FM-sändare',
    '11' => 'Ljud och Bild > Bärbart ljud > MP3-spelare',
    '462' => 'Ljud och Bild > Bärbart ljud > MP3-spelartillbehör',

    '528' => 'Ljud och Bild > Ljud > Batterier och Laddare',
    '108' => 'Ljud och Bild > Ljud > CD-spelare',
    '1378' => 'Ljud och Bild > Ljud > DJ-Controllers',
    '728' => 'Ljud och Bild > Ljud > DJ-mixers',
    '513' => 'Ljud och Bild > Ljud > DJ-utrustning',
    '96' => 'Ljud och Bild > Ljud > Förstärkare och Receivers',
    '86' => 'Ljud och Bild > Ljud > Hemmabiopaket',
    '92' => 'Ljud och Bild > Ljud > Högtalare',
    '242' => 'Ljud och Bild > Ljud > Högtalartillbehör',
    '94' => 'Ljud och Bild > Ljud > Hörlurar och Headset',
    '176' => 'Ljud och Bild > Ljud > Mikrofoner',
    '737' => 'Ljud och Bild > Ljud > Mixerbord',
    '318' => 'Ljud och Bild > Ljud > Musikinstrument',
    '643' => 'Ljud och Bild > Ljud > Musiktillbehör',
    '317' => 'Ljud och Bild > Ljud > Radio',
    '231' => 'Ljud och Bild > Ljud > Skivspelare',
    '34' => 'Ljud och Bild > Ljud > Stereopaket',

    '738' => 'Ljud och Bild > Bas- och Gitarrförstärkare',
    '70' => 'Ljud och Bild > Prylar och Gadgets',
    '290' => 'Ljud och Bild > Trådlös ljud/bild',

    '1310' => 'Renovering och Bygg > Byggvaror > Dörrar',
    '710' => 'Renovering och Bygg > Byggvaror > Elartiklar',
    '1308' => 'Renovering och Bygg > Byggvaror > Fönster',
    '1314' => 'Renovering och Bygg > Byggvaror > Garageportar',
    '1304' => 'Renovering och Bygg > Byggvaror > Golv',
    '1302' => 'Renovering och Bygg > Byggvaror > Kakel och Klinker',
    '724' => 'Renovering och Bygg > Byggvaror > Köksinredning',
    '1298' => 'Renovering och Bygg > Byggvaror > Mur och Marksten',
    '1300' => 'Renovering och Bygg > Byggvaror > Målarfärg',
    '1306' => 'Renovering och Bygg > Byggvaror > Tapeter',
    '709' => 'Renovering och Bygg > Byggvaror > Övriga byggvaror',


    '1258' => 'Renovering och Bygg > Verktyg > Borrmaskiner och Skruvdragare',
    '346' => 'Renovering och Bygg > Verktyg > Byggtillbehör',
    '1260' => 'Renovering och Bygg > Verktyg > Elsågar',
    '1322' => 'Renovering och Bygg > Verktyg > Elverktygstillbehör',
    '344' => 'Renovering och Bygg > Verktyg > Handverktyg',
    '1262' => 'Renovering och Bygg > Verktyg > Skruvdragare',
    '1264' => 'Renovering och Bygg > Verktyg > Slipmaskiner',
    '345' => 'Renovering och Bygg > Verktyg > Övriga elverktyg',

    '241' => 'Renovering och Bygg > VVS > Element',
    '477' => 'Renovering och Bygg > VVS > Varmvattenberedare',
    '726' => 'Renovering och Bygg > VVS > VVS Badrum',
    '725' => 'Renovering och Bygg > VVS > VVS Kök',
    '1256' => 'Renovering och Bygg > VVS > Värmepannor',
    '693' => 'Renovering och Bygg > VVS > Värmepumpar',

    '254' => 'Skönhet och Hälsa > Hälsa > Första hjälpen',
    '566' => 'Skönhet och Hälsa > Hälsa > Hälsokost och Kosttillskott',
    '340' => 'Skönhet och Hälsa > Hälsa > Hälsovårdsprodukter',
    '1180' => 'Skönhet och Hälsa > Hälsa > Receptfria läkemedel',


    '489' => 'Skönhet och Hälsa > Kontaktlinser och Glasögon  > Glasögon',
    '334' => 'Skönhet och Hälsa > Kontaktlinser och Glasögon  > Kontaktlinser',
    '1240' => 'Skönhet och Hälsa > Kontaktlinser och Glasögon  > Kontaktlinstillbehör',

    '573' => 'Skönhet och Hälsa > Kroppsvård och Hygien  > Eltandborstar ',
    '253' => 'Skönhet och Hälsa > Kroppsvård och Hygien  > Hudvård ',
    '341' => 'Skönhet och Hälsa > Kroppsvård och Hygien  > Hygienartiklar ',
    '507' => 'Skönhet och Hälsa > Kroppsvård och Hygien  > Hårvård ',
    '742' => 'Skönhet och Hälsa > Kroppsvård och Hygien  > Intim och Sex ',
    '593' => 'Skönhet och Hälsa > Kroppsvård och Hygien  > Rakningstillbehör ',
    '71' => 'Skönhet och Hälsa > Kroppsvård och Hygien  > Tandvård ',
    '510' => 'Skönhet och Hälsa > Kroppsvård och Hygien  > Ögonvård ',

    '55' => 'Skönhet och Hälsa > Parfym > Damparfymer',
    '509' => 'Skönhet och Hälsa > Parfym > Herrparfymer',

    '65' => 'Skönhet och Hälsa > Skönhet > Hår- och Skäggtrimmers',
    '64' => 'Skönhet och Hälsa > Skönhet > Hårstylers',
    '60' => 'Skönhet och Hälsa > Skönhet > Hårtorkar',
    '76' => 'Skönhet och Hälsa > Skönhet > Ladyshaves',
    '508' => 'Skönhet och Hälsa > Skönhet > Nagelvård',
    '67' => 'Skönhet och Hälsa > Skönhet > Rakapparater',

    '252' => 'Skönhet och Hälsa > Smink',

    '395' => 'Special > Annonsmarknad',
    '1332' => 'Special > Dagens rabattkoder',
    '1248' => 'Special > Restauranger',

    '658' => 'Spelkonsoler och Spel > Begagnade spel',
    '701' => 'Spelkonsoler och Spel > Nedladdningsbara spel för PC',
    '131' => 'Spelkonsoler och Spel > Spel för Gameboy Advance',
    '137' => 'Spelkonsoler och Spel > Spel för Mac',
    '1328' => 'Spelkonsoler och Spel > Spel för Nintendo 3DS',
    '464' => 'Spelkonsoler och Spel > Spel för Nintendo DS',
    '653' => 'Spelkonsoler och Spel > Spel för Nintendo Wii',
    '1346' => 'Spelkonsoler och Spel > Spel för Nintendo Wii U',
    '129' => 'Spelkonsoler och Spel > Spel för PC',
    '136' => 'Spelkonsoler och Spel > Spel för Playstation',
    '135' => 'Spelkonsoler och Spel > Spel för Playstation 2',
    '624' => 'Spelkonsoler och Spel > Spel för Playstation 3',
    '128' => 'Spelkonsoler och Spel > Spel för Playstation Portable',
    '1348' => 'Spelkonsoler och Spel > Spel för Playstation Vita',
    '138' => 'Spelkonsoler och Spel > Spel för Xbox',
    '542' => 'Spelkonsoler och Spel > Spel för Xbox 360',
    '52' => 'Spelkonsoler och Spel > Spelkonsoler',
    '196' => 'Spelkonsoler och Spel > Spelkonsoltillbehör',
    '165' => 'Spelkonsoler och Spel > Spelkontroller',

    '215' => 'Sport och Fritid > Golf > Drivers',
    '216' => 'Sport och Fritid > Golf > Fairway woods',
    '292' => 'Sport och Fritid > Golf > Golfbagar',
    '221' => 'Sport och Fritid > Golf > Golfbollar',
    '402' => 'Sport och Fritid > Golf > Golfhandskar',
    '487' => 'Sport och Fritid > Golf > Golfkläder',
    '225' => 'Sport och Fritid > Golf > Golfset',
    '578' => 'Sport och Fritid > Golf > Golfskaft',
    '291' => 'Sport och Fritid > Golf > Golfskor',
    '226' => 'Sport och Fritid > Golf > Golftillbehör',
    '482' => 'Sport och Fritid > Golf > Golfträningsredskap',
    '293' => 'Sport och Fritid > Golf > Golfvagnar',
    '481' => 'Sport och Fritid > Golf > Golfytterkläder',
    '222' => 'Sport och Fritid > Golf > Hybridklubbor',
    '218' => 'Sport och Fritid > Golf > Järnklubbor',
    '220' => 'Sport och Fritid > Golf > Putters',
    '219' => 'Sport och Fritid > Golf > Wedgar',

    '1412' => 'Sport och Fritid  > Alpin skidåkning',
    '306' => 'Sport och Fritid  > Alpinutrustning',
    '1288' => 'Sport och Fritid  > Badminton',
    '1220' => 'Sport och Fritid  > Basket',
    '1282' => 'Sport och Fritid  > Biljard',
    '1216' => 'Sport och Fritid  > Boxning och kampsport',
    '501' => 'Sport och Fritid  > Camping och Friluftsliv',
    '692' => 'Sport och Fritid  > Cykeltillbehör',
    '356' => 'Sport och Fritid  > Cyklar',
    '647' => 'Sport och Fritid  > Fiske',
    '1206' => 'Sport och Fritid  > Fotboll',
    '1208' => 'Sport och Fritid  > Handboll',
    '1212' => 'Sport och Fritid  > Innebandy',
    '1210' => 'Sport och Fritid  > Ishockey',
    '648' => 'Sport och Fritid  > Jakt',
    '329' => 'Sport och Fritid  > Kikare',
    '1226' => 'Sport och Fritid  > Klättring',
    '1234' => 'Sport och Fritid  > Luftvapen',
    '307' => 'Sport och Fritid  > Långfärdsskridskor',
    '308' => 'Sport och Fritid  > Längdskidåkning',
    '1230' => 'Sport och Fritid  > Löpning',
    '1232' => 'Sport och Fritid  > Paintball',
    '1286' => 'Sport och Fritid  > Pingis',
    '520' => 'Sport och Fritid  > Pokertillbehör',
    '1218' => 'Sport och Fritid  > Ridsport',
    '1224' => 'Sport och Fritid  > Rullskridskor',
    '1198' => 'Sport och Fritid  > Skateboard',
    '309' => 'Sport och Fritid  > Snowboard',
    '1370' => 'Sport och Fritid  > Sportklockor',
    '491' => 'Sport och Fritid  > Sportsouvenirer',
    '1214' => 'Sport och Fritid  > Squash',
    '1214' => 'Sport och Fritid  > Tennis',
    '1228' => 'Sport och Fritid  > Träningsmaskiner och vikter',
    '1204' => 'Sport och Fritid  > Vattensport',
    '1222' => 'Sport och Fritid  > Yoga och Pilates',
    '353' => 'Sport och Fritid  > Övrig sportutrustning',
    '354' => 'Sport och Fritid  > Övriga sportkläder',

    '10' => 'Telefoni > Fasta telefoner',
    '1' => 'Telefoni > Mobiltelefoner',
    '7' => 'Telefoni > Mobiltelefoner med abonnemang',
    '42' => 'Telefoni > Mobiltelefoner med kontantkort',
    '199' => 'Telefoni > Mobiltelefontillbehör',
    '1364' => 'Telefoni > Solcellsladdare',
    '205' => 'Telefoni > Tillbehör fasta telefoner',

    '802' => 'Underhållning > Böcker',
    '803' => 'Underhållning > CD-skivor',
    '801' => 'Underhållning > Filmer',
    '506' => 'Underhållning > Tidningar',

    '19' => 'Vitvaror > Dammsugare',
    '212' => 'Vitvaror > Dammsugartillbehör',
    '13' => 'Vitvaror > Diskmaskiner',
    '15' => 'Vitvaror > Frysar',
    '105' => 'Vitvaror > Inbyggnadsugnar',
    '16' => 'Vitvaror > Kylfrysar',
    '18' => 'Vitvaror > Kylskåp',
    '21' => 'Vitvaror > Köksfläktar',
    '3' => 'Vitvaror > Mikrovågsugnar',
    '101' => 'Vitvaror > Spisar',
    '106' => 'Vitvaror > Spishällar',
    '740' => 'Vitvaror > Torkskåp',
    '17' => 'Vitvaror > Torktumlare',
    '14' => 'Vitvaror > Tvättmaskiner',
    '480' => 'Vitvaror > Vinkylskåp'
);
$wc_pricefiles_globals['wc_pricefiles_categories'] = $wc_pricefiles_categories;

