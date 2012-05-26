<?php
setcookie('DemocracyTestCookie','foobar',time()+300,'/democracytest/','participatoryculture.org', 0);
setcookie('ExpiredTestCookie','foobar',1,'/democracytest/','participatoryculture.org', 0);
setcookie('BadPathTestCookie','foobar',time()+300,'/home/','participatoryculture.org', 0);
setcookie('BadDomainTestCookie','foobar',time()+300,'/democracytest/','topdownculture.org', 0);
setcookie('SecureTestCookie','foobar',time()+300,'/democracytest/','participatoryculture.org', 1);

?>
This is a Democracy test page. Human beings should never see this.<br/>
<?php
foreach($_COOKIE as $name => $value) {
  echo "$name:$value<br/>\n";
}
