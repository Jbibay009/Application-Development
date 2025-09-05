<?php


$listings = 
[
    ['id' => '1','job_title' => 'PHP Developer','company' => 'IBM', 'email' => 'john@ibm.com', 'contact_no' => '09168457456', 'skills' => ['PHP', 'MySQL', 'Javascript']],
    ['id' => '2','job_title' => 'Web Designer','company' => 'AWS', 'email' => 'jane@aws.com', 'contact_no' => '09175597456', 'skills' => ['PhotoShop', 'Illustrator', 'CSS']],
    ['id' => '3','job_title' => 'Network Admin','company' => 'CSICO', 'email' => 'James@cisco.com', 'contact_no' => '09202224575', 'skills' => ['Database', 'CyberSecurity', 'Networking']]
];

$listings[] = ['id' => '4','job_title' => 'Graphic Artist','company' => 'Adobe', 'email' => 'princess@adobe.com', 'contact_no' => '09208456544', 'skills' => ['Photoshop', 'Bootstrap', 'Flutter']];

$output = $listings[1]['job_title']. ' '. $listings[1]['company']. ' '. $listings[1]['email'];

$NetworkAdmin = $listings[2];

$skill1 = $NetworkAdmin['skills'][0];
$skill2 = $NetworkAdmin['skills'][2];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title><?php echo 'Learn PHP from Scratch'; ?></title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold"><?= 'Learn PHP From Scratch' ?></h1>  <!-- shorthand method -->
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6">
            <!-- OutPuts -->
        <h2 class="text-2xl font-semibold mb-4">User Array: </h2>
            <pre><?= print_r($listings) ?></pre>
        <h2 class="text-2xl font-semibold mb-4">JOB Listings: </h2>
            <p class="text-x1"><?= $output ?></p>
            <p class="text-x1"><?= $skill1. " and ". $skill2 ?></p>
        </div>
    </div>
</body>

</html>