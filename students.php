<?php 
    include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Table</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white rounded-lg shadow-md">
            <thead>
                <tr class="bg-gray-200 text-gray-600 uppercase text-sm">
                    <th class="py-3 px-4 text-left">Student ID</th>
                    <th class="py-3 px-4 text-left">Name</th>
                    <th class="py-3 px-4 text-left">Class</th>
                    <th class="py-3 px-4 text-left">Actions</th>
                    <th class="py-3 px-4 text-left">
                        <a href="form.php" style="font-size: large;">+</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php 
                
                    $query="SELECT * FROM student";

                    $result = $connection -> query($query);

                    $htmlTable = "";

                    if($result){

                        $htmlTable .= " <tr class='border-b'>";
                        while($row = $result -> fetch_assoc()){
                            $htmlTable .= "<td class='py-3 px-4'>$row[id]</td>";
                            $htmlTable .= "<td class='py-3 px-4'>$row[name]</td>";
                            $htmlTable .= "<td class='py-3 px-4'>$row[class]</td>";
                            $htmlTable .= "
                            <td class='py-3 px-4'>
                                <a href='form.php?id=$row[id]' class='bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600'>Update</a>
                                <a href='crud.php?id=$row[id]' class='bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 ml-2'>Delete</a>
                            </td>
                            ";                        
                            $htmlTable .= "</tr>";
                        }

                        echo $htmlTable ;
                    }else {
                        echo $connection -> error;
                    }
                ?>
        </table>
    </div>
</body>
</html>
