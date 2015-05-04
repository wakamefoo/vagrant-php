<?php
/*忘れてしまったこと

ターミナル上でのgithubの使い方(投稿、編集) 
githubディレクトリを作る　hub create(ただしgithubにないファイル上からhub crieateすると全部作ってくれる)



ぶらんちファイルの作り方、移動、編集

確認
コマンドの意味検索 control + h
dockerはvaglantの上位互換で、敷居が高いのでパス
vaglantを使って、virtualboxを起動させ、centosを使い、sshサーバーにつなぐ
zsh　bash？の上位互換　役割は、ソースコードをCPUが読み込めるように変換するやつ
*/

?>
<?php
$message = "こんにちは"

//以下なんで数字やtrue、nullがエラーになるかわからないです。　
$x = 5;
$y = 1.22;
$flag = true;
$n = null

ver_dump($message); 
ver_dump($x); 
ver_dump($y); 
ver_dump($flag); 
ver_dump($n); 
?>
<?php 
/*
同じく15とADMIN_EMAILにエラーが出てます。
*/
define("ADMIN_EMAIL","wakamefoo@gmail.com");
define("LIST_COUT",15);

echo ADMIN_EMAIL;
?>
<?php
/* #6 演算子を使ってみよう
演算メモ
$x++; == $x = $x + 1; 
$x +=5; == $x = $x +5;
*/
?>

<?php
/*
"" 変数とエスケープ文字を展開する
'' しない
*/
$name = "wakamefoo";
echo "こんにちは　$name";

$name = "wakamefoo";
echo 'こんにちは　$name';

$name = "wakamefoo";
echo "こんにちは\n\t\\$name";
/*改行 \n
　ﾀﾌﾞ\t
　ﾊﾞｯｸｼｭﾗｯｼｭ \\
 */
?>

