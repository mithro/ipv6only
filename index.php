<html>
  <body>

<?php 
include "analytics.php";
if (isset($analytics)) {
?>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', '<?php echo $analytics; ?>']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<?php } ?>

<div>
 <h1>Welcome!</h1>
 <p>
  This page is <b>only</b> avaliable over IPv6. 
 </p><p>
  Congratulations, on being IPv6 enabled.
 </p><p>
  Your address is <b style="text-color: red;"><?php echo getenv ("REMOTE_ADDR"); ?></b>.
 </p>
</div><div>
 <h1>Site API</h1>
 <p>
  There is an API of using this site to get your IP address:
  <ul>
   <li>
    Using in Bash Scripts, you can get a plain text response.
    <pre>
# wget -O- ipv6only.me/address.php || echo "No IPv6"
<?php echo getenv ("REMOTE_ADDR"); ?>
</pre>
   </li><li>
    Using in Web Pages via JSON API.
    <pre>
&lt;script&gt;
function yesIPv6(address) {
  alert(address);
}

function noIPv6() {
  alert('No IPv6 for you.');
}
&lt;/script&gt;
&lt;!-- yesIPv6 will be called with the IP6 address if they <b>are</b> IPv6 enabled. 
     noIPv6 will be called if they are <b>not</b> IPv6 enabled or there IPv6 routing is borked.
     We run this script in async mode, as the failure may take a long time if IPV6 routing is borked.
  --&gt;
&lt;script
  type="text/javascript"
  src="http://ipv6only.me/address.php?format=json&amp;jsonp=yesIPv6"
  onerror="noIPv6();"
  async="true"
&gt;
&lt;/script&gt;
</pre>
   </li>
  </ul>
 </p>
<div>
 <h1>Credits</h1>
 <p>
  Page created by <a href="http://blog.mithis.net/">Tim 'mithro' Ansell</a>. Code for this very simple website can be found at <a href="http://github.com/mithro/ipv6only.git">http://github.com/mithro/ipv6only.git</a> so you can deploy on your own domain if you want. If you send me an email at <a href="mailto:ipv6@mithis.com">ipv6@mithis.com</a> I'll add it to the bottom of this page.
 </p>
</div>
<div>
 <h1>Other Deployments</h1>
 <ul>
  <li>None known yet</li>
 </ul>
</div>
  </body>
</html>
