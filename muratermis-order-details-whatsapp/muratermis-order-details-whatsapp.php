<?php
/*
Plugin Name:  Murat Ermiş - Sipariş Detay Whatsapp
Plugin URI:   https://www.muratermis.com.tr
Description:  WooCommerce sipariş detayı ekranında müşteri telefon numarasından direk whatsapp bağlantısı oluşturur. Müşteri numarasını kayıt etmeden görüşme başlatabilirsiniz. Whatsapp Web ve Whatsapp Desktop uyumludur.
Version:      1.0.0
Author:       Murat Ermiş
Author URI:   https://www.muratermis.com.tr
Text Domain:  muratermis-order-details-whatsapp

WC tested up to: 4.2.0
*/

if ( ! defined( 'ABSPATH' ) ) 
    exit;


	
	
	
	
			add_action( 'woocommerce_admin_order_data_after_order_details', 'orderWhatsapp', 10, 3 );
		function orderWhatsapp(){ 
		    echo   '<script text/javascript>
	        function degistir(){
	        var number=document.querySelector(".address p:nth-of-type(3) a").text;
	        var numberElement = document.querySelector(".address p:nth-of-type(3) a");
	        numberElement.innerHTML += " <img width=\"20\" src=\"https://cdn.cdnlogo.com/logos/w/35/whatsapp-icon.svg\">";
	        if (number !=null){
	        var degiseceknumara="https://wa.me/"+number;
	        document.querySelector(".address p:nth-of-type(3) a").setAttribute("href", degiseceknumara);
	        document.querySelector(".address p:nth-of-type(3) a").setAttribute("target", "_blank");
	        }
	        }
			document.addEventListener("DOMContentLoaded", function(event) { degistir(); });	        
	        </script>';
	                
	                
	        }