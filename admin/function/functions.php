<?php 
	//koneksi database
	$conn = mysqli_connect("localhost","root","","pidanaumum");

	function query($query){
		global $conn;
		$result = mysqli_query($conn,$query);
		$rows = [] ;
		while($row = mysqli_fetch_assoc($result)){
			$rows[]=$row;
			
		}
		return $rows;
	}

	function tambah($data_email){
		include "phpmailer/classes/class.phpmailer.php";
		
		global $conn;
		
		$nama = htmlspecialchars($data_email["nama"]);
		$alamat = htmlspecialchars($data_email["alamat"]);
		$no_telp = htmlspecialchars($data_email["no_telp"]);
		$email = $data_email["email"];
		$pasal = htmlspecialchars($data_email["pasal"]);
		$tgl_berkasmasuk = $data_email["tgl_berkasmasuk"];
		$tgl_berakhirtahap_pertama = $data_email["tgl_berakhirtahap_pertama"];
		
		$isi_email_header="<p>Kepada Yth Saudara/Saudari\n <br>	
		<strong>";
		$isi_email_tengah="<br>\n</strong></p>
		<p>Pemberitahuan.<br>
		Tahap berkas I segera dikumpulkan.\n<br><br>
		<strong>";
		
		$isi_email_footer="\n\n</strong></p>
		<p>Demikian informasi dari kami\n\n</p>
		<p>
		<br><br>Kejaksaan Negeri Cilacap\n\n\n<br>
		</p>";
		$isi_email=$isi_email_header . strtoupper($nama) . $isi_email_tengah . $isi_email_footer;
		
		$isi_pesan = $isi_email;
		
		$mail = new PHPMailer; 
		$mail->IsSMTP();
		$mail->SMTPSecure = 'tls'; 
		$mail->Host = 'smtp.gmail.com'; //host masing2 provider email
		$mail->SMTPDebug = 0;
		$mail->Port = 587;
		$mail->SMTPAuth = true;
		$mail->Username = 'teskejaksaan123.ilacap@gmail.com'; //user email
		$mail->Password = 'ad.min00'; //password email 
		$mail->SetFrom('teskejaksaan123.ilacap@gmail.com',"Kejaksaan Negeri Cilacap"); //set email pengirim
		$mail->Subject = "Tahap Berkas I"; //subyek email
		$mail->AddAddress($email,$nama);  //tujuan email
		$mail->MsgHTML($isi_pesan);
		$mail->send();
		
		$query ="insert into tb_pengisianberkas (nama,alamat,no_telp,pasal,tgl_berkasmasuk,tgl_berakhirtahapI) VALUES 
				('$nama','$alamat','$no_telp','$pasal','$tgl_berkasmasuk','$tgl_berakhirtahap_pertama')";
		
		mysqli_query($conn,$query);
		
	}

	function ubah($data){

		global $conn;

		$id =$data["id"];
		$nama =htmlspecialchars($data["nama"]);
		$alamat =htmlspecialchars($data["alamat"]);
		$no_telp =htmlspecialchars($data["no_telp"]);
		$pasal  =htmlspecialchars($data["pasal"]);
		$tgl_berkasmasuk  =htmlspecialchars($data["tgl_berkasmasuk"]);
		$tgl_berakhirtahapI  =htmlspecialchars($data["tgl_berakhirtahapI"]);
		
		
			//insert data
		$query ="UPDATE tb_pengisianberkas SET
		
		nama   ='$nama',
		alamat   ='$alamat',
		no_telp ='$no_telp',
		pasal  ='$pasal',
		tgl_berkasmasuk ='$tgl_berkasmasuk',
		tgl_berakhirtahapI ='$tgl_berakhirtahapI',
		WHERE id = $id
		";
		mysqli_query($conn,$query);
		return mysqli_affected_rows($conn);
	}


	function tampil($data){

		global $conn;

		$id =$data["id"];
		$nama =htmlspecialchars($data["nama"]);
		$alamat =htmlspecialchars($data["alamat"]);
		$no_telp =htmlspecialchars($data["no_telp"]);
		$pasal  =htmlspecialchars($data["pasal"]);
		$tgl_berkasmasuk  =htmlspecialchars($data["tgl_berkasmasuk"]);
		$tgl_berakhirtahapI  =htmlspecialchars($data["tgl_berakhirtahapI"]);
		
		
			//insert data
		$query ="SELECT * FROM tb_pengisianberkas";
		mysqli_query($conn,$query);
		return mysqli_affected_rows($conn);
	}




	function hapus($id) {
		global $conn;
		mysqli_query($conn,"DELETE FROM tb_pengisianberkas WHERE id = $id");

		
		return mysqli_affected_rows($conn);
	}
?>
