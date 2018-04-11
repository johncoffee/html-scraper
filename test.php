<?php
echo <<<BALLS


<!DOCTYPE html>
<!--[if IEMobile 7]><html class="iem7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js ie ie7" lang="da"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js ie ie8" lang="da"><![endif]-->
<!--[if (IE 9)&!(IEMobile)]><html class="no-js ie ie9" lang="da"><![endif]-->
<!--[if (gt IE 9)|(gt IEMobile 7)|!(IE)]><!--><html class="no-js" lang="da"><!--<![endif]-->
  <head>
    <title>Nyheder om forskning og videnskab</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="apple-touch-icon" sizes="114x114" href="/profiles/videnskab/themes/custom/videnskab_theme/images/apple-touch-icon-114x114.png" />
<link rel="apple-touch-icon" sizes="72x72" href="/profiles/videnskab/themes/custom/videnskab_theme/images/apple-touch-icon-72x72.png" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="apple-touch-icon" sizes="144x144" href="/profiles/videnskab/themes/custom/videnskab_theme/images/apple-touch-icon-144x144.png" />
<meta property="fb:pages" content="127538210589588" />
<link rel="shortcut icon" href="https://videnskab.dk/profiles/videnskab/themes/custom/videnskab_theme/favicon.ico" type="image/vnd.microsoft.icon" />
<link rel="apple-touch-icon" href="/profiles/videnskab/themes/custom/videnskab_theme/images/apple-touch-icon.png" />
    <link type="text/css" rel="stylesheet" href="https://videnskab.dk/sites/default/files/css/css_VNKUxbsqKIjvxvdhGJrbPp1UgkTTi0W4AocVzDpKDi4.css" media="all" />
<link type="text/css" rel="stylesheet" href="https://videnskab.dk/sites/default/files/css/css_07oZGJqIiF-VlJjJAAwVM8aoeQGWLDqwDZdoLLhhOqA.css" media="all" />
<link type="text/css" rel="stylesheet" href="https://videnskab.dk/sites/default/files/css/css_OXZDvS_OmnHYv26QbmsVy4Ufi9AYVVg0x6UgtPSaq4Q.css" media="all" />
<link type="text/css" rel="stylesheet" href="https://videnskab.dk/sites/default/files/css/css_EnPFlaUtxvdjga4JJJdEDRGu7jQxmUYz5-sAroruZw0.css" media="print" />

    <script>
      (function() {
        var gads = document.createElement('script');
        gads.async = true;
        gads.type = 'text/javascript';
        gads.src = '//www.googletagservices.com/tag/js/gpt.js';
        var node = document.getElementsByTagName('script')[0];
        node.parentNode.insertBefore(gads, node);
      })();
    </script>

    <script>
        var googletag = googletag || {};
        googletag.cmd = googletag.cmd || [];
    </script>

  <script type='text/javascript'>

    function checkAddBlocker() {
        // check add block enabled
      var adBlockEnabled = false;
      var testAd = document.createElement('div');
      testAd.innerHTML = '&nbsp;';
      testAd.className = 'adsbox';
      document.body.appendChild(testAd);
      window.setTimeout(function() {
        if (testAd.offsetHeight === 0) {
          adBlockEnabled = true;
        }
        testAd.remove();
        dataLayer.push({ 'adBlockEnabled' : adBlockEnabled})
      }, 100);
    }

    function addLoadEventListener() {
        // Add event listener for when banners are loaded.
      googletag.pubads().addEventListener('slotRenderEnded', function(event) {

        var containsAd = !event.isEmpty;

        var elementId = event.slot.getSlotElementId()

        console.log('Adunit path: ' + event.slot.C + ' is rendered: ' + containsAd);

        var obj = {};
        obj[event.slot.C] =  {
          'containsAd' : containsAd,
          'advertiserId' : event.advertiserId,
          'campaignId' : event.campaignId
        }
        dataLayer.push(obj)

      });
    }

  </script>
  <script type='text/javascript'>
    var slots = []


        slots.push({ 'path' : '/33147440/DFP_FRONTMEDIA_VIDENSKAB_930X180_FORSIDE', 'identifier' : 'div-gpt-ad-taxonomy/term/111-10', 'sizes' : [[930,180],[728,90]], 'isMobile' : false})


        slots.push({ 'path' : '/33147440/DFP_FRONTMEDIA_VIDENSKAB_930X180_TOP', 'identifier' : 'div-gpt-ad-taxonomy/term/111-0', 'sizes' : [[930,180],[728,90]], 'isMobile' : false})


        slots.push({ 'path' : '/33147440/DFP_FRONTMEDIA_VIDENSKAB_160X600_LEFT', 'identifier' : 'div-gpt-ad-taxonomy/term/111-1', 'sizes' : [160,600], 'isMobile' : false})


        slots.push({ 'path' : '/33147440/DFP_FRONTMEDIA_VIDENSKAB_160X600_LEFT-STICKY', 'identifier' : 'div-gpt-ad-taxonomy/term/111-2', 'sizes' : [160,600], 'isMobile' : false})


        slots.push({ 'path' : '/33147440/DFP_FRONTMEDIA_VIDENSKAB_160X600_RIGHT', 'identifier' : 'div-gpt-ad-taxonomy/term/111-3', 'sizes' : [160,600], 'isMobile' : false})


        slots.push({ 'path' : '/33147440/DFP_FRONTMEDIA_VIDENSKAB_160X600_RIGHT-STICKY', 'identifier' : 'div-gpt-ad-taxonomy/term/111-4', 'sizes' : [160,600], 'isMobile' : false})
      </script>
   <script type='text/javascript'>
   var ga_slots = [];

    googletag.cmd.push(function() {
      var isMobile = window.matchMedia('only screen and (max-width: 980px)').matches;
      for (i = 0; i < slots.length; i++) {
        var path = slots[i]['path'];
        var sizes = slots[i]['sizes'];
        var identifier = slots[i]['identifier'];

        // Only define slots for the relevant banners (mobile vs. desktop)
        if(isMobile == slots[i]['isMobile']) {
          var ga_slot = googletag.defineSlot(path,sizes,identifier).addService(googletag.pubads());
          ga_slots.push(ga_slot);
        } else {
          ga_slots.push({});
        }
      }



      googletag.pubads().enableSingleRequest();
      googletag.pubads().disableInitialLoad(); // We load the ads with refresh()
      //googletag.pubads().collapseEmptyDivs();

      checkAddBlocker()
      addLoadEventListener()

      googletag.enableServices();

      // Call display when the page is loaded.
      window.addEventListener('load', function() {
        // Tell google to display slots
        for (i = 0; i < slots.length; i++) {
          googletag.cmd.push(function () {
            googletag.display(slots[i]['identifier']);
          });
        }

        // Wait before we refresh the ads.
        setTimeout(function() {
          for (i = 0; i < slots.length; i++) {
            googletag.cmd.push(function () {
              googletag.pubads().refresh([ga_slots[i]]);
            });
          }
        }, 100);
      }, false);
    });
  </script>
    <!--[if lt IE 9]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
    <![endif]-->
  </head>
  <body class="front page-taxonomy-term" ><noscript><img src="http://videnskab.tns-gallup.dk/j0=,,,;+,cp=videnskab/videnskab+url=https://videnskab.dk/;;;" alt=""/></noscript>
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-WTWCDT" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script type="text/javascript">(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0];var j=d.createElement(s);var dl=l!='dataLayer'?'&l='+l:'';j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;j.type='text/javascript';j.async=true;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-WTWCDT');</script>
<!-- End Google Tag Manager -->
        <div class="page-wrapper">

      <div role="banner" class="marketing page-wrapper__header">
      <div class="inner">






<div class="banner top" id="div-gpt-ad-taxonomy/term/111-0" style="width:930px;height:180px;margin:0 auto;">
    <!--<script type='text/javascript'>
        //googletag.cmd.push(function () {
        //    googletag.display('div-gpt-ad-taxonomy/term/111-0');
        //});
    </script> -->
</div>


<div class="banner left" id="div-gpt-ad-taxonomy/term/111-1" style="width:160px;height:600px;margin:0 auto;">
    <!--<script type='text/javascript'>
        //googletag.cmd.push(function () {
        //    googletag.display('div-gpt-ad-taxonomy/term/111-1');
        //});
    </script> -->
</div>


<div class="banner left sticky" id="div-gpt-ad-taxonomy/term/111-2" style="width:160px;height:600px;margin:0 auto;">
    <!--<script type='text/javascript'>
        //googletag.cmd.push(function () {
        //    googletag.display('div-gpt-ad-taxonomy/term/111-2');
        //});
    </script> -->
</div>


<div class="banner right" id="div-gpt-ad-taxonomy/term/111-3" style="width:160px;height:600px;margin:0 auto;">
    <!--<script type='text/javascript'>
        //googletag.cmd.push(function () {
        //    googletag.display('div-gpt-ad-taxonomy/term/111-3');
        //});
    </script> -->
</div>


<div class="banner right sticky" id="div-gpt-ad-taxonomy/term/111-4" style="width:160px;height:600px;margin:0 auto;">
    <!--<script type='text/javascript'>
        //googletag.cmd.push(function () {
        //    googletag.display('div-gpt-ad-taxonomy/term/111-4');
        //});
    </script> -->
</div>




        </div>
      </div>
    </divs>

      <header role="banner" class="header page-wrapper__header">
      <div class="inner">

<div class="branding-block">




  <div id="header">
  <div class="section clearfix">
    <div id="logo-title">

              <a href="/" title="Hjem" rel="home" id="logo"><img src="https://videnskab.dk/profiles/videnskab/themes/custom/videnskab_theme/logo.png" alt="Hjem" /></a>

      <div id="name-and-slogan">
                              <h1 id="site-name">
              <a href="/" title="Hjem" rel="home"><span>Videnskab.dk</span></a>
            </h1>

                  <div id="site-slogan"> </div>
              </div> <!-- /name-and-slogan -->
    </div> <!-- /logo-title -->

  </div> <!-- /section -->
</div> <!-- /header -->


  </div>

        <input class="mobile-menu-checkbox" type="checkbox" id="menu">
        <label class="mobile-menu-label" for="menu">Menu</label>
        <div class="bottom-line">

<div class="main-menu">




  <ul class="menu"><li class="first"><a href="/topic/krop-sundhed" title="">Krop &amp; Sundhed</a></li>
<li><a href="/topic/kultur-samfund" title="">Kultur &amp; Samfund</a></li>
<li><a href="/topic/naturvidenskab" title="">Naturvidenskab</a></li>
<li class="last"><a href="/topic/teknologi-innovation" title="">Teknologi &amp; Innovation</a></li>
</ul>

  </div>






  <div class="search-box-header">
  <span class="toggle-search"></span>
  <div class="overlay">
    <form action="/s" method="get">
      <label for="query">Søg</label>
      <input name="query" value="" placeholder="Indtast søgeord" />
      <input type="submit" value="Søg">
      <span class="close">Luk</span>
    </form>
  </div>
</div>




<div class="service-menu">




  <ul class="menu"><li class="first"><a href="http://videnskab.dk/skole" title="">For skoler</a></li>
<li><a href="/side/nyhedsbrev" title="">Nyhedsbrev</a></li>
<li class="last"><a href="/om" title="">Om Videnskab.dk</a></li>
</ul>

  </div>






  <ul class="social-media social-media--header">
    <li class="social-media__entry">
    <a target="_blank" class="social-media__link social-media__link--facebook" href="https://www.facebook.com/videnskabdk/?fref=ts">Facebook</a>
  </li>
    <li class="social-media__entry">
    <a target="_blank" class="social-media__link social-media__link--twitter" href="https://twitter.com/videnskabdk?lang=da">Twitter</a>
  </li>
  </ul>




<div class="selected-topics-menu">




  <ul class="menu"><li class="first"><a href="/forskerzonen" title="">ForskerZonen</a></li>
<li class="last"><a href="/topic/sporg-videnskaben" title="">Spørg Videnskaben</a></li>
</ul>

  </div>

        </div>
      </div>
    </header>

      <main role="main" class="main page-wrapper__body">
      <div class="inner">





  <div         class="page-wrapper frontpage frontpage--a clearfix">

	      <section class="frontpage-region frontpage-region--a">
									                <div class="frontpage-region--0 inner region two_thirds">






    <article  class="node node-article article-content--teaser article-content--teaser--a">
        <a class="article-content__image-link" href="/naturvidenskab/hvad-er-tid">

    <div class="field field-field-teaser-media">
    <div class="field-items">
          <div class="field-item even"><div id="file-120362" class="file file-image file-image-jpeg">
  <picture >
<!--[if IE 9]><video style="display: none;"><![endif]-->
<source srcset="https://videnskab.dk/sites/default/files/styles/article_teasers_desktop/public/article_media/tid-ur.jpg?itok=kU8bB7Sp&amp;timestamp=1523454231 1x" media="(min-width: 980px)" />
<source srcset="https://videnskab.dk/sites/default/files/styles/article_teasers_tablet/public/article_media/tid-ur.jpg?itok=XykNRba_&amp;timestamp=1523454231 1x" media="(min-width: 760px)" />
<source srcset="https://videnskab.dk/sites/default/files/styles/article_teasers_mobile/public/article_media/tid-ur.jpg?itok=fagpb8NJ&amp;timestamp=1523454231 1x" media="(min-width: 0px)" />
<!--[if IE 9]></video><![endif]-->
<img  src="https://videnskab.dk/sites/default/files/styles/article_teasers_mobile/public/article_media/tid-ur.jpg?itok=fagpb8NJ&amp;timestamp=1523454231" alt="" title="" />
</picture></div>
</div>
      </div>
</div>
  </a>

  <div class="article-content__sideline-wrapper">
    <div class="field field-field-topics article-content__topics">
    <div class="field-items">

      <div class="field-item even field-item-fysik"><a href="/topic/fysik">Fysik</a></div>

      <div class="field-item odd field-item-spoerg-videnskaben"><a href="/topic/sporg-videnskaben">Spørg Videnskaben</a></div>
      </div>
</div>
<div class="field field-field-teaser-title article-content__teaser-title">
    <div class="field-items">
          <div class="field-item even"><a href="/naturvidenskab/hvad-er-tid">Hvad er tid?</a></div>
      </div>
</div>
  </div>

</article>



                </div>
														                <div class="frontpage-region--1 inner region one_third">






    <article  class="node node-article article-content--teaser article-content--teaser--a">
        <a class="article-content__image-link" href="/krop-sundhed/et-godt-raad-hoering-paa-christiansborg-boer-ikke-goere-dig-bange-for-mobilstraaling">

    <div class="field field-field-teaser-media">
    <div class="field-items">
          <div class="field-item even"><div id="file-153060" class="file file-image file-image-jpeg">
  <picture  title="Kun usikre studier har antydet, at stråling fra mobiltelefoner kan være skadelig. Dog bør du begrænse tiden med mobilen oppe for øret og bruge headset, når du kan komme til det - for en sikkerheds skyld. (Foto: Shutterstock)">
<!--[if IE 9]><video style="display: none;"><![endif]-->
<source srcset="https://videnskab.dk/sites/default/files/styles/article_teasers_desktop/public/article_media/mobilstraaling_fare_kraeft_forskning_hoering.jpg?itok=TtbcD2MW&amp;timestamp=1523455969 1x" media="(min-width: 980px)" />
<source srcset="https://videnskab.dk/sites/default/files/styles/article_teasers_tablet/public/article_media/mobilstraaling_fare_kraeft_forskning_hoering.jpg?itok=WhAr1MJH&amp;timestamp=1523455969 1x" media="(min-width: 760px)" />
<source srcset="https://videnskab.dk/sites/default/files/styles/article_teasers_mobile/public/article_media/mobilstraaling_fare_kraeft_forskning_hoering.jpg?itok=fjIcK9px&amp;timestamp=1523455969 1x" media="(min-width: 0px)" />
<!--[if IE 9]></video><![endif]-->
<img  src="https://videnskab.dk/sites/default/files/styles/article_teasers_mobile/public/article_media/mobilstraaling_fare_kraeft_forskning_hoering.jpg?itok=fjIcK9px&amp;timestamp=1523455969" alt="Mobilstråling, kræft, høring" title="Kun usikre studier har antydet, at stråling fra mobiltelefoner kan være skadelig. Dog bør du begrænse tiden med mobilen oppe for øret og bruge headset, når du kan komme til det - for en sikkerheds skyld. (Foto: Shutterstock)" />
</picture></div>
</div>
      </div>
</div>
  </a>

  <div class="article-content__sideline-wrapper">
    <div class="field field-field-topics article-content__topics">
    <div class="field-items">

      <div class="field-item even field-item-kraeft"><a href="/topic/kraeft">Kræft</a></div>
      </div>
</div>
<div class="field field-field-teaser-title article-content__teaser-title">
    <div class="field-items">
          <div class="field-item even"><a href="/krop-sundhed/et-godt-raad-hoering-paa-christiansborg-boer-ikke-goere-dig-bange-for-mobilstraaling">Et godt råd: Høring på Christiansborg bør ikke gøre dig bange for mobilstråling</a></div>
      </div>
</div>
  </div>

</article>



                </div>
														                <div class="frontpage-region--2 inner region one_third">






    <article  class="node node-article article-content--teaser article-content--teaser--a">
        <a class="article-content__image-link" href="/krop-sundhed/nyt-stort-studie-hjernerystelse-oeger-risikoen-for-demens-markant">

    <div class="field field-field-teaser-media">
    <div class="field-items">
          <div class="field-item even"><div id="file-153039" class="file file-image file-image-jpeg">
  <picture  title="Husk hjelmen: Jo flere gange man slår hovedet, desto højere er risikoen for at få demens.">
<!--[if IE 9]><video style="display: none;"><![endif]-->
<source srcset="https://videnskab.dk/sites/default/files/styles/article_teasers_desktop/public/article_media/hjernerystelse.jpg?itok=XVkgNeQs&amp;timestamp=1523366941 1x" media="(min-width: 980px)" />
<source srcset="https://videnskab.dk/sites/default/files/styles/article_teasers_tablet/public/article_media/hjernerystelse.jpg?itok=Wc753CET&amp;timestamp=1523366941 1x" media="(min-width: 760px)" />
<source srcset="https://videnskab.dk/sites/default/files/styles/article_teasers_mobile/public/article_media/hjernerystelse.jpg?itok=1BIlrRly&amp;timestamp=1523366941 1x" media="(min-width: 0px)" />
<!--[if IE 9]></video><![endif]-->
<img  src="https://videnskab.dk/sites/default/files/styles/article_teasers_mobile/public/article_media/hjernerystelse.jpg?itok=1BIlrRly&amp;timestamp=1523366941" alt="hjernerystelse demens dement hovedskader kraniebrud hovedtraumer" title="Husk hjelmen: Jo flere gange man slår hovedet, desto højere er risikoen for at få demens." />
</picture></div>
</div>
      </div>
</div>
  </a>

  <div class="article-content__sideline-wrapper">
    <div class="field field-field-topics article-content__topics">
    <div class="field-items">

      <div class="field-item even field-item-hjernen"><a href="/topic/hjernen">Hjernen</a></div>
      </div>
</div>
<div class="field field-field-teaser-title article-content__teaser-title">
    <div class="field-items">
          <div class="field-item even"><a href="/krop-sundhed/nyt-stort-studie-hjernerystelse-oeger-risikoen-for-demens-markant">Nyt stort studie: Hjernerystelse øger risikoen for demens markant</a></div>
      </div>
</div>
  </div>

</article>



                </div>
														                <div class="frontpage-region--3 inner region one_third">






    <article  class="node node-article article-content--teaser article-content--teaser--a forskerzonen-article">
    <div class="forskerzonen-label">ForskerZonen</div>    <a class="article-content__image-link" href="/naturvidenskab/forskere-soeger-efter-forgiftede-rovfugles-sidste-maaltid">

    <div class="field field-field-teaser-media">
    <div class="field-items">
          <div class="field-item even"><div id="file-151581" class="file file-image file-image-jpeg">
  <picture  title="De fire forgiftede glenter fundet i juni 2017 nær Silkeborg. Blev de forgiftet eller ej? (Foto: DTU Veterinærinstittutet)">
<!--[if IE 9]><video style="display: none;"><![endif]-->
<source srcset="https://videnskab.dk/sites/default/files/styles/article_teasers_desktop/public/article_media/foto_1_1.jpg?itok=2ph-fNwK&amp;timestamp=1523274324 1x" media="(min-width: 980px)" />
<source srcset="https://videnskab.dk/sites/default/files/styles/article_teasers_tablet/public/article_media/foto_1_1.jpg?itok=MIRcG5Rv&amp;timestamp=1523274324 1x" media="(min-width: 760px)" />
<source srcset="https://videnskab.dk/sites/default/files/styles/article_teasers_mobile/public/article_media/foto_1_1.jpg?itok=GfaC5xnm&amp;timestamp=1523274324 1x" media="(min-width: 0px)" />
<!--[if IE 9]></video><![endif]-->
<img  src="https://videnskab.dk/sites/default/files/styles/article_teasers_mobile/public/article_media/foto_1_1.jpg?itok=GfaC5xnm&amp;timestamp=1523274324" alt="Glenter_forgiftning_død_obduktion" title="De fire forgiftede glenter fundet i juni 2017 nær Silkeborg. Blev de forgiftet eller ej? (Foto: DTU Veterinærinstittutet)" />
</picture></div>
</div>
      </div>
</div>
  </a>

  <div class="article-content__sideline-wrapper">
    <div class="field field-field-topics article-content__topics">
    <div class="field-items">

      <div class="field-item even field-item-dyr-og-planter"><a href="/topic/dyr-planter">Dyr &amp; planter</a></div>

      <div class="field-item odd field-item-forskerzonen"><a href="/forskerzonen">ForskerZonen</a></div>
      </div>
</div>
<div class="field field-field-teaser-title article-content__teaser-title">
    <div class="field-items">
          <div class="field-item even"><a href="/naturvidenskab/forskere-soeger-efter-forgiftede-rovfugles-sidste-maaltid">Forskere søger efter forgiftede rovfugles sidste måltid</a></div>
      </div>
</div>
  </div>

</article>



                </div>
														                <div class="frontpage-region--4 inner region one_third">






    <article  class="node node-article article-content--teaser article-content--teaser--a forskerzonen-article">
    <div class="forskerzonen-label">ForskerZonen</div>    <a class="article-content__image-link" href="/kultur-samfund/professor-naturvidenskab-uddannelserne-boer-ogsaa-undervise-i-humaniora">

    <div class="field field-field-teaser-media">
    <div class="field-items">
          <div class="field-item even"><div id="file-151795" class="file file-image file-image-jpeg">
  <picture  title="Den britiske fysiker og forfatter C.P. Snow beskrev kløften mellem den klassisk-humanistiske og den teknisk-videnskabelige kultur, der i dag synes endnu dybere forankret i den akademiske verden. Det skal vi lave om på, mener forfatteren.">
<!--[if IE 9]><video style="display: none;"><![endif]-->
<source srcset="https://videnskab.dk/sites/default/files/styles/article_teasers_desktop/public/article_media/steam.jpg?itok=0VmWWkFD&amp;timestamp=1521470769 1x" media="(min-width: 980px)" />
<source srcset="https://videnskab.dk/sites/default/files/styles/article_teasers_tablet/public/article_media/steam.jpg?itok=PBB_W055&amp;timestamp=1521470769 1x" media="(min-width: 760px)" />
<source srcset="https://videnskab.dk/sites/default/files/styles/article_teasers_mobile/public/article_media/steam.jpg?itok=6mcDkILZ&amp;timestamp=1521470769 1x" media="(min-width: 0px)" />
<!--[if IE 9]></video><![endif]-->
<img  src="https://videnskab.dk/sites/default/files/styles/article_teasers_mobile/public/article_media/steam.jpg?itok=6mcDkILZ&amp;timestamp=1521470769" alt="STEM STEAM uddannelse humaniora kunst etik videnskab forskning ansvar samfund geoengineering  udfordringer algoritmer genredigering CRiSPR gene drives spørgsmål problemstillinger livsforandrende " title="Den britiske fysiker og forfatter C.P. Snow beskrev kløften mellem den klassisk-humanistiske og den teknisk-videnskabelige kultur, der i dag synes endnu dybere forankret i den akademiske verden. Det skal vi lave om på, mener forfatteren." />
</picture></div>
</div>
      </div>
</div>
  </a>

  <div class="article-content__sideline-wrapper">
    <div class="field field-field-topics article-content__topics">
    <div class="field-items">

      <div class="field-item even field-item-etik-og-filosofi"><a href="/topic/etik-filosofi">Etik &amp; Filosofi</a></div>

      <div class="field-item odd field-item-forskerzonen"><a href="/forskerzonen">ForskerZonen</a></div>
      </div>
</div>
<div class="field field-field-teaser-title article-content__teaser-title">
    <div class="field-items">
          <div class="field-item even"><a href="/kultur-samfund/professor-naturvidenskab-uddannelserne-boer-ogsaa-undervise-i-humaniora">Professor: Naturvidenskabelige uddannelser bør undervise i humaniora</a></div>
      </div>
</div>
  </div>

</article>



                </div>
														                <div class="frontpage-region--5 inner region one_third">






    <article  class="node node-article article-content--teaser article-content--teaser--a">
        <a class="article-content__image-link" href="/krop-sundhed/folk-med-soed-tand-gen-har-mindre-risiko-for-fedme">

    <div class="field field-field-teaser-media">
    <div class="field-items">
          <div class="field-item even"><div id="file-153032" class="file file-image file-image-jpeg">
  <picture  title="Mennesker med variationen i FGF-21-genet spiser mere sukker. Måske fordi deres hjerne ikke får besked om at stoppe med at indtage sukker. (Foto: Shutterstock)">
<!--[if IE 9]><video style="display: none;"><![endif]-->
<source srcset="https://videnskab.dk/sites/default/files/styles/article_teasers_desktop/public/article_media/shutterstock_419927140.jpg?itok=qyVV3NLY&amp;timestamp=1523363273 1x" media="(min-width: 980px)" />
<source srcset="https://videnskab.dk/sites/default/files/styles/article_teasers_tablet/public/article_media/shutterstock_419927140.jpg?itok=uqR1MMLL&amp;timestamp=1523363273 1x" media="(min-width: 760px)" />
<source srcset="https://videnskab.dk/sites/default/files/styles/article_teasers_mobile/public/article_media/shutterstock_419927140.jpg?itok=fDliufS4&amp;timestamp=1523363273 1x" media="(min-width: 0px)" />
<!--[if IE 9]></video><![endif]-->
<img  src="https://videnskab.dk/sites/default/files/styles/article_teasers_mobile/public/article_media/shutterstock_419927140.jpg?itok=fDliufS4&amp;timestamp=1523363273" alt="genetik genvariant sukker fedme " title="Mennesker med variationen i FGF-21-genet spiser mere sukker. Måske fordi deres hjerne ikke får besked om at stoppe med at indtage sukker. (Foto: Shutterstock)" />
</picture></div>
</div>
      </div>
</div>
  </a>

  <div class="article-content__sideline-wrapper">
    <div class="field field-field-topics article-content__topics">
    <div class="field-items">

      <div class="field-item even field-item-genetik"><a href="/topic/genetik">Genetik</a></div>
      </div>
</div>
<div class="field field-field-teaser-title article-content__teaser-title">
    <div class="field-items">
          <div class="field-item even"><a href="/krop-sundhed/folk-med-soed-tand-gen-har-mindre-risiko-for-fedme">Folk med sød tand-gen har mindre risiko for fedme</a></div>
      </div>
</div>
  </div>

</article>



                </div>
														                <div class="frontpage-region--6 inner region one_third">






    <article  class="node node-article article-content--teaser article-content--teaser--a forskerzonen-article">
    <div class="forskerzonen-label">ForskerZonen</div>    <a class="article-content__image-link" href="/kultur-samfund/begraensning-af-indvandring-skubbede-hvide-indfoedte-ned-i-lavtloensjob">

    <div class="field field-field-teaser-media">
    <div class="field-items">
          <div class="field-item even"><div id="file-151818" class="file file-image file-image-jpeg">
  <picture  title="Statue of Liberty er blevet et symbol på den nye verdens &amp;#039;gyldne dør&amp;#039; til bedre økonomiske muligheder for fattige indvandrere. Hvad kan vi lære af USA&amp;#039;s immigrationspolitik?">
<!--[if IE 9]><video style="display: none;"><![endif]-->
<source srcset="https://videnskab.dk/sites/default/files/styles/article_teasers_desktop/public/article_media/immigrationsbegraensninger_1.jpg?itok=53stzNpw&amp;timestamp=1521235322 1x" media="(min-width: 980px)" />
<source srcset="https://videnskab.dk/sites/default/files/styles/article_teasers_tablet/public/article_media/immigrationsbegraensninger_1.jpg?itok=bDaVL5lc&amp;timestamp=1521235322 1x" media="(min-width: 760px)" />
<source srcset="https://videnskab.dk/sites/default/files/styles/article_teasers_mobile/public/article_media/immigrationsbegraensninger_1.jpg?itok=lAalrQgz&amp;timestamp=1521235322 1x" media="(min-width: 0px)" />
<!--[if IE 9]></video><![endif]-->
<img  src="https://videnskab.dk/sites/default/files/styles/article_teasers_mobile/public/article_media/immigrationsbegraensninger_1.jpg?itok=lAalrQgz&amp;timestamp=1521235322" alt="immigration begrænsning kvotesystem Donald Trump immigrationspolitik lovgivning politik 1920&amp;#039;erne USA sydeuropæere Rusland Storbritannien etnicitet arbejdsmarked arbejdstager konkurrerer etniske grupper Calvin Coolidge" title="Statue of Liberty er blevet et symbol på den nye verdens &amp;#039;gyldne dør&amp;#039; til bedre økonomiske muligheder for fattige indvandrere. Hvad kan vi lære af USA&amp;#039;s immigrationspolitik?" />
</picture></div>
</div>
      </div>
</div>
  </a>

  <div class="article-content__sideline-wrapper">
    <div class="field field-field-topics article-content__topics">
    <div class="field-items">

      <div class="field-item even field-item-forskerzonen"><a href="/forskerzonen">ForskerZonen</a></div>

      <div class="field-item odd field-item-politik"><a href="/topic/politik">Politik</a></div>
      </div>
</div>
<div class="field field-field-teaser-title article-content__teaser-title">
    <div class="field-items">
          <div class="field-item even"><a href="/kultur-samfund/begraensning-af-indvandring-skubbede-hvide-indfoedte-ned-i-lavtloensjob">Begrænsning af indvandring skubbede hvide indfødte ned i lavtlønsjob</a></div>
      </div>
</div>
  </div>

</article>



                </div>
														                <div class="frontpage-region--7 inner region one_third">





  <div class="view view-most-readed-articles-for-front-page view-id-most_readed_articles_for_front_page view-display-id-panel_pane_1 google-analytics-reports-summary view-most-viewed-articles view-dom-id-0457b3a8241d0915b0b746c828969eb4">
            <h2>Mest læste</h2>


      <section>
              <article class="first odd">


<div class="views-field views-field-title">
    <span class="field-content">
        <a href="/kultur-samfund/eske-willerslev-har-opdigtet-sin-tvillingebror">
            Eske Willerslev har opdigtet sin tvillingebror        </a>
    </span>
</div>
      </article>
            <article class="even">


<div class="views-field views-field-title">
    <span class="field-content">
        <a href="/kultur-samfund/5-ting-du-skal-vide-om-vikingetiden">
            5 ting, du skal vide om vikingetiden        </a>
    </span>
</div>
      </article>
            <article class="odd">


<div class="views-field views-field-title">
    <span class="field-content">
        <a href="/krop-sundhed/kolesterol-beskytter-maaske-mod-infektionssygdomme">
            Kolesterol kan have en overset effekt på dit helbred        </a>
    </span>
</div>
      </article>
            <article class="even">


<div class="views-field views-field-title">
    <span class="field-content">
        <a href="/kultur-samfund/koebenhavnske-kvinder-fik-malket-bryster-i-1500-tallet">
            Københavnske kvinder fik malket bryster i 1500-tallet        </a>
    </span>
</div>
      </article>
            <article class="odd">


<div class="views-field views-field-title">
    <span class="field-content">
        <a href="/kultur-samfund/et-vaeld-af-nye-fund-i-vestsjaelland-forundrer-arkaeologer">
            Et væld af nye fund i Vestsjælland forundrer arkæologer        </a>
    </span>
</div>
      </article>
            <article class="last even">


<div class="views-field views-field-title">
    <span class="field-content">
        <a href="/teknologi-innovation/nu-styrter-kinesisk-rumstation-ned-her-er-hvad-du-boer-vide">
            Nu styrter kinesisk rumstation ned: Her er, hvad du bør vide        </a>
    </span>
</div>
      </article>
  </section>





  </div>



                </div>
									      </section>
	      <section class="frontpage-region frontpage-region--b">
									                <div class="frontpage-region--8 inner region full">






    <article  class="node node-other-media">

  <div class="article-content__sideline-wrapper">
    <div class="field field-field-topics other-media__topics">
    <div class="field-items">

      <div class="field-item even field-item-andre-skriver"><a href="/topic/andre-skriver">Andre skriver</a></div>

      <div class="field-item odd field-item-geologi"><a href="/topic/geologi">Geologi</a></div>

      <div class="field-item even field-item-sport"><a href="/topic/sport">Sport</a></div>
      </div>
</div>
<div class="field field-field-teaser-title other-media__teaser-title">
    <div class="field-items">
          <div class="field-item even"><a href="/naturvidenskab/forsker-maaler-effekterne-af-messi-og-springsteen-udloeser-jordskaelv-naar-de-spiller">Forsker måler effekterne af Messi og Springsteen: Udløser jordskælv, når de spiller</a></div>
      </div>
</div>
  </div>

</article>



                </div>
														                <div class="frontpage-region--9 inner region half">






    <article  class="node node-article article-content--teaser article-content--teaser--a">
        <a class="article-content__image-link" href="/naturvidenskab/hvorfor-hoerer-vi-aldrig-fra-et">

    <div class="field field-field-teaser-media">
    <div class="field-items">
          <div class="field-item even"><div id="file-152425" class="file file-image file-image-jpeg">
  <picture  title="Er rummets andre intelligente liv allerede uddøde, eller er de ikke udviklet endnu?">
<!--[if IE 9]><video style="display: none;"><![endif]-->
<source srcset="https://videnskab.dk/sites/default/files/styles/article_teasers_desktop/public/article_media/admiring_the_galaxy.jpg?itok=EU1vh22J&amp;timestamp=1521026684 1x" media="(min-width: 980px)" />
<source srcset="https://videnskab.dk/sites/default/files/styles/article_teasers_tablet/public/article_media/admiring_the_galaxy.jpg?itok=jRq9FDQS&amp;timestamp=1521026684 1x" media="(min-width: 760px)" />
<source srcset="https://videnskab.dk/sites/default/files/styles/article_teasers_mobile/public/article_media/admiring_the_galaxy.jpg?itok=DbH2oigZ&amp;timestamp=1521026684 1x" media="(min-width: 0px)" />
<!--[if IE 9]></video><![endif]-->
<img  src="https://videnskab.dk/sites/default/files/styles/article_teasers_mobile/public/article_media/admiring_the_galaxy.jpg?itok=DbH2oigZ&amp;timestamp=1521026684" alt="et rummet intelligent liv beboelig planeter" title="Er rummets andre intelligente liv allerede uddøde, eller er de ikke udviklet endnu?" />
</picture></div>
</div>
      </div>
</div>
  </a>

  <div class="article-content__sideline-wrapper">
    <div class="field field-field-topics article-content__topics">
    <div class="field-items">

      <div class="field-item even field-item-astronomi"><a href="/topic/astronomi">Astronomi</a></div>
      </div>
</div>
<div class="field field-field-teaser-title article-content__teaser-title">
    <div class="field-items">
          <div class="field-item even"><a href="/naturvidenskab/hvorfor-hoerer-vi-aldrig-fra-et">Hvorfor hører vi aldrig fra E.T.?</a></div>
      </div>
</div>
  </div>

</article>



                </div>
														                <div class="frontpage-region--10 inner region half">






    <article  class="node node-article article-content--teaser article-content--teaser--a">
        <a class="article-content__image-link" href="/naturvidenskab/forhistorisk-bille-opkaldt-efter-broedrene-willerslev">

    <div class="field field-field-teaser-media">
    <div class="field-items">
          <div class="field-item even"><div id="file-153031" class="file file-image file-image-jpeg">
  <picture >
<!--[if IE 9]><video style="display: none;"><![endif]-->
<source srcset="https://videnskab.dk/sites/default/files/styles/article_teasers_desktop/public/article_media/willerslev-bille.jpg?itok=TVNUR_no&amp;timestamp=1523355419 1x" media="(min-width: 980px)" />
<source srcset="https://videnskab.dk/sites/default/files/styles/article_teasers_tablet/public/article_media/willerslev-bille.jpg?itok=-iA9jIHK&amp;timestamp=1523355419 1x" media="(min-width: 760px)" />
<source srcset="https://videnskab.dk/sites/default/files/styles/article_teasers_mobile/public/article_media/willerslev-bille.jpg?itok=yjGtFY9S&amp;timestamp=1523355419 1x" media="(min-width: 0px)" />
<!--[if IE 9]></video><![endif]-->
<img  src="https://videnskab.dk/sites/default/files/styles/article_teasers_mobile/public/article_media/willerslev-bille.jpg?itok=yjGtFY9S&amp;timestamp=1523355419" alt="willerslev bille" title="" />
</picture></div>
</div>
      </div>
</div>
  </a>

  <div class="article-content__sideline-wrapper">
    <div class="field field-field-topics article-content__topics">
    <div class="field-items">

      <div class="field-item even field-item-dyr-og-planter"><a href="/topic/dyr-planter">Dyr &amp; planter</a></div>
      </div>
</div>
<div class="field field-field-teaser-title article-content__teaser-title">
    <div class="field-items">
          <div class="field-item even"><a href="/naturvidenskab/forhistorisk-bille-opkaldt-efter-broedrene-willerslev">Forhistorisk bille opkaldt efter brødrene Willerslev</a></div>
      </div>
</div>
  </div>

</article>



                </div>
									      </section>
	      <section class="frontpage-region frontpage-region--c">
									                <div class="frontpage-region--11 inner region one_third">






    <article  class="node node-article article-content--teaser article-content--teaser--a">
        <a class="article-content__image-link" href="/krop-sundhed/mand-indlagt-verdens-staerkeste-chili-gav-ham-tordenskraldshovedpine">

    <div class="field field-field-teaser-media">
    <div class="field-items">
          <div class="field-item even"><div id="file-153019" class="file file-image file-image-jpeg">
  <picture  title="Carolina Reaper, der kan kendes på sin rynkede form med en spids tip, har været anerkendt som verdens stærkeste chili i Guiness&amp;#039; rekordbog siden 2013. (Foto: Shutterstock.)">
<!--[if IE 9]><video style="display: none;"><![endif]-->
<source srcset="https://videnskab.dk/sites/default/files/styles/article_teasers_desktop/public/article_media/shutterstock_315584618.jpg?itok=AeC3DPU-&amp;timestamp=1523279193 1x" media="(min-width: 980px)" />
<source srcset="https://videnskab.dk/sites/default/files/styles/article_teasers_tablet/public/article_media/shutterstock_315584618.jpg?itok=i2QvbYba&amp;timestamp=1523279193 1x" media="(min-width: 760px)" />
<source srcset="https://videnskab.dk/sites/default/files/styles/article_teasers_mobile/public/article_media/shutterstock_315584618.jpg?itok=DhlIxM0K&amp;timestamp=1523279193 1x" media="(min-width: 0px)" />
<!--[if IE 9]></video><![endif]-->
<img  src="https://videnskab.dk/sites/default/files/styles/article_teasers_mobile/public/article_media/shutterstock_315584618.jpg?itok=DhlIxM0K&amp;timestamp=1523279193" alt="Mand spise verdens stærkeste chili syg indlagt hjernen blodårer trække sig sammen" title="Carolina Reaper, der kan kendes på sin rynkede form med en spids tip, har været anerkendt som verdens stærkeste chili i Guiness&amp;#039; rekordbog siden 2013. (Foto: Shutterstock.)" />
</picture></div>
</div>
      </div>
</div>
  </a>

  <div class="article-content__sideline-wrapper">
    <div class="field field-field-topics article-content__topics">
    <div class="field-items">

      <div class="field-item even field-item-kroppen"><a href="/topic/kroppen">Kroppen</a></div>
      </div>
</div>
<div class="field field-field-teaser-title article-content__teaser-title">
    <div class="field-items">
          <div class="field-item even"><a href="/krop-sundhed/mand-indlagt-verdens-staerkeste-chili-gav-ham-tordenskraldshovedpine">Mand indlagt: Verdens stærkeste chili gav ham ’tordenskraldshovedpine’</a></div>
      </div>
</div>
  </div>

</article>



                </div>
														                <div class="frontpage-region--12 inner region one_third">






    <article  class="node node-article article-content--teaser article-content--teaser--a forskerzonen-article">
    <div class="forskerzonen-label">ForskerZonen</div>    <a class="article-content__image-link" href="/naturvidenskab/forsker-fokus-paa-enkelte-fund-af-mikroplastik-overskygger-et-meget-stoerre-problem">

    <div class="field field-field-teaser-media">
    <div class="field-items">
          <div class="field-item even"><div id="file-152959" class="file file-image file-image-jpeg">
  <picture >
<!--[if IE 9]><video style="display: none;"><![endif]-->
<source srcset="https://videnskab.dk/sites/default/files/styles/article_teasers_desktop/public/articles_inline/shutterstock_556842991.jpg?itok=LpjlgTzf&amp;timestamp=1523000445 1x" media="(min-width: 980px)" />
<source srcset="https://videnskab.dk/sites/default/files/styles/article_teasers_tablet/public/articles_inline/shutterstock_556842991.jpg?itok=Ozl1w-_Y&amp;timestamp=1523000445 1x" media="(min-width: 760px)" />
<source srcset="https://videnskab.dk/sites/default/files/styles/article_teasers_mobile/public/articles_inline/shutterstock_556842991.jpg?itok=z1jZYh-j&amp;timestamp=1523000445 1x" media="(min-width: 0px)" />
<!--[if IE 9]></video><![endif]-->
<img  src="https://videnskab.dk/sites/default/files/styles/article_teasers_mobile/public/articles_inline/shutterstock_556842991.jpg?itok=z1jZYh-j&amp;timestamp=1523000445" alt="" title="" />
</picture></div>
</div>
      </div>
</div>
  </a>

  <div class="article-content__sideline-wrapper">
    <div class="field field-field-topics article-content__topics">
    <div class="field-items">

      <div class="field-item even field-item-forskerzonen"><a href="/forskerzonen">ForskerZonen</a></div>

      <div class="field-item odd field-item-miljoe"><a href="/topic/miljo">Miljø</a></div>
      </div>
</div>
<div class="field field-field-teaser-title article-content__teaser-title">
    <div class="field-items">
          <div class="field-item even"><a href="/naturvidenskab/forsker-fokus-paa-enkelte-fund-af-mikroplastik-overskygger-et-meget-stoerre-problem">Forsker: Fokus på enkelte fund af mikroplastik overskygger et meget større problem</a></div>
      </div>
</div>
  </div>

</article>



                </div>
														                <div class="frontpage-region--13 inner region one_third">






    <article  class="node node-article article-content--teaser article-content--teaser--a article-content--gallery">
        <a class="article-content__image-link" href="/teknologi-innovation/top-10-curiositys-bedste-billeder-fra-mars">
          <div class="icons">

                <span class="icons__item icons__item--gallery">

        </span>
              </div>

    <div class="field field-field-teaser-media">
    <div class="field-items">
          <div class="field-item even"><div id="file-152388" class="file file-image file-image-jpeg">
  <picture  title="En selfie fra &amp;#039;Buckskin&amp;#039;, hvor Curiosity opsamlede sin syvende boreprøve. Klik på billedet for at åbne galleriet eller nyde billedet i høj opløsning. ">
<!--[if IE 9]><video style="display: none;"><![endif]-->
<source srcset="https://videnskab.dk/sites/default/files/styles/article_teasers_desktop/public/article_media/pia19807_flat-horizon-monday.jpg?itok=clIW5POX&amp;timestamp=1522746099 1x" media="(min-width: 980px)" />
<source srcset="https://videnskab.dk/sites/default/files/styles/article_teasers_tablet/public/article_media/pia19807_flat-horizon-monday.jpg?itok=09qeGDZW&amp;timestamp=1522746099 1x" media="(min-width: 760px)" />
<source srcset="https://videnskab.dk/sites/default/files/styles/article_teasers_mobile/public/article_media/pia19807_flat-horizon-monday.jpg?itok=0gv242xD&amp;timestamp=1522746099 1x" media="(min-width: 0px)" />
<!--[if IE 9]></video><![endif]-->
<img  src="https://videnskab.dk/sites/default/files/styles/article_teasers_mobile/public/article_media/pia19807_flat-horizon-monday.jpg?itok=0gv242xD&amp;timestamp=1522746099" alt="curiosity mars rummet rumfart selfie vand prøver opsamle" title="En selfie fra &amp;#039;Buckskin&amp;#039;, hvor Curiosity opsamlede sin syvende boreprøve. Klik på billedet for at åbne galleriet eller nyde billedet i høj opløsning. " />
</picture></div>
</div>
      </div>
</div>
  </a>

  <div class="article-content__sideline-wrapper">
    <div class="field field-field-topics article-content__topics">
    <div class="field-items">

      <div class="field-item even field-item-astronomi"><a href="/topic/astronomi">Astronomi</a></div>
      </div>
</div>
<div class="field field-field-teaser-title article-content__teaser-title">
    <div class="field-items">
          <div class="field-item even"><a href="/teknologi-innovation/top-10-curiositys-bedste-billeder-fra-mars">Top 10: Curiositys bedste billeder fra Mars</a></div>
      </div>
</div>
  </div>

</article>



                </div>
														                <div class="frontpage-region--14 inner region full">







<article  class="node node-other-media">

  <div class="article-content__sideline-wrapper">
    <div class="field field-field-topics other-media__topics">
    <div class="field-items">

      <div class="field-item even field-item-andre-skriver"><a href="/topic/andre-skriver">Andre skriver</a></div>

      <div class="field-item odd field-item-dyr-og-planter"><a href="/topic/dyr-planter">Dyr &amp; planter</a></div>
      </div>
</div>
<div class="field field-field-teaser-title other-media__teaser-title">
    <div class="field-items">
          <div class="field-item even"><a href="/naturvidenskab/forhistorisk-delfinlignende-oegle-var-paa-stoerrelse-med-en-blaahval">Forhistorisk delfinlignende øgle var på størrelse med en blåhval</a></div>
      </div>
</div>
  </div>

</article>



                </div>
														                <div class="frontpage-region--15 inner region one_third">







<article  class="node node-other-media">

  <div class="article-content__sideline-wrapper">
    <div class="field field-field-topics other-media__topics">
    <div class="field-items">

      <div class="field-item even field-item-andre-skriver"><a href="/topic/andre-skriver">Andre skriver</a></div>

      <div class="field-item odd field-item-evolution"><a href="/topic/evolution">Evolution</a></div>
      </div>
</div>
<div class="field field-field-teaser-title other-media__teaser-title">
    <div class="field-items">
          <div class="field-item even"><a href="/krop-sundhed/loeftede-oejenbryn-saadan-har-evolutionen-givet-os-ansigtsudtryk">Løftede øjenbryn: Derfor har evolutionen givet os ansigtsudtryk</a></div>
      </div>
</div>
  </div>

</article>



                </div>
														                <div class="frontpage-region--16 inner region one_third">







<article  class="node node-other-media">

  <div class="article-content__sideline-wrapper">
    <div class="field field-field-topics other-media__topics">
    <div class="field-items">

      <div class="field-item even field-item-andre-skriver"><a href="/topic/andre-skriver">Andre skriver</a></div>

      <div class="field-item odd field-item-arkaeologi"><a href="/topic/arkaeologi">Arkæologi</a></div>
      </div>
</div>
<div class="field field-field-teaser-title other-media__teaser-title">
    <div class="field-items">
          <div class="field-item even"><a href="/naturvidenskab/finger-fossil-afsloerer-kom-mennesket-til-europa-og-asien-foer-antaget">Finger-fossil afslører: Kom mennesket til Europa og Asien før antaget?</a></div>
      </div>
</div>
  </div>

</article>



                </div>
														                <div class="frontpage-region--17 inner region one_third">







<article  class="node node-other-media">

  <div class="article-content__sideline-wrapper">
    <div class="field field-field-topics other-media__topics">
    <div class="field-items">

      <div class="field-item even field-item-andre-skriver"><a href="/topic/andre-skriver">Andre skriver</a></div>

      <div class="field-item odd field-item-bag-om-forskningen"><a href="/topic/bag-om-forskningen">Bag om forskningen</a></div>
      </div>
</div>
<div class="field field-field-teaser-title other-media__teaser-title">
    <div class="field-items">
          <div class="field-item even"><a href="/kultur-samfund/her-er-de-fem-hoejeste-loenninger-paa-koebenhavns-universitet">Her er de fem højeste lønninger på Københavns Universitet</a></div>
      </div>
</div>
  </div>

</article>



                </div>
									      </section>
	      <section class="frontpage-region frontpage-region--d">
									                <div class="frontpage-region--18 inner region half">






    <article  class="node node-article article-content--teaser article-content--teaser--a">
        <a class="article-content__image-link" href="/krop-sundhed/kolesterol-beskytter-maaske-mod-infektionssygdomme">

    <div class="field field-field-teaser-media">
    <div class="field-items">
          <div class="field-item even"><div id="file-153015" class="file file-image file-image-jpeg">
  <picture  title="Forskning i HDL-kolesterol har været fokuseret på hjerte-kar-sygdomme. Men nu viser et nyt studie, at det måske har betydning for immunsystemet. Den sammenhæng har ikke været undersøgt før. (Foto: Shutterstock)">
<!--[if IE 9]><video style="display: none;"><![endif]-->
<source srcset="https://videnskab.dk/sites/default/files/styles/article_teasers_desktop/public/article_media/ldl_kolesterol_infektionssygdomme.jpg?itok=dC6dG8vB&amp;timestamp=1523265553 1x" media="(min-width: 980px)" />
<source srcset="https://videnskab.dk/sites/default/files/styles/article_teasers_tablet/public/article_media/ldl_kolesterol_infektionssygdomme.jpg?itok=RguZ6cgl&amp;timestamp=1523265553 1x" media="(min-width: 760px)" />
<source srcset="https://videnskab.dk/sites/default/files/styles/article_teasers_mobile/public/article_media/ldl_kolesterol_infektionssygdomme.jpg?itok=ZwkApY2F&amp;timestamp=1523265553 1x" media="(min-width: 0px)" />
<!--[if IE 9]></video><![endif]-->
<img  src="https://videnskab.dk/sites/default/files/styles/article_teasers_mobile/public/article_media/ldl_kolesterol_infektionssygdomme.jpg?itok=ZwkApY2F&amp;timestamp=1523265553" alt="HDL kolesterol det gode kolesterol beskytter mod infektionssygdomme" title="Forskning i HDL-kolesterol har været fokuseret på hjerte-kar-sygdomme. Men nu viser et nyt studie, at det måske har betydning for immunsystemet. Den sammenhæng har ikke været undersøgt før. (Foto: Shutterstock)" />
</picture></div>
</div>
      </div>
</div>
  </a>

  <div class="article-content__sideline-wrapper">
    <div class="field field-field-topics article-content__topics">
    <div class="field-items">

      <div class="field-item even field-item-sygdomme"><a href="/topic/sygdomme">Sygdomme</a></div>
      </div>
</div>
<div class="field field-field-teaser-title article-content__teaser-title">
    <div class="field-items">
          <div class="field-item even"><a href="/krop-sundhed/kolesterol-beskytter-maaske-mod-infektionssygdomme">Kolesterol kan have en overset effekt på dit helbred</a></div>
      </div>
</div>
  </div>

</article>



                </div>
														                <div class="frontpage-region--19 inner region half">






    <article  class="node node-article article-content--teaser article-content--teaser--a forskerzonen-article">
    <div class="forskerzonen-label">ForskerZonen</div>    <a class="article-content__image-link" href="/kultur-samfund/fem-ting-du-skal-vide-om-overvaagning">
          <div class="icons">
                <span class="icons__item icons__item--video">

        </span>

              </div>

    <div class="field field-field-teaser-media">
    <div class="field-items">
          <div class="field-item even"><div id="file-153007" class="file file-image file-image-png">
  <picture >
<!--[if IE 9]><video style="display: none;"><![endif]-->
<source srcset="https://videnskab.dk/sites/default/files/styles/article_teasers_desktop/public/article_media/5_ting_du_skal_vide_om_overvaagning_video_videnskab_0.png?itok=y-u0NBH7&amp;timestamp=1523261000 1x" media="(min-width: 980px)" />
<source srcset="https://videnskab.dk/sites/default/files/styles/article_teasers_tablet/public/article_media/5_ting_du_skal_vide_om_overvaagning_video_videnskab_0.png?itok=s7Se0cLf&amp;timestamp=1523261000 1x" media="(min-width: 760px)" />
<source srcset="https://videnskab.dk/sites/default/files/styles/article_teasers_mobile/public/article_media/5_ting_du_skal_vide_om_overvaagning_video_videnskab_0.png?itok=fBwmdz9P&amp;timestamp=1523261000 1x" media="(min-width: 0px)" />
<!--[if IE 9]></video><![endif]-->
<img  src="https://videnskab.dk/sites/default/files/styles/article_teasers_mobile/public/article_media/5_ting_du_skal_vide_om_overvaagning_video_videnskab_0.png?itok=fBwmdz9P&amp;timestamp=1523261000" alt="5_ting_du_skal_vide_om_overvaagning_video_videnskab" title="" />
</picture></div>
</div>
      </div>
</div>
  </a>

  <div class="article-content__sideline-wrapper">
    <div class="field field-field-topics article-content__topics">
    <div class="field-items">

      <div class="field-item even field-item-forskerzonen"><a href="/forskerzonen">ForskerZonen</a></div>

      <div class="field-item odd field-item-samfund"><a href="/topic/samfund">Samfund</a></div>
      </div>
</div>
<div class="field field-field-teaser-title article-content__teaser-title">
    <div class="field-items">
          <div class="field-item even"><a href="/kultur-samfund/fem-ting-du-skal-vide-om-overvaagning">Fem ting, du skal vide om overvågning</a></div>
      </div>
</div>
  </div>

</article>



                </div>
									      </section>
	      <section class="frontpage-region frontpage-region--e">
									                <div class="frontpage-region--20 inner region one_third">






    <article  class="node node-article article-content--teaser article-content--teaser--a">
        <a class="article-content__image-link" href="/kultur-samfund/bedstemoedre-behandler-depression-i-zimbabwe">
          <div class="icons">
                <span class="icons__item icons__item--video">

        </span>

              </div>

    <div class="field field-field-teaser-media">
    <div class="field-items">
          <div class="field-item even"><div id="file-153028" class="file file-image file-image-png">
  <picture >
<!--[if IE 9]><video style="display: none;"><![endif]-->
<source srcset="https://videnskab.dk/sites/default/files/styles/article_teasers_desktop/public/article_media/bedstemoedre_behandle_depression_ted_talk.png?itok=3NlIOVJi&amp;timestamp=1523347543 1x" media="(min-width: 980px)" />
<source srcset="https://videnskab.dk/sites/default/files/styles/article_teasers_tablet/public/article_media/bedstemoedre_behandle_depression_ted_talk.png?itok=jXFiiHg3&amp;timestamp=1523347543 1x" media="(min-width: 760px)" />
<source srcset="https://videnskab.dk/sites/default/files/styles/article_teasers_mobile/public/article_media/bedstemoedre_behandle_depression_ted_talk.png?itok=1OYVJ-8G&amp;timestamp=1523347543 1x" media="(min-width: 0px)" />
<!--[if IE 9]></video><![endif]-->
<img  src="https://videnskab.dk/sites/default/files/styles/article_teasers_mobile/public/article_media/bedstemoedre_behandle_depression_ted_talk.png?itok=1OYVJ-8G&amp;timestamp=1523347543" alt="" title="" />
</picture></div>
</div>
      </div>
</div>
  </a>

  <div class="article-content__sideline-wrapper">
    <div class="field field-field-topics article-content__topics">
    <div class="field-items">

      <div class="field-item even field-item-psykologi"><a href="/topic/psykologi">Psykologi</a></div>
      </div>
</div>
<div class="field field-field-teaser-title article-content__teaser-title">
    <div class="field-items">
          <div class="field-item even"><a href="/kultur-samfund/bedstemoedre-behandler-depression-i-zimbabwe">TED Talk: Bedstemødre behandler depression i Zimbabwe</a></div>
      </div>
</div>
  </div>

</article>



                </div>
														                <div class="frontpage-region--21 inner region one_third">






    <article  class="node node-article article-content--teaser article-content--teaser--a forskerzonen-article">
    <div class="forskerzonen-label">ForskerZonen</div>    <a class="article-content__image-link" href="/naturvidenskab/afrika-er-langsomt-ved-at-spraekke-i-to-dele">

    <div class="field field-field-teaser-media">
    <div class="field-items">
          <div class="field-item even"><div id="file-153000" class="file file-image file-image-png">
  <picture  title="Jorden er evig foranderlig, selvom mange af forandringerne er så godt som umærkelige for os. Det er pladetektonikken et godt eksempel på. En pludseligt opstået kæmperevne i Kenya er en påmindelse om de enorme trækkræfter, der arbejder under jordoverfladen">
<!--[if IE 9]><video style="display: none;"><![endif]-->
<source srcset="https://videnskab.dk/sites/default/files/styles/article_teasers_desktop/public/article_media/file-20180329-189813-qaz48d.png?itok=vvQ8ncJx&amp;timestamp=1523263280 1x" media="(min-width: 980px)" />
<source srcset="https://videnskab.dk/sites/default/files/styles/article_teasers_tablet/public/article_media/file-20180329-189813-qaz48d.png?itok=adlYxkg2&amp;timestamp=1523263280 1x" media="(min-width: 760px)" />
<source srcset="https://videnskab.dk/sites/default/files/styles/article_teasers_mobile/public/article_media/file-20180329-189813-qaz48d.png?itok=nD-TL-BO&amp;timestamp=1523263280 1x" media="(min-width: 0px)" />
<!--[if IE 9]></video><![endif]-->
<img  src="https://videnskab.dk/sites/default/files/styles/article_teasers_mobile/public/article_media/file-20180329-189813-qaz48d.png?itok=nD-TL-BO&amp;timestamp=1523263280" alt="Afrika kontinentaldrift pladetektonik erosion Kenya erodering den Østafrikanske Rift forkastningszone lithosfære geologiske sprækkedannelser vulkansk seismisk aktivitet jordskælv konvektionsboble topografi astenosfære magma " title="Jorden er evig foranderlig, selvom mange af forandringerne er så godt som umærkelige for os. Det er pladetektonikken et godt eksempel på. En pludseligt opstået kæmperevne i Kenya er en påmindelse om de enorme trækkræfter, der arbejder under jordoverfladen" />
</picture></div>
</div>
      </div>
</div>
  </a>

  <div class="article-content__sideline-wrapper">
    <div class="field field-field-topics article-content__topics">
    <div class="field-items">

      <div class="field-item even field-item-forskerzonen"><a href="/forskerzonen">ForskerZonen</a></div>

      <div class="field-item odd field-item-geologi"><a href="/topic/geologi">Geologi</a></div>
      </div>
</div>
<div class="field field-field-teaser-title article-content__teaser-title">
    <div class="field-items">
          <div class="field-item even"><a href="/naturvidenskab/afrika-er-langsomt-ved-at-spraekke-i-to-dele">Afrika er langsomt ved at sprække i to dele</a></div>
      </div>
</div>
  </div>

</article>



                </div>
														                <div class="frontpage-region--22 inner region one_third">






    <article  class="node node-article article-content--teaser article-content--teaser--a">
        <a class="article-content__image-link" href="/naturvidenskab/sover-myrer">

    <div class="field field-field-teaser-media">
    <div class="field-items">
          <div class="field-item even"><div id="file-152618" class="file file-image file-image-jpeg">
  <picture  title="Denne myre ligner i hvert fald en, der tager sig en &amp;#039;myrfar&amp;#039;. (Foto: Shutterstock)">
<!--[if IE 9]><video style="display: none;"><![endif]-->
<source srcset="https://videnskab.dk/sites/default/files/styles/article_teasers_desktop/public/article_media/myre_sove_insekter.jpg?itok=L4mNkQXp&amp;timestamp=1521643625 1x" media="(min-width: 980px)" />
<source srcset="https://videnskab.dk/sites/default/files/styles/article_teasers_tablet/public/article_media/myre_sove_insekter.jpg?itok=dVdwwtOm&amp;timestamp=1521643625 1x" media="(min-width: 760px)" />
<source srcset="https://videnskab.dk/sites/default/files/styles/article_teasers_mobile/public/article_media/myre_sove_insekter.jpg?itok=_tWnVJz3&amp;timestamp=1521643625 1x" media="(min-width: 0px)" />
<!--[if IE 9]></video><![endif]-->
<img  src="https://videnskab.dk/sites/default/files/styles/article_teasers_mobile/public/article_media/myre_sove_insekter.jpg?itok=_tWnVJz3&amp;timestamp=1521643625" alt="sover myrer insekter" title="Denne myre ligner i hvert fald en, der tager sig en &amp;#039;myrfar&amp;#039;. (Foto: Shutterstock)" />
</picture></div>
</div>
      </div>
</div>
  </a>

  <div class="article-content__sideline-wrapper">
    <div class="field field-field-topics article-content__topics">
    <div class="field-items">

      <div class="field-item even field-item-dyr-og-planter"><a href="/topic/dyr-planter">Dyr &amp; planter</a></div>

      <div class="field-item odd field-item-spoerg-videnskaben"><a href="/topic/sporg-videnskaben">Spørg Videnskaben</a></div>
      </div>
</div>
<div class="field field-field-teaser-title article-content__teaser-title">
    <div class="field-items">
          <div class="field-item even"><a href="/naturvidenskab/sover-myrer">Sover myrer?</a></div>
      </div>
</div>
  </div>

</article>



                </div>
														                <div class="frontpage-region--23 inner region full">

<div id="frontpage-sprog-videnskaben" class="frontpage-sprog-videnskaben">




  <div class="view view-latest-articles view-id-latest_articles view-display-id-panel_pane_1 view-dom-id-f5c3420baff8ad55ad5079d0bd3d9498">
            <h2><a href="//videnskab.dk/topic/sporg-videnskaben">Seneste Spørg Videnskaben</a></h2>



      <section>



  <div class="views-field views-field-nothing latest-article-wrapper">        <span class="field-content"><a href="/naturvidenskab/hvad-er-tid">
<img src="https://videnskab.dk/sites/default/files/article_media/tid-ur.jpg">
</a>
<a href="/naturvidenskab/hvad-er-tid">Hvad er tid?</a></span>  </div>


  <div class="views-field views-field-nothing latest-article-wrapper">        <span class="field-content"><a href="/naturvidenskab/sover-myrer">
<img src="https://videnskab.dk/sites/default/files/article_media/myre_sove_insekter.jpg">
</a>
<a href="/naturvidenskab/sover-myrer">Sover myrer?</a></span>  </div>


  <div class="views-field views-field-nothing latest-article-wrapper">        <span class="field-content"><a href="/krop-sundhed/hvorfor-goer-foraaret-os-saa-kaade-og-glade">
<img src="https://videnskab.dk/sites/default/files/article_media/foraar_glad_kaad_energi_0.jpg">
</a>
<a href="/krop-sundhed/hvorfor-goer-foraaret-os-saa-kaade-og-glade">Hvorfor gør foråret os så kåde og glade?</a></span>  </div>
  </section>





  </div>



</div>
                </div>
									      </section>
	      <section class="frontpage-region frontpage-region--f">
									                <div class="frontpage-region--24 inner region full">




<section>
  <div class="partner-highlight-top">
  <div class="partner-highlight-by">
    Indhold fra vores partner Bestil en Forsker  </div>
  <div class="partner-highlight-name">
      </div>
</div>
<!--<section>-->
</section>




<div class="partner-highlight-view">







<article>
    <div class="partner-highlight-article-media">
      <a href="/naturvidenskab/vilde-floder-og-et-jysk-nildelta-tag-med-paa-rejse-til-fortidens-danmark">
        <img src="https://videnskab.dk/sites/default/files/styles/article_teasers_mobile/public/article_media/22_mio_gammel_flodkanal_foto_erik_skovbjerg_rasmussen_2.jpg?itok=vIhhbz-l"/>
      </a>
    </div>
    <div class="partner-highlight-article-title">
      <a href="/naturvidenskab/vilde-floder-og-et-jysk-nildelta-tag-med-paa-rejse-til-fortidens-danmark">Vilde floder og et jysk Nildelta: Tag med på rejse til fortidens Danmark</a>    </div>
</article>




<article>
    <div class="partner-highlight-article-media">
      <a href="/krop-sundhed/hvordan-bekaemper-vi-bedst-type-2-diabetes">
        <img src="https://videnskab.dk/sites/default/files/styles/article_teasers_mobile/public/articles_inline/shutterstock_134079275.jpg?itok=aOChPfzT"/>
      </a>
    </div>
    <div class="partner-highlight-article-title">
      <a href="/krop-sundhed/hvordan-bekaemper-vi-bedst-type-2-diabetes">Hvordan bekæmper vi bedst type 2-diabetes?</a>    </div>
</article>




<article>
    <div class="partner-highlight-article-media">
      <a href="/kultur-samfund/nu-kan-du-booke-et-foredrag-med-en-forsker-helt-gratis">
        <img src="https://videnskab.dk/sites/default/files/styles/article_teasers_mobile/public/article_media/bestil_en_forsker.jpg?itok=gwpyrJx_"/>
      </a>
    </div>
    <div class="partner-highlight-article-title">
      <a href="/kultur-samfund/nu-kan-du-booke-et-foredrag-med-en-forsker-helt-gratis">Sidste chance: Book et foredrag med en forsker – helt gratis!</a>    </div>
</article>




<article>
    <div class="partner-highlight-article-media">
      <a href="/teknologi-innovation/smartphone-sensor-kan-opspore-beskidt-vand">
        <img src="https://videnskab.dk/sites/default/files/styles/article_teasers_mobile/public/article_media/colisensor_1.jpg?itok=eDtogPA1"/>
      </a>
    </div>
    <div class="partner-highlight-article-title">
      <a href="/teknologi-innovation/smartphone-sensor-kan-opspore-beskidt-vand">Smartphone-sensor kan opspore beskidt vand</a>    </div>
</article>




<article>
    <div class="partner-highlight-article-media">
      <a href="/kultur-samfund/historien-om-den-danske-kirkesalme">
        <img src="https://videnskab.dk/sites/default/files/styles/article_teasers_mobile/public/articles_inline/grundtvig_0.jpg?itok=NDVptr2g"/>
      </a>
    </div>
    <div class="partner-highlight-article-title">
      <a href="/kultur-samfund/historien-om-den-danske-kirkesalme">Historien om den danske kirkesalme</a>    </div>
</article>




  </div>

                </div>
														                <div class="frontpage-region--25 inner region half">






    <article  class="node node-article article-content--teaser article-content--teaser--a">
        <a class="article-content__image-link" href="/teknologi-innovation/asim-skal-snart-monteres-paa-iss-og-saa-bliver-det-spaendende">

    <div class="field field-field-teaser-media">
    <div class="field-items">
          <div class="field-item even"><div id="file-152889" class="file file-image file-image-jpeg">
  <picture  title="Det danske rumprojekt ASIM blev succesfuldt sendt afsted med en genbrugt Falcon 9 raket fra den amerikanske rumvirksomhed SpaceX">
<!--[if IE 9]><video style="display: none;"><![endif]-->
<source srcset="https://videnskab.dk/sites/default/files/styles/article_teasers_desktop/public/article_media/first_reflight_-_01_img_6067.jpg?itok=umis2teh&amp;timestamp=1522770440 1x" media="(min-width: 980px)" />
<source srcset="https://videnskab.dk/sites/default/files/styles/article_teasers_tablet/public/article_media/first_reflight_-_01_img_6067.jpg?itok=PIvNxiCR&amp;timestamp=1522770440 1x" media="(min-width: 760px)" />
<source srcset="https://videnskab.dk/sites/default/files/styles/article_teasers_mobile/public/article_media/first_reflight_-_01_img_6067.jpg?itok=KsjJsDmG&amp;timestamp=1522770440 1x" media="(min-width: 0px)" />
<!--[if IE 9]></video><![endif]-->
<img  src="https://videnskab.dk/sites/default/files/styles/article_teasers_mobile/public/article_media/first_reflight_-_01_img_6067.jpg?itok=KsjJsDmG&amp;timestamp=1522770440" alt="ASIM SpaceX raket" title="Det danske rumprojekt ASIM blev succesfuldt sendt afsted med en genbrugt Falcon 9 raket fra den amerikanske rumvirksomhed SpaceX" />
</picture></div>
</div>
      </div>
</div>
  </a>

  <div class="article-content__sideline-wrapper">
    <div class="field field-field-topics article-content__topics">
    <div class="field-items">

      <div class="field-item even field-item-rumfart"><a href="/topic/rumfart">Rumfart</a></div>
      </div>
</div>
<div class="field field-field-teaser-title article-content__teaser-title">
    <div class="field-items">
          <div class="field-item even"><a href="/teknologi-innovation/asim-skal-snart-monteres-paa-iss-og-saa-bliver-det-spaendende">ASIM skal snart monteres på ISS: »Og så bliver det spændende«</a></div>
      </div>
</div>
  </div>

</article>



                </div>
														                <div class="frontpage-region--26 inner region half">






    <article  class="node node-article article-content--teaser article-content--teaser--a forskerzonen-article">
    <div class="forskerzonen-label">ForskerZonen</div>    <a class="article-content__image-link" href="/navne">

    <div class="field field-field-teaser-media">
    <div class="field-items">
          <div class="field-item even"><div id="file-143939" class="file file-image file-image-jpeg">
  <picture  title="Hvem har fået et professorat, hvem har fået en stor bevilling til at forske i hvad, og hvem har vundet en særlig pris? Det får du fremover overblik over her. (Foto: Shutterstock)">
<!--[if IE 9]><video style="display: none;"><![endif]-->
<source srcset="https://videnskab.dk/sites/default/files/styles/article_teasers_desktop/public/article_media/nyt_om_navne_forskere.jpg?itok=yobYC42x&amp;timestamp=1504973464 1x" media="(min-width: 980px)" />
<source srcset="https://videnskab.dk/sites/default/files/styles/article_teasers_tablet/public/article_media/nyt_om_navne_forskere.jpg?itok=mP3rpcdV&amp;timestamp=1504973464 1x" media="(min-width: 760px)" />
<source srcset="https://videnskab.dk/sites/default/files/styles/article_teasers_mobile/public/article_media/nyt_om_navne_forskere.jpg?itok=MHSIQxqS&amp;timestamp=1504973464 1x" media="(min-width: 0px)" />
<!--[if IE 9]></video><![endif]-->
<img  src="https://videnskab.dk/sites/default/files/styles/article_teasers_mobile/public/article_media/nyt_om_navne_forskere.jpg?itok=MHSIQxqS&amp;timestamp=1504973464" alt="Nyt om navne forskerZonen overblik" title="Hvem har fået et professorat, hvem har fået en stor bevilling til at forske i hvad, og hvem har vundet en særlig pris? Det får du fremover overblik over her. (Foto: Shutterstock)" />
</picture></div>
</div>
      </div>
</div>
  </a>

  <div class="article-content__sideline-wrapper">
    <div class="field field-field-topics article-content__topics">
    <div class="field-items">

      <div class="field-item even field-item-bag-om-forskningen"><a href="/topic/bag-om-forskningen">Bag om forskningen</a></div>

      <div class="field-item odd field-item-forskerzonen"><a href="/forskerzonen">ForskerZonen</a></div>
      </div>
</div>
<div class="field field-field-teaser-title article-content__teaser-title">
    <div class="field-items">
          <div class="field-item even"><a href="/navne">Nyt om navne: KU-forsker citeret mere end 200.000 gange</a></div>
      </div>
</div>
  </div>

</article>



                </div>
														                <div class="frontpage-region--27 inner region full">




<section>
  <div class="field field-field-researcher-zone-title">
    <div class="field-items">
          <div class="field-item even">ForskerZonen</div>
      </div>
</div>
</section>




<div class="forskerzonen-teasers-front">






<article>
    <div class="forskerzonen-author-avatar">
        <a href="author/author/2842">
                        <img src="https://videnskab.dk/profiles/videnskab/themes/custom/videnskab_theme/src/images/forskerzonen-avatar.png"/>
                  </a>
    </div>

    <div class="forskerzonen-author-teaser">
        <div class="field_teaser_title">
            <a href="/kultur-samfund/personer-med-handicap-kan-hjaelpe-med-at-loese-manglen-paa-arbejdskraft">
              Personer med handicap kan hjælpe med at løse manglen på arbejdskraft            </a>
        </div>

        <h3 class="author-profile__card__name">
          Finn Amby        </h3>

        <div class="author-profile__card__title">
            <div class="author__title">
              Adjunkt (ph.d.) på VIA University College i Aarhus            </div>
        </div>
    </div>

</article>

<article>
    <div class="forskerzonen-author-avatar">
        <a href="author/author/2885">
                        <img src="https://videnskab.dk/profiles/videnskab/themes/custom/videnskab_theme/src/images/forskerzonen-avatar.png"/>
                  </a>
    </div>

    <div class="forskerzonen-author-teaser">
        <div class="field_teaser_title">
            <a href="/naturvidenskab/fremtidens-gadelamper-kan-vaere-oplyst-af-alger">
              Fremtidens gadelamper kan være oplyst af alger            </a>
        </div>

        <h3 class="author-profile__card__name">
          Kristian Ejlsted        </h3>

        <div class="author-profile__card__title">
            <div class="author__title">
              MSc. i Bioteknologi            </div>
        </div>
    </div>

</article>

<article>
    <div class="forskerzonen-author-avatar">
        <a href="author/author/2303">
                        <img src="https://videnskab.dk/sites/default/files/styles/media_thumbnail/public/author_media/lise_g.jpg?itok=OFzsGtmV"/>
                  </a>
    </div>

    <div class="forskerzonen-author-teaser">
        <div class="field_teaser_title">
            <a href="/krop-sundhed/vaegttab-kan-beskytte-overvaegtige-drenge-mod-type-2-diabetes">
              Vægttab kan beskytte drenge med overvægt mod type 2-diabetes            </a>
        </div>

        <h3 class="author-profile__card__name">
          Lise Geisler Bjerregaard        </h3>

        <div class="author-profile__card__title">
            <div class="author__title">
              Postdoc ved Center for Klinisk Forskning og Forebyggelse, Bispebjerg og Frederiksberg Hospital            </div>
        </div>
    </div>

</article>

<article>
    <div class="forskerzonen-author-avatar">
        <a href="author/author/1122">
                        <img src="https://videnskab.dk/profiles/videnskab/themes/custom/videnskab_theme/src/images/forskerzonen-avatar.png"/>
                  </a>
    </div>

    <div class="forskerzonen-author-teaser">
        <div class="field_teaser_title">
            <a href="/kultur-samfund/naar-regeringen-trumfer-den-danske-model-med-lovindgreb">
              Sådan kan regeringen gribe ind i en storkonflikt            </a>
        </div>

        <h3 class="author-profile__card__name">
          Laust Høgedahl        </h3>

        <div class="author-profile__card__title">
            <div class="author__title">
              postdoc, Institut for Statskundskab, Aalborg Universitet            </div>
        </div>
    </div>

</article>


  </div>

                </div>
														                <div class="frontpage-region--28 inner region full">




<section>
  <div class="field field-field-html-box">
    <div class="field-items">
          <div class="field-item even"><link href="//videnskab.dk/path/to/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
<div style="border-width: 3px; border-style: solid; border-color: #f2f2f2; background: #f2f2f2;">
<img src="//videnskab.dk/sites/default/files/styles/columns_12_12_desktop/public/videnskab.dk_podcast_ikon_fontawesome.png" style="float:right;width:75px; margin:18px;">
<h2 style="margin:18px;">Lyt på Videnskab.dk! </h2>
<h3 style="font-size:16px; margin:0px 0px 0px 18px;">
Hver uge laver vi digital radio, der udkommer i form af en podcast, hvor vi går i dybden med aktuelle emner fra forskningens verden. Du kan lytte til den nyeste podcast i afspilleren herunder eller via en podcast-app på din smartphone.<br><br>
Har du en iPhone eller iPad, kan du finde vores podcasts i <a href="https://itunes.apple.com/dk/podcast/videnskab-dk/id1193135586?mt=2">iTunes</a> og afspille dem i Apples <a href="https://itunes.apple.com/dk/app/podcasts/id525463029?mt=8">podcast app</a>. Bruger du Android, kan du med fordel bruge <a href="https://play.google.com/store/apps/details?id=com.soundcloud.android&amp;hl=da">SoundClouds app</a>.<br>
Du kan se alle vores podcast-artikler <a href="//videnskab.dk/podcast" target="_blank">her</a> eller se hele playlisten <a href="https://soundcloud.com/videnskabdk" target="_blank">på SoundCloud</a></h3>
<iframe allow="autoplay" frameborder="no" height="166" scrolling="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/425164113&amp;color=%23ff0000&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true" width="100%"></iframe>

</div>
<br>
<p><a href="//videnskab.dk/kurser" target="_Blank"><img src="//videnskab.dk/sites/default/files/styles/columns_12_12_desktop/public/sharp_vi_tilbyder_banner_til_forsiden_paa_videnskab.dk_.png" width="100%"></a></p></div>
      </div>
</div>
</section>



                </div>
									      </section>
	      <section class="frontpage-region frontpage-region--h">
									                <div class="frontpage-region--29 inner region full">

<div id="frontpage-tema-wrapper" class="frontpage-tema-wrapper">
<div class="front-tema-title">



<section>
  <div class="field field-field-tema">
      <div class="field-label">Tema:&nbsp;</div>
    <div class="field-items">
          <div class="field-item even">Red Verden</div>
      </div>
</div>
</section>


  </div>







    <article  class="node node-article article-content--teaser article-content--teaser--a">
        <a class="article-content__image-link" href="/kultur-samfund/videnskabdk-vil-redde-verden-vil-du-hjaelpe-os">

    <div class="field field-field-teaser-media">
    <div class="field-items">
          <div class="field-item even"><div id="file-149801" class="file file-image file-image-png">
  <picture  title="Giv os dit indspark til, hvad vi skal fokusere på, i kommentarfeltet under artiklen eller i vores nyoprettede Facebook-gruppe Videnskab.dk – RED VERDEN. (Foto: NASA)">
<!--[if IE 9]><video style="display: none;"><![endif]-->
<source srcset="https://videnskab.dk/sites/default/files/styles/article_teasers_desktop/public/article_media/jorden_nasa.png?itok=4sltl4Ey&amp;timestamp=1511513802 1x" media="(min-width: 980px)" />
<source srcset="https://videnskab.dk/sites/default/files/styles/article_teasers_tablet/public/article_media/jorden_nasa.png?itok=OYqqT2Ra&amp;timestamp=1511513802 1x" media="(min-width: 760px)" />
<source srcset="https://videnskab.dk/sites/default/files/styles/article_teasers_mobile/public/article_media/jorden_nasa.png?itok=kSM6U0ds&amp;timestamp=1511513802 1x" media="(min-width: 0px)" />
<!--[if IE 9]></video><![endif]-->
<img  src="https://videnskab.dk/sites/default/files/styles/article_teasers_mobile/public/article_media/jorden_nasa.png?itok=kSM6U0ds&amp;timestamp=1511513802" alt="Red Verden, Videnskab.dk, projekt, gymnasier, sult, klima, uddannelse, løsninger, konstruktiv journalistiik" title="Giv os dit indspark til, hvad vi skal fokusere på, i kommentarfeltet under artiklen eller i vores nyoprettede Facebook-gruppe Videnskab.dk – RED VERDEN. (Foto: NASA)" />
</picture></div>
</div>
      </div>
</div>
  </a>

  <div class="article-content__sideline-wrapper">
    <div class="field field-field-topics article-content__topics">
    <div class="field-items">

      <div class="field-item even field-item-jorden"><a href="/topic/jorden">Jorden</a></div>

      <div class="field-item odd field-item-red-verden"><a href="/topic/red-verden">Red Verden</a></div>
      </div>
</div>
<div class="field field-field-teaser-title article-content__teaser-title">
    <div class="field-items">
          <div class="field-item even"><a href="/kultur-samfund/videnskabdk-vil-redde-verden-vil-du-hjaelpe-os">Videnskab.dk vil redde verden – vil du hjælpe os?</a></div>
      </div>
</div>
  </div>

</article>
    <article  class="node node-article article-content--teaser article-content--teaser--a forskerzonen-article">
    <div class="forskerzonen-label">ForskerZonen</div>    <a class="article-content__image-link" href="/naturvidenskab/mikroplast-i-havet-10-ting-du-boer-undgaa-for-at-afhjaelpe-forureningen">

    <div class="field field-field-teaser-media">
    <div class="field-items">
          <div class="field-item even"><div id="file-151819" class="file file-image file-image-jpeg">
  <picture  title="Listen over kilder til plastik i havet er lang. En stor del af dette plastik bliver med tiden nedbrudt til mikroplastik, men mikroplast udledes også til havet på andre måder, fra eksempelvis tekstiler, vejdæk, maling og tennisbolde.">
<!--[if IE 9]><video style="display: none;"><![endif]-->
<source srcset="https://videnskab.dk/sites/default/files/styles/article_teasers_desktop/public/article_media/mikroplastik_1.jpg?itok=BzOyrKue&amp;timestamp=1518851019 1x" media="(min-width: 980px)" />
<source srcset="https://videnskab.dk/sites/default/files/styles/article_teasers_tablet/public/article_media/mikroplastik_1.jpg?itok=TxhOaMWJ&amp;timestamp=1518851019 1x" media="(min-width: 760px)" />
<source srcset="https://videnskab.dk/sites/default/files/styles/article_teasers_mobile/public/article_media/mikroplastik_1.jpg?itok=Ouju_nEx&amp;timestamp=1518851019 1x" media="(min-width: 0px)" />
<!--[if IE 9]></video><![endif]-->
<img  src="https://videnskab.dk/sites/default/files/styles/article_teasers_mobile/public/article_media/mikroplastik_1.jpg?itok=Ouju_nEx&amp;timestamp=1518851019" alt="Mikroplastik havet forurening cigaretskod, vaskekapsler opvasketabs mikroperler kosmetik plejeprodukter tennisbolde glitter bildæk nedbrudt syntetsik beklædning teposer papkopper maling tiltag problem fødekæde fisk dyr mennesker indånde " title="Listen over kilder til plastik i havet er lang. En stor del af dette plastik bliver med tiden nedbrudt til mikroplastik, men mikroplast udledes også til havet på andre måder, fra eksempelvis tekstiler, vejdæk, maling og tennisbolde." />
</picture></div>
</div>
      </div>
</div>
  </a>

  <div class="article-content__sideline-wrapper">
    <div class="field field-field-topics article-content__topics">
    <div class="field-items">

      <div class="field-item even field-item-forskerzonen"><a href="/forskerzonen">ForskerZonen</a></div>

      <div class="field-item odd field-item-havet"><a href="/topic/havet">Havet</a></div>

      <div class="field-item even field-item-red-verden"><a href="/topic/red-verden">Red Verden</a></div>
      </div>
</div>
<div class="field field-field-teaser-title article-content__teaser-title">
    <div class="field-items">
          <div class="field-item even"><a href="/naturvidenskab/mikroplast-i-havet-10-ting-du-boer-undgaa-for-at-afhjaelpe-forureningen">Mikroplast: 10 ting, du bør undgå for at redde havene</a></div>
      </div>
</div>
  </div>

</article>
    <article  class="node node-article article-content--teaser article-content--teaser--a">
        <a class="article-content__image-link" href="/kultur-samfund/kan-atomkraft-redde-verden">

    <div class="field field-field-teaser-media">
    <div class="field-items">
          <div class="field-item even"><div id="file-152453" class="file file-image file-image-jpeg">
  <picture  title="Det er slet ikke til at komme uden om atomkraft, hvis man spørger flere af de forskere, som Videnskab.dk har talt med. ">
<!--[if IE 9]><video style="display: none;"><![endif]-->
<source srcset="https://videnskab.dk/sites/default/files/styles/article_teasers_desktop/public/article_media/atomkraftvaerker.jpg?itok=ctNCURe0&amp;timestamp=1522148683 1x" media="(min-width: 980px)" />
<source srcset="https://videnskab.dk/sites/default/files/styles/article_teasers_tablet/public/article_media/atomkraftvaerker.jpg?itok=f9t-TgPA&amp;timestamp=1522148683 1x" media="(min-width: 760px)" />
<source srcset="https://videnskab.dk/sites/default/files/styles/article_teasers_mobile/public/article_media/atomkraftvaerker.jpg?itok=REJpa_o4&amp;timestamp=1522148683 1x" media="(min-width: 0px)" />
<!--[if IE 9]></video><![endif]-->
<img  src="https://videnskab.dk/sites/default/files/styles/article_teasers_mobile/public/article_media/atomkraftvaerker.jpg?itok=REJpa_o4&amp;timestamp=1522148683" alt="Atomkraft kernekraft kraftværker atomkraftværker kernekraftværker energi atomenergi" title="Det er slet ikke til at komme uden om atomkraft, hvis man spørger flere af de forskere, som Videnskab.dk har talt med. " />
</picture></div>
</div>
      </div>
</div>
  </a>

  <div class="article-content__sideline-wrapper">
    <div class="field field-field-topics article-content__topics">
    <div class="field-items">

      <div class="field-item even field-item-energi"><a href="/topic/energi">Energi</a></div>

      <div class="field-item odd field-item-red-verden"><a href="/topic/red-verden">Red Verden</a></div>
      </div>
</div>
<div class="field field-field-teaser-title article-content__teaser-title">
    <div class="field-items">
          <div class="field-item even"><a href="/kultur-samfund/kan-atomkraft-redde-verden">Kan atomkraft redde verden?</a></div>
      </div>
</div>
  </div>

</article>



</div>
                </div>
									      </section>
	      <section class="frontpage-region frontpage-region--i">
									                <div class="frontpage-region--30 inner region half">






    <article  class="node node-article article-content--teaser article-content--teaser--a">
        <a class="article-content__image-link" href="/teknologi-innovation/livestream-kl-2230-se-opsendelsen-af-danmarks-stoerste-rumprojekt-asim">
          <div class="icons">
                <span class="icons__item icons__item--video">

        </span>

              </div>

    <div class="field field-field-teaser-media">
    <div class="field-items">
          <div class="field-item even"><div id="file-152825" class="file file-image file-image-jpeg">
  <picture  title="Space X">
<!--[if IE 9]><video style="display: none;"><![endif]-->
<source srcset="https://videnskab.dk/sites/default/files/styles/article_teasers_desktop/public/article_media/spacex_0.jpg?itok=_2j3JxvM&amp;timestamp=1522267312 1x" media="(min-width: 980px)" />
<source srcset="https://videnskab.dk/sites/default/files/styles/article_teasers_tablet/public/article_media/spacex_0.jpg?itok=jsntmfzA&amp;timestamp=1522267312 1x" media="(min-width: 760px)" />
<source srcset="https://videnskab.dk/sites/default/files/styles/article_teasers_mobile/public/article_media/spacex_0.jpg?itok=4o9NWYGv&amp;timestamp=1522267312 1x" media="(min-width: 0px)" />
<!--[if IE 9]></video><![endif]-->
<img  src="https://videnskab.dk/sites/default/files/styles/article_teasers_mobile/public/article_media/spacex_0.jpg?itok=4o9NWYGv&amp;timestamp=1522267312" alt="Space X" title="Space X" />
</picture></div>
</div>
      </div>
</div>
  </a>

  <div class="article-content__sideline-wrapper">
    <div class="field field-field-topics article-content__topics">
    <div class="field-items">

      <div class="field-item even field-item-rumfart"><a href="/topic/rumfart">Rumfart</a></div>
      </div>
</div>
<div class="field field-field-teaser-title article-content__teaser-title">
    <div class="field-items">
          <div class="field-item even"><a href="/teknologi-innovation/livestream-kl-2230-se-opsendelsen-af-danmarks-stoerste-rumprojekt-asim">ASIM er i rummet! Se eller gense opsendelsen af Danmarks største rumprojekt</a></div>
      </div>
</div>
  </div>

</article>



                </div>
														                <div class="frontpage-region--31 inner region half">






    <article  class="node node-article article-content--teaser article-content--teaser--a">
        <a class="article-content__image-link" href="/kultur-samfund/historiker-varslet-storkonflikt-kan-blive-skelsaettende">

    <div class="field field-field-teaser-media">
    <div class="field-items">
          <div class="field-item even"><div id="file-152463" class="file file-image file-image-jpeg">
  <picture  title="Offentligt ansatte kan snart ryge ud i en storkonflikt med deres arbejdsgivere.">
<!--[if IE 9]><video style="display: none;"><![endif]-->
<source srcset="https://videnskab.dk/sites/default/files/styles/article_teasers_desktop/public/article_media/strejke.jpg?itok=Mfu1GYzk&amp;timestamp=1521207265 1x" media="(min-width: 980px)" />
<source srcset="https://videnskab.dk/sites/default/files/styles/article_teasers_tablet/public/article_media/strejke.jpg?itok=bUYt64fg&amp;timestamp=1521207265 1x" media="(min-width: 760px)" />
<source srcset="https://videnskab.dk/sites/default/files/styles/article_teasers_mobile/public/article_media/strejke.jpg?itok=voF0OlCb&amp;timestamp=1521207265 1x" media="(min-width: 0px)" />
<!--[if IE 9]></video><![endif]-->
<img  src="https://videnskab.dk/sites/default/files/styles/article_teasers_mobile/public/article_media/strejke.jpg?itok=voF0OlCb&amp;timestamp=1521207265" alt="strejke lockout storkonflikt arbejdsmarkedsmodel overenskomst septemberforlig arbejdsmarked fagbevægelsen  " title="Offentligt ansatte kan snart ryge ud i en storkonflikt med deres arbejdsgivere." />
</picture></div>
</div>
      </div>
</div>
  </a>

  <div class="article-content__sideline-wrapper">
    <div class="field field-field-topics article-content__topics">
    <div class="field-items">

      <div class="field-item even field-item-arbejde"><a href="/topic/arbejde">Arbejde</a></div>
      </div>
</div>
<div class="field field-field-teaser-title article-content__teaser-title">
    <div class="field-items">
          <div class="field-item even"><a href="/kultur-samfund/historiker-varslet-storkonflikt-kan-blive-skelsaettende">Varslet storkonflikt kan blive skelsættende</a></div>
      </div>
</div>
  </div>

</article>



                </div>
									      </section>
	      <section class="frontpage-region frontpage-region--footer">
									                <div class="frontpage-region--32 inner region full">





  <a href="/s?query=&amp;sort_by=field_publication_date&amp;sort_order=DESC">Se flere artikler</a>



<div class="events-overview event-teasers-highlight">


        <h2 class="pane-title">Det sker</h2>


  <div class="view view-events view-id-events view-display-id-panel_pane_4 view-dom-id-1f589ec232214cbd18fce969b6e609ba">



      <section>
              <article class="first last odd">

  <div class="views-field views-field-field-teaser-image eventlist-thumb">        <div class="field-content"><a href="/node/26944"><img src="https://videnskab.dk/sites/default/files/styles/article_teasers_mobile/public/shutterstock_1020536842.jpg?itok=KtQEjjUZ" width="400" height="225" /></a></div>  </div>
  <div class="views-field views-field-field-date-and-time-1 eventlist-datestamp">        <div class="field-content"><span class="date-display-single">11/04</span> kl. <span class="date-display-single">19:00</span></div>  </div>
  <div class="views-field views-field-title eventlist-title">        <span class="field-content"><a href="/node/26944">Vin &amp; Videnskab - Virusser og vacciner</a></span>  </div>
  <div class="views-field views-field-field-author eventlist-speaker">    <span class="views-label views-label-field-author">Oplægsholder</span>    <div class="field-content"></div>  </div>
  <div class="views-field views-field-field-address eventlist-address">    <span class="views-label views-label-field-address">Adresse</span>    <div class="field-content">Chr. Hansen Auditoriet på Center for Sundhed og Samfund, Bartholinsgade 4A, 1356 København K</div>  </div>
  <div class="views-field views-field-nothing">        <span class="field-content"><div class="in-collaboration">
   <div class="collaboration-label">I samarbejde med</div> <div class="p-container">

   </div>
</div></span>  </div>
  <div class="views-field views-field-view-node eventlist-goto">        <span class="field-content"><a href="/node/26944">Læs mere</a></span>  </div>    </article>
  </section>





  </div>


  </div>


<div class="event-teasers">


        <h2 class="pane-title">Se flere events</h2>


  <div class="view view-events view-id-events view-display-id-panel_pane_5 view-dom-id-a6bf91039240ccc9799895e3f0d680fc">



      <section>
              <article class="first odd">

  <div class="views-field views-field-field-date-and-time event-teasers-date">        <div class="field-content"><span class="date-display-single">12/04</span></div>  </div>
  <div class="views-field views-field-title event-teasers-title">        <span class="field-content"><a href="/node/26824">Vartovs Videnskab - Altings begyndelse</a></span>  </div>    </article>
            <article class="even">

  <div class="views-field views-field-field-date-and-time event-teasers-date">        <div class="field-content"><span class="date-display-single">19/04</span></div>  </div>
  <div class="views-field views-field-title event-teasers-title">        <span class="field-content"><a href="/node/26945">Vin &amp; Videnskab - Sidste nyt fra rummet - meteoritter og exoplaneter</a></span>  </div>    </article>
            <article class="last odd">

  <div class="views-field views-field-field-date-and-time event-teasers-date">        <div class="field-content"><span class="date-display-single">20/04</span></div>  </div>
  <div class="views-field views-field-title event-teasers-title">        <span class="field-content"><a href="/node/27357">Forskningens Døgn 2018</a></span>  </div>    </article>
  </section>




<div class="more-link">
  <a href="/events">
    Se flere events  </a>
</div>


  </div>


  </div>

                </div>
									      </section>
	      <section class="frontpage-region frontpage-region--banner_a">
									                <div class="frontpage-region--33 inner region full">






<div class="banner full-width front" id="div-gpt-ad-taxonomy/term/111-10" style="width:930px;height:180px;margin:0 auto;">
    <!--<script type='text/javascript'>
        //googletag.cmd.push(function () {
        //    googletag.display('div-gpt-ad-taxonomy/term/111-10');
        //});
    </script> -->
</div>




                </div>
									      </section>

</div>


      </div>
    </main>

      <footer role="contentinfo" class="footer page-wrapper__footer">
      <div class="inner top">





  <div class="newsletter-signup">
	<h2 class="pane-title">Tilmeld dig vores nyhedsbrev</h2>
  <p>Tilmeld dig vores gratis nyhedsbrev. Det udkommer alle hverdage samt søndage med seneste nyt fra videnskabens verden.</p>

  <div class="newsletter-form">

		<div id="mc_embed_signup">
		<form action="//videnskab.us2.list-manage.com/subscribe/post?u=e3c3e7ba63a293af2fbe0e734&amp;id=d2f5c83eb4" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
		    <div id="mc_embed_signup_scroll">

		<div class="mc-field-group">
			<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="E-mail">
		</div>
			<div id="mce-responses" class="clear">
				<div class="response" id="mce-error-response" style="display:none"></div>
				<div class="response" id="mce-success-response" style="display:none"></div>
			</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
		    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_e3c3e7ba63a293af2fbe0e734_d2f5c83eb4" tabindex="-1" value=""></div>
		    <div class="clear"><input type="submit" value="Tilmeld" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
		    </div>
		</form>
		</div>

  </div>
</div>



      </div>
      <div class="inner main">

<div class="footer-menu column">


        <h2 class="pane-title">Om Videnskab.dk</h2>


  <ul class="menu"><li class="first"><a href="/side/redaktionelt-program" title="">Redaktionelt program</a></li>
<li><a href="/side/redaktionen" title="">Find medarbejder</a></li>
<li><a href="/side/partnere" title="">Partnere</a></li>
<li><a href="/side/rettigheder" title="">Rettigheder</a></li>
<li><a href="/side/privatlivspolitik" title="">Privatlivspolitik</a></li>
<li><a href="/side/vilkaar-for-kommentarer-paa-videnskabdk" title="">Vilkår for kommentarer</a></li>
<li><a href="http://videnskab.dk/side/nyhedsbrev" title="Nyhedsbrev">Nyhedsbrev</a></li>
<li><a href="http://videnskab.dk/side/kurser-i-kommunikation-og-formidling" title="Kurser i kommunikation og formidling">Kurser</a></li>
<li><a href="http://videnskab.dk/side/annoncer-paa-videnskabdk" title="Annoncér på Videnskab.dk">Annoncer</a></li>
<li class="last"><a href="javascript:CookieConsent.show()">Cookies</a></li>
</ul>

  </div>






  <div class="contact-block column">
  <h2 class="pane-title">Kontakt</h2>
  <p>
    Ansvarshavende chefredaktør:<br/><br/>
    Vibeke Hjortlund<br/>
    <a href="mailto:redaktion@videnskab.dk" target="_top"><u>redaktion@videnskab.dk</u></a><br/><br/>
  </p>
  <p>
    Carl Jacobsens Vej 16, <br/>
    opg. 16, 2. sal<br/>
    2500 Valby<br/>
  </p>
  <p>Tlf:  70 70 17 88</p>
</div>


      </div>
      <div class="inner bottom">





  <ul class="social-media social-media--footer">
    <li class="social-media__entry">
    <a target="_blank" class="social-media__link social-media__link--facebook" href="https://www.facebook.com/videnskabdk/?fref=ts">Facebook</a>
  </li>
    <li class="social-media__entry">
    <a target="_blank" class="social-media__link social-media__link--twitter" href="https://twitter.com/videnskabdk?lang=da">Twitter</a>
  </li>
  </ul>








  <script id="CookieConsent" src="https://policy.cookieinformation.com/uc.js" data-cbid="f7ba3171-40be-4081-8f4a-6d15a661feb6" type="text/javascript"></script>


        <div class="to-top-wrapper">
          <span class="scroll-up">To Top</span>
        </div>
      </div>
    </footer>

</div>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js"></script>
<script type="text/javascript">
<!--//--><![CDATA[//><!--
window.jQuery || document.write("<script src='/profiles/videnskab/modules/contrib/jquery_update/replace/jquery/1.8/jquery.js'>\x3C/script>")
//--><!]]>
</script>
<script type="text/javascript" src="https://videnskab.dk/sites/default/files/js/js_V1ZuwJK9uzfm6fFffOcHHubfxnimoxnbgG58pvTQdpY.js"></script>
<script type="text/javascript">
<!--//--><![CDATA[//><!--
document.createElement( "picture" );
//--><!]]>
</script>
<script type="text/javascript" src="https://videnskab.dk/sites/default/files/js/js_iB6eO8rrpPC2MvPS0uMPXo7y8xG8Fk94X2KdVPH1aEE.js"></script>
<script type="text/javascript" src="https://videnskab.dk/sites/default/files/js/js_YJzUsteP6tvS62MwQPJwsY41sM0opPFMuPNBvjLWXZc.js"></script>
<script type="text/javascript">
<!--//--><![CDATA[//><!--
var gallup_s = 'videnskab'; var gallup_cp = 'videnskab'; var gallup_spring = '/profiles/videnskab/modules/custom/videnskab_shared/js/spring.js';
//--><!]]>
</script>
<script type="text/javascript">
<!--//--><![CDATA[//><!--
var springq = springq || []; springq.push({ s: gallup_s, cp: gallup_cp, url: document.location.href});
//--><!]]>
</script>
<script type="text/javascript" src="https://videnskab.dk/sites/default/files/js/js_ELlqVbun3w_F-6iTRs-YSktXd1cfQ0biiEBKfN0pUXc.js"></script>
<script type="text/javascript">
<!--//--><![CDATA[//><!--
jQuery.extend(Drupal.settings, {"basePath":"\/","pathPrefix":"","ajaxPageState":{"theme":"videnskab_theme","theme_token":"Lm3KL1cf8El0N7A44l-biNep_L9sqDQvhUytIfGgZ4o","js":{"profiles\/videnskab\/modules\/contrib\/picture\/picturefill2\/picturefill.min.js":1,"profiles\/videnskab\/modules\/contrib\/picture\/picture.min.js":1,"0":1,"\/\/ajax.googleapis.com\/ajax\/libs\/jquery\/1.8.3\/jquery.js":1,"1":1,"misc\/jquery.once.js":1,"misc\/drupal.js":1,"2":1,"profiles\/videnskab\/modules\/contrib\/fb_instant_articles\/modules\/fb_instant_articles_display\/js\/admin.js":1,"profiles\/videnskab\/modules\/contrib\/extlink\/extlink.js":1,"public:\/\/languages\/da_YJV7v9av5KxIl27iPddK2wdCMWvU2Svym0SI7pbxvLA.js":1,"3":1,"4":1,"profiles\/videnskab\/themes\/global\/adapt_basetheme\/js\/respond.js":1,"profiles\/videnskab\/themes\/global\/adapt_basetheme\/js\/script.js":1,"profiles\/videnskab\/themes\/global\/adapt_basetheme\/js\/ios-orientationchange-fix.js":1,"profiles\/videnskab\/themes\/custom\/videnskab_theme\/dist\/bundle.js":1,"profiles\/videnskab\/themes\/custom\/videnskab_theme\/dist\/photoswipe.min.js":1,"profiles\/videnskab\/themes\/custom\/videnskab_theme\/dist\/photoswipe-ui-default.js":1},"css":{"modules\/system\/system.base.css":1,"modules\/system\/system.menus.css":1,"modules\/system\/system.messages.css":1,"modules\/system\/system.theme.css":1,"profiles\/videnskab\/modules\/contrib\/date\/date_api\/date.css":1,"profiles\/videnskab\/modules\/contrib\/date\/date_popup\/themes\/datepicker.1.7.css":1,"modules\/field\/theme\/field.css":1,"modules\/node\/node.css":1,"profiles\/videnskab\/modules\/contrib\/picture\/picture_wysiwyg.css":1,"modules\/user\/user.css":1,"profiles\/videnskab\/modules\/contrib\/extlink\/extlink.css":1,"profiles\/videnskab\/modules\/contrib\/views\/css\/views.css":1,"profiles\/videnskab\/modules\/contrib\/ctools\/css\/ctools.css":1,"profiles\/videnskab\/modules\/contrib\/panels\/css\/panels.css":1,"profiles\/videnskab\/themes\/custom\/videnskab_theme\/templates\/layouts\/topic_frontpage_a\/topic-frontpage-a.css":1,"profiles\/videnskab\/modules\/contrib\/node_embed\/plugins\/node_embed\/node_embed.css":1,"profiles\/videnskab\/themes\/global\/adapt_basetheme\/comment-rtl.css":1,"profiles\/videnskab\/themes\/global\/adapt_basetheme\/comment.css":1,"profiles\/videnskab\/themes\/global\/adapt_basetheme\/field-rtl.css":1,"profiles\/videnskab\/themes\/global\/adapt_basetheme\/field.css":1,"profiles\/videnskab\/themes\/global\/adapt_basetheme\/file.css":1,"profiles\/videnskab\/themes\/global\/adapt_basetheme\/filter.css":1,"profiles\/videnskab\/themes\/global\/adapt_basetheme\/image-rtl.css":1,"profiles\/videnskab\/themes\/global\/adapt_basetheme\/image.css":1,"profiles\/videnskab\/themes\/global\/adapt_basetheme\/locale-rtl.css":1,"profiles\/videnskab\/themes\/global\/adapt_basetheme\/locale.css":1,"profiles\/videnskab\/themes\/global\/adapt_basetheme\/menu.css":1,"profiles\/videnskab\/themes\/global\/adapt_basetheme\/node.css":1,"profiles\/videnskab\/themes\/global\/adapt_basetheme\/search-rtl.css":1,"profiles\/videnskab\/themes\/global\/adapt_basetheme\/search.css":1,"profiles\/videnskab\/themes\/global\/adapt_basetheme\/system.base-rtl.css":1,"profiles\/videnskab\/themes\/global\/adapt_basetheme\/system.base.css":1,"profiles\/videnskab\/themes\/global\/adapt_basetheme\/system.maintenance.css":1,"profiles\/videnskab\/themes\/global\/adapt_basetheme\/system.menus-rtl.css":1,"profiles\/videnskab\/themes\/global\/adapt_basetheme\/system.menus.css":1,"profiles\/videnskab\/themes\/global\/adapt_basetheme\/system.messages-rtl.css":1,"profiles\/videnskab\/themes\/global\/adapt_basetheme\/system.messages.css":1,"profiles\/videnskab\/themes\/global\/adapt_basetheme\/system.theme-rtl.css":1,"profiles\/videnskab\/themes\/global\/adapt_basetheme\/system.theme.css":1,"profiles\/videnskab\/themes\/global\/adapt_basetheme\/taxonomy.css":1,"profiles\/videnskab\/themes\/global\/adapt_basetheme\/user-rtl.css":1,"profiles\/videnskab\/themes\/global\/adapt_basetheme\/user.css":1,"profiles\/videnskab\/themes\/global\/adapt_basetheme\/addressfield-rtl.css":1,"profiles\/videnskab\/themes\/global\/adapt_basetheme\/addressfield.css":1,"profiles\/videnskab\/themes\/global\/adapt_basetheme\/entity.theme.css":1,"profiles\/videnskab\/themes\/global\/adapt_basetheme\/field_group-rtl.css":1,"profiles\/videnskab\/themes\/global\/adapt_basetheme\/field_group.css":1,"profiles\/videnskab\/themes\/global\/adapt_basetheme\/horizontal-tabs-rtl.css":1,"profiles\/videnskab\/themes\/global\/adapt_basetheme\/horizontal-tabs.css":1,"profiles\/videnskab\/themes\/global\/adapt_basetheme\/multipage-rtl.css":1,"profiles\/videnskab\/themes\/global\/adapt_basetheme\/multipage.css":1,"profiles\/videnskab\/themes\/global\/adapt_basetheme\/link-rtl.css":1,"profiles\/videnskab\/themes\/global\/adapt_basetheme\/link.css":1,"profiles\/videnskab\/themes\/global\/adapt_basetheme\/panels.css":1,"profiles\/videnskab\/themes\/global\/adapt_basetheme\/panels_dnd.css":1,"profiles\/videnskab\/themes\/global\/adapt_basetheme\/panels_page.css":1,"profiles\/videnskab\/themes\/global\/adapt_basetheme\/panelizer-ipe.css":1,"profiles\/videnskab\/themes\/global\/adapt_basetheme\/pm_existing_pages.css":1,"profiles\/videnskab\/themes\/global\/adapt_basetheme\/strongarm.css":1,"profiles\/videnskab\/themes\/global\/adapt_basetheme\/views-rtl.css":1,"profiles\/videnskab\/themes\/global\/adapt_basetheme\/views.css":1,"profiles\/videnskab\/themes\/global\/adapt_basetheme\/commerce_cart.theme.css":1,"profiles\/videnskab\/themes\/global\/adapt_basetheme\/commerce_checkout.base-rtl.css":1,"profiles\/videnskab\/themes\/global\/adapt_basetheme\/commerce_checkout.base.css":1,"profiles\/videnskab\/themes\/global\/adapt_basetheme\/commerce_checkout.theme-rtl.css":1,"profiles\/videnskab\/themes\/global\/adapt_basetheme\/commerce_checkout.theme.css":1,"profiles\/videnskab\/themes\/global\/adapt_basetheme\/commerce_customer.theme.css":1,"profiles\/videnskab\/themes\/global\/adapt_basetheme\/commerce_line_item.theme-rtl.css":1,"profiles\/videnskab\/themes\/global\/adapt_basetheme\/commerce_line_item.theme.css":1,"profiles\/videnskab\/themes\/global\/adapt_basetheme\/commerce_order.theme.css":1,"profiles\/videnskab\/themes\/global\/adapt_basetheme\/commerce_payment.theme-rtl.css":1,"profiles\/videnskab\/themes\/global\/adapt_basetheme\/commerce_payment.theme.css":1,"profiles\/videnskab\/themes\/global\/adapt_basetheme\/commerce_price.theme.css":1,"profiles\/videnskab\/themes\/global\/adapt_basetheme\/commerce_product.theme.css":1,"profiles\/videnskab\/themes\/global\/adapt_basetheme\/commerce_tax.theme-rtl.css":1,"profiles\/videnskab\/themes\/global\/adapt_basetheme\/commerce_tax.theme.css":1,"profiles\/videnskab\/themes\/global\/adapt_basetheme\/commerce_checkout_progress.css":1,"profiles\/videnskab\/themes\/global\/adapt_basetheme\/commerce_add_to_cart_confirmation-rtl.css":1,"profiles\/videnskab\/themes\/global\/adapt_basetheme\/commerce_add_to_cart_confirmation.css":1,"profiles\/videnskab\/themes\/global\/adapt_basetheme\/your_price.theme.css":1,"profiles\/videnskab\/themes\/global\/adapt_basetheme\/commerce_flat_rate.css":1,"profiles\/videnskab\/themes\/global\/adapt_basetheme\/commerce_search_api.css":1,"profiles\/videnskab\/themes\/custom\/videnskab_theme\/dist\/bundle.css":1,"profiles\/videnskab\/themes\/custom\/videnskab_theme\/dist\/print.css":1}},"urlIsAjaxTrusted":{"\/":true},"extlink":{"extTarget":"_blank","extClass":0,"extLabel":"(link is external)","extImgClass":0,"extSubdomains":1,"extExclude":"","extInclude":"","extCssExclude":"","extCssExplicit":"","extAlert":0,"extAlertText":"This link will take you to an external web site.","mailtoClass":0,"mailtoLabel":"(link sends e-mail)"},"target":{"value":""}});
//--><!]]>
</script>
    <script type="text/javascript" src="https://videnskab.dk/sites/default/files/js/js_7Ukqb3ierdBEL0eowfOKzTkNu-Le97OPm-UqTS5NENU.js"></script>
<script type="text/javascript">
<!--//--><![CDATA[//><!--
(function() { var scr = document.createElement('script'); scr.type = 'text/javascript'; scr.async = true; scr.src = gallup_spring; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(scr, s);})();
//--><!]]>
</script>
  </body>
</html>

BALLS;

