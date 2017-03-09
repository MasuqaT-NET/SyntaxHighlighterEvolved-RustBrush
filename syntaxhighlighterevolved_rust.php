<?php
/**
* Plugin Name: SyntaxHighlighter Evolved: Rust Brush
* Description: Adds support for the Rust language to the SyntaxHighlighter Evolved plugin.
* Author: MasuqaT
* Version: 1.0.0
* Author URI: http://masuqat.net/
* Plugin URI: https://github.com/MasuqaT-NET/SyntaxHighlighterEvolved-RustBrush
*/
 
// SyntaxHighlighter Evolved doesn't do anything until early in the "init" hook, so best to wait until after that
add_action( 'init', 'syntaxhighlighter_rust_regscript' );
 
// Tell SyntaxHighlighter Evolved about this new language/brush
add_filter( 'syntaxhighlighter_brushes', 'syntaxhighlighter_rust_addlang' );
 
// Register the brush file with WordPress
function syntaxhighlighter_rust_regscript() {
    wp_register_script( 'syntaxhighlighter-brush-rust', plugins_url( 'shBrushRust.js', __FILE__ ), array('syntaxhighlighter-core'), '1.2.3' );
}
 
// Filter SyntaxHighlighter Evolved's language array
function syntaxhighlighter_rust_addlang( $brushes ) {
    $brushes['rs'] = 'rust';
    $brushes['rust'] = 'rust';
 
    return $brushes;
}
 
?>