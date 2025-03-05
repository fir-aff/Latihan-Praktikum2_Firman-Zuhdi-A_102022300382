<?php
    $nama = "Firman Zuhdi Affandi";
    $nim = "102022300382";
    $fakultas = "Fakultas Rekayasa Industri";
    $prodi = "S1 Sistem Informasi";
    $foto = "foto_1n1.jpg";

    $social_links = [
        ["name" => "X (Twitter)", "url" => "https://x.com/Firmzaf", "icon" => "https://img.icons8.com/?size=100&id=phOKFKYpe00C&format=png&color=000000"],
        ["name" => "GitHub", "url" => "https://github.com/fir-aff", "icon" => "https://img.icons8.com/?size=100&id=106562&format=png&color=000000"],
        ["name" => "Instagram", "url" => "https://www.instagram.com/fizuhaf/", "icon" => "https://img.icons8.com/?size=100&id=M486asakOqWV&format=png&color=000000"],
        ["name" => "Facebook", "url" => "https://www.facebook.com/firman.zuhdi.3/", "icon" => "https://img.icons8.com/?size=100&id=118467&format=png&color=000000"],
        ["name" => "LinkedIn", "url" => "www.linkedin.com/in/fi-zuh-aff", "icon" => "https://img.icons8.com/?size=100&id=8808&format=png&color=000000"],
    ];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mahasiswa</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }
        .profile-container {
            text-align: center;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .photo img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 3px solid #333;
        }
        .info {
            margin-top: 10px;
        }
        .info h2 {
            margin: 10px 0 5px;
            font-size: 1.5em;
        }
        .info p {
            font-size: 1em;
            color: #555;
        }
        .social-links {
            margin-top: 15px;
            display: flex;
            justify-content: center;
            gap: 15px;
        }
        .social-icon img {
            width: 36px;
            transition: transform 0.3s, color 0.3s;
        }
        .social-icon:hover img {
            transform: scale(1.2);
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <div class="photo">
            <img src="<?php echo $foto; ?>" alt="Foto Profil">
        </div>
        <div class="info">
            <h2><?php echo $nama; ?></h2>
            <p><?php echo "$nim | $fakultas | $prodi"; ?></p>
        </div>
        <div class="social-links">
            <?php foreach ($social_links as $link) : ?>
                <a href="<?php echo $link['url']; ?>" target="_blank" class="social-icon">
                    <img src="<?php echo $link['icon']; ?>" alt="<?php echo $link['name']; ?>">
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
