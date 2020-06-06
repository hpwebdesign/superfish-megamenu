<?php
$data['home'] = 'Home';
$data['alat_pertanian'] = array('Alat Pertanian', array('Berkebun', 'Hidroponik', 'Polybag', 'Selang Irigasi', 'Spare Part', 'Spryer'));
$data['benih'] = array(
    'Benih', 
        array(
            'Bayam', 
            'Blewah', 
            'Buncis', 
            array('Cabe', array('Cabe Keriting', 'Cabe Merah', 'Cabe Rawit')),
            'Daun Bawang',
            'Jagung', 
            'Jagung Manis',
            'Kacang Panjang',
            'Kangkung',
            'Kembang Kol',
            'Kol',
            'Labu', 
            'Melon',  
            'Mentimun',  
            'Oyong',
            'Pare', 
            'Pepaya', 
            'Sawi', 
            'Seledri',
            array('Semangka', array('Semangka Berbiji', 'Semangka Inul', 'Semangka Tanpa Biji', 'Semangka Tanpa Biji 1', 'Semangka Tanpa Biji 2', 'Semangka Tanpa Biji 3', 'Semangka Tanpa Biji 4', 'Semangka Tanpa Biji 5', 'Semangka Tanpa Biji 6', 'Semangka Tanpa Biji 7', 'Semangka Tanpa Biji 8', 'Semangka Tanpa Biji 9', 'Semangka Tanpa Biji 10')),
            'Terong',
            'Tomat',
            'Wortel'));
$data['pestisida'] = array('Pestisida', array('Bakterisida', 'Fungisida', 'Herbisida', 'Insektisida', 'Nematisida', 'Perekat', 'Rodentisida'));
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
        <ul class="nav-menu">
            <?php
            foreach ($data as $key => $values)
            {
                if (!is_array($values))
                {
                    echo "<li><a href='#'>" . $values . "</a></li>";
                }
                else
                {
                    echo "<li><a href='#'>" . $values[0] . "</a>";
                    for ($i = 0;$i < count($values[1]);$i++)
                    {
                        if (!is_array($values[1][$i]))
                        {
                            if ($i == 0)
                            {
                                echo "<ul>";
                            }
                            echo "<li><a href='#'>" . $values[1][$i] . "</a>";
                            if ($i % 10 == 0 && $i > 9)
                            {
                                echo "</ul><ul style='left:" . ($i / 10 * 192) . "px;'>";
                            }
                            if ($i == count($values[1]) - 1)
                            {
                                echo "</ul></li>";
                            }
                        }
                        else
                        {
                            echo "<li><a href='#'>" . $values[1][$i][0] . "</a><ul>";
                            for ($j = 0;$j < count($values[1][$i][1]);$j++)
                            {
                                if ($j % 10 == 0 && $j > 9)
                                {
                                    echo "</ul><ul style='left:" . ($j / 10 * 192 + 192) . "px;'>";
                                }
                                echo "<li><a href='#'>" . $values[1][$i][1][$j] . "</a></li>";
                                if ($j == count($values[1][$i][1]) - 1)
                                {
                                    echo "</ul></li>";
                                }
                            }
                        }
                    }

                }
            }
            ?>

        </ul>
    </div>
</body>
</html>