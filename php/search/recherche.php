<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Recherche</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTb02YwHgTLZMvAZJ5yC32AwCAfkNUcf2eJ4g&usqp=CAU">
</head>
<header>
    <?php
    require 'search.php';
    ?>
</header>
<body>
<?php
// Affichage des résultats
while ($row = $stmt->fetch()) {
    echo '<p style="text-align: center;padding: 20px"><a class="info" href="element.php?id='.$row['id'].'">'.$row['titre'].'</a></p>';
}
?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $("#search").on("input", function() {
            var search = $(this).val();
            if (search.length >= 3) {
                $.ajax({
                    type: "POST",
                    url: "search.php",
                    data: { search: search },
                    success: function(response) {
                        $("#results").html(response);
                    }
                });
            } else {
                $("#results").empty();
            }
        });
    });
</script>
</body>
</html>