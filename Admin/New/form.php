
<?php 
    if (isset($_GET['error'])) {
            if ($_GET['error'] == 'emptyfields') {
                echo "<p> Fill in all Fields! </p>" ;
            }
            else if ($_GET['error'] == 'invalidname') {
                echo '<p> Invalid Username </p>' ;
            }
            else if ($_GET['error'] == 'invalidemail') {
                echo '<p> Invalid E-Mail </p>' ;
            }
        }
        else if (isset($_GET['signup'])) {
            if ($_GET['signup'] == 'success') {
            echo '<center> <h3> Success</h3> 
            </center>' ;
        }
    }
    ?>

            <form action="validate.php" method="POST">

                <div class="inputwrapper">
                    <label for="name" class="newline">Name</label>
                    <input type="text" name="name" id="name" placeholder="Enter Your Name" required="required" required pattern="\S+.*"/>
                </div>

                <div class="inputwrapper">
                    <label for="email" class="newline">Email</label>
                    <input type="email" name="email" placeholder="Enter Your Email" required="required" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{3,}$">
                </div>
    
</script>
                <button type="submit" name="signup-submit" class="submitbutton">Signup</button>

            </form>

        </div>