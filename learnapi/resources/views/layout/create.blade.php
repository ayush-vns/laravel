<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crude</title>
</head>
<?php
use App\ncc;

$name = "";
$items = "";
$status = "ok";

if (!isset($_POST['check'])) {
    $status = "0";
}

if ($status == "ok") {
    $name = $_POST['name'];
    $items = $_POST['items'];
    $ncc = new ncc();
    $ncc->name = $name;
    $ncc->items = $items;
    $ncc->save();
    echo "save";
} else {
    echo "error";
}
?>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="">
                  @csrf
                    <input type="hidden" name="token" value="{{csrf_token()}}">
                    <input type="hidden" name="check" value="0">
                    <input type="text" name="name" placeholder="name">
                    <input type="text" name="items" placeholder="item">
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
