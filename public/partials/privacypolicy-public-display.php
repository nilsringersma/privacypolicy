<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       https://github.com/nilsringersma
 * @since      1.0.0
 *
 * @package    Privacypolicy
 * @subpackage Privacypolicy/public/partials
 */

$bedrijfsnaam       = get_option('bedrijfsnaam');
$emailadres         = get_option('emailadres');
$domeinnaam         = get_option('domeinnaam');
$datum_aanmaken     = get_option('datum_aanmaken');
$beheerder          = get_option('beheerder');
$beheerder_adres    = get_option('beheerder_adres');
$beheerder_postcode = get_option('beheerder_postcode');
$beheerder_plaats   = get_option('beheerder_plaats');
$beheerder_kvk      = get_option('beheerder_kvk');

ob_start(); ?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<div class="privacy-naw">
    <h1>Privacybeleid</h1>
    <p><?php echo $bedrijfsnaam; ?>, gevestigd op <?php echo $beheerder_adres; ?>, <?php echo $beheerder_postcode; ?> te <?php echo $beheerder_plaats; ?><?php if ( $beheerder_kvk != '' ) : ?> en geregistreerd bij de Kamer van Koophandel onder het nummer <?php echo $beheerder_kvk; ?><?php endif; ?>.</p>
</div>

<div class="privacy-intro">
    <p>Wij respecteren de privacy van onze gebruikers. Wij verwerken persoonsgegevens alleen voor het doel waarvoor ze zijn verstrekt en in overeenstemming met de Wet Bescherming Persoonsgegevens, de Telecommunicatiewet en de AVG ( GDPR ).</p>
</div>

<div class="privacy-wie">
    <h2>Over ons</h2>
    <p>De website <a href="<?php echo $domeinnaam; ?>"><?php echo $domeinnaam; ?></a> wordt beheerd door <?php echo $beheerder; ?>. <?php echo $beheerder; ?> is de verwerkingsverantwoordelijke voor de verwerking van jouw persoonsgegevens in de zin van de Wet Bescherming Persoonsgegevens (hierna: Wbp).</p>
    <span>Onze gegevens zijn:</span><br>
    <span><?php echo $beheerder; ?></span><br>
    <span><?php echo $beheerder_adres; ?></span><br>
    <span><?php echo $beheerder_postcode; ?> <?php echo $beheerder_plaats; ?></span><br>
    <?php if ( $beheerder_kvk != '' ) : ?><span>KVK: <?php echo $beheerder_kvk; ?></span><?php endif; ?><br><br>
</div>

<div class="privacy-wat">
    <h2>Welke gegevens verzamelen we?</h2>
    <p>Wanneer jij je online aanmeldt voor onze nieuwsbrief, ons contactformulieren invult, een offerte aanvraagt of andere aanvragen doet voor een van onze diensten, zal aan jou gevraagd worden om gegevens in te vullen. Wij verwerken in dat geval alleen de gegevens die je zelf aan ons verstrekt. Dit kunnen de volgende gegevens zijn:</p>
    <ul>
        <?php if ( get_option('opslag_naam') == '1' ) :?><li>Voor- en achternaam</li><?php endif; ?>
        <?php if ( get_option('opslag_email') == '1' ) :?><li>E-mailadres</li><?php endif; ?>
        <?php if ( get_option('opslag_website') == '1' ) :?><li>(Persoonlijke) website</li><?php endif; ?>
        <?php if ( get_option('opslag_telefoon') == '1' ) :?><li>Telefoonnummer</li><?php endif; ?>
        <?php if ( get_option('opslag_bedrijfsnaam') == '1' ) :?><li>Bedrijfsnaam</li><?php endif; ?>
        <?php if ( get_option('opslag_adres') == '1' ) :?><li>Straat en huisnummer</li><?php endif; ?>
        <?php if ( get_option('opslag_woonplaats') == '1' ) :?><li>Woonplaats</li><?php endif; ?>
        <?php if ( get_option('opslag_kvk') == '1' ) :?><li>KvK-nummer</li><?php endif; ?>
        <?php if ( get_option('opslag_geslacht') == '1' ) :?><li>Geslacht</li><?php endif; ?>
        <?php if ( get_option('opslag_leeftijd') == '1' ) :?><li>Leeftijd</li><?php endif; ?>
        <?php if ( get_option('opslag_burgelijkestaat') == '1' ) :?><li>Burgelijke staat</li><?php endif; ?>
        <?php if ( get_option('opslag_ipadres') == '1' ) :?><li>IP-adres</li><?php endif; ?>
        <?php if ( get_option('opslag_gebruikersnaam') == '1' ) :?><li>Gebruikersnaam</li><?php endif; ?>
    </ul>
</div>

<div class="privacy-waarom">
    <h2>Waarom slaan we je gegevens op?</h2>
    <p>De gegevens worden verzameld en opgeslagen voor de volgende doeleinden:</p>
    <ul>
        <?php if ( get_option('reden_contact') == '1' ) :?><li>Om jou van een reactie te kunnen voorzien nadat je een (contact)formulier hebt ingevuld</li><?php endif; ?>
        <?php if ( get_option('reden_nieuwsbrief') == '1' ) :?><li>Om jou ons nieuwsbrief toe te sturen nadat je je daarvoor hebt ingeschreven</li><?php endif; ?>
        <?php if ( get_option('reden_retargeting') == '1' ) :?><li>Voor het verzenden van commerciële nieuwsbrieven en retargeting voor Facebookadvertenties</li><?php endif; ?>
        <?php if ( get_option('reden_statistieken') == '1' ) :?><li>Voor het analyseren van statistieken en trends in het bezoekgedrag</li><?php endif; ?>
        <?php if ( get_option('reden_offerte') == '1' ) :?><li>Om jou van een offerte te kunnen voorzien</li><?php endif; ?>
        <?php if ( get_option('reden_boekhouding') == '1' ) :?><li>Voor de uitvoering van de overeenkomst, als wij diensten voor je gaan uitvoeren of als je producten bij ons aanschaft</li><?php endif; ?>
    </ul>
</div>

<div class="privacy-metwie">
    <h2>Met wie delen we je persoonsgegevens?</h2>
    <p>Je persoonsgegevens worden opgeslagen op servers van <a href="https://hostnet.nl">Hostnet B.V.</a>.<br>
        De servers van Hostnet B.V. zijn gevestigd in Nederland. Jouw gegevens kunnen dus worden opgeslagen en verwerkt in Nederland. Meer informatie over het privacybeleid van Hostnet B.V. vind je <a href="https://www.hostnet.nl/over-hostnet/privacy-en-cookieverklaring">hier</a>. </p>
</div>

<div class="privacy-beveiliging">
    <h2>Beveiliging persoonsgegevens</h2>
    <p>Wij hebben passende technische maatregelen genomen om persoonsgegevens te beveiligen tegen verlies of andere vormen van onrechtmatige verwerkingen. Deze maatregelen, waaronder versleuteling middels een SSL-certificaat en two-factor authentication, zorgen voor een beveiligingsniveau dat past bij de gegevens die wij verwerken.</p>
</div>

<div class="privacy-cookies">
    <h2>Cookies</h2>
    <p>Voor een zo goed mogelijke werking van deze website en om de inhoud van eventuele advertenties af te stemmen op uw voorkeuren worden cookies gebruikt.</p>
    <p>Een cookie is een klein bestandje dat door onze website wordt meegestuurd en door jouw browser op het apparaat waar je onze website mee bezoekt wordt geplaatst. De informatie die in de cookie is opgeslagen kan naar onze website teruggestuurd worden, wanneer je de website opnieuw bezoekt. Meer informatie over cookies kun je vinden op de website van <a href="https://www.consuwijzer.nl/telecom-post/internet/privacy/uitleg-cookies">Consuwijzer</a>. </p>

    <?php if ( get_option('cookies_advertentiecookies') == '1' ) :?><div class="privacy-cookies cookies-advertenties">
        <p><strong>Advertentiecookies:</strong></p>
        <p>Met jouw toestemming gebruiken wij, om advertenties beschikbaar te stellen. Deze cookies zorgen ervoor dat voor jou relevantere advertenties worden weergegeven.</p>
        <p>Meer informatie over het gebruik van cookies door Google vind je <a href="https://policies.google.com/technologies/ads?hl=nl">hier</a>. Meer informatie over de cookies van Facebook vind je <a href="https://www.facebook.com/policies/cookies/">hier</a>.</p>
    </div><?php endif; ?>

    <?php if ( get_option('cookies_trackingcookies') == '1' ) :?><div class="privacy-cookies cookies-tracking">
        <p><strong>Trackingcookies:</strong></p>
        <p>Met jouw toestemming gebruiken wij Site Tracking van Hotjar. Site Tracking plaatst een cookie die bijhoudt welke pagina’s jij op onze website bekijkt. Hierdoor kunnen wij onze marketing, diensten en advertenties beter aanpassen aan jouw interesses. Meer informatie over Site Tracking vind je <a href="https://www.hotjar.com/">hier</a>. Meer informatie over het privacybeleid van Hotjar vind je <a href="https://www.hotjar.com/privacy">hier</a>.</p>
    </div><?php endif; ?>

    <?php if ( get_option('cookies_analytics') == '1' ) :?><div class="privacy-cookies cookies-advertenties">
        <p><strong>Google Analytics:</strong></p>
        <p>Omdat we graag willen weten hoe onze bezoekers de website gebruiken, zodat we het gebruik van de website kunnen optimaliseren, gebruiken wij Google Analytics. Via deze website worden er daarom analytische cookies van Google geplaatst. De informatie wordt zo goed mogelijk geanonimiseerd. Jouw IP-adres wordt nadrukkelijk niet gebruikt. Wij kunnen je daarom niet persoonlijk herleiden. Meer informatie over het beleid van Google Analytics kun je <a href="https://policies.google.com/privacy?hl=nl&gl=nl">hier</a>h vinden.</p>
    </div><?php endif; ?>

    <?php if ( get_option('cookies_socialmedia') == '1' ) :?><div class="privacy-cookies cookies-advertenties">
        <p><strong>Social Media:</strong></p>
        <p>We willen het voor jou graag zo gemakkelijk mogelijk maken om de content van onze website te delen via social media. Dit kan door middel van een aantal social media buttons.</p>
        <p>Van de volgende social media-kanalen hebben wij de buttons geplaatst. Lees de privacyverklaringen van de respectievelijke social media-kanalen om te weten hoe zij met privacy omgaan. We helpen je alvast op weg door hieronder de links naar de verschillende privacy verklaringen met je te delen:</p>
        <ul>
            <li><a href="https://www.facebook.com/privacy/explanation">Facebook</a></li>
            <li><a href="https://help.instagram.com/155833707900388">Instagram</a></li>
            <li><a href="https://www.linkedin.com/legal/privacy-policy/">Linkedin</a></li>
            <li><a href="https://policy.pinterest.com/en/privacy-policy">Pinterest</a></li>
            <li><a href="https://twitter.com/privacy?lang=en">Twitter</a></li>
            <li><a href="https://policies.google.com/privacy?hl=nl">Google Plus</a></li>
            <li><a href="https://www.youtube.com/static?template=privacy_guidelines">Youtube</a></li>
        </ul>
    </div><?php endif; ?>

    <div class="privacy-cookies cookies-uitschakelen">
        <p><strong>Uitschakelen en verwijderen:</strong></p>
        <p>Wil je de cookies uitschakelen of verwijderen? Dit kun je doen via je browserinstellingen. Gebruik eventueel de help-functie van je browser om te achterhalen hoe je dit kunt doen.<br>
            Via de website <a href="http://www.youronlinechoices.com/be-nl/">Your Online Choices</a> kun je meer uitleg vinden over hoe je cookies uit kunt schakelen.
        </p>
    </div>

    <div class="privacy-cookies cookies-links">
        <p><strong>Links:</strong></p>
        <p>Op onze website zul je links naar externe websites aantreffen. Door op een link te klikken ga je naar een website buiten <?php echo $domeinnaam;?>. Het kan zijn dat deze externe websites gebruik maken van cookies. Graag verwijzen wij hiervoor naar de cookie- of privacyverklaring van de betreffende website.</p>
    </div>

</div>

<div class="privacy-bewaren">
    <h2>Bewaartermijn</h2>
    <p>Wij bewaren je gegevens niet langer dan noodzakelijk voor het doel waarvoor ze zijn ontvangen.</p>
    <p>Wanneer jij je uitschrijft voor onze nieuwsbrief, zullen je persoonsgegevens binnen 3 maanden uit het systeem worden verwijderd.</p>
    <p>De gegevens wij alleen gebruiken om te antwoorden op een bericht dat jij aan ons hebt gestuurd middels ons contactformulier, worden na aanvraag tot verwijdering binnen 30 dagen verwijderd.</p>
    <p>De gegevens in ons CRM-systeem en boekhoudsysteem bewaren we tenminste 7 jaar, onder andere om aan onze wettelijke verplichting te voldoen.</p>
    <p>De bovenstaande termijn geldt, tenzij er voor ons verdere wettelijke verplichtingen bestaat de gegevens langer te bewaren en/of beschikbaar te houden.</p>
</div>

<div class="privacy-rechten">
    <h2>Rechten</h2>
    <p>Je hebt altijd het recht jouw toestemming voor het verwerken van je gegevens in te trekken, waarna wij je gegevens niet meer zullen verwerken. Het intrekken van deze toestemming doet geen afbreuk aan de rechtmatigheid van onze gegevensverwerking op basis van jouw toestemming, die plaatsvond vóór deze intrekking.</p>
    <p>Je hebt ook recht op inzage in jouw persoonsgegevens en het recht om jouw persoonsgegevens te rectificeren.  Als je wil weten welke persoonsgegevens wij van jou verwerken, dan kun je een schriftelijk inzageverzoek doen. Mochten jouw gegevens onjuist, onvolledig of niet relevant zijn, dan kunt je ons schriftelijk verzoeken om jouw gegevens te wijzigen of aan te vullen.</p>
    <p>Daarnaast heb je een recht op het wissen van jouw persoonsgegevens, een recht op het beperken van de verwerking en een recht om tegen de verwerking bezwaar te maken. Bovendien heb je recht op het overdragen van, of het overdraagbaar maken van jouw gegevens. Ook hiervoor kun je een schriftelijk verzoek doen.</p>
    <p>Wij zullen je verzoek binnen 4 weken in behandeling nemen. Onder schriftelijk wordt ook verstaan een e-mail. Je kunt je verzoek aan ons e-mailen via <?php echo $emailadres; ?>.</p>
</div>

<div class="privacy-wijzigingen">
    <h2>Wijzigingen</h2>
    <p>Wij behouden ons het recht voor wijzigingen in deze privacyverklaring aan te brengen. De wijzigingen treden in werking op het aangekondigde tijdstip van inwerkingtreding.</p>
</div>

<?php $html = ob_get_contents(); ob_end_clean(); ?>