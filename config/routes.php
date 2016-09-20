<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Core\Plugin;
use Cake\Routing\Router;

/**
 * The default class to use for all routes
 *
 * The following route classes are supplied with CakePHP and are appropriate
 * to set as the default:
 *
 * - Route
 * - InflectedRoute
 * - DashedRoute
 *
 * If no call is made to `Router::defaultRouteClass`, the class used is
 * `Route` (`Cake\Routing\Route\Route`)
 *
 * Note that `Route` does not do any inflections on URLs which will result in
 * inconsistently cased URLs when used with `:plugin`, `:controller` and
 * `:action` markers.
 *
 */
Router::defaultRouteClass('Route');
Router::extensions(['pdf']);
Router::scope('/', function ($routes) {
    /**
     * Here, we are connecting '/' (base path) to a controller called 'Pages',
     * its action called 'display', and we pass a param to select the view file
     * to use (in this case, src/Template/Pages/home.ctp)...
     */
    //$routes->connect('/', ['controller' => 'Users', 'action' => 'login']);
    $routes->connect('/', ['controller' => 'Users', 'action' => 'index']);

    /**
     * ...and connect the rest of 'Pages' controller's URLs.
     */
    //$routes->connect('/pages/*', ['controller' => 'Pages', 'action' => 'display']);

    /**
     * Connect catchall routes for all controllers.
     *
     * Using the argument `InflectedRoute`, the `fallbacks` method is a shortcut for
     *    `$routes->connect('/:controller', ['action' => 'index'], ['routeClass' => 'InflectedRoute']);`
     *    `$routes->connect('/:controller/:action/*', [], ['routeClass' => 'InflectedRoute']);`
     *
     * Any route class can be used with this method, such as:
     * - DashedRoute
     * - InflectedRoute
     * - Route
     * - Or your own route class
     *
     * You can remove these routes once you've connected the
     * routes you want in your application.
     */
    $routes->fallbacks('InflectedRoute');
});

    $u = Router::url(null,true);  

    if(strpos($u, 'users/login') !== false || strpos($u, 'customer/register') !== false || strpos($u, 'customer') !== false) {

    }else{
        // INDEX
        Router::connect(
            '/'.get_customer_directory().'',
            array('controller' => 'Appointment', 'action' => 'index')
        );

        // Appointment
        Router::connect(
            '/'.get_customer_directory().'/appointment',
            array('controller' => 'Appointment', 'action' => 'index')
        );

        Router::connect(
            '/'.get_customer_directory().'/appointment/index/:date',
            array('controller' => 'Appointment', 'action' => 'index'),
            array(
                'pass' => array('date')
            )
        );

        Router::connect(
            '/'.get_customer_directory().'/appointment/add/:date',
            array('controller' => 'Appointment', 'action' => 'add'),
            array(
                'pass' => array('date')
            )
        );

        Router::connect(
            '/'.get_customer_directory().'/appointment/edit/:id',
            array('controller' => 'Appointment', 'action' => 'edit'),
            array(
                'pass' => array('id'),
                'id' => '[0-9]+'
            )
        );

        // Patient
        Router::connect(
            '/'.get_customer_directory().'/patient',
            array('controller' => 'Patient', 'action' => 'index')
        );

        Router::connect(
            '/'.get_customer_directory().'/patient/index/recent',
            array('controller' => 'Patient', 'action' => 'index', 'recent')
        );

        Router::connect(
            '/'.get_customer_directory().'/patient/index/active',
            array('controller' => 'Patient', 'action' => 'index', 'active')
        );

        Router::connect(
            '/'.get_customer_directory().'/patient/add',
            array('controller' => 'Patient', 'action' => 'add')
        );

        Router::connect(
            '/'.get_customer_directory().'/patient/edit/:id',
            array('controller' => 'Patient', 'action' => 'edit'),
            array(
                'pass' => array('id'),
                'id' => '[0-9]+'
            )
        );

        Router::connect(
            '/'.get_customer_directory().'/patient/profile/:id',
            array('controller' => 'Patient', 'action' => 'profile'),
            array(
                'pass' => array('id'),
                'id' => '[0-9]+'
            )
        );

        Router::connect(
            '/'.get_customer_directory().'/patient/medical_history/:id',
            array('controller' => 'Patient', 'action' => 'medical_history'),
            array(
                'pass' => array('id'),
                'id' => '[0-9]+'
            )
        );

        // Attachment
        Router::connect(
            '/'.get_customer_directory().'/attachment/patient/:patient_id',
            array('controller' => 'Attachment', 'action' => 'patient'),
            array(
                'pass' => array('patient_id'),
                'patient_id' => '[0-9]+'
            )
        );

        Router::connect(
            '/'.get_customer_directory().'/attachment/add/:id',
            array('controller' => 'Attachment', 'action' => 'add'),
            array(
                'pass' => array('id'),
                'id' => '[0-9]+'
            )
        );

        Router::connect(
            '/'.get_customer_directory().'/attachment/download/:id',
            array('controller' => 'Attachment', 'action' => 'download'),
            array(
                'pass' => array('id'),
                'id' => '[0-9]+'
            )
        );

        // Treatment
        Router::connect(
            '/'.get_customer_directory().'/treatment/patient/:patient_id',
            array('controller' => 'Treatment', 'action' => 'patient'),
            array(
                'pass' => array('patient_id'),
                'patient_id' => '[0-9]+'
            )
        );

        Router::connect(
            '/'.get_customer_directory().'/treatment/add/:id',
            array('controller' => 'Treatment', 'action' => 'add'),
            array(
                'pass' => array('id'),
                'id' => '[0-9]+'
            )
        );

        Router::connect(
            '/'.get_customer_directory().'/treatment/patient/:patient_id/:treatment_id',
            array('controller' => 'Treatment', 'action' => 'patient'),
            array(
                'pass' => array('patient_id','treatment_id'),
                'patient_id' => '[0-9]+',
                'treatment_id' => '[0-9]+'
            )
        );

        Router::connect(
            '/'.get_customer_directory().'/treatment/patient/:patient_id/:treatment_id/:treatment_detail_id',
            array('controller' => 'Treatment', 'action' => 'patient'),
            array(
                'pass' => array('patient_id','treatment_id','treatment_detail_id'),
                'patient_id' => '[0-9]+',
                'treatment_id' => '[0-9]+',
                'treatment_detail_id' => '[0-9]+'
            )
        );

        // Payment Summary
        Router::connect(
            '/'.get_customer_directory().'/payment_summary',
            array('controller' => 'PaymentSummary', 'action' => 'index')
        );

        // Payment Transaction
        Router::connect(
            '/'.get_customer_directory().'/payment_transaction/index/:id',
            array('controller' => 'PaymentTransaction', 'action' => 'index'),
            array(
                'pass' => array('id'),
                'id' => '[0-9]+'
            )
        );

        // Tooth Position / Surface management
        Router::connect(
            '/'.get_customer_directory().'/tooth_position',
            array('controller' => 'ToothPosition', 'action' => 'index')
        );

        Router::connect(
            '/'.get_customer_directory().'/tooth_position/add',
            array('controller' => 'ToothPosition', 'action' => 'add')
        );

        // Tooth Status / Treatment management
        Router::connect(
            '/'.get_customer_directory().'/tooth_status',
            array('controller' => 'ToothStatus', 'action' => 'index')
        );

        Router::connect(
            '/'.get_customer_directory().'/tooth_status/add',
            array('controller' => 'ToothStatus', 'action' => 'add')
        );

        // About
        Router::connect(
            '/'.get_customer_directory().'/about',
            array('controller' => 'About', 'action' => 'index')
        );

        Router::connect(
            '/'.get_customer_directory().'/about/change_password',
            array('controller' => 'About', 'action' => 'change_password')
        );

        // Diagram Notation
        Router::connect(
            '/'.get_customer_directory().'/diagram_notation',
            array('controller' => 'DiagramNotation', 'action' => 'index')
        );

        // Router::connect(
        //     '/'.get_customer_directory().'/report/generate/:id',
        //     array('controller' => 'Report', 'action' => 'generate'),
        //      array(
        //         'pass' => array('id'),
        //         'id' => '[0-9]+'
        //     )
        // );
        
        // Router::connect(
        //     '/'.get_customer_directory().'/report/generate/:id',
        //     array('controller' => 'Report', 'action' => 'generate'),
        //     array(
        //         'pass' => array('id'),
        //         'id' => '[0-9]+'
        //     )
        // );
    }
    //Report PDF
         
        // Router::scope(
        //     '/report/generate/:id',
        //     ['controller' => 'Report'],
        //     function($routes){
        //         $routes->connect('/generate/*', ['controller' => 'Report', 'action' => 'generate'],
        //             array(
        //                 'pass' => array('id'),
        //                 'id' => '[0-9]+'
        //             )
        //             );
        //         $routes->addExtensions('pdf');
                   
        //          //$routes->fallbacks('DashedRoute');
        //     }

        // );
    

    
    
    //slug NewsEvents
    Router::connect(
        '/news_events/:id/:slug',
        array('controller' => 'NewsEvents', 'action' => 'frontview'),
        array(
            'pass' => array('id', 'slug'),
            'id' => '[0-9]+',
            'slug' => '[a-zA-Z0-9_-]+'
        )
    ); 

    //slug FAQ
    Router::connect(
        '/faq/:id/:slug',
        array('controller' => 'Faq', 'action' => 'frontview'),
        array(
            'pass' => array('id', 'slug'),
            'id' => '[0-9]+',
            'slug' => '[a-zA-Z0-9_-]+'
        )
    ); 

    //slug Services
    Router::connect(
        '/services/:id/:slug',
        array('controller' => 'Services', 'action' => 'frontview'),
        array(
            'pass' => array('id', 'slug'),
            'id' => '[0-9]+',
            'slug' => '[a-zA-Z0-9_-]+'
        )
    ); 

    //slug Category
    Router::connect(
    '/category/:id/:slug',
    array('controller' => 'Category', 'action' => 'productlist'),
    array('pass' => array('id', 'slug'),
    'id' => '[0-9]+')
    );

    //slug Products
    Router::connect(
    '/products/:id/:slug',
    array('controller' => 'Products', 'action' => 'details'),
    array('pass' => array('id', 'slug'),
    'id' => '[0-9]+')
    );    

    //slug Pages - about-us
    Router::connect(
    '/about-us/',
    array('controller' => 'OtherPages', 'action' => 'frontview', 1),
    array('pass' => array('id', 'slug'),
    'id' => '[0-9]+')
    );    

    Router::connect(
    '/about-us/',
    array('controller' => 'OtherPages', 'action' => 'frontview', 1),
    array('pass' => array('id', 'slug'),
    'id' => '[0-9]+')
    );    

    Router::connect(
    '/pages/:id/:slug',
    array('controller' => 'Pages', 'action' => 'frontview'),
    array('pass' => array('id', 'slug'),
    'id' => '[0-9]+')
    );    

    //slug Pages - Contact us
    Router::connect(
    '/contact-us/',
    array('controller' => 'Pages', 'action' => 'contact_us'),
    array('pass' => array('id', 'slug'),
    'id' => '[0-9]+')
    ); 
/**
 * Load all plugin routes.  See the Plugin documentation on
 * how to customize the loading of plugin routes.
 */
Plugin::routes();
