<?php
    require_once "db.php";

    function register_user($email, $password, $fullname, $phone, $address, $gender, $birthplace, $birthdate, $education, $major, $institute, $position, $company, $year, $twitter, $instagram, $linkedin, $line, $facebook){
        global $conn;

        $realPassword = $password;
        $password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users(email, password, fullname, phone, address, gender, birthplace, birthdate, education, major, institute, position, company, year, twitter, instagram, linkedin, line, facebook,verified_email) VALUES ($email, $password, $fullname, $phone, $address, $gender, $birthplace, $birthdate, $education, $major, $institute, $position, $company, $year, $twitter, $instagram, $linkedin, $line, $facebook,0)";
        $result = mysqli_query($conn, $sql);
        //prepare and bind
        // $stmt = $conn->prepare("insert into users(email, password, fullname, phone, address, gender, birthplace, birthdate, education, major, institute, position, company, year, twitter, instagram, linkedin, line, facebook) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        // $stmt->bind_param("sssssssssssssss", $email, $password, $fullname, $phone, $address, $gender, $birthplace, $birthdate, $education, $major, $institute, $position, $company, $year, $twitter, $instagram, $linkedin, $line, $facebook);
        // $stmt->execute();

        $subject = 'Konfirmasi Pendaftaran';
        $headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-type: text/html; charset=iso-8859-1';
        $headers[] = 'From: noreply@publictraining-indonesia.co.id';
        $headers[] = 'To: '. $email .'';
        $headers[] = 'Cc: fio.nat.valen@gmail.com, jeffrysaputra97@gmail.com';
        $message = '
        <html>
            <body>
                <div style="width:80%;margin:0 auto">
                    <div style="background:#006caa;color:white;text-align:center;padding:3px;margin-top:10px;margin-bottom:5px">
                        <h2>Public Training Indonesia</h2>
                    </div>

                    <div style="margin-bottom:10px">
                        <p>
                            Terimakasih anda sudah mendaftar sebagai member Public Training Indonesia. <br><br>
                            Berikut adalah keterangan akun anda: <br>
                            E-mail: '. $email .' <br>
                            Password: '. $realPassword .'<br>
                        </p>
                    </div>

                    <div>
                        Selamat belajar &amp; jangan lupa bahagia! <br>
                        <hr>
                        <p> Social-media Public Training Indonesia </p>
                        <a href="#" target="_blank">Facebook Public Training Indonesia</a>
                        <br>
                        <a href="#" target="_blank">Twitter Public Training</a>
                        <br>
                        <div class="yj6qo"></div>
                        <div class="adL"></div>
                    </div>
                    <div class="adL"></div>
                </div>
            </body>
        </html>';

        // if (mail($email, $subject, $message, implode("\r\n",$headers))) {
        //     echo 'Silakan cek email anda!';
        // } else {
        //     echo 'Pendaftaran gagal';
        // }
    }

    // function passwordGenerator(){
    //     $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    //     $pass = array();
    //     $alphaLength = strlen($alphabet) - 1;
    //
    //     for ($i=0; $i < 6; $i++) {
    //         $n = rand(0, $alphaLength);
    //         $pass[] = $alphabet[$n];
    //     }
    //
    //     return implode($pass);
    // }

    function check_email_availability($email){
        global $conn;

        $stmt = $conn->prepare("select * from users where email = ?");
        // print_r($stmt);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->num_rows == 0;
    }
    //
    // function check_username_availability($username){
    //     global $conn;
    //
    //     $stmt = $conn->prepare("select * from users where username = ?");
    //     // print_r($stmt);
    //     $stmt->bind_param("s", $username);
    //     $stmt->execute();
    //     $result = $stmt->get_result();
    //
    //     return $result->num_rows == 0;
    // }

    function check_user_data($email, $password){
        global $conn;

        //Pengamanan dari SQL Injection
        $email = mysqli_real_escape_string($conn, $email);
        $password = mysqli_real_escape_string($conn, $password);
        $password = password_hash($password, PASSWORD_DEFAULT);

        $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($conn, $query);
        $count_result = mysqli_num_rows($result);

        echo "<script>alert('$count_result');</script>";

        return $result;
    }
?>
