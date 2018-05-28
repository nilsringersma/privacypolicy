<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://github.com/nilsringersma
 * @since      1.0.0
 *
 * @package    Privacypolicy
 * @subpackage Privacypolicy/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<div class="wrap">
    <h1>Privacy Policy instellingen</h1>
    <p>Om het privacy beleid te tonen gebruik je de shortcode <strong>[privacy_policy]</strong> nadat je de onderstaande velden hebt ingesteld. Laat een veld leeg als deze niet van toepassing is.</p>

    <form method="post" action="options.php">

        <?php settings_fields( 'privacypolicy-settings-group' ); ?>
        <?php do_settings_sections( 'privacypolicy-settings-group' ); ?>

        <h2>Bedrijfsgegevens</h2>
        <table class="form-table">
            <tr valign="top">
                <th>Bedrijfsgegevens:</th>
                <th></th>
                <th>Beheerder:</th>
                <th></th>
            </tr>
            <tr valign="top">
                <td scope="row">Bedrijfsnaam:</td>
                <td>
                    <input type="text" name="bedrijfsnaam" value="<?php echo esc_attr( get_option('bedrijfsnaam') ); ?>" />
                </td>
                <td scope="row">Beheerder (gegevens):</td>
                <td>
                    <input type="text" name="beheerder" value="<?php echo esc_attr( get_option('beheerder') ); ?>" />
                </td>
            </tr>

            <tr valign="top">
                <td scope="row">Emailadres:</td>
                <td>
                    <input type="text" name="emailadres" value="<?php echo esc_attr( get_option('emailadres') ); ?>" />
                </td>
                <td scope="row">Adres:</td>
                <td>
                    <input type="text" name="beheerder_adres" value="<?php echo esc_attr( get_option('beheerder_adres') ); ?>" />
                </td>
            </tr>

            <tr valign="top">
                <td scope="row">Domeinnaam:</td>
                <td>
                    <input type="text" name="domeinnaam" value="<?php echo esc_attr( get_option('domeinnaam') ); ?>" />
                </td>
                <td scope="row">Plaats:</td>
                <td>
                    <input type="text" name="beheerder_plaats" value="<?php echo esc_attr( get_option('beheerder_plaats') ); ?>" />
                </td>
            </tr>

            <tr valign="top">
                <td scope="row">Datum van aanmaken:</td>
                <td>
                    <input type="text" name="datum_aanmaken" value="<?php echo esc_attr( get_option('datum_aanmaken') ); ?>" />
                </td>
                <td scope="row">Postcode:</td>
                <td>
                    <input type="text" name="beheerder_postcode" value="<?php echo esc_attr( get_option('beheerder_postcode') ); ?>" />
                </td>
            </tr>

            <tr valign="top">
                <td scope="row"></td>
                <td></td>
                <td scope="row">KVK:</td>
                <td>
                    <input type="text" name="beheerder_kvk" value="<?php echo esc_attr( get_option('beheerder_kvk') ); ?>" />
                </td>
            </tr>
        </table>

        <hr>

        <h2>Opslag gegevens bezoeker</h2>
        <table class="form-table">
            <tr valign="top">
                <td scope="row">Voor- en achternaam:</td>
                <td>
                    <input name="opslag_naam" type="checkbox" value="1" <?php checked( '1', get_option( 'opslag_naam' ) ); ?> />
                </td>
                <td scope="row">E-mailadres:</td>
                <td>
                    <input name="opslag_email" type="checkbox" value="1" <?php checked( '1', get_option( 'opslag_email' ) ); ?> />
                </td>
            </tr>

            <tr valign="top">
                <td scope="row">Websiteadres:</td>
                <td>
                    <input name="opslag_website" type="checkbox" value="1" <?php checked( '1', get_option( 'opslag_website' ) ); ?> />
                </td>
                <td scope="row">Telefoonnummer:</td>
                <td>
                    <input name="opslag_telefoon" type="checkbox" value="1" <?php checked( '1', get_option( 'opslag_telefoon' ) ); ?> />
                </td>
            </tr>

            <tr valign="top">
                <td scope="row">Bedrijfsnaam:</td>
                <td>
                    <input name="opslag_bedrijfsnaam" type="checkbox" value="1" <?php checked( '1', get_option( 'opslag_bedrijfsnaam' ) ); ?> />
                </td>
                <td scope="row">Adres:</td>
                <td>
                    <input name="opslag_adres" type="checkbox" value="1" <?php checked( '1', get_option( 'opslag_adres' ) ); ?> />
                </td>
            </tr>

            <tr valign="top">
                <td scope="row">Woonplaats:</td>
                <td>
                    <input name="opslag_woonplaats" type="checkbox" value="1" <?php checked( '1', get_option( 'opslag_woonplaats' ) ); ?> />
                </td>
                <td scope="row">KVK-nummer:</td>
                <td>
                    <input name="opslag_kvk" type="checkbox" value="1" <?php checked( '1', get_option( 'opslag_kvk' ) ); ?> />
                </td>
            </tr>

            <tr valign="top">
                <td scope="row">Geslacht:</td>
                <td>
                    <input name="opslag_geslacht" type="checkbox" value="1" <?php checked( '1', get_option( 'opslag_geslacht' ) ); ?> />
                </td>
                <td scope="row">Leeftijd:</td>
                <td>
                    <input name="opslag_leeftijd" type="checkbox" value="1" <?php checked( '1', get_option( 'opslag_leeftijd' ) ); ?> />
                </td>
            </tr>

            <tr valign="top">
                <td scope="row">Burgelijke staat:</td>
                <td>
                    <input name="opslag_burgelijkestaat" type="checkbox" value="1" <?php checked( '1', get_option( 'opslag_burgelijkestaat' ) ); ?> />
                </td>
                <td scope="row">IP-adres:</td>
                <td>
                    <input name="opslag_ipadres" type="checkbox" value="1" <?php checked( '1', get_option( 'opslag_ipadres' ) ); ?> />
                </td>
            </tr>

            <tr valign="top">
                <td scope="row">Gebruikersnaam:</td>
                <td>
                    <input name="opslag_gebruikersnaam" type="checkbox" value="1" <?php checked( '1', get_option( 'opslag_gebruikersnaam' ) ); ?> />
                </td>
                <td></td>
                <td></td>
            </tr>

        </table>

        <hr>

        <h2>Reden van opslag</h2>
        <table class="form-table">
            <tr valign="top">
                <td scope="row">Contact opnemen (contactformulier):</td>
                <td>
                    <input name="reden_contact" type="checkbox" value="1" <?php checked( '1', get_option( 'reden_contact' ) ); ?> />
                </td>
            </tr>

            <tr valign="top">
                <td scope="row">Nieuwsbrief:</td>
                <td>
                    <input name="reden_nieuwsbrief" type="checkbox" value="1" <?php checked( '1', get_option( 'reden_nieuwsbrief' ) ); ?> />
                </td>
            </tr>

            <tr valign="top">
                <td scope="row">Retargeting:</td>
                <td>
                    <input name="reden_retargeting" type="checkbox" value="1" <?php checked( '1', get_option( 'reden_retargeting' ) ); ?> />
                </td>
            </tr>

            <tr valign="top">
                <td scope="row">Statistieken:</td>
                <td>
                    <input name="reden_statistieken" type="checkbox" value="1" <?php checked( '1', get_option( 'reden_statistieken' ) ); ?> />
                </td>
            </tr>

            <tr valign="top">
                <td scope="row">Offerte:</td>
                <td>
                    <input name="reden_offerte" type="checkbox" value="1" <?php checked( '1', get_option( 'reden_offerte' ) ); ?> />
                </td>
            </tr>

            <tr valign="top">
                <td scope="row">Boekhouding:</td>
                <td>
                    <input name="reden_boekhouding" type="checkbox" value="1" <?php checked( '1', get_option( 'reden_boekhouding' ) ); ?> />
                </td>
            </tr>

        </table>

        <hr>

        <h2>Order bevestigingen</h2>
        <table class="form-table">
            <tr valign="top">
                <td scope="row">Exact:</td>
                <td>
                    <input name="integratie_orderbevestiging_exact" type="checkbox" value="1" <?php checked( '1', get_option( 'integratie_orderbevestiging_exact' ) ); ?> />
                </td>
            </tr>

            <tr valign="top">
                <td scope="row">Moneybird:</td>
                <td>
                    <input name="integratie_orderbevestiging_moneybird" type="checkbox" value="1" <?php checked( '1', get_option( 'integratie_orderbevestiging_moneybird' ) ); ?> />
                </td>
            </tr>

            <tr valign="top">
                <td scope="row">FactuurSturen:</td>
                <td>
                    <input name="integratie_orderbevestiging_factuursturen" type="checkbox" value="1" <?php checked( '1', get_option( 'integratie_orderbevestiging_factuursturen' ) ); ?> />
                </td>
            </tr>

            <tr valign="top">
                <td scope="row">Gripp:</td>
                <td>
                    <input name="integratie_orderbevestiging_gripp" type="checkbox" value="1" <?php checked( '1', get_option( 'integratie_orderbevestiging_gripp' ) ); ?> />
                </td>
            </tr>

            <tr valign="top">
                <td scope="row">Woocommerce:</td>
                <td>
                    <input name="integratie_orderbevestiging_woocommerce" type="checkbox" value="1" <?php checked( '1', get_option( 'integratie_orderbevestiging_woocommerce' ) ); ?> />
                </td>
            </tr>

        </table>

        <hr>

        <h2>Bedrijfsmail</h2>
        <table class="form-table">
            <tr valign="top">
                <td scope="row">Gmail en Gsuite:</td>
                <td>
                    <input name="integratie_bedrijfsmail_gmail" type="checkbox" value="1" <?php checked( '1', get_option( 'integratie_bedrijfsmail_gmail' ) ); ?> />
                </td>
            </tr>

            <tr valign="top">
                <td scope="row">Hotmail:</td>
                <td>
                    <input name="integratie_bedrijfsmail_hotmail" type="checkbox" value="1" <?php checked( '1', get_option( 'integratie_bedrijfsmail_hotmail' ) ); ?> />
                </td>
            </tr>

            <tr valign="top">
                <td scope="row">Office 365:</td>
                <td>
                    <input name="integratie_bedrijfsmail_office365" type="checkbox" value="1" <?php checked( '1', get_option( 'integratie_bedrijfsmail_office365' ) ); ?> />
                </td>
            </tr>

            <tr valign="top">
                <td scope="row">Webreact:</td>
                <td>
                    <input name="integratie_bedrijfsmail_webreact" type="checkbox" value="1" <?php checked( '1', get_option( 'integratie_bedrijfsmail_webreact' ) ); ?> />
                </td>
            </tr>

            <tr valign="top">
                <td scope="row">Hostnet Shared:</td>
                <td>
                    <input name="integratie_bedrijfsmail_hostnet" type="checkbox" value="1" <?php checked( '1', get_option( 'integratie_bedrijfsmail_hostnet' ) ); ?> />
                </td>
            </tr>

            <tr valign="top">
                <td scope="row">Anders:</td>
                <td>
                    <input name="integratie_bedrijfsmail_anders" type="checkbox" value="1" <?php checked( '1', get_option( 'integratie_bedrijfsmail_anders' ) ); ?> />
                </td>
            </tr>
        </table>

        <hr>

        <h2>Customer Reviews</h2>
        <table class="form-table">
            <tr valign="top">
                <td scope="row">Kiyoh:</td>
                <td>
                    <input name="integratie_review_kiyoh" type="checkbox" value="1" <?php checked( '1', get_option( 'integratie_review_kiyoh' ) ); ?> />
                </td>
            </tr>

            <tr valign="top">
                <td scope="row">Feedbackcompany:</td>
                <td>
                    <input name="integratie_review_feedbackcompany" type="checkbox" value="1" <?php checked( '1', get_option( 'integratie_review_feedbackcompany' ) ); ?> />
                </td>
            </tr>
        </table>

        <hr>

        <h2>Payment Provider</h2>
        <table class="form-table">
            <tr valign="top">
                <td scope="row">Mollie:</td>
                <td>
                    <input name="integratie_paymentprovider_mollie" type="checkbox" value="1" <?php checked( '1', get_option( 'integratie_paymentprovider_mollie' ) ); ?> />
                </td>
            </tr>

            <tr valign="top">
                <td scope="row">Paynl:</td>
                <td>
                    <input name="integratie_paymentprovider_paynl" type="checkbox" value="1" <?php checked( '1', get_option( 'integratie_paymentprovider_paynl' ) ); ?> />
                </td>
            </tr>

            <tr valign="top">
                <td scope="row">Klarna:</td>
                <td>
                    <input name="integratie_paymentprovider_klarna" type="checkbox" value="1" <?php checked( '1', get_option( 'integratie_paymentprovider_klarna' ) ); ?> />
                </td>
            </tr>

            <tr valign="top">
                <td scope="row">Multisafepay:</td>
                <td>
                    <input name="integratie_paymentprovider_multisafepay" type="checkbox" value="1" <?php checked( '1', get_option( 'integratie_paymentprovider_multisafepay' ) ); ?> />
                </td>
            </tr>

            <tr valign="top">
                <td scope="row">Afteray:</td>
                <td>
                    <input name="integratie_paymentprovider_afterpay" type="checkbox" value="1" <?php checked( '1', get_option( 'integratie_paymentprovider_afterpay' ) ); ?> />
                </td>
            </tr>
        </table>

        <hr>

        <h2>Verzenddienst</h2>
        <table class="form-table">
            <tr valign="top">
                <td scope="row">Postnl:</td>
                <td>
                    <input name="integratie_verzenddienst_postnl" type="checkbox" value="1" <?php checked( '1', get_option( 'integratie_verzenddienst_postnl' ) ); ?> />
                </td>
            </tr>

            <tr valign="top">
                <td scope="row">DHL:</td>
                <td>
                    <input name="integratie_verzenddienst_dhl" type="checkbox" value="1" <?php checked( '1', get_option( 'integratie_verzenddienst_dhl' ) ); ?> />
                </td>
            </tr>

            <tr valign="top">
                <td scope="row">GLS:</td>
                <td>
                    <input name="integratie_verzenddienst_gls" type="checkbox" value="1" <?php checked( '1', get_option( 'integratie_verzenddienst_gls' ) ); ?> />
                </td>
            </tr>

            <tr valign="top">
                <td scope="row">Anders:</td>
                <td>
                    <input name="integratie_verzenddienst_anders" type="checkbox" value="1" <?php checked( '1', get_option( 'integratie_verzenddienst_anders' ) ); ?> />
                </td>
            </tr>

        </table>

        <hr>

        <h2>Externe verkoop</h2>
        <table class="form-table">
            <tr valign="top">
                <td scope="row">Bol.com:</td>
                <td>
                    <input name="integratie_externverkoop_bol" type="checkbox" value="1" <?php checked( '1', get_option( 'integratie_externverkoop_bol' ) ); ?> />
                </td>
            </tr>

            <tr valign="top">
                <td scope="row">Marktplaats:</td>
                <td>
                    <input name="integratie_externverkoop_marktplaats" type="checkbox" value="1" <?php checked( '1', get_option( 'integratie_externverkoop_marktplaats' ) ); ?> />
                </td>
            </tr>

            <tr valign="top">
                <td scope="row">Beslist:</td>
                <td>
                    <input name="integratie_externverkoop_beslist" type="checkbox" value="1" <?php checked( '1', get_option( 'integratie_externverkoop_beslist' ) ); ?> />
                </td>
            </tr>

        </table>

        <hr>

        <h2>Gebruik van cookies</h2>
        <table class="form-table">
            <tr valign="top">
                <td scope="row">Adwords:</td>
                <td>
                    <input name="cookies_advertentiecookies" type="checkbox" value="1" <?php checked( '1', get_option( 'cookies_advertentiecookies' ) ); ?> />
                </td>
            </tr>

            <tr valign="top">
                <td scope="row">Hotjar:</td>
                <td>
                    <input name="cookies_trackingcookies" type="checkbox" value="1" <?php checked( '1', get_option( 'cookies_trackingcookies' ) ); ?> />
                </td>
            </tr>

            <tr valign="top">
                <td scope="row">Google Analytics:</td>
                <td>
                    <input name="cookies_analytics" type="checkbox" value="1" <?php checked( '1', get_option( 'cookies_analytics' ) ); ?> />
                </td>
            </tr>

            <tr valign="top">
                <td scope="row">Social Media sharing:</td>
                <td>
                    <input name="cookies_socialmedia" type="checkbox" value="1" <?php checked( '1', get_option( 'cookies_socialmedia' ) ); ?> />
                </td>
            </tr>

        </table>

        <h2>Algemene instellingen</h2>
        <table class="form-table">
            <tr valign="top">
                <td scope="row">Toon formulier titel:</td>
                <td>
                    <input name="show_form_title" type="checkbox" value="1" <?php checked( '1', get_option( 'show_form_title' ) ); ?> />
                </td>
            </tr>

        </table>

        <?php submit_button(); ?>

    </form>
</div>



