<!doctype html>
<html lang="en">
    <head>Weeks Claculator</head>
    <body>
        <form action="save.php" id="testForm" method="POST">

            <div class="form-group">
                <label for="days">Days</label>
                <input type="text" class="form-control" id="days" name="days" aria-describedby="days">
            </div>
            <div class="form-group">
                <label for="input2">Weeks and Days</label>
                <?php echo $string;?>
            </div>

            <button class="btn btn-primary submit-data">Enter</button>
        </form>
    </body>
</html>
<script>

    for(let i = 0; i < 3 ;i++){
        setTimeout(() => {
            console.log('--');
            console.log(i);           
        }, 100);
    }
</script>

