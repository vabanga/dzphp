<h3>Тесты</h3>

<?php
if(isset($_GET["fileid"])) {

	define(PATH_UPLOAD,'tests');
	$files = array();
	$k = 1;
	foreach (glob(PATH_UPLOAD."/*.json") as $filename) {
		$files[$k] = $filename;
		$k++;
	}
	if (file_exists($files[$_GET['fileid']])) {
		$cont = file_get_contents($files[$_GET['fileid']]);
		$tests = json_decode($cont,true);
		$v = [];
		foreach ($tests as $v){
			foreach ($v as $v1){
			}
		}
		?>
		<form action="" method="post">
			<fieldset>
			<legend><?= $v["title"] ?></legend>
				<label>
					<input type="radio" name="q1" value="10"><?php $v[1] ?>10
				</label>
				<label>
					<input type="radio" name="q1" value="100"><?php $v[2] ?>100
				</label>
				<label>
					<input type="radio" name="q1" value="1000"><?php $v[3] ?>1000
				</label>
				<label>
					<input type="radio" name="q1" value="10000"><?php $v[4] ?>10000
				</label>
				<?php
				if($_POST['q1']){
					if($_POST['q1'] == $v['right']){
						$nt = $_GET['name'];
						header("Location: http://dzphp/serf.php?&test=true&value=Зачёт&name=$nt");
					}else{
						$nf = $_GET['name'];
						header("Location: http://dzphp/serf.php?&test=false&value=Незачёт&name=$nf");
					}
				}
				?>
				<label>
					<?php echo $right; echo $nRight?>
				</label>
			</fieldset>
			<input type="submit" name="vop1" value="Ответить">
			<input type="submit" name="rTest" value="Назад">
			<?php
			if($_POST['rTest']){
				header('Location: index.php');
			}
			?>
		</form>
		<?php

	} else {
		header("HTTP/1.0 404 Not Found");
		echo '404 Not Found';
	}

}else{
	?>
	<p style="color:red">Неверные параметры</p>
	<?php
}
?>