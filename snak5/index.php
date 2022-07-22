<?php
 
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
	// array
	$teachers = $db['teachers'];
	$pms = $db['pm'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link rel="stylesheet" href="style.css">
	<title>Document</title>
	<style>
        .gray {
            width:200px;
            height: 400px;
            background-color: gray;
        }

        .green {
            width:200px;
            height: 400px;
            background-color: green;
        }
    </style>
</head>
<body>
    <?php for($i = 0; $i < count($teachers); $i++){  ?>
        <?php $thisteacher = $teachers[$i]; ?>
        <div class="green">
            <?php echo $thisteacher['name'];?>-
            <?php echo $thisteacher['lastname'];?>
         </div>
    <?php }?>
    <?php for($i = 0; $i < count($pms); $i++){  ?>
        <?php $students = $pms[$i]; ?>
        <div class="gray">
            <?php echo $students['name'];?>-
            <?php echo $students['lastname'];?>
         </div>
    <?php }?>
</body>
</html>