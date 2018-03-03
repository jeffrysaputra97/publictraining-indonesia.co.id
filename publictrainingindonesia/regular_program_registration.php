<?php
    require_once "core/init.php";

    global $conn;
    $email = $_SESSION['login_user']['email'];
    $program_id = $_SESSION['program']['program_id'];
    $sid = "";
    $zero = "";

    if (strpos($program_id, 'AC')) {
        $sid .= '2300';
    } elseif (strpos($program_id, 'HD')) {
        $sid .= '2200';
    } else {
        $sid .= '2100';
    }

    $sid .= '00';
    $sid .= substr(date('y'), 2);

    $query = "SELECT sid FROM regular_program_registration WHERE program_id = '$program_id'";
    $result = mysqli_query($conn, $query);
    $result = mysqli_num_rows($result) + 1;

    for ($i=1; $i <= (4 - $result); $i++) {
        $zero .= "0";
    }

    $sid .= $zero;
    $sid .= $result;

    $query = "INSERT INTO regular_program_registration(sid, email, program_id) VALUES('$sid', '$email', '$program_id')";

    if (mysqli_query($conn, $query)) {
        //konten email bisa diganti
        $subject = 'Konfirmasi Pendaftaran';
        $headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-type: text/html; charset=iso-8859-1';
        $headers[] = 'From: E-mail Konfirmasi <confirmation@example.com>';
        $headers[] = 'To: '. $email .'';
        $message = '
        <html>
            <body>
                <div style="width:80%;margin:0 auto">
                    <div style="background:#006caa;color:white;text-align:center;padding:3px;margin-top:10px;margin-bottom:5px">
                        <h2>Public Training Indonesia</h2>
                    </div>

                    <div style="margin-bottom:10px">
                        <p>
                            Terimakasih anda sudah mendaftar program '. $_SESSION['program']['program_name'] .'. <br><br>
                            Berikut adalah keterangan dari program tersebut: <br>
                            Program: '. $_SESSION['program']['program_name'] .' <br>
                            Gelombang: '. $_SESSION['program']['batch'] .' <br>
                            Tanggal Mulai: '. $_SESSION['program']['start_date'] .' <br>
                            Investasi: '. $_SESSION['program']['registration_fee'] .' <br>
                        </p>
                    </div>
                    <hr>
            </body>
        </html>';

        if (mail($email, $subject, $message, implode("\r\n",$headers))) {
            echo '<script>alert("Silakan cek email anda!");</script>';
            header('Location: jadwal_regular_program.php');
        } else {
            echo '<script>alert("Terjadi Kesalahan!");</script>';
        }
    } else {
        echo "<script>alert('Terjadi Kesalahan!');</script>";
    }
?>
