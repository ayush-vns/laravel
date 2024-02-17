<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crude</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
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
                    $ser = ncc::where('name', $name)->first();
                    
                    if ($ser == null) {
                        echo "Name not found";
                    } else {
                        $ser["status"] = "ok";
                        echo $ser;
                        // echo $ser["id"];
                        // echo $ser["name"];
                        // echo $ser["items"]; 
                        
                    }
                } else {
                    echo "error";
                }
                ?>
                <form method="post" action="">
                    @csrf
                    <input type="hidden" name="token" value="{{ csrf_token() }}">
                    <input type="hidden" name="check" value="0">
                    <input type="text" name="name" placeholder="name">
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
