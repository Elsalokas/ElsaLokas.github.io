<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "ElsaLokas.github.io-main";
$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn){
    die("Koneksi ke database gagal:". mysqli_connect_error());
    echo "tes";

}
?>

<section id="blog>
    <h2>Blog</h2>
    <?php
$query = "SELCT * FROM blog";
$result = mysqli_query($conn, $query);

$no = 1;

if ($result) {
    while ($row = mysqli_fetch_assoc($result)){
        if ($no >=0) {
        ?>
    </article>

            <h3><?= $row["judul"] ?></h3>
            <p> <?= $row["deskripsi"] ?></p>
    </article>
    <?php }
        $no++;
        }
    }  else {
         echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }  ?> 
}


</section>