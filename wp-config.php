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
define( 'DB_NAME', 'catolica_3' );

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
define( 'AUTH_KEY',         '#/qR* UKlr]&7P^f64!P6K0j}`EQ7t4lDe`1 ,Wld2^l hP}G^gvT2JxuuH7eHz7' );
define( 'SECURE_AUTH_KEY',  '#) Y:3vR;xY/U:Z7w^l6f+.! !jp_1gUo-yPa+.;%-$YH^_L<`NOnuC#Bk(.ZA7^' );
define( 'LOGGED_IN_KEY',    '=3Gcdy)pVJ#;3ziK6Ag)l-1P:b;Z*eC,AQM-?t[==tZ5,,4)+o#3GwJ.;wkB?!GJ' );
define( 'NONCE_KEY',        'xuVK}XpYF(~)LMT}BKs.3`$dZc]HvN^,F!,CraIem-8+1^Skg#V=D&x*%:1q>nhl' );
define( 'AUTH_SALT',        'P2kqyR}J$Y4x729q&1pzXB])36_w={aw=!e{}~$X8dRWf4^DE63h?:mB/5tQUiN}' );
define( 'SECURE_AUTH_SALT', 'SO2RxvfF?(5u^E( d4G]?D#q.x7)SA)punXRzVwLvBF/T$IT#udEwo|l#*O.3-7v' );
define( 'LOGGED_IN_SALT',   '*t@vpZF{kam-Wf7`R!S@l?|LbF9{E}hayKQ4UF=LbI[pJ)#dJoreb@>0w$dbeAbD' );
define( 'NONCE_SALT',       'dsuZ.=n7.)!ZjS(Oxl^qtyg9^l_`|=4~hKY1{hmqK+NC}SC4)kT-U&D~uQA~%:PI' );

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
