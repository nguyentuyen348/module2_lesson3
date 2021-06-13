<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
</style>


<body>
<form action="" method="get">
    Họ và Tên:<input type="text" name="name"><br>
    Năm sinh:<input type="text" name="age"><br>
    Địa chỉ:<input type="text" name="address"><br>
    Ảnh:<input type="text" name="img"><br>
    <button type="submit">gui</button>
</form>

<table>
    <caption><h1>Danh sách khách hàng</h1></caption>
    <thead>
    <tr>
        <th>name</th>
        <th>age</th>
        <th>address</th>
        <th>img</th>
    </tr>
    </thead>
    <tbody>
    <?php
    include 'Customer.php';
    include 'Arraylist.php';
    if ($_SERVER["REQUEST_METHOD"] == 'GET') {
    $customer = new Customer($_GET['name'], $_GET['age'], $_GET['address'], $_GET['img']);

    ?>
    <tr>
        <td><?php echo $customer->name; ?></td>
        <td><?php echo $customer->age; ?></td>
        <td><?php echo $customer->address; ?></td>
        <td><?php echo $customer->img; ?></td>
    </tr>
    </tbody>
</table>

<?php
    $filename = "scratch.json";
    $json = file_get_contents($filename);
    $json_data = json_decode($json);
    if (!$json_data) {
        $json_data = [];
    }
    array_push($json_data, $customer);
    $jsonData = json_encode($json_data);
    file_put_contents($filename, $jsonData);
}
?>



</body>
</html>




