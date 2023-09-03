<div class="cocntainer">
    <h2>Product list</h2>
    <table class="table table-bordered">
        <thread>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thread>
        <today>
            <?php
            require_once('../database/db_connection.php');

            $sql ="SELECT * FROM products";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['na  me'] . "</td>";
                    echo "<td>" . $row['price'] . "</td>";
                    echo "<td><img src'" . $row['image']. "' class='img-fluid' style='max-width: 100px;' alt='Product Image'></td";
                    echo "<td>
                            <from method='POST' action='DeleteProductProvice.php'  onesubmit='retrun confrim(\"Are you sure you want to delete this product?\")'>
                                <input type='hidden' name='product_id' value='" . $row['id'] . "'>
                                <button type='submit' class='btn btn-danger btn-sm'>Delete</button>
                            </from>
                        </td>";
                    echo "</tr>";
                }
            } else { 
                echo "<tr><td colspan='4>No products found</td></tr>";
            }

            mysqli_close($conn);
            ?>
        </tbody>
    </table>
</div>

<div class="container">
    <h2>Add Product</h2>
    <form method="POST" action="AddProductProvider.php" enctype='multipart/form-data'>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price" required>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control" id="image" name="image" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Product</button>
    </form>
</div>



