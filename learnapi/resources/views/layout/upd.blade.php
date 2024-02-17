<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crude Update Page</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                use App\ncc;

                $status = "ok";

                if (!isset($_POST['check'])) {
                    $status = "0";
                }
                if ($status == "ok") {
                    $id = $_POST['id'];
                    $name = $_POST['name'];
                    $items = $_POST['items'];        
                    $ncc = ncc::find($id);
                        $ncc->name = $name;
                        $ncc->items = $items;
                        $ncc->save();
                        echo " updated successfully.";
                    } else {
                        echo "Error";
                    } 
                ?>
                <form method="post" action="">
                    @csrf
                    <input type="hidden" name="token" value="{{ csrf_token() }}">
                    <input type="hidden" name="check" value="0">
                    <input type="text" name="id" placeholder="id">
                    <input type="text" name="name" placeholder="name">
                    <input type="text" name="items" placeholder="items">
                    <button type="submit" name="submit">Update</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
