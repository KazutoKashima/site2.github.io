<html>
<header class="masthead clear">
<div class="centered">

  <div class="site-branding">
    <h1 class="site-title">Flexbox - Card Layout</h1>
  </div>
  <!-- .site-title -->
</div>
<!-- .centered -->
</header>
<!-- .masthead -->

<main class="main-area">

<div class="centered">

  <section class="cards">

    <article class="card">
      <a href="#">
        <figure class="thumbnail">
        <img src="http://placekitten.com/810/610" alt="meow">
        </figure>
        <div class="card-content">
          <h2>Whiskey</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum explicabo consequatur consectetur fugit molestias perferendis, sint error iste ut, facilis sunt natus optio dolor nesciunt laboriosam obcaecati corporis numquam.</p>
        </div>
        <!-- .card-content -->
      </a>
    </article>
    <!-- .card -->

    <article class="card">
      <a href="#">
        <figure class="thumbnail">
          <img src="http://placekitten.com/800/610" alt="meow">
        </figure>
        <div class="card-content">
          <h2>Fluffy</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum explicabo consequatur consectetur fugit molestias perferendis, sint error iste ut, facilis sunt natus optio dolor nesciunt laboriosam obcaecati corporis numquam?</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum explicabo consequatur consectetur fugit molestias perferendis, sint error iste ut, facilis sunt natus optio dolor nesciunt laboriosam obcaecati corporis numquam?</p>
        </div>
        <!-- .card-content -->
      </a>
    </article>
    <!-- .card -->

    <article class="card">
      <a href="#">
        <figure class="thumbnail">
          <img src="http://placekitten.com/816/610" alt="meow">
        </figure>
        <div class="card-content">
          <h2>Kitty</h2>
          <p>  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati recusandae expedita doloribus dicta cumque nostrum, autem eaque soluta atque voluptatem est et, laborum dignissimos error sequi non? Recusandae, aut alias.</p>
        </div>
        <!-- .card-content -->
      </a>
    </article>
    <!-- .card -->

    <article class="card">
      <a href="#">
        <figure class="thumbnail">
          <img src="http://placekitten.com/816/600" alt="meow">
        </figure>
        <div class="card-content">
          <h2>Patches</h2>
          <p>  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati recusandae expedita doloribus dicta cumque nostrum, autem eaque soluta atque voluptatem est et, laborum dignissimos error sequi non? Recusandae, aut alias.</p>
        </div>
        <!-- .card-content -->
      </a>
    </article>
    <!-- .card -->

    <article class="card">
      <a href="#">
        <figure class="thumbnail">
        <img src="http://placekitten.com/820/620" alt="meow">
        </figure>
        <div class="card-content">
          <h2>Duchess</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati recusandae expedita doloribus dicta cumque nostrum, autem eaque soluta atque voluptatem est et, laborum dignissimos error sequi non? Recusandae, aut alias.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati recusandae expedita doloribus dicta cumque nostrum, autem eaque soluta atque voluptatem est et, laborum dignissimos error sequi non? Recusandae, aut alias.</p>
        </div>
        <!-- .card-content -->
      </a>
    </article>
    <!-- .card -->

    <article class="card">
      <a href="#">
        <figure class="thumbnail">
        <img src="http://placekitten.com/810/610" alt="meow">
        </figure>
        <div class="card-content">
          <h2>Puchies</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati recusandae expedita doloribus dicta cumque nostrum, autem eaque soluta atque voluptatem est et, laborum dignissimos error sequi non? Recusandae, aut alias.</p>
        </div>
        <!-- .card-content -->
      </a>
    </article>
    <!-- .card -->

    <article class="card">
      <a href="#">
        <figure class="thumbnail">
        <img src="http://placekitten.com/808/608" alt="meow">
        </figure>
        <div class="card-content">
          <h2>Panchito</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati recusandae expedita doloribus dicta cumque nostrum, autem eaque soluta atque voluptatem est et, laborum dignissimos error sequi non? Recusandae, aut alias.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati recusandae expedita doloribus dicta cumque nostrum, autem eaque soluta atque voluptatem est et, laborum dignissimos error sequi non? Recusandae, aut alias.</p>
        </div>
        <!-- .card-content -->
      </a>
    </article>
    <!-- .card -->

  </section>
  <!-- .cards -->

</div>
<!-- .centered -->

<?php

$user_agent     =   $_SERVER['HTTP_USER_AGENT'];
// Getting OS Name
function getOS() { 

    global $user_agent;

    $os_platform    =   "Unknown OS Platform";

    $os_array       =   array(
                            '/windows nt 10/i'     =>  'Windows 10',
                            '/windows nt 6.3/i'     =>  'Windows 8.1',
                            '/windows nt 6.2/i'     =>  'Windows 8',
                            '/windows nt 6.1/i'     =>  'Windows 7',
                            '/windows nt 6.0/i'     =>  'Windows Vista',
                            '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                            '/windows nt 5.1/i'     =>  'Windows XP',
                            '/windows xp/i'         =>  'Windows XP',
                            '/windows nt 5.0/i'     =>  'Windows 2000',
                            '/windows me/i'         =>  'Windows ME',
                            '/win98/i'              =>  'Windows 98',
                            '/win95/i'              =>  'Windows 95',
                            '/win16/i'              =>  'Windows 3.11',
                            '/macintosh|mac os x/i' =>  'Mac OS X',
                            '/mac_powerpc/i'        =>  'Mac OS 9',
                            '/linux/i'              =>  'Linux',
							'/kalilinux/i'          =>  'KaliLinux',
                            '/ubuntu/i'             =>  'Ubuntu',
                            '/iphone/i'             =>  'iPhone',
                            '/ipod/i'               =>  'iPod',
                            '/ipad/i'               =>  'iPad',
                            '/android/i'            =>  'Android',
                            '/blackberry/i'         =>  'BlackBerry',
                            '/webos/i'              =>  'Mobile',
							'/Windows Phone/i'      =>  'Windows Phone'
                        );

    foreach ($os_array as $regex => $value) { 

        if (preg_match($regex, $user_agent)) {
            $os_platform    =   $value;
        }

    }   

    return $os_platform;

}
// END of Getting OS
//
// Get browser
function getBrowser() {

    global $user_agent;

    $browser        =   "Unknown Browser";

    $browser_array  =   array(
                            '/msie/i'       =>  'Internet Explorer',
                            '/firefox/i'    =>  'Firefox',
							'/Mozilla/i'	=>	'Mozila',
							'/Mozilla/5.0/i'=>	'Mozila',
                            '/safari/i'     =>  'Safari',
                            '/chrome/i'     =>  'Chrome',
                            '/edge/i'       =>  'Edge',
                            '/opera/i'      =>  'Opera',
							'/OPR/i'        =>  'Opera',
                            '/netscape/i'   =>  'Netscape',
                            '/maxthon/i'    =>  'Maxthon',
                            '/konqueror/i'  =>  'Konqueror',
							'/Bot/i'		=>	'BOT Browser',
							'/Valve Steam GameOverlay/i'  =>  'Steam',
                            '/mobile/i'     =>  'Handheld Browser'
                        );

    foreach ($browser_array as $regex => $value) { 

        if (preg_match($regex, $user_agent)) {
            $browser    =   $value;
        }

    }

    return $browser;

}
// END of getting browser


$user_os        =   getOS();
$user_browser   =   getBrowser();
// Comming soon part --- Maybe :D 
//$device_details =   "<strong>Browser: </strong>".$user_browser."<br /><strong>Operating System: </strong>".$user_os."";

// Getting visitor IP address
$ip = $_SERVER['REMOTE_ADDR'];
// Getting where visitor come
$site_refer = $_SERVER['HTTP_REFERER'];
	// If hes connected directly 
	if($site_refer == ""){
		$site = "dirrect connection";
	}
  // If he doesn't
	else{
		$site = $site_refer;
	}
  // Hide removed IP address
	$removed_ip = "192.168.0.252";   
	$removed_ip_country = "YOUR COUNTRY TAG FOR YOUR IP ↑"; //This u can leave how it is.
  
	if($ip == $removed_ip){ 
		$ip = "Removed"; 
		$country = $removed_ip_country;
	}
  //it will find info about IP address
	else{
		$details = json_decode(file_get_contents("http://ipinfo.io/{$ip}"));
		$country = $details->country;
	}
	// Writing in to txt file
 $myfile = file_put_contents('log.txt',date("Y-m-d - H:i:s - "). $country. " ". $ip." | ". $user_os. " | ". $user_browser. " | Come from site :". $site. " | user agent:" .$user_agent .PHP_EOL , FILE_APPEND | LOCK_EX);
fclose($myfile);
?>

</main>
</html>