<?php
/*
Plugin Name: ajax module
Plugin URI: www.reviewlab.com
Description: test
Version: 0.1 
Author: Sketch Web
Author URI: www.reviewlab.com
License: This is not GPL 
*/


add_action( 'wp_ajax_action_revamptable', 'action_revamptable' );
add_action('wp_ajax_nopriv_action_revamptable', 'action_revamptable');

function action_revamptable()
{

?>
<table>
  <tr>
    <th>Company</th>
    <th>Contact</th>
    <th>Country</th>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
  </tr>
  <tr>
    <td>Centro comercial Moctezuma</td>
    <td>Francisco Chang</td>
    <td>Mexico</td>
  </tr>
  <tr>
    <td>Ernst Handel</td>
    <td>Roland Mendel</td>
    <td>Austria</td>
  </tr>
  <tr>
    <td>Island Trading</td>
    <td>Helen Bennett</td>
    <td>UK</td>
  </tr>
  <tr>
    <td>Laughing Bacchus Winecellars</td>
    <td>Yoshi Tannamuri</td>
    <td>Canada</td>
  </tr>
  <tr>
    <td>Magazzini Alimentari Riuniti</td>
    <td>Giovanni Rovelli</td>
    <td>Italy</td>
  </tr>
</table>

<?php
    
    
 die();
}










