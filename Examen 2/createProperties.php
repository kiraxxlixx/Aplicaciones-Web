<?php
INCLUDE "../Proyecto/includes/headers.php";

REQUIRE "../Proyecto/includes/config/conect.php";

$db = connectdb();

$query_sells = "SELECT id, name FROM SELLS";
$sells_result = mysqli_query($db, $query_sells);

if (!$response) {
    die("Query Failed: " . mysqli_error($db));
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST["id"] ?? null;
    $tittle = $_POST["tittle"] ?? null;
    $price = $_POST["price"] ?? null;
    $image = $_POST["image"] ?? null; 
    $description = $_POST["description"] ?? null;
    $rooms = $_POST["rooms"] ?? null;
    $wc = $_POST["wc"] ?? null;
    $garage = $_POST["garage"] ?? null;
    $timestap = $_POST["timestap"] ?? null;
    $id_Sells = $_POST["id_sells"] ?? null;

    $checkSeller = "SELECT id FROM seller WHERE id = '$seller'";
    $result = mysqli_query($db, $checkSeller);

    if (mysqli_num_rows($result) > 0) {

    $query = "INSERT INTO PROPERTIES (title, price, image, description, rooms, wc, garage, timeStamp, id_Sells) VALUES ('$title', '$price', '$image', '$description', '$rooms', '$wc', '$garage', '$timeStamp', '$id_Sells')";

    $insert_response = mysqli_query($db, $query);

    if ($insert_response) {
        echo "Propiedad creada con éxito";
    } else {
        echo "Error al crear la propiedad: " . mysqli_error($db);
    }
    else {
        echo "El vendedor no existe. Por favor, introduzca un vendedor válido";
    }
} else {
    echo "Please fill in the form to create a property.";
 }
 }

?>

?>

<section>
    <h2>Formulario de Propiedades</h2>
    <div>
        <form action="createProperties.php" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>Completa todos los campos para crear una nueva propiedad</legend>
                <div>
                    <label for="title">Título</label>
                    <input type="text" id="title" name="title" placeholder="Título de la propiedad" required>
                </div>

                <div>
                    <label for="price">Precio</label>
                    <input type="number" id="price" name="price" placeholder="$11111111111" required>
                </div>

                <div>
                    <label for="image">Imagen</label>
                    <input type="file" id="image" name="image" required>
                </div>

                <div>
                    <label for="description">Descripción</label>
                    <textarea name="description" id="description" placeholder="Descripción de la propiedad" required></textarea>
                </div>

                <div>
                    <label for="rooms">Habitaciones</label>
                    <input type="number" id="rooms" name="rooms" required>
                </div>

                <div>
                    <label for="wc">Baños</label>
                    <input type="number" id="wc" name="wc" required>
                </div>

                <div>
                    <label for="garage">Garage</label>
                    <input type="number" id="garage" name="garage" required>
                </div>

                <div>
                    <label for="timeStamp">Fecha</label>
                    <input type="date" name="timeStamp" id="timeStamp" required>
                </div>

                <div>
                    <label for="id_Sells">Vendedor</label>
                    <select id="id_Sells" name="id_Sells" required>
                        <?php while ($seller = mysqli_fetch_assoc($sells_result)) : ?>
                            <option value="<?php echo $seller['id']; ?>"><?php echo $seller['name']; ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>

                <div>
                    <button type="submit">Crear nueva propiedad</button>
                </div>
            </fieldset>
        </form>
    </div>
</section>

<?php
INCLUDE "../Proyecto/includes/footer.php";
?>
