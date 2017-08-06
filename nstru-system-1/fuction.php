<?php
	function status($status){
		switch ($status){
			case 1 : echo "<span class=\"label label-sm label-success\">" . "ผ่าน" . "</span>";break;
			case 2 : echo "<span class=\"label label-sm label-danger\">" . "ไม่ผ่าน" . "</span>";break;
			default : echo "<span class=\"label label-sm label-warning\">" . "รอดำเนินการ" . "</span>";break;
		}
	}

	function per($person){
		$i = 1;
		switch ($person) {
			case $i++:
				echo "สภานักศึกษา";
				break;
			case $i++:
				echo "องค์การนักศึกษา";
				break;
			case $i++:
				echo "พรรคฝ่ายค้าน";
				break;
			case $i++:
				echo "สโมสรนักศึกษา";
				break;
			case $i++:
				echo "ชมรมนักศึกษา";
				break;
		}
	}

	function pro1($a){
		$i = 1;
		switch ($a) {
			case $i++:
				echo "พัฒนาหลักศูตรและการเรียนการสอน";
				break;
			case $i++:
				echo "พัฒนาอาจารย์ / บุคลากร";
				break;
			case $i++:
				echo "ด้านคุณธรรมจริยธรรมและยุคลิกภาพ";
				break;
			case $i++:
				echo "ทำนุบำรุงศิลปวัฒนธรรม";
				break;
			case $i++:
				echo "บริการทางวิชาการ";
				break;
			case $i++:
				echo "อื่น ๆ";
				break;
		}
	}

	function pro2($b){
		$i = 1;
		switch ($b) {
			case $i++:
				echo "ความรู้";
				break;
			case $i++:
				echo "ทักษะการคิด";
				break;
			case $i++:
				echo "การพัฒนาคุณธรรมและจริยธรรม";
				break;
			case $i++:
				echo "ทักษะการวิเคราะห์และการสื่อสาร";
				break;
			case $i++:
				echo "ด้านคุณธรรมจริยธรรมและยุคลิกภาพ";
				break;
		}
	}

	function pro3($c){
		$i = 1;
		switch ($c) {
			case $i++:
				echo "มาก";
				break;
			case $i++:
				echo "ปานกลาง";
				break;
			case $i++:
				echo "น้อย";
				break;
		}
	}

?>