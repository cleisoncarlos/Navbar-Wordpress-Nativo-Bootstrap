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
