<?php
    INCLUDE "../Proyecto/includes/headers.php";

    REQUIRE "../Proyecto/includes/config/conect.php";
    $db = connectdb(); 

    $name = $_POST["name"];
    $email = $_POS["email"];
    $phone = $_POST["phone"];

    $query = "insert into SELLS (name,email,phone) values('$name','$email','$phone');";

    $response = mysqli_query($db,$query);
    
    if ($response) {
        echo "Vendedor creado con exito";
    }else{
        echo "Error al crear al vendedor";
    }

?>

<section>
    <h2>Sellers Form</h2>
    <div>
        <form action="createSellers.php" method="post">
            <fieldset>
                <legend>Fill all fields to create a new seller</legend>
                <div>
                     <label for="name">NAME</label>
                    <input type="text" id="name" name="name" placeholder="Put your name">
                </div>

                <div>
                     <label for="email">EMAIL</label>
                     <input type="text" id="email" name="email" placeholder="Your email@gmail.com">
                </div>
                <div>
                     <label for="phone">PHONE</label>
                     <input type="text" id="phone" name="phone" placeholder="664 715 6350">
                </div>
                <div>
                    <button type="submit">Create a new seller</button>
                </div>
            </fieldset>
        </form>
    </div>


</section>

<?php
    INCLUDE "../Proyecto/includes/footer.php";
?>