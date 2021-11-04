$conexion = pg_connect("host=ec2-52-203-74-38.compute-1.amazonaws.com dbname=d2evp3rfkka5lv user=xydqahwcyamonm password=017334b5bd70e17843cdce54b805e2dd5d8abeaab6e92152780e80bd0d64fd18");

$usuario = $_REQUEST['usuario'];
$contraseña = $_REQUEST['contraseña'];

$res = pg_query($conexion, "SELECT * FROM usuarios WHERE cedula= $usuario and password=$contraseña");