<?php
/**
 * Autoloader file for theme.
 *
 * @package Ikkaav
 */

namespace IKKAAV_THEME\includes\helpers;

/**
 * Auto loader function.
 *
 * @param string $resource Source namespace.
 *
 * @return void
 */


/*
 * $resource is the fully qualified namespace of the class, trait, or interface that PHP is trying to load.
 *
 * The default value ($resource = '') ensures that if, for any reason, the autoloader is invoked without a namespace (e.g., due to misconfiguration or errors in the code), the function won’t crash. It provides a fallback and avoids errors like "Missing argument.
 * */
function autoloader( $resource = '' ) {

    $resource_path  = false;
    $namespace_root = 'IKKAAV_THEME\\';  
    $resource       = trim( $resource, '\\' );

    if ( empty( $resource ) || strpos( $resource, '\\' ) === false || strpos( $resource, $namespace_root ) !== 0 ) {
        // Not our namespace, bail out.
        return;
    }

    // Remove our root namespace.
    $resource = str_replace( $namespace_root, '', $resource );

    $path = explode(
        '\\',
        str_replace( '_', '-', strtolower( $resource ) )
    );

    /**
     * Time to determine which type of resource path it is,
     * so that we can deduce the correct file path for it.
     */
    if ( empty( $path[0] ) || empty( $path[1] ) ) {
        return;
    }

    $directory = '';
    $file_name = '';

    if ( 'includes' === $path[0] ) {

        switch ( $path[1] ) {
            case 'traits':
                $directory = 'traits';
                $file_name = sprintf( 'trait-%s', trim( strtolower( $path[2] ) ) );
                break;

            case 'widgets':
            case 'blocks': // phpcs:ignore PSR2.ControlStructures.SwitchDeclaration.TerminatingComment
                /**
                 * If there is class name provided for specific directory then load that.
                 * otherwise find in includes/ directory.
                 */
                if ( ! empty( $path[2] ) ) {
                    $directory = sprintf( 'classes/%s', $path[1] );
                    $file_name = sprintf( 'class-%s', trim( strtolower( $path[2] ) ) );
                    break;
                }
            default:
                $directory = 'classes';
                $file_name = sprintf( 'class-%s', trim( strtolower( $path[1] ) ) );
                break;
        }

        $resource_path = sprintf( '%s/includes/%s/%s.php', untrailingslashit( IKKAAV_DIR_PATH ), $directory, $file_name );

    }

    /**
     * If $is_valid_file has 0 means valid path or 2 means the file path contains a Windows drive path.
     */
    $is_valid_file = validate_file( $resource_path );

    if ( ! empty( $resource_path ) && file_exists( $resource_path ) && ( 0 === $is_valid_file || 2 === $is_valid_file ) ) {
        // We are already making sure that file is exists and valid.
        require_once( $resource_path ); // phpcs:ignore
    }

}

/*
 * This autoloader function accepts the argument - (a callback function which returns the route to the files of classes and traits).
 *
 */
//spl_autoload_register( 'IKKAAV_THEME\includes\helpers\autoloader' ) below line works too
spl_autoload_register(__NAMESPACE__ . '\autoloader');

