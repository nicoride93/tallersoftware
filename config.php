// connect to db

$user=getenv('dbuser');
$pass=getenv('dbpass');

$link = mysql_connect('localhost', $user, $pass);
if (!$link) {
    die('Not connected : ' . mysql_error());
}

if (! mysql_select_db('foo') ) {
    die ('Can\'t use foo : ' . mysql_error());
}
