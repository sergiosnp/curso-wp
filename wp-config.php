<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'curso-wp' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'urUv%9VYFg0Po wK|gj~RxDQ(+&B];iRpn^W8Ern?9~k&I$@j$[XtMtkt&p$:Fsq' );
define( 'SECURE_AUTH_KEY',  'k|C,js2sXAyePqe8njY^[I|~Os#9o/wcV>`m%ZUjnP7NB@ARelTV3zIsY/x@S<-b' );
define( 'LOGGED_IN_KEY',    '~|NU~Z};/e5_;w{B^?Sq5sGsYY 0#6sWw(*b,0Ecy{[m-Iprzmgu,~+C@*GtBhTj' );
define( 'NONCE_KEY',        'UtpASN>PRT/SF)>_#kv2A#QA@MHIaMsAvS8aFexdfXG;^bPH72.Y=Ltoxh^JCNpl' );
define( 'AUTH_SALT',        'FE-QEF<C<iHr5q3OIkB&(eciG[pPyno0.tOmApF3ugP9w.g-lbTT[dlPtEIKToEE' );
define( 'SECURE_AUTH_SALT', '#85qV=:R$8AoYQ>55~ ipw_|fD;k:I0ICkFa9Z/#zy-HsY]<m1D-IWP6aN=#g8[)' );
define( 'LOGGED_IN_SALT',   'CJiUGxFZ5SYg)Jksa($^bXP^y*wYfZhj<{yz|.Q=H}#@)<&LR|<=$npjreySYBZ2' );
define( 'NONCE_SALT',       'z$1MVBh>z(,*z:{PE=E5%l]Sq6}_FVl_hbf^f664$G>v|E=a4I.WB*Vxuvhxs;6k' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
