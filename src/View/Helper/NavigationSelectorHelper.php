<?php
namespace App\View\Helper;

use Cake\View\Helper;
use Cake\View\View;

/**
 * Hostings helper
 */
class NavigationSelectorHelper extends Helper
{

    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

    public function __construct(View $view, $config = [])
    {
        parent::__construct($view, $config);
    }

    /*
     * Selected Main Navigation
     *
     * @param string|null $selected Navigation.
     * @return array of selected navagation with selected
     * 
     */
    public function selectedMainNavigation($selected) {
        $navigation = array(
            "groups"         => "",
            "users"   => "",
            "payment_histories"   => "",
            "appointments" => "",
            "settings" => "",
            "agencies" => "",
            "vehicles" => "",
            "member_types" => "",
            "account_types" => "",
            "dashboard" => "",
            "vehicle_types" => ""                    
        );
        $navigation[$selected] = "active";

        return $navigation;
    }

    /*
     * Selected Main Navigation
     *
     * @param string|null $parent Navigation.
     * @param string|null $selected Sub-Navigation.
     * @return array of selected sub-navagation with selected
     * 
     */
    public function selectedSubNavigation($parent, $selected) {
        $sub_navigation = array(
            "hosting_related"   => array(
                    "Domain Names"      => "",
                    "SSL"               => "",
                    "Hosting Plans"     => "",
                    "Enterprise Cloud"  => ""
            ),
            "other_pages"   => array(
                    "Privacy Policy"    => "",
                    "Terms of Service"  => "",
                    "About Us"          => "",
                    "Careers"           => "",
                    "Contact Us"        => ""
            ) 
        );
        $sub_navigation[$parent][$selected] = "active";

        return $sub_navigation;
    }

}
