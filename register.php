<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="row" style="margin-top:50px;">
                <div class="col-md"></div>
                <div class="col-md rounded bg-light" style="box-shadow: 4px 4px 5px -4px;padding:10px; text-align : center ">
    <form action="proses_daftar.php" method = "post">
    Masukkan Nama <br>
    <input type="text" name = "username"> <br>
    Kata Sandi <br>
    <input type="password" name = "password"> <br>
    Masukkan Ulang Kata Sandi <br>
    <input type="password" name = "confirm"> <br>
    Alamat <br>
    <input type="text" name = "alamat"> <br>
    Gender <br>
    <select name="gender" > 
        <option value="L">Laki Laki</option>
        <option value="P">Perempuan</option>
    </select>
    
    <button type="submit">Register</button>
    </form>
    </div>
                <div class="col-md"></div>
        </div>
</body>
</html>
