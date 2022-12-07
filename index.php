<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Улучшенная версия популярного бюджетного дистиллятора Народный. Дефлегматор, сухопарник + джин корзина. Официальный сайт производителя. Доставка по РФ. Гарантия 1 г. Консультации и помощь в подборе.");
$APPLICATION->SetPageProperty("keywords", "феникс народный, самогонный аппарат народный, дистиллятор народный");
$APPLICATION->SetPageProperty("title", "Феникс \"Народный\" - самогонный аппарат с сухопарником от производителя");
$APPLICATION->SetTitle("Феникс Народный");
?>
<main>
    <?
    $APPLICATION->IncludeComponent(
        "dj:dj.landing.section",
        "nr-main",
        array(
            "COMPONENT_TEMPLATE" => "nr-main",
            "MAIN_IMAGE" => "/upload/medialibrary/3bc/bis0munjckovyvtkp9asblcu3ix0gxeb/Народный_новый_20л 1.png",
            "BACKGROUND" => "/upload/medialibrary/1cb/0cu5qoy6g0ti473ihx9aqa9ti6qb29ag/minimalistic-modern-white-kitchen-interior-with-ki-WHQZYM5-05 1.png",
            "BACKGROUND_MOBILE" => "/upload/medialibrary/063/hm4m36w9ot8rris2gcq9ka502ynct0q1/Сайт-Фото-Мобил-01 1.png"
        ),
        false
    );?>
    <?$APPLICATION->IncludeComponent(
        "dj:dj.landing.section",
        "nr-parts",
        array(
            "COMPONENT_TEMPLATE" => "nr-parts",
            "IMAGE_CUBE" => "/upload/medialibrary/cdc/23u7uzvhvold8jnpnw4i5q511y3clybj/package_cube.png",
            "IMAGE_PARTS" => "/upload/medialibrary/cdd/q385i4062n59u6rhtby3jwh4n6gu2lqi/package_complect.png",
            "IMAGE_PRESENTS" => "/upload/medialibrary/e5c/mkbjxa99f4as7tzt06bz8cqmxjhhg0yf/package_presents.png",
            "IMAGE_THERMOMETER" => "/upload/medialibrary/600/vsqauaqawu7ad8pkgh5nk6i5pr6xtqt9/Термометр_белый_4см (2) 1.png"
        ),
        false
    );?>
    <?
    $APPLICATION->IncludeComponent(
        "dj:dj.landing.section",
        "nr-sale",
        array(
            "COMPONENT_TEMPLATE" => "nr-sale",
            "IMAGE" => "/upload/medialibrary/839/mauv8s14qv2gn423gb87dbhh9zifu3ij/Народный_NEW__с_джин_корзиной_с_тэном_20л 1.png"
        ),
        false
    );?>
    <?$APPLICATION->IncludeComponent(
        "dj:dj.landing.section",
        "nr-presents",
        array(), false)
    ?>
    <?
    $APPLICATION->IncludeComponent(
        "dj:dj.landing.section",
        "nr-poll",
        array(
            "COMPONENT_TEMPLATE" => "nr-poll",
        ),
        false
    );?>
    <?$APPLICATION->IncludeComponent(
	"dj:dj.landing.section", 
	"nr-aroma", 
	array(
		"COMPONENT_TEMPLATE" => "nr-aroma",
		"IMAGE_1" => "/upload/medialibrary/909/sz5wdw8oeh7nb9aulq8e13aw6jrre8az/mask-bank.png",
		"IMAGE_2" => "/upload/medialibrary/04b/nphqm64q97zlitvwlipz687psmyp2cyf/mask-suh.png",
		"IMAGE_3" => "/upload/medialibrary/d16/vinbjbpw292zmo3wfdrzuj2gtiuxh8p3/Mask-3.png",
		"IMAGE_4" => "/upload/medialibrary/34f/sclhzom0j7m14w0n67iwbj036o9b97vj/Mask-4.png",
		"IMAGE_5" => "/upload/medialibrary/7fb/xcf3rvrao2pgbk7ljb577jw0wp4uln69/Mask-5.png",
		"IMAGE_6" => "/upload/medialibrary/084/zemnlpx1pyg5z2yqbstbax8lqim2fid1/Mask-6.png"
	),
	false
);?>
    <?$APPLICATION->IncludeComponent(
        "dj:dj.landing.section",
        "nr-purification",
        array(
            "COMPONENT_TEMPLATE" => "nr-purification",
            "IMAGE_1" => "/upload/medialibrary/524/03t0b7x3ctyyt4r0y9zho1jfsvwsv61u/pur_suhoparnik.png",
            "IMAGE_2" => "/upload/medialibrary/482/56vfyqlf9datcz92o2cwgtz5kg97g6db/pur_fridge.png",
            "IMAGE_3" => "/upload/medialibrary/3c7/18shdodp9rlr05lhcr29i6rplqu2jcwc/pur_defleg.png",
            "IMAGE_4" => "/upload/medialibrary/4e3/pspuxo7uun90iz8as9rj9ugm38b9qyme/pur_rpn.png",
            "IMAGE_MAIN" => "/upload/medialibrary/929/wufy5b6sa5psiqtxgnj7gail8mhjv4qt/Народный_NEW__с_джин_корзиной_с_тэном_20л-Дефлегматор 1.png"
        ),
        false
    );?>
    <?$APPLICATION->IncludeComponent(
        "dj:dj.landing.section",
        "nr-cube",
        array(
            "COMPONENT_TEMPLATE" => "nr-cube",
            "IMAGE_1" => "/upload/medialibrary/47d/8vmau9e7yypqmkt151dm056z3zxavede/Царга.png",
            "IMAGE_2" => "/upload/medialibrary/7a0/klmqocgw6yh92o1qapiji0r7yk08bw72/Барашки.png",
            "IMAGE_3" => "/upload/medialibrary/e73/jhwllp07vqnkoq0dis5d07tp32t482l8/Кран.png",
            "IMAGE_4" => "/upload/medialibrary/227/tely6o4sz0hsfe4zcvq4cl0wa7yfptut/Клапан.png",
            "IMAGE_5" => "/upload/medialibrary/034/i6a9dodq0zixe37j1zd7prxwjtyvypwd/ТЭН.png",
            "IMAGE_6" => "/upload/medialibrary/d79/6ru0c2axxh3kl1ivsxoovbc0fxklaa8c/Дно.png",
            "IMAGE_MAIN" => "/upload/medialibrary/33c/gv6dz2b7yg8hoynev58gbj0gr22gntbc/Народный_NEW_с_тэном_30л-Фланец 1.png"
        ),
        false
    );?>
    <?$APPLICATION->IncludeComponent(
	"dj:dj.landing.section", 
	"nr-receipts", 
	array(
		"COMPONENT_TEMPLATE" => "nr-receipts",
		"IMAGE_CONJAC" => "/upload/medialibrary/065/z33xtf6215x7yok7d3engahevu3dm1l5/receipts_konjak.png",
		"IMAGE_ALCOHOL" => "/upload/medialibrary/afb/5lecuq3alqwioydo25qerauudzml43jz/receipt_vodka.png",
		"IMAGE_CALVADOS" => "/upload/medialibrary/7a2/j3kbk4s5cpvzgftpll0n7agy35bocmb7/receipt_calvados.png",
		"IMAGE_WHISKY" => "/upload/medialibrary/149/voxzi85uhame7z4d3k3jsvm4vmymtcyn/receipt_whisky.png",
		"IMAGE_RECEIPTS" => "/upload/medialibrary/0de/zqj5w0kdge6vc2r3zf0sjojrgquxera2/receipts.png"
	),
	false
);?>
    <?$APPLICATION->IncludeComponent(
        "dj:dj.landing.section",
        "tinkoff",
        array(
            "COMPONENT_TEMPLATE" => "tinkoff",
        ),
        false
    );?>
    <?$APPLICATION->IncludeComponent(
        "dj:dj.landing.section",
        "nr-volumes",
        array(
            "COMPONENT_TEMPLATE" => "nr-volumes",
            "IMAGE_20VOL" => "/upload/medialibrary/940/kkh2fhp0rjgc78v0qvhiw47vr2blmopv/Народный_новый_20л 2.png",
            "IMAGE_30VOL" => "/upload/medialibrary/2ad/9jqidq7o8qitgz4ac4ubao9m8udd9pa9/Народный_новый_30л 1.png"
        ),
        false
    );?>
    <?$APPLICATION->IncludeComponent(
        "dj:dj.landing.section",
        "nr-package",
        array(
            "COMPONENT_TEMPLATE" => "nr-package",
        ),
        false
    );?>
    <?$APPLICATION->IncludeComponent(
	"dj:dj.landing.section", 
	"nr-modern", 
	array(
		"COMPONENT_TEMPLATE" => "nr-modern",
		"IMAGE_DIST" => "/upload/medialibrary/050/i4oege3pv1adze1ajo9ptnuto8xtnqaa/Народный_NEW__с_джин_корзиной_без_тэна_20л 1.png",
		"IMAGE_DIST_KNOT" => "/upload/medialibrary/8b7/8ui1v7n1pgx1ttpksyr6dq35cj0nrp3x/Народный_NEW__с_джин_корзиной_без_тэна_20л-Царга-Узел-Отбора 1.png"
	),
	false
);?>
    <?$APPLICATION->IncludeComponent(
        "dj:dj.landing.section",
        "nr-usage",
        array(
            "COMPONENT_TEMPLATE" => "nr-usage",
            "IMAGE_DIST" => "/upload/medialibrary/e9b/22to37y9pxfyftl272kpp49mu4bbar9v/Народный_NEW_со_шлангами_с_тэном_30л 1.png"
        ),
        false
    );?>
    <?$APPLICATION->IncludeComponent(
	"dj:dj.landing.section", 
	"nr-compact", 
	array(
		"COMPONENT_TEMPLATE" => "nr-compact",
		"IMAGE" => "/upload/medialibrary/65b/p5t9k10fzypdap6bl7ch8p9o6zhgips6/kitchen.png"
	),
	false
);?>

    <?
    $APPLICATION->IncludeComponent(
        "dj:dj.landing.section",
        "nr-features",
        array(
            "COMPONENT_TEMPLATE" => "nr-features",
            "IMAGE_1" => "/upload/medialibrary/438/prj05r0qu9sy4gc8dxgm9a5v4ir8ckqj/steel.png",
            "IMAGE_2" => "/upload/medialibrary/b77/6j12ha0docssljci6wmr86iqodrgdcpq/warranty.png",
            "IMAGE_3" => "/upload/medialibrary/79c/rgnqsqqcuntzoh8z4rkijg33o010secv/time.png",
            "IMAGE_4" => "/upload/medialibrary/1d6/vbfjkty94hjxx3z1khch013s43oaeqeb/money.png"
        ),
        false
    );?>
    <?$APPLICATION->IncludeComponent(
	"dj:dj.landing.section", 
	"nr-message", 
	array(
		"COMPONENT_TEMPLATE" => "nr-message",
		"IMAGE" => "/upload/medialibrary/949/b36jo179oemsxo55r3apmg74va51ewva/Фотопривязка-Комп-Планшет 1.png",
		"IMAGE_POPUP" => "/upload/medialibrary/1a1/hf1xnocgckjh3yslpru5fngofxcg3yet/Группа всплывающие.png"
	),
	false
);?>
    <?$APPLICATION->IncludeComponent(
        "dj:dj.landing.section",
        "nr-shipment",
        array(
            "COMPONENT_TEMPLATE" => "nr-shipment",
            "IMAGE" => "/upload/medialibrary/2bc/a0eai5rizkkx8f30atu6w6pusll61ut0/shipment.png",
            "LOGO_SDEK" => "/upload/medialibrary/26d/97srwpql3d41wfpxc93s4duusthlz341/SDEK.png",
            "LOGO_POCHTA" => "/upload/medialibrary/9c6/5npw2uk0bfzt2l4s39vroc3320qf03qh/Pochta.png"
        ),
        false
    );?>
    <?$APPLICATION->IncludeComponent(
        "dj:dj.landing.section",
        "nr-additions",
        array(
            "COMPONENT_TEMPLATE" => "nr-additions",
        ),
        false
    );?>
    <?$APPLICATION->IncludeComponent(
        "dj:dj.landing.section",
        "nr-order",
        array(
            "COMPONENT_TEMPLATE" => "nr-order",
        ),
        false
    );?>
    <?
    $APPLICATION->IncludeComponent(
        "dj:dj.landing.section",
        "nr-videos",
        array(
            "COMPONENT_TEMPLATE" => "nr-videos",
        ),
        false
    );?>
</main>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
