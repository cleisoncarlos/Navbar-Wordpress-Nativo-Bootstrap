 // remove versão do rodapé do wordpress


function change_footer_version() {
  return 'Version 1.0.0';
}
add_filter( 'update_footer', 'change_footer_version', 9999 );



// altera o texto com versão do wordpress do rodapé

function remove_footer_admin () {
echo 'Alimentado por <a href="http://www.wordpress.org" target="_blank">WordPress</a> | Desenhado por <a href="http://www.wordpress-love.com" target="_blank">Wordpress</a> | WordPress Tutoriais: <a href="http://www.wordpress-love.com" target="_blank">Wordpress Love</a></p>';
}
 
add_filter('admin_footer_text', 'remove_footer_admin');





// remove versão do wordpress 

function wpbeginner_remove_version() {
return ";
}
add_filter('the_generator', 'wpbeginner_remove_version');
 
 
 
 
    // mudar logo do admin

    function my_login_logo() { ?>
       body.login div#login h1 a {
            background-image: url(/img/site-login-logo.png);
            padding-bottom: 30px;
       }
     
    <?php }
    add_action( 'login_enqueue_scripts', 'my_login_logo' );




    // mudar texto do rodapé do wordpress

    function remove_footer_admin () {
    	echo '© <a href="http://tableless.com.br/">Tableless</a> - Desenvolvimento inteligente com padrões web e design';
    }
    add_filter('admin_footer_text', 'remove_footer_admin');




// remover sessoes do painel administrativo 


function del_secoes_painel(){
  global$wp_meta_boxes;
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
}
 
add_action('wp_dashboard_setup', 'del_secoes_painel');
