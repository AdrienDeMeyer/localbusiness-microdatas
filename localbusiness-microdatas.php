<?php

/*
Plugin Name: localbusiness Microdatas
Plugin URI: https://www.adriendemeyer.com/
Description: Add local business microdatas
Version: 1.0
License: GPL
Author: Adrien De Meyer
Author URI: https://www.adriendemeyer.com
*/

add_action( 'admin_menu', 'adm_localbusiness_microdatas__menu' );
function adm_localbusiness_microdatas__menu() {
	add_options_page( 'localbusiness Microdatas', 'localbusiness Microdatas', 'manage_options', 'localbusiness-microdatas', 'adm_localbusiness_microdatas_settings_page');
}

function adm_localbusiness_microdatas_settings_page() { ?>

  <div class="wrap">

  <h2><?php _e( 'Localbusiness Microdatas Settings', 'localbusiness-microdatas' ); ?></h2>

  <?php
  if ( isset( $_POST['submit_data'] ) ) {
    if ( ! isset( $_POST['_wpnonce'] ) || ! wp_verify_nonce( $_POST['_wpnonce'], 'nonce_localbusiness_microdatas' ) ) {
       echo 'Sorry, your nonce did not verify.';
       exit;
    } else {
      update_option('_localbusiness_microdatas',$_POST['localbusiness_microdatas']);
      echo '<div id="message" class="updated">'.__( "Settings saved." ).'</div>';
    }
  }
  ?>


  <form method="post">

  <?php if ( function_exists( 'wp_nonce_field' ) ) wp_nonce_field( 'nonce_localbusiness_microdatas' ); ?>

  <div id="localbusiness-microdatas">
	<?php $localbusiness_microdatas = get_option('_localbusiness_microdatas');
print_r($localbusiness_microdatas);
	?>
    <table class="form-table">
      <tbody>
        <tr>
          <th>Name</th>
          <td><input type="text" class="regular-text" name="localbusiness_microdatas[name]" value="<?php echo isset($localbusiness_microdatas['name'])?$localbusiness_microdatas['name']:''; ?>" ></td>
				</tr>
				<tr>
					<th>Site Url</th>
					<td><input type="text" class="regular-text" name="localbusiness_microdatas[url]" value="<?php echo isset($localbusiness_microdatas['url'])?$localbusiness_microdatas['url']:''; ?>" ></td>
				</tr>
				<tr>
					<th>Description</th>
					<td><input type="text" class="regular-text" name="localbusiness_microdatas[desc]" value="<?php echo isset($localbusiness_microdatas['desc'])?$localbusiness_microdatas['desc']:''; ?>" ></td>
				</tr>
				<tr>
					<th>Brand</th>
					<td><input type="text" class="regular-text" name="localbusiness_microdatas[brand]" value="<?php echo isset($localbusiness_microdatas['brand'])?$localbusiness_microdatas['brand']:''; ?>" ></td>
				</tr>
				<tr>
					<th>Logo url</th>
					<td><input type="url" class="regular-text" name="localbusiness_microdatas[logo]" value="<?php echo isset($localbusiness_microdatas['logo'])?$localbusiness_microdatas['logo']:''; ?>" ></td>
				</tr>
				<tr>
					<th>Email</th>
					<td><input type="mail" class="regular-text" name="localbusiness_microdatas[email]" value="<?php echo isset($localbusiness_microdatas['email'])?$localbusiness_microdatas['email']:''; ?>" ></td>
				</tr>
				<tr>
					<th>Address Street</th>
					<td><input type="text" class="regular-text" name="localbusiness_microdatas[address_street]" value="<?php echo isset($localbusiness_microdatas['address_street'])?$localbusiness_microdatas['address_street']:''; ?>" ></td>
				</tr>
				<tr>
					<th>Address Locality</th>
					<td><input type="text" class="regular-text" name="localbusiness_microdatas[address_locality]" value="<?php echo isset($localbusiness_microdatas['address_locality'])?$localbusiness_microdatas['address_locality']:''; ?>" ></td>
				</tr>
				<tr>
					<th>Address Region</th>
					<td><input type="text" class="regular-text" name="localbusiness_microdatas[address_region]" value="<?php echo isset($localbusiness_microdatas['address_region'])?$localbusiness_microdatas['address_region']:''; ?>" ></td>
				</tr>
				<tr>
					<th>Address PostalCode</th>
					<td><input type="text" class="regular-text" name="localbusiness_microdatas[address_postalcode]" value="<?php echo isset($localbusiness_microdatas['address_postalcode'])?$localbusiness_microdatas['address_postalcode']:''; ?>" ></td>
				</tr>
				<tr>
					<th>Phone number</th>
					<td><input type="tel" class="regular-text" name="localbusiness_microdatas[phone]" value="<?php echo isset($localbusiness_microdatas['phone'])?$localbusiness_microdatas['phone']:''; ?>" ></td>
				</tr>
				<tr>
					<th>Twitter url</th>
					<td><input type="text" class="regular-text" name="localbusiness_microdatas[rs][twitter]" value="<?php echo isset($localbusiness_microdatas['rs']['twitter'])?$localbusiness_microdatas['rs']['twitter']:''; ?>" ></td>
				</tr>
				<tr>
					<th>Facebook url</th>
					<td><input type="text" class="regular-text" name="localbusiness_microdatas[rs][facebook]" value="<?php echo isset($localbusiness_microdatas['rs']['facebook'])?$localbusiness_microdatas['rs']['facebook']:''; ?>" ></td>
				</tr>
				<tr>
					<th>LinkedIn url</th>
					<td><input type="text" class="regular-text" name="localbusiness_microdatas[rs][linkedin]" value="<?php echo isset($localbusiness_microdatas['rs']['linkedin'])?$localbusiness_microdatas['rs']['linkedin']:''; ?>" ></td>
				</tr>
				<tr>
					<th>Google+ url</th>
					<td><input type="text" class="regular-text" name="localbusiness_microdatas[rs][google]" value="<?php echo isset($localbusiness_microdatas['rs']['google'])?$localbusiness_microdatas['rs']['google']:''; ?>" ></td>
				</tr>
				<tr>
					<th>Pinterest url</th>
					<td><input type="text" class="regular-text" name="localbusiness_microdatas[rs][pinterest]" value="<?php echo isset($localbusiness_microdatas['rs']['pinterest'])?$localbusiness_microdatas['rs']['pinterest']:''; ?>" ></td>
				</tr>
				<tr>
					<th>Flickr url</th>
					<td><input type="text" class="regular-text" name="localbusiness_microdatas[rs][flickr]" value="<?php echo isset($localbusiness_microdatas['rs']['flickr'])?$localbusiness_microdatas['rs']['flickr']:''; ?>" ></td>
				</tr>
      </tbody>
    </table>

  </div>

  <p class="submit">
    <input type="hidden" value="Y" name="submit_data">
    <input type="submit" class="button-primary" name="localbusiness_microdatas_submit" value="<?php _e( 'Update' ); ?>">
  </p>

  </form>

  </div>
<?php
}


function adm_microdata() {
	$localbusiness_microdatas = get_option('_localbusiness_microdatas');
	?>
	<script type="application/ld+json">
	{

	  "@context" : "http://schema.org",
	  "@type" : "LocalBusiness",
	  "name": "<?php echo $localbusiness_microdatas['name']; ?>",
	  "url" : "<?php echo $localbusiness_microdatas['url']; ?>",
	  "description" : "<?php echo $localbusiness_microdatas['desc']; ?>",
	  "brand" : "<?php echo $localbusiness_microdatas['brand']; ?>",
	  "logo" : "<?php echo $localbusiness_microdatas['logo']; ?>",
	  "email": "<?php echo $localbusiness_microdatas['email']; ?>",
	  "address": {
	    "@type": "PostalAddress",
	    "streetAddress": "<?php echo $localbusiness_microdatas['address_street']; ?>",
	    "addressLocality": "<?php echo $localbusiness_microdatas['address_locality']; ?>",
	    "addressRegion": "<?php echo $localbusiness_microdatas['address_region']; ?>",
	    "areaserved" : "EU",
	    "postalCode": "<?php echo $localbusiness_microdatas['address_postalcode']; ?>"
	  },
	  "contactPoint" : [
	    {
	      "@type" : "ContactPoint",
	      "telephone" : "<?php echo $localbusiness_microdatas['phone']; ?>",
	      "contactType" : "customer service",
	      "availableLanguage": {
	        "@type": "Language",
	        "name": "French"
	      }
	    }
	  ]
	}
	</script>
	<script type="application/ld+json">
	{
	  "@context" : "http://schema.org",
	  "@type" : "Organization",
	  "name" : "<?php echo $localbusiness_microdatas['name']; ?>",
	  "email": "<?php echo $localbusiness_microdatas['email']; ?>",
	  "logo" : "<?php echo $localbusiness_microdatas['logo']; ?>",
	  "url" : "<?php echo $localbusiness_microdatas['url']; ?>",
	  "sameAs" : [
			<?php
			$localbusiness_microdatas_rs = array_filter($localbusiness_microdatas['rs']);
			foreach ($localbusiness_microdatas_rs as $rs) {
						echo '"'.$rs.'"';

						if($rs != end($localbusiness_microdatas_rs))
							echo ','."\n\r\t\t\t";
			} ?>

	  ],
	  "contactPoint" : [
	    { "@type" : "ContactPoint",
	      "telephone" : "<?php echo $localbusiness_microdatas['phone']; ?>",
	      "contactType" : "customer service"
	    } ]
  }

	</script>
	<?php
}
add_action( 'wp_footer', 'adm_microdata' );
