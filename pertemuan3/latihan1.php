<html>
    <body>
        <head>

        <style>

            .warna-row {
                background-color : rgb(70,75,80);
            }

            .warna-colom {
                background-color: rgb(100,50,20);
            }

        </style>

        </head>
        <table border="1" cellpadding="10" cellspacing="0">

        <?php
        
        for ($i = 1; $i <=3 ; $i++){
            echo "<tr>";

            for ($j = 1 ; $j <= 5; $j++){
                echo "<td>$i,$j</td>";
            }

            echo "</tr>";
        }

        ?>

        </table>

         <!-- atau menggunakan templating -->
        
         <table border="1" cellpadding="10" cellspacing="0">
             <?php for ($k=1; $k <= 5 ;  $k++) : ?>

                <?php if ($k % 2 == 1 ) : ?>
                    <tr>
                <?php else :?>
                    <tr class="warna-row">
                <?php endif?>

                    <?php for ($l = 1 ; $l<= 10; $l++) : ?>

                       <?php if ($l %2 == 0) :?>
                        <td class="warna-colom">         
                        <?php else : ?>       
                            <td style="background-color: black;">
                        <?php endif ?>
                        <?php echo "$k,$l" ?>
                        </td>
                    
                    <?php endfor ?>
                </tr>

             <?php endfor ?>
         </table>

    </body>
</html>