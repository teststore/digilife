<?php
/**
 * Created by PhpStorm.
 * User: paulf_000
 * Date: 2015-08-27
 * Time: 12:38
 */

namespace Digilife\IndexPlBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller{

    public function indexAction() {
        $dsn = 'mysql:dbname=digilife;host=127.0.0.1';
        $user = 'root';
        $password = '';

        $db = new \PDO($dsn, $user, $password);

        $categories = $db->query('SELECT category_name FROM categories WHERE 1');
        $categoriesArr = $categories->fetchAll();
        $keys = count($categoriesArr);


        for ($i=0; $i<$keys; $i++) {
            $categoriesArr[$i]['category_name'];
        }

        return $this->render("IndexPlBundle:Index:index.html.twig", array(
            'phone_num'=>'+48(533)157163',
            'contact_email'=>'contact@digilife.com',
            'current_country'=>'Polski',
            'country_1'=>'Deutsch',
            'current_currency'=>'Złoty',
            'currency_1'=>'Euro',
            'account'=>'Konto',
            'wishlist'=>'Lista życzeń',
            'checkout'=>'Do zapłaty',
            'cart'=>'Koszyk',
            'login'=>'Załoguj się',
            'home'=>'Główna',
            'shop'=>'Sklep',
            'products'=>'Produkty',
            'product_detail'=>'Szczegóły produktu',
            'blog'=>'Blog',
            'blog_list'=>'Lista blogów',
            'blog_single'=>'Artykul',
            'contact'=>'Kontakt',
            'slider_title_1'=>"Tytuł slidera 1",
            'slider_title_2'=>"Tytuł slidera 2",
            'slider_title_3'=>"Tytuł slidera 3",
            'description_1'=>'Opis slidera 1',
            'description_2'=>'Opis slidera 2',
            'description_3'=>'Opis slidera 3',
            'button_title'=>'Kup teraz',
            'search_field'=>'Szukaj',
            'category_title'=>'Kategoria',
            'brands_products'=>'Producenty',
            'price_range'=>'Rozpiętość cen',
            'site_title'=>'Witamy | Sklep Digilife',
            'featured_items'=>'Wyróżnione produkty',
            'add_to_cart'=>'Dodaj do koszyka',
            'add_to_wishlist'=>'Do listy życzeń',
            'add_to_compare'=>'Do porównywania',
            'recommended_items'=>'Polecane produkty',
            'current_address'=>'ul. Ciepła 9/7J, Wrocław, 50-524, Polska',
            'service'=>'Obsługa klienta',
            'online_help'=>'Pomoc online',
            'contact_us'=>'Kontakt',
            'order_status'=>'Status zamówienia',
            'chang_location'=>'Zmiana lokalizacji',
            'faq'=>'Pytania i odpowiedzi',
            'quick_shop'=>'Szybkie zakupy',
            'position_1'=>'Kategoria 1',
            'position_2'=>'Kategoria 2',
            'position_3'=>'Kategoria 3',
            'position_4'=>'Kategoria 4',
            'position_5'=>'Kategoria 5',
            'policies'=> 'Warunki',
            'terms'=>'Warunki korzystania',
            'privacy_policy'=>'Polityka prywatności',
            'refund_policy'=>'Polityka zwrotów',
            'billing_system'=>'Systemy płatności',
            'ticket_system'=>'System tiketowania',
            'about_store'=>'O sklepie',
            'company_information'=>'O firmie',
            'careers'=>'Praca',
            'store_location'=>'Lokalizacja sklepu',
            'affillate_program'=>'Partnerski program',
            'copyright'=>'Prawa autorskie',
            'newsletter'=>'Newsletter',
            'newsletter_placeholder'=>'Twój adres email',
            'newsletter_promo'=>'Zapisz się do newslettera i bądż zawsze na bieżąco'
        ));
    }

}