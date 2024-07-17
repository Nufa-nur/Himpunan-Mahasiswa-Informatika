<?php
session_start();
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HIMATIK UAA</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- <link rel="stylesheet" href="asset/output.css"> -->
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <link rel="icon" href="public/image/logokabinet.png">
    <script src="../assets/js/script.js" defer></script>
</head>

<body>
    <?php
    // include merupakan sebuah aktivitas untuk menyertakan atau menyisipkan suatu file lain kedalam file tersebut
    include "header.php";
    ?>
    <section class="flex items-center justify-center bg-gray-900 text-white min-h-screen">
        <h2 class="text-[2.2rem]">
            <?php
            $queryartikel = mysqli_query($conn, "SELECT * FROM artikel");

            while ($row_artikel = mysqli_fetch_assoc($queryartikel)) {
            ?>
                <a href="artikel_detail.php?id_artikel=<?= $row_artikel['id_artikel'] ?>">
                    <p><?= $row_artikel['judul']; ?></p>
                    <p><?= $row_artikel['content']; ?></p>
                </a>
            <?php
            }
            ?>

        </h2>
    </section>
    <?php
    include "footer.php";
    ?>
</body>

</html>