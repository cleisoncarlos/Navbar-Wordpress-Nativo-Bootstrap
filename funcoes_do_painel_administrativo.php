// desabilitar editar de temas e plugins no wordpress
define('DISALLOW_FILE_EDIT', true);

// Para Remover as Revisões dos posts
 define( 'WP_POST_REVISIONS', FALSE );
 

// trocar logo do admin 
function cutom_login_logo() {
echo "<style type=\"text/css\">
body.login div#login h1 a {
background-image: url(".get_bloginfo('template_directory')."/images/logo.png);
-webkit-background-size: auto;
background-size: auto;
margin: 0 0 25px;
width: 320px;
}
</style>";
}
add_action( 'login_enqueue_scripts', 'cutom_login_logo' );


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
 
 
 
 
    



    // mudar texto do rodapé do wordpress

    function remove_footer_admin () {
    	echo '© <a href="http://meusite.com.br/">Meu site</a> - Desenvolvimento inteligente com padrões web e design';
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
