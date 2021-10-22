<?php
session_start();
	if (isset($_POST['fID'])) {
		$id = (int)$_POST['fID'];
		$_SESSION['fID'] = $id;
	?>

		<select name="classID" >
        <?php
            foreach ($_SESSION['classID'] as $key => $value) {
                if (isset($_SESSION['fID']) && $_SESSION['fID'] == $value['maKhoa']) {  
        ?>
        <option value="<?php echo $value['maLop'];  ?>" <?php if (isset($_POST['btnAdd']) && $_POST['classID'] == $value['maLop']){echo 'selected = "selected"';} ?>>
            <?php echo $value['maLop']; ?>  
        </option>
        <?php
            }
            }
        ?>
    </select>
	<?php
	}

?>